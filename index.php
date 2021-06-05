
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  <title>AnonymousHelp</title>
  <style>
    .bg {
      width: 100%;
      position: absolute;
      opacity: 0.2;
      z-index: -1;
    }
  </style>


</head>

<body>
  <img class="bg" src="img5.jpeg">
  <nav class="navbar navbar-expand-lg  navbar-dark bg-dark ">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><strong>Anonymous<sup>Hope</sup></strong></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Login Options
        </a>
        <ul class="dropdown-menu" aria-labelledby="AnonoymousHoperDropdownMenuLink">
          <li><a class="btn" class="dropdown-item"  href="login1.php">User</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="btn" class="dropdown-item" href="/AH/admin/login.php">Admin</a></li>
          <!--<li><a class="dropdown-item" href="#">Something else here</a></li>-->
        </ul>
      </li>
      </div>
    <!-- <div class="mx-2">
            <button class="btn btn-outline-light " data-bs-toggle="modal" data-bs-target="#loginModal">login</button>-->
       <div>     
          <a class="btn btn-outline-light"  href="signup.php">Signup</a>
        </div>
    </ul>
  </nav>
  




  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Donate Plasma ,lets fight covid-19 together!</h1>
        <p class="lead text-muted">Because you fought the infection, your plasma now contains COVID-19 antibodies.
          These antibodies provided one way for your immune system to fight the virus when you were sick,
          so your plasma may be able to be used to help others fight off the disease.</p>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card" style="width: 18rem;">
            <img src="plasma1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">what is convalecent plasma?</h5>
              <p class="card-text">Convalescent refers to anyone recovering from a disease. Plasma is the yellow,
                liquid
                part
                of blood that contains antibodies.</p>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                data-bs-target="#card1Modal">details</button>
            </div>
          </div>

          <!-- card1Modal -->
          <div class="modal fade" id="card1Modal" tabindex="-1" aria-labelledby="card1ModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="card1ModalLabel">ConvalecntPlasma</h5>
                  <a class="btn-close" data-bs-dismiss="modal" aria-label="Close"></a>
                </div>
                <div class="modal-body">
                  Convalescent refers to anyone recovering from a disease. Plasma is the yellow, liquid part of blood
                  that
                  contains antibodies.
                  Antibodies are proteins made by the body in response to infections. Convalescent plasma from
                  patients
                  who have
                  already recovered from coronavirus disease 2019 (COVID-19) may contain antibodies against COVID-19.
                  Giving this convalescent plasma to hospitalized people currently fighting COVID-19 may help them
                  recover.
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card" style="width: 18rem;">
            <img src="img3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">I have fully recovered from covid_19.Am I Eligible Donate Plasma?</h5>
              <p class="card-text">People who have fully recovered from COVID-19 for at least two weeks are encouraged
                to consider donating plasma.</p>
              <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#card2Modal">details</a>
            </div>
          </div>

          <!-- card2Modal -->
          <div class="modal fade" id="card2Modal" tabindex="-1" aria-labelledby="card2ModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="card2ModalLabel">Eligible</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  People who have fully recovered from COVID-19 for at least two weeks are encouraged
                  to consider donating plasma.
                  COVID-19 convalescent plasma must only be collected from recovered individuals if they are eligible
                  to
                  donate
                  blood.
                  Individuals must have had a prior diagnosis of COVID-19 documented by a laboratory test and meet
                  other
                  donor
                  qualifications.
                  Individuals must have complete resolution of symptoms for at least 14 days prior to donation.
                  A negative lab test for active COVID-19 disease is not necessary to qualify for donation.


                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="width: 18rem;">
            <img src="img4.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">What is plasma therapy?</h5>
              <p class="card-text">As the need for a COVID vaccine grows,
                most medical practitioners have recommended an old method for fighting the infectious disease.
                This treatment used is called plasma therapy.</p>
              <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#card3Modal">details</a>
            </div>
          </div>

          <!-- card3Modal -->
          <div class="modal fade" id="card3Modal" tabindex="-1" aria-labelledby="card3ModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="card3ModalLabel">ConvalecntPlasma</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  Plasma therapy is a medical procedure that uses the blood of a recovered patient to create
                  antibodies
                  on those infected individuals.
                  Medically known as convalescent plasma therapy, this treatment uses antibodies found in the blood
                  taken from a recovered Covid-19 patient.
                  It is then used to treat those with severe SARS-CoV-2 infection to aid recovery.
                  <br><br>
                  Currently, it has shown positive results in Delhi and Mumbai where COVID cases are spiking high.
                  It has also proven to improve the ability of a person to recover from the disease.
                  However, there is more research required to prove its full efficacy in different patient types.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->

 <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
    integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
    integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj"
    crossorigin="anonymous"></script>-->

</body>

</html>