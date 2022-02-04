<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/eb83b1af77.js" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
                        
        <div class="card">
            <div class="card-header text-center">
                <i class="fas fa-user fa-10x text-success"></i>
            </div>
            <div class="card-body">
                <form action="resume_result.php" method="get">
                    <label for="">Enter First Name</label>
                    <input type="text" name="fname" class="form-control border-top-0 border-left-0 border-right-0">
                    <label for="">Enter Last Name</label>
                    <input type="text" name="lname" class="form-control border-top-0 border-left-0 border-right-0">
                    <label for="">Enter age</label>
                    <input type="number" name="age" class="form-control border-top-0 border-left-0 border-right-0">
                    <label for="">Address</label>
                    <input type="text" name="address" class="form-control border-top-0 border-left-0 border-right-0">
                    <label for="">Phone Number</label>
                    <input type="text" name="phone_number" class="form-control border-top-0 border-left-0 border-right-0">
                    <label for="">Email</label>
                    <input type="text" name="email" class="form-control border-top-0 border-left-0 border-right-0">
                    <label for="">Citizenship</label>
                    <input type="text" name="citizenship" class="form-control border-top-0 border-left-0 border-right-0">
                    <br>
                    <label for="">Country</label>
                    <select name="country" id="" class="form-control border-top-0 border-left-0 border-right-0">
                        <option value="Japan">Japan</option>
                        <option value="philippines">Philippines</option>
                        <option value="United States">United States</option>
                    </select>
                    <label for="">Experiences</label>
                    <input type="text" class="form-control border-top-0 border-left-0 border-right-0" name="exp">
                    <label for="">Highest Education Attainment</label>
                    <select name="education" class="form-control border-top-0 border-left-0 border-right-0l" id="">
                        <option value="Highschool">highschool</option>
                        <option value="College Undergraduate">College Undergraduate</option>
                        <option value="College Graduate">College Graduate</option>

                    </select>
                    <label for="">Skills</label>
                    <input type="text" name="skills" class="form-control border-top-0 border-left-0 border-right-0">
                    <button type="submit" class="btn btn-outline-primary">Submit</button>

                </form>
            </div>
        </div>
    </div>
</body>

</html>