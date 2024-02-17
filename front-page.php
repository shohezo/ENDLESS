<?php get_header(); ?>
<?php
/* 
Template Name: フロントページ
*/
?>
<!-- fv -->
<div class="ly_fv">
    <div class="el_fv_copy">キレイ<span>を</span>ずっと、もっと。</div>
    <div class="el_icon_wrapper">
        <div class="el_icon">
            <a href="https://www.instagram.com/endless_fuk/" target="_blank" rel="noopener noreferrer"><img
                    src="<?php bloginfo('template_url');?>/img/icon_insta.png" alt="インスタグラムのリンクアイコン" /></a>
        </div>
        <div class="el_icon">
            <a class="el_icon" href=" https://lin.ee/L4XhGzx" target="_blank" rel="noopener noreferrer"><img
                    src="<?php bloginfo('template_url');?>/img/icon_line.png" alt="ラインのリンクアイコン" /></a>
        </div>
    </div>
</div>
<!-- news -->
<section class="ly_section hp_ptLg hp_pbLg" id="news">
    <div class="ly_inner">
        <h2 class="el_section_ttl hp_mbMd">NEWS</h2>
        <div class="bl_section hp_ptSm">
            <?php if(have_posts()):while(have_posts()):the_post(); ?>
            <div class="bl_section_body hp_mbSm">
                <div class="bl_section_date"><?php echo get_the_date('Y.m.d'); ?></div>
                <a href="<?php the_permalink();?>" class="bl_section_header"><?php the_title(); ?></a>
            </div>
            <?php endwhile;endif; ?>
        </div>
        <a href="<?php bloginfo('url');?>/news-archive" class="el_btn hp_centering hp_mtMd"><span>Read More</span></a>
    </div>
</section>
<!-- concept -->
<section class="ly_section hp_ptLg hp_pbLg" id="concept">
    <div class="ly_inner">
        <h2 class="el_section_ttl hp_mbMd">CONCEPT</h2>
        <div class="bl_section hp_flex hp_ptSm">
            <div class="bl_section_body">
                <h3 class="bl_section_header">
                    納得いくまで通える<br class="hp_br-sp" />通い放題サロン
                </h3>
                <p class="bl_section_txt">
                    「どこにいっても満足いく結果が出ない…」<br />
                    「結果が出なくていくつものお店を利用した」<br />
                    「今までの経験上、脱毛は終わらない」<br />
                    そう思われているあなたに贈る<br class="hp_br-sp" />最後の脱毛サロン。<br />
                    ”あなたのキレイを永久に”をコンセプトに、<br />
                    お客様の美に寄り添うサロン。<br />
                    それがENDLESSです。
                </p>
                <a href="<?php bloginfo('url');?>/concept" class="el_btn"><span>Read More</span></a>
            </div>
            <figure class="bl_section_imgWrapper">
                <img src="<?php bloginfo('template_url');?>/img/concept.jpeg" alt="振り返る女性" />
            </figure>
        </div>
    </div>
</section>
<div class="ly_inner">
    <img class="bg1" src="<?php bloginfo('template_url');?>/img/salon_bg.jpg" alt="サロンの背景画像" />
    <img class="bg2" src="<?php bloginfo('template_url');?>/img/lady_bg.jpeg" alt="女性の背景画像" />
</div>
<!-- beginner -->
<section class="ly_section hp_ptLg hp_pbLg" id="beginner">
    <div class="ly_inner">
        <h2 class="el_section_ttl hp_mbMd">FOR BEGINNER</h2>
        <div class="bl_section hp_flex hp_ptSm">
            <p class="bl_section_txt">
                <span>最新の高速脱毛</span><br />
                ENDLESSの脱毛は痛みが非常に少なく、より効果の高いハイブリッド脱毛を取り入れております。
                常に最新の脱毛機を取り揃えていますので、きっと結果にご満足頂けるはずです。
            </p>
            <p class="bl_section_txt">
                <span>うるおい美肌脱毛</span><br />
                ENDLESSでは美肌成分入りのジェルを使用しています
                保湿をしながら毛穴ケアと同時に脱毛することできめ細やかな美肌を手に入れられます。
                また抑毛効果もありますので、脱毛機との併用で効果は抜群です。
            </p>
            <p class="bl_section_txt">
                <span>スタッフ</span><br />
                ENDLESSでは研修制度を設けており、脱毛・お肌の知識をはじめ、接客マナーや技術など、3ヶ月の研修を修了したスタッフのみ、お客様の施術を担当致しますので、ご安心してお任せください。
            </p>
            <p class="bl_section_txt">
                <span>価格</span><br />
                脱毛はやってみたいけど高いから、と諦めてしまっている方も多いと思います
                ENDLESSは脱毛をもっと気軽に始められるように、月々のご負担が少ない、分割払いや都度払いなど、ご予算に合わせて選べる様々なプランをご用意しております。
            </p>
        </div>
        <a href="<?php bloginfo('url');?>/beginner" class="el_btn hp_centering hp_mtMd"><span>Read More</span></a>
    </div>
</section>
<!-- menu -->
<section class="ly_section hp_ptLg hp_pbLg" id="menu">
    <div class="ly_inner">
        <h2 class="el_section_ttl hp_mbMd">MENU</h2>
        <div class="bl_section hp_flex hp_ptSm">
            <div class="bl_section_body">
                <h3 class="bl_section_banner hp_mbSm">OPEN記念キャンペーン</h3>
                <p class="bl_section_txt hp_mbSm">全身部位脱毛を、ずっと。</p>
                <table>
                    <th>特別価格</th>
                    <td><span>月額 </span>3,100 <span>円〜</span></td>
                </table>
                <small>※定員数に達し次第、予告なく終了となります。</small>
                <a href="<?php bloginfo('url');?>/menu" class="el_btn"><span>Read More</span></a>
            </div>
            <figure class="bl_section_imgWrapper">
                <img src="<?php bloginfo('template_url');?>/img/menu.jpeg" alt="座っている女性" />
            </figure>
        </div>
        <div class="hp_ptLg hp_pbLg">
            <h3 class="hp_tac">
                その他、当店ではトータルな<br class="hp_br-tb" />ビューティサポートをご提案しております。
            </h3>
            <div class="bl_card_wrapper hp_flex hp_jcc hp_column_tb">
                <div class="bl_card">
                    <figure class="bl_card_imgWrapper">
                        <img src="<?php bloginfo('template_url');?>/img/whitening.jpeg" alt="ホワイトニングの画像" />
                    </figure>
                    <a href="<?php bloginfo('url');?>/whitening" class="el_btn"><span>ホワイトニング</span></a>
                </div>
                <div class="bl_card">
                    <figure class="bl_card_imgWrapper">
                        <img src="<?php bloginfo('template_url');?>/img/mens.jpeg" alt="メンズ脱毛の画像" />
                    </figure>
                    <a href="<?php bloginfo('url');?>/mens" class="el_btn"><span>メンズ脱毛</span></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- company -->
<!-- <section class="ly_section hp_ptLg hp_pbLg" id="company">
      <div class="ly_inner">
        <h2 class="el_section_ttl hp_mbMd">COMPANY</h2>
        <div class="bl_section hp_flex hp_ptSm">
          <div class="bl_section_body">
            <h3 class="bl_section_header">見出しが入ります</h3>
            <p class="bl_section_txt">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
              enim ad minim veniam, quis nostrud exercitation ullamco laboris
              nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
              reprehenderit in voluptate velit esse cillum dolore eu fugiat
              nulla pariatur. Excepteur sint occaecat cupidatat non proident,
              sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <a href="#" class="el_btn"><span>Read More</span></a>
          </div>
          <figure class="bl_section_imgWrapper">
            <img src="img/sail_logo.png" alt="合同会社Sailのロゴ" />
          </figure>
        </div>
      </div>
    </section> -->
<div class="ly_inner">
    <img class="bg3" src="<?php bloginfo('template_url');?>/img/treatment.jpg" alt="施術中の画像" />
    <img class="bg4" src="<?php bloginfo('template_url');?>/img/sea.jpg" alt="波の画像" />
</div>
<!-- access -->
<section class="ly_section hp_ptLg hp_pbSm" id="access">
    <div class="ly_inner">
        <h2 class="el_section_ttl hp_mbMd">ACCESS</h2>
        <div class="bl_section hp_tac hp_ptSm">
            <p class="hp_mbSm">
                お問い合わせはお電話、または<br class="hp_br-sp">公式LINEアカウントでお待ちしております。
            </p>
            <a href="tel:+81-092-710-5907" class="el_tel">092-710-5907</a><br>
            <small>受付時間 11：00〜20：00</small>
            <br>
            <a href="https://lin.ee/L4XhGzx" class="el_btn el_btn__line hp_mtSm"><img
                    src="<?php bloginfo('template_url');?>/img/LINE_Brand_icon.png" alt=""><span>公式LINEアカウント</span></a>
            <br>    
            <a href="https://beauty.hotpepper.jp/kr/slnH000501559/" class="el_btn hp_mtSm"><span>HOTPEPPER
                    BEAUTY</span></a>
            <p class="hp_mtMd"><i class="fa-solid fa-location-dot" style="margin-right: 10px"></i>福岡県福岡市博多区博多駅東1-13-17
                <br class="hp_br-sp">松岡ビル7階
            </p>
            <div class="ggmap hp_mtSm">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3323.564152519271!2d130.4212471504031!3d33.59066394926621!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x354191c8fe9bae8f%3A0x2b619120463111be!2z44CSODEyLTAwMTMg56aP5bKh55yM56aP5bKh5biC5Y2a5aSa5Yy65Y2a5aSa6aeF5p2x77yR5LiB55uu77yR77yT4oiS77yR77yX!5e0!3m2!1sja!2sjp!4v1648212472569!5m2!1sja!2sjp"
                    width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>