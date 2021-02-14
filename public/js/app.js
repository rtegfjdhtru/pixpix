"use strict";

// require('footerFixed.js');
$(function () {
  $('.js-nav').on('click', function () {
    $(this).toggleClass('active');
    $('.js-ul').toggleClass('ul-active');
  });
  var starIcon = $('.js-star');
  starIcon.on('click', function () {
    $(this).toggleClass('fas');
    $(this).toggleClass('star-icon-active');
    $(this).toggleClass('far');
  });
  var goodIcon = $('.good-icon');
  goodIcon.on('click', function () {
    $(this).toggleClass('good-icon-active');
  });
  var imagesDrop = $('.js-profile-label-upload');
  imagesDrop.on('dragover', function () {
    $(this).css('border-color', '#2a2a2a');
  });
  imagesDrop.on('dragleave', function () {
    $(this).css('border', 'none');
  }); //プロフィール用

  $('.form-profile-img-upload').on('change', function (e) {
    var file = e.target.files[0];
    var reader = new FileReader(); //画像でない場合は処理終了

    if (file.type.indexOf("image") < 0) {
      return false;
    } //アップロードした画像を設定する


    reader.onload = function (file) {
      return function (e) {
        $(".form-profile-image-box").attr("src", e.target.result);
        $(".form-profile-image-box").attr("title", file.name);
      };
    }(file);

    reader.readAsDataURL(file);
  }); //画像投稿用

  var view_box = $('.art-post-img-warp');
  $(".art-post-file").on('change', function () {
    var fileprop = $(this).prop('files')[0],
        find_img = $(this).next('img'),
        fileRdr = new FileReader();

    if (find_img.length) {
      find_img.nextAll().remove();
      find_img.remove();
    }

    var img = ' <p class="art-post-image-preview"><img src="" alt="プレビュー画像" class="art-post-preview"></p><a href="#" class="img_del img_del_btn">画像を削除する</a>';
    view_box.append(img);

    fileRdr.onload = function () {
      view_box.find('img').attr('src', fileRdr.result);
      img_del(view_box);
    };

    fileRdr.readAsDataURL(fileprop);
  });

  function img_del(target) {
    target.find('.img_del').on('click', function () {
      $(this).parent().find('.art-post-file').val('');
      $(this).parent().find('.art-post-image-preview').remove();
      $(this).remove();
      return false;
    });
  }
});