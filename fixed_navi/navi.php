<?php
Class Navi{

  function DispHeader(){
    $retHTML  = ' <html lang="ja">' . "\n";
    $retHTML .= '   <head>' . "\n";
    $retHTML .= '     <meta charset="utf-8" />' . "\n";
    $retHTML .= '     <meta http-equiv="X-UA-Compatible" content="IE=edge" />' . "\n";
    $retHTML .= '     <meta name="viewport" content="width=device-width,initial-scale=1" />' . "\n";
    $retHTML .= '     <title>' . $this->pageTitle . '</title>' . "\n";
    $retHTML .= '     <meta name="description" content="' . $this->pageDiscription . '" />' . "\n";
    $retHTML .= '     <link rel="stylesheet" href="/css/navi/navi.css" />' . "\n";
    $retHTML .= '     <link rel="stylesheet" href="/css/reset/reset.css" />' . "\n";
    $retHTML .= '     <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">' . "\n";
    $retHTML .= $this->add_css;
    $retHTML .= '     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>' . "\n";
    $retHTML .= '     <script src="/js/navi/navi_fixed.js"></script>' . "\n";
    $retHTML .= '     <script src="/js/navi/top_link.js"></script>' . "\n";
    $retHTML .= $this->add_js;
    $retHTML .= '   </head>' . "\n";
    $retHTML .= '   <body>' . "\n";
    $retHTML .= '     <header id="navi_header">' . "\n";
    /*$retHTML .= '       <ul id="header_area">' . "\n";
    $retHTML .= '         <li id="logo_area"><a href="#"><img src="/img/site_logo.png" alt="サイトのロゴ"></a></li>' . "\n";
    $retHTML .= '         <li class="navi_part"><a href="#">記事一覧</a></li>' . "\n";
    $retHTML .= '         <li class="navi_part"><a href="#">当サイトについて</a></li>' . "\n";
    $retHTML .= '       </ul>' . "\n";*/
    $retHTML .= '       <div id="header_top_area"><img src="/img/site_logo.png" alt="" id="logo_img"></div>' . "\n";
    $retHTML .= '       <ul id="action_area">' . "\n";
    $retHTML .= '         <li class="action_part" id="register_area">会員登録</li>' . "\n";
    $retHTML .= '         <li class="action_part" id="login_area">ログイン</li>' . "\n";
    $retHTML .= '       </ul>' . "\n";
    $retHTML .= '     </header>';

    return $retHTML;

  }
}

?>
