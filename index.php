<html>
<head>
	<title>..Welcome..</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  	<script src="facebook-js/js/fbscript.js"></script>
  	<!-- <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script> -->
</head>
<body>
<div class="jumbotron text-center">
  <h1>Welcome to TextBook</h1>
</div>

<div class="container">
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
			<h3>Login Using</h3>
			<div style="margin: 10px;"><?php include '/facebook-js/index.html'; ?></div>
			<div style="margin: 10px;"><?php include '/google-js/index.html'; ?> </div>
      <div> <?php include '/mobile-js/login.html'; ?> </div>
		</div>
		<div class="col-sm-4"></div>
	</div>
</div>

</body>
</html>