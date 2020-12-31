@extends('layouts.app')
@section('content')
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

  <!-- Contact Us Section -->
    <section class="Material-contact-section section-padding section-dark" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">
      <div class="container" style="font-size: 20px">
          <div class="row">
              <!-- Section Titile -->
              <div class="col-md-12 wow animated fadeInLeft" data-wow-delay=".2s">
                  <h1 class="section-title" >Liên hệ với chúng tôi nếu bạn có nhu cầu đặt dịch vụ:</h1>
              </div>
          </div>
          <div class="row" style="padding: 10px">
              <!-- Section Titile -->
              <div class="col-md-6 mt-3 contact-widget-section2 wow animated fadeInLeft" data-wow-delay=".2s">
                    <div class="find-widget">
                    Địa chỉ 1: 295 Trung Kính - Yên Hòa - Cầu Giấy<br>
                    Tel: 024.22.444.222<br>
                    Hotline: 0788.444.222<br>
                    Website: www.cleanexpress.vn<br>
                    Email: info@cleanexpress.vn<br><br><br>
                    Địa chỉ 2: 68/10 Đào Duy Anh - P.9 - Q. Phú Nhuận.<br>
                    Tel: 028.399.76.222<br>
                    Hotline: 08 399 76 222<br>
                    Website: www.cleanexpress.vn<br>
                    Email: info@cleanexpress.vn<br>
                    </div>
              </div>
              <!-- contact form -->
              <div class="col-md-6 wow animated fadeInRight" data-wow-delay=".2s">
                  <form class="shake" role="form" method="post" id="contactForm" name="contact-form" data-toggle="validator">
                      <!-- Name -->
                      <div class="form-group label-floating">
                        <label class="control-label" for="name">Name</label>
                        <input class="form-control" id="name" type="text" name="name" required data-error="Please enter your name">
                        <div class="help-block with-errors"></div>
                      </div>
                      <!-- email -->
                      <div class="form-group label-floating">
                        <label class="control-label" for="email">Email</label>
                        <input class="form-control" id="email" type="email" name="email" required data-error="Please enter your Email">
                        <div class="help-block with-errors"></div>
                      </div>
                      <!-- Subject -->
                      <div class="form-group label-floating">
                        <label class="control-label">Subject</label>
                        <input class="form-control" id="msg_subject" type="text" name="subject" required data-error="Please enter your message subject">
                        <div class="help-block with-errors"></div>
                      </div>
                      <!-- Message -->
                      <div class="form-group label-floating">
                          <label for="message" class="control-label">Message</label>
                          <textarea class="form-control" rows="3" id="message" name="message" required data-error="Write your message"></textarea>
                          <div class="help-block with-errors"></div>
                      </div>
                      <!-- Form Submit -->
                      <div class="form-submit mt-5">
                          <button style="font-size: 20px" class="btn btn-common" type="submit" id="form-submit"><i class="material-icons mdi mdi-message-outline"></i> Send Message</button>
                          <div id="msgSubmit" class="h3 text-center hidden"></div>
                          <div class="clearfix"></div>
                      </div>
                  </form>
              </div>
          </div>
      </div>
    </section>
@endsection