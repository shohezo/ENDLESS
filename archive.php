<?php get_header(); ?>
<div class="ly_section hp_ptLg hp_pbLg" id="archive">
    <div class="ly_inner">
        <div class=" el_section_ttl">
            <?php if(is_category()): ?>
            <h2><?php the_archive_title(); ?>一覧</h2>
            <?php else: ?>
            <h2>NEWS</h2>
            <?php endif; ?>
        </div>
        <ul class="bl_news_list hp_ptMd hp_pbLg">
            <!-- メインループ始まり -->
            <?php if(have_posts()):while(have_posts()):the_post(); ?>
            <a class="bl_news_card" href="<?php the_permalink();?>">
                <li class="bl_news_item hp_mbSm">
                    <div class=" bl_news_body">
                        <p class="bl_news_date"><?php echo get_the_date('Y.m.d'); ?></p>
                        <h2 class="bl_news_ttl"><?php
                            if(mb_strlen($post->post_title)>20) {
                            $title= mb_substr($post->post_title,0,20) ;
                                echo $title . '...';
                            } else {
                                echo $post->post_title;
                            }
                            ?></h2>
                    </div>
                    <div class="post-categories">
                        <?php
      $category = get_the_category(); 
        echo $category[0]->cat_name;
    ?>
                    </div>
                </li>
            </a>
            <?php endwhile;endif; ?>
        </ul>
        <!-- メインループ終わり -->
        <!-- ページネーションの実装 -->
        <?php the_posts_pagination(
        array(
            'mid_size'      => 2, // 現在ページの左右に表示するページ番号の数
            'prev_next'     => false, // 「前へ」「次へ」のリンクを表示する場合はtrue
            'prev_text' => '<i class="fa fa-caret-left"></i>', // 「前へ」リンクのテキスト
            'next_text' => '<i class="fa fa-caret-right"></i>', // 「次へ」リンクのテキスト
            'type'          => 'list', // 戻り値の指定 (plain/list)
            )
        ); ?>
        <!-- ページネーションの実装 ここまで -->
    </div>
</div>
<?php get_footer(); ?>