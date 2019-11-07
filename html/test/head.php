<?php
 include "./head.sub.php";
?>

<body>

  <header>
	<div class="navbar-wrap">
    <div class="containers">
      <div class="navbar-top">
        <div class="navbar-header">
          <a href="" class="logo"><img src="http://some.co.kr/images/logo.png"></a>
          <div class="search-box">
            <form class="form-group" onsubmit="return false">
              <input class="search" placeholder="키워드를 입력해 주세요"  id="search_keyword" onkeydown='if(event.keyCode==13){searchKeyword();}' />
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="navbar-bottom">
      <div class="containers">
        <ul>
        </ul>
      </div>
	</div>
</header>
