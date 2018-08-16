<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Number To Word</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-default">
	  	<div class="container">
	    	<div class="navbar-header">
	      		<a class="navbar-brand" href="#">Number To Word</a>
	    	</div>
	  	</div>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
				<div class="form-group">
				  	<label for="number">Enter your number:</label>
				  	<input type="text" class="form-control" id="number" name="number">
				</div>
				<button class="btn btn-primary" id="submit">Convert</button>
				<hr>
				<div class="panel panel-default">
				  	<div class="panel-body" id="output"></div>
				</div>
			</div>
			<div class="col-sm-3"></div>
		</div>
	</div>
</body>
</html>
<script>
$("#submit").click(function(){
	var number=$("#number").val();
	$.post("api.php",
	{
		number:number
	},function(data){
		$("#output").html(data);
	});
});

$('#number').keypress(function(e){
    if(e.which == 13){
        $('#submit').click();
    }
});
</script>