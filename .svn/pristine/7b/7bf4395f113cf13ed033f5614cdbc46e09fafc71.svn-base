<div class="kt-quick-search__result">
    <?php if (sizeof($menus)): ?>
        <div class="kt-quick-search__category">
            Menu
        </div>
        <div class="kt-quick-search__section">
            <?php foreach ($menus as $key => $var): ?>
                <div class="kt-quick-search__item" style="border: solid 1px #EBEDF2; padding: 8px">
                    <div class="kt-quick-search__item-wrapper">
                        <a style="font-size: 16px; color: #2CBCFF; text-decoration: none;" href="<?php echo base_url($var->href) ?>" class="kt-quick-search__item-title">
                            <i class="<?php echo $var->icon ?>"></i> <?php echo $var->label ?>
                        </a>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    <?php else: ?>
        <div class="kt-quick-search__message">
            No record found
        </div>
    <?php endif ?>

</div>
