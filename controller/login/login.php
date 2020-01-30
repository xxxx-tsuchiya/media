<?php
  require_once(dirname(__FILE__) . '/../../model/config.php');
  require_once(DOCUMENT_ROOT . '/fixed_navi/navi.php');
  require_once(DOCUMENT_ROOT . '/model/db/dbconnect.php');

  $objDB      = new DBconnect();
  $objNavi    = new Navi();

  $arrData    = array();

  // ページのタイトルを追加
  $objNavi->pageTitle         = 'ログインページ';
  // ページのディスクリプションを追加
  $objNavi->pageDiscription   = 'ディスクリプション';
  // 追加するCSS
  $objNavi->add_css           = '<link rel="stylesheet" href="/css/login/login.css" />' . "\n";

  // 追加するjs
  $objNavi->add_js            = '' . "\n";

  // DB接続
  $mysqli = $objDB->DatabaseConnect();
  session_start();

  echo $objNavi->DispHeader();
  require_once(DOCUMENT_ROOT . '/view/login/view_login.php');

?>
