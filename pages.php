 <?php
 session_start();
include 'init.php';
require ('fpdf.php');
include 'includes/templates/header.signed.inc.php';


if($_GET['action'] == 'buy'){
    $property = new Database();
    $data = $property->selectAllProperty($_SESSION['id']);
    if($data != false){
        echo "<div class='property'>
                     <div class='container'>
                         <div class='row'>";
        foreach ($data as $value){

                         echo"<div class='col-lg-3'>
                                    <img src='{$value['image_path']}' alt = 'property' class='img-responsive' height='300px width=300px'>
                                    <a href='pages.php?action=details&propertyid={$value['id']}'> <button class='btn btn-primary'>See Details</button></a>
                                </div>
                   ";

        }
        echo "
                 </div>
                        </div>
                    </div>
                </div>
        ";
    }

    else{
        echo 'no data hasbeen Found';
    }

}elseif ($_GET['action'] == 'mainpage'){ ?>
 <div id="best-deal">
     <div class="container">
         <div class="row">
             <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box" data-animate-effect="fadeIn">
                 <h2>We are Offering the Best Real Estate Deals</h2>
                 <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
             </div>
             <div class="col-md-4 item-block animate-box" data-animate-effect="fadeIn">
                 <div class="fh5co-property">
                     <figure>
                         <img src="layout/images/slide_3.jpg" alt="Free Website Templates FreeHTML5.co" class="img-responsive">
                         <a href="#" class="tag">For Sale</a>
                     </figure>
                     <div class="fh5co-property-innter">
                         <h3><a href="#">Villa In Hialeah, Dade County</a></h3>
                         <div class="price-status">
                             <span class="price">$540,000 </span>
                         </div>
                         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque dicta magni amet atque doloremque velit unde adipisci omnis hic quaerat.</p>
                     </div>
                     <p class="fh5co-property-specification">
                         <span><strong>3500</strong> Sq Ft</span>  <span><strong>3</strong> Beds</span>  <span><strong>3.5</strong> Baths</span>  <span><strong>2</strong> Garages</span>
                     </p>
                 </div>
             </div>
         </div>
     </div>
 </div>


 <div class="fh5co-section-with-image">

     <img src="layout/images/image_1.jpg" alt="" class="img-responsive">
     <div class="fh5co-box animate-box">
         <h2>Security, Comfort, &amp; Convenience</h2>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque dicta magni amet atque doloremque velit unde adipisci omnis hic quaerat.</p>
         <p><a href="#" class="btn btn-primary btn-outline with-arrow">Get started <i class="icon-arrow-right"></i></a></p>
     </div>

 </div>

 <div id="fh5co-testimonial">
     <div class="container">
         <div class="row">
             <div class="col-md-6 col-md-offset-3 text-center fh5co-heading animate-box" data-animate-effect="fadeIn">
                 <h2>Happy Clients</h2>
                 <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
             </div>
             <div class="col-md-4 text-center item-block animate-box" data-animate-effect="fadeIn">
                 <blockquote>
                     <p>&ldquo; She packed her seven versalia, put her initial into the belt and made herself on the way. When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of. &rdquo;</p>
                     <p><span class="fh5co-author"><cite>Jason Davidson</cite></span><i class="icon twitter-color icon-twitter pull-right"></i></p>

                 </blockquote>
             </div>
             <div class="col-md-4 text-center item-block animate-box" data-animate-effect="fadeIn">
                 <blockquote>
                     <p>&ldquo; Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way. She had a last view back on the skyline of her hometown Bookmarksgrove, the headline of. &rdquo;</p>
                     <p><span class="fh5co-author"><cite>Kyle Smith</cite></span><i class="icon googleplus-color icon-google-plus pull-right"></i></p>
                 </blockquote>
             </div>
             <div class="col-md-4 text-center item-block animate-box" data-animate-effect="fadeIn">

                 <blockquote>
                     <p>&ldquo; The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. S	he had a last view back on the skyline of her hometown Bookmarksgrove. &rdquo;</p>
                     <p><span class="fh5co-author"><cite>Rick Cook</cite></span><i class="icon facebook-color icon-facebook pull-right"></i></p>
                 </blockquote>
             </div>
         </div>
     </div>
 </div>


 <div id="fh5co-agents">
     <div class="container">
         <div class="row">
             <div class="col-md-6 col-md-offset-3 text-center fh5co-heading white animate-box" data-animate-effect="fadeIn">
                 <h2>Our Trusted Agents</h2>
                 <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
             </div>
             <div class="col-md-4 text-center item-block animate-box" data-animate-effect="fadeIn">

                 <div class="fh5co-agent">
                     <figure>
                         <img src="layout/images/testimonial_person2.jpg" alt="Free Website Template by FreeHTML5.co">
                     </figure>
                     <h3>John Doe</h3>
                     <p>Veniam laudantium rem odio quod, beatae voluptates natus animi fugiat provident voluptatibus. Debitis assumenda, possimus ducimus omnis.</p>
                     <p><a href="#" class="btn btn-primary btn-outline">Contact Me</a></p>
                 </div>

             </div>
             <div class="col-md-4 text-center item-block animate-box" data-animate-effect="fadeIn">
                 <div class="fh5co-agent">
                     <figure>
                         <img src="layout/images/testimonial_person3.jpg" alt="Free Website Template by FreeHTML5.co">
                     </figure>
                     <h3>John Doe</h3>
                     <p>Veniam laudantium rem odio quod, beatae voluptates natus animi fugiat provident voluptatibus. Debitis assumenda, possimus ducimus omnis.</p>
                     <p><a href="#" class="btn btn-primary btn-outline">Contact Me</a></p>
                 </div>
             </div>
             <div class="col-md-4 text-center item-block animate-box" data-animate-effect="fadeIn">
                 <div class="fh5co-agent">
                     <figure>
                         <img src="layout/images/testimonial_person4.jpg" alt="Free Website Template by FreeHTML5.co">
                     </figure>
                     <h3>John Doe</h3>
                     <p>Veniam laudantium rem odio quod, beatae voluptates natus animi fugiat provident voluptatibus. Debitis assumenda, possimus ducimus omnis.</p>
                     <p><a href="#" class="btn btn-primary btn-outline">Contact Me</a></p>
                 </div>
             </div>
         </div>
     </div>
 </div>


 <div id="fh5co-blog">
     <div class="container">
         <div class="row">
             <div class="col-md-6 col-md-offset-3 text-center fh5co-heading animate-box" data-animate-effect="fadeIn">
                 <h2>Latest <em>from</em> Blog</h2>
                 <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
             </div>
         </div>
     </div>
     <div class="container">
         <div class="row">
             <div class="col-md-4 animate-box" data-animate-effect="fadeIn">
                 <a class="fh5co-entry" href="#">
                     <figure>
                         <img src="layout/images/slide_4.jpg" alt="Free Website Template, Free HTML5 Bootstrap Template" class="img-responsive">
                     </figure>
                     <div class="fh5co-copy">
                         <h3>We Create Awesome Free Templates</h3>
                         <span class="fh5co-date">June 8, 2016</span>
                         <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                     </div>
                 </a>
             </div>
             <div class="col-md-4 animate-box" data-animate-effect="fadeIn">
                 <a class="fh5co-entry" href="#">
                     <figure>
                         <img src="layout/images/slide_5.jpg" alt="Free Website Template, Free HTML5 Bootstrap Template" class="img-responsive">
                     </figure>
                     <div class="fh5co-copy">
                         <h3>Handcrafted Using CSS3 &amp; HTML5</h3>
                         <span class="fh5co-date">June 8, 2016</span>
                         <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                     </div>
                 </a>
             </div>
             <div class="col-md-4 animate-box" data-animate-effect="fadeIn">
                 <a class="fh5co-entry" href="#">
                     <figure>
                         <img src="layout/images/slide_6.jpg" alt="Free Website Template, Free HTML5 Bootstrap Template" class="img-responsive">
                     </figure>
                     <div class="fh5co-copy">
                         <h3>We Try To Update The Site Everyday</h3>
                         <span class="fh5co-date">June 8, 2016</span>
                         <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                     </div>
                 </a>
             </div>
             <div class="col-md-12 text-center animate-box" data-animate-effect="fadeIn">
                 <p><a href="#" class="btn btn-primary btn-outline with-arrow">View More Posts <i class="icon-arrow-right"></i></a></p>
             </div>
         </div>
     </div>
 </div>

 <div class="fh5co-cta" style="background-image: url(layout/images/slide_4.jpg);">
     <div class="overlay"></div>
     <div class="container">
         <div class="col-md-12 text-center animate-box" data-animate-effect="fadeIn">
             <h3>We Try To Update The Site Everyday</h3>
             <p><a href="#" class="btn btn-primary btn-outline with-arrow">Get started now! <i class="icon-arrow-right"></i></a></p>
         </div>
     </div>
 </div>

<?php
 }elseif ($_GET['action'] == 'sell'){ ?> <!-- Start Sell Page Condition -->

   <form class="sell-form" action="pages.php?action=sell-action" METHOD="POST" enctype="multipart/form-data">
       <input type="name" name="address" class="form-control" required placeholder="Address">
       <textarea name="description" placeholder="Flat Description" class="form-control"></textarea>
       <input type="number" name="price" required PLACEHOLDER="Enter Your Price" class="form-control">
       <input type="file" placeholder="flat-images" name="flat-image" required>
       <input class="btn btn-primary" type="submit" name="add_property" value="Add Property">
   </form>

<?php }elseif ($_GET['action'] == 'sell-action'){
     if($_SERVER['REQUEST_METHOD'] == 'POST'){
         if(isset($_POST['add_property'])){
             $address = $_POST['address'];
             $description = $_POST['description'];
             $price = $_POST['price'];
             $sellerId = $_SESSION['id'];
             $imagename = basename($_FILES['flat-image']['name']);
             $dir = 'uploads'.DIRECTORY_SEPARATOR.rand(2000 , 52558).rand(1525 , 8959).$imagename;
             $tmp_directory = $_FILES['flat-image']['tmp_name'];
             move_uploaded_file($tmp_directory , $dir );
             $property = new Property($address , $description , $sellerId , 0 , 0 , $dir , $price);
             $insert = $property->InsertProperty($property);
             if($insert === true){
                 header('Location:index.php');
             }else {
                 header('Location:pages.php?action=sell&statue=faild');
             }
         }
     }
} elseif ($_GET['action'] == 'details'){
    $property = new Database();
    $data = $property->selectProperty($_GET['propertyid']);
    if($data != false){

        foreach ($data as $value) {

            echo
            "
            <div class='container'>
                <div class='property-deatils'>
                                <div class='row'>
                                
                                    <div class='col-lg-6'>
                                        <img src = '{$value['image_path']}' alt='Property' class='img-responsive'>
                                    </div>
                                    <div class='col-lg-6 details'>
                                        <p class='lead'><strong>Address:</strong>{$value['adresses']}</p>
                                        <p class='lead'><strong>Description:</strong>{$value['describtion']}</p>
                                        <p class='lead'><strong>Price:</strong>{$value['price']}</p>
                                        <a href='?action=buyproperty&id={$value['id']}'><button class='btn btn-success'>Buy</button></a>
                                    </div>
                                </div>
                            </div>
            </div>";
        }
    } else {
        echo 'not exist';
    }

}elseif ($_GET['action']== 'buyproperty'){ ?>
    <form class="payment" action="?action=confirmpayment" method="POST">
        <h1 class="lead">Card Type</h1>
        <label for="Visa">Visa <input type="radio" name="cardtype" value="visa"></label>
       <label>MasterCard <input type="radio" name="cardtype" value="mastercard" class=""></label>
        <input name="propid" type="hidden" value="<?php echo $_GET['id']?>">
        <input type="text" name="cardnumber" required  maxlength="14" placeholder="CardNumber" class="form-control">
        <input name="cardholder" type="text" placeholder="Card Holder" class="form-control">
        <input type="number" maxlength="3" name="cvn" placeholder="cvn" required class="form-control">
        <input type="submit" name="submit" value="Confirm" class="btn btn-success btn-block btn-group-justified">
    </form>
<?php }elseif ($_GET['action'] == "generatepdf" ){
 ob_clean();
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$db = new Database();

$user = $db->selectSpecUser($_SESSION['id']);
foreach ($user as $value){
    $content = "Hello Mr {$value['firstname']} this is your Generates Report for Your Invoice";
}

$pdf->Cell(40,10,$content);
$pdf->Output();
}elseif ($_GET['action'] == 'confirmpayment'){
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $cardType = $_POST['cardtype'];
        $propId = $_POST['propid'];
        $cardNumber = $_POST['cardnumber'];
        $cardHolder = $_POST['cardholder'];
        $cvn = $_POST['cvn'];
        $ownerID = $_SESSION['id'];
        $card = new Card($cardNumber  , $cardHolder ,$cardType , $cvn , $ownerID );
        $db = new Database();
        $insert = $db->addCardInformation($card);
        $update = $db->updatePropertystate($propId , $ownerID);
        if($insert && $update){
            echo "<p>Your Payment Has been successfully Done<p>";
            echo "<a href='?action=generatepdf'><button class='btn btn-primary'>Generate Your Invoice</button></a>";
        }
        else{
            echo "<p>Your Payment Cannot Be Done</p>";
        }

    }
}elseif($_GET['action'] == ' editprofile'){
    echo "<a href='?action=deleteaccount'><button>Delete Your Account</button></a>";
}elseif ($_GET['action'] == 'deleteaccount') {
    $db = new Database();
    $delete = $db->deleteUser($_SESSION['id']);
    if($delete){
        header('Location:signout.php');
    }else{
        echo "There is An Error";
    }
} // End Sell Page Condition
 include  'includes/templates/footer.inc.php';