<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('/css/reset.css') }}" >
    <link rel="stylesheet" href="{{ asset('/css/css.css') }}" >
    <title>Laravel</title>
    <style>
    </style>
  </head>
<body>
  <section class="news">
    <div class="section__title-wrap">
      <div class="section__title">NEWS</div>
    </div>
    <dl class="news__list">
      <div class="news__item">
        <dt class="news__term">2017.8.20</dt>
        <dd class="news__data">WEB限定価格のお知らせ</dd>
      </div>
      <div class="news__item">
        <dt class="news__term">2017.8.20</dt>
        <dd class="news__data">WEB限定価格のお知らせ</dd>
      </div>
    </dl>
  </section>
</body>
</html>
