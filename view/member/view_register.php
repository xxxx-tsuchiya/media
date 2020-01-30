
    <div id="register_form_area">
      <h1>新規メンバー登録</h1>
      <div class="form_stage">
        <span class="input_stage">情報の入力</span>
        <span class="check_stage">情報の確認</span>
        <span class="thank_stage">登録完了</span>
      </div>
      <p class="form_message">以下をご記入の上「次へ」ボタンを押してください</p>
      <form action="/member/check.php" method="post" id="register_form">
        <div id="input_area_wrapper">
          <?php foreach($arrData['GetFormData'] as $gfVal){ ?>
          <div class="input_area">
            <p class="<?php echo $gfVal['form_name']; ?>"><?php echo $gfVal['form_text']; ?></p>
            <?php echo $gfVal['form_html']; ?>
          </div>
          <?php } ?>
        </div>
        <div class="submit">
          <input type="submit" id="register_input" value="次へ">
        </div>
      </form>
    </div>
  </body>
