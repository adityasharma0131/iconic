<?php include("html-head.php"); ?>

<?php include("navbar.php"); ?>


<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename1 = "contact_db";
    
    
    // CREATE CONNECTION
    $conn1 = new mysqli($servername,$username, $password, $databasename1);
    
    // GET CONNECTION ERRORS
    if ($conn1->connect_error) {
        die("Connection failed: " . $conn1->connect_error);
    }

    $query = "SELECT * FROM `contact_form`;";
    $result = $conn1->query($query);

?>


<section class="data-table">
    <div class="table-bgbox">
<div class="heading">   
 
    <h3>WELCOME, <span class="admin_name"></span></h3>


</div>

<table class="darkTable">
    <thead>
        <tr>
            <th></th>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone no</th>
            <th>Course</th>
            <th>Gender</th>
        </tr>
    </thead>
    <tbody>
    <tr>
        <?php
        while($row = mysqli_fetch_assoc($result))
        {
        ?>
           <td></td>
           <td><?php echo $row['id']?></td>
           <td><?php echo $row['name']?></td>
           <td><?php echo $row['number']?></td>
           <td><?php echo $row['email']?></td>
           <td><?php echo $row['courses']?></td>
           <td><?php echo $row['gender']?></td>
    </tr>
        <?php
        }
        ?>

        
        
           
           
        
    </tbody>
    </tr>
</table>
</div>

</section>


<?php include("footer.php"); ?>


<script src="https://unpkg.com/scrollreveal"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script>
    <?php require_once("script.js");?>
</script>
<script>
    <?php require_once("login.js");?>
</script>
</body>
</html>