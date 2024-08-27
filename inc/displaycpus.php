<?php
include 'inc/dbconnection.php';

// Check if the form is submitted
if (isset($_GET['cpuname'])) {
    $pname = trim($_GET['cpuname']);//no white spaces

    if (!empty($pname)) {
        // Query the database for CPUs with names
        $sql = "SELECT name, brand FROM cpus WHERE name LIKE '%$pname%'";

        //echo "SQL Query: " . $sql . "<br>"; // debugging

        $result = mysqli_query($connect, $sql);

        if (mysqli_num_rows($result) > 0) {

            echo '<div class="card display-2">';
            // Output each matching CPU name
            foreach ($result as $row) {
                $name = $row['name'];
                $brand = $row['brand'];
                echo '<div class="row">';
                echo '<div class="col-md-6">';

                echo '<p>'.$brand.'  '.$name.'</p>';

                echo '</div>';
                echo '<div class="col-md-6">';

                // Add a button for more details, linking to another PHP file
                echo '<a href="details.php?cpu=' . $row['name'] . '">More Details</a><br><br>';

                echo '</div>';
                echo '</div>';
            }
            echo '</div>';
        } else
            echo '<div class="card display-2">
            <p> No CPUs found. </p>
            </div>';

        // Free the result set
        mysqli_free_result($result);
    } else {
        echo '<div class="card display-2">
        <p> No input detected. Please enter a CPU name to search. </p>
        </div>';
    }
}



?>