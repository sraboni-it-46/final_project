<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/da55c0c57e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-theme.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    

    <title>Final Project</title>
    <style type="text/css">
    	 body {
        padding: 20px auto;
        margin: 20px auto;
    }

    .jumbotron .display-2 {
        font-style: italic;
        font-family: cursive;
        color: black;
    }

    .jumbotron .display-4 {
        font-weight: bold;
        color: #2F4F4F;


    }
    
#exam{
        background-color: #34495E;
        font-family: comic sans ms;
    }
    .buttons {
    margin: 35px 280px;


}
.buttons button{
    height: 70px;
    width: 150px;
    font-size: 18px;
    font-weight: 600;
    color: white;
    background: #34495E ;
    outline: none;
    cursor: pointer;
    border: 3px solid black;
    border-radius: 25px;
    transition: .4s;
    font-family: comic sans ms;
    
}
.buttons .btn2{
    margin-left: 25px;
}
.buttons button:hover{
    background: #454545 ;
}
  
    </style>
</head>
<body  class=" h-100  text-white bg-dark">
	<?php
    include "nav.php";
    $strconn = mysqli_connect("localhost", "root", "", "3_2_project");
    if (!$strconn)
        echo "Connection failed" . mysqli_connect_error();
    else {
    }
    session_start();
    if (isset($_SESSION['name'])) {
        $fname = $_SESSION['name'];
    } else {
        echo 'session not started';
    }
    ?>

     <div id="content-wrap">
        <div class="jumbotron">
            <div class="container">
                <img src="../assets/images/ju.jpg" style="display:block;
        margin-left: auto;
        margin-right: auto;">
                <h1 class="display-2 " style="text-align: center;">Jahangirnagar University<span class="text-muted"><small>Student Section</small></span></h1><br>
                <h2 class="display-4" style="text-align: center;">Welcome <span style="color: "><?php echo $fname;?></span> to our Online Test System</h2>

            </div>
        </div>
    </div>
<div class="container" id="exam">

        <div class="row ">

            <div class="col-12">
                <hr class="my-4">
<hr class="my-4">
               <h1 class="display-2 " style="text-align: center; color: white;">Attain to the examinations</h1>
            
                <hr class="my-4">

               <hr>
            </div>
        </div>
    </div>
       <div class="container">
        <div class="row" id="content">

        <div class="b">

              <div class="buttons">
 <div class="col-sm-4">
                <a href="#">
            <button class="btn2">Attain Exam</button> </a>
        </div>
<div class="col-sm-4">
            <a href="#">
            <button class="btn2">View Result</button>
        </a>
    </div>
<div class="col-sm-4">
         <a href="#">
            <button class="btn2">Account Setting</button>
        </a>
    </div>

    
                </div>
            </div>
</div>

</div>
	 &nbsp;

    <?php
    include "../footer.php";
    ?>
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
        integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
</body>
</html>