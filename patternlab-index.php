<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>NSGov Pattern Library</title>
<link rel="stylesheet" href="global.css">
<link rel="stylesheet" href="saltire.css">
<link href='http://fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

<style>
.pattern {
    clear: both;
    overflow: visible;
    display: block;
    padding-top: 1em;
 
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
<h1>Province of Nova Scotia Pattern Library</h1>

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
    echo '<div class="display">';
    include('atoms/'.$atom);
    echo '</div>';
    echo '<div class="source">';
    echo '<textarea rows="6" cols="30">';
    echo htmlspecialchars(file_get_contents('atoms/'.$atom));
    echo '</textarea>';
    echo '<p><a href="atoms/'.$atom.'">'.$atom.'</a></p>';
    echo '</div>';
    echo '</div>';
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
    echo '<div class="display">';
    include('molecules/'.$molecule);
    echo '</div>';
    echo '<div class="source">';
    echo '<textarea rows="6" cols="30">';
    echo htmlspecialchars(file_get_contents('molecules/'.$molecule));
    echo '</textarea>';
    echo '<p><a href="molecules/'.$molecule.'">'.$molecule.'</a></p>';
    echo '</div>';
    echo '</div>';
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
    echo '<div class="display">';
    include('organisms/'.$organism);
    echo '</div>';
    echo '<div class="source">';
    echo '<textarea rows="6" cols="30">';
    echo htmlspecialchars(file_get_contents('organisms/'.$organism));
    echo '</textarea>';
    echo '<p><a href="organisms/'.$organism.'">'.$organism.'</a></p>';
    echo '</div>';
    echo '</div>';
endforeach;
?>
</div>


	<script src="js/script.min.js"></script>
</body>
</html>
