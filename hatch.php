<!DOCTYPE html>
<html>
  <head>

    <?php include ("head.php") ?>

  </head>
  <body id="sites">
    <div id="wrap">
      <div class="container-fluid fadeOnLoad">

        <?php
          include ("header.php")
         ?>

         <div class="row">
           <div class="col-md-8 col-md-offset-2 text-center">
             <a href="sites.php"><img class="card-2" src="media/arrow-round-left.png" alt=""></a>
            <br>
             <h1>Hatch</h1>
             <br>
             <p>'Development journey'</p>
             <br>
             <div class="col-md-12 text-left">
               <p>In March 2016 I took on the Hatch project as a freelance Wordpress Developer working on the project in the evenings outside of my day job as a Project Manager. Hatch needed to be a Membership Platform with an element of Gamification.</p><br>
               <p>I walked Sarah, CEO of Hatch through every step of the way (not using technical jargon) ensuring open and transparent communication about what we needed along the way. Since the site went live in December 2016, Sarah was able to raise more funding for the project due to its professional presentation and clear messaging; this enabled Hatch to hire my services for one day a week since January 2017.</p><br>
             </div>
             <div class="row overflow-hide">
               <div class="col-md-12 container-h text-center">
                 <p>User journey sketches sent to me:</p>
                 <div class="col-md-4">
                   <img class="app img-responsive card-1" src="media/hatch-sketches-1.jpg" alt="">
                 </div><div class="col-md-8">
                   <img class="app img-responsive card-1" src="media/hatch-sketches-2.jpg" alt="">
                 </div>
                 <div class="row">
                   <div class="col-md-12 text-center">
                     <p>Further development of the User gamification journey:</p>
                     <img class="app img-responsive card-1" src="media/user-hatch-journey.png" alt="">
                     <span class="small-text">The map above was made together with UX designer Sophie Lepinoy.</span>
                   </div>
                 </div>
               </div>
             </div>
             <br>
             <div class="row overflow-hide">
               <div class="col-md-12 container-h text-center">
                 <p>Early prototype designs for the landing page:</p>
                 <div class="col-md-4 col-xs-4">
                   <img class="app img-responsive card-1" src="media/hatch-mockup-1.jpg" alt="">
                 </div>
                 <div class="col-md-4 col-xs-4">
                   <img class="app img-responsive card-1" src="media/hatch-mockup-2.jpg" alt="">
                 </div>
                 <div class="col-md-4 col-xs-4">
                   <img class="app img-responsive card-1" src="media/hatch-mockup-3.jpg" alt="">
                 </div>
               </div>
               <div class="text-center" id="hatch-membership">
                 <div class="col-md-6 col-xs-12">
                   <p>Prototype of the activity wall:</p>
                   <img class="app img-responsive card-1" src="media/hatch-membership-page-wip.png" alt="">
                 </div>
                 <div class="col-md-6 col-xs-12">
                   <p>Finished version of the activity wall:</p>
                   <img class="app img-responsive card-1" src="media/hatch-membership-page-production.png" alt="">
                 </div>
               </div>
             </div>
             <div class="row overflow-hide">
               <div class="col-md-12 container-h text-center">
                 <div class='embed-container'><iframe src='https://www.youtube.com/embed/I2sul9Wo8VQ' frameborder='0' allowfullscreen></iframe></div>
                 <br>
                </div>
               <div class="col-md-12 text-left">
                 <p>The video above shows the various Membership pages. September will see the launching of our Membership Area, where our Users (Hatch Mammas) will be taken on a journey back to work.</p>
                 <br>
               </div>
               <div class="col-md-12 text-center">
                 <p>Wireframe, Production to Changelog:</p>
               </div>
               <div class="col-md-12 text-left">
                 <p>We went through several iterations of the design, omitting and adding sections as we went. I would get sketches like these to start with, then develop them getting feedback as I developed the page. The Changelog shows the various tweaks and updates I made over a period.</p>
                 <br>
               </div>
               <div class="col-md-4">
                 <p>Training page sketch:</p>
                 <img class="app img-responsive card-1" src="media/hatch-training-page-wireframe.jpg" alt="">
               </div>
               <div class="col-md-4">
                 <p>Training page screenshot:</p>
                 <a href="https://www.letshatch.co.uk/training/" target="_blank"><img class="app img-responsive card-1" src="media/hatch-training-page-production.png" alt=""></a>
               </div>
               <div class="col-md-4 text-center">
                 <p>Example of site Changelog:</p>
                 <div class="small-text text-left">
                   Version 2.1 030217<br>
                   - Plugin Updates: Cookie Consent, Google Analytics for WordPress by MonsterInsights, PDF Embedder, WP Smush<br>
                   - Identified Logo issue - displaying two logos on tablets resolution. FIXED with media query<br>
                   - Overlapping menu height issue - not resolved, work in progress <br>
                  <br>
                  Version 2.0 300117 <br>
                  - Typo fix on About Us page, What is hatch - Hatch <br>
                  - Installed: Cookie Consent 2.3.0 / Configured Cookie page and style<br>
                  - Added Privacy Page: https://www.letshatch.co.uk/privacy/ <br>
                  - Buddypress Like button BG / Text Colour change to match colours and highlight making site more colourful <br>
                  <br>
                  Version 2.0 230117 <br>
                  - (testing on http://htch130117.jasonair.com/) Installed: WP-Optimize to clean up database and unused files etc that may be slowing site down - pending speed tests to check improvements <br>
                  - Installed: W3 Super Cache enabled GZIP compression <br>
                  - Website Speed Increase: 18/100 Mobile to 28/100, and 22/100 to 42/100 on Google PageSpeed Insights <br>
                  <br>
                  Version 2.0 160117 <br>
                  - Added Logo Retina, Apple Iphone Icon, Apple Iphone Retina Icon, Apple iPad Icon, Apple iPad Retina Icon <br>
                  - Login Out now redirects to landing page (previously back to site wide inspiration board) <br>
                  - Stop Hatch emails going to junk folder  - configured to: smtp.gmail.com, port 587, smtp: tested working <br>
                  - Disabled Plugin: BP Disable Activation Reloaded - since Junk mail issue resolved. Can revert back to Activation emails going to users inbox. <br>
                  - Deleted: [{{{site.name}}}] from Emails generated from Buddypress, from Activation, Private Messages to Mentions etc - Looks more professional as emails now come from Hatch as sender name <br>
                  <br>
                  Version 2.0 - 060117 <br>
                  - Disabled registration activation email confirmation, enabling us to make sign easier / quicker more streamlined<br>
                  - Hide / Filter Member joined, photo changed activity from Inspiration Page - Created Child Theme Folder: buddypress, activity. <br>
                  - No need to Activate / Verify post Signup. Combination of Email Activation disable and Filtering Activity loop of who has joined. Now user just signs up and will immediately be redirected to Inspiration Page where they can start interacting with the site. This page can be redirected to a Welcome To New Members Page for some guided tours. Forthcoming feature TBC. <br>
                  - s2Member Registration Link Expiry Date Change: ref: https://www.s2member.com/forums/topic/registration-link-expiring/ - have generated 2x 30day registration links to try out in 3 days time. Created files as per linked instructions: wp-content/mu-plugins/s2hacks.php <br>
                  <br>
                </div>
               </div>

             </div>

             <p>Visit Hatch <a href="https://www.letshatch.co.uk" target="_blank">here</a></p><br>
             <div class="row overflow-hide">

               <a href="sites.php"><img class="card-2" src="media/arrow-round-left.png" alt=""></a>
             </div>
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
