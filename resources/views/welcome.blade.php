<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>Laravel</title>

    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="{{ asset('bower_components/materialize/dist/css/materialize.min.css') }}"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
  </head>

  <body>

    <nav>
      <div class="nav-wrapper container">
      <a href="#!" class="brand-logo">
        <i class="material-icons">done_all</i>Logo
      </a>
      </div>
    </nav>
    <div class="section no-pad-bot" id="index-banner">
      <div class="container">
        <h2 class="header center coal-text">New Payment</h2>
        <div class="row">
          <div class="row">
            <form class="col s12 center">
              <div class="row">                
                <div class="input-field col s6">
                  <input name="group1" type="radio" id="test1" />
                  <label for="test1">Andreu</label>
                </div>
                <div class="input-field col s6">
                  <input name="group1" type="radio" id="test2" />
                  <label for="test2">Marta</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input id="cantidad" type="number" min=0 step="0.01" class="validate">
                  <label for="cantidad">How much?</label>
                </div>
              </div>

              <div class="row center">
                <button type="submit" class="btn-large waves-effect waves-light teal">Save</button>
              </div>

            </form>
          </div>
        </div>

        <div class="fixed-action-btn horizontal">
          <a class="btn-floating btn-large red">
            <i class="large material-icons">mode_edit</i>
          </a>
          <ul>
            <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
            <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
            <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
            <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
          </ul>
        </div>

      </div>
    </div>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/materialize/dist/js/materialize.min.js') }}"></script>

    <script type="text/javascript">
      $(document).ready(function() {
       $('select').material_select();
      });
    </script>
  </body>
</html>
