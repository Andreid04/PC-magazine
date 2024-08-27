<?php

include 'inc/dbconnection.php';

if (isset($_POST['system']))
    $budgetPC = (int) $_POST['system'];
else
    $budgetPC = -1;

$cpupref = [];
if (isset($_POST['cpu1']))
    $cpupref[] = $_POST['cpu1'];
if (isset($_POST['cpu2']))
    $cpupref[] = $_POST['cpu2'];

$gpupref = [];
if (isset($_POST['gpu1']))
    $gpupref[] = $_POST['gpu1'];
if (isset($_POST['gpu2']))
    $gpupref[] = $_POST['gpu2'];

$mbpref = [];
if (isset($_POST['mb1']))
    $mbpref[] = $_POST['mb1'];
if (isset($_POST['mb2']))
    $mbpref[] = $_POST['mb2'];

// 50% gpu 20% cpu and 10% motherboard from our total
$gpuBudget = $budgetPC * 0.55;
$cpuBudget = $budgetPC * 0.2;
$mbBudget = $budgetPC * 0.1;

//account for non matching exact prices +-10%
$gpuMin = $gpuBudget * 0.7;
$gpuMax = $gpuBudget * 1.4;
$cpuMin = $cpuBudget * 0.7;
$cpuMax = $cpuBudget * 1.4;
$mbMin = $mbBudget * 0.7;
$mbMax = $mbBudget * 1.4;

// Initialize arrays to hold component recommendations
$recommendedCPU = [];
$recommendedGPU = [];
$recommendedMB = [];

function getBestCPU($connect, $cpupref, $cpuMin, $cpuMax)
{
    $query = "SELECT * FROM cpus WHERE price BETWEEN $cpuMin AND $cpuMax ";//we always choose the smallest price
    if (!empty($cpupref)) {
        $cpupref = implode("','", $cpupref);//creates an array separated by "," that can later be used in table search
        //echo "{$cpupref}";
        $query .= "AND brand IN ('$cpupref') ";//brand from which we choose
    }
    //ordering stuff
    $query .= "ORDER BY generation DESC, cores DESC, turbo DESC, price ASC LIMIT 1";
    $result = mysqli_query($connect, $query);
    return mysqli_fetch_assoc($result);
}

function getBestGPU($connect, $gpupref, $gpuMin, $gpuMax)
{
    $query = "SELECT * FROM gpus WHERE price BETWEEN $gpuMin AND $gpuMax ";
    if (!empty($gpupref)) {
        $gpupref = implode("','", $gpupref);
        $query .= "AND brand IN ('$gpupref') ";
    }
    $query .= "ORDER BY score DESC, price ASC LIMIT 1";
    $result = mysqli_query($connect, $query);
    return mysqli_fetch_assoc($result);
}

function getBestMB($connect, $cpu, $mbpref, $mbMin, $mbMax)
{
    if ($compatibility = $cpu['brand'] === 'Intel')//check the cpu socket for motherboard
        $compatibility = 'Intel';//applies filter for the already selected cpu in the database
    else
        $compatibility = 'AMD';
    $query = "SELECT * FROM motherboards WHERE compatibility = '$compatibility' ";
    if (!empty($mbpref)) {
        $mbpref = implode("','", $mbpref);
        $query .= "AND chipset IN ('$mbpref') ";
    }
    $query .= "AND price BETWEEN $mbMin AND $mbMax ORDER BY price ASC LIMIT 1";
    $result = mysqli_query($connect, $query);//the result is always of type row in the table
    return mysqli_fetch_assoc($result);
}

$totalPrice=0;


/*if ($budgetPC > 0) {
    //echo"{$budgetPC}";
    $recommendedCPU = getBestCPU($connect, $cpupref, $cpuMin, $cpuMax);
    $recommendedGPU = getBestGPU($connect, $gpupref, $gpuMin, $gpuMax);
    if ($recommendedCPU) {
        $recommendedMB = getBestMB($connect, $recommendedCPU, $mbpref, $mbMin, $mbMax);
    }
    //all components are within the budget
    if (!$recommendedCPU && !$recommendedGPU && !$recommendedMB) {
        echo '<p class="invalid" >Error: No suitable components found within the budget.</p>';
    } else {
        echo "<div class='card'>";
        if ($recommendedCPU) {
            echo "<h1>The following components are suitable for you with the total budget of {$budgetPC}$</h1>";
            echo "<h2>Recommended CPU</h2>";
            echo "<p>Name: {$recommendedCPU['brand']} {$recommendedCPU['name']}</p>";
            echo "<p>Price: {$recommendedCPU['price']}$</p>";
            echo "</div>";
            $totalPrice += $recommendedCPU['price'];
        } else
            echo '<p class="invalid" >Error: No suitable components found within the budget.</p>';
        if ($recommendedGPU) {
            echo "<div class='card'>";
            echo "<h2>Recommended GPU</h2>";
            echo "<p>Name: {$recommendedGPU['brand']} {$recommendedGPU['name']}</p>";
            echo "<p>Price: {$recommendedGPU['price']}$</p>";
            echo "</div>";
            $totalPrice += $recommendedGPU['price'];

        } else
            echo '<p class="invalid" >Error: No suitable components found within the budget.</p>';
        if ($recommendedMB) {
            echo "<div class='card'>";
            echo "<h2>Recommended Motherboard</h2>";
            echo "<p>Name: {$recommendedMB['name']}</p>";
            echo "<p>Price: {$recommendedMB['price']}$</p>";
            echo "</div>";
            $totalPrice += $recommendedMB['price'];

        } else
            echo '<p class="invalid" >Error: No suitable components found within the budget.</p>';

        //$totalPrice = $recommendedCPU['price'] + $recommendedGPU['price'] + $recommendedMB['price'];
        echo "<h2>Total Price: {$totalPrice}$</h2>";
    }
}*/

?>