<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <?php
            if (is_array($viewbag['ourVar'])) {
                foreach ($viewbag['ourVar'] as $item) {
                    echo $item['fname'];
                }
            }
            ?>
            <div class="demo">
              <?php
              if (is_array($viewbag['demo'])) {
                  print_r ($viewbag['demo']);
              }
               ?>
            </div><!-- end of Connor's demo code -->
        </div>
    </div>
</div>
