<?php
	$title = 'Accessible accordions';
	include 'inc/header.php';
	include 'inc/breadcrumb.php';
?>

<h1><?php echo "$title"; ?></h1>

<p>Most of the time, accordions should be avoided. It is best to show all your content at once rather than hide chunks of it for cosmetic reasons.</p>

<p>It is a myth that users do not scroll. You should not worry too much about page length.</p>

<p>However, there are times when using an accordion for supplementary information makes sense. For programs that have an online application process, the online method is the primary call to action and other ways to apply are inside an accordion.</p>

<h2>Accordion requirements</h2>
<p>Here are the supporting files you will need:</p>
<ul>
    <li><a href="https://beta.novascotia.ca/themes/ignition/js/aria.accordion.js">aria.accordion.js</a></li>
    <li><a href="https://beta.novascotia.ca/themes/ignition/css/aria.accordion.css">aria.accordion.css</a></li>
    <li><a href="https://beta.novascotia.ca/core/assets/vendor/modernizr/modernizr.min.js?v=3.3.1">modernizr.min.js</a></li>
</ul>


<script src="https://beta.novascotia.ca/themes/ignition/js/aria.accordion.js"></script>
    <script src="https://beta.novascotia.ca/core/assets/vendor/modernizr/modernizr.min.js?v=3.3.1"></script>


<!-- accordion -->

<?php
$accordions = array();
$handle=opendir('accordion');
while (false !== ($accordion = readdir($handle))):
    if(stristr($accordion,'.html')):
        $accordions[] = $accordion;
    endif;
endwhile;
sort($accordions);

?>
<h2 class="section">Accessible "Other ways to apply" accordion</h2>
<?php
foreach ($accordions as $accordion):
    echo '<div class="pattern">';
    include('accordion/'.$accordion);
    echo '</div>';
    echo '<div class="pattern">';
    echo '<textarea rows="6" cols="30">';
    echo htmlspecialchars(file_get_contents('accordion/'.$accordion));
    echo '</textarea>';
    echo '<p><a href="accordion/'.$accordion.'">'.$accordion.'</a></p>';
    echo '</div>';
    echo '<div class="pattern-separator"></div>';
endforeach;
?>
    
<?php
	include 'inc/footer.php';
?>