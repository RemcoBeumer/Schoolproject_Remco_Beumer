<!DOCTYPE html>
<html lang="en">

<?php include 'header.php'?>
<?php include 'sidebar.php'?>
<article>
    <h1>contact output</h1>
    <p>output</p>
    <textarea output="outputText" rows=5 cols=80 wrap=on readonly></textarea>
    <?php
    if(isset($_POST["submit"]) ){
    $vnaam = $_POST["vnaam"];
    $anaam = $_POST["anaam"];
    $Email = $_POST["Email"];

    echo "$vnaam";
    echo "$anaam";
    echo "$Email";
      }
    ?>
  </article>
<?php include 'footer.php'?>

