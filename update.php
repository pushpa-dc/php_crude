<?php include('header.php');?>
<?php include('db.php');?>
<?php include('functions.php');?>

<div class="container">


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




                <button class="btn waves-effect waves-light btn-primary" type="submit" name="update">Update
                    <i class="material-icons right">send</i>
                </button>

                <label>Browser Select</label>
                <select name="id" class="browser-default">
                    <option value="" disabled selected>Choose your option</option>
                    <?php showAllData();?>
                </select>
            </div>
        </div>




        <?php if(isset($_POST['update'])){
            // $username= $_POST['username'];
            // $password= $_POST['password'];
            // $id = $_POST['id'];
            // $query = "UPDATE users SET username=' $username ', password=' $password ' WHERE id = ' $id ' ";
            // $result = mysqli_query($connection,$query);

            // if(!$reuslt){
            //     die("Query failed".mysqli_error($connection));
            // }

            updateData();

        }?>
    </form>


</div>

<?php include('footer.php');?>