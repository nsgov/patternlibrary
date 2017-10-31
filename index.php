<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>NSGov UI Pattern Library</title>
<link rel="stylesheet" href="global.css">
<link rel="stylesheet" href="css/saltire.css">
<link href='http://fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
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

<div class="container">
<h1>Province of Nova Scotia UI Pattern Library</h1>

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
<h2 class="section">Buttons</h1>
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
    echo '<hr />';

endforeach;
?>



<!-- FORMS -->
<?php
$forms = array();
$handle=opendir('forms');
while (false !== ($form = readdir($handle))):
    if(stristr($form,'.html')):
        $forms[] = $form;
    endif;
endwhile;
sort($forms);

?>
<h2 class="section">Form Elements</h2>
<?php
foreach ($forms as $form):
    echo '<div class="pattern">';
    echo '<div class="display">';
    include('forms/'.$form);
    echo '</div>';
    echo '<div class="source">';
    echo '<textarea rows="6" cols="30">';
    echo htmlspecialchars(file_get_contents('forms/'.$form));
    echo '</textarea>';
    echo '<p><a href="forms/'.$form.'">'.$form.'</a></p>';
    echo '</div>';
    echo '</div>';
    echo '<hr />';
endforeach;
?>



<!-- TYPOGRAPHY -->

<?php
$typographys = array();
$handle=opendir('typography');
while (false !== ($typography = readdir($handle))):
    if(stristr($typography,'.html')):
        $typographys[] = $typography;
    endif;
endwhile;
sort($typographys);

?>
<h2 class="section">Typography</h2>
<?php
foreach ($typographys as $typography):
    echo '<div class="pattern">';
    echo '<div class="display">';
    include('typography/'.$typography);
    echo '</div>';
    echo '<div class="source">';
    echo '<textarea rows="6" cols="30">';
    echo htmlspecialchars(file_get_contents('typography/'.$typography));
    echo '</textarea>';
    echo '<p><a href="typographys/'.$typography.'">'.$typography.'</a></p>';
    echo '</div>';
    echo '</div>';
    echo '<hr />';
endforeach;
?>


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
<h2 class="section">Messages and Feedback</h2>
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
    echo '<hr />';
endforeach;
?>


<!-- CONTENT -->

<?php
$contents = array();
$handle=opendir('content');
while (false !== ($content = readdir($handle))):
    if(stristr($content,'.html')):
        $contents[] = $content;
    endif;
endwhile;
sort($contents);

?>
<h2 class="section">Content</h2>
<?php
foreach ($contents as $content):
    echo '<div class="pattern">';
    echo '<div class="display">';
    include('content/'.$content);
    echo '</div>';
    echo '<div class="source">';
    echo '<textarea rows="6" cols="30">';
    echo htmlspecialchars(file_get_contents('content/'.$content));
    echo '</textarea>';
    echo '<p><a href="content/'.$content.'">'.$content.'</a></p>';
    echo '</div>';
    echo '</div>';
    echo '<hr />';
endforeach;
?>




<!-- NAVIGATION -->

<?php
$navigations = array();
$handle=opendir('navigation');
while (false !== ($navigation = readdir($handle))):
    if(stristr($navigation,'.html')):
        $navigations[] = $navigation;
    endif;
endwhile;
sort($navigations);

?>
<h2 class="section">Navigation Elements</h2>
<?php
foreach ($navigations as $navigation):
    echo '<div class="pattern">';
    echo '<div class="display">';
    include('navigation/'.$navigation);
    echo '</div>';
    echo '<div class="source">';
    echo '<textarea rows="6" cols="30">';
    echo htmlspecialchars(file_get_contents('navigation/'.$navigation));
    echo '</textarea>';
    echo '<p><a href="navigations/'.$navigation.'">'.$navigation.'</a></p>';
    echo '</div>';
    echo '</div>';
    echo '<hr />';
endforeach;
?>



</div>


	<script src="js/script.min.js"></script>
</body>
</html>
