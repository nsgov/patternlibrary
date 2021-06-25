<?php
	$title = 'Tags';
	include 'inc/header.php';
	include 'inc/breadcrumb.php';
?>

<h1>Tags</h1>

<p>
	Tags can be used to categorize content with a set of topics or taxonomy terms. Tags are marked up as an unordered list.
</p>

<p>Usage notes:</p>
<ul>
	<li>Tags should always be presented in alphabetical order</li>
	<li>Tags should never be used to replace navigation</li>
	<li>Tags can be linked or unlinked</ul>
</ul>

<p>
	Working example of an early version: <a href="https://novascotia.ca/reopening-plan">Reopening plan: Phase overview</a>
</p>

<div class="pattern">
	<div class="display">
		<ul class="tags">
			<li><a href="#">Continuing care</a></li>
			<li><a href="#">Education</a></li>
			<li><a href="#">Fitness and recreation</a></li>
			<li><a href="#">Personal services</a> </li>
			<li><a href="#">Retail</a> </li>
			<li><a href="#">Travel</a> </li>
		</ul>
	</div>
	<div class="source">
		<textarea rows="6" cols="30">
		
	<ul class="tags">
		<li><a href="#">Continuing care</a></li>
		<li><a href="#">Education</a></li>
		<li><a href="#">Fitness and recreation</a></li>
		<li><a href="#">Personal services</a> </li>
		<li><a href="#">Retail</a> </li>
		<li><a href="#">Travel</a> </li>
	</ul>
		</textarea>
	<p><a href="tag/tags-default-linked.html">tags-default-linked.html</a></p>
	</div>
</div>


<div class="pattern">
	<div class="display">
<ul class="tags">
	<li>Continuing care</li>
	<li>Education</li>
	<li>Fitness and recreation</li>
	<li>Personal services</li>
	<li>Retail</li>
	<li>Travel</li>
</ul>
	</div>
	<div class="source">
		<textarea rows="6" cols="30">
		
<ul class="tags">
	<li>Continuing care</li>
	<li>Education</li>
	<li>Fitness and recreation</li>
	<li>Personal services</li>
	<li>Retail</li>
	<li>Travel</li>
</ul>
		</textarea>
	<p><a href="tag/tags-default-unlinked.html">tags-default-unlinked.html</a></p>
	</div>
</div>

<?php
	include 'inc/footer.php';
?>