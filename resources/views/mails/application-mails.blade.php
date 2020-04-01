<!DOCTYPE html>
<html>
<head>
	<title>New Contact Message</title>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.7/cerulean/bootstrap.min.css">
	<link href='https://fonts.googleapis.com/css?family=Amiko' rel='stylesheet'>
	<style type="text/css">
		body {
		    font-family: 'Amiko';font-size: 12px;
		}
	</style>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-2">
			<h2 class="lead">New Application Message</h2>
			<p>
				Hello Cavidel,
			</p>
			<p> 
				<b>{{ ucfirst($data['firstname']) }}, has sent his resume.<br />
				See details below.
				<br /><br />

				<div class="panel panel-default">
					<div class="panel-heading"><h4>Details</h4></div>
					<div class="panel-body">
						<table class="table">
							<tr>
								<td>Name</td>
								<td>{{ ucfirst($data['firstname']) }} {{ ucfirst($data['lastname']) }}</td>
							</tr>
							<tr>
								<td>Email</td>
								<td>{{ $data['email'] }}</td>
							</tr>
							<tr>
								<td>Phone</td>
								<td>{{ $data['mobile'] }}</td>
							</tr>
						</table>
						<br />
					</div>
				</div>
				<hr />
				<h3>Here is a little description about {{ ucfirst($data['firstname']) }}</h3>
				<p>{{ $data['description'] }}</p> <br />

				<h3>Here is {{ ucfirst($data['firstname']) }} current address</h3>
				<p>{{ $data['address'] }}</p>
			</p>
			<p>Log in to Officatemate and Navigate to CV Capture</p>
			<br />
		</div>
	</div>
</div>
</body>
</html>
© Copyright Cavidel Products, Inc. All rights reserved.