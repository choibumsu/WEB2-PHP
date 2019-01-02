<?php
function print_title() {
  if(isset($_GET['id']))
    echo $_GET['id'];
  else
    echo "Bumsu's Home";
}

function print_list() {
  $list=scandir('.\data');
  for($i=0;$i<count($list);$i=$i+1){
    if(!($list[$i]=="." or $list[$i]==".."))
      echo "<li> <a href=\"index.php?id=$list[$i]\" title=\"$list[$i] page\">$list[$i]</a> </li>";
  }
}

function print_desc() {
  if(isset($_GET['id']))
    echo file_get_contents("data/".$_GET['id']);
  else
    echo "This is a <u>Bumsu's Home</u>";
}
?>
