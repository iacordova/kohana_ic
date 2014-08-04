<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-07-31 14:21:53 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '?' ~ APPPATH/classes/Controller/User.php [ 31 ] in file:line
2014-07-31 14:21:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-31 17:18:24 --- EMERGENCY: ErrorException [ 1 ]: Class 'Object' not found ~ APPPATH/classes/Controller/User.php [ 17 ] in file:line
2014-07-31 17:18:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-31 17:18:42 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'kohana_test.s' doesn't exist [ SHOW FULL COLUMNS FROM `s` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/MySQL.php:359
2014-07-31 17:18:42 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /Applications/MAMP/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('s')
#2 /Applications/MAMP/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /Applications/MAMP/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /Applications/MAMP/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /Applications/MAMP/htdocs/kohana/application/classes/Controller/User.php(17): Kohana_ORM->__construct()
#6 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_User->action_new()
#7 [internal function]: Kohana_Controller->execute()
#8 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#12 {main} in /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/MySQL.php:359