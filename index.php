<?php
  // インスタンス化
  require_once(dirname(__FILE__) . '/model/config.php');
  require_once(DOCUMENT_ROOT . '/fixed_navi/navi.php');

  $objNavi    = new Navi();

  // ページのタイトルを追加
  $objNavi->pageTitle         = 'トップページ';
  // ページのディスクリプションを追加
  $objNavi->pageDiscription   = 'ディスクリプション';
  // 追加するCSS
  $objNavi->add_css           = '<link rel="stylesheet" href="/css/top/top.css" />' . "\n";
  // 追加するjs
  $objNavi->add_js            = '' . "\n";

  $arrData = array();


  echo $objNavi->DispHeader();
  require_once(DOCUMENT_ROOT . '/view/index/view_top.php');

?>
