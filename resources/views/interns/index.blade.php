<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags always come first -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="../../styles.css">

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
               <h2 class="display-4">Intern Biodata
                <a href="{{ URL::to('interns/create') }}">
                 <button class="btn btn-md btn-primary pull-xs-right">  Register here
                 </button>
               </a>
             </h2>
             <h3>Please populate this view from the database</h3>

           </div>

           <hr>
           <br>

           @if (Session::has('message'))
           <div class="alert alert-info">{{ Session::get('message') }}</div>
           @endif
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
                <th>Bio</th>
              </tr>
            </thead>
            <tbody>
              @foreach($interns as $key => $value)
              <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->firstname }}</td>
                <td>{{ $value->middlename }}</td>
                <td>{{ $value->lastname }}</td>
                <td>{{ $value->phone }}</td>
                <td>{{ $value->twitter }}</td>
                <td>{{ $value->gender }}</td>
                <td>{{ $value->state }}</td>
                <td>{{ $value->lg }}</td>
                <td>{{ $value->bio }}</td>

                <!-- we will also add show, edit, and delete buttons -->
                <!-- <td> -->

                  <!-- show the intern (uses the show method found at GET /interns/{id} -->
                  <!-- <a class="btn btn-small btn-success" href="{{ URL::to('interns/' . $value->id) }}">Show this Intern</a> -->

                  <!-- edit this intern (uses the edit method found at GET /interns/{id}/edit -->
                  <!-- <a class="btn btn-small btn-info" href="{{ URL::to('interns/' . $value->id . '/edit') }}">Edit this Intern</a>

                </td> -->
              </tr>
              @endforeach

            </tbody>
          </table>
          <!-- end project list -->


        </div>
      </div>
    </section>

    @include('includes.footer')

    <!-- jQuery first, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="js/script.js">  </script>
  </body>
  </html>
