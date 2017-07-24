<script
src="https://code.jquery.com/jquery-3.2.1.js"
integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
crossorigin="anonymous"></script>

  <script>

    $(document).ready(function() {

      var $hamburger = $(".hamburger");
      $hamburger.on("click", function() {
      $hamburger.toggleClass("is-active");
      $('#navbar').slideToggle(500);
      });


      // $(function(){
      //   $('a').each(function(){
      //     if ($(this).prop('href') == window.location.href) {
      //         $(this).addClass('active'); $(this).parents('li').addClass('active');
      //     }
      //   });
      // });

      $('.fadeOnLoad').fadeIn(500);

      /*! Fades out the whole page when clicking links */
      $('#navbar a').click(function(e) {
      e.preventDefault();
      newLocation = this.href;
      $('#navbar').slideToggle(500);
      $('body').fadeOut('slow', newpage);
      });
      function newpage() {
      window.location = newLocation;
      }


      // Hover tooltip for accordion drop down section
      $('[data-toggle="tooltip"]').tooltip();




    });
  </script>





<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="js/validator.js"></script>
<script src="js/contact.js"></script>
