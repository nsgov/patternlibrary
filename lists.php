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
<div id="header">
  <div class="site-title"><a href="https://cns.pages.novascotia.ca/patternlab/">Province of Nova Scotia UI Pattern Library</a></div>
</div>

<div class="pattern-container">
<h1>Lists</h1>

<p>Lists are helpful for breaking content up into manageable steps or chunks, making it easier to for users to scan.</p>

<p>Lists should be bulleted to make them easier to read. Long lists can be written as a paragraph with a lead-in sentence if it looks better.
  List items start with a lowercase letter and  have no period at the end. Use lists to present steps, groups, or sets of information.
  Give context for the list with a  brief introduction. You can use bullet points to make text easier to read. </p>

<h2>Unordered lists</h2>
<p>Things to keep in mind when using basic unordered lists:</p>
<ul>
  <li>you always use a lead-in line</li>
  <li>you always use a colon after the lead-in line</li>
  <li>the bullets make sense running on from the lead-in line</li>
  <li>you use lowercase at the start of the bullet</li>
  <li>you don’t use more than one sentence per bullet point — use commas, dashes, or semicolons to expand on an item</li>
  <li>you don’t put “or” or “and” after the bullets</li>
  <li>links appear within the text and not as the whole bullet</li>
  <li>there is no period after the last bullet point</li>
  <li>you try to use only 3 to 7 items in a list</li>
</ul>

<h2>Ordered lists</h2>

<p>Things to keep in mind when using basic ordered lists:</p>
<ul>
  <li>Use numbered steps instead of bullet points to guide a user through a process when the  order of the steps is important.</li>
  <li>You don’t need a lead-in line and you can use links in steps.</li>
  <li>Each step ends in a period because each step should be a complete sentence.</li>
</ul>



<!-- listS -->
<?php
$lists = array();
$handle=opendir('lists');
while (false !== ($list = readdir($handle))):
    if(stristr($list,'.html')):
        $lists[] = $list;
    endif;
endwhile;
sort($lists);

?>
<h2 class="section">List patterns</h1>
<?php
foreach ($lists as $list):
    echo '<div class="pattern">';
    echo '<div class="display">';
    include('lists/'.$list);
    echo '</div>';
    echo '<div class="source">';
    echo '<textarea rows="6" cols="30">';
    echo htmlspecialchars(file_get_contents('lists/'.$list));
    echo '</textarea>';
    echo '<p><a href="lists/'.$list.'">'.$list.'</a></p>';
    echo '</div>';
    echo '</div>';
    echo '<div style="clear:both; margin: 1.5em auto;"><hr /></div>';

endforeach;
?>

</div>


	<script src="js/script.min.js"></script>
</body>
</html>