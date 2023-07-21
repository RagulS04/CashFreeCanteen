<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/40feb049da.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
    <link rel="stylesheet" href="style2.css">
    <title>CFC</title>
    
</head>
<body>
<div class="CFC">
  <b><font face = "Comic sans MS">CFC</font></b>
</div>
<button id="myBtn">RECHARGE  <i class="fa-solid fa-bolt fa-fade"></i></button>
<div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
      <CENTER>
        <b><p style="font-size:40px;"> STUDENT DETAILS</p></b>
        <form action="" method="post" id="form1">
          <label for="rollno">ROLL NUMBER: </label><br><br/>
          <input type="text" id="rollno" name="rollno"><br><br>
          <label for="amount">AMOUNT TRANSFER: </label><br><br/>
          <input type="text" id="amount" name="amount"><br><br><br>
          <input type="submit" name="Recharge" value="Recharge" id="myBtn2"><br>
        </form>
      </CENTER>
  </div>
</div>
<button id="myBtn3">UPDATE <i class="fa-solid fa-pen fa-fade" aria-hidden="true"></i></button>
<div id="myModal2" class="modal2">
  <div class="modal-content2">
    <span class="close2">&times;</span>
    <CENTER>
      <form action = "" method = "post">
        <p class="time">&nbsp;&nbsp;&nbsp;&nbsp;Breakfast items:<input type="button" class="select" id="s1" onclick='selects1()' value="Select All">  </p>
        <ol>
          <label>Pongal</label>
          <input type="checkbox" id="food" name="food1[]" value="Pongal"><br><br><br>
          <label  >Poori</label>
          <input type="checkbox" id="food" name="food1[]" value="Poori"><br><br><br>
          <label  >Uthapam</label>
          <input type="checkbox" id="food" name="food1[]" value="Uthapam"><br><br><br>
          <label  >Masal dosa</label>
          <input type="checkbox" id="food" name="food1[]" value="MasalDosa"><br><br><br>
          <label  >Podi Dosa</label>
          <input type="checkbox" id="food" name="food1[]" value="PodiDosa"><br><br><br>
          <label  >Dosa</label>
          <input type="checkbox" id="food" name="food1[]" value="Dosa"><br><br><br>
          <label  >Vada</label>
          <input type="checkbox" id="food" name="food1[]" value="Vada"><br><br><br>
        </ol><br>
        <p class="time">&nbsp;&nbsp;&nbsp;&nbsp;Lunch items:<input type="button" id="s2" class="select" onclick='selects2()' value="Select All"/> </p>
        <ol>
          <label>Chick. Briyani</label>
          <input type="checkbox" id="food2" name="food2[]" value="Chickenbiriyani"><br><br><br>
          <label  >Chicken Rice</label>
          <input type="checkbox" id="food2" name="food2[]" value="ChickenRice"><br><br><br>
          <label  >Veg Fried Rice</label>
          <input type="checkbox" id="food2" name="food2[]" value="VegFriedRice"><br><br><br>
          <label  >Veg Biriyani</label>
          <input type="checkbox" id="food2" name="food2[]" value="VegBiriyani"><br><br><br>
          <label  >Meals</label>
          <input type="checkbox" id="food2" name="food2[]" value="Meals"><br><br><br>
          <label  >Parotta</label>
          <input type="checkbox" id="food2" name="food2[]" value="Parotta"><br><br><br>
          <label  >Chilli Parotta</label>
          <input type="checkbox" id="food2" name="food2[]" value="ChilliParotta"><br><br><br>
        </ol><br>
        <p class="time">&nbsp;&nbsp;&nbsp;&nbsp;Dessert items:<input type="button" id="s3" class="select" onclick='selects3()' value="Select All"/> </p>
        <ol>
          <label  >Plain cake</label>
          <input type="checkbox" id="food" name="food3[]" value="PlainCake"><br><br><br>
          <label  >Black Forrest</label>
          <input type="checkbox" id="food" name="food3[]" value="BlackForrest"><br><br><br>
          <label  >Cup Cake</label>
          <input type="checkbox" id="food" name="food3[]" value="CupCake"><br><br><br>
          <label  >Carrot Halwa</label>
          <input type="checkbox" id="food" name="food3[]" value="CarrotHalwa"><br><br><br>
          <label  >Jamun</label>
          <input type="checkbox" id="food" name="food3[]" value="Jamun"><br><br><br>
          <label  >Donut</label>
          <input type="checkbox" id="food" name="food3[]" value="Donut"><br><br><br>
          </ol><br>
        <p class="time">&nbsp;&nbsp;&nbsp;&nbsp;Juice items:<input type="button" id="s4" class="select" onclick='selects4()' value="Select All"/> </p>
        <ol>  
          <label  >Apple</label>
          <input type="checkbox" id="food" name="food4[]" value="Apple"><br><br><br>
          <label  >Banana</label>
          <input type="checkbox" id="food" name="food4[]" value="Banana"><br><br><br>
          <label  >Lime</label>
          <input type="checkbox" id="food" name="food4[]" value="Lime"><br><br><br>
          <label  >Orange</label>
          <input type="checkbox" id="food" name="food4[]" value="Orange"><br><br><br>
          <label  >Pineapple</label>
          <input type="checkbox" id="food" name="food4[]" value="Pineapple"><br><br><br>
          <label  >Pome</label>
          <input type="checkbox" id="food" name="food4[]" value="Pome"><br><br><br>
          <label  >SweetLime</label>
          <input type="checkbox" id="food" name="food4[]" value="SweetLime"><br><br><br>
          <label  >WaterMelon</label>
          <input type="checkbox" id="food" name="food4[]" value="WaterMelon"><br><br><br>
        </ol><br>
        <p class="time">&nbsp;&nbsp;&nbsp;&nbsp;Snack items:<input type="button" id="s5" class="select" onclick='selects5()' value="Select All"/> </p>
        <ol>  
          <label  >Coffee</label>
          <input type="checkbox" id="food" name="food5[]" value="Coffee"><br><br><br>
          <label  >Tea</label>
          <input type="checkbox" id="food" name="food5[]" value="Tea"><br><br><br>
          <label  >Samosa</label>
          <input type="checkbox" id="food" name="food5[]" value="Samosa"><br><br><br>
          <label  >Masalavada</label>
          <input type="checkbox" id="food" name="food5[]" value="Masalavada"><br><br><br>
          <label  >Methuvada</label>
          <input type="checkbox" id="food" name="food5[]" value="Methuvada"><br><br><br>
        </ol><br>
        <input name='done' class="done" type="submit" value="Done" id="myBtn2"><br>
      </form>
    </CENTER>
  </div>
</div>
</body>
</html>
<script>
  var modal = document.getElementById("myModal");
  var modal2 = document.getElementById("myModal2");
  var btn = document.getElementById("myBtn");
  var btn2 = document.getElementById("myBtn3");
  var span = document.getElementsByClassName("close")[0];
  var span2 = document.getElementsByClassName("close2")[0];
 
  btn.onclick = function() {
    modal.style.display = "block";
    modal2.style.display = "none";
  }

  btn2.onclick = function() {
    modal2.style.display = "block";
    modal.style.display = "none";
  }

  span.onclick = function() {
    modal.style.display = "none"; 
  }

  span2.onclick = function() {
    modal2.style.display = "none"; 
  }

  window.onclick = function(event) {
    if (event.target == modal || event.target == modal2) {
      modal.style.display = "none";
      modal2.style.display = "none";  
    }
  }
  var isActionEnabled1 = false;
  var isActionEnabled2 = false;
  var isActionEnabled3 = false;
  var isActionEnabled4 = false;
  var isActionEnabled5 = false;

  function selects1(){  
    
    if (isActionEnabled1) {
      var ele=document.getElementsByName('food1[]');  
      for(var i=0; i<ele.length; i++){  
        if(ele[i].type=='checkbox')  
          ele[i].checked=false; 
      }
      isActionEnabled1 = false;
      document.getElementById("s1").value="Select All";
    } 
    else {
      var ele=document.getElementsByName('food1[]');  
      for(var i=0; i<ele.length; i++){  
        if(ele[i].type=='checkbox')  
          ele[i].checked=true; 
      }
      isActionEnabled1 = true;
      document.getElementById("s1").value="Deselect All";
    }
  }  
 
  function selects2(){  
    if (isActionEnabled2) {
      var ele=document.getElementsByName('food2[]');  
      for(var i=0; i<ele.length; i++){  
        if(ele[i].type=='checkbox')  
          ele[i].checked=false; 
      }
      isActionEnabled2 = false;
      document.getElementById("s2").value="Select All";
    } 

    else {
      var ele=document.getElementsByName('food2[]');  
      for(var i=0; i<ele.length; i++){  
        if(ele[i].type=='checkbox')  
          ele[i].checked=true; 
      }
      isActionEnabled2 = true;
      document.getElementById("s2").value="Deselect All";
    }
  }
          
  function selects3(){  
    if (isActionEnabled3) {
      var ele=document.getElementsByName('food3[]');  
      for(var i=0; i<ele.length; i++){  
        if(ele[i].type=='checkbox')  
          ele[i].checked=false; 
      }
      isActionEnabled3 = false;
      document.getElementById("s3").value="Select All";
    } 
    else {
      var ele=document.getElementsByName('food3[]');  
      for(var i=0; i<ele.length; i++){  
        if(ele[i].type=='checkbox')  
          ele[i].checked=true; 
      }
      isActionEnabled3 = true;
      document.getElementById("s3").value="Deselect All";
    }
  }

  function selects4(){  
    
    if (isActionEnabled4) {
      var ele=document.getElementsByName('food4[]');  
      for(var i=0; i<ele.length; i++){  
        if(ele[i].type=='checkbox')  
          ele[i].checked=false; 
      }
      isActionEnabled4 = false;
      document.getElementById("s4").value="Select All";
    } 
    else {
      var ele=document.getElementsByName('food4[]');  
      for(var i=0; i<ele.length; i++){  
        if(ele[i].type=='checkbox')  
          ele[i].checked=true; 
      }
      isActionEnabled4 = true;
      document.getElementById("s4").value="Deselect All";
    }
  }  

  function selects5(){  
    
    if (isActionEnabled5) {
      var ele=document.getElementsByName('food5[]');  
      for(var i=0; i<ele.length; i++){  
        if(ele[i].type=='checkbox')  
          ele[i].checked=false; 
      }
      isActionEnabled5 = false;
      document.getElementById("s5").value="Select All";
    } 
    else {
      var ele=document.getElementsByName('food5[]');  
      for(var i=0; i<ele.length; i++){  
        if(ele[i].type=='checkbox')  
          ele[i].checked=true; 
      }
      isActionEnabled5 = true;
      document.getElementById("s5").value="Deselect All";
    }
  }  
</script>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "selva";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(isset($_POST['Recharge']))
{  
  $sql = "CREATE TABLE IF NOT EXISTS RECHARGE (ROLLNO INTEGER PRIMARY KEY, AMOUNT INTEGER)";
  mysqli_query($conn,$sql);
  $a = $_POST['amount'];
  $r = $_POST['rollno'];
  $sql1 = "INSERT INTO recharge VALUES ('$r', '$a') ON DUPLICATE KEY UPDATE amount=amount+'$a' ";
  mysqli_query($conn,$sql1);
}

if(isset($_POST['done']))
{
  
  $sql2 = "CREATE TABLE IF NOT EXISTS ITEMS (NAME VARCHAR(20) PRIMARY KEY, AVAILABILITY VARCHAR(5))";
  mysqli_query($conn,$sql2);
  $sql3 = "UPDATE ITEMS SET AVAILABILITY = 'NO' ";
  mysqli_query($conn,$sql3);

  if(empty($_POST['food1'])&&empty($_POST['food2'])&&empty($_POST['food3'])&&empty($_POST['food4'])&&empty($_POST['food5']))
  {
    exit();
  }
  if(!empty($_POST['food1']))
  {
    foreach($_POST['food1'] as $selected) {
      $sql2 = "INSERT INTO items VALUES ('$selected', 'YES') ON DUPLICATE KEY UPDATE AVAILABILITY='YES' ";
      mysqli_query($conn,$sql2);
    }
  }

  if(!empty($_POST['food2']))
  {
    foreach($_POST['food2'] as $selected) {
      $sql2 = "INSERT INTO items VALUES ('$selected', 'YES') ON DUPLICATE KEY UPDATE AVAILABILITY='YES' ";
      mysqli_query($conn,$sql2);
    }
  }

  if(!empty($_POST['food3']))
  {           
    foreach($_POST['food3'] as $selected) {
      $sql2 = "INSERT INTO items VALUES ('$selected', 'YES') ON DUPLICATE KEY UPDATE AVAILABILITY='YES' ";
      mysqli_query($conn,$sql2);
    }  
  }

  if(!empty($_POST['food4']))
  {           
    foreach($_POST['food4'] as $selected) {
      $sql2 = "INSERT INTO items VALUES ('$selected', 'YES') ON DUPLICATE KEY UPDATE AVAILABILITY='YES' ";
      mysqli_query($conn,$sql2);
    }  
  }

  if(!empty($_POST['food5']))
  {           
    foreach($_POST['food5'] as $selected) {
      $sql2 = "INSERT INTO items VALUES ('$selected', 'YES') ON DUPLICATE KEY UPDATE AVAILABILITY='YES' ";
      mysqli_query($conn,$sql2);
    }  
  }
}
?>