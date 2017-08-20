<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<div class="content">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<form class="form-horizontal" action="form.php" method="post">
				<div class="form-group">
					<label for="inputname" class="col-sm-2 control-label">Name</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control" id="inputname" name="name" placeholder="Name" require>
					</div>
				</div>
				<div class="form-group">
					<label for="inputsurname" class="col-sm-2 control-label">Surname</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control" id="inputsurname" name="surname" placeholder="Surname" require>
					</div>
				</div>			
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
					  <button type="submit" class="btn btn-primary">Sign in</button>
					</div>
				</div>
			</form>
		</div>
	</div>
		
	</div>
</body>
</html>