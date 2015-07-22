<html>
<head>
	<title>Simple Survey</title>
	<!-- Bootstrap -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
	<!-- jQuery -->
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			// Pull data from DB and pass to partial view
			$.get('/survey/get_questions', function(res){ 
				$('#all_survey').html(res);
			});
		});
	</script>
</head>
<body>
<div class="container">
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="/">Simple Survey</a>
			</div>
		</div>
	</nav>

	<div class="row">
		<div class="col-xs-12">
			<div id="all_survey"></div>
		</div>
	</div>
</div>
</body>
</html>