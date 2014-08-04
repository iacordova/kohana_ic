<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-07-30 13:39:57 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Applications/MAMP/htdocs/financial_fundamentals/system/classes/Kohana/Cookie.php:67
2014-07-30 13:39:57 --- DEBUG: #0 /Applications/MAMP/htdocs/financial_fundamentals/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('SQLiteManager_c...', NULL)
#1 /Applications/MAMP/htdocs/financial_fundamentals/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('SQLiteManager_c...')
#2 /Applications/MAMP/htdocs/financial_fundamentals/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /Applications/MAMP/htdocs/financial_fundamentals/system/classes/Kohana/Cookie.php:67
2014-07-30 13:41:08 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ SYSPATH/classes/Kohana/Cookie.php [ 157 ] in /Applications/MAMP/htdocs/financial_fundamentals/system/classes/Kohana/Cookie.php:157
2014-07-30 13:41:08 --- DEBUG: #0 /Applications/MAMP/htdocs/financial_fundamentals/system/classes/Kohana/Cookie.php(157): Kohana_Core::error_handler(8, 'Array to string...', '/Applications/M...', 157, Array)
#1 /Applications/MAMP/htdocs/financial_fundamentals/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('SQLiteManager_c...', NULL)
#2 /Applications/MAMP/htdocs/financial_fundamentals/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('SQLiteManager_c...')
#3 /Applications/MAMP/htdocs/financial_fundamentals/index.php(117): Kohana_Request::factory(true, Array, false)
#4 {main} in /Applications/MAMP/htdocs/financial_fundamentals/system/classes/Kohana/Cookie.php:157
2014-07-30 13:41:23 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ SYSPATH/classes/Kohana/Cookie.php [ 157 ] in /Applications/MAMP/htdocs/financial_fundamentals/system/classes/Kohana/Cookie.php:157
2014-07-30 13:41:23 --- DEBUG: #0 /Applications/MAMP/htdocs/financial_fundamentals/system/classes/Kohana/Cookie.php(157): Kohana_Core::error_handler(8, 'Array to string...', '/Applications/M...', 157, Array)
#1 /Applications/MAMP/htdocs/financial_fundamentals/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('SQLiteManager_c...', NULL)
#2 /Applications/MAMP/htdocs/financial_fundamentals/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('SQLiteManager_c...')
#3 /Applications/MAMP/htdocs/financial_fundamentals/index.php(117): Kohana_Request::factory(true, Array, false)
#4 {main} in /Applications/MAMP/htdocs/financial_fundamentals/system/classes/Kohana/Cookie.php:157
2014-07-30 13:41:39 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ SYSPATH/classes/Kohana/Cookie.php [ 157 ] in /Applications/MAMP/htdocs/financial_fundamentals/system/classes/Kohana/Cookie.php:157
2014-07-30 13:41:39 --- DEBUG: #0 /Applications/MAMP/htdocs/financial_fundamentals/system/classes/Kohana/Cookie.php(157): Kohana_Core::error_handler(8, 'Array to string...', '/Applications/M...', 157, Array)
#1 /Applications/MAMP/htdocs/financial_fundamentals/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('SQLiteManager_c...', NULL)
#2 /Applications/MAMP/htdocs/financial_fundamentals/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('SQLiteManager_c...')
#3 /Applications/MAMP/htdocs/financial_fundamentals/index.php(117): Kohana_Request::factory(true, Array, false)
#4 {main} in /Applications/MAMP/htdocs/financial_fundamentals/system/classes/Kohana/Cookie.php:157
2014-07-30 16:47:55 --- EMERGENCY: Database_Exception [ 1049 ]: Unknown database 'kohana' ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 108 ] in /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/MySQL.php:75
2014-07-30 16:47:55 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/MySQL.php(75): Kohana_Database_MySQL->_select_db('kohana')
#1 /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#2 /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 /Applications/MAMP/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('tests')
#4 /Applications/MAMP/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#5 /Applications/MAMP/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#6 /Applications/MAMP/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#7 /Applications/MAMP/htdocs/kohana/application/classes/Controller/Welcome.php(9): Kohana_ORM->__construct()
#8 /Applications/MAMP/htdocs/financial_fundamentals/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /Applications/MAMP/htdocs/financial_fundamentals/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#11 /Applications/MAMP/htdocs/financial_fundamentals/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Applications/MAMP/htdocs/financial_fundamentals/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Applications/MAMP/htdocs/financial_fundamentals/index.php(118): Kohana_Request->execute()
#14 {main} in /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/MySQL.php:75
2014-07-30 16:48:54 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'rootnet.tests' doesn't exist [ SHOW FULL COLUMNS FROM `tests` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/MySQL.php:359
2014-07-30 16:48:54 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /Applications/MAMP/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('tests')
#2 /Applications/MAMP/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /Applications/MAMP/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /Applications/MAMP/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /Applications/MAMP/htdocs/kohana/application/classes/Controller/Welcome.php(9): Kohana_ORM->__construct()
#6 /Applications/MAMP/htdocs/financial_fundamentals/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 /Applications/MAMP/htdocs/financial_fundamentals/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 /Applications/MAMP/htdocs/financial_fundamentals/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Applications/MAMP/htdocs/financial_fundamentals/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /Applications/MAMP/htdocs/financial_fundamentals/index.php(118): Kohana_Request->execute()
#12 {main} in /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/MySQL.php:359
2014-07-30 16:50:26 --- EMERGENCY: Database_Exception [ 1049 ]: Unknown database 'kohana' ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 108 ] in /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/MySQL.php:75
2014-07-30 16:50:26 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/MySQL.php(75): Kohana_Database_MySQL->_select_db('kohana')
#1 /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#2 /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 /Applications/MAMP/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('tests')
#4 /Applications/MAMP/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#5 /Applications/MAMP/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#6 /Applications/MAMP/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#7 /Applications/MAMP/htdocs/kohana/application/classes/Controller/Welcome.php(9): Kohana_ORM->__construct()
#8 /Applications/MAMP/htdocs/financial_fundamentals/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /Applications/MAMP/htdocs/financial_fundamentals/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#11 /Applications/MAMP/htdocs/financial_fundamentals/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Applications/MAMP/htdocs/financial_fundamentals/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Applications/MAMP/htdocs/financial_fundamentals/index.php(118): Kohana_Request->execute()
#14 {main} in /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/MySQL.php:75
2014-07-30 17:40:14 --- EMERGENCY: Database_Exception [ 1049 ]: Unknown database 'kohana' ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 108 ] in /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/MySQL.php:75
2014-07-30 17:40:14 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/MySQL.php(75): Kohana_Database_MySQL->_select_db('kohana')
#1 /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#2 /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 /Applications/MAMP/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('tests')
#4 /Applications/MAMP/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#5 /Applications/MAMP/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#6 /Applications/MAMP/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#7 /Applications/MAMP/htdocs/kohana/application/classes/Controller/Welcome.php(9): Kohana_ORM->__construct()
#8 /Applications/MAMP/htdocs/financial_fundamentals/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /Applications/MAMP/htdocs/financial_fundamentals/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#11 /Applications/MAMP/htdocs/financial_fundamentals/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Applications/MAMP/htdocs/financial_fundamentals/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Applications/MAMP/htdocs/financial_fundamentals/index.php(118): Kohana_Request->execute()
#14 {main} in /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/MySQL.php:75
2014-07-30 18:01:27 --- EMERGENCY: View_Exception [ 0 ]: The requested view article/index could not be found ~ DOCROOT/Applications/MAMP/htdocs/financial_fundamentals/system/classes/Kohana/View.php [ 257 ] in /Applications/MAMP/htdocs/financial_fundamentals/system/classes/Kohana/View.php:137
2014-07-30 18:01:27 --- DEBUG: #0 /Applications/MAMP/htdocs/financial_fundamentals/system/classes/Kohana/View.php(137): Kohana_View->set_filename('article/index')
#1 /Applications/MAMP/htdocs/kohana/application/classes/Controller/User.php(7): Kohana_View->__construct('article/index')
#2 /Applications/MAMP/htdocs/financial_fundamentals/system/classes/Kohana/Controller.php(84): Controller_User->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /Applications/MAMP/htdocs/financial_fundamentals/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /Applications/MAMP/htdocs/financial_fundamentals/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Applications/MAMP/htdocs/financial_fundamentals/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Applications/MAMP/htdocs/financial_fundamentals/index.php(118): Kohana_Request->execute()
#8 {main} in /Applications/MAMP/htdocs/financial_fundamentals/system/classes/Kohana/View.php:137
2014-07-30 18:22:21 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'factory' (T_STRING), expecting variable (T_VARIABLE) or '$' ~ APPPATH/classes/Controller/User.php [ 15 ] in file:line
2014-07-30 18:22:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-30 18:23:09 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$users' (T_VARIABLE) ~ APPPATH/classes/Controller/User.php [ 27 ] in file:line
2014-07-30 18:23:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-30 18:23:50 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'kohana_test.userses' doesn't exist [ SHOW FULL COLUMNS FROM `userses` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/MySQL.php:359
2014-07-30 18:23:50 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /Applications/MAMP/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('userses')
#2 /Applications/MAMP/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /Applications/MAMP/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /Applications/MAMP/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /Applications/MAMP/htdocs/kohana/application/classes/Controller/User.php(13): Kohana_ORM->__construct()
#6 /Applications/MAMP/htdocs/financial_fundamentals/system/classes/Kohana/Controller.php(84): Controller_User->action_new()
#7 [internal function]: Kohana_Controller->execute()
#8 /Applications/MAMP/htdocs/financial_fundamentals/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 /Applications/MAMP/htdocs/financial_fundamentals/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Applications/MAMP/htdocs/financial_fundamentals/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /Applications/MAMP/htdocs/financial_fundamentals/index.php(118): Kohana_Request->execute()
#12 {main} in /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/MySQL.php:359
2014-07-30 18:26:09 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Users' not found ~ APPPATH/classes/Controller/User.php [ 13 ] in file:line
2014-07-30 18:26:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-30 18:27:05 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'kohana_test.users' doesn't exist [ SHOW FULL COLUMNS FROM `users` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/MySQL.php:359
2014-07-30 18:27:05 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /Applications/MAMP/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#2 /Applications/MAMP/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /Applications/MAMP/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /Applications/MAMP/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /Applications/MAMP/htdocs/kohana/application/classes/Controller/User.php(13): Kohana_ORM->__construct()
#6 /Applications/MAMP/htdocs/financial_fundamentals/system/classes/Kohana/Controller.php(84): Controller_User->action_new()
#7 [internal function]: Kohana_Controller->execute()
#8 /Applications/MAMP/htdocs/financial_fundamentals/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 /Applications/MAMP/htdocs/financial_fundamentals/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Applications/MAMP/htdocs/financial_fundamentals/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /Applications/MAMP/htdocs/financial_fundamentals/index.php(118): Kohana_Request->execute()
#12 {main} in /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/MySQL.php:359