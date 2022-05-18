<?php include_once 'functions.php'?>
<?php include 'header.php'?>
<?php include 'sidebar.php'?>
<article>
    <h1>about</h1>
    <p>this site is my first html site with a navbar, sidebar and a footer</p>

<?= createCard("original.jpg","Remco Beumer","student") ?>
<?= createCard("mancard.png","Sem de Jong","lawyer")?>
<?= createCard("mancard.png","Lucas Jansen","basketball player")?>
<?= createCard("vrouwcard.png","Tessa Smit ","Cake decorator")?>
<?= createCard("vrouwcard.png","Anna de Groot","Florist")?>
<?= createCard("mancard.png","Levi de vries","Video game designer")?>
<?= createCard("vrouwcard.png","Lieke Bos","Actor")?>
<?= createCard("mancard.png","Sam de Bruin","CEO of ROCMN")?>

<pre>
<?php 

$companycontacts = array(
  array( "company","Contact","Country"),
  array( "Alfreds Futterkiste","Maria Anders","Germany" ),
  array( "Centro comercial Moctezuma","Francisco Chang","Mexico"),
  array( "Ernst Handel","Roland Mendel","Austria" )
);

echo createtable($companycontacts);
?>
</pre>
</article>
<?php include 'footer.php'?>
