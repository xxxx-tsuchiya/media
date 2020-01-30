
  /* サブミットを有効化する */
  function enable_submit(){
    $("#register_input").prop("disabled", false);
    $('#register_input').css('background-color', '#4268FF');
    $('#register_input').val('次へ');
  }

  /* サブミットを無効化する */
  function disable_submit(){
    $("#register_input").prop("disabled", true);
    $('#register_input').css('background-color', '#FF3333');
    $('#register_input').val('入力が不完全な項目があります');
  }

  /* フォームバリデーションチェック */
  function form_validation(){
    var submit_flg = true;

    if($('#name1').val() != ""){
      $('#name1').removeClass('not_input');
      $('#name1').addClass('ok_input');
    }else{
      $('#name1').removeClass('ok_input');
      $('#name1').addClass('not_input');
      submit_flg = false;
    }

    if($('#birth_year').val() != "0" ){
      $('#birth_year').removeClass('not_input');
      $('#birth_year').addClass('ok_input');
    }else{
      $('#birth_year').removeClass('ok_input');
      $('#birth_year').addClass('not_input');
      submit_flg = false;
    }

    if($('#birth_month').val() != "0" ){
      $('#birth_month').removeClass('not_input');
      $('#birth_month').addClass('ok_input');
    }else{
      $('#birth_month').removeClass('ok_input');
      $('#birth_month').addClass('not_input');
      submit_flg = false;
    }

    if($('#birth_day').val() != "0" ){
      $('#birth_day').removeClass('not_input');
      $('#birth_day').addClass('ok_input');
    }else{
      $('#birth_day').removeClass('ok_input');
      $('#birth_day').addClass('not_input');
      submit_flg = false;
    }

    if($('#w_m').val() != "0" ){
      $('#w_m').removeClass('not_input');
      $('#w_m').addClass('ok_input');
    }else{
      $('#w_m').removeClass('ok_input');
      $('#w_m').addClass('not_input');
      submit_flg = false;
    }

    if($('#mail').val() != ""){
      if($('#mail').val().match(/^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/i)){
        $('#mail').removeClass('not_input');
        $('#mail').addClass('ok_input');
      }else{
        $('#mail').removeClass('ok_input');
        $('#mail').addClass('not_input');
        submit_flg = false;
      }
    }else{
      $('#mail').removeClass('ok_input');
      $('#mail').addClass('not_input');
      submit_flg = false;
    }

    if($('#password').val() != ""){
      if($('#password').val().match(/^([a-zA-Z0-9]{6,})$/)){
        $('#password').removeClass('not_input');
        $('#password').addClass('ok_input');
      }else{
        $('#password').removeClass('ok_input');
        $('#password').addClass('not_input');
        submit_flg = false;
      }
    }else{
      $('#password').removeClass('ok_input');
      $('#password').addClass('not_input');
      submit_flg = false;
    }

    if($('#check_password').val() != ""){
      if($('#check_password').val() == $('#password').val()){
        $('#check_password').removeClass('not_input');
        $('#check_password').addClass('ok_input');
      }else{
        alert("パスワードが一致しません。再入力してください");
        $('#check_password').val('');
        $('#check_password').removeClass('ok_input');
        $('#check_password').addClass('not_input');
        submit_flg = false;
      }
    }else{
      $('#check_password').removeClass('ok_input');
      $('#check_password').addClass('not_input');
      submit_flg = false;
    }

    if(submit_flg == false){
      disable_submit();
    }else{
      enable_submit();
    }
  }

  window.onload=function(){
    const select_year  = $('#birth_year');
    const select_month = $('#birth_month');
    const select_day   = $('#birth_day');
    const select_w_m   = $('#w_m');
    let i;

    select_year.append('<option value="0">--選択してください--</option>');
    // 年の設定
    for(i=2020; i>1939; i--){
      select_year.append('<option value="' + i + '">' + i + '年</option>');
    }

    select_month.append('<option value="0">--選択してください--</option>');
    // 月の設定
    for(i=1; i<=12; i++){
      select_month.append('<option value="' + i + '">' + i + '月</option>');
    }

    select_day.append('<option value="0">--選択してください--</option>');
    // 日の設定
    for(i=1; i<=31; i++){
      select_day.append('<option value="' + i + '">' + i + '日</option>');
    }

    // 性別の設定
    select_w_m.append('<option value="0">--選択してください--</option>');
    select_w_m.append('<option value="1">男性</option>');
    select_w_m.append('<option value="2">女性</option>');
    select_w_m.append('<option value="3">その他</option>');

    form_validation();

  }

  $(function(){
    $('#name1, #birth_year, #birth_month, #birth_day, #w_m, #mail, #password, #check_password').change(function() {
      form_validation();
    });
  });
