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
  $objNavi->add_css           = '<link rel="stylesheet" href="/css/member/register_thanks.css" />' . "\n";

  // 追加するjs
  $objNavi->add_js            = '' . "\n";

  session_start();
  if(isset($_SESSION['user']) != ""){
    // ログイン済みの場合はリダイレクト
    header("Location: index.php");
  }


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

  if($objDB->SignUp($mysqli, $arrData)){
    $result_message = '登録に成功しました';
  }else{
    $result_message = '登録に失敗しました。お手数ですが、初めからやり直してください';
  }

  echo $objNavi->DispHeader();
  require_once(DOCUMENT_ROOT . '/view/member/view_register_thanks.php');
?>
