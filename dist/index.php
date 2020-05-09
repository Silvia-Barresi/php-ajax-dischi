<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="https://cdn.jsdelivr.net/npm/handlebars@latest/dist/handlebars.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="app.js"></script>
    <link rel="stylesheet" href="app.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
  </head>


  <body>

    <header>
      <img src="img/logo.png" alt="">
    </header>
    <div class="genre">
      <label for="">Genere</label>
      <select class="" name="">
        <option value=""></option>
        <option value="jazz">Jazz</option>
        <option value="metal">Metal</option>
        <option value="pop">Pop</option>
        <option value="rock">Rock</option>
      </select>
    </div>
    <div class="container">


    </div>


<!-- template -->

    <script id="album-template" type="text/x-handlebars-template">
      <div class="box" data-genre={{genre}}>
        <div class="album">
          <img src="{{cover}}" alt="">
        </div>
        <div class="title">
          <h3>{{title}}</h3>
          <p>{{artist}}</p>
          <p>{{year}}</p>
        </div>
      </div>
    </script>


  </body>

</html>
