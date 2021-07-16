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

	<style>
		.container{
			margin-top: 80px;
		}
		.fontstyle{
			font-family: 'Acme', sans-serif;
			text-align: center;
			color: white;
		}
		.col-4{
			padding-top: 4%;
			padding-bottom: 4%;
			background-image: linear-gradient(#248da3, #2c4b52);
		}
		.algn{
			position: absolute;
		    top: 50%;
		    left: 50%;
		    -ms-transform: translate(-50%, -50%);
		    transform: translate(-50%, -50%);
		}
		.btn{
			width: 20%;

		}
	</style>
	<title>First Page</title>
</head>
<body>
	<font class="fontstyle">
		<?php require_once "./navbar.php" ?>
		<div class="container">
			<div class="row justify-content-around">
			    <div class="col-4">
			    	<form method="post" action="./deletecsv.php">
			    		<h2 style="color: white; text-align: center; padding-bottom: 20px;"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
  						<path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
						</svg>Enter USN</h2>
			    		<div class="form-group row">
						    <label class="col-sm-2 col-form-label" style="font-size: 20px;">USN:</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" id="floatingInput" name="usn" placeholder="University no" required>
						    <small style="font-size: 13px;">Use uppercase letters only.</small>
						    </div>
						</div>
						<div class="form-group row" style="margin-top: 30px;">
							<div class="col">
								<button type="submit" class="btn btn-outline-light">Submit</button>
							</div>
						</div>
			    	</form>
			    </div>
    		</div>
		</div>
	</font>
</body>
</html

