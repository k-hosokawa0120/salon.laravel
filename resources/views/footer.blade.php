<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="{{ asset('/css/reset.css') }}" >
    <link rel="stylesheet" href="{{ asset('/css/css.css') }}" >
    <title>footer</title>
    <style>
    </style>
  </head>
  <body>
    <section class="footer">
      <div class="footer__wrap">
        <div class="footer__title">
          <img src="images/cut.png" class="footer__title-image" width="40" height="40" loading="lazy" alt="">
        </div>
        <div class="footer__body">
          <div class="footer__body-contents">
            <div class="footer__contents-title">
              INFO
            </div>
            <div class="footer__contents-text">
              〒029-4201<br>
              岩手県奥州市前沢古城姥屋敷67-2<br>
              TEL:0197-56-2415
            </div>
          </div>
          <div class="footer__body-contents">
            <div class="footer__contents-title">
              OPEN TIMES
            </div>
            <div class="footer__contents-text">
              <p class="footer__contents-text-sub --large">9:00〜19:00</p>
              <p class="footer__contents-text-sub">※月曜定休</p>
            </div>
          </div>
          <div class="footer__body-contents">
            <div class="footer__contents-title">
              RESERVE
            </div>
            <div class="footer__contents-text-wrap">
              <div class="footer__contents-text">
                ご予約はお電話にて承っております。
              </div>
              <div class="footer__contents-text-phone">
                <div class="footer__phone">
                  <span class="footer__phone-text">0197-56-2415</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer__bottom">
        <p class="footer__bottom-text">© 2022 b's ALL RIGHTS RESERVED.</p>
      </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.1.slim.js" integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk=" crossorigin="anonymous"></script>
    <script src="{{ asset('/js/app.js') }}"></script>
  </body>
</html>