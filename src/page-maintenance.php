<?php get_header(); ?>
<?php
$price_guide_tabs = [
  ['key' => 'engine', 'label' => 'エンジン'],
  ['key' => 'brake', 'label' => 'ブレーキ'],
  ['key' => 'tire', 'label' => 'タイヤ'],
  ['key' => 'other', 'label' => 'その他'],
];

$price_guide_panels = [
  'engine' => [
    [
      'title' => 'エアフィルター',
      'description' => '交換・整備をしないと、エンジンが吸い込む空気の汚れを取るフィルターが目詰りし、エンジンの調子が悪くなったり、出力の低下・燃費の悪化にもなります。',
      'details' => [
        ['label' => '作業時間', 'value' => '10分〜'],
        ['label' => '交換目安', 'value' => '30,000〜50,000km'],
        ['label' => '金額', 'value' => '2,000円〜'],
      ],
    ],
    [
      'title' => 'エンジンオイル',
      'description' => '交換・整備をしないと、オイルの劣化により、潤滑・冷却・清浄・防錆・密封作業が低下し、エンジン各部を痛め、異音・エンジン不調・焼きつき・オーバーヒートなどの原因になります。',
      'details' => [
        ['label' => '作業時間', 'value' => '10分〜'],
        ['label' => '交換目安', 'value' => '3,000〜5,000km毎 または 6ヶ月'],
        ['label' => '金額', 'value' => '600円〜（1Lあたり）'],
      ],
    ],
    [
      'title' => 'オイルエレメント',
      'description' => '交換・整備をしないと、オイルの汚れを取るフィルターが目詰まりし、ろ過されないオイルが各部へ送られるとエンジン内の汚れがひどくなり、エンジン各部を痛めます。',
      'details' => [
        ['label' => '作業時間', 'value' => '10分〜'],
        ['label' => '交換目安', 'value' => '10,000〜15,000km毎 または 年1回'],
        ['label' => '金額', 'value' => '1,300円〜'],
      ],
    ],
    [
      'title' => 'バッテリー交換',
      'description' => '交換・整備をしないと、寿命や充電不足などによりバッテリーが上がり、エンジンがかからなくなったり、走行中にエンジンが止まることも考えられます。',
      'details' => [
        ['label' => '作業時間', 'value' => '10分〜'],
        ['label' => '交換目安', 'value' => '2〜3年毎'],
        ['label' => '金額', 'value' => '3,000円〜'],
      ],
    ],
    [
      'title' => 'スパークプラグ',
      'description' => '交換・整備をしないと、電極の消耗により火花が飛びにくくなりエンジンの調子が悪くなったり、出力・加速の低下や、燃費の悪化にもなります。エンジンがかからなくなることもあります。',
      'details' => [
        ['label' => '作業時間', 'value' => '20分〜'],
        ['label' => '交換目安', 'value' => '10,000〜20,000km毎（特殊プラグを除く）'],
        ['label' => '金額', 'value' => '3,500円〜'],
      ],
    ],
    [
      'title' => 'ファンベルト',
      'description' => '交換・整備をしないと、ゴムの消耗・劣化により張りが緩み、エンジンからキーキー・キュルキュルと異音がでます。切れるとオーバーヒートやバッテリー上がりを起こします。',
      'details' => [
        ['label' => '作業時間', 'value' => '30分'],
        ['label' => '交換目安', 'value' => '異音・ひび割れ亀裂・消耗'],
        ['label' => '金額', 'value' => '5,250円〜'],
      ],
    ],
    [
      'title' => 'タイミングベルト',
      'description' => '交換・整備をしないと、ゴムが劣化して切れ、走行中に急にエンストしてエンジンがかからなくなります。エンジン内でピストンとバルブがぶつかり大きく損傷し、大変高額な修理代となります。',
      'details' => [
        ['label' => '作業時間', 'value' => '180分'],
        ['label' => '交換目安', 'value' => '100,000km毎 または 10年'],
        ['label' => '金額', 'value' => '5,250円〜'],
      ],
    ],
  ],
  'brake' => [
    [
      'title' => 'ブレーキオイル',
      'description' => '交換・整備をしないと、オイルの吸湿・劣化により、ブレーキの効きの低下・ブレーキし部品内部の錆つきが発生します。ブレーキを多用した時にブレーキが効かなくなることもあります。',
      'details' => [
        ['label' => '作業時間', 'value' => '15分〜'],
        ['label' => '交換目安', 'value' => '2年毎（貨物車1年毎）'],
        ['label' => '金額', 'value' => '2,400円〜'],
      ],
    ],
    [
      'title' => 'ブレーキクリーニング',
      'description' => '交換・整備をしないと、汚れや錆・潤滑グリス切れでブレーキ部品の動きが悪くなり、ブレーキの効きの低下・片効き・引きずり・異音が発生します。',
      'details' => [
        ['label' => '作業時間', 'value' => '20分〜'],
        ['label' => '交換目安', 'value' => '2年毎（貨物車1年毎）'],
        ['label' => '金額', 'value' => '5,000円〜'],
      ],
    ],
    [
      'title' => 'ブレーキパッド',
      'description' => '残量が少なくなるとブレーキの効きが悪くなり、使用限度を切るとブレーキローターまで傷め、ブレーキが効かなくなります。',
      'details' => [
        ['label' => '作業時間', 'value' => '30分〜'],
        ['label' => '交換目安', 'value' => '残厚3.0mm以下'],
        ['label' => '金額', 'value' => '6,000円〜'],
      ],
    ],
  ],
  'tire' => [
    [
      'title' => 'タイヤ',
      'description' => '交換・整備をしないと、タイヤゴムの消耗・劣化により、乗り心地の悪化・雨天時のスリップ・高速走行時のパンクさらにブレーキの効きの低下にもつながります。',
      'details' => [
        ['label' => '作業時間', 'value' => '1本15分〜'],
        ['label' => '交換目安', 'value' => '5年 または 残溝2mm以下'],
        ['label' => '金額', 'value' => '1,500円〜'],
      ],
    ],
    [
      'title' => 'タイヤローテーション',
      'description' => '交換・整備をしないと、前後のタイヤは消耗の仕方が違い、4本のタイヤを均等に使えなくなります。また近年はほとんどが前輪駆動車のため、前タイヤのみ早期交換が必要となります。',
      'details' => [
        ['label' => '作業時間', 'value' => '15分〜'],
        ['label' => '交換目安', 'value' => '10,000km または 1年'],
        ['label' => '金額', 'value' => '600円〜（1Lあたり）'],
      ],
    ],
    [
      'title' => 'デフオイル（ディファレンシャルギアオイル）',
      'description' => '交換・整備をしないと、オイルの汚れ、劣化により、ディファレンシャルギアの歯車やベアリングが傷み、異音や振動が出始め、走行に支障が出ます。',
      'details' => [
        ['label' => '作業時間', 'value' => '10分〜'],
        ['label' => '交換目安', 'value' => '50,000km'],
        ['label' => '金額', 'value' => '1,300円〜'],
      ],
    ],
    [
      'title' => 'ドライブシャフトブーツ',
      'description' => '交換・整備をしないと、ブーツの破れによりドライブシャフトの継ぎ手がグリス切れで摩耗し傷み、曲がる時にカラカラ異音や振動が出始め走行に支障が出ます。',
      'details' => [
        ['label' => '作業時間', 'value' => '片側30分〜'],
        ['label' => '交換目安', 'value' => 'ひび割れ亀裂'],
        ['label' => '金額', 'value' => '詳細はお問い合わせください'],
      ],
    ],
    [
      'title' => 'タイロッドエンドブーツ',
      'description' => '交換・整備をしないと、ブーツの破れにより内部のボール継ぎ手がグリス切れで摩耗し傷み、ガタが生じて前タイヤがふらつき走りにくくなります。',
      'details' => [
        ['label' => '作業時間', 'value' => '片側30分〜'],
        ['label' => '交換目安', 'value' => 'ひび割れ亀裂'],
        ['label' => '金額', 'value' => '詳細はお問い合わせください'],
      ],
    ],
  ],
  'other' => [
    'featured' => [
      [
        'title' => 'ランプ(電球)',
        'description' => '交換・整備をしないと、電球の劣化、球切れにより、スモール・ストップ・ウィンカー・テールランプなど、それぞれのライトの役割ができないので事故に繋がります。',
        'details' => [
          ['label' => '作業時間', 'value' => '1箇所 5分〜'],
          ['label' => '交換目安', 'value' => '球切れ・光度不足'],
          ['label' => '金額', 'value' => '500円〜'],
        ],
      ],
      [
        'title' => 'ワイパーゴム・ブレード',
        'description' => '交換・整備をしないと、ワイパーゴムの消耗。劣化により、作動時にビビりや異音が出るだけでなく、拭き残し・ムラで雨天時の視界が悪くなります。',
        'details' => [
          ['label' => '作業時間', 'value' => '1箇所 5分〜'],
          ['label' => '交換目安', 'value' => '1年毎'],
          ['label' => '金額', 'value' => '900円〜'],
        ],
      ],
    ],
    'compact' => [
      [
        'title' => 'オーディオ取付',
        'details' => [
          ['label' => '作業時間', 'value' => '60分'],
          ['label' => '金額', 'value' => '4,000円'],
        ],
      ],
      [
        'title' => 'キーレス電池交換',
        'details' => [
          ['label' => '作業時間', 'value' => '5分'],
          ['label' => '金額', 'value' => '700円'],
        ],
      ],
      [
        'title' => 'カーナビ取付',
        'details' => [
          ['label' => '作業時間', 'value' => '90分〜'],
          ['label' => '金額', 'value' => '15,000円'],
        ],
      ],
    ],
  ],
];
?>
<main class="page-shell">
  <section class="sub-visual sub-visual--maintenance">
    <div class="sub-visual__canvas">
      <div class="sub-visual__image-blank" aria-hidden="true"></div>
      <p class="sub-visual__watermark" aria-hidden="true">MAINTENANCE</p>
      <h1 class="sub-visual__title">メンテナンス</h1>
    </div>
  </section>

  <section class="price-list">
    <div class="inner">
      <div class="price-guide-tabs" data-panel-tabs>
        <div class="price-guide-tabs__tablist" role="tablist" aria-label="メンテナンス項目">
          <?php foreach ($price_guide_tabs as $index => $tab) : ?>
            <button
              class="price-guide-tabs__tab<?php echo $index === 0 ? ' is-active' : ''; ?>"
              type="button"
              role="tab"
              aria-selected="<?php echo $index === 0 ? 'true' : 'false'; ?>"
              aria-controls="price-guide-<?php echo esc_attr($tab['key']); ?>"
              id="price-tab-<?php echo esc_attr($tab['key']); ?>"
              data-panel-tab="<?php echo esc_attr($tab['key']); ?>">
              <span><?php echo esc_html($tab['label']); ?></span>
            </button>
          <?php endforeach; ?>
        </div>

        <?php foreach ($price_guide_tabs as $index => $tab) : ?>
          <div
            class="price-guide-tabs__panel<?php echo $index === 0 ? ' is-active' : ''; ?>"
            id="price-guide-<?php echo esc_attr($tab['key']); ?>"
            role="tabpanel"
            aria-labelledby="price-tab-<?php echo esc_attr($tab['key']); ?>"
            data-panel-content="<?php echo esc_attr($tab['key']); ?>"
            <?php echo $index === 0 ? '' : 'hidden'; ?>>
            <?php if ($tab['key'] === 'other') : ?>
              <div class="price-guide-list">
                <?php foreach ($price_guide_panels['other']['featured'] as $item) : ?>
                  <article class="price-guide-item">
                    <div class="price-guide-item__main">
                      <h2 class="price-guide-item__title"><?php echo esc_html($item['title']); ?></h2>
                      <p class="price-guide-item__description"><?php echo esc_html($item['description']); ?></p>
                    </div>
                    <dl class="price-guide-item__details">
                      <?php foreach ($item['details'] as $detail) : ?>
                        <div class="price-guide-item__detail-row">
                          <dt class="price-guide-item__detail-label"><?php echo esc_html($detail['label']); ?></dt>
                          <dd class="price-guide-item__detail-value"><?php echo esc_html($detail['value']); ?></dd>
                        </div>
                      <?php endforeach; ?>
                    </dl>
                  </article>
                <?php endforeach; ?>
              </div>

              <div class="price-guide-card-grid">
                <?php foreach ($price_guide_panels['other']['compact'] as $item) : ?>
                  <article class="price-guide-card">
                    <h2 class="price-guide-card__title"><?php echo esc_html($item['title']); ?></h2>
                    <dl class="price-guide-card__details">
                      <?php foreach ($item['details'] as $detail) : ?>
                        <div class="price-guide-card__row">
                          <dt class="price-guide-card__label"><?php echo esc_html($detail['label']); ?></dt>
                          <dd class="price-guide-card__value"><?php echo esc_html($detail['value']); ?></dd>
                        </div>
                      <?php endforeach; ?>
                    </dl>
                  </article>
                <?php endforeach; ?>
              </div>
            <?php else : ?>
              <div class="price-guide-list">
                <?php foreach ($price_guide_panels[$tab['key']] as $item) : ?>
                  <article class="price-guide-item">
                    <div class="price-guide-item__main">
                      <h2 class="price-guide-item__title"><?php echo esc_html($item['title']); ?></h2>
                      <p class="price-guide-item__description"><?php echo esc_html($item['description']); ?></p>
                    </div>
                    <dl class="price-guide-item__details">
                      <?php foreach ($item['details'] as $detail) : ?>
                        <div class="price-guide-item__detail-row">
                          <dt class="price-guide-item__detail-label"><?php echo esc_html($detail['label']); ?></dt>
                          <dd class="price-guide-item__detail-value"><?php echo esc_html($detail['value']); ?></dd>
                        </div>
                      <?php endforeach; ?>
                    </dl>
                  </article>
                <?php endforeach; ?>
              </div>
            <?php endif; ?>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>