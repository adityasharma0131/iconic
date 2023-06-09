<?php include("html-head.php"); ?>

<?php include("navbar.php"); ?>


<?php

  $servername = "localhost";
  $username = "root";
  $password = "";
  $databasename = "user_db";

  // CREATE CONNECTION
  $conn = new mysqli($servername, $username, $password, $databasename);

  // GET CONNECTION ERRORS
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    $password = md5($_POST['password']);

    

     

  $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$password' ";
  $result = mysqli_query($conn, $select);

  if(mysqli_num_rows($result) > 0){

    $error[] = "user aldready exist!";


  }else{
    $insert = "INSERT INTO user_form(name, email, password) VALUES('$name', '$email', '$password')";
    mysqli_query($conn, $insert);
    header('location:login.php');


  }


  };


?>


<div class="signup-Pannel">

  <section class="wrapper1">
    <div class="form signup1">
      <h2 class="heading">Signup</h2>
      
      <?php
      if(isset($error)){
        foreach($error as $error){
          echo '<span class="error-msg">'.$error.'</span>';
        }
      }
      ?>


      <form action="#" method="post" class="form1">
        <input type="text" name="name" placeholder="Full name" required />
        <input type="email" name="email" placeholder="Email address" required />
        <input type="password" name="password" name placeholder="Password" required />
        <div class="checkbox1">
          <input type="checkbox" id="signupCheck"  required>
          <label for="signupCheck1">I accept all terms & conditions</label>
        </div>
        <input type="submit" value="Signup" name="submit" />
      </form>
    </div>


    <?php
      if(isset($_POST['send'])){
    
        $email = mysqli_real_escape_string($conn, $_POST['email']);
    
        $password = md5($_POST['password']);
    
      $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$password' ";
      $result = mysqli_query($conn, $select);
    
      if(mysqli_num_rows($result) > 0){

        $row = mysqli_fetch_array($result);

        if($row['user_type'] == 'admin'){
          $_SESSION['admin_name'] = $row['name'];
          echo $_SESSION['admin_name'];
          header('location:admin-page.php');
        }
        elseif($row['user_type'] == 'user'){
          header('location:index.php');
        }

      }else{
        $error1[] = 'incorrect email or password';
      }

      };



    ?>


    <div class="form login1">
      <h2 class="heading">Login</h2>
      <?php
      if(isset($error1)){
        foreach($error1 as $error1){
          echo '<span class="error-msg">'.$error1.'</span>';
        };
      };
      ?>
      <form action="#" method="post" class="form1">
        <input type="text" name="email" placeholder="Email address" required />
        <input type="password" name="password" placeholder="Password" required />
        
        <input type="submit" value="Login" name="send" />
      </form>
    </div>

  </section>
</div>

<?php include('footer.php'); ?>

<script src="https://unpkg.com/scrollreveal"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<script src="script.js"></script>
<script src="login.js"></script>

</body>

</html>