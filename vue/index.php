<?php 

require __DIR__ . '/database/database.php';

$genreArr = [];

foreach($database as $album){
  if(!in_array($album['genre'], $genreArr)){
    $genreArr[] = $album['genre'];
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- style.css -->
  <link rel="stylesheet" href="./assets/css/style2.css">
  <!-- vue 2 + main.js-->
  <script src='https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js' defer></script>
  <script type='text/javascript' src='./assets/js/main2.js' defer></script>
  <!-- axios -->
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js" defer></script>
  <title>Dischi vue-php</title>
</head>
<body>

  <div id="root">
    <header>
      <div>
        <i class="fa-brands fa-spotify"></i>
      </div>
      <div>
        <select name="genre" id="genre">
          <option value=""></option>
          <?php 
            foreach($genreArr as $genre){
          ?>
              <option value="<?php echo $genre; ?>"><?php echo $genre; ?></option>
          <?php
            }
          ?>
        </select>
        <button>Cerca</button>
      </div>
    </header>

    <main>

      <div class="card-container">

          <div class="card" v-for="elm in albumArr">
            <div>
              <img :src="elm.poster" alt="album cover">
            </div>
            <div>
              <h3>{{elm.title}}</h3>
              <span>{{elm.author}}</span>
              <span>{{elm.year}}</span>
            </div>
          </div>

      </div>

    </main>
  </div>

</body>
</html>