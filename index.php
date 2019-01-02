<!doctype html>
<html>
<head>
  <title>bumsu_home</title>
  <meta charset="uft-8">
</head>
<body>
  <h1> <a href="index.html" title="home">Bumsu_Home</a></h1>
  <ol>
    <?php
    $list=scandir('.\data');
    for($i=0;i<count($list);i++){
      if($list[i]=='.' or $list[i]=='..')
        countinue;
      echo "<li> <a href=\"index.php?id=$list[i]\" title=\"$list[i] page\">$list[i]</a> </li>";
    }
    ?>
  </ol>

  <a href="create.php" title="create">create</a>
  <?php if(isset($_GET['id'])) { ?>
          <a href="update.php" title="update">update</a>
          <form action="delete_process.php" method="post">
            <input type="hidden" name="id" value="<?=$_GET['id']?>">
            <input type="submit" value="delete">
          </form>
  <?php } ?>


  <h2>
    <?php>
    if(isset($_GET['id']))
      echo $_GET['id'];
    else
      echo "Bumsu's Home";
    ?>
  </h2>
  <p>
    <?php>
    if(isset($_GET['id']))
      echo file_get_contents('./data'.$_GET['id']);
    else
      echo "This is a <u>Bumsu's Home</u>";
    ?>
  </p>
</body>
</html>
