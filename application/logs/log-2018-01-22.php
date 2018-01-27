<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-01-22 00:00:25 --> Severity: Notice --> Undefined index: firstName /opt/lampp/htdocs/SGMPE/application/controllers/Users.php 28
ERROR - 2018-01-22 00:00:54 --> Severity: Notice --> Trying to get property of non-object /opt/lampp/htdocs/SGMPE/application/controllers/Users.php 28
ERROR - 2018-01-22 00:01:05 --> Severity: Notice --> Undefined offset: 0 /opt/lampp/htdocs/SGMPE/application/controllers/Users.php 28
ERROR - 2018-01-22 00:01:12 --> Severity: Notice --> Use of undefined constant firstName - assumed 'firstName' /opt/lampp/htdocs/SGMPE/application/controllers/Users.php 28
ERROR - 2018-01-22 00:01:12 --> Severity: Notice --> Undefined index: firstName /opt/lampp/htdocs/SGMPE/application/controllers/Users.php 28
ERROR - 2018-01-22 00:01:21 --> Severity: Notice --> Undefined index: firstName /opt/lampp/htdocs/SGMPE/application/controllers/Users.php 28
ERROR - 2018-01-22 00:20:51 --> Severity: error --> Exception: syntax error, unexpected '=>' (T_DOUBLE_ARROW) /opt/lampp/htdocs/SGMPE/application/controllers/Users.php 28
ERROR - 2018-01-22 00:22:31 --> Severity: Notice --> Array to string conversion /opt/lampp/htdocs/SGMPE/application/controllers/Users.php 30
ERROR - 2018-01-22 00:22:44 --> Severity: Notice --> Array to string conversion /opt/lampp/htdocs/SGMPE/application/controllers/Users.php 30
ERROR - 2018-01-22 01:30:33 --> Severity: error --> Exception: Too few arguments to function Users::save(), 0 passed in /opt/lampp/htdocs/SGMPE/system/core/CodeIgniter.php on line 532 and exactly 1 expected /opt/lampp/htdocs/SGMPE/application/controllers/Users.php 24
ERROR - 2018-01-22 01:31:06 --> Severity: error --> Exception: syntax error, unexpected '$this' (T_VARIABLE) /opt/lampp/htdocs/SGMPE/application/models/User.php 14
ERROR - 2018-01-22 01:31:51 --> Severity: error --> Exception: syntax error, unexpected '$this' (T_VARIABLE) /opt/lampp/htdocs/SGMPE/application/models/User.php 14
ERROR - 2018-01-22 01:32:17 --> Severity: error --> Exception: syntax error, unexpected '$this' (T_VARIABLE) /opt/lampp/htdocs/SGMPE/application/models/User.php 14
ERROR - 2018-01-22 01:33:06 --> Severity: error --> Exception: Class 'User' not found /opt/lampp/htdocs/SGMPE/application/controllers/Users.php 30
ERROR - 2018-01-22 01:33:54 --> Severity: error --> Exception: syntax error, unexpected '$this' (T_VARIABLE) /opt/lampp/htdocs/SGMPE/application/models/User.php 14
ERROR - 2018-01-22 01:35:00 --> Severity: error --> Exception: syntax error, unexpected '$this' (T_VARIABLE) /opt/lampp/htdocs/SGMPE/application/models/User.php 14
ERROR - 2018-01-22 01:35:04 --> Severity: error --> Exception: syntax error, unexpected '$this' (T_VARIABLE) /opt/lampp/htdocs/SGMPE/application/models/User.php 14
ERROR - 2018-01-22 01:35:18 --> Severity: error --> Exception: syntax error, unexpected '$this' (T_VARIABLE) /opt/lampp/htdocs/SGMPE/application/models/User.php 14
ERROR - 2018-01-22 01:35:27 --> Severity: error --> Exception: syntax error, unexpected '$this' (T_VARIABLE) /opt/lampp/htdocs/SGMPE/application/models/User.php 14
ERROR - 2018-01-22 01:36:07 --> Severity: error --> Exception: syntax error, unexpected '$this' (T_VARIABLE) /opt/lampp/htdocs/SGMPE/application/models/User.php 14
ERROR - 2018-01-22 01:36:54 --> Severity: error --> Exception: syntax error, unexpected ',' /opt/lampp/htdocs/SGMPE/application/models/User.php 13
ERROR - 2018-01-22 01:37:21 --> Severity: Notice --> Undefined property: Users::$accesslevel /opt/lampp/htdocs/SGMPE/system/core/Model.php 77
ERROR - 2018-01-22 01:37:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  null value in column &quot;firstname&quot; violates not-null constraint
DETAIL:  Failing row contains (5, null, S, teste@gmail.com, teste, teste, null). /opt/lampp/htdocs/SGMPE/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-01-22 01:37:21 --> Query error: ERROR:  null value in column "firstname" violates not-null constraint
DETAIL:  Failing row contains (5, null, S, teste@gmail.com, teste, teste, null). - Invalid query: INSERT INTO "users" ("firstname", "lastname", "email", "username", "pass", "accesslevel") VALUES (NULL, 'S', 'teste@gmail.com', 'teste', 'teste', NULL)
ERROR - 2018-01-22 01:37:48 --> Severity: Notice --> Undefined property: Users::$accesslevel /opt/lampp/htdocs/SGMPE/system/core/Model.php 77
ERROR - 2018-01-22 01:37:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  null value in column &quot;firstname&quot; violates not-null constraint
DETAIL:  Failing row contains (6, null, asa, sasasa, sasa, assa, null). /opt/lampp/htdocs/SGMPE/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-01-22 01:37:48 --> Query error: ERROR:  null value in column "firstname" violates not-null constraint
DETAIL:  Failing row contains (6, null, asa, sasasa, sasa, assa, null). - Invalid query: INSERT INTO "users" ("firstname", "lastname", "email", "username", "pass", "accesslevel") VALUES (NULL, 'asa', 'sasasa', 'sasa', 'assa', NULL)
ERROR - 2018-01-22 01:38:55 --> Severity: Notice --> Undefined property: Users::$accesslevel /opt/lampp/htdocs/SGMPE/system/core/Model.php 77
ERROR - 2018-01-22 01:38:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  null value in column &quot;firstname&quot; violates not-null constraint
DETAIL:  Failing row contains (7, null, sad, assa, sasad, asdsda, null). /opt/lampp/htdocs/SGMPE/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-01-22 01:38:55 --> Query error: ERROR:  null value in column "firstname" violates not-null constraint
DETAIL:  Failing row contains (7, null, sad, assa, sasad, asdsda, null). - Invalid query: INSERT INTO "users" ("firstname", "lastname", "email", "username", "pass", "accesslevel") VALUES (NULL, 'sad', 'assa', 'sasad', 'asdsda', NULL)
ERROR - 2018-01-22 01:41:44 --> Severity: Notice --> Undefined property: Users::$accesslevel /opt/lampp/htdocs/SGMPE/system/core/Model.php 77
ERROR - 2018-01-22 01:41:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  null value in column &quot;firstname&quot; violates not-null constraint
DETAIL:  Failing row contains (8, null, sadsads, assadsda, asddsasad, sasadsda, null). /opt/lampp/htdocs/SGMPE/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-01-22 01:41:44 --> Query error: ERROR:  null value in column "firstname" violates not-null constraint
DETAIL:  Failing row contains (8, null, sadsads, assadsda, asddsasad, sasadsda, null). - Invalid query: INSERT INTO "users" ("firstname", "lastname", "email", "username", "pass", "accesslevel") VALUES (NULL, 'sadsads', 'assadsda', 'asddsasad', 'sasadsda', NULL)
ERROR - 2018-01-22 01:43:08 --> Severity: error --> Exception: syntax error, unexpected '$data' (T_VARIABLE) /opt/lampp/htdocs/SGMPE/application/controllers/Users.php 39
ERROR - 2018-01-22 01:46:14 --> Severity: Notice --> Undefined property: Users::$accesslevel /opt/lampp/htdocs/SGMPE/system/core/Model.php 77
ERROR - 2018-01-22 01:46:41 --> Severity: Notice --> Undefined property: Users::$accesslevel /opt/lampp/htdocs/SGMPE/system/core/Model.php 77
ERROR - 2018-01-22 01:48:03 --> Severity: Notice --> Undefined property: Users::$accesslevel /opt/lampp/htdocs/SGMPE/system/core/Model.php 77
