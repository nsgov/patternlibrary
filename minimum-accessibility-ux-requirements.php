<?php
	$title = 'Website accessibility and user experience minimum requirements';
	include 'inc/header.php';
	include 'inc/breadcrumb.php';
?>

<h1><?php echo "$title"; ?></h1>

<p>
	Last updated: 13 September, 2021
</p>

<h2>Requirements</h2>
<ul>
	<li>Websites/applications must be designed and built to be accessible and inclusive</li>
	<li>Websites/applications must be browser-type and browser-version independent</li>
	<li>Websites/applications must  be device independent: desktop computers, laptops, tablets, phones, next generation devices and input-device independent (mouse, keyboard, touch, switch)</li>
	<li>Websites/applications must be planned, designed, built, tested, and maintained in compliance with the latest equivalents to HTML 5.2, WCAG 2.1 AA, Inclusive Design Principles, Cognitive Accessibility UX Principles, valid CSS, and valid scripting</li>
	<li>Alt text should be provided for all images. If there is a need to have a text on a graphic/photo, it must be an overlay, not embedded in the image.</li>
	<li>Text and background colour combinations should be tested to ensure they meet the minimum contrast ratio standard of 4:5:1 (see: <a href="https://www.w3.org/TR/WCAG20/#visual-audio-contrast-contrast">WCAG success criteria 1.4.3)</a></li>
	<li>Websites must include Open Graph metadata stack (title, URL, description, site name, image (optional). Combination of Dublin core and Open Graph is acceptable (this is for when the user view website on mobile, they can view the correct information associated with the site). More details: <a href="metadata.html">How we use metadata</a></li>
	<li>Depending on the intended use, websites/applications will follow government brand standards</li>
</ul>

<h2>Resources</h2>
<ul>
	<li><a href="https://nsgov.github.io/patternlibrary/">Government of Nova Scotia User Interface Pattern Library</a></li>
	<li>WCAG 2.1, at <a href="https://www.w3.org/TR/WCAG21/">w3.org/TR/WCAG21</a></li>
	<li>Inclusive Design Principles, at <a href="https://inclusivedesignprinciples.org/">inclusivedesignprinciples.org</a></li>
	<li><a href="https://www.ab11y.com/articles/ux-principles-that-include-cognitive-accessibility/#4.-clear-communication">UX Principles that include Cognitive Accessibility</a></li>
	<li>HTML 5.2, at <a href="https://www.w3.org/TR/html52/">w3.org/TR/html52</a></li>
	<li>Cascading Style Sheets home page, at <a href="https://www.w3.org/Style/CSS/Overview.en.html">w3.org/Style/CSS</a></li>
</ul>


<?php
include 'inc/footer.php';
?>