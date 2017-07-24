<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jason Ong - Contact</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/hamburgers.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  </head>
  <body id="contact">
    <div id="wrap">
      <div class="container-fluid">

        <?php
          include ("header.php")
         ?>
          <div class="col-md-6 col-md-push-3 space-top-medium" id="form-area">

             <form id="contact-form" method="post" action="contact.php" role="form">

                 <div class="messages"></div>

                 <div class="controls">

                     <div class="row">
                         <div class="col-md-6">
                             <div class="form-group">
                                 <label for="form_name">Firstname *</label>
                                 <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                                 <div class="help-block with-errors"></div>
                             </div>
                         </div>
                         <div class="col-md-6">
                             <div class="form-group">
                                 <label for="form_lastname">Lastname *</label>
                                 <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                                 <div class="help-block with-errors"></div>
                             </div>
                         </div>
                     </div>
                     <div class="row">
                         <div class="col-md-6">
                             <div class="form-group">
                                 <label for="form_email">Email *</label>
                                 <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                                 <div class="help-block with-errors"></div>
                             </div>
                         </div>
                         <div class="col-md-6">
                             <div class="form-group">
                                 <label for="form_phone">Phone</label>
                                 <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Please enter your phone">
                                 <div class="help-block with-errors"></div>
                             </div>
                         </div>
                     </div>
                     <div class="row">
                         <div class="col-md-12">
                             <div class="form-group">
                                 <label for="form_message">Message *</label>
                                 <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                                 <div class="help-block with-errors"></div>
                             </div>
                         </div>
                         <div class="col-md-12 text-center space-top-small">
                             <input type="submit" class="btn btn-default btn-send" value="Send message">
                         </div>
                     </div>
                     <div class="row">
                         <div class="col-md-12 text-center">
                             <p class="text-muted space-top-small"><strong>*</strong> These fields are required.</p>
                         </div>
                     </div>
                 </div>

             </form>
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
