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

<h2>Buttons</h2>

<p>Buttons should only be used as a call to action, and the label should make it clear what the button will lead to.</p>

<p>For starting a service, the button text should contain a clear call to action to "Start" the service.</p>

<!-- BUTTONS -->
<?php
$buttons = array();
$handle=opendir('buttons');
while (false !== ($button = readdir($handle))):
    if(stristr($button,'.html')):
        $buttons[] = $button;
    endif;
endwhile;
sort($buttons);

?>
<h2 class="section">Button patterns</h1>
<?php
foreach ($buttons as $button):
    echo '<div class="pattern">';
    echo '<div class="display">';
    include('buttons/'.$button);
    echo '</div>';
    echo '<div class="source">';
    echo '<textarea rows="6" cols="30">';
    echo htmlspecialchars(file_get_contents('buttons/'.$button));
    echo '</textarea>';
    echo '<p><a href="buttons/'.$button.'">'.$button.'</a></p>';
    echo '</div>';
    echo '</div>';
    echo '<div style="clear:both; margin: 1.5em auto;"><hr /></div>';

endforeach;
?>

</div>


	<script src="js/script.min.js"></script>
</body>
</html>
