@extends('layouts.site')
@section('content')

  <main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">Как связаться с нами?</h1>
              <span class="color-text-a"></span>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="{{ route('index') }}">Главная</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Контакты
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

    <!-- ======= Contact Single ======= -->
    <section class="contact">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="contact-map box">
              <div id="map" class="contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.1422937950147!2d-73.98731968482413!3d40.75889497932681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25855c6480299%3A0x55194ec5a1ae072e!2sTimes+Square!5e0!3m2!1ses-419!2sve!4v1510329142834" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
            </div>
          </div>
          <div class="col-sm-12 section-t8">
            <div class="row">
              <div class="col-md-7">
                <form action="{{ route('contact.store') }}" method="post" role="form" class="php-email-form">
                    @csrf
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <div class="form-group">
                        <input type="text" name="name" class="form-control form-control-lg form-control-a {{$errors->has('name') ? 'is-invalid':''}}" placeholder="Ваше имя" value="{{ old('name') }}" required>
                      </div>
                    </div>
                      @if($errors->has('name'))
                          @foreach($errors->get('name') as $error)
                              {{ $error }}
                          @endforeach
                      @endif
                    <div class="col-md-6 mb-3">
                      <div class="form-group">
                        <input name="email" type="email" class="form-control form-control-lg form-control-a {{$errors->has('email') ? 'is-invalid':''}}" placeholder="Ваш e-mail адрес" value="{{ old('email') }}" required>
                      </div>
                    </div>
                      @if($errors->has('email'))
                          @foreach($errors->get('email') as $error)
                              {{ $error }}
                          @endforeach
                      @endif
                    <div class="col-md-12 mb-3">
                      <div class="form-group">
                        <input type="text" name="subject" class="form-control form-control-lg form-control-a {{$errors->has('subject') ? 'is-invalid':''}}" placeholder="Тема" value="{{ old('subject') }}" required>
                      </div>
                    </div>
                      @if($errors->has('subject'))
                          @foreach($errors->get('subject') as $error)
                              {{ $error }}
                          @endforeach
                      @endif
                    <div class="col-md-12">
                      <div class="form-group">
                        <textarea name="message" class="form-control {{$errors->has('message') ? 'is-invalid':''}}" name="message" cols="45" rows="8" placeholder="Сообщение" value="{{ old('text') }}" required></textarea>
                      </div>
                    </div>
                      @if($errors->has('message'))
                          @foreach($errors->get('message') as $error)
                              {{ $error }}
                          @endforeach
                      @endif
                    <div class="col-md-12 my-3">
                      <div class="mb-3">
                        <div class="loading">Загрузка</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Ваше сообщение отправлено. Спасибо за обращение!</div>
                      </div>
                    </div>

                    <div class="col-md-12 text-center">
                      <button type="submit" class="btn btn-a">Отправить сообщение</button>
                    </div>
                  </div>
                </form>
              </div>
              <div class="col-md-5 section-md-t3">
                <div class="icon-box section-b2">
                  <div class="icon-box-icon">
                    <span class="bi bi-envelope"></span>
                  </div>
                  <div class="icon-box-content table-cell">
                    <div class="icon-box-title">
                      <h4 class="icon-title">Связаться</h4>
                    </div>
                    <div class="icon-box-content">
                      <p class="mb-1">E-mail:
                        <span class="color-a">support@rentflat.by</span>
                      </p>
                      <p class="mb-1">Телефон:
                        <span class="color-a">+375-17-289-80-46</span>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="icon-box section-b2">
                  <div class="icon-box-icon">
                    <span class="bi bi-geo-alt"></span>
                  </div>
                  <div class="icon-box-content table-cell">
                    <div class="icon-box-title">
                      <h4 class="icon-title">Наш адрес</h4>
                    </div>
                    <div class="icon-box-content">
                      <p class="mb-1">
                        Минск, ул.Тимирязева, 76
                      </p>
                    </div>
                  </div>
                </div>
                <div class="icon-box">
                  <div class="icon-box-icon">
                    <span class="bi bi-share"></span>
                  </div>
                  <div class="icon-box-content table-cell">
                    <div class="icon-box-title">
                      <h4 class="icon-title">Мы в соцсетях!</h4>
                    </div>
                    <div class="icon-box-content">
                      <div class="socials-footer">
                        <ul class="list-inline">
                          <li class="list-inline-item">
                            <a href="#" class="link-one">
                              <i class="bi bi-facebook" aria-hidden="true"></i>
                            </a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#" class="link-one">
                              <i class="bi bi-twitter" aria-hidden="true"></i>
                            </a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#" class="link-one">
                              <i class="bi bi-instagram" aria-hidden="true"></i>
                            </a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#" class="link-one">
                              <i class="bi bi-linkedin" aria-hidden="true"></i>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Contact Single-->

  </main><!-- End #main -->

@endsection
