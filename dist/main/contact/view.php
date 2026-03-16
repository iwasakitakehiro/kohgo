<?php

class View
{
  public function __construct() {}

  public function client_message($message)
  {
    $text = "";
    $text .= <<<EOT
ホームページからお問い合わせがありました。
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

$message

━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
EOT;

    return $text;
  }

  public function user_message($message, $client_name, $name, $client_address)
  {
    $text = "";
    $text .= <<<EOT
$name 様

このたびは、$client_name にお問い合わせいただき、ありがとうございます。
内容を確認のうえ、担当者よりご連絡いたしますので、しばらくお待ちください。

【お問い合わせ内容】
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

$message

━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
$client_name
$client_address
EOT;

    return $text;
  }

  private function requiredMark($name)
  {
    return !empty($name['required']) ? '<span class="contact-field__required">*</span>' : '';
  }

  private function errorHtml($error)
  {
    if (empty($error)) {
      return '';
    }

    return "<p class='contact-field__error'>{$error}</p>";
  }

  private function renderField($name, $controlHtml, $error = null, $extraClass = '')
  {
    $class = 'contact-field';
    if (!empty($error)) {
      $class .= ' contact-field--error';
    }
    if ($extraClass !== '') {
      $class .= ' ' . $extraClass;
    }

    return "
      <div class='{$class}'>
        <label class='contact-field__label'>
          <span>{$name['label']}</span>
          {$this->requiredMark($name)}
        </label>
        {$controlHtml}
        {$this->errorHtml($error)}
      </div>
    ";
  }

  public function confirm($name, $input)
  {
    $display = '';

    switch ($name['type']) {
      case 'tel':
        if (is_array($input)) {
          $display = implode('-', array_filter($input, static function ($value) {
            return $value !== '';
          }));
        } else {
          $display = $input;
        }
        break;
      case 'address':
        if (is_array($input)) {
          $post = '';
          if (!empty($input['post']) && is_array($input['post'])) {
            $post = implode('-', array_filter($input['post']));
          }
          $display = trim($post . "\n" . ($input['bunch'] ?? ''));
        }
        break;
      case 'checkbox':
        if (is_array($input)) {
          $display = implode('、', array_filter($input, static function ($value) {
            return !is_array($value) && $value !== '';
          }));
        } else {
          $display = $input;
        }
        break;
      case 'file':
        $display = is_array($input) && isset($input['name']) ? $input['name'] : '';
        break;
      default:
        $display = is_array($input) ? implode(' ', $input) : $input;
        break;
    }

    $valueClass = $name['type'] === 'textarea' ? 'contact-field__confirm-value contact-field__confirm-value--message' : 'contact-field__confirm-value';
    $controlHtml = "<div class='{$valueClass}'><p>" . nl2br((string) $display) . "</p></div>";

    return $this->renderField($name, $controlHtml);
  }

  public function text($name, $class = null, $arr = null, $unit = null, $error = null, $input_value = null, $placeholder = null)
  {
    $controlHtml = "<input type='text' class='contact-field__input {$class}' name='{$name['name']}' value='{$input_value}' placeholder='{$placeholder}'>";
    return $this->renderField($name, $controlHtml, $error);
  }

  public function textarea($name, $class = null, $arr = null, $unit = null, $error = null, $input_value = null, $placeholder = null)
  {
    $controlHtml = "<textarea class='contact-field__textarea' name='{$name['name']}' placeholder='{$placeholder}'>{$input_value}</textarea>";
    return $this->renderField($name, $controlHtml, $error);
  }

  public function mail($name, $class = null, $arr = null, $unit = null, $error = null, $input_value = null, $placeholder = null)
  {
    $controlHtml = "<input type='text' class='contact-field__input' name='{$name['name']}' value='{$input_value}' placeholder='{$placeholder}'>";
    return $this->renderField($name, $controlHtml, $error);
  }

  public function tel($name, $class = null, $arr = null, $unit = null, $error = null, $input_value = null, $placeholder = null)
  {
    if ($input_value) {
      $arr = $input_value;
    }

    $value = '';
    if (is_array($arr)) {
      $value = implode('-', array_filter($arr, static function ($item) {
        return $item !== '';
      }));
    }

    $controlHtml = "<input type='text' class='contact-field__input' name='{$name['name']}[0]' value='{$value}' placeholder='{$placeholder}'>";
    return $this->renderField($name, $controlHtml, $error);
  }

  public function select($name, $class = null, $arr = null, $unit = null, $error = null, $input_value = null)
  {
    $options = '';
    foreach ($arr as $index => $value) {
      $selected = isset($input_value) && $value == $input_value ? 'selected' : '';
      $optionValue = $index === 0 ? '' : $value;
      $options .= "<option value='{$optionValue}' {$selected}>{$value}</option>";
    }

    $controlHtml = "<select class='contact-field__input' name='{$name['name']}'>{$options}</select>";
    return $this->renderField($name, $controlHtml, $error);
  }

  public function address($name, $class = null, $arr = null, $unit = null, $error = null, $input_value = null, $placeholder = null)
  {
    if ($input_value) {
      $arr = $input_value;
    }

    $post1 = $arr['post'][0] ?? '';
    $post2 = $arr['post'][1] ?? '';
    $bunch = $arr['bunch'] ?? '';

    $controlHtml = "
      <div class='contact-field__address'>
        <div class='contact-field__address-post'>
          <input type='text' class='contact-field__input p-postal-code' size='3' maxlength='3' name='{$name['name']}[post][0]' value='{$post1}' placeholder='000'>
          <input type='text' class='contact-field__input p-postal-code' size='4' maxlength='4' name='{$name['name']}[post][1]' value='{$post2}' placeholder='0000'>
        </div>
        <input type='text' class='contact-field__input p-region p-locality p-street-address p-extended-address' name='{$name['name']}[bunch]' value='{$bunch}' placeholder='{$placeholder}'>
      </div>
    ";

    return $this->renderField($name, $controlHtml, $error);
  }

  public function file($name, $class = null, $arr = null, $unit = null, $error = null, $input_value = null)
  {
    $controlHtml = "<input type='file' class='contact-field__input' name='{$name['name']}'>";
    return $this->renderField($name, $controlHtml, $error);
  }

  public function radio($name, $class = null, $arr = null, $unit = null, $error = null, $input_value = null)
  {
    $items = '';
    foreach ($arr as $value) {
      $checked = isset($input_value) && $value['label'] == $input_value ? 'checked' : '';
      $items .= "<label class='contact-field__choice'><input type='radio' name='{$name['name']}' value='{$value['label']}' {$checked}><span>{$value['label']}</span></label>";
    }
    $controlHtml = "<div class='contact-field__choices'>{$items}</div>";
    return $this->renderField($name, $controlHtml, $error);
  }

  public function checkbox($name, $class = null, $arr = null, $unit = null, $error = null, $input_value = null)
  {
    $items = '';
    foreach ($arr as $value) {
      $checked = isset($input_value[$value['label']]) ? 'checked' : '';
      $items .= "<label class='contact-field__choice'><input type='checkbox' name='{$name['name']}[]' value='{$value['label']}' {$checked}><span>{$value['label']}</span></label>";
    }
    $controlHtml = "<div class='contact-field__choices'>{$items}</div>";
    return $this->renderField($name, $controlHtml, $error);
  }
}
