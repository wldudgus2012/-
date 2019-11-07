    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width", initial-scale="1">
        <title>Instagram Tag Rankings</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/codingBooster.css">
        <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    </head>
     <style>
            html,
            body {
                height: 100%;
                width: 100%;
                margin: 0;
                padding: 0;
            }
     
            #myChart {
                height: 100%;
                width: 100%;
                min-height: 150px;
            }
     
            .zc-ref {
                display: none;
            }
     
            zing-grid[loading] {
                height: 800px;
            }

            div.cloud {

            }

            div.gtrend {
                padding-top: 400px;
            }

            div.gtrendquery {

            }

            div.news {
                padding-bottom: 200px;
            }
        </style>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" 
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">인스타태그</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">소개<span class="sr-=only"></span></a></li>
                        <li><a href="instructor.html">랭킹</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">상세정보<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="lecture.html?lectureName=C">1</a></li>
                                <li><a href="lecture.html?lectureName=Java">2</a></li>
                                <li><a href="lecture.html?lectureName=Android">3</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="navbar-form navbar-left" action="/phptest.php">
                        <div class="form-group">
                            <input type="text" name="instatag" class="form-control" placeholder="내용을 입력하세요.">
                        </div>
                        <button type="submit" class="btn btn-default">검색</button>
                    </form>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">접속하기<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="lecture.html?lectureName=C">1</a></li>
                                <li><a href="lecture.html?lectureName=Java">2</a></li>
                                <li><a href="lecture.html?lectureName=Android">3</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <?
        $output ='';
        if(isset($_GET['instatag'])) {
            $tagname = $_GET['instatag'];
        }
        else
            $tagname = '패션';

            $con = mysql_connect("localhost","chpago","test124!") or die("MYSQL Connection Error........");

            $db = mysql_select_db("chpago",$con) or die ("MYSQL DB ERROR");

            mysql_set_charset('utf8',$con);

            $sql = "select tag,cnt from ". $tagname ." order by cnt desc";

             $result = mysql_query($sql,$con);

             if($result) { //쿼리문이 정상적으로 수행시 실행

             }
             else
             {
                $tagname = '패션';

                $con = mysql_connect("localhost","chpago","test1234") or die("MYSQL Connection Error........");

                $db = mysql_select_db("chpago",$con) or die ("MYSQL DB ERROR");

                mysql_set_charset('utf8',$con);

                $sql = "select tag,cnt from ". $tagname ." order by cnt desc";

                 $result = mysql_query($sql,$con);
             }
        ?>
        <?
            $current_member = '2017년 날강두 축구 남자';
        ?>

        <?
  $client_id = "iY3vgRxYANnMZvm0lTAy"; 
  $client_secret = "wlCBuYKS9X";
 
  $encText = urlencode($tagname); 
 

  $url = "https://openapi.naver.com/v1/search/news.json?query=".$encText;
 
  $is_post = false;
 
  $ch = curl_init(); 

  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_POST, $is_post);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
  $headers = array();
  $headers[] = "X-Naver-Client-Id: ".$client_id;
  $headers[] = "X-Naver-Client-Secret: ".$client_secret;
 
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
 

  $response = curl_exec ($ch);
  $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
 
  curl_close ($ch);
  if($status_code == 200) { 

  }
  
  else {
    echo "Error 내용: ".$response;
  }
 
  ?>

        <div class="cloud">
            <div class="col-xs-7">
                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;워드 클라우드 #<?echo $tagname;?>                        
                <div id="myChart"></div>
                    <script>
                        ZC.LICENSE = ["b55b025e438fa8a98e32482b5f768ff5"];
                       var myConfig = {
            "graphset": [{
                "type": "wordcloud",
                "options": {
                    "style": {
                        "tooltip": {
                            visible: true,
                            text: '%text: %hits'
                        }
                    },
                    "words": [
                        <?
                            $invalid_words = array('먹스타그램','맛스타그램','좋아요','좋아요반사','맞팔','팔로우','일상스타그램','멍스타그램','인스타그램','선팔','소통','푸드스타그램','옷스타그램','얼스타그램','멋스타그램','ootd','패션스타그램','여행스타그램','좋아요','다이어트','다이어트식단','일상','딸스타그램','아들스타그램','아들그램','육아스타그램','육아그램','맘스타그램','육아소통','daily','instalike','야경스타그램','풍경스타그램','오오티디','데일리','인스타','좋반','instadaily','f4f','선팔하면맞팔','셀피','selfie','인친','셀스타그램','패셔너블','패션피플','foodstagram','instafood','foodporn','follow','JMT','food','foodie','쿡스타그램','먹스타','맛스타','애스타그램','인스타베이비','육아소통환영','베이비스타그램','날씨요정누구세요?','맞팔해요','견스타그램','독스타그램','댕댕이스타그램','강아지그램','petstagram','냥스타그램','고양이스타그램','음식스타그램','아비시니안','abizzang','catstagram','?','like4likes','fff','selfi','셀스타','셀기꾼','좋아요테러','like','데일리그램','l4l','00','selca','likeforfollow','셀카','instagood','02','instamood','소통해요','팔로우늘리기','18','데일리룩','........','럽스타그램','맞팔환영','친스타그램','댓글','선팔맞팔','instagram','jmt','mukbang','존맛탱','인친환영','Food','chinesefood','baby','작곡가LUCY','LUCY','작곡가루씨','루씨','생후1281일','생후396일','니드썸레스트♡호야','네파키즈안전지킴이3기','dogstagram','??','?..','윽내심장?간식통','댕댕이그램','개스타그램','like4like','작업대출하는곳','작업대출업체','급전','작업대출안전한곳','lfl','최저가보장','먹방스타그램','맛있다그램','맞팔선팔환영','followme','먹방','맛집','68개월아가');
                            $numa = 1;
                            $output ='';
                            $check = 0;
                            if($result) {
                                if (mysql_num_rows($result) > 0)
                                {
                                    while($row = mysql_fetch_array($result)) {
                                        if ($numa > 30)
                                            break;

                                        if (!strcmp($row["tag"], $tagname))
                                        {
                                            //$numa++;
                                            continue;
                                        }

                                        if (!strcmp('제주', $tagname))
                                        {
                                            if(!strcmp($row['tag'], '제주도'))
                                            {
                                                //$numa++;
                                                continue;
                                            }
                                        }

                                        foreach($invalid_words as $item)
                                        {
                                            if (!strcmp($item, $row['tag']))
                                                $check = 1;
                                        }

                                        if ($check == 1)
                                        {
                                            $check = 0;
                                            continue;
                                        }
                                        $tagcnt = (int)$row["cnt"];

                                        echo '
                                            {
                                                "text": "'.$row["tag"].'",
                                                "count": "'.$row["cnt"].'"
                                            },
                                        ';

                                        $numa++;
                                    }
                                }
                            }

                        ?>
                    ]
                }
            }]
        };
 
        zingchart.render({
            id: 'myChart',
            data: myConfig,
            height: 400,
            width: '100%'
        });
    </script>
                        </div>
                    </div>
                </div>
            </div>

        <div class="gtrendquery">
            <div class="col-xs-4">
                <div class="embed-responsive embed-responsive-16by9">
                    <script type="text/javascript" src="https://ssl.gstatic.com/trends_nrtr/1845_RC03/embed_loader.js"></script>
                    <script type="text/javascript">
                        var foo = <?echo '"'.$tagname.'"';?>;
                        trends.embed.renderExploreWidget("RELATED_QUERIES", {"comparisonItem":[{"keyword":foo,"geo":"KR","time":"today 12-m"}],"category":0,"property":""}, {"exploreQuery":"q=%EC%B6%95%EA%B5%AC&geo=KR&date=today 12-m","guestPath":"https://trends.google.co.kr:443/trends/embed/"});
                    </script> 
                </div> 
            </div> 
        </div> 

        <hr>

    <div class="gtrend">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                       <div class="panel-body">
                             <div class="embed-responsive embed-responsive-16by9">
                                 <script type="text/javascript" src="https://ssl.gstatic.com/trends_nrtr/1845_RC03/embed_loader.js">
                                 </script>
                                 <script type="text/javascript">
                                  trends.embed.renderExploreWidget("TIMESERIES", {"comparisonItem":[{"keyword":"<?echo $tagname;?>","geo":"KR","time":"today 12-m"}],"category":0,"property":""}, {"exploreQuery":"q=%EB%A7%B9%EA%B5%AC&geo=KR&date=today 12-m","guestPath":"https://trends.google.co.kr:443/trends/embed/"});
                                  </script>
                             </div>
                        </div>
                </div>
            </div> 
        </div>
    </div>

        <?
            $result = json_decode($response, true);
        ?>

        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                &nbsp;&nbsp;뉴스 검색 결과
                            </h4>
                        </div>
                        <div class="panel-body">
                        </div>
                        <table class="table">
                            <thead>
                            </thead>
                            <tbody>
                                <tr>
                                <?
                                    $newscnt = 0;
                                    while($newscnt < 5) {
                                        echo '<a href="'.$result[items][$newscnt][link].'"><font size="3"><b>'.$result[items][$newscnt][title].'</b></font></a><br>';
                                        echo $result[items][$newscnt][description].'<br>';
                                        echo '<font size="1.4em" color="#BDBDBD">'.$result[items][$newscnt][pubDate].'</font><br>';
                                        echo '<br>';

                                        $newscnt++;
                                    }
                                ?>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <br>

        <footer style="background-color: #000000; color: #ffffff">
            <div class="container">
                <br>
                <div class="row">
                    <div class="col-sm-2" style="text-align: center;"><h5>Copyright &copy; 2019</h5><h5><br>지영현(YoungHyun Ji)<br><br>고경수(Kyungsoo Go)</h5></div>
                    <div class="col-sm-6"></div>
                    <div class="col-sm-2"><h4 style="text-align: center;">내비게이션</h4>
                        <div class="list-group">
                            <a href="index.php" class="list-group-item">소개</a>
                            <a href="insturctor.html" class="list-group-item">랭킹</a>
                            <a href="lecture.html" class="list-group-item">상세정보</a>
                        </div>
                    </div>
                    <div class="col-sm-2"><h4 style="text-align: center;">SNS</h4>
                        <div class="list-group">
                            <a href="https://www.facebook.com/" class="list-group-item">페이스북</a>
                            <a href="https://www.youtube.com" class="list-group-item">유튜브</a>
                            <a href="https://www.naver.com" class="list-group-item">네이버</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="js/bootstrap.js"></script>
    </body>
    </html>

