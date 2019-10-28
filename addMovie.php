<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
  crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
  crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>Filai</title>
</head>

<body>
  <?php include 'view/nav2.php'; ?>


  <div class="header">
    <h1>
      Add Movie
    </h1>
  </div>

  <div class="container">
    <div class="row">
      <div class="col">
        <form action="addMovie.php" method="post">
          <div class="form-group row">
            <label for="movie-name" class="col-sm-2 col-form-label">Movie Name</label>
            <div class="col-sm-10">
              <input type="text" name="movie"  class="form-control" id="" placeholder="Enter Movie Name">
            </div>
          </div>
          <div class="form-group row">
            <label for="stage" class="col-sm-2 col-form-label">Stage</label>
            <div class="col-sm-10">
              <input type="number" name="stage" class="form-control" id="stage" placeholder="Enter Stage">
            </div>
          </div>
          <fieldset class="form-group">
            <div class="row">
              <legend class="col-form-label col-sm-2 pt-0">Age From</legend>
              <div class="col-sm-10">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="age" id="kids" value="option1" >
                  <label class="form-check-label" for="kids">
                    N-7
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="age" id="juniors" value="option2">
                  <label class="form-check-label" for="juniors">
                    N-13
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="age" id="tenns" value="option2">
                  <label class="form-check-label" for="tenns">
                    N-16
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="age" id="adults" value="option2" checked>
                  <label class="form-check-label" for="adults">
                    N-18
                  </label>
                </div>

              </div>
            </div>
          </fieldset>
          <div>
            <input type="date" name="date">
          </div>
          <div class="col-sm-10 mt-3">
            <button type="submit" class="btn btn-primary">Add</button>
          </div>
        </div>
      </div><!-- end of col -->
    </div><!-- end of row -->
  </div><!-- end of container -->





  <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
  crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
  crossorigin="anonymous"></script>


</body>

</html>