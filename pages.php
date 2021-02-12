<?php
	$title = 'Pages';
	include 'inc/header.php';
	include 'inc/breadcrumb.php';
?>

<h1><?php echo "$title"; ?></h1>

<p>The following page layouts are based on the content types identified in the Government Web Strategy.</p>

<ul>
  <li>Basic page</li>
  <li>Campaign page</li>
  <li>Document page</li>
</ul>

<p>More will be added over time.</p>

<!-- page -->

<?php
$pages = array();
$handle=opendir('pages');
while (false !== ($page = readdir($handle))):
    if(stristr($page,'.html')):
        $pages[] = $page;
    endif;
endwhile;
sort($pages);

?>
<h2 class="section">page and structural UI patterns</h2>
<?php
foreach ($pages as $page):
    echo '<div class="pattern">';
    include('pages/'.$page);
    echo '</div>';
    echo '<div class="pattern">';
    echo '<textarea rows="20" style="width: 100%">';
    echo htmlspecialchars(file_get_contents('pages/'.$page));
    echo '</textarea>';
    echo '<p><a href="pages/'.$page.'">'.$page.'</a></p>';
    echo '</div>';
    echo '<div class="pattern-separator"></div>';
endforeach;
?>

<?php
include 'inc/footer.php';
?>