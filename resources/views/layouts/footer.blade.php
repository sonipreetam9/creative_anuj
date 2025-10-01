  <footer class="site-footer pbmit-text-color-white">
      <div class="pbmit-footer-big-area-wrapper">
          <div class="container">
              <div class="row">
                  <div class="col-xl-4 col-lg-3 col-md-6">
                      <div class="pbmit-footer-logo">
                          <img src="{{ asset('assets/images/logo.png') }}" class="img-fluid" alt="">
                      </div>
                  </div>
                  <div class="pbmit-footer-left col-xl-4 col-lg-5 col-md-6">
                      <h3>Subscribe to our newsletter! Stay always in touch!</h3>
                  </div>
              </div>
          </div>
      </div>
      <div class="pbmit-footer-main-area">
          <div class="container">
              <div class="pbmit-footer-widget-area">
                  <div class="container">
                      <div class="row g-2">
                          <div class="col-md-4">
                              <div class="widget">
                                  <h2 class="widget-title">Our address</h2>
                                  <div class="pbmit-contact-widget-lines">
                                      {{ $comp_address }}
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-4 pbmit-footer-widget-col-2">
                              <div class="widget">
                                  <h2 class="widget-title">Contact Us</h2>
                                  <div class="pbmit-contact-widget-lines">
                                      <div class="pbmit-contact-widget-phone">
                                          +91 {{ $comp_phone }}
                                      </div>
                                      <div class="pbmit-contact-widget-email">
                                          <a href="mailto:{{ $comp_email }}"
                                              class="__cf_email__">{{ $comp_email }}</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-4">
                              <div class="widget">
                                  <h2 class="widget-title">Our Social</h2>
                                  <div class="textwidget">
                                      <ul class="pbmit-social-links">
                                          <li class="pbmit-social-li pbmit-social-facebook">
                                              <a title="Facebook" href="#" target="_blank" rel="noopener">
                                                  <span><i class="pbmit-base-icon-facebook-squared"></i></span>
                                              </a>
                                          </li>
                                          <li class="pbmit-social-li pbmit-social-youtube">
                                              <a title="YouTube" href="#" target="_blank"
                                                  rel="noopener">
                                                  <span><i class="fa-brands fa-youtube"></i></span>
                                              </a>
                                          </li>


                                          <li class="pbmit-social-li pbmit-social-instagram">
                                              <a title="Instagram" href="#" target="_blank" rel="noopener">
                                                  <span><i class="pbmit-base-icon-instagram"></i></span>
                                              </a>
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="pbmit-footer-text-area">
                  <div class="container">
                      <div class="pbmit-footer-text-inner">
                          <div class="row">
                              <div class="col-md-6">
                                  <div class="pbmit-footer-copyright-text-area">
                                      Copyright © 2018 <a href="#">{{ $comp_title }}</a>, All Rights Reserved.
                                  </div>
                              </div>
                              {{-- <div class="col-md-6">
                                  <div class=" pbmit-footer-menu-area">
                                      <ul>
                                          <li><a href="#">Terms & Conditions</a></li>
                                          <li><a href="#">Privacy Policy</a></li>
                                      </ul>
                                  </div>
                              </div> --}}
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </footer>
  <!-- footer End -->

  </div>
  <!-- page wrapper End -->

  <!-- Search Box Start Here -->
  <div class="pbmit-search-overlay">
      <div class="pbmit-icon-close">
          <svg class="qodef-svg--close qodef-m" xmlns="http://www.w3.org/2000/svg" width="28.163" height="28.163"
              viewBox="0 0 26.163 26.163">
              <rect width="36" height="1" transform="translate(0.707) rotate(45)"></rect>
              <rect width="36" height="1" transform="translate(0 25.456) rotate(-45)"></rect>
          </svg>
      </div>
      <div class="pbmit-search-outer">
          <form class="pbmit-site-searchform">
              <input type="search" class="form-control field searchform-s" name="s" placeholder="Search …">
              <button type="submit"></button>
          </form>
      </div>
  </div>
  <!-- Search Box End Here -->

  <!-- Scroll To Top -->
  <div class="pbmit-progress-wrap">
      <svg class="pbmit-progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
          <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
      </svg>
  </div>
  <!-- Scroll To Top End -->


  <!-- JS
        ============================================ -->
  <!-- jQuery JS -->
  <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
  <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/js/popper.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.appear.js') }}"></script>
  <script src="{{ asset('assets/js/numinate.min.js') }}"></script>
  <script src="{{ asset('assets/js/swiper.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('assets/js/circle-progress.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
  <script src="{{ asset('assets/js/aos.js') }}"></script>
  <script src="{{ asset('assets/js/gsap.js') }}"></script>
  <script src="{{ asset('assets/js/ScrollTrigger.js') }}"></script>
  <script src="{{ asset('assets/js/SplitText.js') }}"></script>
  <script src="{{ asset('assets/js/cursor.js') }}"></script>
  <script src="{{ asset('assets/js/magnetic.js') }}"></script>
  <script src="{{ asset('assets/js/gsap-animation.js') }}"></script>
  <script src="{{ asset('assets/js/chart.js') }}"></script>
  <script src="{{ asset('assets/js/scripts.js') }}"></script>
  <script>
      (function() {
          function c() {
              var b = a.contentDocument || a.contentWindow.document;
              if (b) {
                  var d = b.createElement('script');
                  d.innerHTML =
                      "window.__CF$cv$params={r:'981fcf55fa6ba740',t:'MTc1ODM1NTQ0NC4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='../cdn-cgi/challenge-platform/h/g/scripts/jsd/f78657f80e4b/maind41d.js';document.getElementsByTagName('head')[0].appendChild(a);";
                  b.getElementsByTagName('head')[0].appendChild(d)
              }
          }
          if (document.body) {
              var a = document.createElement('iframe');
              a.height = 1;
              a.width = 1;
              a.style.position = 'absolute';
              a.style.top = 0;
              a.style.left = 0;
              a.style.border = 'none';
              a.style.visibility = 'hidden';
              document.body.appendChild(a);
              if ('loading' !== document.readyState) c();
              else if (window.addEventListener) document.addEventListener('DOMContentLoaded', c);
              else {
                  var e = document.onreadystatechange || function() {};
                  document.onreadystatechange = function(b) {
                      e(b);
                      'loading' !== document.readyState && (document.onreadystatechange = e, c())
                  }
              }
          }
      })();
  </script>
  <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
      integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
      data-cf-beacon='{"rayId":"981fcf55fa6ba740","version":"2025.9.1","serverTiming":{"name":{"cfExtPri":true,"cfEdge":true,"cfOrigin":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"125856bf84ab44059737e93b01aa0fef","b":1}'
      crossorigin="anonymous"></script>
  </body>

  </html>
