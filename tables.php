<?php
	$title = 'Tables';
	include 'inc/header.php';
	include 'inc/breadcrumb.php';
?>

<h1><?php echo "$title"; ?></h1>

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


<?php
	include 'inc/footer.php';
?>