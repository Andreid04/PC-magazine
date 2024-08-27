<?php
include 'inc/header.php';
?>

<div class="content">

    <div class="card form2">
        <h1>Recommendations based on your entire budget!</h1>

        <form action="configurator.php" method="post">

            <p>Set the budget for your system and we will tell you what cpu, motherboard and gpu are the best canditates
                from our database!</p>

            <label for="system">Price in $:</label><br>
            <input type="text" id="system" name="system" placeholder="example: 1000 (dollars)">

            <p>Select preferences for CPU:</p>

            <input type="checkbox" id="intel" name="cpu1" value="Intel">
            <label for="intel">Intel</label><br>

            <input type="checkbox" id="amd" name="cpu2" value="Amd">
            <label for="amd">Amd</label><br>

            <p>Select preferences for GPU (if any):</p>

            <input type="checkbox" id="nvidia" name="gpu1" value="NVIDIA">
            <label for="nvidia">Nvidia</label><br>

            <input type="checkbox" id="radeon" name="gpu2" value="AMD">
            <label for="radeon">Amd Radeon</label><br>

            <p>Select preferences for motherboard (the chipset) (0 or more):</p>

            <input type="checkbox" id="chipset" name="mb1" value="Z790">
            <label for="chipset">Z790</label><br>

            <input type="checkbox" id="chipsetamd" name="mb2" value="X670">
            <label for="chipset">X670</label><br>

            <input type="submit" value="See results">
        </form>

    </div>


    <?php
    include 'build.php';

    if ($budgetPC > 0) {
        //echo"{$budgetPC}";
        $recommendedCPU = getBestCPU($connect, $cpupref, $cpuMin, $cpuMax);
        $recommendedGPU = getBestGPU($connect, $gpupref, $gpuMin, $gpuMax);
        if ($recommendedCPU) {
            $recommendedMB = getBestMB($connect, $recommendedCPU, $mbpref, $mbMin, $mbMax);
        }
        //all components are within the budget
        if (!$recommendedCPU && !$recommendedGPU && !$recommendedMB) {
            echo "<div class='card form4'>";
            echo '<p class="invalid" >Error: No suitable components found within the budget.</p>';
            echo "</div>";
        } else {
            echo "<div class='card form4'>";
            echo "<h1>The following components are suitable for you with the total budget of {$budgetPC}$:</h1>";
            echo "</div>";

            if ($recommendedCPU>0) {
                //echo "<h1>The following components are suitable for you with the total budget of {$budgetPC}$</h1>";
                echo "<div class='card form4'>";
                echo "<h2>Recommended CPU</h2>";
                echo "<p>Name: {$recommendedCPU['brand']} {$recommendedCPU['name']}</p>";
                echo "<p>Price: {$recommendedCPU['price']}$</p>";
                echo "</div>";
                $totalPrice += $recommendedCPU['price'];
            } else
                echo '<div class="card form4"><p class="invalid" >Error: No suitable CPU found within the budget.</p></div>';
            if ($recommendedGPU>0) {
                echo "<div class='card form4'>";
                echo "<h2>Recommended GPU</h2>";
                echo "<p>Name: {$recommendedGPU['brand']} {$recommendedGPU['name']}</p>";
                echo "<p>Price: {$recommendedGPU['price']}$</p>";
                echo "</div>";
                $totalPrice += $recommendedGPU['price'];

            } else
                echo '<div class="card form4"><p class="invalid" >Error: No suitable GPU found within the budget.</p></div>';
            if ($recommendedMB>0) {
                echo "<div class='card form4'>";
                echo "<h2>Recommended Motherboard</h2>";
                echo "<p>Name: {$recommendedMB['name']}</p>";
                echo "<p>Price: {$recommendedMB['price']}$</p>";
                echo "</div>";
                $totalPrice += $recommendedMB['price'];

            } else
                echo '<div class="card form4"><p class="invalid" >Error: No suitable motherboard found within the budget.</p></div>';

            //$totalPrice = $recommendedCPU['price'] + $recommendedGPU['price'] + $recommendedMB['price'];
            echo '<div class="card form4"><h2>Total Price: ' .$totalPrice .'$</h2></div>';
        }
    }
    else {
        //echo '<p class="invalid">Set an integer number for the budget >0!</p>';
    }

    ?>


</div>

<?php
include 'inc/footer.php';
?>