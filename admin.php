<!DOCTYPE html>
<html lang="en">
<head>
  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Kuljetusliike - Hallinta</title>
    
<style>
  body {
      background:url('Truck.jpg') no-repeat center center fixed;
      -webkit-background-size:cover;
      -moz-background-size:cover;
      -o-background-size: cover;
      background-size: cover;
      min-height: 100%
      



  }
   h1 {
     color: black;
     max-width: 400x;
     text-shadow:1px 1px 0 rgba(0,0,0,.2);
     margin-top: 60px;
     margin-left: 10px;
     font-family: Verdana, Geneva, Tahoma, sans-serif;
   }
   .kuva {
       margin-left: 620px;
   }
   .accordion-button {
       background-color: wheat;
   
   }
  
.accordion:hover,.accordion:focus{ 
outline: none; /* Button on click no outline */ 
background-color: #ddd; /* Button on click and on hover change colour */
}
 


.accordion{
 width: 40%;
 color: white;
 background-color: rgb(66, 66, 66);
 text-align: left;
 border: none;
 margin-left: 30%;
 margin-top: 30px;
 padding: 15px 20px;
 font-size: 18px;
 cursor: pointer;
 transition: background-color 0.2s linear;
 }
 .accordion:hover,.accordion:focus{
 outline:black;
 background-color:black;
 }
.accordion-content {
  background-color: rgb(66, 66, 66);
  width: 40%;
  border-left: 1px solid whitesmoke;
  border-right: 1px solid whitesmoke;
  padding: 0 20px;
  margin-left: 530px;
  color: white;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-in-out;

}           
footer {
    margin-top: auto;
    background-color: rgb(33,37,41);
    color: white;
    display: flex;
    justify-content: center;
    align-items: center;
    vertical-align: center;
    position:absolute;
    
   bottom:0;
   width:100%;
   height:60px;   /* Height of the footer */
  
    }

</style>

</head>



<body>
<?php
session_start();

if (!isset($_SESSION["user_ok"]) {
    $_SESSION["paluuosoite"]="admin.php";
    header("Location:login.php");
    exit;
}

?>
    <header>
        <div class="valikot">
          <nav class="navbar navbar-expand-md navbar-dark bg-dark">
              <a href="#" class="navbar-brand">
                   </a>
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                  <span class="navbar-toggler-icon"></span>
              </button>
      
              <div class="collapse navbar-collapse" id="navbarCollapse">
                  <div class="navbar-nav">
                      <a href="index.html" class="nav-item nav-link active">Etusivu</a>
                      <a href="palvelut.html" class="nav-item nav-link">Palvelut</a>
                      <a href="yhteistiedot.html" class="nav-item nav-link">Yhteystiedot</a>
                      <a href="faq.html" class="nav-item nav-link " tabindex="-1">FAQ</a>
                  </div>
                  
              </div>
          </nav>
      </div> 






<script>
    const cwb = document.querySelectorAll(".accordion");
    cwb.forEach((accordion) => {
    accordion.onclick = function () {
    this.classList.toggle("open");
    let content = this.nextElementSibling;
    if (content.style.maxHeight) {
    content.style.maxHeight = null;
    } else {
    content.style.maxHeight = content.scrollHeight + "px";
    }
    };
    });
    </script> 
<footer>
    <p>Made by Group15</p>
</footer>

</body>

</html>