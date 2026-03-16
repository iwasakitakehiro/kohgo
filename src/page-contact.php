<?php
require_once(dirname(__FILE__) . "/contact/view.php");
require_once(dirname(__FILE__) . "/contact/controller.php");
require_once(dirname(__FILE__) . "/contact/model.php");

$blank = true;
$send = false;


if (empty($_POST)) {
  $model = new Model();
  $view = new View();
  $inputs = $model->contents();
  $items = isset($_SESSION["items"]) ? $_SESSION["items"] : array();
}

if (isset($_POST['check'])) {
  session_start();

  $model = new Model();
  $view = new View();
  $inputs = $model->contents();
  $items = isset($_SESSION["items"]) ? $_SESSION["items"] : array();
  $controller = new Controller();
  $err = $controller->validate($inputs);
  if (!isset($_POST['policy'])) {
    $policy = "プライバシーポリシーに同意してください";
  }
  $items = $_POST;
  if (empty($err) && isset($_POST['policy'])) {

    $blank = false;
    $_SESSION["items"] = $items;
  }
}

if (isset($_POST['back'])) {
  session_start();
  $model = new Model();
  $view = new View();
  $inputs = $model->contents();
  $items = isset($_SESSION["items"]) ? $_SESSION["items"] : array();
}

if (isset($_POST['send'])) {
  session_start();
  $model = new Model();
  $view = new View();
  $controller = new Controller();
  $inputs = $model->contents();
  $items = $_SESSION["items"];

  $message = <<<EOT

  ■ お名前
    $items[username]

  ■ ふりがな
    $items[ruby]

  ■ メールアドレス
    $items[mail01]

  ■ 電話番号
    {$items['tel'][0]}-{$items['tel'][1]}-{$items['tel'][2]}

  ■ お問い合わせ内容
    $items[comment]

EOT;

  $client_message = $view->client_message($message = $message);

  $user_message = $view->user_message(
    $message = $message,
    $client_name = Model::$client_name,
    $name = $items['username'],
    $client_address = Model::$client_bunch
  );

  $sent = $controller->send(
    $client_name = Model::$client_name,
    $client_address = Model::$client_address,
    $client_message = $client_message,
    $user_message = $user_message,
    $mail = $items['mail01'],
    $items = $items
  );

  if ($sent) {
    $send = true;
    $blank = false;
    session_destroy();
  } else {
    exit("申し訳ございませんエラーが発生しました");
  }
}


?>
<?= get_header(); ?>
<script src="https://yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8"></script>
<main class="under-page">
  <section class="sub-visual sub-visual--service">
    <div class="sub-visual__canvas">
      <div class="sub-visual__image-blank" aria-hidden="true"></div>
      <p class="sub-visual__watermark" aria-hidden="true">RECRUIT</p>
      <h1 class="sub-visual__title">採用情報</h1>
    </div>
  </section>
  <section>
    <div class="contact-message">
      <?php if ($blank) : ?>
        <div class="contact-message__hello">
          <p>
            お車について気になることはなんでもご相談ください。<br>内容を確認し、担当者よりメールまたはお電話にてご連絡させていただきます。
          </p>
        </div>
      <?php elseif (!$blank && !$send) : ?>
        <div class="contact-message__hello">
          <p>以下の内容でよろしければ、「送信する」ボタンを押してください。<br> 内容を修正する場合は「修正する」ボタンから入力画面にお戻りください。</p>
        </div>
      <?php elseif (!$blank && $send) : ?>
        <div class="thankyou-wrap">
          <div class="compleate">
            <p>お問い合わせを受け付けました</p>
          </div>
          <div class="contact-message__hello">
            <p>
              このたびはお問い合わせいただき、誠にありがとうございます。<br>
              担当者が内容を確認のうえ、後日ご連絡させていただきます。<br>
              しばらくお待ちくださいますようお願い申し上げます。

            </p>
          </div>
          <div class="caution">
            <p>
              数日経過しても返信がない場合は、通信エラー等の可能性がございます。<br>
              恐れ入りますがお電話にてご連絡ください。
            </p>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </section>
  <section class="contact-page-section" <?php if (!$blank && $send) echo "style='display:none;'"; ?>>
    <div class="inner">
      <div class="contact-form-panel">
        <form action="" method="post" class="h-adr">
          <div class="page-contact-contents">
            <div class="contact-wrap">
              <?php if ($blank) : ?>
                <span class="p-country-name" style="display:none;">Japan</span>
                <?php foreach ($inputs as $key => $value) : ?>
                  <?php
                  echo $view->{$value['type']}(
                    $name = $inputs[$key],
                    $class = isset($value['class']) ? $value['class'] : null,
                    $arr = $value['selects'] ? $value['selects'] : null,
                    $unit = !empty($value['unit']) ? $value['unit'] : null,
                    $error = !empty($err[$value['name']]) ? $err[$value['name']] : null,
                    $input_value = isset($items[$value['name']]) ? $items[$value['name']] : null,
                    $placeholder = isset($value['placeholder']) ? $value['placeholder'] : null,
                  );
                  ?>
                <?php endforeach; ?>
            </div>
          </div>
          <div class="form-foot">
            <div>
              <div class="contact-policy policy">
                <input name="policy" id="policy" type="checkbox" <?php if (isset($_POST['policy'])) echo 'checked'; ?>>
                <label for="policy"><a href="<?= get_home_url(); ?>/plivacy-policy">プライバシーポリシー</a>に同意のうえ、送信してください。</label>
                <?php if (isset($policy)) : ?>
                  <p class="contact-field__error"><?= $policy ?></p>
                <?php endif; ?>
              </div>
              <div class="contact-actions">
                <button type="submit" class="contact-actions__button contact-actions__button--check check" name="check"><span>送信内容を確認する</span><span class="contact-actions__icon" aria-hidden="true">&rarr;</span></button>
              </div>
            </div>
          </div>
        <?php elseif (!$blank && !$send) : ?>
          <?php foreach ($inputs as $key => $value) : ?>
            <?php
                  switch ($inputs[$key]["type"]) {
                    case 'radio':
                      if ($items[$value['name'] . '_text']) {
                        echo $view->confirm(
                          $name = $inputs[$key],
                          $input = $items[$value['name'] . '_text']
                        );
                      } else {
                        echo $view->confirm(
                          $name = $inputs[$key],
                          $input = $items[$value['name']]
                        );
                      }
                      break;
                    case 'checkbox':
                      if ($items[$value['name'] . '_text']) {
                        $_SESSION['items'][$value['name']]['text'] = $items[$value['name'] . '_text'];
                        $items[$value['name']]['text'] = $items[$value['name'] . '_text'];
                        echo $view->confirm(
                          $name = $inputs[$key],
                          $input = $items[$value['name']]
                        );
                      } else {
                        echo $view->confirm(
                          $name = $inputs[$key],
                          $input = $items[$value['name']]
                        );
                      }
                      break;
                    default:
                      echo $view->confirm(
                        $name = $inputs[$key],
                        $input = $items[$value['name']]
                      );
                  }
            ?>
          <?php endforeach; ?>
          <div class="contact-actions contact-actions--confirm">
            <button type="submit" class="contact-actions__button contact-actions__button--back back" name="back"><span class="contact-actions__icon" aria-hidden="true">&larr;</span><span>内容を修正する</span></button>
            <button type="submit" class="contact-actions__button contact-actions__button--send send" name="send"><span>送信する</span><span class="contact-actions__icon" aria-hidden="true">&rarr;</span></button>
          </div>
        <?php elseif (!$blank && $send) : ?>

        <?php endif; ?>
        </form>
      </div>
    </div>
  </section>
</main>
<?= get_footer(); ?>