<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <?php
            include('include/products.php');
            printProducts($viewbag, 'consumer');
            print "<p></p>";
            printProducts($viewbag, 'enterprise');
            ?>
          </div>
            <!--
            Connor's demo code here

            To do:
            Autofill all 10 inputs using angular
            Allow user to change input dynamically
            Show those changes dynamically in the hashes
            -->
          <?php
          include('include/demo.php');
           ?>
         </div>
       </div>
