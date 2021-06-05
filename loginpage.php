<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login1.php");
}
?>




<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>AnonymousHope</title>
    <style>
        h1 {
            margin: auto;
        }

        .bg {
            width: 100%;
            position: absolute;
            opacity: 0.2;
            z-index: -1;
        }

        .col-sm-6 {
            flex: 0 0 auto;
            width: 50%;
            padding: 10rem;
        }
    </style>
</head>

<body>

    <img class="bg" src="img5.jpeg">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><strong>Anonymous<sup>Hope</sup></strong></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
          </div>

                </ul>
                
                <form class="d-flex">
                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav ml-auto">
                       <li class="nav-item active">
                         <a class="nav-link" href=""><img src="https://img.icons8.com/plumpy/24/000000/user-male-circle.png"/> <?php echo "Welcome ". $_SESSION['username']?></a>
                       </li>
                   </ul>
                 </div>
                    <a class="btn btn-outline-light" type="submit" href="logout.php">Log Out</a>
                </form>
            </div>
        </div>
    </nav>

    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">"Every Donor Is A Life Saver"</h1>
                <p class="lead text-muted">
                    Donor safety, as well as the safety of the therapies made from plasma donations is of primary
                    importance.
                    You will need to visit a plasma collection center to determine if you are eligible to donate.
                </p>
            </div>
        </div>
    </section>
    <div class="row">
        <div class="col-sm-6">
            <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
                <img src="img6.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Register To Donate</h5>
                    <p class="card-text">To register as a donor click "register".</p>
                    <a href="eligible.html" class="btn btn-primary">Eligibility Criteria</a>
                    <br>
                    <br>
                    <br>
                    <a href="donor.php" class="btn btn-primary">Register</a>
                </div>
            </div>
            <!-- card4Modal -->
            <div class="modal fade" id="card4Modal" tabindex="-1" aria-labelledby="card4ModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="card4ModalLabel">Eligibility criteria</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Because the need for plasma is so great, we are looking for committed donors. It is only
                            after two
                            satisfactory health screenings and negative test results within six months that you may
                            receive
                            Qualified Donor status.
                            Until you have met this requirement, your plasma will not be used to manufacture therapies.
                            This is important to help ensure the quality and safety of the therapies that patients need
                            to treat
                            life-threatening diseases.
                            <br>
                            <br>
                            <ul>
                                <li>Plasma donors should be at least 18 years old</li>
                                <li>Plasma donors should weigh at least 110 pounds or 50 kilograms</li>
                                <li>Must pass a medical examination</li>
                                <li>Complete an extensive medical history screening</li>
                                <li>Test non-reactive for transmissible viruses including hepatitis and HIV</li>

                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div class="col-sm-6">
            <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
                <img src="img7.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Click to View</h5>
                    <p class="card-text">To check the availability of plasma at different plasma banks,click "View".</p>
                    <br>
                    <a href="buttons.html" class="btn btn-primary">View</a>
                </div>
            </div>
        </div>
    </div>




    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>