<?php
include 'init.php';
include 'includes/templates/header.inc.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['signup'])){
        $firstname = $_POST['firstname'];
        $lastName = $_POST['lastname'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $dob = $_POST['dob'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $age = $_POST['age'];
        $country = $_POST['country'];
        $zipcode = $_POST['zipcode'];
        $user = new users($firstname , $lastName , $email , $username , sha1($password) , $dob , $phone , $address , $age , $country , $zipcode);
        $user->insertUser($user);

    }
}
?>
    <div class="signup">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form class="signup-form" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                        <input class="form-control" type="text" name="firstname" placeholder="First Name">
                        <input class="form-control" type="text" name="lastname" placeholder="Last Name">
                        <input class="form-control" type="email" name="email" placeholder="Eamil">
                        <input class="form-control" type="text" name="username" placeholder="Username">
                        <input class="form-control" type="password" name="password" placeholder="Password">
                        <input class="form-control" type="date" name="dob" placeholder="Date Of Birth">
                        <input class="form-control" type="text" name="phone" placeholder="Phone">
                        <input class="form-control" type="text" name="address" placeholder="Address">
                        <input class="form-control" type="text" name="age" placeholder="age">
                        <input class="form-control" type="text" name="country" placeholder="Country">
                        <input class="form-control" type="text" name="zipcode" placeholder="Zip-Code">
                        <input type="submit" class="btn btn-success" value="Signup" name="signup">
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php
include 'includes/templates/footer.inc.php';
?>