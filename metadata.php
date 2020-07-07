<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>NSGov UI Pattern Library</title>
<link rel="stylesheet" href="global.css">
<link rel="stylesheet" href="https://beta.novascotia.ca/themes/ignition/saltire.css">
<link rel="stylesheet" href="https://novascotia.ca/clf/fonts/font-awesome/css/font-awesome.min.css">

<style>
.pattern {
    clear: both;
    overflow: visible;
    display: block;
    padding-top: 1em;

}
.pattern .display {
    width: 65%;
    float: left;
}
.pattern .source {
    width: 30%;
    float: right;
}
.pattern .source textarea {
    width: 90%;
}

</style>
</head>
<body>
<div id="patternlab-header">
  <img src="img/ns-vip-white.svg" alt="Province of Nova Scotia" style="margin: 2em; width: 200px; height: auto;" />
  <div class="main-link"><a href="https://cns.pages.novascotia.ca/patternlab/">Main page</a></div>
</div>

<div class="pattern-container">
<h1>How we use Metadata</h1>
<p>
	Metadata is data about data. On the web it is use to describe a webpage. This information is not visible on your page, it is used by browsers, search engines and other services. Meta tags should always be placed inside the &lt;head&gt; in your HTML document.
</p>
<p>
Our basic metadata stack is a mix of <a href="https://www.dublincore.org/specifications/dublin-core/dcmi-terms/">Dublin Core</a> and <a href="https://ogp.me/">Open Graph</a>:
</p>

<ul>
	<li>title</li>
	<li>dcterms.title</li>
	<li>dcterms.creator</li>
	<li>dcterms.description</li>
	<li>dcterms.publisher</li>
	<li>og:title</li>
	<li>og:description</li>
	<li>og:url</li>
	<li>og:site_name</li>
	<li>og:type</li>
	<li>og:image</li>
	<li>og:image:alt</li>
</ul>

<p>
	Some additional tags we use are:
</p>

<ul>
	<li>fb:app_id – this tag associates your page with Facebook allowing you to use Facebook insights to view analytics for traffic to your site from Facebook.</li>
	<li>twitter:site – this tag associates your page with your Twitter account.</li>
</ul>

<p>
	For marketing campaigns we will occasionally use additional <a href="https://developer.twitter.com/en/docs/tweets/optimize-with-cards/guides/getting-started">Twitter specific tags</a> (twitter:card, twitter:site in particular) to configure the ‘card’ that will show when the URL of the page is tweeted. 
</p>
<p>
	Part of our process is reviewing pages with the <a href="https://developers.facebook.com/tools/debug/">Facebook Sharing Debugger</a>. This will give you a preview of the ‘card’ that will appear when you share your link.
</p>
<p>
	For marketing pages that we’ve added Twitter specific tags for, we also review using the <a href="https://cards-dev.twitter.com/validator">Twitter validator</a>.
</p>


</div>


	<script src="js/script.min.js"></script>
</body>
</html>
