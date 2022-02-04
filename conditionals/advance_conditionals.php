<?php
function pricePerUnitPerLevel($yearlevel){
    if($yearlevel == 'firstyear'){
        return 550;
    }elseif($yearlevel == 'secondyear'){
        return 630;
    }elseif($yearlevel == 'thirdyear'){
        return 470;
    }else{
        return 501;
    }

}
function labFeePerYear($yearlevel,$lab){
    if($lab == 'no'){
        return 0;
    }else{
        if($yearlevel == 'firstyear'){
            return 3359;
        }elseif($yearlevel == 'secondyear'){
            return 4000;
        }elseif($yearlevel == 'thirdyear'){
            return 2890;
        }else{
            return 3555;
        }
    }

}

function totalPricePerUnit($numberofUnits,$pricePerUnit){
    $total = $numberofUnits * $pricePerUnit;
    return $total;
}

function calculateTotalTuition($totalPriceFunction,$labPriceFunction){
    $tuition = $totalPriceFunction + $labPriceFunction;
    return $tuition;
}


?>
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
    <div class="container">
        <div class="card mx-auto w-50 mt-5">
            <div class="card-header">
                <p class="lead text-center">
                    TUITION CALCULATOR
                </p>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <input type="text" name="fullname" placeholder="Enter firstname" id="" class="form-control mt-3">
                    <input type="text" name="numberofunits" placeholder="Enter number of units" id="" class="form-control mt-3">
                    <select name="yearlevel" class="form-control mt-3" id="">
                        <option hidden>CHOOSE YOUR CURRENT YEAR LEVEL</option>
                        <option value="firstyear">FIRST YEAR</option>
                        <option value="secondyear">SECOND YEAR</option>
                        <option value="thirdyear">THIRD YEAR</option>
                        <option value="fourthyear">FOURTH YEAR</option>
                    </select>
                    <label for="" class="mt-3">ARE YOU USING THE COMPUTER LABORATORY?</label> <br>
                    <input type="radio" name="lab" value="yes" id=""> YES
                    <input type="radio" name="lab" value="no" id=""> NO
                    <br> <br>
                    <button type="submit" name="generatelabfee" class="btn btn-outline-success">Calculate fee</button>
                </form>
                </div>
        </div>
                
                <?php 
                    if(isset($_POST['generatelabfee'])){
                        $fullname = $_POST['fullname'];
                        $numberofunits = $_POST['numberofunits'];
                        $yearlevel = $_POST['yearlevel'];
                        $lab = $_POST['lab'];

                        $priceperunit = pricePerUnitPerLevel($yearlevel);
                        $totalpriceperunit = totalPricePerUnit($numberofunits,$priceperunit);
                        $labfee = labFeePerYear($yearlevel,$lab);
                        $total = calculateTotalTuition($totalpriceperunit,$labfee);
                        ?>
                        <div class="jumbotron mt-3 ">
                            <p class="text-center lead">
                                RECIEPT
                            </p>
                            <table class="table table-bordered">
                                <thead class="thead-dark">
                                    <th>FULLNAME</th>
                                    <th>UNITS COUNT</th>
                                    <th>YEAR LEVEL</th>
                                    <th>TOTAL UNIT PRICE</th>
                                    
                                </thead>
                                <tbody>
                                    <tr>
                                    <td><?php echo $fullname ?></td>
                                    <td><?php echo $numberofunits ?></td>
                                    <td><?php echo $yearlevel ?></td>
                                    <td><?php echo $totalpriceperunit ?></td>

                                    </tr>
                                    <tr class="text-center">
                                        <td colspan="4">
                                            <div class="row">
                                                <div class="col-6">
                                                    TOTAL TUITION:
                                                </div>
                                                <div class="col-6">
                                                   <?php echo number_format($total,2)  ?>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    
                                    
                                   
                                </tbody>
                            </table>
                       

                        <?php 
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