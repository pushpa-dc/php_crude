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

function  deleteData(){
    global $connection;
    $id = $_POST['id'];
    $query = "DELETE FROM users WHERE id = ' $id ' ";
    $result = mysqli_query($connection,$query);

    if($reuslt){
        die("Query failed".mysqli_error($connection));
    }
    echo $query;
}


function insertData(){
global $connection;
    $username = $_POST['username'];
$password = $_POST['password'];

  if($connection){
    echo "Connected";
  }else{
    die("Connection failed");
  }

  $query = "INSERT INTO users(username,password) ";
  $query.="VALUES ('$username','$password')";
  

$result = mysqli_query($connection,$query);
if($result){
  die('Query failed');
}
}