
<script>
  //searchKeyword();
  function searchKeyword() {
    var action = $('#search_keyword').val();
    //  search.php 에서 받아온다.
  $.ajax({
    url:"search.php",
    method:"POST",
    data:{action:action},
    success:function(data) {
      $('#tag_graph_box').html(data);
        }
     })

    }

</script>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</body>
</html>
