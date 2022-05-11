<?php 

require __DIR__ . '/../database/database.php';

$filteredAlbums = [];

if( !empty( $_GET['genre'] ) ){
  foreach( $database as $elm ){
    if( $elm['genre'] == $_GET['genre']){
      $filteredAlbums[] = $elm;
    }
  }
} else {
  $filteredAlbums = $database;
}

header('Content-Type: application/json');

echo json_encode( $filteredAlbums );

?>