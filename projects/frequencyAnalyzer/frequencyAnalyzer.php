<!DOCTYPE html>
<html>
<head>
  <title>Frequency Analyser</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="shortcut icon" type="image/ico" href="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f9/Percent_18e.svg/1130px-Percent_18e.svg.png"/>

  <style>
    body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
    hr{ border-top:1px solid black }
   
    table {
     font-family: arial, sans-serif;
     border-collapse: collapse;
    }

    td, th {
     border: 1px solid #dddddd;
     padding: 8px;
    }

    tr:nth-child(even) {
     background-color: #dddddd;
    }
  </style>
</head>
<body class="w3-light-grey" style="text-align: center">
  
  <h2>Frequency Analyser</h2>
  <p>This page will help you find out the usage of letters in a text. You will receive the percentage of use next to each letter.</p>
  
	<form method="post">
		<h3>Enter Text to analyze </h3>
		<textarea rows="4" cols="50" name="string"></textarea>
		<br>
		<input type="submit"/>
	</form>

	<?php
		if( array_key_exists( "string", $_POST ) )
		{
       			$string = $_POST["string"];
       			$strLength = strlen($string);
       			$total = 0; 
       
       			$newString = $_POST["string"];
       
			$letters = array( "a" => 0, "b" => 0, "c" => 0, "d" => 0, "e" => 0, "f" => 0, "g" => 0, "h" => 0, "i" => 0, "j" => 0, "k" => 0, "l" => 0, "m" => 0, "n" => 0, "o" => 0, "p" => 0, "q" => 0, "r" => 0, "s" => 0, "t" => 0, "u" => 0, "v" => 0, "w" => 0, "x" => 0, "y" => 0, "z" => 0 );
    
        		for( $i = 0; $i < $strLength; $i++ )
        		{
          			foreach( $letters as $key => $value )
          			{
              				$x = strtolower( $string[ $i ] );
              				$total = $total + 1;
              
              				if( $x == $key )
              				{
                  				$letters[$x] = $letters[$x] + 1;
              				}
              				else
              				{
                  				$total = $total - 1;
              				}
          			}
        		}
		
			foreach( $letters as $key => $value )
          		{
              			$letters[$key] = ( $value / $total ) * 100;
         		}
			
			arsort($letters);

			echo '<table>';
                        echo '<tr> <th> Letter </th> <th> % used </th> </tr>';
			foreach( $letters as $key => $value )
                        {
                        	echo '<tr><th>'.$key.'</th><th>'.number_format((float)$value, 2, '.', '').'%</th></tr>';
                        }

			echo '</table>';
	}
	?>

<footer style="bottom: 0px; right: 0; margin: 0; padding: 0; overflow: hidden; position: fixed;">
    <a href="http://home.adelphi.edu/~ni21347/"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/34/Home-icon.svg/2000px-Home-icon.svg.png" style="width: 50px; height: 50px"><br>Home</a>
    <a href="http://home.adelphi.edu/~ni21347/projects/"><br>Back to Projects</a>
    <!-- <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p> -->
</footer>

</body>
</html>
