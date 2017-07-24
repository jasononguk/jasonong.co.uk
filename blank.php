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
           <div class="col-md-6 col-md-offset-3 text-center">
             <h1>Page Title</h1>
             <br>
             <p>Title</p>
             <br>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><br>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p><br>
             <p>Lorem ipsum dolor <a href="#" target="_blank">here</a></p>
             <p>Visit the site <a href="https://www.letshatch.co.uk" target="_blank">here</a></p><br>
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
