<?php include('header.php');?>
<div class="container">
  <div class="row">
    <form class="col s12 shadow" method="post">
      <div class="row">
        <div class="input-field col s4">
          <input placeholder="" name="username" id="user_name" type="text" class="validate">
          <label for="user_name">User Name</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s4">
          <input id="password" name="password" type="password" class="validate">
          <label for="password">Password</label>

          <button class="btn waves-effect waves-light btn-primary" type="submit" name="send">Submit
            <i class="material-icons right">send</i>
          </button>
        </div>
      </div>

    </form>
  </div>
</div>

<?php
include('db.php');
if(isset($_POST['send'])){
$username = $_POST['username'];
$password = $_POST['password'];

    $connection = mysqli_connect('localhost','root','','loginapp');

  if($connection){
    echo "Connected";
  }else{
    die("Connection failed");
  }

  // $query = "INSERT INTO users(username,password) ";
  // $query.="VALUES ('$username','$password')";

  $query = "SELECT * FROM users";
  

$result = mysqli_query($connection,$query);
if(!$result){
  die('Query failed');
}


 };?>

<?php while($row = mysqli_fetch_row($result)) {?>

<pre>
<?php print_r($row);?>
</pre>
<?php }?>

<?php include('footer.php');?>