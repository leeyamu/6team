<?php
function print_title(){
  if(isset($_GET['id'])){
    echo $_GET['id'];
  } else {
    echo "Welcome";
  }
}
function print_description(){
  if(isset($_GET['id'])){
    echo file_get_contents("data/".$_GET['id']);
  } else {
    echo "Hello, PHP";
  }
}

function print_list(){
  $list = scandir('./data');
  $i = 0;
  while($i < count($list)){
    if($list[$i] != '.') {
      if($list[$i] != '..') {
        echo "<li><a href=\"버스커공지.php?id=$list[$i]\">$list[$i]</a></li>\n";
      }
    }
    $i = $i + 1;
  }
}
?>

<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>
    <?php
      print_title();
    ?>
  </title>
  <style>
  h1{
    font-size: 45px;
    text-align: center;
    border-bottom: 1px solid gray;
    margin 0;
    padding: 20px;
  }
  ul{

  }
  </style>
</head>

<body>
  <h1><a href="6조.php?id=bus">bus</a></h1>
  <h2><a href="buskernotice.php">버스커공지</a></h2>
  <a href="create.php">create</a>
  <form action="create_process.php" method="post">
    <p><input type="text" name="title" placeholder="Title"></p>
    <p><textarea name="description"></textarea></p>
    <p><input type="submit"></p>
  </form>
</body>
</html>
