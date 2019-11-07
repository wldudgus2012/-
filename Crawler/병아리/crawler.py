from inscrawler import InsCrawler
import argparse
from multiprocessing import Process

def usage():
    return '''
        python crawler.py [tag]
    '''

if __name__ == '__main__':
    index = 1
    parser = argparse.ArgumentParser(description='Instagram Explore Crawler',
                                     usage=usage())

    parser.add_argument('-n', '--number',
                        type=int,
                        default=100,
                        help='number of posts to crawling')
    args = parser.parse_args()

    ins_crawler = InsCrawler(has_screen=True)
    ins_crawler.get_explorePosts1(maximum=args.number, index=index)


