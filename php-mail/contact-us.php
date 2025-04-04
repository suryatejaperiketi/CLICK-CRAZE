<?php $page = 'contact';
include 'header.php'; ?>

<section class="contact-banner d-flex align-items-center">
  <div class="container py-5">
    <h1 class="display-2 text-white mb-4 animated slideInDown">Contact Us</h1>
    <nav aria-label="breadcrumb animated slideInDown">
      <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Pages</a></li>
        <li class="breadcrumb-item text-primary" aria-current="page">Contact Us</li>
      </ol>
    </nav>
  </div>
</section>

<section>
  <div class="container-xxl pt-5 pb-3">
    <div class="container">
      <div class="row d-flex justify-content-center text-center">
        <div class="col-12 col-md-9 wow fadeInUp" data-wow-delay="0.4s">
          <h3 class="text-dark"><strong>Get in Touch with Goutam Multi Speciality Hospital</strong></h3>
          <p>Goutam Multi Speciality Hospital is always striving to offer the best healthcare facilities.As we are now
            revolving around the digital world therefore we have easy access to all our patients within a fraction of time
            our dedicated team will always be there at your service for your healthcare information and support you need.
            Whether you have questions, need to schedule an appointment, or just want to say hello, reaching out to us is
            simple.</p>
          <h1 class="display-5 text-dark"><strong> Reach Out to Our Caring Team</strong></h1>
          <p>If you have a medical concern, need assistance with appointments, or want to inquire about our
          services, our dedicated team is just a phone call away. We understand that healthcare needs can be urgent, and
          our friendly staff is ready to provide you with the guidance and information you require.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="subpage-tabs" class="bg-white">
  <div class="container py-5">
    <div class="row">
      <div class="col-12">
        <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="overview-tab" data-bs-toggle="tab" data-bs-target="#overview"
              type="button" role="tab" aria-controls="overview" aria-selected="true">KPHB</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="diseases-tab" data-bs-toggle="tab" data-bs-target="#diseases" type="button"
              role="tab" aria-controls="diseases" aria-selected="false">Gachibowli</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="procedures-tab" data-bs-toggle="tab" data-bs-target="#procedures" type="button"
              role="tab" aria-controls="procedures" aria-selected="false">Kompally</button>
          </li>
        </ul>
        <div class="tab-content py-3 px-5 bg-light" id="myTabContent">
          <div class="tab-pane fade show active p-3" id="overview" role="tabpanel" aria-labelledby="overview-tab">
            <h3><strong>Goutam Hospital in KPHB</strong></h3>
            <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>H.No.261, MIG, Road No. 4, Kukatpally Housing Board
              Colony, Kukatpally, Hyderabad, Telangana - 500072</p>
            <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@goutamneurocare.com</p>
            <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+91 9666219699</p>
          </div>

          <div class="tab-pane fade p-3" id="diseases" role="tabpanel" aria-labelledby="diseases-tab">
            <h3><strong>Goutam Hospital in Gachibowli </strong></h3>
            <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i> 116, Lumbini Enclave, Hitech City Main Rd, near IKEA Restaurant, Gachibowli, Hyderabad, Telangana 500081</p>
            <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@goutamneurocare.com</p>
            <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+91 9885141699</p>
          </div>

          <div class="tab-pane fade p-3" id="procedures" role="tabpanel" aria-labelledby="procedures-tab">
            <h3><strong>Goutam Hospital in Kompally</strong></h3>
            <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i> 2 Medchal Road, Sri Ganesh Nagar, Doolapally Cross Road, Secunderabad, 500100, Telangana</p>
            <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@goutamneurocare.com</p>
            <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+91 99852 69996</p>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<!-- Contact Start -->
<div class="container-xxl py-5">
  <div class="container">
    <div class="row g-5">
      <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
        <h3 class="mb-4"><strong>Feel Free to Reach US</strong></h3>
        <!-- <form action="email-script.php" method="post"> -->
        <!-- <form onsubmit="sendEmail(); reset(); return false;" method="POST"> -->
        <!-- <form action="https://formspree.io/f/xbjvpbey" method="POST"> -->
        <form action="send.php" method="POST">
          <div class="row g-3">
            <div class="col-md-6">
              <div class="form-floating">
                <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
                <label for="name">Your Name</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating">
                <input type="email" class="form-control" id="email" name="email"  placeholder="Your Email">
                <label for="email">Your Email</label>
              </div>
            </div>
            <div class="col-12">
              <div class="form-floating">
                <input type="number" class="form-control" id="phone" name="phone" placeholder="Your Number">
                <label for="subject">Number</label>
              </div>
            </div>
            <div class="col-12">
              <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a message here" id="message"
                  style="height: 200px" name="message"></textarea>
                <label for="message">Message</label>
              </div>
            </div>
            <div class="col-12">
              <button class="btn btn-custom rounded-pill py-2 px-5" name="send" type="submit">Send Message</button>
            </div>
          </div>
        </form>
      </div>
      <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
        <h3 class="mb-4">Our Location:</h3>

        <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Goutam neuro care, H.No.261, MIG, Road No. 4, Kukatpally Housing Board Colony, Kukatpally, Hyderabad, Telangana - 500072&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://gachanymph.com/">Gacha Nymph APK</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:400px;}.gmap_iframe {height:400px!important;}</style></div>
      </div>
    </div>
  </div>
</div>
<!-- Contact End -->

<?php include 'footer.php'; ?>