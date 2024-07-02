<?php
	require_once "stripe-php-master/init.php";
	require_once "products.php";

$stripeDetails = array(
		"secretKey" => "sk_test_51NkUPkSEvWjWtvRvcgRk4q8idvLl0o4lK5kUNjt89rLZBzD95ODYp4TaJt1zuB6gkGvWsDIqfdnIZKMWVXEmhyKf00zqNFZg8M",  //Your Stripe Secret key
		"publishableKey" => "pk_test_51NkUPkSEvWjWtvRvpHhiXk0IPKBPihdQ5hXDrU91ITz6J9KQb83bEMHqFw4Tr1fHcQrqb0avnmxFqHgFybqmkleP00Zzs8DAlf"  //Your Stripe Publishable key
	);

	// Set your secret key: remember to change this to your live secret key in production
	// See your keys here: https://dashboard.stripe.com/account/apikeys
	\Stripe\Stripe::setApiKey($stripeDetails['secretKey']);

	
?>
