<?php
require "order_functions.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Baristro</title>
    <link rel="stylesheet" href="form_stylesheet.css">
</head>

<body>

<header>
    <h1 id="Welcome">Welcome to Baristro, How can We take your order!</h1>
</header>

<main class="content-grid">
    <section class="panel">
        <form action="./process_order.php" method="post">
            <div class="Inputs">

                <label for="cn">Customer Name:</label>
                <input type="text" name="name" id="cn" size="30" value="<?= nameValue()?>">

                <label for="desrt">Dessert:</label>
                <select id="desrt" name="dessert">
                    <option value="">Select One...</option>
                    <option value="Cheesecake" <?= dessertSelected("Cheesecake"); ?>>Cheesecake</option>
                    <option value="Chocolate Cake" <?= dessertSelected("Chocolate Cake"); ?>>Chocolate Cake</option>
                    <option value="Tiramisu" <?= dessertSelected("Tiramisu"); ?>>Tiramisu</option>
                    <option value="Carrot Cake" <?= dessertSelected("Carrot Cake"); ?>>Carrot Cake</option>
                    <option value="Vanilla Milkshake" <?= dessertSelected("Vanilla Milkshake"); ?>>Vanilla Milkshake</option>
                </select>

                <label for="dn">Drinks:</label>
                <select id="dn" name="drink">
                    <option value="">Select One...</option>
                    <option value="Coffee" <?= drinkSelected("Coffee"); ?>>Coffee</option>
                    <option value="Chocolate Milk" <?= drinkSelected("Chocolate Milk"); ?>>Chocolate Milk</option>
                    <option value="Boba" <?= drinkSelected("Boba"); ?>>Boba</option>
                    <option value="Tea" <?= drinkSelected("Tea"); ?>>Tea</option>
                    <option value="Milk" <?= drinkSelected("Milk"); ?>>Milk</option>
                    <option value="Juice" <?= drinkSelected("Juice"); ?>>Juice</option>
                    <option value="Root Beer" <?= drinkSelected("Root Beer"); ?>>Root Beer</option>
                </select>

                <label>Drink Size:</label>
                <div class="radio-list">
                    <label>
                        <input type="radio" name="drinkSize" value="Small" <?= drinkSizeSelected("Small"); ?>>
                        Small
                    </label>

                    <label>
                        <input type="radio" name="drinkSize" value="Medium" <?= drinkSizeSelected("Medium"); ?>>
                        Medium
                    </label>

                    <label>
                        <input type="radio" name="drinkSize" value="Large" <?= drinkSizeSelected("Large"); ?>>
                        Large
                    </label>
                </div>

                <button type="submit" class="order-buttons">Place Order!</button>
                <a href="forget_order.php" class="button-setup"> Place a new order!</a>

            </div>
        </form>
    </section>
</main>

</body>
</html>