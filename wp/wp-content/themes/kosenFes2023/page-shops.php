<?php get_header(); ?>    

<section class="container mb-3">
  <h2>出店一覧</h2>
  <div id="shop-list" class="row"></div>

  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <!-- モーダルのコンテンツ -->
        <div class="modal-header">
          <h5 class="modal-title" id="myModalLabel">古本市</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- モーダルの内容 -->
          <div class="img-box"><img src="" alt="出店ポスター"></div>
          <p></p>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>