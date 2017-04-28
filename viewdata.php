<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles.css">

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
        <img alt="Brand" src="img/logo.jpg">
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
                 <h2 class="display-4">Intern Biodata
                  <a href="index.php">
                   <button class="btn btn-md btn-primary pull-xs-right">  Register
                   </button>
                   </a>
                 </h2>
                 <h3>Please populate this view from the database</h3>

              </div>

                 <hr>
                 <br>

                 <!-- start project list -->
                    <table class="table table-striped projects">
                      <thead>
                        <tr>
                          <th style="width: 1%">#</th>
                          <th style="width: 20%">Firstname</th>
                          <th>Middlename</th>
                          <th>Lastname</th>
                          <th>Phone</th>
                          <th>Twitter</th>
                          <th>Gender</th>
                          <th>State of origin</th>
                          <th>L.G.</th>
                          <th>Password</th>
                          <th>Bio</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>
                            <a>Pesamakini Backend UI</a>
                            <br />
                          </td>
                          <td>
                            <ul class="list-inline">
                              <li>
                                <img src="images/user.png" class="avatar" alt="Avatar">
                              </li>
                            </ul>
                          </td>
                          <td class="project_progress">
                            <div class="progress progress_sm">
                              <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="57"></div>
                            </div>
                            <small>57% Complete</small>
                          </td>
                          <td>
                            <p>Twinkas is real. I am happy to be a member.</p>
                          </td>
                          <td>
                            <p>Twinkas is real. I am happy to be a member.</p>
                          </td>
                          <td>
                            <p>Twinkas is real. I am happy to be a member.</p>
                          </td>
                          <td>
                            <p>Twinkas is real. I am happy to be a member.</p>
                          </td>
                          <td>
                            <p>Twinkas is real. I am happy to be a member.</p>
                          </td>
                          <td>
                            <p>Twinkas is real. I am happy to be a member.</p>
                          </td>
                          <td>
                            <p>Twinkas is real. I am happy to be a member.</p>
                          </td>
                        </tr>

                      </tbody>
                    </table>
                    <!-- end project list -->


             </div>
         </div>
    </section>

    <?php include('php/footer.php');

    ?>

    <!-- jQuery first, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="js/script.js">  </script>
  </body>
</html>
