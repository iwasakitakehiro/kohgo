<?php get_header(); ?>
<?php
$info_grid_rows = [
  [
    'label' => '会社名',
    'value' => ['株式会社オートサービス向後'],
  ],
  [
    'label' => '所在地',
    'value' => ['千葉県茂原市木崎620-2'],
  ],
  [
    'label' => 'TEL',
    'value' => ['0475-22-5581'],
  ],
  [
    'label' => 'FAX',
    'value' => ['0475-36-2321'],
  ],
  [
    'label' => '創業',
    'value' => ['平成18年9月1日'],
  ],
  [
    'label' => '代表者',
    'value' => ['伊藤 善一'],
  ],
  [
    'label' => '事業内容',
    'value' => [
      '新車・中古車販売(古物商・買取業務)',
      '車検・一般整備　鈑金塗装　各種保険',
      'オートローン　ロードサービス',
    ],
    'multiline' => true,
  ],
  [
    'label' => '認証資格',
    'value' => [
      '古物商許可番号　千葉県公安委員会許可第441210001091号',
      '関東運輸支局認証工場3-5126',
      '使用済み自動車引取業者　千葉県登録番号　20121003311',
    ],
    'multiline' => true,
  ],
];
?>
<main class="page-shell">
  <section class="sub-visual sub-visual--company">
    <div class="sub-visual__canvas">
      <div class="sub-visual__image-blank" aria-hidden="true"></div>
      <p class="sub-visual__watermark" aria-hidden="true">COMPANY</p>
      <h1 class="sub-visual__title">会社概要</h1>
    </div>
  </section>

  <section class="info-grid-section">
    <div class="inner">
      <div class="info-grid">
        <?php foreach ($info_grid_rows as $row) : ?>
          <div class="info-grid__row<?php echo !empty($row['multiline']) ? ' info-grid__row--multiline' : ''; ?>">
            <div class="info-grid__label"><?php echo esc_html($row['label']); ?></div>
            <div class="info-grid__value">
              <?php foreach ($row['value'] as $line) : ?>
                <p><?php echo esc_html($line); ?></p>
              <?php endforeach; ?>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>