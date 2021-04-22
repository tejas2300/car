<?php

try{

  $db= new mysqli("localhost","root","","mycar");

}catch(Exception $exc){
  echo $exc->getTraceAsString();
}

if(isset($_POST['m_name'])&&isset($_POST['e_type'])&&isset($_POST['pricee'])&&isset($_POST['c_name'])&&isset($_POST['phoNe'])&&isset($_POST['addr'])){
  $date1 = date('d-m-y h:i:s');
    $name=$_POST['m_name'];
    $etype=$_POST['e_type'];
    $price=$_POST['pricee'];
    $cname=$_POST['c_name'];
    $phone=$_POST['phoNe'];
    $date=$date1;
    $address=$_POST['addr'];

    $is_insert=  $db->query("INSERT INTO `data`( `modelName`, `engineType`, `price`, `custName`, `phoneNo`, `date`, `address`) VALUES ('$name','$etype','$price','$cname',' $phone','$date','$address')");

    if($is_insert==TRUE){
      $date = date('d-m-y h:i:s');
      echo "thank You";
            exit();
          }
        }


?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form page</title>

</head>

<script> 
    function fun(){ 
        document.getElementById('cusname_in').value=''; 
        document.getElementById('cusnum_in').value=''; 
        document.getElementById('mod_in').value=''; 
        document.getElementById('eng_in').value=''; 
        document.getElementById('pow_in').value=''; 
        document.getElementById('pri_in').value=''; 
        document.getElementById('date_in').value=''; 
        document.getElementById('me').value=''; 
        
        } 
  </script>

<style>

    body    {
        background-image: url(car_back.jpg);
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
    }
    
    .suravat{
        color: white;
        font-family: monospace;
        font-size: 30px;
        background-color: rgba(6, 29, 128, 0.5);
        padding: 10px;
        border-radius: 10px;
        margin-top: 20px;
    }

    .gadda{
        color: white;
        font-family: monospace;
        font-size: 30px;
        background-color: rgba(0, 0, 0, 0.5);
        padding: 10px;
        width: 1000px;
        margin-left: 200px;
        border-radius: 10px;
        margin-top: 20px;
    }
    
    .cusname_in{
        background-color: rgba(255, 255, 255, 0.4);
        border-radius: 10px;
        color: white;
        font-size: 20px;
        border-color: rgba(0, 0, 0, 0.5);
        height: 20px;
        width: 400px;
    }

    .cusnum_in{
        background-color: rgba(255, 255, 255, 0.4);
        border-radius: 10px;
        color: white;
        font-size: 20px;
        border-color: rgba(0, 0, 0, 0.5);
        height: 20px;
        width: 400px;
    }

    .mod_in{
        background-color: rgba(255, 255, 255, 0.4);
        border-radius: 10px;
        color: white;
        font-size: 20px;
        border-color: rgba(0, 0, 0, 0.5);
        height: 20px;
        width: 400px;
    }

    .eng_in{
        background-color: rgba(255, 255, 255, 0.4);
        border-radius: 5px;
        color: white;
        font-size: 20px;
        border-color: rgba(0, 0, 0, 0.5);
        height: 20px;
        width: 400px;
    }

    .pow_in{
        background-color: rgba(255, 255, 255, 0.4);
        border-radius: 10px;
        color: white;
        font-size: 20px;
        border-color: rgba(0, 0, 0, 0.5);
        height: 20px;
        width: 400px;
    }

    .pri_in{
        background-color: rgba(255, 255, 255, 0.4);
        border-radius: 10px;
        color: white;
        font-size: 20px;
        border-color: rgba(0, 0, 0, 0.5);
        height: 20px;
        width: 400px;
    }

    .date_in{
        background-color: rgba(255, 255, 255, 0.4);
        border-radius: 10px;
        color: white;
        font-size: 20px;
        border-color: rgba(0, 0, 0, 0.5);
        height: 20px;
        width: 400px;
    }

    .me{
        background-color: rgba(255, 255, 255, 0.4);
        border-radius: 10px;
        color: white;
        font-size: 20px;
        border-color: rgba(0, 0, 0, 0.5);
        min-height:30px;
        /*width: 400p */
    }

    .submit{
        text-align: center;
        background-color: black;
        color: white;
        cursor:pointer;
        border-radius: 10px;
        border-color: black;
        font-size: 20px;
        padding: 10px;
        width: 100px;
    }


</style>

<body>
<div>  
    <div style="text-align: center;" class="suravat">
        Thank You For Booking Car
    </div>
    <br><br>

    <div style="text-align: left;" class="gadda">

    <form method="post"  action="">

        <label class="text">Customer Name:</label>
        <input class="cusname_in" id="cusname_in" type="text" name="c_name"><br><br>
                
        <label class="text">Phone No:</label>
        &emsp;&emsp;&emsp;&emsp;&emsp;<input class="cusnum_in" id="cusnum_in" type="number" name="phoNe"><br><br>
        
        <label class="text">Model name:</label>
        &emsp;&emsp;&emsp;<input class="mod_in" id="mod_in" type="text" name="m_name"><br><br>
        
        <label class="text">Engine Type:</label>
        &emsp;&emsp;<input class="eng_in" id="eng_in" type="text" name="e_type"><br><br>
        
        <label class="text">Power:</label>
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input class="pow_in" id="pow_in" type="text" name="" id="powere"><br><br>
        
        <label class="text">Price:</label>
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input class="pri_in" id="pri_in" type="text" name="pricee"><br><br>

        <!-- <label class="text">Date:</label>
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input class="date_in" id="date_in" type="number" name="Date"><br><br>
         -->
        <label class="text">Address:</label>
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<textarea style="text-decoration: none;" class="me" id="me" name="addr"  cols="35"  rows="5"></textarea><br><br>
        <div style="text-align: center;">

        <button type= "submit" class="submit" name="submitbtn" >Submit</button>
        <input class="submit" id="reset_t" onclick="fun()" type="submit" value="Reset"/>
        </div>
        </form>
    </div>
</div>
</body>
</html>