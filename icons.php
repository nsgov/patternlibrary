<?php
	$title = 'Icons';
	include 'inc/header.php';
	include 'inc/breadcrumb.php';
?>

<h1><?php echo "$title"; ?></h1>

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
    echo '<div class="pattern-separator"></div>';
endforeach;
?>


<?php
include 'inc/footer.php';
?>