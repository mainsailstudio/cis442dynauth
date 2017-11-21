<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <?php
            if (is_array($viewbag['ourVar'])) {
                foreach ($viewbag['ourVar'] as $item) {
                    echo $item['fname'];
                }
            }
            print "<hr /><br /><hr />";
            if (is_array($viewbag['testMysqli'])) {
                echo ($viewbag['testMysqli']);
            }
            ?>
            <div class="demo">
              <?php

               ?>
            </div><!-- end of Connor's demo code -->
        </div>
    </div>
</div>
