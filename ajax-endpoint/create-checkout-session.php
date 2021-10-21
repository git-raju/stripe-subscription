<?php
namespace Phppot;

use Phppot\StripeService;

require_once __DIR__ . '/../Service/StripeService.php';
$stripeService = new StripeService();

$plan = json_decode($_POST["plan"]);
$planId = $plan->plan_id;

$session  = $stripeService->createCheckoutSession($planId);

echo json_encode($session);
?>