<?php
session_start();
  include("connect.php");

$rateErr = "";
$rate=  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {


  if (empty($_POST["rate"])) {
    $rateErr = "rate is required";
  } else {
    $rate = $_POST["rate"];
  }
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>TipTech | Rating Us</title>
      <link rel="stylesheet" href="css/rate.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>
      <div class="container">
         <div class="post">
            <div  style="color:rgb(0, 0, 0); font-variant: small-caps;" class="thank">Thank You For Bing A TipTech User. </div>
            <div style="color:rgb(0, 0, 0); font-variant: small-caps; font-size: 25px;" class="hope"> Hope you come back soooon  🤗</div>
            <a href="index.php"><div class="edit">Back</div></a>
         </div>

         <form method="POST">
         <div class="star-widget">
            <div  style="color:rgb(0, 0, 0); font-variant: small-caps;" class="how-was">How Was The Service?</div>
            <input type="radio" name="rate"  id="rate-5" <?php if (isset($rate) && $rate=="5") echo "checked";?> value=5 >
            <label for="rate-5" class="fas fa-star"></label>
            <input type="radio" name="rate" id="rate-4" <?php if (isset($rate) && $rate=="4") echo "checked";?> value=4>
            <label for="rate-4" class="fas fa-star"></label>
            <input type="radio" name="rate" id="rate-3" <?php if (isset($rate) && $rate=="3") echo "checked";?> value=3>
            <label for="rate-3" class="fas fa-star"></label>
            <input type="radio" name="rate" id="rate-2"<?php if (isset($rate) && $rate=="2") echo "checked";?> value=2>
            <label for="rate-2" class="fas fa-star"></label>
            <input type="radio" name="rate" id="rate-1" <?php if (isset($rate) && $rate=="1") echo "checked";?> value=1>
            <label for="rate-1" class="fas fa-star"></label>
               <div   style="color:rgb(0, 0, 0); font-variant: small-caps; " class="comm-sugg">Comments, Suggestions?</div>
               <div class="textarea">
                  <textarea  cols="30" placeholder=" Your Feedback Matters.." name="comment"></textarea>
               </div>
               <div class="btn">
                  <button type="submit">Post</button>
               </div>

           
<?php

if($_SERVER['REQUEST_METHOD']=='POST')
{   
    $rate = $_POST["rate"];
    $comment = $_POST["comment"];
    $insertpro="INSERT INTO rate (rating,comment)  VALUES('$rate','$comment') ";
 if (mysqli_query($connect, $insertpro))
 {
   echo "Your Comment is Saved Thank You!";
    header("Refresh:5; url=payment.php");

 } else
 {
  echo "Sorry, There was an error";
 }
}

?>
 </form>
         </div>
      </div>
            <script>
         const btnn = document.querySelector("button");
         const post = document.querySelector(".post");
         const widget = document.querySelector(".star-widget");
         const editBtn = document.querySelector(".edit");
         btn.onclick = ()=>{
           widget.style.display = "none";
           post.style.display = "block";
           editBtn.onclick = ()=>{
             widget.style.display = "block";
             post.style.display = "none";
           }
           return false;
         }
      </script>
   </body>
</html>
