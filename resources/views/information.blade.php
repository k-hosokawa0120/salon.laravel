<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="{{ asset('/css/reset.css') }}" >
    <link rel="stylesheet" href="{{ asset('/css/css.css') }}" >
    <title>INFORMATION</title>
    <style>
    </style>
  </head>
  <body>
    <section class="information">
      <div class="information__top">
        <div class="information__top-title">INFORMATION</div>
      </div>
      <div class="information__body">
        <div class="information__wrap">
          <div class="information__info">
            <div class="information__info-head">
              <p class="information__info-title">
                RESERVE
              </p>
            </div>
            <div class="information__info-text">
              ご予約はお電話にて承っております。<br>
              営業時間：9:00 〜 18:00<br>
              （定休日：毎週月曜）
            </div>
            <div class="information__phone">
              <span class="information__phone-text">0197-56-2415</span>
            </div>
            <div class="information__info-text">
              営業時間外ですと繋がらない場合がございます。<br>
              営業時間内にお電話お願い致します。
            </div>
          </div>
          <div class="information__map">
            <div class="information__map-head">
              <p class="information__map-tilte">ACCESS</p>
            </div>
            <div class="information__map-contents">
              <div class="information__map-contents-text">
                〒029-4201<br>
                岩手県奥州市前沢古城姥屋敷67-2<br>
              </div>
              <div class="information__map-media">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12390.497720493757!2d141.1431273!3d39.0694723!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x85074a6da6122cd5!2z576O5a655a6k576O4oCZ77yz!5e0!3m2!1sja!2sjp!4v1670757723375!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.1.slim.js" integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk=" crossorigin="anonymous"></script>
    <script src="{{ asset('/js/app.js') }}"></script>
  </body>
</html>