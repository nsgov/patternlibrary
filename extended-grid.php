<?php
	$title = 'Extended grid patterns';
	include 'inc/header.php';
	include 'inc/breadcrumb.php';
?>

<h1>Extended grid patterns</h1>

<p>
	Some provisional grid patterns leveraging CSS grid and flexbox.
</p>

<?php
$extendedgrids = array();
$handle=opendir('extendedgrid');
while (false !== ($extendedgrid = readdir($handle))):
    if(stristr($extendedgrid,'.html')):
        $extendedgrids[] = $extendedgrid;
    endif;
endwhile;
sort($extendedgrids);

?>
<h2 class="section">Card patterns</h1>
<?php
foreach ($extendedgrids as $extendedgrid):
    echo '<div class="pattern">';
    echo '<div class="display">';
    include('extendedgrid/'.$extendedgrid);
    echo '</div>';
    echo '<div class="source">';
    echo '<textarea rows="6" cols="30">';
    echo htmlspecialchars(file_get_contents('extendedgrid/'.$extendedgrid));
    echo '</textarea>';
    echo '<p><a href="extendedgrid/'.$extendedgrid.'">'.$extendedgrid.'</a></p>';
    echo '</div>';
    echo '</div>';
    echo '<div class="pattern-separator"></div>';

endforeach;
?>


<?php
	include 'inc/footer.php';
?>