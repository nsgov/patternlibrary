<?php
	$title = 'June 2021 release notes';
	include 'inc/header.php';
	include 'inc/breadcrumb.php';
?>

<h1>June 2021 release notes</h1>

<p>
	Updated patterns<sup><a href="#footnote">*</a></sup>:
</p>
<ul>
	<li>Breadcrumb: rewritten to support <span class="code">&lt;ol&gt;</span></li>
	<li>Messages: rewritten to use <span class="code">&lt;aside&gt;</span> element</li>
	<li>Ribbon header: size variations</li>
</ul>

<p>Additions:</p>
<ul>
	<li>Card patterns</li>
	<li>Colour detail page</li>
	<li>Dates and numbers guidance</li>
	<li>Ribbon header size variations (xs-lg)</li>
	<li>Ribbon footer</li>
	<li>Tags</li>
</ul>

<p id="footnote">
	* Legacy patterns will still work.
</p>

<?php
	include 'inc/footer.php';
?>