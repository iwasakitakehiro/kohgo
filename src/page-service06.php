<?php get_header(); ?>
<main class="page-shell">
  <section class="sub-visual sub-visual--service">
    <div class="sub-visual__canvas">
      <div class="sub-visual__image-blank" aria-hidden="true"></div>

      <h1 class="sub-visual__title">タイヤ交換</h1>
    </div>
  </section>

  <section class="feature-checklist">
    <div class="inner">
      <div class="feature-checklist__heading">
        <p class="feature-checklist__lead">タイヤ知識ゼロでもおまかせください！安心のディーラー品質、うれしい価格で。</p>
        <h2 class="feature-checklist__title">オートサービス向後のタイヤ交換</h2>
      </div>
      <div class="feature-checklist__text">
        <p>
          店舗や工場にお越しにならなくても、愛車の点検・整備ができます。<br>
          お見積りや技術的な相談もメールやお電話でやりとりができるので便利！出張・引き取り納車にも対応しています。<br>
          対面は「カギの受け渡し」と「お支払い」の時だけです。
        </p>
      </div>
  </section>

  <section class="select-plan">
    <div class="inner">
      <div class="plan-choice">
        <div class="plan-choice__heading">
          <p class="plan-choice__lead">お客様に合わせた価格帯と品質を！</p>
          <h2 class="plan-choice__title">３つのプランから最適なタイヤを選択</h2>
        </div>

        <div class="plan-choice__grid">
          <article class="plan-choice-card plan-choice-card--gold">
            <div class="plan-choice-card__icon" aria-hidden="true"></div>
            <h3 class="plan-choice-card__title">ゴールドプラン</h3>
            <div class="plan-choice-card__text">
              <p>アジアンブランド厳選タイヤです。</p>
              <p>「安さが一番」「メーカーやブランドにはこだわらない」</p>
              <p>という方のためのプランです。</p>
            </div>
          </article>

          <article class="plan-choice-card plan-choice-card--platinum">
            <span class="plan-choice-card__badge">人気<br>No.1</span>
            <div class="plan-choice-card__icon" aria-hidden="true"></div>
            <h3 class="plan-choice-card__title">プラチナプラン</h3>
            <div class="plan-choice-card__text">
              <p>欧米ブランドの特選タイヤです。</p>
              <p>「有名メーカーのタイヤをおトクなプライスで購入したい」</p>
              <p>という方のためのプランです。</p>
            </div>
          </article>

          <article class="plan-choice-card plan-choice-card--diamond">
            <div class="plan-choice-card__icon" aria-hidden="true"></div>
            <h3 class="plan-choice-card__title">ダイヤモンドプラン</h3>
            <div class="plan-choice-card__text">
              <p>国内ブランドメーカーのタイヤです。</p>
              <p>「安心の国内ブランドにこだわりたい」</p>
              <p>という方のためのプランです。</p>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>
  <?php
  $tire_plan_labels = [
    ['badge' => '安さ重視', 'name' => 'ゴールドプラン'],
    ['badge' => 'コスパ最強', 'name' => 'プラチナプラン'],
    ['badge' => '品質重視', 'name' => 'ダイヤモンドプラン'],
  ];

  $summer_featured_groups = [
    [
      'category' => '軽自動車',
      'examples' => ['N-BOX・タント', 'ワゴンR など'],
      'sizes' => [
        ['size' => '155/65R13', 'prices' => ['9,790円', '17,490円', '26,290円']],
        ['size' => '155/65R14', 'prices' => ['16,390円', '21,890円', '32,890円']],
      ],
    ],
    [
      'category' => '普通自動車',
      'examples' => ['プリウス・ノア', 'ヴォクシー など'],
      'sizes' => [
        ['size' => '195/65R15', 'prices' => ['24,090円', '37,290円', '52,690円']],
        ['size' => '205/60R16', 'prices' => ['30,690円', '48,290円', '65,890円']],
      ],
    ],
  ];

  $summer_standard_groups = [
    [
      'category' => '13インチ/軽',
      'sizes' => [
        ['size' => '145/80R13', 'prices' => ['13,090円', '17,490円', '24,090円']],
      ],
    ],
    [
      'category' => '14インチ/軽',
      'sizes' => [
        ['size' => '165/55R14', 'prices' => ['16,390円', '24,090円', '41,690円']],
      ],
    ],
    [
      'category' => '15インチ/軽',
      'sizes' => [
        ['size' => '165/55R15', 'prices' => ['18,590円', '27,390円', '43,890円']],
        ['size' => '165/60R14', 'prices' => ['24,090円', '39,490円', '46,090円']],
      ],
    ],
    [
      'category' => '14インチ',
      'sizes' => [
        ['size' => '165/70R14', 'prices' => ['24,090円', '29,590円', '37,290円']],
        ['size' => '165/65R14', 'prices' => ['21,890円', '30,690円', '37,290円']],
        ['size' => '175/70R14', 'prices' => ['21,890円', '30,690円', '36,190円']],
      ],
    ],
    [
      'category' => '15インチ',
      'sizes' => [
        ['size' => '175/65R15', 'prices' => ['26,290円', '35,090円', '50,490円']],
        ['size' => '185/60R15', 'prices' => ['27,390円', '37,290円', '50,490円']],
        ['size' => '185/65R15', 'prices' => ['25,190円', '37,290円', '50,490円']],
      ],
    ],
    [
      'category' => '16インチ',
      'sizes' => [
        ['size' => '205/55R16', 'prices' => ['29,590円', '48,290円', '65,890円']],
        ['size' => '195/60R16', 'prices' => ['32,890円', '49,390円', '62,590円']],
        ['size' => '215/60R16', 'prices' => ['32,890円', '49,390円', '65,890円']],
        ['size' => '215/65R16', 'prices' => ['36,190円', '49,390円', '65,890円']],
      ],
    ],
    [
      'category' => '17インチ',
      'sizes' => [
        ['size' => '215/45R17', 'prices' => ['32,890円', '59,290円', '83,490円']],
        ['size' => '215/50R17', 'prices' => ['35,090円', '57,090円', '84,590円']],
        ['size' => '215/55R17', 'prices' => ['35,090円', '59,290円', '83,490円']],
        ['size' => '215/60R17', 'prices' => ['38,390円', '59,290円', '81,290円']],
      ],
    ],
    [
      'category' => '18インチ',
      'sizes' => [
        ['size' => '225/45R', 'prices' => ['39,490円', '65,890円', '105,490円']],
      ],
    ],
    [
      'category' => '12インチ/バン',
      'sizes' => [
        ['size' => '145/80R12 (145R12)', 'prices' => ['13,090円', '17,490円', '19,690円']],
      ],
    ],
    [
      'category' => '15インチ/バン',
      'sizes' => [
        ['size' => '190/80R15 107/105', 'prices' => ['39,490円', '49,290円', '70,290円']],
      ],
    ],
  ];

  $winter_featured_groups = [
    [
      'category' => '軽自動車',
      'examples' => ['N-BOX・タント', 'ワゴンR など'],
      'sizes' => [
        ['size' => '155/65R13', 'prices' => ['13,090円', '19,690円', '25,190円']],
        ['size' => '155/65R14', 'prices' => ['18,590円', '24,090円', '28,490円']],
      ],
    ],
    [
      'category' => '普通自動車',
      'examples' => ['プリウス・ノア', 'ヴォクシー など'],
      'sizes' => [
        ['size' => '195/65R15', 'prices' => ['28,490円', '39,490円', '61,490円']],
        ['size' => '205/60R16', 'prices' => ['35,090円', '52,690円', '85,690円']],
      ],
    ],
  ];

  $winter_standard_groups = [
    [
      'category' => '12インチ/バン',
      'sizes' => [
        ['size' => '145/80R12(145R12)', 'prices' => ['15,290円', '18,590円', '20,790円']],
      ],
    ],
    [
      'category' => '13インチ/軽',
      'sizes' => [
        ['size' => '145/80R13', 'prices' => ['14,190円', '19,690円', '24,090円']],
      ],
    ],
    [
      'category' => '15インチ/軽',
      'sizes' => [
        ['size' => '165/55R15', 'prices' => ['28,490円', '48,290円', '72,490円']],
        ['size' => '165/60R15', 'prices' => ['28,490円', '46,090円', '69,190円']],
      ],
    ],
    [
      'category' => '14インチ',
      'sizes' => [
        ['size' => '165/65R14', 'prices' => ['20,790円', '32,890円', '46,090円']],
        ['size' => '175/65R14', 'prices' => ['21,890円', '32,890円', '48,290円']],
      ],
    ],
    [
      'category' => '15インチ',
      'sizes' => [
        ['size' => '185/60R15', 'prices' => ['30,690円', '43,890円', '57,090円']],
        ['size' => '175/65R15', 'prices' => ['26,290円', '39,490円', '57,090円']],
        ['size' => '185/65R15', 'prices' => ['28,490円', '42,790円', '65,890円']],
      ],
    ],
    [
      'category' => '16インチ',
      'sizes' => [
        ['size' => '205/55R16', 'prices' => ['36,190円', '63,690円', '81,290円']],
        ['size' => '215/60R16', 'prices' => ['37,290円', '59,290円', '79,090円']],
        ['size' => '215/65R16', 'prices' => ['39,490円', '61,490円', '87,890円']],
      ],
    ],
    [
      'category' => '17インチ',
      'sizes' => [
        ['size' => '215/55R17', 'prices' => ['43,890円', '63,690円', '87,890円']],
        ['size' => '215/60R17', 'prices' => ['37,290円', '60,390円', '98,890円']],
        ['size' => '225/65R17', 'prices' => ['41,690円', '65,890円', '96,690円']],
      ],
    ],
    [
      'category' => '15インチ/バン',
      'sizes' => [
        ['size' => '190/80R15 107/105', 'prices' => ['41,690円', '53,790円', '83,490円']],
      ],
    ],
  ];
  ?>
  <section class="tire-price">
    <div class="inner">
      <div class="tire-price-tabs" data-tire-price-tabs>
        <div class="tire-price-tabs__tablist" role="tablist" aria-label="タイヤ種別">
          <button class="tire-price-tabs__tab is-active" type="button" role="tab" aria-selected="true" aria-controls="tire-price-summer" id="tire-tab-summer" data-tire-tab="summer">
            <span class="tire-price-tabs__tab-icon tire-price-tabs__tab-icon--summer" aria-hidden="true"></span>
            <span>サマータイヤ</span>
          </button>
          <button class="tire-price-tabs__tab" type="button" role="tab" aria-selected="false" aria-controls="tire-price-winter" id="tire-tab-winter" data-tire-tab="winter">
            <span class="tire-price-tabs__tab-icon tire-price-tabs__tab-icon--winter" aria-hidden="true"></span>
            <span>スタッドレスタイヤ</span>
          </button>
        </div>

        <div class="tire-price-tabs__panel is-active" id="tire-price-summer" role="tabpanel" aria-labelledby="tire-tab-summer" data-tire-panel="summer">
          <div class="tire-price-table-wrap">
            <table class="tire-price-table tire-price-table--summer">
              <thead>
                <tr>
                  <th colspan="2" class="tire-price-table__stub"></th>
                  <?php foreach ($tire_plan_labels as $index => $plan) : ?>
                    <th class="tire-price-table__plan tire-price-table__plan--<?php echo esc_attr($index === 0 ? 'gold' : ($index === 1 ? 'platinum' : 'diamond')); ?>">
                      <span class="tire-price-table__plan-badge"><?php echo esc_html($plan['badge']); ?></span>
                      <span class="tire-price-table__plan-name"><?php echo esc_html($plan['name']); ?></span>
                    </th>
                  <?php endforeach; ?>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($summer_featured_groups as $group) : ?>
                  <?php foreach ($group['sizes'] as $rowIndex => $row) : ?>
                    <tr>
                      <?php if ($rowIndex === 0) : ?>
                        <th class="tire-price-table__category tire-price-table__category--featured" rowspan="<?php echo esc_attr(count($group['sizes'])); ?>">
                          <div class="tire-price-table__vehicle-image" aria-hidden="true"></div>
                          <p class="tire-price-table__vehicle-title"><?php echo esc_html($group['category']); ?></p>
                          <p class="tire-price-table__vehicle-example">
                            <?php foreach ($group['examples'] as $example) : ?>
                              <span><?php echo esc_html($example); ?></span>
                            <?php endforeach; ?>
                          </p>
                        </th>
                      <?php endif; ?>
                      <th class="tire-price-table__size tire-price-table__size--featured"><?php echo esc_html($row['size']); ?></th>
                      <?php foreach ($row['prices'] as $priceIndex => $price) : ?>
                        <td class="tire-price-table__price tire-price-table__price--featured tire-price-table__price--<?php echo esc_attr($priceIndex === 0 ? 'gold' : ($priceIndex === 1 ? 'platinum' : 'diamond')); ?>">
                          <span class="tire-price-table__set">4本セット</span>
                          <span class="tire-price-table__amount"><?php echo esc_html($price); ?></span>
                        </td>
                      <?php endforeach; ?>
                    </tr>
                  <?php endforeach; ?>
                <?php endforeach; ?>

                <?php foreach ($summer_standard_groups as $group) : ?>
                  <?php foreach ($group['sizes'] as $rowIndex => $row) : ?>
                    <tr>
                      <?php if ($rowIndex === 0) : ?>
                        <th class="tire-price-table__category tire-price-table__category--compact" rowspan="<?php echo esc_attr(count($group['sizes'])); ?>">
                          <?php echo esc_html($group['category']); ?>
                        </th>
                      <?php endif; ?>
                      <th class="tire-price-table__size tire-price-table__size--compact"><?php echo esc_html($row['size']); ?></th>
                      <?php foreach ($row['prices'] as $priceIndex => $price) : ?>
                        <td class="tire-price-table__price tire-price-table__price--compact tire-price-table__price--<?php echo esc_attr($priceIndex === 0 ? 'gold' : ($priceIndex === 1 ? 'platinum' : 'diamond')); ?>">
                          <span class="tire-price-table__amount"><?php echo esc_html($price); ?></span>
                        </td>
                      <?php endforeach; ?>
                    </tr>
                  <?php endforeach; ?>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>

        <div class="tire-price-tabs__panel" id="tire-price-winter" role="tabpanel" aria-labelledby="tire-tab-winter" data-tire-panel="winter" hidden>
          <div class="tire-price-table-wrap">
            <table class="tire-price-table tire-price-table--winter">
              <thead>
                <tr>
                  <th colspan="2" class="tire-price-table__stub"></th>
                  <?php foreach ($tire_plan_labels as $index => $plan) : ?>
                    <th class="tire-price-table__plan tire-price-table__plan--<?php echo esc_attr($index === 0 ? 'gold' : ($index === 1 ? 'platinum' : 'diamond')); ?>">
                      <span class="tire-price-table__plan-badge"><?php echo esc_html($plan['badge']); ?></span>
                      <span class="tire-price-table__plan-name"><?php echo esc_html($plan['name']); ?></span>
                    </th>
                  <?php endforeach; ?>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($winter_featured_groups as $group) : ?>
                  <?php foreach ($group['sizes'] as $rowIndex => $row) : ?>
                    <tr>
                      <?php if ($rowIndex === 0) : ?>
                        <th class="tire-price-table__category tire-price-table__category--featured" rowspan="<?php echo esc_attr(count($group['sizes'])); ?>">
                          <div class="tire-price-table__vehicle-image" aria-hidden="true"></div>
                          <p class="tire-price-table__vehicle-title"><?php echo esc_html($group['category']); ?></p>
                          <p class="tire-price-table__vehicle-example">
                            <?php foreach ($group['examples'] as $example) : ?>
                              <span><?php echo esc_html($example); ?></span>
                            <?php endforeach; ?>
                          </p>
                        </th>
                      <?php endif; ?>
                      <th class="tire-price-table__size tire-price-table__size--featured"><?php echo esc_html($row['size']); ?></th>
                      <?php foreach ($row['prices'] as $priceIndex => $price) : ?>
                        <td class="tire-price-table__price tire-price-table__price--featured tire-price-table__price--<?php echo esc_attr($priceIndex === 0 ? 'gold' : ($priceIndex === 1 ? 'platinum' : 'diamond')); ?>">
                          <span class="tire-price-table__set">4本セット</span>
                          <span class="tire-price-table__amount"><?php echo esc_html($price); ?></span>
                        </td>
                      <?php endforeach; ?>
                    </tr>
                  <?php endforeach; ?>
                <?php endforeach; ?>

                <?php foreach ($winter_standard_groups as $group) : ?>
                  <?php foreach ($group['sizes'] as $rowIndex => $row) : ?>
                    <tr>
                      <?php if ($rowIndex === 0) : ?>
                        <th class="tire-price-table__category tire-price-table__category--compact" rowspan="<?php echo esc_attr(count($group['sizes'])); ?>">
                          <?php echo esc_html($group['category']); ?>
                        </th>
                      <?php endif; ?>
                      <th class="tire-price-table__size tire-price-table__size--compact"><?php echo esc_html($row['size']); ?></th>
                      <?php foreach ($row['prices'] as $priceIndex => $price) : ?>
                        <td class="tire-price-table__price tire-price-table__price--compact tire-price-table__price--<?php echo esc_attr($priceIndex === 0 ? 'gold' : ($priceIndex === 1 ? 'platinum' : 'diamond')); ?>">
                          <span class="tire-price-table__amount"><?php echo esc_html($price); ?></span>
                        </td>
                      <?php endforeach; ?>
                    </tr>
                  <?php endforeach; ?>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>

        <p class="tire-price-tabs__note">※表示価格はすべて税込、4本セットの価格になります。</p>
      </div>
    </div>
  </section>
  <section class="message-banner page-block">
    <div class="inner">
      <div class="message-banner__inner">
        <div class="message-banner__heading">
          <span class="message-banner__accent message-banner__accent--left" aria-hidden="true"></span>
          <div class="message-banner__title-wrap">
            <p class="message-banner__eyebrow">カーラッピングのことなら、</p>
            <h2 class="message-banner__title">オートサービス向後におまかせください</h2>
          </div>
          <span class="message-banner__accent message-banner__accent--right" aria-hidden="true"></span>
        </div>
        <div class="message-banner__body">
          <p>オートサービス向後では、メタリック・マット・クローム・カーボン調など、100色以上の豊富なカラーバリエーションをご用意し、お客様の理想に合わせた一台をお届けします。</p>
          <p>ボディ全体のフルラッピングはもちろん、ルーフやボンネットなどの部分施工にも対応可能です。</p>
          <p>外観のイメージチェンジだけでなく、飛び石や紫外線、汚れからボディを守る効果も期待でき、新車の美しさを長く保つことができます。</p>
          <p>剥がせば元の状態に戻せるため、車の価値を下げにくい点も大きな魅力です。</p>
          <p>個人のお客様から法人様の広告ラッピングまで、幅広く対応しておりますので、ぜひお気軽にご相談ください。</p>
        </div>
        <div class="message-banner__foot">
          <img src="<?= get_template_directory_uri(); ?>/img/global/footer-img.svg">
        </div>
      </div>
    </div>
  </section>

</main>
<?php get_footer(); ?>