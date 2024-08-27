<?php
include 'inc/header.php';
?>


<div class="content">

    <div class="card form1">

    <?php if (isset($_SESSION['message'])): ?>
        <div class="invalid">
            <?php
            echo '<p' .$_SESSION['message'] .'<p>';//sends out the errors from addtocart.php
            unset($_SESSION['message']);
            ?>
        </div>
    <?php endif; ?>

        <h1>Recommendations tab!</h1>

        <form id="pcform">

            <p>Select your prefered brand of CPU:</p>

            <input type="radio" id="intel" name="cpu" value="Intel">
            <label for="intel">Intel</label><br>

            <input type="radio" id="amd" name="cpu" value="Amd">
            <label for="amd">Amd</label><br>

            <p>What will you use your PC for most of the time:</p>

            <input type="radio" id="gamer" name="use" value="Gaming">
            <label for="gamer">Gaming</label><br>

            <input type="radio" id="creator" name="use" value="Creativity/Rendering">
            <label for="creator">Creativity/Rendering</label><br>

            <div id="gpuOptions">
                <p>Select your prefered brand of GPU:</p>

                <input type="radio" id="nvidia" name="gpu" value="Nvidia">
                <label for="nvidia">Nvidia</label><br>

                <input type="radio" id="radeon" name="gpu" value="Amd Radeon">
                <label for="radeon">Amd Radeon</label><br>
            </div>

            <p>Select your budget from the dropdown!</p>

            <label for="budget">Choose a range of price:</label><br>
            <select id="budget" name="money">
                <option value="500">around 500$ PC</option>
                <option value="1500">up to a 1500$ PC</option>
                <option value="3000">up to the 3000$ PC</option>
            </select><br>

            <input type="button" id="button" value="Find computer">
        </form>

        <script src="scripts/displayoptions.js"></script>

    </div>


    <div class="card display-1 show0" id="show0">
        <!-- if no pc was found -->
        <h2>There is no prebuilt available with the selected settings at the moment. Please verify later!</h2>

    </div>

    <div class="card display-1 show1" id="show1">
        <!-- 1-3 intel 4-6 amd 7-9 no gpu -->
        <div class="row">
            <div class="col-md-4">
                <img class="img-fluid" src="images/500$ pc.jpg" alt="">
            </div>

            <div class="col-md-8">

                <h2>Price: 500$ Specs:</h2>
                <p>CPU: Intel i3 13100f</p>
                <p id="isgpu">Graphics card: Radeon rx5500x</p>
                <p>Motherboard: Asrock B450M</p>

                <form action="login/addtocart.php" method="post">
                    <input type="hidden" name="product" value="1">
                    <input type="submit" class="btn btn-success cart0" value="Add to cart">
                </form>

            </div>
        </div>

    </div>

    <div class="card display-1 show2" id="show2">

        <div class="row">
            <div class="col-md-4">
                <img class="img-fluid" src="images/1500$ pc.jpg" alt="">
            </div>

            <div class="col-md-8">

                <h2>Price: 1500$ Specs</h2>
                <p>CPU: Intel i5 14600k</p>
                <p id="isgpu">Graphics card: Nvidia rtx 4070ti</p>
                <p>Motherboard: Asus ROG Strix z790A</p>

                <form action="login/addtocart.php" method="post">
                    <input type="hidden" name="product" value="2">
                    <input type="submit" class="btn btn-success cart0" value="Add to cart">
                </form>

            </div>
        </div>

    </div>

    <div class="card display-1 show3" id="show3">

        <div class="row">
            <div class="col-md-4">
                <img class="img-fluid" src="images/3000$ pc.jpg" alt="">
            </div>

            <div class="col-md-8">

                <h2>Price: 2800$ Specs</h2>
                <p>CPU: Intel i7 14700k</p>
                <p id="isgpu">Graphics card: Nvidia rtx 4080</p>
                <p>Motherboard: MSI z790 ACE</p>

                <form action="login/addtocart.php" method="post">
                    <input type="hidden" name="product" value="3">
                    <input type="submit" class="btn btn-success cart0" value="Add to cart">
                </form>

            </div>
        </div>

    </div>

    <div class="card display-1 show4" id="show4">

        <div class="row">
            <div class="col-md-4">
                <img class="img-fluid" src="images/500$ pc.jpg" alt="">
            </div>

            <div class="col-md-8">

                <h2>Price: 520$ Specs</h2>
                <p>CPU: Ryzen 5 5600</p>
                <p id="isgpu">Graphics card: Radeon rx6600</p>
                <p>Motherboard: MSI X470 Legend</p>

                <form action="login/addtocart.php" method="post">
                    <input type="hidden" name="product" value="4">
                    <input type="submit" class="btn btn-success cart0" value="Add to cart">
                </form>

            </div>
        </div>

    </div>

    <div class="card display-1 show5" id="show5">

        <div class="row">
            <div class="col-md-4">
                <img class="img-fluid" src="images/1500$ pc.jpg" alt="">
            </div>

            <div class="col-md-8">

                <h2>Price: 1390$ Specs</h2>
                <p>CPU: AMD Ryzen 7 7700x</p>
                <p id="isgpu">Graphics card: Radeon 7800x</p>
                <p>Motherboard: Asus prime x670 DDR5</p>

                <form action="login/addtocart.php" method="post">
                    <input type="hidden" name="product" value="5">
                    <input type="submit" class="btn btn-success cart0" value="Add to cart">
                </form>

            </div>
        </div>

    </div>

    <div class="card display-1 show6" id="show6">

        <div class="row">
            <div class="col-md-4">
                <img class="img-fluid" src="images/3000$ pc.jpg" alt="">
            </div>

            <div class="col-md-8">

                <h2>Price: 3000$ Specs</h2>
                <p>CPU: AMD Ryzen 9 7900x</p>
                <p id="isgpu">Graphics card: Nvidia rtx 4090</p>
                <p>Motherboard: Asus ROG x670 Maximus</p>

                <form action="login/addtocart.php" method="post">
                    <input type="hidden" name="product" value="6">
                    <input type="submit" class="btn btn-success cart0" value="Add to cart">
                </form>

            </div>
        </div>

    </div>

    <!--non gpu builds!!!!-->

    <div class="card display-1 show7" id="show7">

        <div class="row">
            <div class="col-md-4">
                <img class="img-fluid" src="images/creatorpc.jpg" alt="">
            </div>

            <div class="col-md-8">

                <h2>Price: 510$ Specs</h2>
                <p>CPU: Intel i5 13600k</p>
                <p id="isgpu2">Graphics card: </p>
                <p>Motherboard: Gygabyte z670 UD series</p>

                <form action="login/addtocart.php" method="post">
                    <input type="hidden" name="product" value="7">
                    <input type="submit" class="btn btn-success cart0" value="Add to cart">
                </form>

            </div>
        </div>

    </div>

    <div class="card display-1 show8" id="show8">

        <div class="row">
            <div class="col-md-4">
                <img class="img-fluid" src="images/creatorpc.jpg" alt="">
            </div>

            <div class="col-md-8">

                <h2>Price: 1499$ Specs</h2>
                <p>CPU: AMD Ryzen 9 5900x</p>
                <p id="isgpu2">Graphics card: </p>
                <p>Motherboard: Asus prime x670 10G</p>

                <form action="login/addtocart.php" method="post">
                    <input type="hidden" name="product" value="8">
                    <input type="submit" class="btn btn-success cart0" value="Add to cart">
                </form>

            </div>
        </div>

    </div>

    <div class="card display-1 show9" id="show9">

        <div class="row">
            <div class="col-md-4">
                <img class="img-fluid" src="images/creatorpc.jpg" alt="">
            </div>

            <div class="col-md-8">

                <h2>Price: 2899$ Specs</h2>
                <p>CPU: Intel Xeon w5120 (48 cores)</p>
                <p id="isgpu2">Graphics card: </p>
                <p>Motherboard: Asrock workstation W5000 series, Quad channel DDR5 memory</p>

                <form action="login/addtocart.php" method="post">
                    <input type="hidden" name="product" value="9">
                    <input type="submit" class="btn btn-success cart0" value="Add to cart">
                </form>

            </div>
        </div>

    </div>


</div>

<script src="scripts/recommendations.js"></script>

<?php
include 'inc/footer.php';
?>