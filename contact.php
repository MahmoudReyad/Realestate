<?php
session_start();
include "init.php";
if(count($_SESSION) > 0 ){
    include "includes/templates/header.signed.inc.php";
}else {
    include "includes/templates/header.inc.php";
}
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $message = $_POST['messge'];
    $email = $_POST['email'];
    mail($email ,"ContactUs" ,  $message);
}
?>
	
	<div id="fh5co-page">
	<div class="fh5co-contact animate-box">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<h3>Contact Info.</h3>
					<ul class="contact-info">
						<li><i class="icon-map"></i>198 West 21th Street, Suite 721 New York NY 10016</li>
						<li><i class="icon-phone"></i>+ 1235 2355 98</li>
						<li><i class="icon-envelope"></i><a href="#">info@yoursite.com</a></li>
						<li><i class="icon-globe"></i><a href="#">www.yoursite.com</a></li>
					</ul>
				</div>
				<div class="col-md-8 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
					<div class="row">
                        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
						<div class="col-md-6">
							<div class="form-group">
								<input class="form-control" placeholder="Name" type="text" name="name">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input class="form-control" placeholder="Email" type="text" name="email">
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<textarea name="message" class="form-control" id="" cols="30" rows="7" placeholder="Message"></textarea>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<input value="Send Message" class="btn btn-primary" type="submit">
							</div>
                        </form>
						</div>
					</div>
				</div>
			</div>

		</div>	
	</div>

	<div id="map" class="animate-box" data-animate-effect="fadeIn"></div>

<?php include "includes/templates/footer.inc.php"; ?>

