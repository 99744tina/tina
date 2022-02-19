	<?php
session_start();
?><!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Disease Diagnosis Based on Patient's Health Parameters</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">

</head>

<body>

 <?php include "Includes/header.php"; ?>

  
      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" style="width:100%; height:350px;" src="images/diabetes.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid"  style="width:100%;height:350px;" src="images/HDC_articles_NewHeartTech_Foy.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid"  style="width:100%;height:350px;" src="images/IsYourThyroidOutofBalance.jpg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <div class="row">

          <div class="col-lg-12">
            <div class="card h-100">
             
              <div class="card-body">
                <h4 class="card-title">
                Introduction
                </h4>
               
                <p class="card-text" align="justify">This System used dataset of diabetes, heart disease and thyroid  symptoms  that occurs in patients. This research  used the information in dataset for matching with patient symptoms  and then show how many  percent peoples has suffered from diabetes, heart disease  and thyroid and they had symptoms like patient in same age  and how many percent peoples are not suffered who have symptoms like patient in same age. According to the percentage we gave the prediction that the patient has the chances of diabetes, heart disease and  thyroid or not. When we predict we gave some recommendation to the patient on how to control or prevent diabetes, heart diseaseand thyroid in case of minor signs.</p>
                <p class="card-text" align="justify">The goal of our project is to know whether patient is suffered from diabetes, heart disease and thyroid or not, patient will be diagnosed and it will be depending on the attributes that we are going to take  for diabetes, heart disease and thyroid . So, to reduce the correctly know whether the patient is suffered from diabetes, heart disease and thyroid  or not, we are developing a system which will be a prediction system for the diabetes , heart disease and thyroid  patients. Another best thing about the system is it is will give accurate results whether the patient is is suffered from diabetes, heart disease and thyroid  or not with the help of the knowledge base of the larger dataset that we are going to use added the recommendations. Also, the prediction of the disease will be done with the help of Pattern Matching Algorithm..</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

         

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Disease Diagnosis Based on Patient's Health Parameters | Developed By vaishali</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
