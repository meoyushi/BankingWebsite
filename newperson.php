<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account First</title>
    <link rel="stylesheet" href="personalcss.css">
</head>

<body id="bodyhome" bgcolor="rgb(51, 94, 160)">
<header>
        <div id="topbar1">
            <div class="panel">
                <div class="panel-ops">
                    <i class="fa-solid fa-bars"></i>
                    <div class="logo"></div>
                    <p class="panel-button">
                        <a href=personal.html>
                            Personal</a></p>
                    <p class="panel-button">Business</p>
                    <p class="panel-button">Priority</p>
                    <p class="panel-button">Burgundy</p>
                    <p class="panel-button">NRI</p>
                    <p class="panel-button">About Us</p>
                    <p class="panel-button">Support</p>
                    <p class="panel-button">Dil se open</p>
                    <p class="panel-button">Apply Credit Card</p>
                </div>
            </div>
        </div>
        <div id="topbar2">
            <div class="panel2">
                <div class="panel2-ops">
                    <i class="fa-solid fa-bars"></i>
                    <b style="font-weight: 700;"></b>
                    <p class="panel2-button">Explore Products</p>
                    <p class="panel2-button">Grab Deals</p>
                    <p class="panel2-button">Make Payments</p>
                    <p class="panel2-button">Bank Smart</p>
                    <p class="panel2-button">Apply Now</p>
                </div>
            </div>
        </div>
        <div id="nav">
            <div class="nav-logo border">

            </div>

            <div class="nav-search">
                <select class="search-select">
                    <option>Select Service</option>
                    <option>Digital Savings Account</option>
                    <option>Digital Salary Account</option>
                    <option>Digital Current Account</option>
                    <option>Open FD</option>
                    <option>Credit Card</option>
                    <option>24x7 Personal Loans</option>
                    <option>Business Loans</option>
                    <option>Car Loans</option>
                    <option>Home Loans</option>
                    <option>Demat & Trading Account</option>
                </select>
                <input type="text" class="search-input" placeholder="Search for Products, Services...">
                <div class="search-icon">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
            </div>

        </div>
    </header>

    <form action="newperson.php" method="post">
        </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $customerName = $_POST["firstname"];
        $address = $_POST["address"]; // Ensure the name matches the input field name
        $city = $_POST["city"];
        echo "<div style='text-align: center; color: white;'>";
        echo "<h2>PERSONAL DETAILS</h2>";
        echo "<P>Customer Name: $customerName</P>";
        echo "<P>Address: $address</P>";
        echo "<P>City: $city</P>";
        echo "</div>";
    }
    ?>
</body>

</html>