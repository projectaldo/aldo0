@extends('layouts.main')
@section('container')

<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs">
    <div class="page-header d-flex align-items-center" style="background-image: url('');">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
            <h2>Blog</h2>
            <p>Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
          </div>
        </div>
      </div>
    </div>
    <nav>
      <div class="container">
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Blog</li>
        </ol>
      </div>
    </nav>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Blog Section ======= -->
  <section id="blog" class="blog">
    <div class="container" data-aos="fade-up">

      <div class="row gy-4 posts-list">

        <div class="col-xl-4 col-md-6">
          <article>

            <div class="post-img">
              <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
            </div>

            <p class="post-category">Politics</p>

            <h2 class="title">
              <a href="blog-details.html">Dolorum optio tempore voluptas dignissimos</a>
            </h2>

            <div class="d-flex align-items-center">
              <img src="assets/img/blog/blog-author.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
              <div class="post-meta">
                <p class="post-author-list">Maria Doe</p>
                <p class="post-date">
                  <time datetime="2022-01-01">Jan 1, 2022</time>
                </p>
              </div>
            </div>

          </article>
        </div><!-- End post list item -->

        <div class="col-xl-4 col-md-6">
          <article>

            <div class="post-img">
              <img src="assets/img/blog/blog-2.jpg" alt="" class="img-fluid">
            </div>

            <p class="post-category">Sports</p>

            <h2 class="title">
              <a href="blog-details.html">Nisi magni odit consequatur autem nulla dolorem</a>
            </h2>

            <div class="d-flex align-items-center">
              <img src="assets/img/blog/blog-author-2.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
              <div class="post-meta">
                <p class="post-author-list">Allisa Mayer</p>
                <p class="post-date">
                  <time datetime="2022-01-01">Jun 5, 2022</time>
                </p>
              </div>
            </div>

          </article>
        </div><!-- End post list item -->

        <div class="col-xl-4 col-md-6">
          <article>

            <div class="post-img">
              <img src="assets/img/blog/blog-3.jpg" alt="" class="img-fluid">
            </div>

            <p class="post-category">Entertainment</p>

            <h2 class="title">
              <a href="blog-details.html">Possimus soluta ut id suscipit ea ut in quo quia et soluta</a>
            </h2>

            <div class="d-flex align-items-center">
              <img src="assets/img/blog/blog-author-3.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
              <div class="post-meta">
                <p class="post-author-list">Mark Dower</p>
                <p class="post-date">
                  <time datetime="2022-01-01">Jun 22, 2022</time>
                </p>
              </div>
            </div>

          </article>
        </div><!-- End post list item -->

        <div class="col-xl-4 col-md-6">
          <article>

            <div class="post-img">
              <img src="assets/img/blog/blog-4.jpg" alt="" class="img-fluid">
            </div>

            <p class="post-category">Sports</p>

            <h2 class="title">
              <a href="blog-details.html">Non rem rerum nam cum quo minus olor distincti</a>
            </h2>

            <div class="d-flex align-items-center">
              <img src="assets/img/blog/blog-author-4.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
              <div class="post-meta">
                <p class="post-author-list">Lisa Neymar</p>
                <p class="post-date">
                  <time datetime="2022-01-01">Jun 30, 2022</time>
                </p>
              </div>
            </div>

          </article>
        </div><!-- End post list item -->

        <div class="col-xl-4 col-md-6">
          <article>

            <div class="post-img">
              <img src="assets/img/blog/blog-5.jpg" alt="" class="img-fluid">
            </div>

            <p class="post-category">Politics</p>

            <h2 class="title">
              <a href="blog-details.html">Accusamus quaerat aliquam qui debitis facilis consequatur</a>
            </h2>

            <div class="d-flex align-items-center">
              <img src="assets/img/blog/blog-author-5.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
              <div class="post-meta">
                <p class="post-author-list">Denis Peterson</p>
                <p class="post-date">
                  <time datetime="2022-01-01">Jan 30, 2022</time>
                </p>
              </div>
            </div>

          </article>
        </div><!-- End post list item -->

        <div class="col-xl-4 col-md-6">
          <article>

            <div class="post-img">
              <img src="assets/img/blog/blog-6.jpg" alt="" class="img-fluid">
            </div>

            <p class="post-category">Entertainment</p>

            <h2 class="title">
              <a href="blog-details.html">Distinctio provident quibusdam numquam aperiam aut</a>
            </h2>

            <div class="d-flex align-items-center">
              <img src="assets/img/blog/blog-author-6.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
              <div class="post-meta">
                <p class="post-author-list">Mika Lendon</p>
                <p class="post-date">
                  <time datetime="2022-01-01">Feb 14, 2022</time>
                </p>
              </div>
            </div>

          </article>
        </div><!-- End post list item -->

      </div><!-- End blog posts list -->

      <div class="blog-pagination">
        <ul class="justify-content-center">
          <li><a href="#">1</a></li>
          <li class="active"><a href="#">2</a></li>
          <li><a href="#">3</a></li>
        </ul>
      </div><!-- End blog pagination -->

    </div>
  </section><!-- End Blog Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-5 col-md-12 footer-info">
        <a href="index.html" class="logo d-flex align-items-center">
          <span>Impact</span>
        </a>
        <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
        <div class="social-links d-flex mt-4">
          <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>

      <div class="col-lg-2 col-6 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">About us</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#">Terms of service</a></li>
          <li><a href="#">Privacy policy</a></li>
        </ul>
      </div>

      <div class="col-lg-2 col-6 footer-links">
        <h4>Our Services</h4>
        <ul>
          <li><a href="#">Web Design</a></li>
          <li><a href="#">Web Development</a></li>
          <li><a href="#">Product Management</a></li>
          <li><a href="#">Marketing</a></li>
          <li><a href="#">Graphic Design</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
        <h4>Contact Us</h4>
        <p>
          A108 Adam Street <br>
          New York, NY 535022<br>
          United States <br><br>
          <strong>Phone:</strong> +1 5589 55488 55<br>
          <strong>Email:</strong> info@example.com<br>
        </p>

      </div>

    </div>
  </div>

  <div class="container mt-4">
    <div class="copyright">
      &copy; Copyright <strong><span>Impact</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/impact-bootstrap-business-website-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </div>

</footer><!-- End Footer -->
<!-- End Footer -->

@endsection