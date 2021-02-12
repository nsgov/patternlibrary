<?php
	$title = 'Content';
	include 'inc/header.php';
	include 'inc/breadcrumb.php';
?>

<h1><?php echo "$title"; ?></h1>

<p>The following examples are configurations made from groups of fields used in our content types.</p>


<!-- CONTENT -->

<?php
$contents = array();
$handle=opendir('content');
while (false !== ($content = readdir($handle))):
    if(stristr($content,'.html')):
        $contents[] = $content;
    endif;
endwhile;
sort($contents);

?>
<h2 class="section">Content UI Patterns</h2>
<?php
foreach ($contents as $content):
    echo '<div class="pattern">';
    echo '<div class="display">';
    include('content/'.$content);
    echo '</div>';
    echo '<div class="source">';
    echo '<textarea rows="6" cols="30">';
    echo htmlspecialchars(file_get_contents('content/'.$content));
    echo '</textarea>';
    echo '<p><a href="content/'.$content.'">'.$content.'</a></p>';
    echo '</div>';
    echo '</div>';
    echo '<div class="pattern-separator"></div>';
endforeach;
?>

<?php
include 'inc/footer.php';
?>