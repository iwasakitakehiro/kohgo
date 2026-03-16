<?php get_header(); ?>
<?php
if (have_posts()) :
  while (have_posts()) : the_post();
    $terms = get_the_category(get_the_ID());
    $category_name = '';
    $category_slug = '';

    if ($terms && !is_wp_error($terms)) {
      $category_name = $terms[0]->name;
      $category_slug = $terms[0]->slug;
    }

    $page_for_posts_id = (int) get_option('page_for_posts');
    $archive_url = $page_for_posts_id ? get_permalink($page_for_posts_id) : home_url('/');
?>
    <main>
      <section class="single-page">
        <div class="single-page__tools pc-show" aria-label="Tools">
          <a class="single-page__tool" href="<?= esc_url(home_url('/contact')); ?>" aria-label="お問い合わせ">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M3 5.5C3 4.67157 3.67157 4 4.5 4H15.5C16.3284 4 17 4.67157 17 5.5V14.5C17 15.3284 16.3284 16 15.5 16H4.5C3.67157 16 3 15.3284 3 14.5V5.5Z" stroke="currentColor" stroke-width="1.4" />
              <path d="M4 6L9.03925 10.0314C9.62338 10.4987 10.4565 10.4987 11.0406 10.0314L16 6" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" />
            </svg>
          </a>
          <a class="single-page__tool" href="#" aria-label="Instagram">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="4" y="4" width="12" height="12" rx="3" stroke="currentColor" stroke-width="1.4" />
              <circle cx="10" cy="10" r="3" stroke="currentColor" stroke-width="1.4" />
              <circle cx="13.6" cy="6.4" r="0.9" fill="currentColor" />
            </svg>
          </a>
          <a class="single-page__tool" href="#" aria-label="TikTok">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M11.5 4V10.7C11.0149 10.2488 10.366 9.97222 9.65217 9.97222C8.13817 9.97222 6.91304 11.1974 6.91304 12.7114C6.91304 14.2254 8.13817 15.4505 9.65217 15.4505C11.1662 15.4505 12.3913 14.2254 12.3913 12.7114V7.51852C12.9653 8.06671 13.7426 8.40367 14.5986 8.40367V6.77778C13.1174 6.77778 11.913 5.57336 11.913 4.0922V4H11.5Z" fill="currentColor" />
            </svg>
          </a>
          <span class="single-page__tools-label">TOOLS</span>
        </div>

        <div class="inner">
          <article class="single-page__article">
            <div class="single-page__header">
              <?php if ($category_name !== '') : ?>
                <span class="top-news__category top-news__category--<?= esc_attr($category_slug); ?>">
                  <?= esc_html($category_name); ?>
                </span>
              <?php endif; ?>
              <h1 class="single-page__title"><?php the_title(); ?></h1>
              <p class="single-page__date"><?php the_time('Y.m.d'); ?></p>
            </div>

            <div class="single-page__hero">
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('large'); ?>
              <?php else : ?>
                <div class="single-page__image-blank" aria-hidden="true"></div>
              <?php endif; ?>
            </div>

            <div class="single-page__content entry-content">
              <?php the_content(); ?>
            </div>

            <div class="single-page__footer">
              <a class="single-page__back" href="<?= get_home_url(); ?>/post">
                <span class="single-page__back-icon" aria-hidden="true">
                  <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="3" y="3" width="42" height="42" rx="21" fill="#6C5E4F" />
                    <path d="M15.4697 24.5303C15.1768 24.2374 15.1768 23.7626 15.4697 23.4697L20.2426 18.6967C20.5355 18.4038 21.0104 18.4038 21.3033 18.6967C21.5962 18.9896 21.5962 19.4645 21.3033 19.7574L17.0607 24L21.3033 28.2426C21.5962 28.5355 21.5962 29.0104 21.3033 29.3033C21.0104 29.5962 20.5355 29.5962 20.2426 29.3033L15.4697 24.5303ZM32 24.75H16V23.25H32V24.75Z" fill="white" />
                  </svg>
                </span>
                <span>一覧に戻る</span>
              </a>
            </div>
          </article>
        </div>
      </section>
    </main>
<?php
  endwhile;
endif;
?>
<?php get_footer(); ?>