<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        

    <title>Registration Form</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg  navbar-dark bg-dark ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">AnonymousHelp</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="loginpage.php">Return</a>
          </li>
        </ul>
    </nav>



    <div class="container mt-4">
        <form method="POST" action="registers.php">
            <div class="form-row">
                <div class="col">
                    <label for="inputFirstName">First Name</label>
                    <input type="text" class="form-control" name="fn" placeholder="First name">
                </div>
                <div class="col">
                    <label for="inputLastName">Last Name</label>
                    <input type="text" class="form-control" name="ln" placeholder="Last name">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" name="email_id" id="inputEmail4">
                </div>
            </div>
            <div class="form-group">
            <label >Age</label>
            <input type="number" class="form-control" id="age" name="age"  min = 18 max = 55 required>
            <small id="ageHelp" class="form-text text-muted">*Donar above 18 years are only eligible </small>
        </div>

            <div class="form-group">
                <label for="inputAddress">Address</label>
                <input type="text" class="form-control" name="address" id="inputAddress"
                    placeholder="Enter your Address">
            </div>
            <div class="form-group">
                <label for="inputMobileNumber">Phone Number</label>
                <input type="number" name="phno" class="form-control" id="MobileNumber"
                    placeholder="Enter your Phone Number">
            </div>



            <div class="form-group">
                <label for="validationCustom04">Blood Group</label>
                <select class="custom-select" name="blood_group" id="validationCustom04" required>
                    <option selected disabled value="">Choose</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                    <option value="hh">hh Blood Group</option>
                </select>
                <div class="invalid-feedback">
                    Please select a valid blood group.
                </div>
            </div>
            <div class="form-group">
                <label for="validationDefault04">Gender</label>
                <fieldset class="form-group">
                    <div class="row">

                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="gridRadios1" value="male"
                                    checked>
                                <label class="form-check-label" for="gridRadios1">
                                    Male
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="gridRadios2"
                                    value="female">
                                <label class="form-check-label" for="gridRadios2">
                                    Female
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="gridRadios2"
                                    value="others">
                                <label class="form-check-label" for="gridRadios2">
                                    Others
                                </label> <br>
                            </div>

                        </div>
                    </div><br>
                    

                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3"
                                aria-describedby="invalidCheck3Feedback" required>
                            <label class="form-check-label" for="invalidCheck3">
                                Agree to terms and conditions
                            </label>
                            <div id="invalidCheck3Feedback" class="invalid-feedback">
                                You must agree before submitting.
                            </div>
                        </div>
                    </div>
                    <button type="submit" name="insert" class="btn btn-primary">Submit</button>

        </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>