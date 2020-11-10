<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Carrito | Edmundo Cel-Express</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://checkout.culqi.com/js/v3"></script>
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href=""><i class="fa fa-phone"></i></a></li>
								<li><a href=""><i class="fa fa-envelope"></i> info@domain.com</a></li>
							</ul>
						</div>
					</div>
					<!-- 
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href=""><i class="fa fa-facebook"></i></a></li>
								<li><a href=""><i class="fa fa-twitter"></i></a></li>
								<li><a href=""><i class="fa fa-linkedin"></i></a></li>
								<li><a href=""><i class="fa fa-dribbble"></i></a></li>
								<li><a href=""><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
					-->
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-md-4 clearfix">
						<div class="logo pull-left">
							<a href="index.php"><img src="images/home/logo_size.jpg" alt="" /></a>
						</div>
						<div class="btn-group pull-right clearfix">
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									USA
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="">Canada</a></li>
									<li><a href="">UK</a></li>
								</ul>
							</div>
							
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									DOLLAR
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="">Canadian Dollar</a></li>
									<li><a href="">Pound</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-8 clearfix">
						<div class="shop-menu clearfix pull-right">
							<ul class="nav navbar-nav">
								<li><a href=""><i class="fa fa-user"></i> Account</a></li>
								<li><a href="cart.php"><i class="fa fa-shopping-cart"></i> Cart (<?php echo (empty($_SESSION['carrito'])) ? 0 : count($_SESSION['carrito']); ?>) </a></li>
								<li><a href="login.php"><i class="fa fa-lock"></i> Login</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.php" class="active">Home</a></li>
								<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.php">Products</a></li>
										<li><a href="cart.php">Cart (<?php echo (empty($_SESSION['carrito'])) ? 0 : count($_SESSION['carrito']); ?>) </a></li> 
										<li><a href="login.php">Login</a></li> 
                                    </ul>
                                </li> 
 
								<li><a href="404.php">404</a></li>
								<li><a href="contact.php">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->

	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="index.php">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
            </div>
            
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
					</thead>
					<tbody>

						<tr>
							<td colspan="12">
							<form action="pay.php" method="POST">
								<div class="jumbotron text-center">
									<h1 class="display-4">¡Paso Final!</h1>
									<hr class="my-4">
									<h3 class="lead">Estas a punto de pagar una cantidad de:
										<h2>$<?php echo number_format($total,2);?></h2>
										<div id="paypal-button-container"></div>
									</h3>
									<h4>Nos pondremos en contacto contigo una vez realizado el pago</h4>
									<b>(Para aclaraciones enviar mensaje a: nacho_2009_xp@hotmail.com)</b>
								</div>

								<script src="https://www.paypalobjects.com/api/checkout.js"></script>

									<style>
									
										/* Media query for mobile viewport */
										@media screen and (max-width: 400px) {
											#paypal-button-container {
											width: 100%;
											}
										}
									
										/* Media query for desktop viewport */
										@media screen and (min-width: 400px) {
											#paypal-button-container {
											width: 250px;
												display: inline-block;
											}
										}
									
									</style>
									
									
									<script>
										paypal.Button.render({
											env: 'sandbox', // sandbox | production
											style: {
												label: 'checkout',  // checkout | credit | pay | buynow | generic
												size:  'responsive', // small | medium | large | responsive
												shape: 'pill',   // pill | rect
												color: 'black'   // gold | blue | silver | black
											},
									
											// PayPal Client IDs - replace with your own
											// Create a PayPal app: https://developer.paypal.com/developer/applications/create
									
											client: {
												sandbox:    'AYfoprjnQLXvTQ28fVk9_WnmAfo4pjVbDI25zhf_MWwxZq5AczZ4wYAI6T-rYPLq_LVtbouWWu8mdghm',
												production: 'Ac-yWup720dHuKEUgS9xjUHQtyao0CZNezrj_rv3cP_VYHiJ6ARFRa0MHZZ_HFx2KHPvtKx92Zs9TY13'
											},
									
											// Wait for the PayPal button to be clicked
									
											payment: function(data, actions) {
												return actions.payment.create({
													payment: {
														transactions: [
															{
																amount: { total: '<?php echo $total; ?>', currency: 'USD' },
																description:"Compra de productos a Mi tienda:$ <?php echo number_format($total, 2);	?>",
																custom:"<?php echo $sid; ?>#<?php echo openssl_encrypt($idventa, COD, KEY);	?>"
															}
														]
													}
												});
											},
									
											// Wait for the payment to be authorized by the customer
									
											onAuthorize: function(data, actions) {
												return actions.payment.execute().then(function() {
													console.log(data);
													window.location="verificador.php?paymentToken="+data.paymentToken+"&paymentID="+data.paymentID;  
												});
											}
									
										}, '#paypal-button-container');
									
									</script>
			
							<!-- <button name="btnAccion" id="buyButton" value="pagar" type="submit" class="btn btn-default add-to-cart btn-lg btn-block">Pagar!</button> -->
							</form>
							</td>
						</tr>

					</tbody>
				</table>
			</div>
	</section> <!--/#cart_items-->


	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>Edmundo</span>Cel-Express</h2>
							<p>Bienvenidos a nuestra tienda online!</p>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="images/home/map.png" alt="" />
							<p></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Service</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Online Help</a></li>
								<li><a href="">Contact Us</a></li>
								<li><a href="">Order Status</a></li>
								<li><a href="">Change Location</a></li>
								<li><a href="">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Quock Shop</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">T-Shirt</a></li>
								<li><a href="">Mens</a></li>
								<li><a href="">Womens</a></li>
								<li><a href="">Gift Cards</a></li>
								<li><a href="">Shoes</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Terms of Use</a></li>
								<li><a href="">Privecy Policy</a></li>
								<li><a href="">Refund Policy</a></li>
								<li><a href="">Billing System</a></li>
								<li><a href="">Ticket System</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Company Information</a></li>
								<li><a href="">Careers</a></li>
								<li><a href="">Store Location</a></li>
								<li><a href="">Affillate Program</a></li>
								<li><a href="">Copyright</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2020 Gen-Software Inc. All rights reserved.</p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	


    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
	<script src="js/main.js"></script>
	
<!-- Incluyendo Culqi Checkout -->

<script>
/*
  Culqi.publicKey = 'pk_test_f92104fc15d34d6a';

  var data_precio = "";
  var data_descripcion = "";

  $('#buyButton').on('click', function(e) {
    // Abre el formulario con la configuración en Culqi.settings

	data_precio = $(this).attr('data-precio');
	data_descripcion = $(this).attr('data-producto');

	Culqi.settings({
    title: 'Edmundo Store',
    currency: 'PEN',
    description: data_descripcion,
    amount: data_precio
  });	

    Culqi.open();
    e.preventDefault();
	
});

function culqi() {
  if (Culqi.token) { // ¡Objeto Token creado exitosamente!
      var token = Culqi.token.id;
      // alert('Se ha creado un token:' + token);

	  var data = {producto:data_descripcion, precio:data_precio,token:token}
	  var url = "./procesopago.php";

	  $.post(url, data, function(res){
		alert(res);
	  });

  } else { 
	  // ¡Hubo algún problema!
	  // Mostramos JSON de objeto error en consola
	  
      console.log(Culqi.error);
      alert(Culqi.error.user_message);
  }
};
*/
</script>

</body>
</html>

<?php include './pay.php';	?>