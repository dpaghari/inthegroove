<?php
  $dbname = 'inthegroove';
  $dbhost = 'localhost';
  $dbport = '8888';

  if(empty($dbport)) {
    $db_conn_str = 'mysql:host='.$dbhost.';dbname='.$dbname;
  }
  else {
    $db_conn_str = 'mysql:host='.$dbhost.';dbname='.$dbname.';port='.$dbport;
  }

  define('ROOT_FOLDER', '/Users/danielpagharion/Desktop/Daniel/projects/inthegroove');
  define('DB_CONN_STR', $db_conn_str);
  define('DB_USER', 'root');
  define('DB_PASSWORD', 'root');
  define('UN_ENV', 'DEV');

?>
