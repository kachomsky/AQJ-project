<?php

/*En este fichero se declararan las variables constantes y globales, de esa forma, si tenemos que cambiarlas en algun momento
  solo tendremos que cambiarlas en este fichero y no en todos.
  Ejemplo:
  define("__IMG_REL_PATH__", "views/resources/img/");
  define("__IMG_ABS_PATH__", __DIR__.'/views/resources/img/');

  En el ejemplo definimos las variables __IMG_REL_PATH__ con el valor de "views/resources/img/" que hace referencia
  a una carpeta de imagenes. Si en algun momento se deseara cambiar la carpeta, no haria falta cambiarlo en los multiples
  ficheros que tengan imagenes, con cambiarlo aqui se actualizaria en todos lados.
  */

  define("__IMG_REL_PATH__", "src/views/resources/images/");
  define("__IMG_ABS_PATH__", __DIR__.'/src/views/resources/images/');
  define("__CONTROLLERS_REL_PATH__", "src/controllers/");
  define("__CONTROLLERS_ABS_PATH__", __DIR__."/src/controllers/");

  //DATABASE info
  define('DATABASE_NAME', 'aqj');
  define('DATABASE_USER', 'root2');
  define('DATABASE_HOST', '158.109.64.10:55044/aqj?useSSL=false');
  define('DATABASE_PASSWORD', 'laboratori123');
  define('BASE_URL', 'http://158.109.64.10');
  define('DATABASE_PORT', '55040');
  /*define('DATABASE_NAME', 'aquejugamosfinal');
  define('DATABASE_USER', 'root');
  define('DATABASE_HOST', '127.0.0.1');
  define('DATABASE_PASSWORD', '');
  define('BASE_URL', 'http://127.0.0.1');*/

 ?>
