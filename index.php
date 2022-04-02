<?php
include "include/header.php";
?>

<div class="container pt-5">
    <div class="col">
        <?php
        function forLoop() {
          echo '<div class="row bg-dark m-2 py-2 text-light"> test  </div>';
        }
        for ($x = 0; $x < 5; $x++) {
           forLoop();
            }
        ?>

    </div>
</div>


<?php
include "include/footer.php";