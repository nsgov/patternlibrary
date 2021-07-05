<?php
	$title = 'Navigation and structural elements';
	include 'inc/header.php';
	include 'inc/breadcrumb.php';
?>

<h1><?php echo "$title"; ?></h1>

<p></p>

<style>
    .footer {
        margin-bottom: 1.5em;
    }
    .footer.ribbon {background-image: none;}
</style>

<!-- NAVIGATION -->

<?php
$navigations = array();
$handle=opendir('navigation');
while (false !== ($navigation = readdir($handle))):
    if(stristr($navigation,'.html')):
        $navigations[] = $navigation;
    endif;
endwhile;
sort($navigations);

?>
<h2 class="section">Navigation and structural UI patterns</h2>
<?php
foreach ($navigations as $navigation):
    echo '<div class="pattern">';
    include('navigation/'.$navigation);
    echo '</div>';
    echo '<div class="pattern">';
    echo '<textarea rows="6" style="width: 100%">';
    echo htmlspecialchars(file_get_contents('navigation/'.$navigation));
    echo '</textarea>';
    echo '<p><a href="navigation/'.$navigation.'">'.$navigation.'</a></p>';
    echo '</div>';
    echo '<div class="pattern-separator"></div>';
endforeach;
?>

<?php
include 'inc/footer.php';
?>