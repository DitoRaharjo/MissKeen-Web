@extends('parent')

@section('content')
	<!-- *** SIGNUP MODAL ***_________________________________________________________
      -->
      <div id="get-started" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true" class="modal fade">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" data-dismiss="modal" aria-hidden="true" class="close">×</button>
              <h4 class="modal-title text-center">Get started</h4>
            </div>
            <div class="modal-body">
              <form action="#" method="post">
                <div class="form-group">
                  <input id="email_modal" type="text" placeholder="name@company.com" class="form-control">
                </div>
                <p class="text-center">
                  <button class="btn btn-primary"><i class="pe-7s-magic-wand"></i> Sign up</button>
                </p>
              </form>
              <p class="text-center text-muted">Effects present letters inquiry no an removed or friends. Desire behind latter me though in.</p>
            </div>
          </div>
        </div>
      </div>
      <!-- *** SIGNUP MODAL END ***-->
      <section id="intro" class="text-intro no-padding-bottom">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h1>MissKeen's <span class="rotate">App, Kitchen Needs, API </span></h1>
              <h3 class="weight-300">Mobile Recipes Finder Application for Your Kitchen Needs.</h3>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <p><a href="#testimonials" class="scroll-to">500,000 users</a> have already trusted<strong> MissKeen Apps.</strong><br />Try it for yourself.</p>
              <!--
              <form class="form-inline margin-top sign-up-form">
                <input id="email_intro" type="email" placeholder="name@company.com" class="form-control">
                <input id="submit_intro" type="submit" value="Get started for FREE" class="btn btn-primary">
              </form>
              -->
              <div><a href="" class="btn btn-primary">Download App</a></div>
            </div>
            <div class="col-md-12 col-lg-8 col-lg-offset-2">
              <p class="margin-bottom--zero"><img alt="" src="{{ asset('img/splash-misskeen4.png')}}" class="img-responsive"></p>
            </div>
          </div>
        </div>
      </section>
      <!--   *** CUSTOMERS ***-->
      <section id="customers" class="section background-gray-lightest padding--small">
         <!--<div class="container">
          <div class="row">
            <div class="col-sm-4 col-md-2 col-xs-6">
              <div class="customer"><img src="img/customers/kofola.png" title="Kofola" data-placement="bottom" data-toggle="tooltip" alt="" class="img-responsive"></div>
            </div>
            <div class="col-sm-4 col-md-2 col-xs-6">
              <div class="customer"><img src="img/customers/evian.png" title="Evian" data-placement="bottom" data-toggle="tooltip" alt="" class="img-responsive"></div>
            </div>
            <div class="col-sm-4 col-md-2 col-xs-6">
              <div class="customer"><img src="img/customers/cslink.png" title="CS Link" data-placement="bottom" data-toggle="tooltip" alt="" class="img-responsive"></div>
            </div>
            <div class="col-sm-4 col-md-2 col-xs-6">
              <div class="customer"><img src="img/customers/botas66.png" title="Botas 66 Concept store" data-placement="bottom" data-toggle="tooltip" alt="" class="img-responsive"></div>
            </div>
            <div class="col-sm-4 col-md-2 col-xs-6">
              <div class="customer"><img src="img/customers/mdfc.png" title="MediaFabríca" data-placement="bottom" data-toggle="tooltip" alt="" class="img-responsive"></div>
            </div>
            <div class="col-sm-4 col-md-2 col-xs-6">
              <div class="customer"><img src="img/customers/vanek.png" title="VANĚK Strojírenská výroba" data-placement="bottom" data-toggle="tooltip" alt="" class="img-responsive"></div>
            </div>
          </div>
        </div>-->
      </section>
      <!--   *** CUSTOMERS END ***-->
      <!--   *** FEATURES ***-->
      <section id="features" class="section">
        <div class="container">
          <div class="row text-center-mobile"> 
            <div class="col-md-6">
              <div class="icon"><i class="pe-7s-diamond"></i></div>
              <h2>First great feature</h2>
              <p>Effects present letters inquiry no an removed or friends. Desire behind latter me though in. Supposing shameless am he engrossed up additions. My possible peculiar together to. Desire so better am cannot he up before points. Remember mistaken opinions it pleasure of debating. Court front maids forty if aware their at. Chicken use are pressed removed.  </p>
            </div>
            <div class="col-md-6">
              <p><img alt="" src="{{ asset('/img/features1.png')}}" class="img-responsive"></p>
            </div>
          </div>
        </div>
      </section>
      <section class="section background-gray-lightest">
        <div class="container">
          <div class="row text-center-mobile"> 
            <div class="col-md-6">
              <p><img alt="" src="{{ asset('/img/features2.png')}}" class="img-responsive"></p>
            </div>
            <div class="col-md-6">
              <div class="icon brand-terciary"><i class="pe-7s-rocket"></i></div>
              <h2>Second super feature</h2>
              <p>Saw yet kindness too replying whatever marianne. Old sentiments resolution admiration unaffected its mrs literature. Behaviour new set existence dashwoods. It satisfied to mr commanded consisted disposing engrossed. Tall snug do of till on easy. Form not calm new fail. </p>
            </div>
          </div>
        </div>
      </section>
      <!--### documentation section  ###-->
      <section id="documentation" class="section no-padding-bottom">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-lg-8 col-lg-offset-2 text-center">
              <div class="icon brand-secondary"><i class="pe-7s-graph1"></i></div>
              <h2>Developer Documentation</h2>
              <p>Disamping sebagai sebuah aplikasi mobile, MissKeen juga merupakan penyedia API gratis yang memberikan kebebasan pada developer untuk mengembangkan berbagai aplikasi yang dimiliki. Untuk menggunakan API yang MissKeen gunakan sangat mudah, cukup dengan melakukan mengunduh dokumentasi MissKeen API yang tersedia.  </p>
              <button class="btn btn-ghost"><a href="#">Download PDF</a></button>
              <p class="margin-bottom--zero"><img alt="" src="{{asset('img/features3.png')}}" class="img-responsive"></p>
            </div>
          </div>
        </div>
      </section>
      <!--   *** FEATURES END ***  -->
      <!--   *** TEXT ***-->
      <section id="text" class="text-page section-inverse background-secondary">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2 class="text-center">Description | MissKeen</h2>
              <p class="lead text-center">Discover new foods from a combination of recipes in your kitchen.</p>
              <div class="row">
                <div class="col-sm-6">
                  <p>MissKeen Merupakan aplikasi yang digunakan untuk membuat makanan berdasarkan berbagai macam bahan makanan yang ada pada dapur anda. Anda akan menemukan makanan baru serta mengkombinasikannya berdasarkan bahan makanan anda.</p>
                  <p>Aplikasi ini juga memiliki fitur untuk mencari resep makanan, Missken akan memberikan rekomendasi resep terbaik buat anda.</p>
                </div>
                <div class="col-sm-6">
                  <p>Sekarang anda dapat menggunakan aplikasi ini dimana saja dan kapan sajak. MissKeen Kini hadir di perangkat mobile berbasis android dan sudah ada di play store</p>
                  </br>
                  <p>MissKeen menyediakan dokumentasi API untuk para penyembang aplikasi yang ingin menggunakan API dari aplikasi MissKeen</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--   *** TEXT END ***-->
      <!--   *** INTEGRATIONS ***-->
      <section id="integrations" class="section-gray">
        <div class="container clearfix">
          <div class="row services">
            <div class="col-md-12">
             <h2 class="text-center">Benefits</h2>
              <h4 class="services-heading">Customer</h4>
              <div class="row">
                <div class="col-sm-4">
                  <div class="box box-services">
                    <div class="icon"><i class="pe-7s-loop"></i></div>
                    <h4 class="heading">Easy to Use</h4>
                    <p>Mudah dipakai, cukup masukkan bahan yang anda punya kedalam aplikasi kami!</p>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="box box-services">
                    <div class="icon"><i class="pe-7s-user"></i></div>
                    <h4 class="heading">Sign Up!</h4>
                    <p>Kalian dapat mendaftarkan diri kedalam aplikasi ini untuk bisa mengakses semua resep dalam MissKeen!</p>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="box box-services">
                    <div class="icon"><i class="pe-7s-comment"></i></div>
                    <h4 class="heading">Comment</h4>
                    <p>Kalian juga bisa memberikan komentar pada apliaski ini.</p>
                  </div>
                </div>
              </div>
              <h4 class="services-heading">DEVELOPER</h4>
              <div class="row">
                <div class="col-sm-4">
                  <div class="box box-services">
                    <div class="icon"><i class="pe-7s-science"></i></div>
                    <h4 class="heading">API</h4>
                    <p>Dapatkan API Kami secara gratis cukup daftarkan diri anda sebagai seorang developer!</p>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="box box-services">
                    <div class="icon"><i class="pe-7s-news-paper"></i></div>
                    <h4 class="heading">Documentaion</h4>
                    <p>API kami dilengkapi dengan Documentation yang lengkap dan jelas</p>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="box box-services">
                    <div class="icon"><i class="pe-7s-upload"></i></div>
                    <h4 class="heading">Up to Date</h4>
                    <p>API kami selalu dilengkapi dengan database yang akan terus diperbaharui setiap harinya!</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--   *** INTEGRATIONS END ***-->
      <section id="testimonials" class="section testimonails background-gray-lightest">
        <div class="container">
          <h2 class="text-center">
             
            What Our Customers Say
          </h2>

         </br></br></br>
          <div class="row"> 
            <div class="col-md-12">
              <ul class="owl-carousel testimonials same-height-row">
                <li class="item">
                  <div class="testimonial same-height-always">
                    <div class="text">
                      <p>Suatu pagi, ketika aku bangun ternyata pelanggan sudah pada datang sedangkan bahan makanan hari ini belu di beli. aku bingung, mencoba searching ternyata ada aplikasi MissKeen, akhirnya bisa membuat makanan dari bahan sisa yang ada di dapur. Terima kasih MissKeen.</p>
                    </div>
                    <div class="bottom">
                      <div class="testimonial-icon"> <i class="pe-7s-comment"></i></div>
                      <div class="name-picture"><img alt="" src="{{asset('img/person-1.jpg')}}">
                        <h5>Paijo</h5>
                        <p>Chef, Kedai ABC</p>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="item">
                  <div class="testimonial same-height-always">
                    <div class="text">
                      <p>Aplikasi terbaik bisa menjadi rekomendasi resep dari bahan seadanya. Thanks MissKeen.</p>
                      </br></br></br></br></br>
                    </div>
                    <div class="bottom">
                      <div class="testimonial-icon"> <i class="pe-7s-comment"></i></div>
                      <div class="name-picture"><img alt="" src="{{asset('img/person-2.jpg')}}">
                        <h5>El Pukiano</h5>
                        <p>Chef, Upnormal</p>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="item">
                  <div class="testimonial same-height-always">
                    <div class="text">
                      <p>apkasi ini sangat membantu untuk membuat sarapan pagi untuk prabu dan adi pratama,jadi tidak perlu mikir resep atau makanan lagi.</p>
                     </br></br></br>
                    </div>
                    <div class="bottom">
                      <div class="testimonial-icon"> <i class="pe-7s-comment"></i></div>
                      <div class="name-picture"><img alt="" src="{{asset('img/person-3.png')}}">
                        <h5>Berbie Blue Box</h5>
                        <p>Ibu Kos, BlueBox</p>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="item">
                  <div class="testimonial same-height-always">
                    <div class="text">
                      <p>Aplikasi anak didikku memang paling terbaik. pantas juga mendapat nilai yang baik.</p>
                    </div>
                    <div class="bottom">
                      <div class="testimonial-icon"> <i class="pe-7s-comment"></i></div>
                      <div class="name-picture"><img alt="" src="{{asset('img/person-4.jpg')}}">
                        <h5>Sigit Purnomo</h5>
                        <p>Dosen, UAJY</p>
                      </div>
                    </div>
                  </div>
                </li>
                
              </ul>
            </div>
          </div>
        </div>
      </section>
      <section class="signup-section text-center no-padding-bottom">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h3>Join to MissKeen Today!</h3>
              <p class="lead text-gray-light">Kamu akan mendapatkan kemudahan dalam memasak sesuai bahan yang kamu punya!</p>
              <form class="form-inline margin-bottom--big sign-up-form">
                <!--<input id="email" type="email" placeholder="name@company.com" class="form-control">!-->
                <input id="submit" type="submit" value="Download Now!" class="btn btn-primary">
              </form>
            </div>
            <div class="col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
              <p class="margin-bottom--zero"><img alt="" src="{{asset('img/signup-misskeen.png')}}" class="img-responsive"></p>
            </div>
          </div>
        </div>
      </section>
      <section id="contact" class="section background-gray-lightest"> 
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="box-simple">
                <div class="icon"><i class="pe-7s-map-2"></i></div>
                <h3>Address</h3>
                <p>Jalan< Babarsari<br>Nomor 43<br>DI Yogyakarta, <strong>Sleman</strong></p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="box-simple">
                <div class="icon"><i class="pe-7s-phone"></i></div>
                <h3>Call center</h3>
                <p class="text-muted">Bebas Pulsa!</p>
                <p><strong>+8221 1223 3333</strong></p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="box-simple">
                <div class="icon"><i class="pe-7s-mail-open-file"></i></div>
                <h3>Customer Service</h3>
                <p class="text-muted">Layanan Konsumen atau Developer</p>
                <p><strong><a href="mailto:">cs@misskeen.com</a></strong></p>
              </div>
            </div>
          </div>
        </div>
      </section>

@endsection