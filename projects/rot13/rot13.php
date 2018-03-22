<!DOCTYPE html>
<html>
<head>
  <title>Rot 13</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="shortcut icon" type="image/ico" href="https://upload.wikimedia.org/wikipedia/commons/9/99/Num-encercl-13.png"/>

  <style>
    body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
  </style>
</head>
<body class="w3-light-grey" style="text-align: center">
  
  <h2>Rot 13</h2>
  <p>This page will help you decode or encode strings using rotation encryption or also known as the Caesar Cipher</p>
  
	<form method="post">
		<h3>Enter String to proceed</h3>
		<input type="text" name="string"/>
    		<input style="width: 50px" type="number" name="rotation" value="13"/>
		<input type="submit"/>
	</form>

	<?php
		if( array_key_exists( "string", $_POST ) )
		{
	
       $string = $_POST["string"];
       $strLength = strlen($string);
       $rotation = $_POST["rotation"];
       $newString = $_POST["string"];
       
			 $letters = array( "a" => 1, "b" => 2, "c" => 3, "d" => 4, "e" => 5, "f" => 6, "g" => 7, "h" => 8, "i" => 9, "j" => 10, "k" => 11, "l" => 12, "m" => 13, "n" => 14, "o" => 15, "p" => 16, "q" => 17, "r" => 18, "s" => 19, "t" => 20, "u" => 21, "v" => 22, "w" => 23, "x" => 24, "y" => 25, "z" => 26 );
               
        for( $i = 0; $i < $strLength; $i++ )
        {
            if( preg_match('/^[a-zA-Z]$/', $string[ $i ] ) == 1 ) 
            {
              $isUpper = False;
              if( ctype_upper( $string[ $i ] ) )
              { 
                $isUpper = True;
              }
                    
              $n = ( $letters[ strtolower( $string[ $i ] ) ] + $rotation ) % 26;
  
              
              foreach( $letters as $key => $value )
              {
                  if( $value == $n )
                  {
                      if( $isUpper == True )
                      {
                        $newString[ $i ] = strtoupper($key);
                      }
                      else
                      {
                        $newString[ $i ] = $key;
                      }
                  }
              }
            }                
        }          
        echo '<p><b>'.$string.'</b></p>';
        echo '<p>'.$newString.'</p>';
		}
	?>

<footer style="bottom: 0px; right: 0; margin: 0; padding: 0; overflow: hidden; position: fixed;">
    <a href="http://home.adelphi.edu/~ni21347/"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/34/Home-icon.svg/2000px-Home-icon.svg.png" style="width: 50px; height: 50px"><br>Home</a>
    <a href="http://home.adelphi.edu/~ni21347/projects/"><br>Back to Projects</a>
    <!-- <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p> -->
</footer>

</body>
</html>
