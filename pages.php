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
<h1>Pages</h1>

<p>The following page layouts are based on the content types identified in the Government Web Strategy.</p>


<!-- page -->

<?php
$pages = array();
$handle=opendir('page');
while (false !== ($page = readdir($handle))):
    if(stristr($page,'.html')):
        $pages[] = $page;
    endif;
endwhile;
sort($pages);

?>
<h2 class="section">page and structural UI patterns</h2>
<?php
foreach ($pages as $page):
    echo '<div class="pattern">';
    include('pages/'.$page);
    echo '</div>';
    echo '<div class="pattern">';
    echo '<textarea rows="6" cols="30">';
    echo htmlspecialchars(file_get_contents('pages/'.$page));
    echo '</textarea>';
    echo '<p><a href="pages/'.$page.'">'.$page.'</a></p>';
    echo '</div>';
    echo '<div style="clear:both; margin: 1.5em auto;"><hr /></div>';
endforeach;
?>

</div>


	<script src="js/script.min.js"></script>
</body>
</html>
