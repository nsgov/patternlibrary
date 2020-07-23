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
<h1>Coronavirus</h1>

<p>A collection of new and experimental patterns brought into use during the Coronavirus pandemic.</p>
<p>Part of our content strategy during the pandemic was to keep Coronavirus information centralized, and link core government content to the main coronavirus website or the closures page for service change information rather than duplicate it. This required developing a standard way of showing an alert for a service change, and a way to highlight what citizens could do online.</p>
<p>Most of these patterns contain inline CSS - usually due to the need to use them on a variety of government pages that use older versions of our framework.</p>


<!-- CONTENT -->

<?php
$coronaviruss = array();
$handle=opendir('coronavirus');
while (false !== ($coronavirus = readdir($handle))):
    if(stristr($coronavirus,'.html')):
        $coronaviruss[] = $coronavirus;
    endif;
endwhile;
sort($coronaviruss);

?>
<h2 class="section">Experimental patterns</h2>
<?php
foreach ($coronaviruss as $coronavirus):
    echo '<div class="pattern">';
    echo '<div class="display">';
    include('coronavirus/'.$coronavirus);
    echo '</div>';
    echo '<div class="source">';
    echo '<textarea rows="6" cols="30">';
    echo htmlspecialchars(file_get_contents('coronavirus/'.$coronavirus));
    echo '</textarea>';
    echo '<p><a href="coronavirus/'.$coronavirus.'">'.$coronavirus.'</a></p>';
    echo '</div>';
    echo '</div>';
    echo '<div class="pattern-separator"></div>';
endforeach;
?>




</div>


	<script src="js/script.min.js"></script>
</body>
</html>
