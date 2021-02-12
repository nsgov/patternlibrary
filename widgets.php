<?php
	$title = 'Accessible widgets';
	include 'inc/header.php';
	include 'inc/breadcrumb.php';
?>

<h1><?php echo "$title"; ?></h1>

<p>Most of the time, accordians should be avoided, especially when your users need all or part of the content on the page to answer their questions. It is better to show all the content at once, it is a myth that users do not scroll. You should not worry too much about page length.</p>

<p>There will be cases where you need navigation inside the page that an accordian could be a good solution for. For programs that have an online application process, the online method is the primary call to action and other ways to apply are inside an accordion.</p>




<!-- widget -->

<?php
$widgets = array();
$handle=opendir('widgets');
while (false !== ($widget = readdir($handle))):
    if(stristr($widget,'.html')):
        $widgets[] = $widget;
    endif;
endwhile;
sort($widgets);

?>
<h2 class="section">Widgets</h2>
<?php
foreach ($widgets as $widget):
    echo '<div class="pattern">';
    include('widgets/'.$widget);
    echo '</div>';
    echo '<div class="pattern">';
    echo '<textarea rows="6" cols="30">';
    echo htmlspecialchars(file_get_contents('widgets/'.$widget));
    echo '</textarea>';
    echo '<p><a href="widgets/'.$widget.'">'.$widget.'</a></p>';
    echo '</div>';
    echo '<div class="pattern-separator"></div>';
endforeach;
?>

<?php
	include 'inc/footer.php';
?>