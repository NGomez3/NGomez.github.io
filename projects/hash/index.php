<!DOCTYPE html>
<html>
<head>
  <title>Hash Generator</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="shortcut icon" type="image/ico" href="https://d30y9cdsu7xlg0.cloudfront.net/png/2818-200.png"/>

  <style>
    body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
  </style>
</head>
<body class="w3-light-grey" style="text-align: center">
  
  <h2>Hash Generator</h2>
  <p>This page will let you calculate the hash of any string with the following algorithms: <strong>MD4, MD5, SHA1, SHA256, SHA512</strong></p>
  <p>If you need another type of hash algorithm. Please select it from the dropdown below.</p>
  
	<form method="post">
		<h3>Enter String to Hash</h3>
		<input type="text" name="string"/>
   <select name="hash">
      <option value=""></option>
      <option value="md2">md2</option>
      <option value="sha384">sha384</option>
      <option value="ripemd128">ripemd128</option>
      <option value="ripedmd160">ripedmd160</option>
      <option value="ripemd256">ripemd256</option>
      <option value="ripedmd320">ripedmd320</option>
      <option value="whirlpool">whirlpool</option>
      <option value="tiger128,3">tiger128,3</option>
      <option value="tiger160,3">tiger160,3</option>
      <option value="tiger192,3">tiger192,3</option>
      <option value="tiger128,4">tiger128,4</option>
      <option value="tiger160,4">tiger160,4</option>
      <option value="tiger192,4">tiger192,4</option>
      <option value="snefru">snefru</option>
      <option value="gost">gost</option>
      <option value="adler32">adler32</option>
      <option value="crc32">crc32</option>
      <option value="crc32b">crc32b</option>
      <option value="haval128,3">haval128,3</option>
      <option value="haval160,3">haval160,3</option>
      <option value="haval192,3">haval192,3</option>
      <option value="haval224,3">haval224,3</option>
      <option value="haval256,3">haval256,3</option>
      <option value="haval128,4">haval128,4</option>
      <option value="haval160,4">haval160,4</option>
      <option value="haval192,4">haval192,4</option>
      <option value="haval224,4">haval224,4</option>
      <option value="haval256,4">haval256,4</option>
   </select>
		<input type="submit"/>
	</form>

	<?php
		if( array_key_exists( "string", $_POST ) )
		{
			$string = $_POST["string"];
      
      echo '<p style="font-size:30px;">'.$string.'</p>';
      
			echo '<p><strong>MD4</strong></p>'; 
			echo hash( 'md4', $string );
			
			echo "<p><strong>MD5</strong></p>";
			echo hash('md5', $string);
      
      echo "<p><strong>SHA 1</strong></p>";
			echo hash('sha1', $string);
      
      echo "<p><strong>SHA 256</strong></p>";
			echo hash('sha256', $string);
      
      echo "<p><strong>SHA 512</strong></p>";
			echo hash('sha512', $string);
      
      if( array_key_exists( "hash", $_POST ) )
		  {
  			$hash = $_POST["hash"];
        
  			echo '<p><strong>'.strtoupper($hash).'</strong></p>'; 
  			echo hash( $hash, $string );
		  }
		}
   
    
	?>
<footer style="bottom: 0px; right: 0; margin: 0; padding: 0; overflow: hidden; position: fixed;">
    <a href="http://home.adelphi.edu/~ni21347/"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/34/Home-icon.svg/2000px-Home-icon.svg.png" style="width: 50px; height: 50px"><br>Home</a>
    <a href="http://home.adelphi.edu/~ni21347/projects/"><br>Back to Projects</a>
    <!-- <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p> -->
</footer>
</body>
</html>
