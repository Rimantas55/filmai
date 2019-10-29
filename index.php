  <!-- DB -->
  <?php include 'db.php'; ?>
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
    <title>Movies</title>
  </head>

  <body>
    <!-- navigation bar -->
    <?php include 'view/nav.php'; ?>

    <div class="header">
      <h1>
        Todays Movies
      </h1>
      <p id="time"></p>
      <p class="live-time"><span id="span"></span></p>
    </div>

    <div class="container">
      <div class="row">
        <div class="col">
          <table class="table table-hover">
            <thead class="thead-dark ">
              <tr >
                <th scope="col">#</th>
                <th scope="col">Time</th>
                <th scope="col">Time Left</th>
                <th scope="col">Movie Name</th>
                <th scope="col">Age from</th>
                <th scope="col">Stage</th>
              </tr>
            </thead>
            <tbody>

              <?php 

              $stmt = $pdo->query('SELECT * FROM movie_table');
              while($row = $stmt->fetch(PDO::FETCH_ASSOC)){  ?>

              
              <tr>
                <th scope="row"><?php echo getRows($nRows) ?></th><!-- Row of movie NOT WORKING-->
                <td><?php echo $row['date'] ?></td>
                <td><?php //echo $row['date'] - date() ?></td><!-- neveikia eilute dar -->
                <td><?php echo $row['movie_name'] ?></td>
                <td><?php echo $row['age'] ?></td>
                <td><?php echo $row['stage'] ?></td>
              </tr>

              <?php }; ?><!-- end of $stmt = $pdo->query('SELECT * FROM movie_table'); -->

            </tbody>
          </table>

        </div><!-- end of col -->
      </div><!-- end of row -->
    </div><!-- end of container -->



<select >
  <option disabled>Choose time</option>
  
  <?php 
  for ($x = 0; $x <= 55; $x+=5) { ?>
  
  <option><?php echo  $x ;?></option>

  <?php }; ?>
</select>

<select>

<?php 
for($hours=0; $hours<24; $hours++) // the interval for hours is '1'
    for($mins=0; $mins<60; $mins+=30) // the interval for mins is '30'
        echo '<option>'.str_pad($hours,2,'0',STR_PAD_LEFT).':'
                       .str_pad($mins,2,'0',STR_PAD_LEFT).'</option>';
?>
</select>


<?php 

/**
 *
 * Get times as option-list.
 *
 * @return string List of times
 */
function get_times( $default = '19:00', $interval = '+30 minutes' ) {

    $output = '';

    $current = strtotime( '00:00' );
    $end = strtotime( '23:59' );

    while( $current <= $end ) {
        $time = date( 'H:i', $current );
        $sel = ( $time == $default ) ? ' selected' : '';

        $output .= "<option value=\"{$time}\"{$sel}>" . date( 'h.i A', $current ) .'</option>';
        $current = strtotime( $interval, $current );
    }

    return $output;
}
?>
<select name="time"><?php echo get_times(); ?></select>

    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>

<script type="">

// LIVE TIME
var span = document.getElementById('span');

function time() {
  var d = new Date();
  var s = d.getSeconds();
  var m = d.getMinutes();
  var h = d.getHours();
  span.textContent = h + ":" + m + ":" + s;
}

setInterval(time, 1000);



</script>


  </body>

  </html>