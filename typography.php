<?php
	$title = 'Typography';
	include 'inc/header.php';
	include 'inc/breadcrumb.php';
?>

<h1><?php echo "$title"; ?></h1>

<p>Our primary typeface online is Open Sans.</p>

<p>For information about writing online, please refer to the <a href="https://novascotia.sharepoint.com/sites/Projects/CNSGovWebStrategy/Tools%20and%20Guides/Forms/AllItems.aspx?id=%2Fsites%2FProjects%2FCNSGovWebStrategy%2FTools%20and%20Guides%2FOnline%20Writing%20Guide%20v2%2Epdf&parent=%2Fsites%2FProjects%2FCNSGovWebStrategy%2FTools%20and%20Guides">online writing guide (PDF)</a>.</p>

<!-- TYPOGRAPHY -->

<?php
$typographys = array();
$handle=opendir('typography');
while (false !== ($typography = readdir($handle))):
    if(stristr($typography,'.html')):
        $typographys[] = $typography;
    endif;
endwhile;
sort($typographys);

?>
<h2 class="section">Typographic patterns</h2>
<?php
foreach ($typographys as $typography):
    echo '<div class="pattern">';
    echo '<div class="display">';
    include('typography/'.$typography);
    echo '</div>';
    echo '<div class="source">';
    echo '<textarea rows="6" cols="30">';
    echo htmlspecialchars(file_get_contents('typography/'.$typography));
    echo '</textarea>';
    echo '<p><a href="typographys/'.$typography.'">'.$typography.'</a></p>';
    echo '</div>';
    echo '</div>';
    echo '<div class="pattern-separator"></div>';
endforeach;
?>


<?php
	include 'inc/footer.php';
?>