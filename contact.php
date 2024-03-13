<?php
include 'include/css-url.php';
include 'include/header.php';
?>
<div class="about_back d-flex align-items-center">
  <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
    <h2>Contact</h2>
    <ol>
      <li><a href="index.php">Home</a></li>
      <li class="text-white">Contact</li>
    </ol>
  </div>
</div>
<div class="container mt-5">
  <div class="row">
    <div class="col-md-4">
      <div class="add_card">
        <div class="card">
          <div class="info_items text-center">
            <i class="fa fa-map-marker text-white" aria-hidden="true"></i>
            <h3 class="text-white mt-2">Our Address</h3>
            <p class="text-white">Shish Ram Complex Badarpur New Delhi 110044</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="add_card">
        <div class="card">
          <div class="info_items text-center">
            <i class="fa fa-phone text-white" aria-hidden="true"></i>
            <h3 class="text-white mt-2">Call Us</h3>
            <p class="text-white">1234567890</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="add_card">
        <div class="card">
          <div class="info_items text-center">
            <i class="fa fa-envelope text-white" aria-hidden="true"></i>
            <h3 class="text-white mt-2">Our Address</h3>
            <p class="text-white">info@gmail.com</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="content">
  <div class="container">
    <div class="row align-items-stretch no-gutters contact-wrap">
      <div class="col-md-12">
        <div class="form h-100">
          <h3><b>GET IN TOUCH</b></h3>
          <form class="row contact-form-wrap" id="contact_form" method="POST">
            <div class="col-md-6">
              <div class="form-group">
                <input name="name" class="form-control" type="text" placeholder="Name*" required />
              </div>

            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input name="email" class="form-control" type="email" placeholder="E-mail*" required />
              </div>

            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input name="phone" class="form-control" type="text" placeholder="Phone Number*" onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;" minlength="10" maxlength="10" required />
              </div>

            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input name="subject" class="form-control" type="text" placeholder="Subject*" />
              </div>

            </div>
            <div class="col-md-12">
              <div class="form-group">
                <textarea name="message" class="form-control" rows="8" placeholder="Message"></textarea>
              </div>

            </div>
            <button type="submit" class="btn-style btn btn-primary rounded-0 m-auto" onclick="submitForm('contact_form')">Send Message</button>
            <div id="msg" class="message"></div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="//code.tidio.co/xlnzklafmsgeufhjx8h2o4ktgn4jjjkm.js" async></script>
<?php
include 'include/footer.php';
include 'include/js-url.php';
?>