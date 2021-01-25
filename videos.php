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
  <img src="img/ns-vip-white.svg" alt="Government of Nova Scotia" style="margin: 2em; width: 200px; height: auto;" />
  <div class="main-link"><a href="https://cns.pages.novascotia.ca/patternlab/">Main page</a></div>
</div>

<div class="pattern-container">
<h1>Embedding Video</h1>

<p>Videos are hosted on the <a href="https://www.youtube.com/user/nsgov">NSGOV YouTube channel</a> and are embedded into pages.</p>

<p>A little manual editing is required to make the default YouTube embed code resposive. Static width and height must be remove, and you can set a min/max width/height inline.</p>


<!-- Video patterns -->
<?php
$videos = array();
$handle=opendir('video');
while (false !== ($video = readdir($handle))):
    if(stristr($video,'.html')):
        $videos[] = $video;
    endif;
endwhile;
sort($videos);

?>
<h2 class="section">Video patterns</h1>
<?php
foreach ($videos as $video):
    echo '<div class="pattern">';
    echo '<div class="display">';
    include('video/'.$video);
    echo '</div>';
    echo '<div class="source">';
    echo '<textarea rows="6" cols="30">';
    echo htmlspecialchars(file_get_contents('video/'.$video));
    echo '</textarea>';
    echo '<p><a href="videos/'.$video.'">'.$video.'</a></p>';
    echo '</div>';
    echo '</div>';
    echo '<div class="pattern-separator"></div>';

endforeach;
?>

</div>


	<script src="js/script.min.js"></script>
</body>
</html>
