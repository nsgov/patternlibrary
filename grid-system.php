<?php
	$title = 'Grid system';
	include 'inc/header.php';
	include 'inc/breadcrumb.php';
?>

<h1><?php echo "$title"; ?></h1>

<p>We use the <a href="https://getbootstrap.com/docs/3.3/examples/grid/">Bootstrap grid system</a>.</p>

<p>We design mobile first and work up from there.</p>

<p>Bootstrap is based on a 12 column grid, and has four basic breakpoints:</p>

<ul>
  <li>xs (smallest screen) 480px</li>
  <li>sm (small screen) 768px</li>
  <li>md (medium screen) 992px</li>
  <li>lg (large screen) 1200px</li>
</ul>

<p>For page content, we keep the width of the content area at a comfortable reading width that works out to be: col-xs-12 col-md-8. For examples, please refer to the <a href="pages.html">Page Patterns</a>.</p>


<div class="row bootsample">
  <div class="col-xs-12">col-xs-12</div>
  <div class="col-xs-6">col-xs-6</div>
  <div class="col-xs-6">col-xs-6</div>
  <div class="col-xs-4">col-xs-4</div>
  <div class="col-xs-4">col-xs-4</div>
  <div class="col-xs-4">col-xs-4</div>
  <div class="col-xs-3">col-xs-3</div>
  <div class="col-xs-3">col-xs-3</div>
  <div class="col-xs-3">col-xs-3</div>
  <div class="col-xs-3">col-xs-3</div>
  <div class="col-xs-2">col-xs-2</div>
  <div class="col-xs-2">col-xs-2</div>
  <div class="col-xs-2">col-xs-2</div>
  <div class="col-xs-2">col-xs-2</div>
  <div class="col-xs-2">col-xs-2</div>
  <div class="col-xs-2">col-xs-2</div>
  <div class="col-xs-1">col-xs-1</div>
  <div class="col-xs-1">col-xs-1</div>
  <div class="col-xs-1">col-xs-1</div>
  <div class="col-xs-1">col-xs-1</div>
  <div class="col-xs-1">col-xs-1</div>
  <div class="col-xs-1">col-xs-1</div>
  <div class="col-xs-1">col-xs-1</div>
  <div class="col-xs-1">col-xs-1</div>
  <div class="col-xs-1">col-xs-1</div>
  <div class="col-xs-1">col-xs-1</div>
  <div class="col-xs-1">col-xs-1</div>
  <div class="col-xs-1">col-xs-1</div>
</div>

<!-- Grids -->

<?php
$grids = array();
$handle=opendir('grid');
while (false !== ($grid = readdir($handle))):
    if(stristr($grid,'.html')):
        $grids[] = $grid;
    endif;
endwhile;
sort($grids);

?>
<h2 class="section">Grid layout examples</h2>
<?php
foreach ($grids as $grid):
    echo '<div class="pattern">';
    echo '<div class="display">';
    include('grid/'.$grid);
    echo '</div>';
    echo '<div class="source">';
    echo '<textarea rows="6" cols="30">';
    echo htmlspecialchars(file_get_contents('grid/'.$grid));
    echo '</textarea>';
    echo '<p><a href="grid/'.$grid.'">'.$grid.'</a></p>';
    echo '</div>';
    echo '</div>';
    echo '<div class="pattern-separator"></div>';
endforeach;
?>

<?php
include 'inc/footer.php';
?>