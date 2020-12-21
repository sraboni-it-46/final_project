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
    <style>
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
    </style>


</head>

<body class=" h-100  text-white bg-dark">
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
                <h1 class="display-2 " style="text-align: center;">Jahangirnagar University</h1><br>
                <h2 class="display-4" style="text-align: center;">Online Test System</h2>

            </div>
        </div>
    </div>
<div class="container" id="aboutus">
        <div class="row">
            <div class="col-12">

               <h1 class="display-2 " style="text-align: center;">About Us</h1><br>
                <p class="lead">Online Test System, Our focus is on providing the best user experience for our
                    customers,
                    and
                    their employees or students. we strive every day to improve our website and give you excellent
                    support.
                    We
                    do this with a smile, and a cup of coffee in our hands!</p>
                <hr class="my-4">
               <hr>
            </div>
        </div>

         <div class="container">
        <div class="row" id="content">
            <div class="col-sm-4">
                <h1 class="display-4">What we do</h1>
                <p class=""> Our goal is to create the best platform for online exanination process.. You can already
                    create
                    exams, courses, assessments and quizzes through our website. We aim high, and we like to challenge
                    ourselves, so we can deliver great quality.</p>
            </div>
            <div class="col-sm-4">
                <h1 class="display-4"> who we are</h1>
                <p>We are a dedicated team studying at Institute of Information Technology. All with one thing in
                    common: we are happy and dedicated. </p>
            </div>
            <div class="col-sm-4">
                <h1 class="display-4">How we work</h1>
                <p>We give support, we develop new features, we solve bugs. That’s what we do all day in an eggshell .
                    To deliver quality, we prioritize our work. Therefore we use Scrum. In the meantime we learn, grow,
                    and have fun. Because work isn’t always about work.</p>
            </div>

        </div>
    </div>

    </div>

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