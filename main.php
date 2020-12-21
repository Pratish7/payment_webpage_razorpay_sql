<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Payment</title>
<link rel="stylesheet" href="css/formstyle.css"/>
</head>
<body>


<div class="card-form">
	<form class ="signup" name="personalDetails" action="index.php" method="post">
		<div class="form-title">Payment Portal</br> </div>

			<div class='row'>
				<input type="text" id ="main_name" name="name" placeholder="Name" required /><br>
			</div>
			<div class='row'>
				<input type="email" name="email" placeholder="Email" required /><br>
			</div>
			<div class='row'>
				<input type="number" name="phone" placeholder="Mobile" required /><br>
			</div>
			<div class='row'>
				<input type="text" name="add" placeholder="Address" required /><br>
			</div>
			<div class='row'>
				<input type="number" name="qty" placeholder="Quantity" required /><br>
			</div>
			<div class='row'>
				<button class = "proceed-btn" type="submit" name="submit">Proceed</Button>
			</div>
	</form>

</div>

</body>
</html>
