<html>
<form method="POST" action="">
  <label for="message">Comment:</label>
  <textarea id="message" name="message"></textarea>

  <label><i class="fa-solid fa-star" aria-hidden="true"></i></label>
          <input type="radio" id="star1" name="option" value="1"><br><br>
          <label><i class="fa-solid fa-star" aria-hidden="true"></i><i class="fa-solid fa-star" aria-hidden="true"></i></label>
          <input type="radio" id="star2" name="option" value="2"><br><br>
          <label ><i class="fa-solid fa-star" aria-hidden="true"></i><i class="fa-solid fa-star" aria-hidden="true"></i><i class="fa-solid fa-star" aria-hidden="true"></i></label>
          <input type="radio" id="star3" name="option" value="3"><br><br>
          <label><i class="fa-solid fa-star" aria-hidden="true"></i><i class="fa-solid fa-star" aria-hidden="true"></i><i class="fa-solid fa-star" aria-hidden="true"></i><i class="fa-solid fa-star" aria-hidden="true"></i></label>
          <input type="radio" id="star4" name="option" value="4"><br><br>
          <label><i class="fa-solid fa-star" aria-hidden="true"></i><i class="fa-solid fa-star" aria-hidden="true"></i><i class="fa-solid fa-star" aria-hidden="true"></i><i class="fa-solid fa-star" aria-hidden="true"></i><i class="fa-solid fa-star" aria-hidden="true"></i></label>
          <input type="radio" id="star5" name="option" value="5"><br><br><br>
          <input type="submit" name="orderbtn" class="orderbtn" id="orderbtn" value="Order"/>
  <button type="submit" name="Submit">Submit</button>
</form>
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "selva";
$conn=mysqli_connect($servername,$username,$password,$dbname);


// Check if the form was submitted
if (isset($_POST["Submit"])) {
  // Retrieve the values from the form
  $message = $_POST["message"];
  $option = $_POST["option"];
  
  $sql = "CREATE TABLE IF NOT EXISTS FEEDBACK (ORDERID INTEGER PRIMARY KEY AUTO_INCREMENT, ROLLNO INTEGER, STAR INTEGER, COMMENT VARCHAR(1000))";
    mysqli_query($conn,$sql);
    $sql = "ALTER TABLE FEEDBACK AUTO_INCREMENT=10000";
    mysqli_query($conn,$sql);
    $sql2 = "INSERT INTO FEEDBACK (STAR, COMMENT) VALUES ('$option','$message')";
    mysqli_query($conn,$sql2);
  echo "Message: " . $message . "<br>";
  echo "Option: " . $option;
}
?>
