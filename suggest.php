<html>
<head>
<link rel="stylesheet" type="text/css" href="index.css"
</head>
<body background = "pries.png" >
<div id="homeTable">
<table cellspacing="5px" >

<tr>
<td><a href="/"> Home</td>
</tr>

</table>
</div>
<div id="textBox" align="center">

<p>Enter your suggestions for PriesThings</p>

</div>

<div align="center" id="suggestionBox">
<form method="GET">

<div id="suggest">
<input type="text" name="suggest" value="suggestions" size="50"> <br>
</div>

<div id="nameBox">
<input type="text" name="name" value="name"> <br>
</div>

<input type="Submit" value="suggest">

</form>

</div>

</body>

</html>

<?php

@$suggest = $_GET['suggest'];
@$name = $_GET['name'];

@$handle = fopen($name, "w+");
@fwrite($handle, $suggest);
@fclose($handle);



?>