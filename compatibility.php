<?php
include 'inc/header.php';
?>

<div class="content">

    <div class="card form3">
        <h1>Search your prefered processor!</h1>

        <form method="GET">

            <p>Type the name of the cpu you are interested in (doesn't need to be the complete name) and we 
                will greet you with all the relevant results in our database!</p>
            
            <label for="namecpu1">CPU name:</label><br>
            <input type="text" id="namecpu1" name="cpuname" placeholder="example: i9 14700k">

            <input type="submit" id="namecpu2" value="Search CPU">

        </form>

    </div>

    <?php
        include 'inc/displaycpus.php';
    ?>

</div>

<?php
include 'inc/footer.php';
?>