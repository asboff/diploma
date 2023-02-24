@extends('layouts.site')
@section('content')
  <!-- ======= Intro Section ======= -->
  <div class="intro intro-carousel swiper position-relative">

    <div class="swiper-wrapper">
        @foreach($topProperties as $property)
      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(https://dummyimage.com/1920x960/000/fff.png)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">{{ $property->location }}</p>
                    <h1 class="intro-title mb-4 ">
                      <br> {{ $property->address }}
                    </h1>
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">Br{{ ($property->price)/100 }}</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
        @endforeach
    <div class="swiper-pagination"></div>

  </div><!-- End Intro Section -->
  </div>

  <main id="main">

      <!-- ======= Latest Properties Section ======= -->
      <section class="section-property section-t8">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <div class="title-wrap d-flex justify-content-between">
                          <div class="title-box">
                              <h2 class="title-a">Последние объявления</h2>
                          </div>
                          <div class="title-link">
                              <a href="property-grid.html">Все объявления
                                  <span class="bi bi-chevron-right"></span>
                              </a>
                          </div>
                      </div>
                  </div>
              </div>

              <div id="property-carousel" class="swiper">
                  <div class="swiper-wrapper">
                        @foreach($latestProperties as $property)
                      <div class="carousel-item-b swiper-slide">
                          <div class="card-box-a card-shadow">
                              <div class="img-box-a">
                                  <img src="https://dummyimage.com/1920x960/000/fff.png" alt="" class="img-a img-fluid">
                              </div>
                              <div class="card-overlay">
                                  <div class="card-overlay-a-content">
                                      <div class="card-header-a">
                                          <h2 class="card-title-a">
                                              <a href="property-single.html">{{ $property->location }}
                                                  <br /> {{ $property->address }}</a>
                                          </h2>
                                      </div>
                                      <div class="card-body-a">
                                          <div class="price-box d-flex">
                                              <span class="price-a">аренда | Br {{ $property->price/100 }}</span>
                                          </div>
                                          <a href="#" class="link-a">Нажмите, чтобы посмотреть
                                              <span class="bi bi-chevron-right"></span>
                                          </a>
                                      </div>
                                      <div class="card-footer-a">
                                          <ul class="card-info d-flex justify-content-around">
                                              <li>
                                                  <h4 class="card-info-title">Площадь</h4>
                                                  <span>{{ $property->area }}m
                            <sup>2</sup>
                          </span>
                                              </li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div><!-- End carousel item -->
                      @endforeach
          </div>
      </section><!-- End Latest Properties Section -->

    <!-- ======= Latest News Section ======= -->
    <section class="section-news section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Latest News</h2>
              </div>
              <div class="title-link">
                <a href="blog-grid.html">All News
                  <span class="bi bi-chevron-right"></span>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div id="news-carousel" class="swiper">
          <div class="swiper-wrapper">

            <div class="carousel-item-c swiper-slide">
              <div class="card-box-b card-shadow news-box">
                <div class="img-box-b">
                  <img src="https://dummyimage.com/1920x960/000/fff.png" alt="" class="img-b img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-header-b">
                    <div class="card-category-b">
                      <a href="#" class="category-b">House</a>
                    </div>
                    <div class="card-title-b">
                      <h2 class="title-2">
                        <a href="blog-single.html">House is comming
                          <br> new</a>
                      </h2>
                    </div>
                    <div class="card-date">
                      <span class="date-b">18 Sep. 2017</span>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->

            <div class="carousel-item-c swiper-slide">
              <div class="card-box-b card-shadow news-box">
                <div class="img-box-b">
                  <img src="https://dummyimage.com/1920x960/000/fff.png" alt="" class="img-b img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-header-b">
                    <div class="card-category-b">
                      <a href="#" class="category-b">Travel</a>
                    </div>
                    <div class="card-title-b">
                      <h2 class="title-2">
                        <a href="blog-single.html">Travel is comming
                          <br> new</a>
                      </h2>
                    </div>
                    <div class="card-date">
                      <span class="date-b">18 Sep. 2017</span>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->

            <div class="carousel-item-c swiper-slide">
              <div class="card-box-b card-shadow news-box">
                <div class="img-box-b">
                  <img src="https://dummyimage.com/1920x960/000/fff.png" alt="" class="img-b img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-header-b">
                    <div class="card-category-b">
                      <a href="#" class="category-b">Park</a>
                    </div>
                    <div class="card-title-b">
                      <h2 class="title-2">
                        <a href="blog-single.html">Park is comming
                          <br> new</a>
                      </h2>
                    </div>
                    <div class="card-date">
                      <span class="date-b">18 Sep. 2017</span>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->

            <div class="carousel-item-c swiper-slide">
              <div class="card-box-b card-shadow news-box">
                <div class="img-box-b">
                  <img src="https://dummyimage.com/1920x960/000/fff.png" alt="" class="img-b img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-header-b">
                    <div class="card-category-b">
                      <a href="#" class="category-b">Travel</a>
                    </div>
                    <div class="card-title-b">
                      <h2 class="title-2">
                        <a href="#">Travel is comming
                          <br> new</a>
                      </h2>
                    </div>
                    <div class="card-date">
                      <span class="date-b">18 Sep. 2017</span>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->

          </div>
        </div>

        <div class="news-carousel-pagination carousel-pagination"></div>
      </div>
    </section><!-- End Latest News Section -->

    <!-- ======= Testimonials Section ======= -->
    <section class="section-testimonials section-t8 nav-arrow-a">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Отзывы наших благодарных клиентов</h2>
              </div>
            </div>
          </div>
        </div>

        <div id="testimonial-carousel" class="swiper">
          <div class="swiper-wrapper">

            <div class="carousel-item-a swiper-slide">
              <div class="testimonials-box">
                <div class="row">
                  <div class="col-sm-12 col-md-6">
                    <div class="testimonial-img">
                      <img src="{{ asset('images/site/testimonial-1.jpg') }}" alt="" class="img-fluid">
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-6">
                    <div class="testimonial-ico">
                      <i class="bi bi-chat-quote-fill"></i>
                    </div>
                    <div class="testimonials-content">
                      <p class="testimonial-text">
                        На этом сайте мы смогли арендовать хорошую квартиру у хорошего хозяина и не страдать от картонных стен
                      </p>
                    </div>
                    <div class="testimonial-author-box">
                      <img src="{{ asset('images/site/mini-testimonial-1.jpg') }}" alt="" class="testimonial-avatar">
                      <h5 class="testimonial-author">Денис и Вика</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->

            <div class="carousel-item-a swiper-slide">
              <div class="testimonials-box">
                <div class="row">
                  <div class="col-sm-12 col-md-6">
                    <div class="testimonial-img">
                      <img src="{{ asset('images/site/testimonial-2.jpg') }}" alt="" class="img-fluid">
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-6">
                    <div class="testimonial-ico">
                      <i class="bi bi-chat-quote-fill"></i>
                    </div>
                    <div class="testimonials-content">
                      <p class="testimonial-text">
                        У меня просто шок! Таким быстрым и удобным сервисом ещё никогда не пользовались! Всё быстро, чётко, надёжно и отработано.
                      </p>
                    </div>
                    <div class="testimonial-author-box">
                      <img src="{{ asset('images/site/mini-testimonial-2.jpg') }}" alt="" class="testimonial-avatar">
                      <h5 class="testimonial-author">Эдуард и Аделина</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->

          </div>
        </div>
        <div class="testimonial-carousel-pagination carousel-pagination"></div>

      </div>
    </section><!-- End Testimonials Section -->

  </main><!-- End #main -->

@endsection
