$(function() {
  const hum = $('.header__hamburger, .header__nav-hamburger-close');
  const nav = $('.header__nav-hamburger');
  hum.on('click', function() {
    nav.toggleClass('toggle');
  });

  // 変数に要素を入れる
  var open = $('.modal__open'),
    close = $('.modal__close'),
    container = $('.modal__container');
  //開くボタンをクリックしたらモーダルを表示する
  open.on('click',function() { 
    container.addClass('active');
    return false;
  });
  //閉じるボタンをクリックしたらモーダルを閉じる
  close.on('click',function() {  
    container.removeClass('active');
  });
  //モーダルの外側をクリックしたらモーダルを閉じる
  $(document).on('click',function(e) {
    if(!$(e.target).closest('.modal__body').length) {
      container.removeClass('active');
    }
  });

  $('.coupon__contents-number').each(function(i, e) {
    $(this).text($(this).data('discount'));
    $(this).closest('.coupon__block').find('.coupon__button').attr('data-discount', i);
  });
  $('.modal__open').on('click',function() {
    const thisButton = $(this).closest('.coupon__wrap').find('.coupon__contents-number').data('discount');
    $('.coupon__contents-number-modal').text(thisButton);
    const thisDesc = $(this).closest('.coupon__wrap').find('.coupon__button').attr('data-discount');
    $('.modal__coupon-button').attr('data-discount', thisDesc);
  });

});
