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
			<h2 class="lead">New Order Request</h2>
			<p>
				Hello Cavidel,
			</p>
			<p> 
				<b>{{ ucfirst($data['name']) }}, has requested for the following Software.<br />
				See details below.
				<br /><br />

				<p>{{ $data['body'] }}</p>

				<p>Client email: {{ $data['email'] }}</p>

				<div class="panel panel-default">
					<div class="panel-heading"><h4>Details</h4></div>
					<div class="panel-body">
						<table class="table">
							<thead>
								<tr>
									<th>Software</th>
									<th>Details</th>
								</tr>
							</thead>
							<tbody>
								@foreach($data['software_lists'] as $item)
									<tr>
										<td>{{ $item['mail_name'] }}</td>
										<td>{{ $item['mail_details'] }}</td>
									</tr>
								@endforeach
							</tbody>
						</table>
						<br />
					</div>
				</div>
				<hr />
			</p>
			<br />
		</div>
	</div>
</div>
</body>
</html>
© Copyright Cavidel, Inc. All rights reserved.