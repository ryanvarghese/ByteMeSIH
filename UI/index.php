<?php include ('server.php'); ?>

<!DOCTYPE html>
<html>
<head>
<title>FORM</title>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="style1.css"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="login-box" id="container">
	<div class="mb3">
		<form action="index.php" method="post" enctype="multipart/form-data">
        <div class="user-box">
			<input type="text" name="name" class="form-control" placeholder="Name" id="formGroupExampleInput" required />
        </div>
        <div class="user-box">
			<input type="email" name="email" class="form-control" placeholder="Email" id="formGroupExampleInput2" required />
        </div>
        <div class="user-box">
            <input type="number" name="phone" class="form-control" placeholder="Phone No." id="formGroupExampleInput2" required />
        </div>
        <div class="user-box">
            <label for="formGroupExampleInput4" class="form-label">Add Photo</label><br><br>
            <input type="file" name="filephoto" class="form-control" id="formGroupExampleInput4" required />
        </div>
        <div class="user-box">
            <label for="formGroupExampleInput4" class="form-label">Add Signature</label><br><br>
            <input type="file" name="filesign" class="form-control" id="formGroupExampleInput4" required />
        </div>
            <!-- <input type="file" name="file" /> -->
			<button type="submit" name="submit">submit</button>

		</form>
	</div>
</div>


</body>
</html>
