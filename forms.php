<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Saltire Form UI Pattern Library</title>
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

<div class="pattern-container">
<h1>Province of Nova Scotia Form UI Pattern Library</h1>

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
    echo '<div style="clear:both; margin: 1.5em auto;"><hr /></div>';
endforeach;
?>


</div>


	<script src="js/script.min.js"></script>
</body>
</html>
