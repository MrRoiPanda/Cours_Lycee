<?php
  $correct = 1;
  if (1 < $_POST['Age'] < 130 ) {
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
    <p>Your age : <?php $_POST['Age']?> et vous etes un etudiant</p>
    <p><a href="#">clik here</a>for change data</p>
  </body>
</html>
