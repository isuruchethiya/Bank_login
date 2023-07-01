<!doctype html>
<html lang="en">

<head>
	<title>Sidebar 05</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<?php
       include_once "./components/styles.components.php";

    ?>
</head>

<body>

	<div class="wrapper d-flex align-items-stretch">
        
        <?php  $page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'],"/")+1);?>
		<?php
		include_once"./components/sideNavbar.Components.php";
		?>
		<!-- Page Content  -->
		<div id="content" class="p-2 p-md-5 pt-2">
			<span style="font-size: 0.9rem ;">Dashboard / </span>
			<h1 style="font-size: 1rem; display: inline-block; margin: 0;">Home</h1>

			<div class="d-flex justify-content-end align-items-start mt-10">
				<div class="header_img">
					<img src="https://i.imgur.com/hczKIze.jpg" alt="" style="width: 45px;" class="rounded-circle">
				</div>
				<div class="ml-3">
					<h5 class="mb-0" style="font-size: 1rem;">Isuru chethiya</h5>
					<p class="mb-0" style="font-size: 0.7rem;">isuruche1234@gmail.com</p>
				</div>
			</div>
			<hr style="border-top: 1px solid #ff8000; margin-top: 1rem;">	       
		
		</div>
	</div>


    <?php
	include_once "./components/script.components.php";
	
	?> 

</body>

</html>