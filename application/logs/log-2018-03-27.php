<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-03-27 23:07:27 --> 404 Page Not Found: Widgetshtml/index
ERROR - 2018-03-27 23:57:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;undefined&quot;
LINE 3: WHERE &quot;id&quot; = 'undefined'
                     ^ /opt/lampp/htdocs/SGMPE/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-03-27 23:57:49 --> Query error: ERROR:  invalid input syntax for integer: "undefined"
LINE 3: WHERE "id" = 'undefined'
                     ^ - Invalid query: SELECT "firstname", "lastname", "email", "username"
FROM "users"
WHERE "id" = 'undefined'
ERROR - 2018-03-27 23:58:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;widgets.html&quot;
LINE 3: WHERE &quot;id&quot; = 'widgets.html'
                     ^ /opt/lampp/htdocs/SGMPE/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-03-27 23:58:18 --> Query error: ERROR:  invalid input syntax for integer: "widgets.html"
LINE 3: WHERE "id" = 'widgets.html'
                     ^ - Invalid query: SELECT "firstname", "lastname", "email", "username"
FROM "users"
WHERE "id" = 'widgets.html'
