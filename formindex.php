<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body class="bg-primary">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h2>Registration Form</h2>
				<form action="formdata.php" class="form-container" method="post">
					<div class="form-group">
						<label>First Name</label>
						<input type="text" name="firstname" class="form-control">
					</div>
					<div class="form-group">
						<label>Last Name</label>
						<input type="text" name="lastname" class="form-control">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="text" name="password" class="form-control">
					</div>
					<div class="form-group">
						<label>Confirm Password</label>
						<input type="text" name="confirmpass" class="form-control">
					</div>
					<div class="form-check">
						<label>Gender</label> &nbsp; &nbsp;
                        <input class="form-check-input" value="male" type="radio" name="gender" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                         Male
                        </label>
                        <input class="form-check-input" value="female "type="radio" name="gender" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                         Female
                        </label>
                    </div>
                    <!-- <div class="form-check">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <label class="form-check-label" for="flexRadioDefault1">
                        <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                         Female
                        </label>
                    </div> -->
					<!-- <div class="form-group">
						<label>Gender</label>
						<div class="custom-select">
						<select class="form-select">
							<option selected>select</option>
							<option value="male">Male</option>
							<option value="female">Female</option>
						</select>
					</div>
					</div> -->
					<div class="form-group">
						<label>Email</label>
						<input type="text" name="emailadd" class="form-control">
					</div>
					<div class="form-group">
						<label>Phone num</label>
						<input type="text" name="phonenum" class="form-control">
					</div>
					<div class="form-group">
						<label>Address</label>
						<textarea type="textarea" name="address" rows="3" class="form-control"></textarea>
					</div>

					<button type="submit" class="btn btn-info">submit</button>
					<button type="Delete" class="btn btn-info">Delete</button>
	
				</form>
			</div>
		</div>
	</div>					                          
</body>
</html>