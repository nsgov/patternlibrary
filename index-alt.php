<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>NSGov Pattern Library</title>
<link rel="stylesheet" href="global.css">
<link rel="stylesheet" href="https://beta.novascotia.ca/themes/ignition/saltire.css">
<link rel="stylesheet" href="https://novascotia.ca/clf/fonts/font-awesome/css/font-awesome.min.css">

<style>
.pattern {
    clear: both;
    overflow: visible;
    display: block;
    padding-top: 1em;
    width: 80%;
 
}
.pattern .display {
    width: 65%;
    float: left;
}
.pattern .source {
    width: 30%;
    float: right;
}
.pattern .source textarea {
    width: 90%;
}

</style>
</head>
<body>

<div class="container">
<h1>Government of Nova Scotia Pattern Library</h1>

<?php
$atoms = array();
$handle=opendir('atoms');
while (false !== ($atom = readdir($handle))):
    if(stristr($atom,'.html')):
        $atoms[] = $atom;
    endif;
endwhile;
sort($atoms);

?>
<h2 class="section">Atoms</h1>
<?php
foreach ($atoms as $atom):
    echo '<div class="pattern">';
    echo '<p><a href="atoms/'.$atom.'">'.$atom.'</a></p>';
    include('atoms/'.$atom);
    echo '</div><hr style="clear: both; margin-top: 1em;" />';
endforeach;
?>




<?php
$molecules = array();
$handle=opendir('molecules');
while (false !== ($molecule = readdir($handle))):
    if(stristr($molecule,'.html')):
        $molecules[] = $molecule;
    endif;
endwhile;
sort($molecules);

?>
<h2 class="section">Molecules</h2>
<?php
foreach ($molecules as $molecule):
    echo '<div class="pattern">';
    echo '<p><a href="molecules/'.$molecule.'">'.$molecule.'</a></p>';
    include('molecules/'.$molecule);
     echo '</div><hr style="clear: both; margin-top: 1em;" />';
endforeach;
?>



<?php
$organisms = array();
$handle=opendir('organisms');
while (false !== ($organism = readdir($handle))):
    if(stristr($organism,'.html')):
        $organisms[] = $organism;
    endif;
endwhile;
sort($organisms);

?>
<h2 class="section">Organisms</h2>
<?php
foreach ($organisms as $organism):
    echo '<div class="pattern">';
    echo '<p><a href="organisms/'.$organism.'">'.$organism.'</a></p>';
    include('organisms/'.$organism);
    echo '</div><hr style="clear: both; margin-top: 1em;" />';
endforeach;
?>
</div>


	<script src="js/script.min.js"></script>
</body>
</html>
