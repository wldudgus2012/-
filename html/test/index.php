<?
   include "./head.php";
?>
<div class="index">
  <div class="containers">
    <div class="containers-top"></div>
    <div id="result"></div>
      <div class="row">
        <div class="col-sm-6 col-md-6">
          <div class="chart-wrap">
            <div class="chart-title"><span class="hash_keyword">연관 해쉬태그 언급량</span></div>
              <div>
                <div id="tag_graph_box">
                </div>
              </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-6">
            <div class="chart-wrap">
              <div class="chart-title"><span class="hash_keyword">테스트 박스</span></div>
          </div>
        </div>
    </div>
    <div class="row">
      <div class="col-sm-12 col-md-12">
        <div class="chart-wrap">
          <div class="chart-title"><span class="hash_keyword">태그 검색량 추이</span></div>
            <div class="bubbleChart"/>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
<?php include "./tail.php" ?>
