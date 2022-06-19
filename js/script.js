/* drawer */
$(function () {
  $(".bl_drawerBtn").on("click", function () {
    $(this).toggleClass("action");
    $(".bl_drawer").toggleClass("action");
    $("body").toggleClass("noscroll");
  });
});

$(function () {
  //.bl_drawer_itemを押すとついてたactionが外れてドロワーメニューがひっこむ
  $(".bl_drawer_item a").on("click", function () {
    $(".bl_drawerBtn").toggleClass("action");
    $(".bl_drawer").toggleClass("action");
    $("body").toggleClass("noscroll");
  });
});

/* ニュースのアコーディオン */
$(function () {
  $(".news_list dt").on("click", function () {
    $(this).next().slideToggle(300);
  });
});

/* アコーディオン */
$(function () {
  $(".bl_faq_item_answer:first").show(); //ひとつ目は最初から
  $(".bl_faq_list .bl_faq_item_question").click(function () {
    $(this).next(".bl_faq_item_answer").slideToggle(300);
    $(this).toggleClass("open");
  });
});

//.ly_fvまでスクロールするとheaderの色が変化
("use strict");

jQuery(window).on("scroll", function () {
  if (jQuery("#news").height() < jQuery(this).scrollTop()) {
    jQuery(".el_pageTop").addClass("show");
  } else {
    jQuery(".el_pageTop").removeClass("show");
  }
});

/* slick */
$(".center").slick({
  infinite: true,
  slidesToShow: 3,
  // variableWidth: true,
  dots: true,
  centerMode: true, //要素を中央寄せ
  centerPadding: "10%", //両サイドの見えている部分のサイズ
  autoplay: true,
  autoplaySpeed: 3000,
  speed: 1000,
  arrows: false,
  dotsClass: "slide-dots",
});

/* ローディングアニメーション */
$(function () {
  var webStorage = function () {
    if (sessionStorage.getItem("access")) {
      /*
        2回目以降アクセス時の処理
      */
      $(".loading").addClass("is-active");
    } else {
      /*
        初回アクセス時の処理
      */
      sessionStorage.setItem("access", "true"); // sessionStorageにデータを保存
      $(".loading-animation").addClass("is-active"); // loadingアニメーションを表示
      setTimeout(function () {
        // ローディングを数秒後に非表示にする
        $(".loading").addClass("is-active");
        $(".loading-animation").removeClass("is-active");
      }, 4000); // ローディングを表示する時間
    }
  };
  webStorage();
});

