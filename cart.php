<?php
include 'inc/header.php';
include 'inc/dbconnection.php';

if (!isset($_SESSION['account'])) {
    header('Location: login.php'); //redirect to login page if not logged in
    exit();
}

?>

<?php
$account = $_SESSION['account'];

//cart items for the logged-in user
$sql = "SELECT id, product FROM cart WHERE name = '$account'";
$result = mysqli_query($connect, $sql);
//initialize info for each pc as well as the total price of the cart!!!!
$pcs = [
    1 => [
        'description' => 'Entry level gaming PC intel + amd:<br>
        Specs: CPU: Intel i3 13100f; GPU: Radeon rx5500x; MB: Asrock B450M',
        'price' => 500
    ],
    2 => [
        'description' => 'Mid range gaming PC intel/nvidia:<br>
        Specs: CPU: Intel i5 14600k; GPU: Nvidia rtx 4070ti; MB: Asus ROG Strix z790A',
        'price' => 1500
    ],
    3 => [
        'description' => 'High end gaming PC intel/nvidia:<br>
        Specs: CPU: Intel i7 14700k; GPU: Nvidia rtx 4080; MB: MSI z790 ACE',
        'price' => 2800
    ],
    4 => [
        'description' => 'Entry level gaming PC AMD:<br>
        Specs: CPU: Ryzen 5 5600; GPU: Radeon rx6600x; MB:  MSI X470 Legend',
        'price' => 520
    ],
    5 => [
        'description' => 'Mid range gaming PC AMD:<br>
        Specs: CPU: AMD Ryzen 7 7700x; GPU: Radeon 7800x; MB: Asus prime x670 DDR5',
        'price' => 1390
    ],
    6 => [
        'description' => 'High end gaming PC amd/nvidia:<br>
        Specs: CPU: AMD Ryzen 9 7900x; GPU: Nvidia rtx 4090; MB: Asus ROG x670 Maximus',
        'price' => 3000
    ],
    7 => [
        'description' => 'Entry level creative PC intel:<br>
        Specs: CPU: Intel i5 13600k; MB: Gygabyte z670 UD series',
        'price' => 510
    ],
    8 => [
        'description' => 'Mid range productivity system (AMD):<br>
        Specs: CPU: AMD Ryzen 9 5900x; MB: Asus prime x670 10G',
        'price' => 1499
    ],
    9 => [
        'description' => 'High end productivity system/server (intel based):<br>
        Specs: CPU: Intel Xeon w5120 (48 cores); MB: Asrock workstation W5000 series',
        'price' => 2899
    ],
];

$totalPrice = 0;

?>

<div class="content">
    <div class="row">
        <div class="card base">
            <div class="row">
                <div class="col-md-10">
                    <h1>See details about your current cart</h1>
                    <p>When you are done shopping you can head over to the buy option!</p>


                    <?php if (isset($_SESSION['message'])): ?>
                        <div class="">
                            <?php
                            echo '<p' . $_SESSION['message'] . '<p>';
                            unset($_SESSION['message']);
                            ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="col-md-2">
                    <img class="img img-fluid imgcart" src="images/cart.jpg" alt="">
                </div>
            </div>
        </div>
    </div>

    <?php if (mysqli_num_rows($result) > 0): ?>
        <?php while ($row = mysqli_fetch_assoc($result)): //each product on a new card ?>

            <?php
            $productId = $row['product'];
            $description = $pcs[$productId]['description'];
            $price = $pcs[$productId]['price'];
            $totalPrice += $price;//prepare data for display
            ?>

            <div class="card first abc">

                <p><?php echo $description; ?></p>
                <p>Price: $<?php echo $price; ?></p>

                <form action="login/deletecart.php" method="post" style="width: 30%; margin: auto; ">
                    <input type="hidden" name="id" value="<?= $row['id']; //we only delete drom the uniquely defined id!!!! ?>">
                    <input type="submit" value="Delete" class="btn btns2 btn-danger">
                </form>

            </div>

        <?php endwhile; ?>

        <div class="card base">
            <h2>Total Price: $<span id="totalPrice"><?= $totalPrice; ?></span></h2>
            <p>(Still working on sending the order as a future feature.)</p>
        </div>
    <?php else: ?>
        <h2 class="invalid">Your cart is empty.</h2>
    <?php endif; ?>

</div>

<?php
include 'inc/footer.php';
?>