<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <?php
            if (is_array($viewbag['ourVar'])) {
                foreach ($viewbag['ourVar'] as $item) {
                    echo $item['test'];
                }
            }
            ?>
        </div>
    </div>
</div>
