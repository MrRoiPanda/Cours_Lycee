<?php
  $correct = 1;
  if ($_POST['Age'] > 130 ) {
    $correct = 0;
  }
  if ($_POST['Age'] < 1 ) {
    $correct = 0;
  }
  if (empty($_POST["FirstName"])) {
    $correct = 0;
  }
  if (empty($_POST['SecoundName'])) {
    $correct = 0;
  }
  if (empty($_POST['Classe'])) {
    $correct = 0;
  }


  if ($correct == 0) {
    header('Location:ex4.php');
  }
?>
<!DOCTYPE html>
<html lang="FR-fr" dir="ltr">
  <head>
    <meta http-equiv="content-type" content="test/html">
    <meta charset="utf-8">
    <title>POST</title>
  </head>
  <body>
    <p>hello !</p>
    <p>You are : <?php echo $_POST['SecoundName']." ".$_POST["FirstName"] ?></p>
    <p>Your age : <?php $_POST['Age']." "?>you are in <?php $_POST['Classe'] ?></p>
    <p><a href="index.php">Clik here</a> for change data</p>
  </body>
</html>
