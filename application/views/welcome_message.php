<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	
	</style>
</head>
<body>

<div id="container">
	<h1>Welcome to CodeIgniter!</h1>

	<div id="body">
			<form method="post" action="<?php echo base_url('welcome/sendmail'); ?>">
				<table align="center" border="1">
				<tr>
					<th colspan="2">Send Email Demo</th>
				</tr>
				<tr>
					<td>Name:</td>
					<td><input type="name" name="name" required /></td>
				</tr>
				<tr>
					<td>Email:</td>
					<td><input type="email" name="email" required /></td>
				</tr>
				<tr>
					<td>Subject:</td>
					<td><input type="text" name="subject" required /></td>
				</tr>
				<tr>
					<td>Message:</td>
					<td><textarea name="message" required></textarea></td>
				</tr>
				<tr>
					<th colspan="2"><button type="submit">Send Email</button></th>
				</tr>
			</form>
	</div>

	
</div>

</body>
</html>