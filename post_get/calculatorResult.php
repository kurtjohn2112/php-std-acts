<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


            <?php
           
                $num1 = $_GET['num1'];
                $num2 = $_GET['num2'];
                $total = $num1 + $num2;
                $subtract = $num1 - $num2;
                $multiply = $num1 * $num2;
                $division = $num1 / $num2;
                echo "<div class = 'row'>";
                    echo "<div class = 'col-12 text-center'>";
                    echo "addition result: ";
                        echo "<h2 class = 'display-2 text-center'>" . $total . "<h2>";
                    echo "</div>";
                echo "</div>";

                echo "<div class = 'row'>";
                
                    echo "<div class = 'col-6 text-center lead'>";
                    echo "Subtraction result: ";
                        echo "<h2 class = 'display-2 text-center lead'>" . $subtract . "<h2>";
                    echo "</div>";
                    
                    echo "<div class = 'col-6 text-center lead'>";
                    echo "Multiplication";
                    echo "<h2 class = 'display-2 text-center'>" . $multiply . "<h2>";
                echo "</div>";
                 echo "</div>";

                 echo "<div class = 'row'>";
                 echo "<div class = 'col-12 text-center lead'>";
                 echo "Division Result";
                     echo "<h2 class = 'display-2 text-center'>" . $division . "<h2>";
                 echo "</div>";
             echo "</div>";

               
            
            ?>
        
