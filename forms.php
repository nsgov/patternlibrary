<?php
	$title = 'Form advice';
	include 'inc/header.php';
	include 'inc/breadcrumb.php';
?>

<h1><?php echo "$title"; ?></h1>

<p>Online forms must be simple to use and accessible to all users no matter what device they are using.</p>

<p>We recommend:</p>

<ul>
  <li>Labels must be associated with controls.</li>
  <li>Inline validation is preferred.</li>
  <li>A reset button is rarely necessary and not recommended.</li>
  <li>Users should be able to input their phone number or postal code however they like: a little javascript on the backend can strip out unwanted spaces or characters so it will conform to the format your system requires.</li>
  <li>Always provide a legend when you use a fieldset. The legend will be read for each control in the fieldset, so keep it brief.</li>
  <li>Never use javascript "jump menus", always provide a submit button.</li>
</ul>

<p>For detailed information about creating accessible forms, please refer to <a href="https://webaim.org/techniques/forms/">WebAIM's article: "Creating Accessible Forms"</a>.</p>
<!-- FORMS -->

<?php
include 'inc/footer.php';
?>