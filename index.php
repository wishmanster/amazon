<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>
	$(document).ready(function(){
		$("button").click(function(){
			$.get("DB.php", function(data, status){
				alert("Data: " + data + "\nStatus: " + status);
			});
		});
	});
</script>
</head>
<body>
<button>Send an HTTP GET request to a page and get the result back</button>
</body>
</html>