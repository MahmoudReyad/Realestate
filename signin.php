<?php
include 'init.php';
include 'includes/templates/header.inc.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['signin'])){
        $email = $_POST['email'];
        $password = sha1($_POST['password']);
        $valid = new Validate();
        if($valid->checkIfUserExist($email , $password) !== false){
            session_start();
            $_SESSION['id'] = $valid->getId();

            header('Location:signed.php');
        }
        else {
            header('Location:?faild');
        }
    }
}
?>
<div class="signin">
    <div class="conatiner">
        <div class="row">
            <div class="col-xs-12">
                <form enctype="multipart/form-data" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                    <?php if(isset($_GET['faild'])){?>
                        <div class="alert alert-danger">User is not Exist Don't Have Account Signup <a href="signup.php">Here</a> </div>
                 <?php   }  ?>
                    <input type="email" name="email" class="form-control">
                    <input type="password" name="password" class="form-control">
                    <input type="submit" name="signin" value="Login" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>
</div>
<?php
include 'includes/templates/footer.inc.php';
?>
