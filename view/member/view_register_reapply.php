
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
          <div class="input_area">
            <p class="<?php echo $arrData['GetFormData'][0]['form_name']; ?>"><?php echo $arrData['GetFormData'][0]['form_text']; ?></p>
            <input type="text" name="name1" id="name1" value="<?php echo $arrData['postData']['name1']; ?>"/>
          </div>
          <div class="input_area">
            <p class="<?php echo $arrData['GetFormData'][1]['form_name']; ?>"><?php echo $arrData['GetFormData'][1]['form_text']; ?></p>
            <input type="text" name="name2" id="name2" value="<?php echo $arrData['postData']['name2']; ?>"/>
          </div>
          <div class="input_area">
            <p class="<?php echo $arrData['GetFormData'][2]['form_name']; ?>"><?php echo $arrData['GetFormData'][2]['form_text']; ?></p>
            <select name="birth_year" id="birth_year">
              <option value="0" <?php if(!(isset($arrData['postData']['birth_year']))){ echo 'selected'; } ?>>--選択してください--</option>
              <option value="1939" <?php if($arrData['postData']['birth_year'] == 1939){ echo 'selected'; } ?>>1939年</option>
              <option value="1940" <?php if($arrData['postData']['birth_year'] == 1940){ echo 'selected'; } ?>>1940年</option>
              <option value="1941" <?php if($arrData['postData']['birth_year'] == 1941){ echo 'selected'; } ?>>1941年</option>
              <option value="1942" <?php if($arrData['postData']['birth_year'] == 1942){ echo 'selected'; } ?>>1942年</option>
              <option value="1943" <?php if($arrData['postData']['birth_year'] == 1943){ echo 'selected'; } ?>>1943年</option>
              <option value="1944" <?php if($arrData['postData']['birth_year'] == 1944){ echo 'selected'; } ?>>1944年</option>
              <option value="1945" <?php if($arrData['postData']['birth_year'] == 1945){ echo 'selected'; } ?>>1945年</option>
              <option value="1946" <?php if($arrData['postData']['birth_year'] == 1946){ echo 'selected'; } ?>>1946年</option>
              <option value="1947" <?php if($arrData['postData']['birth_year'] == 1947){ echo 'selected'; } ?>>1947年</option>
              <option value="1948" <?php if($arrData['postData']['birth_year'] == 1948){ echo 'selected'; } ?>>1948年</option>
              <option value="1949" <?php if($arrData['postData']['birth_year'] == 1949){ echo 'selected'; } ?>>1949年</option>
              <option value="1950" <?php if($arrData['postData']['birth_year'] == 1950){ echo 'selected'; } ?>>1950年</option>
              <option value="1951" <?php if($arrData['postData']['birth_year'] == 1951){ echo 'selected'; } ?>>1951年</option>
              <option value="1952" <?php if($arrData['postData']['birth_year'] == 1952){ echo 'selected'; } ?>>1952年</option>
              <option value="1953" <?php if($arrData['postData']['birth_year'] == 1953){ echo 'selected'; } ?>>1953年</option>
              <option value="1954" <?php if($arrData['postData']['birth_year'] == 1954){ echo 'selected'; } ?>>1954年</option>
              <option value="1955" <?php if($arrData['postData']['birth_year'] == 1955){ echo 'selected'; } ?>>1955年</option>
              <option value="1956" <?php if($arrData['postData']['birth_year'] == 1956){ echo 'selected'; } ?>>1956年</option>
              <option value="1957" <?php if($arrData['postData']['birth_year'] == 1957){ echo 'selected'; } ?>>1957年</option>
              <option value="1958" <?php if($arrData['postData']['birth_year'] == 1958){ echo 'selected'; } ?>>1958年</option>
              <option value="1959" <?php if($arrData['postData']['birth_year'] == 1959){ echo 'selected'; } ?>>1959年</option>
              <option value="1960" <?php if($arrData['postData']['birth_year'] == 1960){ echo 'selected'; } ?>>1960年</option>
              <option value="1961" <?php if($arrData['postData']['birth_year'] == 1961){ echo 'selected'; } ?>>1961年</option>
              <option value="1962" <?php if($arrData['postData']['birth_year'] == 1962){ echo 'selected'; } ?>>1962年</option>
              <option value="1963" <?php if($arrData['postData']['birth_year'] == 1963){ echo 'selected'; } ?>>1963年</option>
              <option value="1964" <?php if($arrData['postData']['birth_year'] == 1964){ echo 'selected'; } ?>>1964年</option>
              <option value="1965" <?php if($arrData['postData']['birth_year'] == 1965){ echo 'selected'; } ?>>1965年</option>
              <option value="1966" <?php if($arrData['postData']['birth_year'] == 1966){ echo 'selected'; } ?>>1966年</option>
              <option value="1967" <?php if($arrData['postData']['birth_year'] == 1967){ echo 'selected'; } ?>>1967年</option>
              <option value="1968" <?php if($arrData['postData']['birth_year'] == 1968){ echo 'selected'; } ?>>1968年</option>
              <option value="1969" <?php if($arrData['postData']['birth_year'] == 1969){ echo 'selected'; } ?>>1969年</option>
              <option value="1970" <?php if($arrData['postData']['birth_year'] == 1970){ echo 'selected'; } ?>>1970年</option>
              <option value="1971" <?php if($arrData['postData']['birth_year'] == 1971){ echo 'selected'; } ?>>1971年</option>
              <option value="1972" <?php if($arrData['postData']['birth_year'] == 1972){ echo 'selected'; } ?>>1972年</option>
              <option value="1973" <?php if($arrData['postData']['birth_year'] == 1973){ echo 'selected'; } ?>>1973年</option>
              <option value="1974" <?php if($arrData['postData']['birth_year'] == 1974){ echo 'selected'; } ?>>1974年</option>
              <option value="1975" <?php if($arrData['postData']['birth_year'] == 1975){ echo 'selected'; } ?>>1975年</option>
              <option value="1976" <?php if($arrData['postData']['birth_year'] == 1976){ echo 'selected'; } ?>>1976年</option>
              <option value="1977" <?php if($arrData['postData']['birth_year'] == 1977){ echo 'selected'; } ?>>1977年</option>
              <option value="1978" <?php if($arrData['postData']['birth_year'] == 1978){ echo 'selected'; } ?>>1978年</option>
              <option value="1979" <?php if($arrData['postData']['birth_year'] == 1979){ echo 'selected'; } ?>>1979年</option>
              <option value="1980" <?php if($arrData['postData']['birth_year'] == 1980){ echo 'selected'; } ?>>1980年</option>
              <option value="1981" <?php if($arrData['postData']['birth_year'] == 1981){ echo 'selected'; } ?>>1981年</option>
              <option value="1982" <?php if($arrData['postData']['birth_year'] == 1982){ echo 'selected'; } ?>>1982年</option>
              <option value="1983" <?php if($arrData['postData']['birth_year'] == 1983){ echo 'selected'; } ?>>1983年</option>
              <option value="1984" <?php if($arrData['postData']['birth_year'] == 1984){ echo 'selected'; } ?>>1984年</option>
              <option value="1985" <?php if($arrData['postData']['birth_year'] == 1985){ echo 'selected'; } ?>>1985年</option>
              <option value="1986" <?php if($arrData['postData']['birth_year'] == 1986){ echo 'selected'; } ?>>1986年</option>
              <option value="1987" <?php if($arrData['postData']['birth_year'] == 1987){ echo 'selected'; } ?>>1987年</option>
              <option value="1988" <?php if($arrData['postData']['birth_year'] == 1988){ echo 'selected'; } ?>>1988年</option>
              <option value="1989" <?php if($arrData['postData']['birth_year'] == 1989){ echo 'selected'; } ?>>1989年</option>
              <option value="1990" <?php if($arrData['postData']['birth_year'] == 1990){ echo 'selected'; } ?>>1990年</option>
              <option value="1991" <?php if($arrData['postData']['birth_year'] == 1991){ echo 'selected'; } ?>>1991年</option>
              <option value="1992" <?php if($arrData['postData']['birth_year'] == 1992){ echo 'selected'; } ?>>1992年</option>
              <option value="1993" <?php if($arrData['postData']['birth_year'] == 1993){ echo 'selected'; } ?>>1993年</option>
              <option value="1994" <?php if($arrData['postData']['birth_year'] == 1994){ echo 'selected'; } ?>>1994年</option>
              <option value="1995" <?php if($arrData['postData']['birth_year'] == 1995){ echo 'selected'; } ?>>1995年</option>
              <option value="1996" <?php if($arrData['postData']['birth_year'] == 1996){ echo 'selected'; } ?>>1996年</option>
              <option value="1997" <?php if($arrData['postData']['birth_year'] == 1997){ echo 'selected'; } ?>>1997年</option>
              <option value="1998" <?php if($arrData['postData']['birth_year'] == 1998){ echo 'selected'; } ?>>1998年</option>
              <option value="1999" <?php if($arrData['postData']['birth_year'] == 1999){ echo 'selected'; } ?>>1999年</option>
              <option value="2000" <?php if($arrData['postData']['birth_year'] == 2000){ echo 'selected'; } ?>>2000年</option>
              <option value="2001" <?php if($arrData['postData']['birth_year'] == 2001){ echo 'selected'; } ?>>2001年</option>
              <option value="2002" <?php if($arrData['postData']['birth_year'] == 2002){ echo 'selected'; } ?>>2002年</option>
              <option value="2003" <?php if($arrData['postData']['birth_year'] == 2003){ echo 'selected'; } ?>>2003年</option>
              <option value="2004" <?php if($arrData['postData']['birth_year'] == 2004){ echo 'selected'; } ?>>2004年</option>
              <option value="2005" <?php if($arrData['postData']['birth_year'] == 2005){ echo 'selected'; } ?>>2005年</option>
              <option value="2006" <?php if($arrData['postData']['birth_year'] == 2006){ echo 'selected'; } ?>>2006年</option>
              <option value="2007" <?php if($arrData['postData']['birth_year'] == 2007){ echo 'selected'; } ?>>2007年</option>
              <option value="2008" <?php if($arrData['postData']['birth_year'] == 2008){ echo 'selected'; } ?>>2008年</option>
              <option value="2009" <?php if($arrData['postData']['birth_year'] == 2009){ echo 'selected'; } ?>>2009年</option>
              <option value="2010" <?php if($arrData['postData']['birth_year'] == 2010){ echo 'selected'; } ?>>2010年</option>
              <option value="2011" <?php if($arrData['postData']['birth_year'] == 2011){ echo 'selected'; } ?>>2011年</option>
              <option value="2012" <?php if($arrData['postData']['birth_year'] == 2012){ echo 'selected'; } ?>>2012年</option>
              <option value="2013" <?php if($arrData['postData']['birth_year'] == 2013){ echo 'selected'; } ?>>2013年</option>
              <option value="2014" <?php if($arrData['postData']['birth_year'] == 2014){ echo 'selected'; } ?>>2014年</option>
              <option value="2015" <?php if($arrData['postData']['birth_year'] == 2015){ echo 'selected'; } ?>>2015年</option>
              <option value="2016" <?php if($arrData['postData']['birth_year'] == 2016){ echo 'selected'; } ?>>2016年</option>
              <option value="2017" <?php if($arrData['postData']['birth_year'] == 2017){ echo 'selected'; } ?>>2017年</option>
              <option value="2018" <?php if($arrData['postData']['birth_year'] == 2018){ echo 'selected'; } ?>>2018年</option>
              <option value="2019" <?php if($arrData['postData']['birth_year'] == 2019){ echo 'selected'; } ?>>2019年</option>
              <option value="2020" <?php if($arrData['postData']['birth_year'] == 2020){ echo 'selected'; } ?>>2020年</option>
            </select>
          </div>
          <div class="input_area">
            <p class="<?php echo $arrData['GetFormData'][3]['form_name']; ?>"><?php echo $arrData['GetFormData'][3]['form_text']; ?></p>
            <select name="birth_month" id="birth_month">
              <option value="0" <?php if(!(isset($arrData['postData']['birth_month']))){ echo 'selected'; } ?>>--選択してください--</option>
              <option value="1" <?php if($arrData['postData']['birth_month'] == 1){echo 'selected'; } ?>>1月</option>
              <option value="2" <?php if($arrData['postData']['birth_month'] == 2){echo 'selected'; } ?>>2月</option>
              <option value="3" <?php if($arrData['postData']['birth_month'] == 3){echo 'selected'; } ?>>3月</option>
              <option value="4" <?php if($arrData['postData']['birth_month'] == 4){echo 'selected'; } ?>>4月</option>
              <option value="5" <?php if($arrData['postData']['birth_month'] == 5){echo 'selected'; } ?>>5月</option>
              <option value="6" <?php if($arrData['postData']['birth_month'] == 6){echo 'selected'; } ?>>6月</option>
              <option value="7" <?php if($arrData['postData']['birth_month'] == 7){echo 'selected'; } ?>>7月</option>
              <option value="8" <?php if($arrData['postData']['birth_month'] == 8){echo 'selected'; } ?>>8月</option>
              <option value="9" <?php if($arrData['postData']['birth_month'] == 9){echo 'selected'; } ?>>9月</option>
              <option value="10" <?php if($arrData['postData']['birth_month'] == 10){echo 'selected'; } ?>>10月</option>
              <option value="11" <?php if($arrData['postData']['birth_month'] == 11){echo 'selected'; } ?>>11月</option>
              <option value="12" <?php if($arrData['postData']['birth_month'] == 12){echo 'selected'; } ?>>12月</option>
            </select>
          </div>
          <div class="input_area">
            <p class="<?php echo $arrData['GetFormData'][4]['form_name']; ?>"><?php echo $arrData['GetFormData'][4]['form_text']; ?></p>
            <select name="birth_day" id="birth_day">
              <option value="0" <?php if(!(isset($arrData['postData']['birth_day']))){ echo 'selected'; } ?>>--選択してください--</option>
              <option value="1" <?php if($arrData['postData']['birth_day'] == 1){echo 'selected'; } ?>>1日</option>
              <option value="2" <?php if($arrData['postData']['birth_day'] == 2){echo 'selected'; } ?>>2日</option>
              <option value="3" <?php if($arrData['postData']['birth_day'] == 3){echo 'selected'; } ?>>3日</option>
              <option value="4" <?php if($arrData['postData']['birth_day'] == 4){echo 'selected'; } ?>>4日</option>
              <option value="5" <?php if($arrData['postData']['birth_day'] == 5){echo 'selected'; } ?>>5日</option>
              <option value="6" <?php if($arrData['postData']['birth_day'] == 6){echo 'selected'; } ?>>6日</option>
              <option value="7" <?php if($arrData['postData']['birth_day'] == 7){echo 'selected'; } ?>>7日</option>
              <option value="8" <?php if($arrData['postData']['birth_day'] == 8){echo 'selected'; } ?>>8日</option>
              <option value="9" <?php if($arrData['postData']['birth_day'] == 9){echo 'selected'; } ?>>9日</option>
              <option value="10" <?php if($arrData['postData']['birth_day'] == 10){echo 'selected'; } ?>>10日</option>
              <option value="11" <?php if($arrData['postData']['birth_day'] == 11){echo 'selected'; } ?>>11日</option>
              <option value="12" <?php if($arrData['postData']['birth_day'] == 12){echo 'selected'; } ?>>12日</option>
              <option value="13" <?php if($arrData['postData']['birth_day'] == 13){echo 'selected'; } ?>>13日</option>
              <option value="14" <?php if($arrData['postData']['birth_day'] == 14){echo 'selected'; } ?>>14日</option>
              <option value="15" <?php if($arrData['postData']['birth_day'] == 15){echo 'selected'; } ?>>15日</option>
              <option value="16" <?php if($arrData['postData']['birth_day'] == 16){echo 'selected'; } ?>>16日</option>
              <option value="17" <?php if($arrData['postData']['birth_day'] == 17){echo 'selected'; } ?>>17日</option>
              <option value="18" <?php if($arrData['postData']['birth_day'] == 18){echo 'selected'; } ?>>18日</option>
              <option value="19" <?php if($arrData['postData']['birth_day'] == 19){echo 'selected'; } ?>>19日</option>
              <option value="20" <?php if($arrData['postData']['birth_day'] == 20){echo 'selected'; } ?>>20日</option>
              <option value="21" <?php if($arrData['postData']['birth_day'] == 21){echo 'selected'; } ?>>21日</option>
              <option value="22" <?php if($arrData['postData']['birth_day'] == 22){echo 'selected'; } ?>>22日</option>
              <option value="23" <?php if($arrData['postData']['birth_day'] == 23){echo 'selected'; } ?>>23日</option>
              <option value="24" <?php if($arrData['postData']['birth_day'] == 24){echo 'selected'; } ?>>24日</option>
              <option value="25" <?php if($arrData['postData']['birth_day'] == 25){echo 'selected'; } ?>>25日</option>
              <option value="26" <?php if($arrData['postData']['birth_day'] == 26){echo 'selected'; } ?>>26日</option>
              <option value="27" <?php if($arrData['postData']['birth_day'] == 27){echo 'selected'; } ?>>27日</option>
              <option value="28" <?php if($arrData['postData']['birth_day'] == 28){echo 'selected'; } ?>>28日</option>
              <option value="29" <?php if($arrData['postData']['birth_day'] == 29){echo 'selected'; } ?>>29日</option>
              <option value="30" <?php if($arrData['postData']['birth_day'] == 30){echo 'selected'; } ?>>30日</option>
              <option value="31" <?php if($arrData['postData']['birth_day'] == 31){echo 'selected'; } ?>>31日</option>
            </select>
          </div>
          <div class="input_area">
            <p class="<?php echo $arrData['GetFormData'][5]['form_name']; ?>"><?php echo $arrData['GetFormData'][5]['form_text']; ?></p>
            <input type="email" name="mail" id="mail" value="<?php echo $arrData['postData']['mail']; ?>"/>
          </div>
          <div class="input_area">
            <p class="<?php echo $arrData['GetFGetFormDataorm'][6]['form_name']; ?>"><?php echo $arrData['GetFormData'][6]['form_text']; ?></p>
            <input type="password" name="password" id="password" value="<?php echo $arrData['postData']['password']; ?>"/>
          </div>
          <div class="input_area">
            <p class="<?php echo $arrData['GetFormData'][7]['form_name']; ?>"><?php echo $arrData['GetFormData'][7]['form_text']; ?></p>
            <input type="password" name="check_password" id="check_password" value="<?php echo $arrData['postData']['check_password']; ?>"/>
          </div>
          <div class="input_area">
            <p class="<?php echo $arrData['GetFormData'][8]['form_name']; ?>"><?php echo $arrData['GetFormData'][8]['form_text']; ?></p>
            <select name="w_m" id="w_m">
              <option value="0" <?php if(!(isset($arrData['postData']['w_m']))){ echo 'selected'; } ?>>--選択してください--</option>
              <option value="1" <?php if($arrData['postData']['w_m'] == 1){echo 'selected'; } ?>>男</option>
              <option value="2" <?php if($arrData['postData']['w_m'] == 2){echo 'selected'; } ?>>女</option>
              <option value="3" <?php if($arrData['postData']['w_m'] == 3){echo 'selected'; } ?>>その他</option>
            </select>
          </div>
        </div>
        <div class="submit">
          <input type="submit" id="register_input" value="次へ">
        </div>
      </form>
    </div>
  </body>
