
    <div id="register_form_area">
      <h1>新規メンバー登録</h1>
      <div class="form_stage">
        <span class="input_stage">情報の入力</span>
        <span class="check_stage">情報の確認</span>
        <span class="thank_stage">登録完了</span>
      </div>
      <p class="form_message">入力内容をチェックし、問題なければ「登録する」を押してください</p>
      <form action="" method="post" id="register_form">
        <div id="input_area_wrapper">
          <div class="input_area">
            <p class="<?php echo $arrData['GetFormData'][0]['form_name']; ?>"><?php echo $arrData['GetFormData'][0]['form_text']; ?></p>
            <div class="check_area"><?php echo $arrData['postData']['name1']; ?></div>
          </div>
          <?php if($arrData['postData']['name2'] != ""){ ?>
          <div class="input_area">
            <p class="<?php echo $arrData['GetFormData'][1]['form_name']; ?>"><?php echo $arrData['GetFormData'][1]['form_text']; ?></p>
            <div class="check_area"><?php echo $arrData['postData']['name2']; ?></div>
          </div>
          <?php } ?>
          <div class="input_area">
            <p class="birth_all">生年月日</p>
            <div class="check_area"><?php echo $arrData['postData']['birth_year'] . '年' . $arrData['postData']['birth_month'] . '月' . $arrData['postData']['birth_day'] . '日'; ?></div>
          </div>
          <div class="input_area">
            <p class="<?php echo $arrData['GetFormData'][5]['form_name']; ?>"><?php echo $arrData['GetFormData'][5]['form_text']; ?></p>
            <div class="check_area"><?php echo $arrData['postData']['mail']; ?></div>
          </div>
          <div class="input_area">
            <p class="<?php echo $arrData['GetFormData'][6]['form_name']; ?>"><?php echo $arrData['GetFormData'][6]['form_text']; ?></p>
            <div class="check_area"><?php echo $arrData['postData']['password']; ?></div>
          </div>
          <div class="input_area">
            <p class="<?php echo $arrData['GetFormData'][8]['form_name']; ?>"><?php echo $arrData['GetFormData'][8]['form_text']; ?></p>
            <div class="check_area"><?php echo $arrData['postData']['w_m_text']; ?></div>
          </div>
        </div>
        <input type="hidden" name="<?php echo $arrData['GetFormData'][0]['form_name']; ?>" value="<?php echo $arrData['postData']['name1']; ?>"/>
        <input type="hidden" name="<?php echo $arrData['GetFormData'][1]['form_name']; ?>" value="<?php echo $arrData['postData']['name2']; ?>"/>
        <input type="hidden" name="birth_year" value="<?php echo $arrData['postData']['birth_year']; ?>"/>
        <input type="hidden" name="birth_month" value="<?php echo $arrData['postData']['birth_month']; ?>"/>
        <input type="hidden" name="birth_day" value="<?php echo $arrData['postData']['birth_day']; ?>"/>
        <input type="hidden" name="<?php echo $arrData['GetFormData'][5]['form_name']; ?>" value="<?php echo $arrData['postData']['mail']; ?>"/>
        <input type="hidden" name="<?php echo $arrData['GetFormData'][6]['form_name']; ?>" value="<?php echo $arrData['postData']['password']; ?>"/>
        <input type="hidden" name="<?php echo $arrData['GetFormData'][7]['form_name']; ?>" value="<?php echo $arrData['postData']['check_password']; ?>"/>
        <input type="hidden" name="<?php echo $arrData['GetFormData'][8]['form_name']; ?>" value="<?php echo $arrData['postData']['w_m']; ?>"/>

        <div class="submit">
          <button onclick="submitAction('/member/reapply.php')" id="back">再入力する</button>
          <button onclick="submitAction('/member/thanks.php')" id="submit">登録する</button>
        </div>
      </form>
    </div>
  </body>
