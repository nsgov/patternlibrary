<?php
	$title = 'Messages/feedback';
	include 'inc/header.php';
	include 'inc/breadcrumb.php';
?>

<h1><?php echo "$title"; ?></h1>

<p>These blocks are used to provide action based feedback or communicate critical information.</p>

<p>Recently, these patterns have been revisited and simplified.</p>

<!-- MESSAGES AND FEEDBACK -->

<?php
$feedbacks = array();
$handle=opendir('feedback');
while (false !== ($feedback = readdir($handle))):
    if(stristr($feedback,'.html')):
        $feedbacks[] = $feedback;
    endif;
endwhile;
sort($feedbacks);

?>
<h2 class="section">Messages and feedback patterns</h2>
<?php
foreach ($feedbacks as $feedback):
    echo '<div class="pattern">';
    echo '<div class="display">';
    include('feedback/'.$feedback);
    echo '</div>';
    echo '<div class="source">';
    echo '<textarea rows="6" cols="30">';
    echo htmlspecialchars(file_get_contents('feedback/'.$feedback));
    echo '</textarea>';
    echo '<p><a href="feedback/'.$feedback.'">'.$feedback.'</a></p>';
    echo '</div>';
    echo '</div>';
    echo '<div class="pattern-separator"></div>';
endforeach;
?>

<?php
include 'inc/footer.php';
?>