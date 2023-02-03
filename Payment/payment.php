<?php 
session_start();
include("server.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Place A Tip!</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script>
function myFunction() {
   alert("Thank You! Payment Done Succussfully");
}
</script>
   
</head>
<section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Place A Tip!</p>

             <form method="post" action="payment.php" enctype="multipart/form-data">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example1c">Enter Employee Name</label>
                      <input type="text" id="form3Example1c" class="form-control" name="name" required />
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                     <label class="form-label" for="form3Example3c">Enter Employee Number</label>
                      <input type="text" id="form3Example3c" class="form-control"  name="number"  required/>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example4c">Enter Amount:</label>
                      <input type="number" id="form3Example4c" class="form-control" name="amount" placeholder="SAR"  required/>
                    </div>
                  </div>

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button  type="submit" class="btn btn-primary btn-lg btn-block " style="background-color: #FFCA2C; width: 300px; border: none;" name="pay_emp" onclick="myFunction()">CLick To Pay</button>
                  </div>
              </form>
                                <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
            <button class="btn btn-warning shadow fw-bold fs-4 text-light pay-m" onclick="document.getElementById('id01').style.display='block'" type="submit">Rate US?</button>
                  </div>

<div id="id01" class="modal" dir="ltr">
    <form class="modal-content animate" method="post">
      <div class="imgcontainer">
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>

<style>
    .animate{
        border: #ff7200;
        border-radius: 15px; 
        text-align: center;       
    }
</style>  
    </div>
      <div class="container">
<h1>Thank You <br><br></h1><h2>Please Leave Us Your Review!</h2>  <br><br>      
<button type="submit" onclick="document.getElementById('').style.display='block'" class="btn btn-warning shadow fw-bold fs-4 text-light"><a href="rate - Copy.php" style="text-decoration: none; color:white">Rate Us ?</a></button>
    </div>
  <script>
    var modal = document.getElementById('id01');
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    </script>
              </div>
               </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="payment2.webp"
                  class="img-fluid" alt="Sample image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

