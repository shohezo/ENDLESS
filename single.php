<?php get_header(); ?>
<div class="ly_section hp_ptLg hp_pbLg" id="single">
    <div class="ly_inner">
        <main>
            <div class="bl_news">
                <!-- ループ始まり -->
                <?php if(have_posts()):while(have_posts()):the_post(); ?>
                <div class="bl_blog_category">
                    <?php
                    $category = get_the_category(); 
                        echo $category[0]->cat_name;
                    ?>
                </div>
                <p class="bl_news_date">
                    <time datetime="<?php echo esc_attr(get_the_date( DATE_W3C ));?>">
                        <?php echo esc_html(get_the_date('Y.m.d')); ?>
                    </time>
                </p>
                <h2 class="bl_news_ttl hp_mtMd hp_mbSm"><?php the_title(); ?></h2>
                <div class="bl_blog_cont">
                    <?php the_content(); ?>
                </div>
                <?php endwhile;endif; ?>
                <!-- ループ終わり -->
            </div>
        </main>
    </div>
</div>
<?php get_footer(); ?>