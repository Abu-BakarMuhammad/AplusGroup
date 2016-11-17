<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">


	    <link href="css/bootstrap.min.css" rel="stylesheet">
	    <link href="css/initialLoading.css" rel="stylesheet">

	    <link href="css/style.css" rel="stylesheet">
	    <link href="css/font-awesome.min.css" rel="stylesheet">

	    <link href="css/owl.carousel.css" rel="stylesheet">
	</head>
	<body>
		@foreach ($dress as $dress)
			<div class="row" style="margin-top: 2em">
		 		<img src="{{$dress->image_name}}" class="img-thumbnail" alt="Cinque Terre" style="width:12em;height: 7em">
		 	</div>
		@endforeach
	</body>
</html>