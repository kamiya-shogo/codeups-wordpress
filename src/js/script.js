
jQuery(function ($) { // この中であればWordpressでも「$」が使用可能になる

  //ドロワーメニュー
  $(".js-hamburger,.js-sp-nav").click(function () {
    if ($(".js-hamburger").hasClass("is-active")) {
      $(".js-hamburger,.js-body").removeClass("is-active");
      $(".js-header").removeClass("is-color");
      $(".js-sp-nav").fadeOut();
    } else {
      $(".js-hamburger,.js-body").addClass("is-active"); /* js-body:ドロワー表示中に背景を固定し、スクロールさせない */
      $(".js-header").addClass("is-color");
      $(".js-sp-nav").fadeIn();
    }
  });

  //resizeイベント
  $(window).resize(function () {
    if (window.matchMedia("(min-width: 768px)").matches) {
      closeDrawer();
    }
  });

  function closeDrawer() {
    $(".js-hamburger,.js-body").removeClass("is-active");
    $(".js-header").removeClass("is-color");
    $(".js-sp-nav").fadeOut();
  }

  var swiper = new Swiper(".js-top-mv-swiper", {
    loop: true,
    effect: "fade",
    speed: 3000,
    allowTouchMove: false,
    autoplay: {
      delay: 3000,
    },
  });

  var swiper = new Swiper(".js-campaign-swiper", {
    loop: true,
    speed: 1500,
    autoplay: {
      delay: 1500,
      disableOnInteraction: false,
    },
    // Optional parameters
    slidesPerView: 'auto',
    spaceBetween: 24,

    breakpoints: {
      // when window width is >= 768px
      768: {
        spaceBetween: 40
      },
    },

    // Navigation arrows
    navigation: {
      prevEl: '.swiper-button-prev',
      nextEl: '.swiper-button-next',
    }
  });

  //ページトップ
  $(function(){
    var pagetop = $('.js-page-top,.js-page-mv');
    // ボタン非表示
    // スクロールしたらボタン表示
    $(window).scroll(function () {
      if ($(this).scrollTop() > $('.js-top-mv,.js-page-mv').height()) {
            pagetop.addClass('is-fade');
      } else {
            pagetop.removeClass('is-fade');
      }
    });
    pagetop.click(function () {
      $('body, html').animate({ scrollTop: 0 }, 500);
      return false;
    });
    // フッター手前でストップ
    $(window).on("scroll", function () {
      var scrollHeight = $(document).height();
      var scrollPosition = $(window).height() + $(window).scrollTop();
      var footHeight = $(".js-footer").innerHeight();

      if (scrollHeight - scrollPosition < footHeight) {
      // ページトップボタンがフッター手前に来たらpositionとfixedからabsoluteに変更
          pagetop.addClass("is-active")
      } else {
          pagetop.removeClass("is-active")
      }
    });
  });

  //要素の取得とスピードの設定
  var box = $(".js-colorbox"),
  speed = 700;

  //.colorboxの付いた全ての要素に対して下記の処理を行う
  box.each(function () {
  $(this).append('<div class="color"></div>');
  var color = $(this).find($(".color")),
    image = $(this).find("img");
  var counter = 0;

  image.css("opacity", "0");
  color.css("width", "0%");
  //inviewを使って背景色が画面に現れたら処理をする
  color.on("inview", function () {
    if (counter == 0) {
      $(this)
        .delay(200)
        .animate({ width: "100%" }, speed, function () {
          image.css("opacity", "1");
          $(this).css({ left: "0", right: "auto" });
          $(this).animate({ width: "0%" }, speed);
        });
      counter = 1;
    }
  });
});

//インフォメーションタブ
$(function () {
  $(".js-page-information-tab-menu").on("click", function () {
    $(".is-active").removeClass("is-active");
    $(this).addClass("is-active");
    var index = $(this).index();
    $(".js-page-information-tab-content").hide().eq(index).fadeIn(300);
  });
  var urlParams = new URLSearchParams(window.location.search);
  var tabId = urlParams.get("tabId");
  if (tabId) {
    $(".is-active").removeClass("is-active");
    // タブがクエリパラメータで指定された場合、該当のタブにcurrentクラスを付与
    $(".js-page-information-tab-menu[data-tab-id=\"".concat(tabId, "\"]")).addClass("is-active");
    var index = $(".js-page-information-tab-menu[data-tab-id=\"".concat(tabId, "\"]")).index();
    $(".js-page-information-tab-content").hide().eq(index).fadeIn(100);
  }
});



//アコーディオン
$(function(){
  $(".js-accordion").show();
  $('.js-page-faq-question').on('click', function () {
      $(this).next().slideToggle();
      $(this).toggleClass('is-open');
  });
});

//モーダル
$(".js-modal-open").each(function () {
  $(this).on("click", function (e) {
    var windowSize = $(window).width();
    if (windowSize < 768) {
      return false;
    } else {
      e.preventDefault();
      var target = $(this).data("target");
      var modal  = document.getElementById(target);
      $(modal).fadeIn();
      $("html,body").css("overflow", "hidden");
      return false;
    }
  });
});
$(".js-modal-close").on("click", function () {
  var windowSize = $(window).width();
  if (windowSize < 768) {
    return false;
  } else {
    $(".js-page-about-modal").fadeOut();
    $("html,body").css("overflow", "initial");
    return false;
  }
});

//サイドバー アーカイブ
$(function(){
  // 最新の年だけを表示する
  $('.js-page-sidebar-archive.is-open').next().show();

  $('.js-page-sidebar-archive').on('click', function () {
    $(this).next().slideToggle();
    $(this).toggleClass('is-open');
  });
});
});
