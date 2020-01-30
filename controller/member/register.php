<?php
  require_once(dirname(__FILE__) . '/../../model/config.php');
  require_once(DOCUMENT_ROOT . '/fixed_navi/navi.php');
  require_once(DOCUMENT_ROOT . '/model/db/dbconnect.php');

  $objDB      = new DBconnect();
  $objNavi    = new Navi();

  $arrData    = array();

  // ページのタイトルを追加
  $objNavi->pageTitle         = '新規会員登録ページ';
  // ページのディスクリプションを追加
  $objNavi->pageDiscription   = 'ディスクリプション';
  // 追加するCSS
  $objNavi->add_css           = '<link rel="stylesheet" href="/css/member/register.css" />' . "\n";

  // 追加するjs
  $objNavi->add_js            = '<script src="/js/register/register.js"></script>' . "\n";

  // DB接続
  $mysqli = $objDB->DatabaseConnect();
  $arrData['GetFormData']     = $objDB->GetForm($mysqli);
  session_start();
  if(isset($_SESSION['user']) != ""){
    // ログイン済みの場合はリダイレクト
    header("Location: index.php");
  }

  echo $objNavi->DispHeader();
  require_once(DOCUMENT_ROOT . '/view/member/view_register.php');

?>
