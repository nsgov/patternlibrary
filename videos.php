<?php
	$title = 'Video';
	include 'inc/header.php';
	include 'inc/breadcrumb.php';
?>

<h1><?php echo "$title"; ?></h1>

<p>Videos are hosted on the <a href="https://www.youtube.com/user/nsgov">NSGOV YouTube channel</a> and are embedded into pages.</p>

<p>A little manual editing is required to make the default YouTube embed code resposive. Static width and height must be remove, and you can set a min/max width/height inline.</p>


<!-- Video patterns -->
<?php
$videos = array();
$handle=opendir('video');
while (false !== ($video = readdir($handle))):
    if(stristr($video,'.html')):
        $videos[] = $video;
    endif;
endwhile;
sort($videos);

?>
<h2 class="section">Video patterns</h1>
<?php
foreach ($videos as $video):
    echo '<div class="pattern">';
    echo '<div class="display">';
    include('video/'.$video);
    echo '</div>';
    echo '<div class="source">';
    echo '<textarea rows="6" cols="30">';
    echo htmlspecialchars(file_get_contents('video/'.$video));
    echo '</textarea>';
    echo '<p><a href="videos/'.$video.'">'.$video.'</a></p>';
    echo '</div>';
    echo '</div>';
    echo '<div class="pattern-separator"></div>';

endforeach;
?>

<?php
	include 'inc/footer.php';
?>