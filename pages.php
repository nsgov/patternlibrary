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
  <img src="img/ns-vip-white.svg" alt="Government of Nova Scotia" style="margin: 2em; width: 200px; height: auto;" />
  <div class="main-link"><a href="https://cns.pages.novascotia.ca/patternlab/">Main page</a></div>
</div>

<div class="pattern-container">
<h1>Pages</h1>

<p>The following page layouts are based on the content types identified in the Government Web Strategy.</p>

<ul>
  <li>Basic page</li>
  <li>Campaign page</li>
  <li>Document page</li>
</ul>

<p>More will be added over time.</p>

<!-- page -->

<?php
$pages = array();
$handle=opendir('pages');
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
    echo '<textarea rows="20" style="width: 100%">';
    echo htmlspecialchars(file_get_contents('pages/'.$page));
    echo '</textarea>';
    echo '<p><a href="pages/'.$page.'">'.$page.'</a></p>';
    echo '</div>';
    echo '<div class="pattern-separator"></div>';
endforeach;
?>

</div>


	<script src="js/script.min.js"></script>
</body>
</html>
