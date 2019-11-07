import traceback
import time
import re
from .exceptions import RetryException
from .browser import Browser
from .utils import retry
import time
import os
import glob
import pymysql


class Logging(object):
    PREFIX = 'instagram-crawler'

    def __init__(self):
        try:
            timestamp  = int(time.time())
            self.cleanup(timestamp)
            self.logger = open('/tmp/%s-%s.log' % (Logging.PREFIX, timestamp), 'w')
            self.log_disable = False
        except:
            self.log_disable = True

    def cleanup(self, timestamp):
        days = 86400 * 7
        days_ago_log = '/tmp/%s-%s.log' % (Logging.PREFIX, timestamp - days)
        for log in glob.glob("/tmp/instagram-crawler-*.log"):
            if log < days_ago_log:
                os.remove(log)

    def log(self, msg):
        if self.log_disable: return

        self.logger.write(msg + '\n')
        self.logger.flush()

    def __del__(self):
        if self.log_disable: return
        self.logger.close()


class InsCrawler(Logging):
    URL = 'https://www.instagram.com'
    RETRY_LIMIT = 10
    def __init__(self, has_screen=False):
        super(InsCrawler, self).__init__()
        self.browser = Browser(has_screen)
        self.page_height = 0

    def _dismiss_login_prompt(self):
        ele_login = self.browser.find_one('.Ls00D .Szr5J')
        if ele_login:
            ele_login.click()

    def login(self):
        browser = self.browser
        url = '%s/accounts/login/' % (InsCrawler.URL)
        browser.get(url)
        u_input = browser.find_one('input[name="username"]')   #인스타로그인
        u_input.send_keys("key1004dd")
        p_input = browser.find_one('input[name="password"]')        #인스타로그인
        p_input.send_keys("qkow1040!@")

        login_btn = browser.find_one('.L3NKy') #인스타로그인
        login_btn.click()

        @retry()
        def check_login():
            if browser.find_one('input[name="username"]'):
                raise RetryException()

        check_login()

    def create_db1(self):
        #print("create DB")
        crawling = pymysql.connect(host = 'localhost', user = 'root', password = '!!Csks5603@',
                                    db = 'test', charset = 'utf8mb4')
        try:
            with crawling.cursor() as cursor:
                sql = '''
                    CREATE TABLE IF NOT EXISTS summer_t(
                        tagnum  bigint auto_increment,
                        tag     VARCHAR(50) UNIQUE,
                        cnt     bigint,

                        PRIMARY KEY(tagnum)
                    )ENGINE=InnoDB DEFAULT CHARSET = utf8mb4
                '''
                cursor.execute(sql)
                crawling.commit()
        finally:
            crawling.close()

    def insert_db1(self, data):
        crawling = pymysql.connect(host = 'localhost', user = 'root', password = '!!Csks5603@',
                                    db = 'test', charset = 'utf8mb4')
        try:
            with crawling.cursor() as cursor:
                sql = '''
                    INSERT INTO summer_t(tag, cnt) VALUES(%s, 1)
                    ON DUPLICATE KEY UPDATE cnt = cnt + 1
                '''
                cursor.execute(sql, data)
                crawling.commit()
        finally:
            crawling.close()

    def get_explorePosts1(self, maximum, index = 1):
        @retry()
        def check_next_post(cur_key):
            datetime = browser.find_one(".eo2As .c-Yi7")

            if datetime is None:
                raise RetryException()

            next_key = datetime.get_attribute("href")
            if (cur_key == next_key):
                raise RetryException()

        self.login()
        browser = self.browser
        tagName = "여름"
        url = '%s/%s/%s' % (InsCrawler.URL, "explore/tags", tagName)
        browser.get(url)
        post1 = browser.find_one('.v1Nh3 a')
        post1.click()
        cur_key = None

        for _ in range(0, maximum):
            try:
                check_next_post(cur_key)

                datetime = browser.find_one(".eo2As .c-Yi7")
                cur_key = datetime.get_attribute("href")
                self.create_db1()
                print("%d" % index)
                index += 1

            except RetryException:
                break

            except Exception:
                traceback.print_exc()

            ele_comments = browser.find_one(".eo2As .gElp9")
            comment = browser.find_one("span", ele_comments).text
            if not comment:
                pass
            regex = re.compile(r"#(\w+)")
            hashtags = regex.findall(comment)
            if hashtags:
                for tag in hashtags:
                    try:
                        self.insert_db1(tag)
                    except pymysql.err.DataError:
                        pass

            left_arrow = browser.find_one('.HBoOv')
            if left_arrow:
                left_arrow.click()
