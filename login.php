<?php include('header.php');?>
<?php include('functions.php');?>
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
if(isset($_POST['send'])){

  insertData();


 };?>



<?php include('footer.php');?>