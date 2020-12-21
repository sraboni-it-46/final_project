<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <link rel="stylesheet" href="s.css">
         <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
<form action="question.php" method="post">


   <p>  Fill out the information below</p>

    <div class="row">
    <div class="col-1">

  
    <label for="id"> Question ID </label>
  </div>


    <div class="col-2">

    <input class="a" type="text" name="id" id="id" required>
  </div>
</div>

     <div class="row">
    <div class="col-1">
    <label for="ttl">Question</label>
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
<label for="tpe">Question Type </label>
</div>
<div class="col-2"> 
 <select name="tpe" required id="type">
      <option selected hidden value="">Select Type</option>
      <option value="MCQ">MCQ</option>
      <option value="Theory">written</option>
      
     
     
     </select><br><br>
     </div > 

   </div>
   <div id="s">
            <div class="row">
    <div class="">

  
    <label for="op1"> Option 1 </label>
  </div>


    <div class="">

    <input class="a" type="text" name="op1" id="op1" required>
    <input type="radio" id="" name="opt" value="opt1" >
  </div>
</div>
     <div class="row">
    <div class="">

  
    <label for="op2"> Option 2 </label>
  </div>


    <div class="">

    <input class="a" type="text" name="op2" id="op2" required>
    <input type="radio" id="" name="opt" value="opt2">
  </div>
</div>
     <div class="row">
    <div class="">

  
    <label for="op3"> Option 3 </label>
  </div>


    <div class="">

    <input class="a" type="text" name="op3" id="op3" required>
    <input type="radio" id="" name="opt" value="opt3">
  </div>
</div>
     <div class="row">
    <div class="">

  
    <label for="op4"> Option 4 </label>
  </div>


    <div class="">

    <input class="a" type="text" name="op4" id="op4" required>
    <input type="radio" id="" name="opt" value="opt4">
  </div>
</div>
      </div>
     

<br>
  

     <div class="buttons">
        
    <button type="submit" class="btn btn-primary pull-right"
                        name="btnsubmit">Submit</button>
      
          </div>
  </form>
</div>



<script type="text/javascript">

  $(document).ready(function(){

    $("#s").hide();
    $('#type').change(function(){
       var v = $('#type').val();
       if(v === "MCQ"){
          $("#s").show();
       }
       else{
         $("#s").hide();
       }
    });

  });



</script>
<?php
                        if (!empty($_POST['id'])){
                        if (isset($_POST['btnsubmit'])) {
                                    $qid = $_POST['id'];
                                    $ttle = $_POST['ttl'];
                                    $csid = $_POST['cid'];                                                               
                                    $qtpe = $_POST['tpe'];

                                   

                                    if ($qtpe=='MCQ') 
                                    {
                                      $strInsert =  "INSERT INTO question (id,title,question_type,course_id) VALUES('$qid','$ttle','$qtpe','$csid')";
                                      $var1=$_POST['op1'];
                                      $var2=$_POST['op2'];
                                      $var3=$_POST['op3'];
                                      $var4=$_POST['op4'];
                                      $radioval=$_POST['opt'];

                                     /* $val1=$_POST['opt1'];
                                      $val2=$_POST['opt2'];
                                      $val3=$_POST['opt3'];
                                      $val4=$_POST['opt4'];*/
                                      if ($radioval=='opt1') {

                                         $strInsert =  "INSERT INTO question_options (question_id,option,is_correct) VALUES('$qid','$var1','1')";    
                                        $strInsert =  "INSERT INTO question_options (question_id,option,is_correct) VALUES('$qid','$var2','0')";
                                       
                                        $strInsert =  "INSERT INTO question_options (question_id,option,is_correct) VALUES('$qid','$var3','0')";
                  
                                        $strInsert =  "INSERT INTO question_options (question_id,option,is_correct) VALUES('$qid','$var4','0')";
                                      }
                                      elseif ($radioval=='opt2') {

                                           $strInsert =  "INSERT INTO question_options (question_id,option,is_correct) VALUES('$qid','$var1','0')";    
                                        $strInsert =  "INSERT INTO question_options (question_id,option,is_correct) VALUES('$qid','$var2','1')";
                                       
                                        $strInsert =  "INSERT INTO question_options (question_id,option,is_correct) VALUES('$qid','$var3','0')";
                  
                                        $strInsert =  "INSERT INTO question_options (question_id,option,is_correct) VALUES('$qid','$var4','0')";
                                      }
                                      elseif ($radioval=='opt3') {

                                           $strInsert =  "INSERT INTO question_options (question_id,option,is_correct) VALUES('$qid','$var1','0')";    
                                        $strInsert =  "INSERT INTO question_options (question_id,option,is_correct) VALUES('$qid','$var2','0')";
                                       
                                        $strInsert =  "INSERT INTO question_options (question_id,option,is_correct) VALUES('$qid','$var3','1')";
                  
                                        $strInsert =  "INSERT INTO question_options (question_id,option,is_correct) VALUES('$qid','$var4','0')";
                                      }
                                         elseif ($radioval=='opt4') {

                                           $strInsert =  "INSERT INTO question_options (question_id,option,is_correct) VALUES('$qid','$var1','0')";    
                                        $strInsert =  "INSERT INTO question_options (question_id,option,is_correct) VALUES('$qid','$var2','0')";
                                       
                                        $strInsert =  "INSERT INTO question_options (question_id,option,is_correct) VALUES('$qid','$var3','0')";
                  
                                        $strInsert =  "INSERT INTO question_options (question_id,option,is_correct) VALUES('$qid','$var4','1')";
                                      }
                                                            

                               }  
                               else{
                                $strInsert =  "INSERT INTO question (id,title,question_type,course_id) VALUES('$qid','$ttle','$qtpe','$csid')";

                               }                             
                            
                            
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
