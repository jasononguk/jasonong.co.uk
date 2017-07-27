<!DOCTYPE html>
<html>
  <head>

    <?php include ("head.php") ?>

  </head>
  <body id="designs">
    <div id="wrap">
      <div class="container-fluid fadeOnLoad">

        <?php
          include ("header.php")
         ?>

         <div class="row">
           <div class="col-md-8 col-md-offset-2 text-left">
             <div class="col-md-12 text-center">
               <h1>Designs</h1>
               <br>
             </div>
             <br>
             <!-- Lightbox -->
             <div class="col-md-12 text-center">
               <h3>For print:</h3><br>
               <div class="col-md-3 col-xs-6">
                 <a href="#image1" class="app img-responsive wiggle card-1"><img src="media/MT5-artwork-150px.jpeg"/></a>
                 <div class="lightbox short-animate" id="image1">
                   <img class="long-animate" src="media/MT5-artwork.jpg"/>
                 </div>
                 <div id="lightbox-controls" class="short-animate">
                   <a id="close-lightbox" class="long-animate" href="#!">Close Lightbox</a>
                 </div>
               </div>
               <div class="col-md-3 col-xs-6">
                 <a href="#image2" class="app img-responsive wiggle card-1"><img src="media/MT5-artwork-packaging-thumb.png"/></a>
                 <div class="lightbox short-animate" id="image2">
                   <img class="long-animate" src="media/MT5-artwork-packaging.jpg"/>
                 </div>
                 <div id="lightbox-controls" class="short-animate">
                   <a id="close-lightbox" class="long-animate" href="#!">Close Lightbox</a>
                 </div>
               </div>
               <div class="col-md-3 col-xs-6">
                 <a href="#image3" class="app img-responsive wiggle card-1"><img src="media/MT5-poster-thumb.png"/></a>
                 <div class="lightbox short-animate" id="image3">
                   <img class="long-animate" src="media/mt5-poster.png"/>
                 </div>
                 <div id="lightbox-controls" class="short-animate">
                   <a id="close-lightbox" class="long-animate" href="#!">Close Lightbox</a>
                 </div>
               </div>
               <div class="col-md-3 col-xs-6">
                 <a href="#image4" class="app img-responsive wiggle card-1"><img src="media/MT5-merch-thumb.jpg"/></a>
                 <div class="lightbox short-animate" id="image4">
                   <img class="long-animate" src="media/MT5-merch.jpg"/>
                 </div>
                 <div id="lightbox-controls" class="short-animate">
                   <a id="close-lightbox" class="long-animate" href="#!">Close Lightbox</a>
                 </div>
               </div>
               <div class="col-md-12 container-h text-center">
                 <p>Tools I used:</p>
                   <img class="app img-responsive" src="media/tools-logos-print.png" alt="">
               </div>
             </div>
            <!-- Title -->
             <div class="col-md-12 text-center">
               <h3>Current project:</h3><br>
             </div>
             <p>I am currently (July 2017) redesigning <a href="http://ocmusic.co.uk/" target="_blank">ocmusic.co.uk</a>, a site I built using Wordpress. I will be hand coding the new version using HTML5, CSS3 and jQuery with Bootstrap.</p><br>
             <div class="col-md-12 container-h text-center">
               <p>Tools I am using:</p>
                 <img class="app img-responsive" src="media/tools-logos-ocmusic.png" alt="">
             </div>
             <div class="col-md-6 text-center">
               <img class="app img-responsive desktop-wireframe card-1" src="media/oc-music-mobile-portrait-sketch.jpg" alt="">
             </div>
             <div class="col-md-6 text-center">
               <img class="app img-responsive desktop-design card-1" src="media/oc-music-desktop-hd-sketch.jpg" alt="">
             </div>

           </div>
         </div>










         <div class="row">
           <div class="col-md-8 col-md-offset-2 text-center">
             <br><p>You can find more of my designs <a href="https://www.behance.net/jasononguk8b22" target="_blank">here</a> on my Behance page.</p>
           </div>
         </div>









         </div>

      </div>


    <?php
      include ("footer.php")
     ?>

     <?php
       include ("js.php")
      ?>

  </body>
</html>
