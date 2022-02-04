<!DOCTYPE html>
     <html> 
     <head> 
  <title></title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  </head>
  <body class = 'p-5'> 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <h2 class="display-2 text-center">
      Chessboard
  </h2>
   <table class = 'table table-bordered w-25 mx-auto mt-5'>

      <?php
      for($row=1;$row<=8;$row++)
	  {
          echo "<tr>";
          for($col=1;$col<=8;$col++)
		  {
          $total=$row+$col;
          if($total%2==0)
		  {
          echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
          }
		  else
		  {
          echo "<td height=30px width=30px bgcolor=#000000></td>";
          }
          }
          echo "</tr>";
    }
          ?>
  </table>

<br>
    <h2 class="display-2 text-center">
        Multiplication 
    </h2>
  <?php
echo "<table class = 'table table-bordered mx-auto'>";
	for ($row=1; $row <= 10; $row++) { 
		echo "<tr>";
		for ($col=1; $col <= 10; $col++) { 
		   $p = $col * $row;
		   echo "<td>$p</td>";
		   	}
	  	    echo "</tr>";
		}
		echo "</table>";
?>

  </body>
  </html>
