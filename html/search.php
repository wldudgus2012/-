<?php

//최종적으로 db에서 가져온 데이터를 가공한 결과 값을 담을 변수
$output = '';

//db연결
$con = mysql_connect("localhost","chpago","test1234") or die("MYSQL Connection Error........");
$db = mysql_select_db("chpago",$con) or die ("MYSQL DB ERROR");
mysql_set_charset('utf8',$con);

$tag_remove = "'맞팔','좋아요','셀카','일상','소통','선팔','팔로우','데일리','좋아요반사'";

//ajax로 넘긴 데이터 값
if(isset($_POST['action'])) {

  $tagname = $_POST['action'];

$sql = "select tag,cnt,
        round(cnt/(select max(cnt) from ". $tagname ." where tag not in (".$tag_remove.") order by cnt desc)*100,0) as persent
        from ". $tagname ." where tag not in(".$tag_remove.") order by cnt desc limit 10";

$result = mysql_query($sql,$con);


if($result) { //쿼리문이 정상적으로 수행시 실행

  if(mysql_num_rows($result) > 0) //mysqli_num_rows 함수는 리절트 셋(result set)의 총 레코드 수를 반환한다.
  {
  //값이 있으면 true를 리턴한다.
    while($row = mysql_fetch_array($result)) {
            $output .=
            '
            <div>'.$row["tag"].'</div>
            <div class="progress">
              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"
              aria-valuemin="0" aria-valuemax="100" style="width:'.$row['persent'].'%">
              </div>
            </div>';
          }
      }
        else {
        $output .= '데이터가 없습니다.';
      }
    //최종출력
  }
  echo $output;
}
?>
