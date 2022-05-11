<?php 

require __DIR__ . '/../database.php';

$genreArr = [];

foreach($database as $album){
  if(!in_array($album['genre'], $genreArr)){
    $genreArr[] = $album['genre'];
  }
}

?>

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
    <?php 
      foreach($database as $data){
    ?>
      <div class="card">
        <div>
          <img src="<?php echo $data['poster']; ?>" alt="<?php echo $data['title']; ?>">
        </div>
        <div>
          <h3><?php echo $data['title']; ?></h3>
          <span><?php echo $data['author']; ?></span>
          <span><?php echo $data['year']; ?></span>
        </div>
      </div>
    <?php 
      }
    ?>
  </div>

</main>

<style>
header{
  background-color: #000;
  height: 8vh;
  width: 100%;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

header i{color: green; margin-left: 0.5em; font-size: 2.5rem;}
header select{margin-right: 1em; padding: 0.3em 0.5em;}
header button{margin-right: 1em; padding: 0.3em 0.5em;}

main{
  height: 92vh;
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: gray;
  overflow: auto;
}

main span{display: block;}

.card-container{
  width: 70%;
  height: 90%;
  display: flex;
  flex-wrap: wrap;
}

.card{
  background-color: #2e3a46;
  width: calc(100% / 5 - 2em);
  margin: 1em;
  text-align: center;
  padding: 1em 0;
}

.card img{max-width: 80%; height: auto;}

.card h3{
  color: #fff;
  font-size: 1.2rem;
  text-transform: uppercase;
  width: 90%;
  margin: 1em auto;
}

.card span{
  color: #7a7e79;
  font-size: 1.1rem;
}

</style>