<?php
	$title = 'Cards';
	include 'inc/header.php';
	include 'inc/breadcrumb.php';
?>

<h1><?php echo "$title"; ?></h1>

<p>
	Cards are used to organise information, providing a brief summary of content or a task linked to more detail. They can be used to display feature stories, or groups of tasks.
</p>


<?php
$cards = array();
$handle=opendir('cards');
while (false !== ($card = readdir($handle))):
    if(stristr($card,'.html')):
        $cards[] = $card;
    endif;
endwhile;
sort($cards);

?>
<h2 class="section">Card patterns</h1>
<?php
foreach ($cards as $card):
    echo '<div class="pattern">';
    echo '<div class="display">';
    include('cards/'.$card);
    echo '</div>';
    echo '<div class="source">';
    echo '<textarea rows="6" cols="30">';
    echo htmlspecialchars(file_get_contents('cards/'.$card));
    echo '</textarea>';
    echo '<p><a href="cards/'.$card.'">'.$card.'</a></p>';
    echo '</div>';
    echo '</div>';
    echo '<div class="pattern-separator"></div>';

endforeach;
?>

<?php
include 'inc/footer.php';
?>