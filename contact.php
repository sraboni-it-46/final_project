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
    ?>
<div id="content-wrap">
        <div class="jumbotron">
            <div class="container">
                <img src="assets/images/ju.jpg" style="display:block;
        margin-left: auto;
        margin-right: auto;">
                <h1 class="display-2 " style="text-align: center;">Contact with Us</h1><br>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">

            <div class="col-12">
               <h3>Contact Us</h3>
               <hr>
            </div>
        </div>

        <div class="row row-content">
           <div class="col-12">
              <h3>Location Information</h3>
           </div>
            <div class="col-12 col-sm-4 offset-sm-1">
                   <h5>Our Address</h5>
                    <address style="font-size: 100%">
		              Jahangirnagar university, Savar, Dhaka-1342<br>
		              <i class="fa fa-phone"></i>: +880 01734909335<br>
		              <i class="fa fa-fax"></i>: +111 1111 1111<br>
		              <i class="fa fa-envelope">: sraboni.stu2016@juniv.edu</i>:
                        <a href="juniv.edu">IIT,Jahangirnagar University</a>
		           </address>
            </div>
            <div class="col-12 col-sm-6 offset-sm-1">
                <h5>Map of our Location</h5>
            </div>
            <div class="col-12 col-sm-11 offset-sm-1">
               <div class="btn-group" role="group">
                    <a role="button" class="btn btn-primary" href="tel:+85212345678"><i class="fa fa-phone"></i> Call</a>
                    <a role="button" class="btn btn-info"><i class="fa fa-skype"></i> Skype</a>
                    <a role="button" class="btn btn-success" href="mailto:confusion@food.net"><i class="fa fa-envelope-o"></i> Email</a>
                </div>
            </div>
        </div>

        <div class="row row-content">
           <div class="col-12">
              <h3>Send us your Feedback</h3>
           </div>
            <div class="col-12 col-md-9">
                <form name="sentMessage" id="contactForm" novalidate method="post" action="">
                    <div class="control-group">
                        <div class="controls">
                            <input type="text" class="form-control" placeholder="Full Name" name="name" required
                                data-validation-required-message="Please enter your name" />
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <input type="email" class="form-control" placeholder="Email" name="email" required
                                data-validation-required-message="Please enter your email" />
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <textarea rows="10" cols="100" class="form-control" placeholder="Message" name="message"
                                required data-validation-required-message="Please enter your message" minlength="5"
                                data-validation-minlength-message="Min 5 characters" maxlength="999"
                                style="resize:none;margin-top:10px"></textarea>
                        </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary pull-right"
                        name="btnsubmit">Send</button><br /><br /><br /><br />
                </form>
            </div>
             <div class="col-12 col-md">
            </div>
       </div>

    </div>

 <?php
                        if (!empty($_POST['message'])){
                        if (isset($_POST['btnsubmit'])) {
                            $msg = $_POST['message'];
                            $nm = $_POST['name'];
                            $mail = $_POST['email'];
                            
                            $strInsert = "INSERT INTO feedback (text,name,email) VALUES('$msg','$nm','$mail')";
                            $result = mysqli_query($strconn, $strInsert);
            if ($result) {
                echo "<div class='alert alert-success' role='alert'>Thanks for your feedback</div>";
            } else {
                echo "<div class='alert alert-danger' role='alert'>Something wrong</div>";
            }
                        }
                    }
        ?>

         	
     &nbsp;

    <?php
    include "footer.php";
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