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
<form action="#" method="POST">


   <p>  Fill out the information below</p>

    <div class="row">
    <div class="col-1">

  
    <label for="eid"> ID </label>
  </div>


    <div class="col-2">

    <input class="a" type="text" name="eid" id="eid" required>
  </div>
</div>
     <div class="row">
    <div class="col-1">
    <label for="ttl">Title</label>
  </div>
       <div class="col-2">
    <input class=a type="text" name="ttl" id="ttl" required>
  </div>
</div>

<div class="row">
    <div class="col-1">
<label for="cid"> Course_ID </label>
</div>
    
   <div class="col-2">
  <select name="cid" required>
      <option selected hidden value=""> Select Course Id</option>
      <option value="IT_3200">IT_3200</option>
      <option value="IT_3201">IT_3201</option>
      <option value="IT_3202">IT_3202</option>
      <option value="IT_3203">IT_3203</option>
      <option value="IT_3204">IT_3204</option>
      <option value="IT-3205">IT_3205</option>
      <option value="IT_3206">IT_3206</option>
      <option value="IT_3207">IT_3207</option>
      <option value="IT_3208">IT_3208</option>
      <option value="IT_3209">IT_3209</option>
     </select>
   </div>
 </div>
   
<div class="row">
    <div class="col-1">
 <label for="num"> Marks</label>
</div>
    <div class="col-2">
    <input class="a" type="number" name="num" id="num" required>
  </div>
</div>
      <div class="row">
    <div class="col-1"> 
  <label for="tid"> Teacher_Id </label>
</div>
   <div class="col-2"> 
  <select name="tid" required>
      <option selected hidden value="">Select Teacher Id</option>
      <option value="T_111">IT_1111</option>
      <option value="T_222">IT_2222</option>
      <option value="T_333">IT_3333</option>
      <option value="T_444">IT_4444</option>
      <option value="T_555">IT_5555</option>
     
     </select>
   </div>
 </div>
     
 <div class="row">
    <div class="col-1"> 
      <label for="dtime"> Starting__Date_Time </label>
    </div>
      <div class="col-2"> 
    <input class="a" type="datetime-local" name="dtime" id="dtime" required>
  </div>
</div>
    
<div class="row">
    <div class="col-1"> 
      <label for="appt"> Duration </label>
    </div>
      <div class="col-2"> 
    <input class="a" type="time" id="appt" name="appt">
  </div>
</div>
 <div class="row">
    <div class="col-1"> 
<label for="tpe"> Type </label>
</div>
<div class="col-2"> 
 <select name="tpe" required>
      <option selected hidden value="">Select Type</option>
      <option value="MCQ">MCQ</option>
      <option value="Theory">Theory</option>
      <option value="MCQ+Theory">Both MCQ & Theory</option>    
     </select>
   </div>
 </div>   

 <div class="row">
    <div class="col-1"> 
    <label for="sts"> Status </label>
  </div>
    <div class="col-2"> 
    <input class="a" type="Text" name="sts" id="sts" value="Initial" required>
  </div>
</div>

<br>  

     <div class="buttons">
        
      <button type="submit" class="btn btn-primary pull-right"
                        name="btnsubmit">Submit</button>
      
          </div>
  </form>
</div>
 <?php
                        if (!empty($_POST['eid'])){
                        if (isset($_POST['btnsubmit'])) {
                                    $exid = $_POST['eid'];
                                    $ttle = $_POST['ttl'];
                                    $csid = $_POST['cid'];
                                    $nmbr = $_POST['num'];
                                    $tcid = $_POST['tid'];
                                    $datime = $_POST['dtime'];
                                     $time = $_POST['appt'];

                                    $qtpe = $_POST['tpe'];
                                     $stts = $_POST['sts'];
                                     
                            
                            $strInsert =  "INSERT INTO exam (id,title,course_id,marks,teacher_id,starting_datetime,duration,question_type,status) VALUES('$exid','$ttle','$csid','$nmbr','$tcid','$datime','$time','$qtpe','$stts')";
                            $result = mysqli_query($strconn, $strInsert);
            if ($result) {
                echo "<div class='alert alert-success' role='alert'>Insertion Successful</div>";
            } else {
                echo "<div class='alert alert-danger' role='alert'>Something wrong</div>";
            }
                        }
                    }
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
