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

.bootsample div {border: 1px solid #ccc; background: #f5f5f5;}

</style>
</head>
<body>
<div id="header"></div>

<div class="pattern-container">
<h1>Province of Nova Scotia UI Pattern Library</h1>

<h2>Icons</h2>

<p>We currently use the <a href="http://fontawesome.io/icons/">Font Awesome</a>, a set of scalable vector icons implemented with CSS.</p>

<p>Typically, icons are only used for decorative purposes and are not used alone to communicate meaning. If you are using an icon in a way that should be accessible to screen readers, please refer to the <a href="http://fontawesome.io/accessibility/">accessibility documentation</a> for details on how to do this.</p>


<!-- Icons -->

<?php
$icons = array();
$handle=opendir('icons');
while (false !== ($icon = readdir($handle))):
    if(stristr($icon,'.html')):
        $icons[] = $icon;
    endif;
endwhile;
sort($icons);

?>
<h2 class="section">Examples with icons</h2>
<?php
foreach ($icons as $icon):
    echo '<div class="pattern">';
    echo '<div class="display">';
    include('icons/'.$icon);
    echo '</div>';
    echo '<div class="source">';
    echo '<textarea rows="6" cols="30">';
    echo htmlspecialchars(file_get_contents('icons/'.$icon));
    echo '</textarea>';
    echo '<p><a href="icons/'.$icon.'">'.$icon.'</a></p>';
    echo '</div>';
    echo '</div>';
    echo '<div style="clear:both; margin: 1.5em auto;"><hr /></div>';
endforeach;
?>


</div>


	<script src="js/script.min.js"></script>
</body>
</html>
