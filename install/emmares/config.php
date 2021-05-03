<?php
/*
 *---------------------------------------------------------------------
 * EMMARES
 * Copyright 2021 Emmares.com
 * Ori-on
 *---------------------------------------------------------------------
 */
/*
 * Main config file
 */
//Define Config dir name
define('CORE_CONFIG_DIR', 'emmares');
//! Important ! 
//Set same dir name in app/assets/js/app/bootstrap.php
//! --------- !

//DATABASE CONFIGURATION
define('DB_HOST_SB', 'localhost:3308');
define('DB_TYPE_SB', 'mysql');
define('DB_USER_SB', 'root');
define('DB_PASS_SB', '');
define('DB_NAME_SB', 'sb_emmares');

//Timezone
date_default_timezone_set('UTC');

//Define Auth Assets Default Path
define('auth_assets', "app/assets/");

//Define View Default Path
define('views', "app/views/");

//Define Controllers Default Path
define('controllers', "app/controllers/");

//Define Models Default Path
define('models', "app/models/");

//Define View Templates Default Path
define('view_templates', "app/view_templates/");

//Define Resources Default Path
define('view_templates_resources', "app/view_templates/resources/");

//Define Routes Path
define('routes', "config/routes.php");