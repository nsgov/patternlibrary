<?php
	$title = 'Animation';
	include 'inc/header.php';
	include 'inc/breadcrumb.php';
?>

<h1><?php echo "$title"; ?></h1>

<p>
    It is important to consider citizens with vestibular disorders for whom motion can cause nausea, dizziness or vertigo.
</p>
<p>
    On the government website, we only use animation to communicate that <a href="https://beta.novascotia.ca/disciplinary-action-notices-liquor-and-gaming-licence-holders">content is loading on our collections</a> that pull data in from other sources.
</p>

<!-- CONTENT -->

<?php
$animations = array();
$handle=opendir('animation');
while (false !== ($animation = readdir($handle))):
    if(stristr($animation,'.html')):
        $animations[] = $animation;
    endif;
endwhile;
sort($animations);

?>
<h2 class="section">Loading animations</h2>

<?php
foreach ($animations as $animation):
    echo '<div class="pattern">';
    echo '<div class="display">';
    include('animation/'.$animation);
    echo '</div>';
    echo '<div class="source">';
    echo '<textarea rows="6" cols="30">';
    echo htmlspecialchars(file_get_contents('animation/'.$animation));
    echo '</textarea>';
    echo '<p><a href="animation/'.$animation.'">'.$animation.'</a></p>';
    echo '</div>';
    echo '</div>';
    echo '<div class="pattern-separator"></div>';
endforeach;
?>

<?php
include 'inc/footer.php';
?>