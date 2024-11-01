<?php get_header(); ?>    

<section class="container mb-3">
  <h2>出店一覧</h2>
  <div id="shop-list" class="row">
  <?php
    // WP_Queryオブジェクトを生成
    $query = new WP_Query([
      'post_type' => 'post', // 投稿記事のみを対象とする
      'category_name'  => 'shops',
      'posts_per_page' => 100,
    ]);

    // ループ開始
    if ($query->have_posts()):
      while ($query->have_posts()): $query->the_post();
    ?>
      <div class="col-6 col-md-4 p-1">
        <div class="bg-white rounded p-1 h-100" data-toggle="modal" data-target="#shopModal-<?php echo get_the_ID(); ?>">
          <img 
            class="thumbnail img-thumbnail border-0 p-0" 
            src="<?php the_field('thumbnail'); ?>" 
            alt="<?php the_title(); ?>" >
          
          <ul class="genre-label list-unstyled py-1 mb-0" style="top: 0; left: 0;">
            <?php 
            // チェックボックス型のカスタムフィールドからジャンル情報を取得
            $genres = get_field('genre'); 
            if ($genres):
              foreach($genres as $genre):
            ?>
            <li><?php echo $genre; ?></li>
            <?php
              endforeach; 
            endif;
            ?>
          </ul>
          <h5 class="text-center"><?php the_title(); ?></h5>
        </div>
      </div>

      <!-- modal window -->
      <div class="modal fade" id="shopModal-<?php echo get_the_ID(); ?>" tabindex="-1" role="dialog" aria-labelledby="shopModalLabel-<?php echo get_the_ID(); ?>" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <!-- モーダルのコンテンツ -->
            <div class="modal-header">
              <h5 class="modal-title" id="shopModalLabel-<?php echo get_the_ID(); ?>"><?php the_title(); ?>（<?php the_field('organization'); ?>）</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- モーダルの内容 -->
              <div class="img-box"><img src="<?php the_field('thumbnail'); ?>" alt="出店ポスター"></div>
              <p><?php the_field('description'); ?></p>
            </div>
          </div>
        </div>
      </div>
    <?php
      endwhile; // ループの終わり
      wp_reset_postdata(); // メインクエリをリセット
    else:
      echo '<p>データベースに店舗情報が登録されておりません</p>';
    endif;
    ?>
  </div>
</section>
<section class="container mb-3">
  <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1tw-DZQQspFaTY3sEtZsj0aYLDj6R5j8&ehbc=2E312F" width="100%" height="480"></iframe>
</section>

<?php get_footer(); ?>