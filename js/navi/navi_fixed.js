  // JavaScript Document

  // ページの読み込みが完全に完了したら以下の処理を実行
  window.onload=function(){

　   var topbar = jQuery("ul#action_area").offset().top;

    var fixed_position = topbar + 100.5;

    $(window).scroll(function(){
      if($(window).scrollTop() > fixed_position)
        $("ul#action_area").css({
          "position":"fixed",
          "top":"0"
        })
      else
        $("ul#action_area").css({
          "position":"relative",
        })
    });
  }

  // ロゴを押した場合トップページへのリンク
  $(function(){
    $("#logo_img").click(function() {
      window.location.href = '/';
    });
  });
