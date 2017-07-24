<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jason Ong - Sites</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/hamburgers.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  </head>
  <body id="sites">
    <div id="wrap">
      <div class="container-fluid fadeOnLoad">

        <?php
          include ("header.php")
         ?>

         <div class="row">
           <div class="col-md-6 col-md-offset-3 text-left">
             <h1>Sites</h1>
             <br>
             <img src="media/hatch_full-size-logo-colour-6-150-height.png" alt="">
             <p><strong>MY ROLE:</strong> Wordpress Developer</p>
             <br>
             <p>I developed the Hatch website with my client right from the onset of the project to where it is today. From finding the best suited hosting company to planning the User experience, through to UI Design & implementation. Using the Agile methodology, we worked from planning, wireframing and development to launch in late 2016.</p>
             <br>
             <p>Hatch is a Community Interest Company passionate about supporting female development, challenging workplace inequality and increasing meaningful career opportunities for mums across the UK.<br><br>I built the site using Kleo a BuddyPress community theme as a starting point, then heavily customising the design and page layouts with HTML / CSS and Visual Composer. For the Membership / Gamification features, I used a combination of BuddyPress and BadgeOS.</p><br>
             <p>View my journey developing Hatch <a href="hatch.php">here</a></p><br>

           </div>
         </div>


             <div class="row overflow-hide">
               <div class="col-md-6 col-md-offset-3 container-h text-center">
                 <img class="app img-responsive" src="media/hatch-mobile.png" alt="">
               </div>
             </div>

             <div class="row">
               <div class="col-md-6 col-md-offset-3">
                 <img class="app img-responsive" src="media/hatch-pages.png" alt="">
               </div>
             </div>




             <div class="row">

               <div class="col-md-6 col-md-offset-3 text-center">
                 <p>'Peasy'</p>
                 <br>
               </div>
               <div class="col-md-6 col-md-offset-3 text-left">
                 <p>Peasy is an incentivisation web app for businesses who want to encourage their customers to pay invoices promptly.</p><br>
                 <p>The project is currently put on hold until further notice. The site was hand-coded with HTML, CSS on the Laravel PHP Framework.</p><br>
               </div>
             </div>


                 <div class="row overflow-hide">
                   <div class="col-md-6 col-md-offset-3 container-h text-center">
                     <img class="app img-responsive" src="media/peasy-mobile.png" alt="">
                   </div>
                 </div>

                 <div class="row">
                   <div class="col-md-6 col-md-offset-3">
                     <img class="app img-responsive" src="media/peasy-pages.png" alt="">
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
