<?php
require "./order_functions.php";
$orderSummary = order();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Baristro Order</title>
    <link rel="stylesheet" href="form_stylesheet.css">
</head>

<body>

<main class="content-grid">

<section class="panel-output">
   <div class="receipt-card"><?= $orderSummary; ?></div>

   <div class="insight-card">
      <h3>Order feedback</h3>
      <p><?= htmlspecialchars(completionMessage()); ?></p>
      <p class="insight-note"><?= htmlspecialchars(pairingSuggestion()); ?></p>
   </div>

   <div class="insight-card pricing-grid ">
      <div class="estimated-total">
         <h3>Estimated total</h3>
         <p class="price-figure"><?= htmlspecialchars(formattedTotal()); ?></p>
      </div>
      <div>
         <h3>Order profile</h3>
         <p><?= htmlspecialchars(orderProfile()); ?></p>
      </div>
      <p class="insight-note full-width-note"><?= htmlspecialchars(pricingNote()); ?></p>

      <a href="index.php"><button class="order-buttons">Make a new order!</button></a>
   </div>
</section>
   
</main>
</body>
</html>
