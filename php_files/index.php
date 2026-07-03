<!DOCTYPE html>
<html>
<head>
    <title>Baristro</title>
</head>

<header>
    <h1 id="Welcome">Welcome to Baristro, How can We take your order!</h1>

    <link rel="stylesheet" href="form_stylesheet.css">

</header>

<body>
    <main class="content-grid">

    <section class="panel">

   
        <form action="./process_order.php" method="post">

            <div class="Inputs">

                <label for="cn">Customer Name: </label>
                <input type="text" name="Customer Name" id="cn"  size="30"/>

                <label for="dn">Drinks</label>
                <select id="dn" name="drinks">
                    <option>Select One...</option>
                    <option>Coffee</option>
                    <option>Chocolate Milk</option>
                    <option>Boba</option>
                    <option>Tea</option>
                    <option>Milk</option>
                    <option>Juice</option>
                    <option>Root Beer</option>
                </select>

            </div>
    


        </form>
    </section>
    
    </main>
</body>
</html>