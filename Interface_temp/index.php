<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=windows-1252">
	<title>PMS_Title</title>
	<link rel="stylesheet" href="index.css" type="text/css">
	<link rel="stylesheet" href="admin_panel.css" type="text/css">
</head>
<body>

<div id="header">
    <span class="header_nav">Root Navigation goes up here</span>
    <span id="header_user">UserName</span>
</div>
<div style="width:100%; margin:0px">
<div id="sidebar">
	<nav>
		current "module"<br> navigation goes here
    </nav>
</div>
<div id="module">
	<?php
		include 'admin_panel.html';
	?>
</div>
</div>

</body>
</html>