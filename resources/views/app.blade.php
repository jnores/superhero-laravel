<html>
	<head>
		<title>Superheros Database</title>

		<link href="{{ asset('/css/app.css') }}" rel="stylesheet">

		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

		<style>
			body {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				padding: 2em;
				color: #B0BEC5;
				display: table;
				font-weight: 100;
				font-family: 'Lato';
				background: #B0BEC5;
			}

			.container {
				text-align: center;
				display: table-cell;
				vertical-align: top;
				width: 100%;
				height: 100%;
				background: linear-gradient(135deg,#222,#666);
				border-radius: 2em;
			}

			.content {
				text-align: center;
				display: inline-block;
			}

			.title {
				font-size: 96px;
				margin: 40px;
			}
			.little-title {
				font-size: 32px;
				margin: 10px;
				font-weight: bold;
				color: #dda760;
			}

			.quote {
				padding: 10px;
				font-size: 24px;
				color: #74d1f4;
				background: #0281b1;
				font-weight: bold;
				border-radius: 1em;
			}
			.sections {
				font-size: 24px;
				font-weight: bold;
				padding:1.5em;
			}
			.sections ul li{
				display:inline;
				padding: 10px 40px;
			}
			a {
				color: #1db5f2;
				text-decoration: none;
			}
			a:hover, a:focus {
				color: #dda760;
				text-decoration: none;
			}
			</style>
	</head>
	<body>
			@yield('content')
	</body>
</html>
