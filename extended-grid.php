<?php
	$title = 'Extended grid patterns';
	include 'inc/header.php';
	include 'inc/breadcrumb.php';
?>

<h1>Extended grid patterns</h1>

<p>
	Some provisional grid patterns leveraging CSS grid and flexbox.
</p>


<div class="pattern">
	<div class="display">
<!-- Columns: Column 2 automatically fills up remaining width -->
<div class="row flex">
	<div class="col">
		<div>
			<img src="img/spring-garden.jpg" style="width: 100px; height: auto;" />
		</div>
	</div>
	<div class="col flex-1">
		<div>
			<p>
				Adding the <span class="code">flex-1</span> class to this column makes it fill the remaining width.
			</p>
		</div>
	</div>
</div>


	

	</div>
	<div class="source">
		<textarea rows="6" cols="30">
		
	<!-- Columns: Column 2 automatically fills up remaining width -->
<div class="row flex">
	<div class="col">
		<div>
			<img src="img/spring-garden.jpg" style="width: 100px; height: auto;" />
		</div>
	</div>
	<div class="col flex-1">
		<div>
			<p>
				Adding the <span class="code">flex-1</span> class to this column makes it fill the remaining width.
			</p>
		</div>
	</div>
</div>


		</textarea>
	<p><a href="extendedgrid/row-cols-column-2-auto-fill.html">row-cols-column-2-auto-fill.html</a></p>
	</div>
</div>



<div class="pattern">
	<div class="display">

	<div class="row flex flex-wrap">
	<div class="col col-12 col-6-sm col-4-mid col-3-lg">
		<div class="gray-bg">Column 1</div>
	</div>
	<div class="col col-12 col-6-sm col-4-mid col-3-lg">
		<div class="gray-bg">Column 2</div>
	</div>
	<div class="col col-12 col-6-sm col-4-mid col-3-lg">
		<div class="gray-bg">Column 3</div>
	</div>
	<div class="col col-12 col-6-sm col-4-mid col-3-lg">
		<div class="gray-bg">Column 4</div>
	</div>
</div>

	</div>
	<div class="source">
		<textarea rows="6" cols="30">
<div class="row flex flex-wrap">
	<div class="col col-12 col-6-sm col-4-mid col-3-lg">
		<div class="gray-bg">Column 1</div>
	</div>
	<div class="col col-12 col-6-sm col-4-mid col-3-lg">
		<div class="gray-bg">Column 2</div>
	</div>
	<div class="col col-12 col-6-sm col-4-mid col-3-lg">
		<div class="gray-bg">Column 3</div>
	</div>
	<div class="col col-12 col-6-sm col-4-mid col-3-lg">
		<div class="gray-bg">Column 4</div>
	</div>
</div>
	
		</textarea>
	<p><a href="extendedgrid/different-columns-at-breakpoints.html">different-columns-at-breakpoints.html</a></p>
	</div>
</div>




<div class="pattern">
	<div class="display">

	<div class="row flex flex-align-center">
	<div class="col">
		<div class="gray-bg">Column 1</div>
	</div>
	<div class="col">
		<div class="gray-bg">
		<p>Column 2: Adding <span class="code">flex-align-centre</span> to the parent row will vertically align the columns to the centre. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur consectetur augue id est accumsan, ut ornare lectus auctor. Aliquam laoreet ante vitae lorem rutrum, quis faucibus nunc elementum. Nulla ornare turpis a nulla pretium ultrices. Sed ultricies venenatis enim a condimentum. Suspendisse sed augue vulputate, rhoncus lorem id, blandit ante. Sed ut nulla vel risus fermentum vehicula semper eu est. Quisque vel odio feugiat, tincidunt nunc eget, mollis dolor. Curabitur eros risus, tincidunt ut ante ac, condimentum consectetur ligula. Mauris euismod sem id est eleifend condimentum. Vestibulum malesuada luctus est et fringilla. Duis laoreet venenatis condimentum. Fusce auctor ligula et erat varius, nec pulvinar augue posuere. Pellentesque mi sapien, lacinia in risus a, iaculis rhoncus mi. Proin non mauris vitae urna ullamcorper cursus. 
		</p>
		</div>
	</div>
</div>

	</div>
	<div class="source">
		<textarea rows="6" cols="30">
<div class="row flex flex-align-center">
	<div class="col">
		<div class="gray-bg">Column 1</div>
	</div>
	<div class="col">
		<div class="gray-bg">
		<p>Column 2: Adding <span class="code">flex-align-centre</span> to the parent row will vertically align the columns to the centre. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur consectetur augue id est accumsan, ut ornare lectus auctor. Aliquam laoreet ante vitae lorem rutrum, quis faucibus nunc elementum. Nulla ornare turpis a nulla pretium ultrices. Sed ultricies venenatis enim a condimentum. Suspendisse sed augue vulputate, rhoncus lorem id, blandit ante. Sed ut nulla vel risus fermentum vehicula semper eu est. Quisque vel odio feugiat, tincidunt nunc eget, mollis dolor. Curabitur eros risus, tincidunt ut ante ac, condimentum consectetur ligula. Mauris euismod sem id est eleifend condimentum. Vestibulum malesuada luctus est et fringilla. Duis laoreet venenatis condimentum. Fusce auctor ligula et erat varius, nec pulvinar augue posuere. Pellentesque mi sapien, lacinia in risus a, iaculis rhoncus mi. Proin non mauris vitae urna ullamcorper cursus. 
		</p>
		</div>
	</div>
</div>
	
		</textarea>
	<p><a href="extendedgrid/vertically-centred-columns.html">vertically-centred-columns.html</a></p>
	</div>
</div>



<?php
	include 'inc/footer.php';
?>