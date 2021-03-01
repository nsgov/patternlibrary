<?php
$host = $_SERVER['HTTP_HOST']; 
	if($host == "nsgov.github.io" or $host == "github.io") {
		echo 'https://nsgov.github.io/patternlibrary'; 
	} else {
		echo 'https://cns.pages.novascotia.ca/patternlab/';
	} 
?>
		
			
			<span aria-hidden="true" id="you-are-here-text">you are here</span>
			<nav class="breadcrumbs" id="breadcrumbs">
				<a href="<?php echo "$host"; ?>" rel="up" class="breadcrumb" hreflang="en" lang="en">Government of Nova Scotia UI Pattern Library</a>
				<span class="breadcrumb"><?php echo "$title"; ?></span>
			</nav>