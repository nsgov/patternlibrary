<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>NSGov UI Pattern Library</title>
<link rel="stylesheet" href="global.css">
<link rel="stylesheet" href="css/saltire.css">
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

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
<h1>Messages/Feedback</h1>

<p>These blocks are used to provide action based feedback or communicate critical information.</p>

<p>There are four different kinds:</p>

<ul>
  <li>Success (green): if a user action was successful, or if a program or service is now open or available.</li>
  <li>Warning (yellow): if a user action was only partially successful, or if a program or service is now closed.</li>
  <li>Error (red): if a user action has failed</li>
  <li>Information (blue): for basic information related to the user task.</li>
  <li>Clear: for general information (not currently in use).</li>
</ul>

<!-- MESSAGES AND FEEDBACK -->

<?php
$feedbacks = array();
$handle=opendir('feedback');
while (false !== ($feedback = readdir($handle))):
    if(stristr($feedback,'.html')):
        $feedbacks[] = $feedback;
    endif;
endwhile;
sort($feedbacks);

?>
<h2 class="section">Messages and feedback patterns</h2>
<?php
foreach ($feedbacks as $feedback):
    echo '<div class="pattern">';
    echo '<div class="display">';
    include('feedback/'.$feedback);
    echo '</div>';
    echo '<div class="source">';
    echo '<textarea rows="6" cols="30">';
    echo htmlspecialchars(file_get_contents('feedback/'.$feedback));
    echo '</textarea>';
    echo '<p><a href="feedback/'.$feedback.'">'.$feedback.'</a></p>';
    echo '</div>';
    echo '</div>';
    echo '<div style="clear:both; margin: 1.5em auto;"><hr /></div>';
endforeach;
?>


</div>


	<script src="js/script.min.js"></script>
</body>
</html>
