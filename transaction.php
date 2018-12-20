<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "techcurio";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);




$email = 
$trns_id = $_POST['transaction']

$query = "INSERT INTO 'transaction_tb'('email', 'transaction_id') VALUES ('$email',$trns_id);";
mysqli_query($conn, $query);
// header("Location: registered_user.php?email=$email");
?>
<html>
<body>
  <form id="myForm" action="registered_user.php" method="post">
  <?php
          echo '<input type="hidden" name="email" value="'.$email.'">';
  ?>
  </form>
  <script type="text/javascript">
      document.getElementById('myForm').submit();
  </script>
</body>
</html>
