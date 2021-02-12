<?php
	$title = 'Coronavirus';
	include 'inc/header.php';
	include 'inc/breadcrumb.php';
?>

<h1><?php echo "$title"; ?></h1>

<p>A collection of new and experimental patterns brought into use during the Coronavirus pandemic.</p>
<p>Part of our content strategy during the pandemic was to keep Coronavirus information centralized, and link core government content to the main coronavirus website or the closures page for service change information rather than duplicate it. This required developing a standard way of showing an alert for a service change, and a way to highlight what citizens could do online.</p>
<p>Most of these patterns contain inline CSS - usually due to the need to use them on a variety of government pages that use older versions of our framework.</p>



<!-- CONTENT -->

<?php
$coronaviruss = array();
$handle=opendir('coronavirus');
while (false !== ($coronavirus = readdir($handle))):
    if(stristr($coronavirus,'.html')):
        $coronaviruss[] = $coronavirus;
    endif;
endwhile;
sort($coronaviruss);

?>
<h2 class="section">Experimental patterns</h2>
<?php
foreach ($coronaviruss as $coronavirus):
    echo '<div class="pattern">';
    echo '<div class="display">';
    include('coronavirus/'.$coronavirus);
    echo '</div>';
    echo '<div class="source">';
    echo '<textarea rows="6" cols="30">';
    echo htmlspecialchars(file_get_contents('coronavirus/'.$coronavirus));
    echo '</textarea>';
    echo '<p><a href="coronavirus/'.$coronavirus.'">'.$coronavirus.'</a></p>';
    echo '</div>';
    echo '</div>';
    echo '<div class="pattern-separator"></div>';
endforeach;
?>


<?php
include 'inc/footer.php';
?>