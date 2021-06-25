<?php
	$title = 'Tags';
	include 'inc/header.php';
	include 'inc/breadcrumb.php';
?>

<h1>Tags</h1>

<p>
	Tags can be used to categorize content with a set of topics or taxonomy terms. Tags are marked up as an unordered list.
</p>

<p>Usage notes:</p>
<ul>
	<li>Tags should always be presented in alphabetical order</li>
	<li>Tags should never be used to replace navigation</li>
	<li>Tags can be linked or unlinked</ul>
</ul>

<p>
	Working example of an early version: <a href="https://novascotia.ca/reopening-plan">Reopening plan: Phase overview</a>
</p>

<!-- Default tags -->

<?php
$tags = array();
$handle=opendir('tag');
while (false !== ($tag = readdir($handle))):
    if(stristr($tag,'.html')):
        $tags[] = $tag;
    endif;
endwhile;
sort($tags);

?>
<h2 class="section">Card patterns</h1>
<?php
foreach ($tags as $tag):
    echo '<div class="pattern">';
    echo '<div class="display">';
    include('tag/'.$tag);
    echo '</div>';
    echo '<div class="source">';
    echo '<textarea rows="6" cols="30">';
    echo htmlspecialchars(file_get_contents('tag/'.$tag));
    echo '</textarea>';
    echo '<p><a href="tag/'.$tag.'">'.$tag.'</a></p>';
    echo '</div>';
    echo '</div>';
    echo '<div class="pattern-separator"></div>';

endforeach;
?>


<?php
	include 'inc/footer.php';
?>