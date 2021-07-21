<DOCTYPE!>
<!DOCTYPE html>
<html>
<head>

	<!--------------------Bootstrap CSS------------------->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-------------------Google fonts--------------------->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">

	<!-------------------W3 animations-------------------->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style>
		.container{
			margin-top: 12%;
		}
		.fontstyle{
			font-family: 'Acme', sans-serif;
		}
		.col-4{
			padding-top: 4%;
			padding-bottom: 4%;
			border-radius: 25px;
			background-color: black;
		}
		.algn{
			position: absolute;
		    top: 50%;
		    left: 50%;
		    -ms-transform: translate(-50%, -50%);
		    transform: translate(-50%, -50%);
		}
	</style>
	<title>All Students | Student Records</title>
</head>
<body>
	<font class="fontstyle">
		<?php require_once "./navbar.php" ?>
		<div class="container">
			<?php

				$v = fopen("View.csv", "w");
				$lines = file("students.csv", FILE_SKIP_EMPTY_LINES | FILE_IGNORE_NEW_LINES);
				foreach ($lines as $line) {
				    $csv = str_getcsv($line);
				    if (count(array_filter($csv)) != 0) {
				        fputcsv($v, $csv);
				    }
				}
				fclose($v);

				$h = fopen("View.csv", "r");

				$lst_of_stu_rs = [];
				 //To store CSV in form of multidimensional array

				while (! feof($h)) {
					$lst_of_stu_rs[] = fgetcsv($h);
				}
				fclose($h); 
			?>
			<p style="padding-left: 40%;display: inline-flex; font-size:35px; color:#126e82;"><i class="fa fa-address-card" style="color: #126e82; font-size:60px;"></i> &nbsp; &nbsp;Student Details</p>
			<table class="table table-borderless table-hover table-dark"style="background-image:linear-gradient(#248da3, #2c4b52);">
    			<thead>
				    <tr style="text-align: left;">
				    	<th scope="col">Sl. No</th>
				     	<th scope="col">USN</th>
				        <th scope="col">Name</th>
				        <th scope="col">Age</th>
				        <th scope="col">Mail id</th>
				        <th scope="col">Phone</th>
				    </tr>
    			</thead>
  				<tbody>
  					<?php 
  						
  						foreach ($lst_of_stu_rs as $key1 => $val1) {	
				    	if(is_array($val1)){
				    ?>
				    <tr>
				    	<td style="text-align: left"><?php echo $key1+1;?></td>
				    	<?php 
			    			foreach ($val1 as $key2 => $val2) {
			    				if($key2<1)continue;
				    	?>
					    <td style="text-align: left;"><?php echo $val2;?></td>
					    <?php 
						}
						}
					    ?>
				    </tr>
				    <?php 
					}
				    ?>
		        </tbody>
			</table>
		</div>
	</font>
</body>
</html

