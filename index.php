

<!DOCTYPE html>
 <html>
   <head>
     <!--Import Google Icon Font-->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <!--Import materialize.css-->
     <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
     <link rel="stylesheet" href="css/style.css">
     <!--Let browser know website is optimized for mobile-->
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
   </head>
   <body>
     <!--JavaScript at end of body for optimized loading-->
     <script type="text/javascript" src="js/materialize.min.js"></script>
     <img class="responsive-img" src="img/sp.jpg">
     <div class="row">
      <form class="col s12">
        <div class="row">
          <div class="input-field col s12">
            <textarea id="textarea1" class="input-text" data-length="120"></textarea>
            <label for="textarea1 ">O que você está procurando ?</label>
          </div>
        </div>
      </form>
    </div>
    <div class="container-icones">

      <div class="icones center">
        Saúde <br><i class=" material-icons">add_location</i>
      </div>
      <div class="icones center">
        Transporte <br><i class=" material-icons">directions_bus</i>
      </div>
      <div class="icones center">
        Educação <br><i class=" material-icons">import_contacts</i>
      </div>
      <div class="icones center">
        Lazer <br><i class=" material-icons">nature_people</i>
      </div>
      <div class="icones center">
        Cultura <br><i class=" material-icons">public</i>
      </div>

    </div>
    <script type="text/javascript">
    $(document).ready(function() {
    $('input#input_text, textarea#textarea1').characterCounter();
    });
    </script>
   </body>
 </html>
