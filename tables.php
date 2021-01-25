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
<h1>Tables</h1>

<p>Consider the type of data you are working with when selecting which table to use. Complicated data tables should make use of the "scope" property as illustrated in Accessible Data Table. Using scope is very helpful for users trying to navigate a complicated table with a screen reader.</p>


<!-- CONTENT -->

<?php
$tables = array();
$handle=opendir('table');
while (false !== ($table = readdir($handle))):
    if(stristr($table,'.html')):
        $tables[] = $table;
    endif;
endwhile;
sort($tables);

?>
<h2 class="section">Table patterns</h2>
<?php
foreach ($tables as $table):
    echo '<div class="pattern">';
    echo '<div class="display">';
    include('table/'.$table);
    echo '</div>';
    echo '<div class="source">';
    echo '<textarea rows="6" cols="30">';
    echo htmlspecialchars(file_get_contents('table/'.$table));
    echo '</textarea>';
    echo '<p><a href="table/'.$table.'">'.$table.'</a></p>';
    echo '</div>';
    echo '</div>';
    echo '<div class="pattern-separator"></div>';
endforeach;
?>




</div>


	<script src="js/script.min.js"></script>
</body>
</html>
