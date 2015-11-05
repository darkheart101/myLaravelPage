<!DOCTYPE HTML>
<html>
	<head>
		<title>darkheart's home page</title>
		<link rel="stylesheet" type="text/css" href="css/darkheart.css">
		<meta charset="UTF-8">
	</head>
	<body>
		<div class="slider"></div>
        @yield('menu')
        
        @yield('content')  

        @yield('footer')

		<!-- Goolge Analytics code -->
		<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
		</script>
		<script type="text/javascript">
			_uacct = "UA-1051647-1";
			urchinTracker();
		</script>	
		
	</body>
</html>
