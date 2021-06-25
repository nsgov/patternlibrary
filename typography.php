<?php
	$title = 'Typography';
	include 'inc/header.php';
	include 'inc/breadcrumb.php';
?>

<h1><?php echo "$title"; ?></h1>

<p>
    Our online typeface is <a href="https://fonts.google.com/specimen/Open+Sans">Open Sans</a>.
    <br />
    CSS font stack: <span class="code">font-family: "open_sansregular", Helvetica, Arial, Tahoma, sans-serif</span>
</p>
<p>
    In data tables, we often use a monospace font for numerical figures.
    <br />
    CSS font stack: <span class="code">Menlo, Monaco, Consolas, "Courier New", monospace</span>
</p>

<h2>Font sizes</h2>

<table class="table">
    <thead>
        <tr>
            <th>
                Style
            </th>
            <th>
                Size
            </th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <h1>Heading 1</h1>
            </td>
            <td>
                2.25em/36px
            </td>
        </tr>
        <tr>
            <td>
                <h2>Heading 2</h2>
            </td>
            <td>
                1.7em/27.2px
            </td>
        </tr>
        <tr>
            <td>
                <h3>Heading 3</h3>
            </td>
            <td>
                1.35em/21.6px
            </td>
        </tr>
        <tr>
            <td>
                <h4>Heading 4</h4>
            </td>
            <td>
                1.15em/18.4px
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    Paragraph text
                </p>
            </td>
            <td>
                1em/16px
            </td>
        </tr>
        <tr>
            <td>
                <small>Small</small>
            </td>
            <td>
                0.875em/14px
            </td>
        </tr>
    </tbody>
</table>


<p>For information about writing online, please refer to the <a href="https://novascotia.sharepoint.com/sites/Projects/CNSGovWebStrategy/Tools%20and%20Guides/Forms/AllItems.aspx?id=%2Fsites%2FProjects%2FCNSGovWebStrategy%2FTools%20and%20Guides%2FOnline%20Writing%20Guide%20v2%2Epdf&parent=%2Fsites%2FProjects%2FCNSGovWebStrategy%2FTools%20and%20Guides">online writing guide (PDF)</a>.</p>

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
<h2 class="section">Typographic patterns</h2>
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
    echo '<p><a href="typography/'.$typography.'">'.$typography.'</a></p>';
    echo '</div>';
    echo '</div>';
    echo '<div class="pattern-separator"></div>';
endforeach;
?>


<?php
	include 'inc/footer.php';
?>