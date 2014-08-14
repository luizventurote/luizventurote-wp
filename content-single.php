<article class="col-sm-12 post content">
                    
    <h2><?= get_the_title() ?></h2>

    <div class="divider divider-single"></div>

    <?php the_content(); ?>

    <div class="post-info">   

        <span class="post-time">
            <i class="fa fa-clock-o icon"></i>
            <time datetime="<?= get_the_date('Y-m-d'); ?> <?= get_the_time(); ?>"> <?= get_the_date('d \d\e F \d\e Y'); ?></time>
        </span>

        <span class="post-tags">
            <i class="fa fa-tag icon"></i>
            <?php the_category(', ') ?>
        </span>

    </div>

</article>