  <!-- JS Global Compulsory  -->
  <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

  <!-- JS Implementing Plugins -->
  <script src="assets/vendor/hs-header/dist/hs-header.min.js"></script>
  <script src="assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.js"></script>
  <script src="assets/vendor/hs-show-animation/dist/hs-show-animation.min.js"></script>
  <script src="assets/vendor/hs-go-to/dist/hs-go-to.min.js"></script>
  <script src="assets/vendor/aos/dist/aos.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- JS Front -->
  <script src="assets/js/theme.min.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    (function() {
      // INITIALIZATION OF HEADER
      // =======================================================
      new HSHeader('#header').init()


      // INITIALIZATION OF MEGA MENU
      // =======================================================
      new HSMegaMenu('.js-mega-menu', {
          desktop: {
            position: 'left'
          }
        })


      // INITIALIZATION OF SHOW ANIMATIONS
      // =======================================================
      new HSShowAnimation('.js-animation-link')


      // INITIALIZATION OF BOOTSTRAP VALIDATION
      // =======================================================
      HSBsValidation.init('.js-validate', {
        onSubmit: data => {
          data.event.preventDefault()
          alert('Submited')
        }
      })


      // INITIALIZATION OF BOOTSTRAP DROPDOWN
      // =======================================================
      HSBsDropdown.init()


      // INITIALIZATION OF GO TO
      // =======================================================
      new HSGoTo('.js-go-to')


      // INITIALIZATION OF AOS
      // =======================================================
      AOS.init({
        duration: 650,
        once: true
      });


      // INITIALIZATION OF SWIPER
      // =======================================================
      let activeIndex = 0
      var sliderThumbs = new Swiper('.js-swiper-thumbs', {
        slidesPerView: 1,
        autoplay: false,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
        followFinger: false,
        loop: true,
        on: {
          'slideChangeTransitionEnd': function (event) {
            if (sliderMain === undefined) return
            sliderMain.slideTo(event.activeIndex)
          }
        }
      });

      var sliderMain = new Swiper('.js-swiper-main', {
        effect: 'fade',
        autoplay: false,
        disableOnInteraction: true,
        loop: true,
        navigation: {
          nextEl: '.js-swiper-main-button-next',
          prevEl: '.js-swiper-main-button-prev',
        },
        thumbs: {
          swiper: sliderThumbs
        },
        on: {
          'slideChangeTransitionEnd': function (event) {
            if (sliderThumbs === undefined) return
            sliderThumbs.slideTo(event.activeIndex)
          }
        }
      })

      // Clients
      var swiper = new Swiper('.js-swiper-clients',{
        slidesPerView: 2,
        breakpoints: {
          380: {
            slidesPerView: 3,
            spaceBetween: 15,
          },
          768: {
            slidesPerView: 4,
            spaceBetween: 15,
          },
          1024: {
            slidesPerView: 5,
            spaceBetween: 15,
          },
        },
      });

      // Card Grid
      var swiper = new Swiper('.js-swiper-card-blocks',{
        slidesPerView: 1,
        pagination: {
          el: '.js-swiper-card-blocks-pagination',
          dynamicBullets: true,
          clickable: true,
        },
        breakpoints: {
          620: {
            slidesPerView: 2,
            spaceBetween: 15,
          },
          1024: {
            slidesPerView: 3,
            spaceBetween: 15,
          },
        },
      });
    })()

      // Menampilkan form login saat modal ditampilkan
    $('#loginModal').on('shown.bs.modal', function () {
        $('#loginModalFormLogin').show();
        $('#loginModalFormResetPassword').hide();
    });

    // Menampilkan form reset password saat tombol "Forgot Password?" ditekan
    $('.js-animation-link').on('click', function () {
        $('#loginModalFormLogin').hide();
        $('#loginModalFormResetPassword').show();
    });

    // Kembali ke form login saat tombol "Back to Log in" ditekan
    $('.js-animation-link').on('click', function () {
        $('#loginModalFormLogin').show();
        $('#loginModalFormResetPassword').hide();
    });

  </script>