<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="{{ asset('/css/reset.css') }}" >
    <link rel="stylesheet" href="{{ asset('/css/css.css') }}" >
    <title>Laravel</title>
    <style>
    </style>
  </head>
  <body>
    <section class="header">
      <div class="header__wrap">
        <div class="header__title">
          <a href="" class="header__title-link">
            <img src="images/cut.png" class="header__title-image" width="80" height="80" loading="lazy" alt="">
            <p class="header__title-text">美’s</p>
          </a>
        </div>
        <nav class="header__nav">
          <ul class="header__nav-list">
            <li class="header__nav-items">
              <a href="" class="header__nav-link">
                <span class=""></span>
                <span class="header__nav-name">HOME</span>
              </a>
            </li>
            <li class="header__nav-items">
              <a href="" class="header__nav-link">
                <span class=""></span>
                <span class="header__nav-name">MENU</span>
              </a>
            </li>
            <li class="header__nav-items">
              <a href="" class="header__nav-link">
                <span class=""></span>
                <span class="header__nav-name">NEWS</span>
              </a>
            </li>
            <li class="header__nav-items">
              <a href="" class="header__nav-link">
                <span class=""></span>
                <span class="header__nav-name">COUPON</span>
              </a>
            </li>
            <li class="header__nav-items">
              <a href="" class="header__nav-link">
                <span class=""></span>
                <span class="header__nav-name">RESERVE</span>
              </a>
            </li>
          </ul>
        </nav>
        <nav class="header__nav-hamburger">
          <ul class="header__nav-hamburger-list">
            <li class="header__nav-hamburger-items">
              <a href="" class="header__nav-hamburger-link">
                <span class=""></span>
                <span class="header__nav-hamburger-name">HOME</span>
              </a>
            </li>
            <li class="header__nav-hamburger-items">
              <a href="" class="header__nav-hamburger-link">
                <span class=""></span>
                <span class="header__nav-hamburger-name">MENU</span>
              </a>
            </li>
            <li class="header__nav-hamburger-items">
              <a href="" class="header__nav-hamburger-link">
                <span class=""></span>
                <span class="header__nav-hamburger-name">NEWS</span>
              </a>
            </li>
            <li class="header__nav-hamburger-items">
              <a href="" class="header__nav-hamburger-link">
                <span class=""></span>
                <span class="header__nav-hamburger-name">COUPON</span>
              </a>
            </li>
            <li class="header__nav-hamburger-items">
              <a href="" class="header__nav-hamburger-link">
                <span class=""></span>
                <span class="header__nav-hamburger-name">RESERVE</span>
              </a>
            </li>
            <li class="header__nav-hamburger-items">
              <div class="header__nav-hamburger-items-sns">
                <a href="" class="header__nav-hamburger-items-sns-link">
                  <img src="images/f_logo_RGB-Blue_114.png" width="25" height="25" loading="lazy" alt="">
                </a>
                <a href="" class="header__nav-hamburger-items-sns-link">
                  <img src="images/Instagram_Glyph_Gradient_RGB.png" width="25" height="25" loading="lazy" alt="">
                </a>
              </div>
            </li>
            <li class="header__nav-hamburger-items">
              <div class="header__nav-hamburger-phone">
                <span class="header__nav-hamburger-phone-text">0197-56-2415</span>
              </div>
            </li>
            <li class="header__nav-hamburger-items">
              <span class="header__nav-hamburger-close">close</span>
            </li>
          </ul>
        </nav>
        <div class="header__hamburger">
          <span class="header__hamburger-line header__hamburger-close"></span>
        </div>
      </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.1.slim.js" integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk=" crossorigin="anonymous"></script>
    <script src="{{ asset('/js/app.js') }}"></script>
  </body>
</html>