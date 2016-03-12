		
<?php wp_footer(); ?>
    <div class="footer"> <!-- FOOTER -->
      <div class="site-map pv-28 bg-gray-darker hidden-xs">
        <div class="container text-center">
          <div class="row">
            <div class="col-sm-12">
              <h6 class="text-white">Nombre de la Empresa</h6>
            </div>
          </div>
        </div>
      </div>
    </div>  <!-- END:Footer -->
    <script src="assets/js/jquery.min.js"></script> <!-- App scripts -->
    <script src="assets/js/scripts.min.js"></script>
    <script src="assets/js/owl.carousel.js"></script>
    <script>
      $(document).ready(function() {
        $("#owl-demo").owlCarousel({
          autoPlay: 3000,
          items : 4,
          itemsDesktop : [1199,3],
          itemsDesktopSmall : [979,3]
        });

      });
    </script>
    <script>
       $(function() {
            $('a[href*=#]:not([href=#])').click(function() {
              if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                if (target.length) {
                  $('html,body').animate({
                    scrollTop: target.offset().top
                  }, 1000);
                  return false;
                }
              }
            });
       });
    </script>
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-52f279493184b19f" async="async"></script>
  </body>
</html>