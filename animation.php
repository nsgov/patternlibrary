<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>NSGov UI Pattern Library</title>
<link rel="stylesheet" href="global.css">
<link rel="stylesheet" href="https://beta.novascotia.ca/themes/ignition/saltire.css">
<link rel="stylesheet" href="https://novascotia.ca/clf/fonts/font-awesome/css/font-awesome.min.css">

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
<div id="patternlab-header">
  <img src="img/ns-vip-white.svg" alt="Province of Nova Scotia" style="margin: 2em; width: 200px; height: auto;" />
  <div class="main-link"><a href="https://cns.pages.novascotia.ca/patternlab/">Main page</a></div>
</div>

<div class="pattern-container">
<h1>Animation</h1>

<p>The following examples are loading animations we use.</p>


<!-- CONTENT -->

<?php
$animations = array();
$handle=opendir('animation');
while (false !== ($animation = readdir($handle))):
    if(stristr($animation,'.html')):
        $animations[] = $animation;
    endif;
endwhile;
sort($animations);

?>
<h2 class="section">Animation UI Patterns</h2>
<?php
foreach ($animations as $animation):
    echo '<div class="pattern">';
    echo '<div class="display">';
    include('animation/'.$animation);
    echo '</div>';
    echo '<div class="source">';
    echo '<textarea rows="6" cols="30">';
    echo htmlspecialchars(file_get_contents('animation/'.$animation));
    echo '</textarea>';
    echo '<p><a href="animation/'.$animation.'">'.$animation.'</a></p>';
    echo '</div>';
    echo '</div>';
    echo '<div class="pattern-separator"></div>';
endforeach;
?>




</div>


	<script src="js/script.min.js"></script>
</body>
</html>
