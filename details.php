<?php
include 'inc/header.php';
?>

<div class="content">

    <div class="card display-2">

        <?php

        include 'inc/dbconnection.php';

        if (isset($_GET['cpu'])) {
            $cpu_name = $_GET['cpu'];

            // Retrieve CPU details from the database
            $sql = "SELECT * FROM cpus WHERE name = '$cpu_name'";
            $result = mysqli_query($connect, $sql);

            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                $name = $row['name'];
                $brand = $row['brand'];
                $description = $row['details'];
                $price = $row['price'];
                $generation = $row['generation'];

                // Display CPU details
                echo '<h1>' . $brand . '  ' . $name . '</h1>';
                echo '<h2>Description: </h2> <p>' . $description . '</p>';
                echo '<h2>Price: </h2> <p>$' . $price . '</p>';
                echo '<h2>Generation: </h2> <p>' . $generation . '</p>';

                // Determine compatible motherboards based on criteria
                $compmb = "";
                if ($brand == 'Intel') {
                    if ((substr($name, -1) == 'K' || substr($name, -2) == 'KF') && $generation == 14) {
                        //only Z series chisets work for K and KF cpus and for simplicity 660=13 gen and 670=14 gen
                        $compmb = "SELECT * FROM motherboards WHERE compatibility LIKE '%Intel%' AND chipset IN ('Z790')";
                    } else if ((substr($name, -1) == 'K' || substr($name, -2) == 'KF') && $generation == 13)
                        $compmb = "SELECT * FROM motherboards WHERE compatibility LIKE '%Intel%' AND chipset IN ('Z690')";
                    else if ($generation == 14)
                        $compmb = "SELECT * FROM motherboards WHERE compatibility LIKE '%Intel%' AND chipset IN ('H670')";
                    else if ($generation == 13)
                        $compmb = "SELECT * FROM motherboards WHERE compatibility LIKE '%Intel%' AND chipset IN ('B660')";
                } elseif ($brand == 'AMD') {
                    if ($generation == 7) {
                        $compmb = "SELECT * FROM motherboards WHERE compatibility LIKE '%AMD%' AND chipset IN ('X670', 'B650')";
                    } else {
                        $compmb = "SELECT * FROM motherboards WHERE compatibility LIKE '%AMD%' AND chipset NOT IN ('X670', 'B650')";
                    }
                }

                // Retrieve and display compatible motherboards
                if (!empty($compmb)) {
                    $resultmb = mysqli_query($connect, $compmb);
                    if (mysqli_num_rows($resultmb) > 0) {
                        echo '<h2>Compatible Motherboards:</h2>';
                        echo '<ul>';
                        foreach ($resultmb as $mb_row) {
                            echo '<li>' . $mb_row['name'] . ' - $' . $mb_row['price'] . '</li>';
                        }
                        echo '</ul>';
                    } else {
                        echo '<p>No compatible motherboards found.</p>';
                    }
                } else {
                    echo '<p>No compatible motherboards found.</p>';
                }

            } else {
                echo '<p>CPU not found.</p>';
            }
        } else {
            echo '<p>No CPU selected.</p>';
        }


        ?>

    </div>
    <div class="btn back1">
        <a href="compatibility.php">Back to last page</a>
    </div>

</div>
<?php
include 'inc/footer.php';
?>