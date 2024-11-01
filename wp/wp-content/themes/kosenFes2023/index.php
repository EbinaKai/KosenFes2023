<?php get_header(); ?>

<section class="container mb-3">
  <div class="">
    <img class="img-thumbnail-large" src="/wp-content/themes/kosenFes2023/assets/images/SPOILER_1.png" alt="ポスター">
  </div>
</section>

<section class="container mb-3">
  <h2>ニュース</h2>
  <div class="ml-4">
    <ul class="list-unstyled link-list">
    <?php
    // WP_Queryオブジェクトを生成
    $query = new WP_Query([
      'post_type' => 'post', // 投稿記事のみを対象とする
      'category_name'  => 'news',  // 'news' カテゴリーの投稿のみを対象とする
      'posts_per_page' => 3, // ページあたりの表示数（適宜変更）
    ]);

    // ループ開始
    if ($query->have_posts()):
      while ($query->have_posts()): $query->the_post();
    ?>
      <li>
        <a href="<?php the_permalink(); ?>">
          <?php the_time('m.d'); ?>
          <?php the_title(); ?>
        </a>
      </li>
    <?php
      endwhile; // ループの終わり
      wp_reset_postdata(); // メインクエリをリセット
    else:
      echo '<p>記事が見つかりませんでした。</p>';
    endif;
    ?>
    </ul>
  </div>
</section>

<section class="container mb-3">
  <h2>校長挨拶</h2>
  <div>挨拶の一部分</div>
  <a href="/greeting"><button class="btn btn-fes btn-block mt-3">続きはこちら</button></a>
</section>

<section class="container mb-3">
  <h2>イベント一覧</h2>
  <a href="/events"><button class="btn btn-fes btn-block my-4">詳しくはこちら</button></a>
  <dl class="mb-4 item-list">
    <dt>イベント</dt>
    <dd>
      <time>一日目 10:00〜12:00</time>
      <p class="mt-2">サンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキスト</p>
    </dd>
  </dl>
  <dl class="mb-4 item-list">
    <dt>イベント</dt>
    <dd>
      <time>一日目 10:00〜12:00</time>
      <p class="mt-2">サンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキスト</p>
    </dd>
  </dl>
  <dl class="mb-4 item-list">
    <dt>イベント</dt>
    <dd>
      <time>一日目 10:00〜12:00</time>
      <p class="mt-2">サンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキスト</p>
    </dd>
  </dl>
  <dl class="mb-4 item-list">
    <dt>イベント</dt>
    <dd>
      <time>一日目 10:00〜12:00</time>
      <p class="mt-2">サンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキスト</p>
    </dd>
  </dl>
</section>

<section class="container mb-3">
  <h2>出店店舗</h2>
  <div>ランダムで3つくらいここに表示</div>
</section>

<section class="container mb-3">
  <h2>アクセス</h2>
  <dl class="mt-2">
    <dt>公共交通機関</dt>
    <dd>JR仙山線 愛子駅より徒歩15分</dd>
    <dd>仙台市営バス 仙台高専広瀬キャンパス入口より徒歩5分</dd>
  </dl>
  <a href="/access"><button class="btn btn-fes btn-block mt-3">詳しくはこちら</button></a>
</section>

<?php get_footer(); ?>
