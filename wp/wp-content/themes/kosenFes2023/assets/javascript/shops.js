"use strict";

$(document).ready(function() {

  const template_url = "/wp-content/themes/kosenFes2023/";
  const image_path = template_url + "assets/images/";
  $.ajax({
    type: "GET",
    url: template_url + "assets/json/shops.json",
    contentType: "application/json",
  }).then(function(data) {
    drawShops(data);
  });

  function drawShops(shops) {
    shops.forEach(function(shop) {
      let shop_html = `
        <div class="col-md-4 col-sm-12">
          <div class="img-box">
            <img class="thumbnail" src="${image_path}${shop.image}" alt="${shop.name}" data-toggle="modal" data-target="#myModal" data-shop-id="${shop.id}">
          </div>
        </div>
      `;
      let $shop_element = $($.parseHTML(shop_html));
      $shop_element.find("img").click(function() {
        $("#myModalLabel").text(shop.name + "（" + shop.organization + "）");
        $(".modal-body img").attr("src", image_path + shop.image);
        $(".modal-body p").text(shop.desc);
      });
      $("#shop-list").append($shop_element);
    });
  }
});