<html>
<head>
	<title>Simple Survey</title>
	<!-- Bootstrap -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
	<!-- jQuery -->
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
</head>
<body>
<div class="container">
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="/">Simple Survey - Results</a>
			</div>
		</div>
	</nav>

	<div class="row">
		<!-- Women's results -->
		<div class="col-xs-6">
			<h3>Most popular responses for Women</h3>
			<?php
				foreach($array_1 as $results_f)
				{
			?>
				<h5><?= $results_f['question_text']?></h5>
				<p><?= $results_f['answer_text']?> &nbsp; Count: <?= $results_f['count']?></p>
			<?php
				}
			?>
		</div>

		<!-- Men's results -->
		<div class="col-xs-6">
			<h3>Most popular responses for Men</h3>
			<?php
				foreach($array_2 as $results_m)
				{
			?>
				<h5><?= $results_m['question_text']?></h5>
				<p><?= $results_m['answer_text']?> &nbsp; Count: <?= $results_m['count']?></p>
			<?php
				}
			?>
		</div>
	</div>
</div>
</body>
</html>