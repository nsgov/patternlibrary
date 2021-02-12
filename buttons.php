<?php
	$title = 'Buttons';
	include 'inc/header.php';
	include 'inc/breadcrumb.php';
?>

<h1><?php echo "$title"; ?></h1>


<p>Buttons should only be used as a call to action, and the label should make it clear what the button will lead to.</p>

<p>For starting a service, the button text should contain a clear call to action to "Start" the service.</p>

<p>Please note:</p>
<ul>
  <li>If you are using a button outside of a form, instead of &lsquo;button&rsquo; use &lsquo;a&rsquo; - the classes work on both and the front end result is identical.</li>
  <li>Green buttons are intended for use as the main call to action on a page - you should never use more than one green button on a page. If your page has a few different calls to action - use blue (default).</li>
</ul>

<!-- BUTTONS -->
<?php
$buttons = array();
$handle=opendir('buttons');
while (false !== ($button = readdir($handle))):
    if(stristr($button,'.html')):
        $buttons[] = $button;
    endif;
endwhile;
sort($buttons);

?>
<h2 class="section">Button patterns</h1>
<?php
foreach ($buttons as $button):
    echo '<div class="pattern">';
    echo '<div class="display">';
    include('buttons/'.$button);
    echo '</div>';
    echo '<div class="source">';
    echo '<textarea rows="6" cols="30">';
    echo htmlspecialchars(file_get_contents('buttons/'.$button));
    echo '</textarea>';
    echo '<p><a href="buttons/'.$button.'">'.$button.'</a></p>';
    echo '</div>';
    echo '</div>';
    echo '<div class="pattern-separator"></div>';

endforeach;
?>

<?php
include 'inc/footer.php';
?>