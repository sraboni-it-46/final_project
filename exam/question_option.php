<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <link rel="stylesheet" href="s.css">
         <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<style>
    body{
        /*margin: auto;
        padding: auto;*/
        background-color: grey;
    }


form label{
  color: white;
  font-size: 15px;
  margin-bottom: 5px;
  cursor: pointer;
  text-transform: capitalize;
  font-weight: bold;
 
}

.a{

  font-size: 15px;
  border-radius: 9px;
  border:1px solid #fff000;
  color:#fff;
  display: inline-block;
  background:transparent;
  margin-left: 105px;
  

}

form select{
  font-size: 15px;
  border-radius: 9px;
  color: #ACABA9;
  padding: 5px;
   border:1px solid #fff000;
   display: inline-block;
  background:transparent;
  margin-left: 105px;


}
.f form {
  border: 2px solid black;
  border-radius: 25px;
  background:rgba(1,1,1,0.4);
  position: absolute;
   top: 50%;
   left: 50%;
   transform: translate(-50%, -50%);
  padding: 20px;

  
}

.col-1 {
  float: left;
  width: 35%;
  margin-top: 6px;
 
}

.col-2 {
  float: left;
  width: 65%;
  margin-top: 6px;
}


.row:after {
  content: "";
  display: table;
  clear: both;
}
.buttons input {
  margin-left: 150px;
  height: 50px;
  width: 150px;
  font-size: 20px;
  font-weight: 600;
  color: white;
  background: darkorange;
  outline: none;
  cursor: pointer;
  border: 2px solid black;
  border-radius: 25px;
  transition: .4s;
}

.buttons input:hover{
  background: crimson;}


form p{
  margin-top: 5px;
  margin-left: 30px;
  color:#fff;
  font-size: 30px;
  font-weight: bold;
  
}

</style>
    </head>
    <body>
         <?php
    $strconn = mysqli_connect("localhost", "root", "", "3_2_project");
    if (!$strconn)
        echo "Connection failed" . mysqli_connect_error();
    else {
    }
    ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed">
        <div class="container-fluid">

            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav mainNav">
                    <li class="active"><button class="btn btn-block btn-warning"><a href="index.php">Home</a></button></li>

                </ul>
            </div>
        </div>
    </nav>


<div class="f">
<form action="#">


   <p>  Fill out the information below</p>

    <div class="row">
    <div class="col-1">

  
    <label for="Id"> ID </label>
  </div>


    <div class="col-2">

    <input class="a" type="text" name="" id="user" required>
  </div>
</div>

 <div class="row">
    <div class="col-1">

  
    <label for="Id">Question ID </label>
  </div>


    <div class="col-2">

    <input class="a" type="text" name="" id="user" required>
  </div>
</div>


 <div class="row">
    <div class="col-1">

  
    <label for="Id"> Option </label>
  </div>


    <div class="col-2">

    <input class="a" type="text" name="" id="user" required>
  </div>
</div>
 <div class="row">
    <div class="col-1">

  
    <label for="Id"> is_correct </label>
  </div>


    <div class="col-2">

    <input class="a" type="text" name="" id="user" required>
  </div>
</div>
     

<br>
  

     <div class="buttons">
        
      <input type="submit" value="Submit"> 
      
          </div>
  </form>
</div>



    </body>
</html>
