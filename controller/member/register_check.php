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
  $objNavi->add_css           = '<link rel="stylesheet" href="/css/member/register_check.css" />' . "\n";

  // 追加するjs
  $objNavi->add_js            = '<script src="/js/register/register_check.js"></script>' . "\n";

  // DB接続
  session_start();
  if(isset($_SESSION['user']) != ""){
    // ログイン済みの場合はリダイレクト
    header("Location: index.php");
  }

  $arrData['GetFormData']     = $objDB->GetForm();


  // POSTされたデータを取得
  $arrData['postData']['name1']           = $_POST['name1'];
  $arrData['postData']['name2']           = $_POST['name2'];
  $arrData['postData']['birth_year']      = $_POST['birth_year'];
  $arrData['postData']['birth_month']     = $_POST['birth_month'];
  $arrData['postData']['birth_day']       = $_POST['birth_day'];
  $arrData['postData']['mail']            = $_POST['mail'];
  $arrData['postData']['password']        = $_POST['password'];
  $arrData['postData']['check_password']  = $_POST['check_password'];
  $arrData['postData']['w_m']             = $_POST['w_m'];
  switch($_POST['w_m']) {
    case '1':
      $arrData['postData']['w_m_text'] = "男性";
      break;
    case '2':
      $arrData['postData']['w_m_text'] = "女性";
      break;
    case '3';
      $arrData['postData']['w_m_text'] = "その他";
      break;
  }


  echo $objNavi->DispHeader();
  require_once(DOCUMENT_ROOT . '/view/member/view_register_check.php');
?>
