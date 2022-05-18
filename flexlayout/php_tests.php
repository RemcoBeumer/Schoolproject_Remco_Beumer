<?php
include 'header.php';
include 'sidebar.php';
?>
 <article>
<?php
function createNavBar($nav){

    //ontvang gegevens van de listitems via de parameter
    //maak html list
    $html = "<ul class=\"navbar\">";

    //
    foreach ($nav as $key => $val){
   $html .= "<li><a href=\"".$val."\">".$key."</a>";
    }

    $html .="</ul>";
    return "$html";
}

$nav = [
    'Home'=>'index.php',
    'Skills'=>'skills.php',
    'Opdrachten'=>'opdrachten.php',
    'Contact'=>'contact.php',
    'About'=>'about.php',
    'Admin'=>'Admin.php',
];

echo createNavBar($nav);

?>
</article>
<?php include 'footer.php'?>