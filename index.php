<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="index.css" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>PriesBucks</title>
</head>
<body background = "pries.png">

	<header>
		<h1 align="center"> PriesBucks! </h1> 
	</header>
<nav id="tableTop" >

	<table align="center" cellpadding="1">
		<tr>
			<td>
				<a href = "1frontside.png">One PriesBuck bill</a>
			</td>


			<td>
			<a href = "5frontpries.png">Five PriesBuck bill</a>
			</td>

			<td>
				<a href = "10frontpries.png">Ten PriesBuck bill </a>
			</td>

			<td>
				<a href = "20frontpries.png">Twenty PriesBuck bill</a>
			</td>

			<td>
				<a href = "50frontpries.png">Fifty PriesBuck bill</a>
			</td>

			<td>
				<a href = "100frontpries.png">One hundured PriesBuck Bill</a>
			</td>
		</tr>
		
		<tr>

			<td>
				<a href="1backside.png"> One PriesBuck Bill</a>
			</td>

			<td>
				<a href="5backpries.png"> Five PriesBuck Bill </a>
			</td>

			<td>
				<a href="10backpries.jpg"> Ten PriesBuck Bill </a>
			</td>

			<td>
				<a href="20backpries.png" > Twenty PriesBuck Bill </a>
			</td>

			<td>
				<a href="50backpries.png"> Fifty PriesBuck Bill </a>
			</td>

			<td>
				<a href="100backpries.png" > One hundred PriesBuck Bill </a>
			</td>

		</tr>

	</table>

</nav>

<aside id="tableSide"> 
	<table cellspacing="20" cellpadding="10"  >

		<tr>
			<td><a href="suggest.php">suggest PriesThings</td>
		</tr>

		<tr>
			<td><a href="/prof">Proficency Stuff</td>
		</tr>

	</table>
</aside>

<section>


	<img id="front1" src="1frontside.png" alt="The One Priesbuck Bill" />

	
	<img id="back1" src="1backside.png" alt="The One Priesbuck Bill" />
	

	<img id="front5" src="5frontpries.png" alt="The Five Priesbuck Bill" />

	<img id="back5" src="5backpries.png" alt="The Five Priesbuck Bill" /> 

	<img id="front10" src="10frontpries.png" alt="The Ten Priesbuck Bill" />

	<img id="back10" src="10backpries.jpg" alt="The Ten Priesbuck Bill" />

	<img id="front20" src="20frontpries.png" alt="The Twenty Priesbuck Bill" />

	<img id="back20" src="20backpries.png" alt="The Twenty Priesbuck Bill" />

	<img id="front50" src="50frontpries.png" alt="The Fifty Priesbuck Bill" />

	<img id="back50" src="50backpries.png" alt="The Fifty Priesbuck Bill" />

	<img id="front100" src="100frontpries.png" alt="The One-Hundered Priesbuck Bill" />

	<img id="back100" src="100backpries.png" alt="the One-hundered Priesbuck Bill" />

</section>
<div id="rate">
<h2>
The Exchange rate is

<?php
// Requested file
// Could also be e.g. 'currencies.json' or 'historical/2011-01-01.json'
$file = 'latest.json';
$appId = '8bd92eef6b114368872dc2508b06df2a';

// Open CURL session:
$ch = curl_init("http://openexchangerates.org/api/{$file}?app_id={$appId}");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// Get the data:
$json = curl_exec($ch);
curl_close($ch);

// Decode JSON response:
$exchangeRates = json_decode($json);

$pries = $exchangeRates->rates->GBP;
$exrate = $pries * 6;
echo 'One USD is ' + $exrate + ' priesbucks';



?>

</h2>
</div>

</body>
</html>
