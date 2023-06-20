<?php get_header(); ?>

<section class="container mb-3">
  <h2>ニュース一覧</h2>
  <div class="container">
    <div class="row">

    <?php
    // WP_Queryオブジェクトを生成
    $query = new WP_Query([
      'post_type' => 'post', // 投稿記事のみを対象とする
      'category_name'  => 'news',  // 'news' カテゴリーの投稿のみを対象とする
      'posts_per_page' => 100, // ページあたりの表示数（適宜変更）
    ]);

    // ループ開始
    if ($query->have_posts()):
      while ($query->have_posts()): $query->the_post();
    ?>
      <div class="col-md-4">
        <div class="card mb-4">
          <a href="<?php the_permalink(); ?>">
            
          <div class="img-box">
            <?php if (has_post_thumbnail()): ?>
              <img class="thumbnail" src="<?php the_post_thumbnail_url(); ?>" class="card-img-top">
            <?php else: ?>
              <img class="thumbnail" src="<?php bloginfo('template_url'); ?>/assets/images/SPOILER_1.png" class="card-img-top">
            <?php endif; ?>
          </div>

          
            <div class="card-body px-2 py-0">
              <h5 class="card-title"><?php the_title(); ?></h5>
              <p class="card-time">
                <?php 
                  $time_diff = human_time_diff( get_the_time('U'), current_time('timestamp') );
                  printf( '%s前に投稿', $time_diff ); 
                ?>
              </p>
            </div>
          </a>
        </div>
      </div>
    <?php
      endwhile; // ループの終わり
      wp_reset_postdata(); // メインクエリをリセット
    else:
      echo '<p>記事が見つかりませんでした。</p>';
    endif;
    ?>
      
    </div>
  </div>
</section>

<?php get_footer(); ?>