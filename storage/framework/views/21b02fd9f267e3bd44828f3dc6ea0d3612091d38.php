<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags always come first -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="/css/styles.css">

</head>
<body>

  <section id="cover">
    <div id="cover-caption">
      <div class="container">
        <div class="col-sm-10 col-sm-offset-1">
          <!-- 'display' is new feature in Bootstrap 4 -->
          <h1 class="display-4">Welcome to Tezza</h1>
          <p>  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita minima tempora nihil, quos illum suscipit. Ipsum a quos omnis qui labore, placeat natus rem ad ipsa quisquam vitae, vel fugit.</p>

          <br>

          <!-- 'secondary-outline' is a new feature in BS4 -->
          <a href="#nav-main" class="btn btn-danger-outline btn-sm" role="button">&darr;</a>
        </div>
      </div>
    </div>
  </section>

  <nav class="navbar navbar-default" id="nav-main">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">
          <img alt="Brand" src="/img/logo.jpg">
        </a>
      </div>
    </div>
  </nav>

    <!-- <nav class="navbar navbar-light navbar-full" id="nav-main">

      <button class="navbar-toggler hidden-sm-up pull-xs-right" type="button" data-toggle="collapse" data-target="#startupNavbar">
        &#9776;
        </button>
        <a class="navbar-brand" href="#"><img src="img/logo.jpg" alt="startup.logo" height="26"></a>
         <div class="collapse navbar-toggleable-xs" id="startupNavbar">
           <ul class="nav navbar-nav pull-xs-right">
               <li class="nav-item active">
                   <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="#">About</a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="#">Contact</a>
               </li>
           </ul>

         </div>
       </nav> -->



       <section id="what-we-do">
         <div class="section-content">
           <div class="container">
             <div class="reg">
               <h2 class="display-4">Register Here
                <a href="<?php echo e(URL::to('interns')); ?>"><button class="btn btn-md btn-primary pull-xs-right">  View Tezza Interns Biodata
                 </button></a>
             </h2>

           </div>

           <hr>
           <br>

           <?php echo e(HTML::ul($errors->all())); ?>

           <?php echo e(Form::open(['url' => 'interns'])); ?>

            <!-- 'hideform' to hide form in script.js -->
            <div id="hideForm">
             <!-- FIRST ROW -->
             <div class="row">
               <div class="col-md-4">
                 <div class="input-group input-group-md">
                  <span class="input-group-addon" id="sizing-addon1">First Name</span>
                  <input type="text" class="form-control" placeholder="Enter Firstname" aria-describedby="sizing-addon2" required="required" name="firstname">
                </div>
              </div>
              <div class="col-md-4">
               <div class="input-group input-group-md">
                <span class="input-group-addon" id="sizing-addon2">Middle Name</span>
                <input type="text" class="form-control" placeholder="Enter Middlename" aria-describedby="sizing-addon2" required="required" name="middlename">
              </div>
            </div>
            <div class="col-md-4">
             <div class="input-group input-group-md">
              <span class="input-group-addon" id="sizing-addon3">Last Name</span>
              <input type="text" class="form-control" placeholder="Enter Lastname" aria-describedby="sizing-addon3" required="required" name="lastname">
            </div>
          </div>

        </div>
        <!-- END FIRST ROW -->

        <br>

        <!-- SECOND ROW -->
        <div class="row">
         <div class="col-md-6">
           <div class="input-group input-group-md">
            <span class="input-group-addon" id="sizing-addon1">Phone</span>
            <input type="phone" class="form-control" placeholder="Enter Enter Whatsapp Number" aria-describedby="sizing-addon1" required="required" name="phone">
          </div>
        </div>
        <div class="col-md-6">
         <div class="input-group input-group-md">
          <span class="input-group-addon" id="sizing-addon2">Twitter</span>
          <input type="text" class="form-control" placeholder="@forexample" aria-describedby="sizing-addon2" required="required" name="twitter">
        </div>
      </div>

    </div>
    <!-- END SECOND ROW -->

    <hr>
    <br>


    <!-- THIRD ROW -->
    <div class="row">
      <div class="col-md-4">
        <!-- Large button group -->
        <div class="form-group">
          <label for="gender">Gender</label>
          <select class="form-control" name="gender" id="gender" required="required">
            <option value="" selected="selected">- Select -</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
          </select>
        </div>
      </div>
      <div class="col-md-4">
        <!-- Large button group -->
        <div class="form-group">
          <label for="state">Resident State</label>
          <select class="form-control" name="state" id="state" required="required">
            <option value="" selected="selected">- Select -</option>
            <option value="Abuja FCT">Abuja FCT</option>
            <option value="Abia">Abia</option>
            <option value="Adamawa">Adamawa</option>
            <option value="Akwa Ibom">Akwa Ibom</option>
            <option value="Anambra">Anambra</option>
            <option value="Bauchi">Bauchi</option>
            <option value="Bayelsa">Bayelsa</option>
            <option value="Benue">Benue</option>
            <option value="Borno">Borno</option>
            <option value="Cross River">Cross River</option>
            <option value="Delta">Delta</option>
            <option value="Ebonyi">Ebonyi</option>
            <option value="Edo">Edo</option>
            <option value="Ekiti">Ekiti</option>
            <option value="Enugu">Enugu</option>
            <option value="Gombe">Gombe</option>
            <option value="Imo">Imo</option>
            <option value="Jigawa">Jigawa</option>
            <option value="Kaduna">Kaduna</option>
            <option value="Kano">Kano</option>
            <option value="Katsina">Katsina</option>
            <option value="Kebbi">Kebbi</option>
            <option value="Kogi">Kogi</option>
            <option value="Kwara">Kwara</option>
            <option value="Lagos">Lagos</option>
            <option value="Nassarawa">Nassarawa</option>
            <option value="Niger">Niger</option>
            <option value="Ogun">Ogun</option>
            <option value="Ondo">Ondo</option>
            <option value="Osun">Osun</option>
            <option value="Oyo">Oyo</option>
            <option value="Plateau">Plateau</option>
            <option value="Rivers">Rivers</option>
            <option value="Sokoto">Sokoto</option>
            <option value="Taraba">Taraba</option>
            <option value="Yobe">Yobe</option>
            <option value="Zamfara">Zamfara</option>
            <option value="Outside Nigeria">Outside Nigeria</option>
          </select>
        </div>
      </div>
      <div class="col-md-4">
       <!-- Large button group -->
       <div class="form-group" id="lgmt">
         <label for="lg">Local Gvnt</label>
         <select class="form-control" name="lg" id="lg" required="required">
           <option value="" selected="selected">- Select -</option>
           <option value="Ikoroku">Ikoroku</option>
           <option value="Eti-osa">Eti-osa</option>
           <option value="LLagos-Island">Lagos-Island</option>
         </select>
       </div>
     </div>

   </div>
   <!-- END THIRD ROW -->

   <br>

   <!-- FOURTH ROW -->
   <div class="row">
     <div class="col-md-6">
       <div class="input-group input-group-md">
        <span class="input-group-addon" id="sizing-addon4">Password</span>
        <input type="password" class="form-control" placeholder="Enter your preferred password" aria-describedby="sizing-addon4" required="required" name="password">
      </div>
    </div>
    <div class="col-md-6">
     <div class="input-group input-group-md">
      <span class="input-group-addon" id="sizing-addon5">Repeat Password</span>
      <input type="password" class="form-control" placeholder="Enter your preferred password again" aria-describedby="sizing-addon5" required="required" name="confirmpassword">
    </div>
  </div>

</div>
<!-- END FOURTH ROW -->
<hr>
<br>

<!-- Last ROW -->
<div class="row">
 <div class="col-md-12">
   <label for="home"><i>  Bio</i></label>
   <div class="input-group input-group-md">
    <textarea name="bio" rows="8" cols="80" placeholder="Let us know about you" id="home" required="required"></textarea>
  </div>
</div>

</div>
<!-- END lAST ROW -->

<hr>
</div>
<br>
<div class="btns pull-xs-right">
  <!-- <button class="btn btn-md btn-danger" id="cancel"> Hide/Show Form </button> -->
  <?php echo e(Form::submit('Create Intern!', ['class' => 'btn btn-primary'])); ?>

</div>

<?php echo e(Form::close()); ?>



</div>
</div>
</section>

<?php echo $__env->make('includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!-- jQuery first, then Bootstrap JS. -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="js/script.js">  </script>
</body>
</html>
  