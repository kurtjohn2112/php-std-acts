<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <form method="post">
            <div class="form-group w-25 mx-auto">
                <label for="">how many books do you want to add?</label>
                <input type="number" name="add_details" class="form-control"> <br>
                <button type="submit" name="submit" id="" class="btn btn-primary btn-lg float-right">SUBMIT</button>

            </div>



        </form>
        <br>
        <?php
        if (isset($_POST['submit'])) {
            $add_details = $_POST['add_details'];

            for ($x = 1; $x <= $add_details; $x++) {
                echo "<form method ='post' class = 'text-center'>";
                echo "<br>";
                echo "<label for = ''>Name of the Book</label>";
                echo "<input type = 'text' name = 'book[]' class = 'form-control w-50 mx-auto'>";
                echo "<br>";
                echo "<label for = ''>Author</label>";
                echo "<input type = 'text' name = 'author[]' class = 'form-control w-50 mx-auto'>";
                echo "<hr>";
            }
            echo "<br>";
            echo "<button type='submit' name='save' class='btn btn-primary btn-lg btn-block mx-auto w-50'>Save</button>";
            echo "</form>";
        }

        if(isset($_POST['save'])){

            $bookname = $_POST['book'];
            $bookAuthor = $_POST['author'];

            $bookIndex = count($bookname);
            
            for($x = 0; $x <$bookIndex; $x++){
                ?>

                <div class="container mt-3">
                    <div class="row">
                        <div class="col-lg-12">
                            <table class="table table-hover table-boredered table-striped">
                                <thead class="bg-info text-light text-center">
                                    <th>Book</th>
                                    <th>Author</th>
                                </thead>
                                <tbody class="text-center">
                                    <td><?php echo $bookname[$x] ?></td>
                                    <td><?php echo $bookAuthor[$x]?></td>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
             
            <!-- // echo "<table class = 'table table-striped text-light table-dark text-center'>";
            // echo "<theader>";
                
            //         echo "<td>Book</td>";
            //         echo "<td>Author</td>";
                
            // echo "</theader>";
            //     echo "<tr>";
            //         echo "<td>" .$bookname[$x]."</td>";
            //         echo "<td>" .$bookAuthor[$x]."</td>";
            //     echo "</tr>";
            // echo "</table>"; -->

<?php
        }


    }

        ?>
        </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>