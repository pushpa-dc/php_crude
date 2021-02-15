<?php include('db.php');?>
<?php 


function showAllData(){
      $query = "SELECT * FROM users";
      global $connection;
    $result = mysqli_query($connection,$query);
    if(!$result){
      die('Query failed');
    }

    while($row = mysqli_fetch_assoc($result)) {
        $id=$row['id'];
    echo "<option value='$id'>$id</option>";

  }
}


function  updateData(){
            global $connection;
            $username= $_POST['username'];
            $password= $_POST['password'];
            $id = $_POST['id'];
            $query = "UPDATE users SET username=' $username ', password=' $password ' WHERE id = ' $id ' ";
            $result = mysqli_query($connection,$query);

            if($reuslt){
                die("Query failed".mysqli_error($connection));
            }
}