<div class="pagination">
  <?php
  $previous = intval($_GET["number"])-1;
  $next = intval($_GET["number"])+1;
  $max = 13;
  echo "<h1>Page {$_GET["number"]}</h1>";
  if ($previous != -1){
      echo "<a class='previous' href='?number={$previous}'>&laquo Precedent</a>";
    }
    else{
      echo "<b class='previous'>&laquo Precedent</b>";
    }
    for ($i =0;$i<$max;$i++){
      if ($i == $_GET["number"]){
        echo "<a class='active' href='?number={$i}'>{$i}</a>";
      }
      else {
        echo "<a href='?number={$i}'>{$i}</a>";
      }
    }
    if ($next != $max){
      echo "<a class='next' href='?number={$next}'>Suivant &raquo</a>";
    }
    else{
      echo "<b class='next'>Suivant &raquo</b>";
    }
    
?>
<div class="pagination">
<style>
.pagination a {
    color:#0063e3;
    padding: 3px 8px;
    text-decoration: none;
    transition: background-color .3s;
    border: 1px solid #ddd; 
}
.pagination a.active {
    color:#ff0084;
    font-weight:bold;
}
.pagination .previous {
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
}
.pagination a:hover
{
    background-color: #96BEFF;
}
.pagination .next {
  border-top-right-radius: 5px;
  border-bottom-right-radius: 5px;
}
.pagination b {
  cursor : default;
  padding: 3px 8px;
  transition: background-color .3s;
  border: 1px solid #ddd; 
  color : gray;
}
</style>