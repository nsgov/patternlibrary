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
<div id="header"></div>

<div class="pattern-container">
<h1>Province of Nova Scotia UI Pattern Library</h1>

<h2>Typography</h2>

<p>Our primary typeface online is Roboto Sans*.</p>

<p>For information about writing online, please refer to the <a href="https://novascotia.sharepoint.com/sites/Projects/CNSGovWebStrategy/Tools%20and%20Guides/Forms/AllItems.aspx?id=%2Fsites%2FProjects%2FCNSGovWebStrategy%2FTools%20and%20Guides%2FOnline%20Writing%20Guide%20v2%2Epdf&parent=%2Fsites%2FProjects%2FCNSGovWebStrategy%2FTools%20and%20Guides">online writing guide (PDF)</a>.</p>

<!-- TYPOGRAPHY -->

<?php
$typographys = array();
$handle=opendir('typography');
while (false !== ($typography = readdir($handle))):
    if(stristr($typography,'.html')):
        $typographys[] = $typography;
    endif;
endwhile;
sort($typographys);

?>
<h2 class="section">Typographic patterns</h2>
<?php
foreach ($typographys as $typography):
    echo '<div class="pattern">';
    echo '<div class="display">';
    include('typography/'.$typography);
    echo '</div>';
    echo '<div class="source">';
    echo '<textarea rows="6" cols="30">';
    echo htmlspecialchars(file_get_contents('typography/'.$typography));
    echo '</textarea>';
    echo '<p><a href="typographys/'.$typography.'">'.$typography.'</a></p>';
    echo '</div>';
    echo '</div>';
    echo '<div style="clear:both; margin: 1.5em auto;"><hr /></div>';
endforeach;
?>



</div>


	<script src="js/script.min.js"></script>
</body>
</html>
