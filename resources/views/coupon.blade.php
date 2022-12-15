<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="{{ asset('/css/reset.css') }}" >
    <link rel="stylesheet" href="{{ asset('/css/css.css') }}" >
    <title>COUPON</title>
    <style>
    </style>
  </head>
  <body>
    <section class="coupon">
      <div class="coupon__top">
        <div class="coupon__top-title">
          COUPON
        </div>
      </div>
      <div class="coupon__body">
        <div class="coupon__body-title">
          ご利用クーポン一覧
        </div>
        <div class="coupon__block">
          <div class="coupon__wrap">
            <div class="coupon__box">
              <div class="coupon__contents">
                <div class="coupon__contents-top">
                  \ 店舗で使える /
                </div>
                <div class="coupon__contents-wrap">
                  <div class="coupon__contents-unit">
                    ￥<span class="coupon__contents-number" data-discount="500"></span>
                  </div>
                  <div class="coupon__contents-sub">
                    <p class="coupon__contents-sub-head">OFF</p>
                    <p class="coupon__contents-sub-body">クーポン</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="coupon__button-wrap">
              <button type="button" data-discount="" class="coupon__button modal__open">使用する</button>
            </div>
          </div>
        </div>
        <div class="coupon__block">
          <div class="coupon__wrap">
            <div class="coupon__box">
              <div class="coupon__contents">
                <div class="coupon__contents-top">
                  \ 店舗で使える /
                </div>
                <div class="coupon__contents-wrap">
                  <div class="coupon__contents-unit">
                    ￥<span class="coupon__contents-number" data-discount="1000"></span>
                  </div>
                  <div class="coupon__contents-sub">
                    <p class="coupon__contents-sub-head">OFF</p>
                    <p class="coupon__contents-sub-body">クーポン</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="coupon__button-wrap">
              <button type="button" name="" class="coupon__button modal__open">使用する</button>
            </div>
          </div>
        </div>
        <div class="modal__container">
          <div class="modal__body">
            <div class="modal__content">
              <div class="modal__head">
                <p class="modal__head-title">使用しますか？</p>
                <p class="modal__head-subtitle">使用回数が1回のみのクーポンです。<br>スタッフに見せるまでは<br>使用するボタンを押さないでください。</p>
              </div>
              <div class="modal__box">
                <div class="coupon__box">
                  <div class="coupon__contents">
                    <div class="coupon__contents-top">
                      \ 店舗で使える /
                    </div>
                    <div class="coupon__contents-wrap">
                      <div class="coupon__contents-unit">
                        ￥<span class="coupon__contents-number-modal" data-discount=""></span>
                      </div>
                      <div class="coupon__contents-sub">
                        <p class="coupon__contents-sub-head">OFF</p>
                        <p class="coupon__contents-sub-body">クーポン</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <form action="/send_coupon.php" method="post">
                <div class="modal__button">
                  <button type="button" class="coupon__button --gray modal__close">戻る</button>
                  <button type="submit" class="coupon__button modal__coupon-button">使用する</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="coupon__info">
          <div class="coupon__info-contents">
            <div class="coupon__info-title">
              使用するボタンについて
            </div>
            <div class="coupon__info-text">
              レジにてクーポン画面をお見せください。<br>
              使用回数が1回のみのクーポンですので、スタッフに見せるまで使用するボタンは押さないでください。
            </div>
          </div>
          <div class="coupon__info-contents">
            <div class="coupon__info-title">
              ご利用条件
            </div>
            <div class="coupon__info-text">
              税込み5,000円以上でご利用頂けます。
            </div>
          </div>
          <div class="coupon__info-contents">
            <div class="coupon__info-title">
              注意事項
            </div>
            <div class="coupon__info-text">
              ※その他のクーポンとの併用はできません。<br>            
            </div>
          </div>
        </div>
      </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.1.slim.js" integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk=" crossorigin="anonymous"></script>
    <script src="{{ asset('/js/app.js') }}"></script>
  </body>
</html>