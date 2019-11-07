<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width", initial-scale="1">
		<title>Instagram Tag Rankings</title>
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/codingBooster.css">
			<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>

	</head>
	<body>
		<style type="text/css">
			.jumbotron {
				margin-left: 50px;
				background-image: url('images/aaa.jpg');
				background-size: cover;
				text-shadow: black 0.2em 0.2em 0.2em;
				color: white;
			}
			blockquote {
				background: #f9f9f9;
				border-left: 10px solid #cccccc;
				margin: 1.5em 10px;
				padding: 0.5em 10px;
				quotes: "\201C""\201D""\2018""\2019";
			}
			blockquote:before {
				color: #cccccc;
				content: open-quote;
				font-size: 3em;
				line-height: 0.1em;
				margin-left: 0.8em;
				vertical-align: -0.4em;
			}
			blockquote:after {
				color: #cccccc;
				content: close-quote;
				font-size: 3em;
				line-height: 0.1em;
				margin-left: 0.25em;
				vertical-align: -0.4em;
			}
			th {
				background-color: #000000;
				color: white;
			}
			@import url('https://fonts.googleapis.com/css?family=Roboto:300');
			body{
			  margin: 0;
			  padding: 0;
			 font-family: 'Roboto', sans-serif !important;
			}
			section{
			  width: 100%;
			  height: 100vh;
			  -webkit-box-sizing: border-box;
			          box-sizing: border-box;
			          padding: 140px 0;
			}
			.card{
			  position: relative;
			  max-width: 300px;
			  height: auto;
			  background: linear-gradient(-45deg,#fe0847,#feae3f);
			  border-radius: 15px;
			  margin: 0 auto;

			  padding: 40px 20px;
			  -webkit-box-shadow: 0 10px 15px rgba(0,0,0,.1) ;
			          box-shadow: 0 10px 15px rgba(0,0,0,.1) ;
			-webkit-transition: .5s;
			transition: .5s;
			}
			.card:hover{
			  -webkit-transform: scale(1.1);
			          transform: scale(1.1);
			}
			.col-sm-4:nth-child(1) .card ,
			.col-sm-4:nth-child(1) .card .title .fa{
			background: linear-gradient(-45deg,#ffec61,#f321d7);

			}
			.col-sm-4:nth-child(2) .card,
			.col-sm-4:nth-child(2) .card .title .fa{
			background: linear-gradient(-45deg,#5ECFE8,#736EFE);

			}
			.col-sm-4:nth-child(3) .card,
			.col-sm-4:nth-child(3) .card .title .fa{
			background: linear-gradient(-45deg,#80FF72,#7EE8FA);

			}
			
			.card::before{
			  content: '';
			  position: absolute;
			  bottom: 0;
			  left: 0;
			  width: 100%;
			  height: 40%;
			  background: rgba(255, 255, 255, .1);
			z-index: 1;
			-webkit-transform: skewY(-5deg) scale(1.5);
			        transform: skewY(-5deg) scale(1.5);
			}
			.title .fa{
			  color:#fff;
			  font-size: 60px;
			  width: 100px;
			  height: 100px;
			  border-radius:  50%;
			  text-align: center;
			  line-height: 100px;
			  -webkit-box-shadow: 0 10px 10px rgba(0,0,0,.1) ;
			          box-shadow: 0 10px 10px rgba(0,0,0,.1) ;

			}
			.title h2 {
			  position: relative;
			  margin: 20px  0 0;
			  padding: 0;
			  color: #fff;
			  font-size: 28px;
			 z-index: 2;
			}
			.price,.option{
			  position: relative;
			  z-index: 2;
			}
			.price h4 {
			margin: 0;
			padding: 20px 0 ;
			color: #fff;
			font-size: 60px;
			}
			.option ul {
			  margin: 0;
			  padding: 0;

			}
			.option ul li {
			margin: 0 0 10px;
			padding: 0;
			list-style: none;
			color: #fff;
			font-size: 16px;
			}
			.card a {
			  position: relative;
			  z-index: 2;
			  background: #fff;
			  color : black;
			  width: 150px;
			  height: 40px;
			  line-height: 40px;
			  border-radius: 40px;
			  display: block;
			  text-align: center;
			  margin: 20px auto 0 ;
			  font-size: 16px;
			  cursor: pointer;
			  -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, .1);
			          box-shadow: 0 5px 10px rgba(0, 0, 0, .1);

			}
			.card a:hover{
			    text-decoration: none;
			}
		</style>
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
							<?
								if(isset($_POST['userID'])){
									$uid = $_POST['userID'];
									echo '<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
									aria-haspopup="true" aria-expanded="false">'.$uid.'님 환영합니다!<span class="caret"></span></a>';
								}
								else
																		echo '<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
									aria-haspopup="true" aria-expanded="false">접속하기<span class="caret"></span></a>';
							?>
							<ul class="dropdown-menu">
								<li><a href="loginForm.html">로그인</a></li>
								<li><a href="registerForm.html">회원가입</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="container">

			<div class="jumbotron"> 
				<h1 class="text-center">Instagram Trend Searcher</h1>
				<p class="text-center">인스타그램에서 쓰이는 태그들을 크롤링하여 현재 트렌드를 보여줍니다.</p>
				<p class="text-center"><a class="btn btn-primary btn-lg" href="instructor.html" role="button">찾아보기</a></p>
			</div>

		  <div class="container-fluid">
		    <div class="container">
		      <div class="row">
		        <div class="col-sm-4">
		          <div class="card text-center">
		            <div class="title">
		              <h2>패션</h2>
		            </div>
		            <a href="http://chpago.dothome.co.kr/phptest.php?instatag=코디">코디 </a>
		            <a href="http://chpago.dothome.co.kr/phptest.php?instatag=패션">패션 </a>
		            <a href="http://chpago.dothome.co.kr/phptest.php?instatag=공항패션">공항패션 </a>
		            <a href="http://chpago.dothome.co.kr/phptest.php?instatag=패션모델">패션모델 </a>
		            <a href="http://chpago.dothome.co.kr/phptest.php?instatag=여름패션">여름패션 </a>
		          </div>
		        </div>
		        <!-- END Col one -->
		        <div class="col-sm-4">
		          <div class="card text-center">
		            <div class="title">
		              <h2>음식</h2>
		            </div>
		            <a href="http://chpago.dothome.co.kr/phptest.php?instatag=음식">음식 </a>
		            <a href="http://chpago.dothome.co.kr/phptest.php?instatag=맛집">맛집 </a>
		            <a href="http://chpago.dothome.co.kr/phptest.php?instatag=먹방">먹방 </a>
		            <a href="http://chpago.dothome.co.kr/phptest.php?instatag=다이어트음식">다이어트음식 </a>
		            <a href="http://chpago.dothome.co.kr/phptest.php?instatag=중국음식">중국음식 </a>
		          </div>
		        </div>
		        <!-- END Col two -->
		        <div class="col-sm-4">
		          <div class="card text-center">
		            <div class="title">
		              <h2>육아</h2>
		            </div>
		            <a href="http://chpago.dothome.co.kr/phptest.php?instatag=육아">육아 </a>
		            <a href="http://chpago.dothome.co.kr/phptest.php?instatag=예쁜아기">예쁜아기 </a>
		            <a href="http://chpago.dothome.co.kr/phptest.php?instatag=육아일기">육아일기 </a>
		            <a href="http://chpago.dothome.co.kr/phptest.php?instatag=아기">아기 </a>
		            <a href="http://chpago.dothome.co.kr/phptest.php?instatag=돌잔치">돌잔치 </a>
		          </div>
		        </div>
		        <!-- END Col three -->
		      </div>
		      <br><br>
		      <div class="row">
		        <div class="col-sm-4">
		          <div class="card text-center">
		            <div class="title">
		              <h2>여행</h2>
		            </div>
		            <a href="http://chpago.dothome.co.kr/phptest.php?instatag=여행">여행 </a>
		            <a href="http://chpago.dothome.co.kr/phptest.php?instatag=여행가방">여행가방 </a>
		            <a href="http://chpago.dothome.co.kr/phptest.php?instatag=제주여행">제주여행 </a>
		            <a href="http://chpago.dothome.co.kr/phptest.php?instatag=가족여행">가족여행 </a>
		            <a href="http://chpago.dothome.co.kr/phptest.php?instatag=신라호텔">신라호텔 </a>
		          </div>
		        </div>
		        <!-- END Col four -->
		        <div class="col-sm-4">
		          <div class="card text-center">
		            <div class="title">
		              <h2>애완</h2>
		            </div>
		            <a href="http://chpago.dothome.co.kr/phptest.php?instatag=반려견">반려견 </a>
		            <a href="http://chpago.dothome.co.kr/phptest.php?instatag=강아지">강아지 </a>
		            <a href="http://chpago.dothome.co.kr/phptest.php?instatag=고양이">고양이 </a>
		            <a href="http://chpago.dothome.co.kr/phptest.php?instatag=집사">집사 </a>
		            <a href="http://chpago.dothome.co.kr/phptest.php?instatag=애견카페">애견카페 </a>
		          </div>
		        </div>
		        <!-- END Col five -->
		        <div class="col-sm-4">
		          <div class="card text-center">
		            <div class="title">
		              <h2>지역</h2>
		            </div>
		            <a href="http://chpago.dothome.co.kr/phptest.php?instatag=서울">서울 </a>
		            <a href="http://chpago.dothome.co.kr/phptest.php?instatag=부산">부산 </a>
		            <a href="http://chpago.dothome.co.kr/phptest.php?instatag=대구">대구 </a>
		            <a href="http://chpago.dothome.co.kr/phptest.php?instatag=제주">제주 </a>
		            <a href="http://chpago.dothome.co.kr/phptest.php?instatag=광주">광주 </a>
		          </div>
		        </div>
		        <!-- END Col six -->
		      </div>
		    </div>
		  </div>
		</div>

		<br><br>

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
							<a href="https://www.facebook.com" class="list-group-item">페이스북</a>
							<a href="https://www.youtube.com" class="list-group-item">유튜브</a>
							<a href="https://www.naver.com" class="list-group-item">네이버</a>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<div class="row">
			<div class="modal" id="modal" tabindex="-1">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">

							<button class="close" data-dismiss="modal">&times;</button>	
						</div>
						<div class="modal-body" style="text-align: center;">

							<img src="images/bbb.png" id="imagepreview" style="width: 256px; height: 256px;">
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.js"></script>
	<script src="js/main.js"></script>
	</body>
</html>