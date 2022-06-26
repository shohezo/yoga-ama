
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
  
  /* よくある質問のアコーディオン */
  $(function () {
    $(".bl_faq_list dd:first").show();
    $(".bl_faq_list dt").on("click", function () {
      $(this).next().slideToggle(300);
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