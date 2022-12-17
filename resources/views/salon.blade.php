<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="{{ asset('/css/reset.css') }}" >
    <link rel="stylesheet" href="{{ asset('/css/css.css') }}" >
    <title>SALON</title>
    <style>
    </style>
  </head>
  <body>
    <section class="salon">
      <div class="salon__top">
        <div class="salon__top-title">
          salon
        </div>
      </div>
      <div class="salon__block">
        <div class="salon__body">
          <div class="salon__wrap">
            <div class="salon__head">
              <p class="salon__title">
                STAFF
              </p>
            </div>
            <div class="salon__staff">
              <div class="salon__staff-media">
                <img src="images/hear1.jpg" class="salon__staff-image" width="200" height="200" loading="lazy" alt="">
              </div>
              <div class="salon__staff-summary">
                <div class="salon__staff-title-wrap">
                  <p class="salon__staff-title">OWNER</p>
                  <p class="salon__staff-title --bold">細川 広美</p>
                </div>
                <div class="salon__staff-text">
                  ああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="salon__body">
          <div class="salon__wrap">
            <div class="salon__head">
              <p class="salon__title">
                WAITING ROOM
              </p>
            </div>
            <div class="salon__room">
              <div class="salon__room-summary">
                <div class="salon__room-text">
                  あああああああああああああああああああああああああああああ<br>ああああああああああああああああああああああ<br>ああああああああああああああああああああああああああああ<br>
                </div>
              </div>
              <div class="salon__room-media">
                <img src="images/hear1.jpg" class="salon__staff-image" loading="lazy" alt="">
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