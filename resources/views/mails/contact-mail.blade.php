<!DOCTYPE html>
<html>
<head>
	<title>Contact Message</title>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.7/cerulean/bootstrap.min.css">
	<link href='https://fonts.googleapis.com/css?family=Amiko' rel='stylesheet'>
	<style type="text/css">
		body {
		    font-family: 'Amiko';font-size: 12px;
		}

		table, td, th {
		    border: 1px solid #ddd;
		    text-align: left;
		}

		table {
		    border-collapse: collapse;
		    width: 50%;
		}

		th, td {
		    padding: 15px;
		}
	</style>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-2">
			<h2 class="lead">Contact US</h2>
			<p>
				Hello Cavidel,
			</p>
			<p>
				<b>{{ ucfirst($data->name) }} just sent a new message.
				<br /><br />

				<p>{!! $data->body !!}</p>

				<p>Client email: <a href="mailto:{{ $data->email }}"> {{ $data->email }} </a></p>
				<p>Client Phone: {{ $data->phone }}</p>
				<hr />
			</p>
			<br />
		</div>
	</div>
	<center>© Copyright Cavidel, Inc. All rights reserved.</center>
</div>
</body>
</html>
