<?php 

	require_once('/app/variables.php');

?>

<html>
	<head>
		<title>{{$companyName}}</title>
	</head>
    <body>
    	<header>

    	</header>
    	<main>
        	@yield('content')
    	</main>
    	<footer>

    	</footer>
        
    </body>
</html>

