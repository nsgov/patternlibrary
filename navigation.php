<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>NSGov UI Pattern Library</title>
<link rel="stylesheet" href="global.css">
<link rel="stylesheet" href="css/saltire.css">
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
<div id="patternlab-header">
  <div class="site-title"><a href="https://cns.pages.novascotia.ca/patternlab/">Province of Nova Scotia UI Pattern Library</a></div>
</div>

<div class="pattern-container">
<h1>Navigation and structural elements</h1>

<p></p>


<!-- NAVIGATION -->

<?php
$navigations = array();
$handle=opendir('navigation');
while (false !== ($navigation = readdir($handle))):
    if(stristr($navigation,'.html')):
        $navigations[] = $navigation;
    endif;
endwhile;
sort($navigations);

?>
<h2 class="section">Navigation and structural UI patterns</h2>
<?php
foreach ($navigations as $navigation):
    echo '<div class="pattern">';
    include('navigation/'.$navigation);
    echo '</div>';
    echo '<div class="pattern">';
    echo '<textarea rows="6" cols="30">';
    echo htmlspecialchars(file_get_contents('navigation/'.$navigation));
    echo '</textarea>';
    echo '<p><a href="navigations/'.$navigation.'">'.$navigation.'</a></p>';
    echo '</div>';
    echo '<div style="clear:both; margin: 1.5em auto;"><hr /></div>';
endforeach;
?>

</div>


	<script src="js/script.min.js"></script>
</body>
</html>
