@extends('layouts.site')
@section('content')
  <main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">У нас лучшие сделки по лучшим ценам</h1>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="{{ route('index') }}">Главная</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  О нас
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

    <!-- ======= About Section ======= -->
    <section class="section-about">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 position-relative">
            <div class="about-img-box">
              <img src="{{ asset('images/site/slide-about-1.jpg') }}" alt="" class="img-fluid">
            </div>
            <div class="sinse-box">
              <h3 class="sinse-title">RentFlat
                <span></span>
                <br> since 2023
              </h3>
              <p>Опыт и Надёжность</p>
            </div>
          </div>
          <div class="col-md-12 section-t8 position-relative">
            <div class="row">
              <div class="col-md-6 col-lg-5">
                <img src="{{ asset('images/site/about-2.jpg') }}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-2  d-none d-lg-block position-relative">
                <div class="title-vertical d-flex justify-content-start">
                  <span>RentFlat <br>Лучшие цены</span>
                </div>
              </div>
              <div class="col-md-6 col-lg-5 section-md-t3">
                <div class="title-box-d">
                  <h3 class="title-d">Кто этот
                    <span class="color-d">мужик</span> слева
                    <br> от текста???
                  </h3>
                </div>
                <p class="color-text-a">
{{--                    TODO: адекватный текст--}}
                  Кровожадный бандит, убийца, организатор 13 террактов, 8 погромов в центре города. В детстве к нему подошёл
                    дедушка и попросил уступить место. В ответ на это юноша грубо поставил подножку, из-за чего судья выдал
                    ему жёлтую карточку. После этого судью никто не видел.
                </p>
                <p class="color-text-a">
                  Именно таких людей Вы не найдёте на нашем сервисе! Мы работаем только с проверенными арендодателями, которые
                    заботятся о своей и о нашей репутации. Только хорошие квартиры и люди!
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

@endsection
