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
  <img src="img/ns-vip-white.svg" alt="Province of Nova Scotia" style="margin: 2em; width: 200px; height: auto;" />
  <div class="main-link"><a href="https://cns.pages.novascotia.ca/patternlab/">Main page</a></div>
</div>

<div class="pattern-container">
<h1>Content</h1>

<p>The following examples are configurations made from groups of fields used in our content types.</p>


<!-- CONTENT -->

<?php
$contents = array();
$handle=opendir('content');
while (false !== ($content = readdir($handle))):
    if(stristr($content,'.html')):
        $contents[] = $content;
    endif;
endwhile;
sort($contents);

?>
<h2 class="section">Content UI Patterns</h2>
<?php
foreach ($contents as $content):
    echo '<div class="pattern">';
    echo '<div class="display">';
    include('content/'.$content);
    echo '</div>';
    echo '<div class="source">';
    echo '<textarea rows="6" cols="30">';
    echo htmlspecialchars(file_get_contents('content/'.$content));
    echo '</textarea>';
    echo '<p><a href="content/'.$content.'">'.$content.'</a></p>';
    echo '</div>';
    echo '</div>';
    echo '<div style="clear:both; margin: 1.5em auto;"><hr /></div>';
endforeach;
?>




</div>


	<script src="js/script.min.js"></script>
</body>
</html>
