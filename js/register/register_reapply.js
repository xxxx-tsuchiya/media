
  window.onload=function(){

    const select_year  = jQuery('#birth_year');
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
