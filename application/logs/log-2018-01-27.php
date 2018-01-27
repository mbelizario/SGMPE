<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-01-27 00:29:43 --> Severity: error --> Exception: Call to undefined function erro_log() /opt/lampp/htdocs/SGMPE/application/controllers/Users.php 57
ERROR - 2018-01-27 00:37:51 --> Severity: Notice --> Undefined variable: lang /opt/lampp/htdocs/SGMPE/application/controllers/Users.php 56
ERROR - 2018-01-27 00:48:51 --> Severity: error --> Exception: syntax error, unexpected '}' /opt/lampp/htdocs/SGMPE/application/controllers/Users.php 61
ERROR - 2018-01-27 00:54:51 --> Severity: error --> Exception: syntax error, unexpected '=>' (T_DOUBLE_ARROW), expecting ',' or ')' /opt/lampp/htdocs/SGMPE/application/models/User.php 28
ERROR - 2018-01-27 01:03:27 --> Severity: error --> Exception: syntax error, unexpected end of file, expecting elseif (T_ELSEIF) or else (T_ELSE) or endif (T_ENDIF) /opt/lampp/htdocs/SGMPE/application/views/pages/user/save.php 86
ERROR - 2018-01-27 01:03:43 --> Severity: Notice --> Trying to get property of non-object /opt/lampp/htdocs/SGMPE/application/views/pages/user/save.php 39
ERROR - 2018-01-27 01:03:59 --> Severity: Notice --> Undefined index: firstname /opt/lampp/htdocs/SGMPE/application/views/pages/user/save.php 39
ERROR - 2018-01-27 01:05:35 --> Severity: error --> Exception: Cannot use object of type stdClass as array /opt/lampp/htdocs/SGMPE/application/views/pages/user/save.php 39
ERROR - 2018-01-27 01:05:55 --> Severity: 4096 --> Object of class stdClass could not be converted to string /opt/lampp/htdocs/SGMPE/application/views/pages/user/save.php 39
ERROR - 2018-01-27 01:07:32 --> Severity: error --> Exception: syntax error, unexpected '0' (T_LNUMBER), expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' /opt/lampp/htdocs/SGMPE/application/views/pages/user/save.php 39
ERROR - 2018-01-27 01:14:04 --> Severity: error --> Exception: Too few arguments to function Users::save(), 0 passed in /opt/lampp/htdocs/SGMPE/system/core/CodeIgniter.php on line 532 and exactly 1 expected /opt/lampp/htdocs/SGMPE/application/controllers/Users.php 24
ERROR - 2018-01-27 01:14:53 --> Severity: error --> Exception: Too few arguments to function Users::save(), 0 passed in /opt/lampp/htdocs/SGMPE/system/core/CodeIgniter.php on line 532 and exactly 1 expected /opt/lampp/htdocs/SGMPE/application/controllers/Users.php 24
ERROR - 2018-01-27 01:14:56 --> Severity: error --> Exception: Too few arguments to function Users::save(), 0 passed in /opt/lampp/htdocs/SGMPE/system/core/CodeIgniter.php on line 532 and exactly 1 expected /opt/lampp/htdocs/SGMPE/application/controllers/Users.php 24
ERROR - 2018-01-27 01:15:37 --> Severity: error --> Exception: syntax error, unexpected 'endif' (T_ENDIF), expecting ',' or ';' /opt/lampp/htdocs/SGMPE/application/views/pages/user/save.php 39
ERROR - 2018-01-27 01:16:01 --> Severity: Notice --> Undefined variable: user /opt/lampp/htdocs/SGMPE/application/views/pages/user/save.php 39
ERROR - 2018-01-27 01:22:11 --> Severity: Warning --> Creating default object from empty value /opt/lampp/htdocs/SGMPE/application/controllers/Users.php 60
ERROR - 2018-01-27 01:22:34 --> Severity: Warning --> Creating default object from empty value /opt/lampp/htdocs/SGMPE/application/controllers/Users.php 60
ERROR - 2018-01-27 01:22:34 --> Severity: Notice --> Undefined property: stdClass::$firstname /opt/lampp/htdocs/SGMPE/application/controllers/Users.php 61
ERROR - 2018-01-27 04:16:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  null value in column &quot;firstname&quot; violates not-null constraint
DETAIL:  Failing row contains (21, null, null, , , , null). /opt/lampp/htdocs/SGMPE/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-01-27 04:16:21 --> Query error: ERROR:  null value in column "firstname" violates not-null constraint
DETAIL:  Failing row contains (21, null, null, , , , null). - Invalid query: INSERT INTO "users" ("firstname", "lastname", "email", "username", "pass", "accesslevel") VALUES (NULL, NULL, '', '', '', NULL)
ERROR - 2018-01-27 04:16:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  null value in column &quot;firstname&quot; violates not-null constraint
DETAIL:  Failing row contains (22, null, null, , , , null). /opt/lampp/htdocs/SGMPE/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-01-27 04:16:25 --> Query error: ERROR:  null value in column "firstname" violates not-null constraint
DETAIL:  Failing row contains (22, null, null, , , , null). - Invalid query: INSERT INTO "users" ("firstname", "lastname", "email", "username", "pass", "accesslevel") VALUES (NULL, NULL, '', '', '', NULL)
ERROR - 2018-01-27 04:21:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  null value in column &quot;firstname&quot; violates not-null constraint
DETAIL:  Failing row contains (23, null, null, , , , null). /opt/lampp/htdocs/SGMPE/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-01-27 04:21:59 --> Query error: ERROR:  null value in column "firstname" violates not-null constraint
DETAIL:  Failing row contains (23, null, null, , , , null). - Invalid query: INSERT INTO "users" ("firstname", "lastname", "email", "username", "pass", "accesslevel") VALUES (NULL, NULL, '', '', '', NULL)
ERROR - 2018-01-27 04:25:33 --> Severity: error --> Exception: syntax error, unexpected 'catch' (T_CATCH), expecting function (T_FUNCTION) or const (T_CONST) /opt/lampp/htdocs/SGMPE/application/controllers/Users.php 49
ERROR - 2018-01-27 04:43:06 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) /opt/lampp/htdocs/SGMPE/application/controllers/Users.php 68
ERROR - 2018-01-27 04:51:17 --> Severity: error --> Exception: syntax error, unexpected '->' (T_OBJECT_OPERATOR) /opt/lampp/htdocs/SGMPE/application/controllers/Users.php 40
ERROR - 2018-01-27 05:40:07 --> Severity: error --> Exception: syntax error, unexpected ']' /opt/lampp/htdocs/SGMPE/application/controllers/Users.php 40
ERROR - 2018-01-27 05:40:20 --> Severity: error --> Exception: syntax error, unexpected ']' /opt/lampp/htdocs/SGMPE/application/controllers/Users.php 40
ERROR - 2018-01-27 05:40:52 --> Severity: error --> Exception: syntax error, unexpected ']' /opt/lampp/htdocs/SGMPE/application/controllers/Users.php 40
ERROR - 2018-01-27 05:40:53 --> Severity: error --> Exception: syntax error, unexpected ']' /opt/lampp/htdocs/SGMPE/application/controllers/Users.php 40
ERROR - 2018-01-27 06:14:20 --> 404 Page Not Found: Public/js
ERROR - 2018-01-27 06:14:21 --> 404 Page Not Found: Public/js
ERROR - 2018-01-27 06:17:25 --> 404 Page Not Found: Public/js
ERROR - 2018-01-27 06:17:25 --> 404 Page Not Found: Public/js
ERROR - 2018-01-27 06:17:44 --> 404 Page Not Found: Public/js
ERROR - 2018-01-27 06:17:45 --> 404 Page Not Found: Public/js
ERROR - 2018-01-27 06:17:53 --> 404 Page Not Found: Public/js
ERROR - 2018-01-27 06:17:54 --> 404 Page Not Found: Public/js
ERROR - 2018-01-27 06:18:12 --> 404 Page Not Found: Public/js
ERROR - 2018-01-27 06:18:12 --> 404 Page Not Found: Public/js
ERROR - 2018-01-27 06:21:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;undefined&quot;
LINE 3: WHERE &quot;id&quot; = 'undefined'
                     ^ /opt/lampp/htdocs/SGMPE/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-01-27 06:21:30 --> Query error: ERROR:  invalid input syntax for integer: "undefined"
LINE 3: WHERE "id" = 'undefined'
                     ^ - Invalid query: SELECT "firstname", "lastname", "email", "username"
FROM "users"
WHERE "id" = 'undefined'
ERROR - 2018-01-27 06:23:03 --> Severity: error --> Exception: Nome de usuário já em uso! /opt/lampp/htdocs/SGMPE/application/controllers/Users.php 108
ERROR - 2018-01-27 06:23:50 --> Severity: error --> Exception: Nome de usuário já em uso! /opt/lampp/htdocs/SGMPE/application/controllers/Users.php 108
ERROR - 2018-01-27 06:25:06 --> Severity: Notice --> Undefined variable: result_to_display /opt/lampp/htdocs/SGMPE/application/controllers/Users.php 140
ERROR - 2018-01-27 06:25:14 --> Severity: Notice --> Undefined variable: result_to_display /opt/lampp/htdocs/SGMPE/application/controllers/Users.php 140
ERROR - 2018-01-27 06:27:02 --> Severity: Notice --> Undefined variable: result_to_display /opt/lampp/htdocs/SGMPE/application/controllers/Users.php 140
ERROR - 2018-01-27 06:27:47 --> 404 Page Not Found: Users/edit4
ERROR - 2018-01-27 06:28:22 --> 404 Page Not Found: Users/edit4
ERROR - 2018-01-27 06:29:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;josedasilva&quot; does not exist
LINE 2:          username = josedasilva AND id &lt;&gt; 4;
                            ^ /opt/lampp/htdocs/SGMPE/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-01-27 06:29:04 --> Query error: ERROR:  column "josedasilva" does not exist
LINE 2:          username = josedasilva AND id <> 4;
                            ^ - Invalid query: select count(*) from users where
         username = josedasilva AND id <> 4;
ERROR - 2018-01-27 06:29:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;josedasilva&quot; does not exist
LINE 2:          username = josedasilva AND id &lt;&gt; 4;
                            ^ /opt/lampp/htdocs/SGMPE/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-01-27 06:29:34 --> Query error: ERROR:  column "josedasilva" does not exist
LINE 2:          username = josedasilva AND id <> 4;
                            ^ - Invalid query: select count(*) from users where
         username = josedasilva AND id <> 4;
ERROR - 2018-01-27 06:30:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;josedasilva&quot; does not exist
LINE 2:          username = josedasilva AND id &lt;&gt; 4;
                            ^ /opt/lampp/htdocs/SGMPE/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-01-27 06:30:10 --> Query error: ERROR:  column "josedasilva" does not exist
LINE 2:          username = josedasilva AND id <> 4;
                            ^ - Invalid query: select count(*) from users where
         username = josedasilva AND id <> 4;
ERROR - 2018-01-27 06:30:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;mariajts&quot; does not exist
LINE 2:          username = Mariajts AND id &lt;&gt; 9;
                            ^ /opt/lampp/htdocs/SGMPE/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-01-27 06:30:26 --> Query error: ERROR:  column "mariajts" does not exist
LINE 2:          username = Mariajts AND id <> 9;
                            ^ - Invalid query: select count(*) from users where
         username = Mariajts AND id <> 9;
ERROR - 2018-01-27 06:31:53 --> Severity: error --> Exception: Por favor preencha o sobrenome! /opt/lampp/htdocs/SGMPE/application/controllers/Users.php 102
ERROR - 2018-01-27 06:34:32 --> Severity: error --> Exception: Por favor preencha o sobrenome! /opt/lampp/htdocs/SGMPE/application/controllers/Users.php 102
ERROR - 2018-01-27 06:36:05 --> Severity: error --> Exception: Por favor preencha o sobrenome! /opt/lampp/htdocs/SGMPE/application/controllers/Users.php 102
ERROR - 2018-01-27 06:38:08 --> Severity: error --> Exception: Por favor preencha o nome! /opt/lampp/htdocs/SGMPE/application/controllers/Users.php 100
ERROR - 2018-01-27 06:38:30 --> Severity: error --> Exception: Por favor preencha o nome! /opt/lampp/htdocs/SGMPE/application/controllers/Users.php 100
ERROR - 2018-01-27 06:38:51 --> Severity: error --> Exception: Por favor preencha o nome! /opt/lampp/htdocs/SGMPE/application/controllers/Users.php 100
ERROR - 2018-01-27 06:40:03 --> Severity: error --> Exception: Por favor preencha o nome! /opt/lampp/htdocs/SGMPE/application/controllers/Users.php 100
ERROR - 2018-01-27 06:42:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;josedasilva&quot; does not exist
LINE 2:          username = josedasilva AND id &lt;&gt; 4;
                            ^ /opt/lampp/htdocs/SGMPE/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-01-27 06:42:19 --> Query error: ERROR:  column "josedasilva" does not exist
LINE 2:          username = josedasilva AND id <> 4;
                            ^ - Invalid query: select count(*) from users where
         username = josedasilva AND id <> 4;
ERROR - 2018-01-27 06:43:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;josedasilva&quot; does not exist
LINE 2:          username = josedasilva AND id &lt;&gt; 4;
                            ^ /opt/lampp/htdocs/SGMPE/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-01-27 06:43:11 --> Query error: ERROR:  column "josedasilva" does not exist
LINE 2:          username = josedasilva AND id <> 4;
                            ^ - Invalid query: select count(*) from users where
         username = josedasilva AND id <> 4;
ERROR - 2018-01-27 06:43:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  null value in column &quot;pass&quot; violates not-null constraint
DETAIL:  Failing row contains (4, Jose, da Silva, josedasilva@gmail.com, josedasilva, null, null). /opt/lampp/htdocs/SGMPE/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-01-27 06:43:27 --> Query error: ERROR:  null value in column "pass" violates not-null constraint
DETAIL:  Failing row contains (4, Jose, da Silva, josedasilva@gmail.com, josedasilva, null, null). - Invalid query: UPDATE "users" SET "firstname" = 'Jose', "lastname" = 'da Silva', "email" = 'josedasilva@gmail.com', "username" = 'josedasilva', "pass" = NULL, "accesslevel" = NULL
WHERE "id" = '4'
ERROR - 2018-01-27 06:44:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  null value in column &quot;pass&quot; violates not-null constraint
DETAIL:  Failing row contains (4, Jose, da Silva, josedasilva@gmail.com, josedasilva, null, null). /opt/lampp/htdocs/SGMPE/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-01-27 06:44:19 --> Query error: ERROR:  null value in column "pass" violates not-null constraint
DETAIL:  Failing row contains (4, Jose, da Silva, josedasilva@gmail.com, josedasilva, null, null). - Invalid query: UPDATE "users" SET "firstname" = 'Jose', "lastname" = 'da Silva', "email" = 'josedasilva@gmail.com', "username" = 'josedasilva', "pass" = NULL, "accesslevel" = NULL
WHERE "id" = '4'
ERROR - 2018-01-27 06:44:33 --> Severity: error --> Exception: syntax error, unexpected 'nao' (T_STRING) /opt/lampp/htdocs/SGMPE/application/controllers/Users.php 115
ERROR - 2018-01-27 06:44:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;josedasilva&quot; does not exist
LINE 2:          username = josedasilva AND id &lt;&gt; 4;
                            ^ /opt/lampp/htdocs/SGMPE/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-01-27 06:44:50 --> Query error: ERROR:  column "josedasilva" does not exist
LINE 2:          username = josedasilva AND id <> 4;
                            ^ - Invalid query: select count(*) from users where
         username = josedasilva AND id <> 4;
ERROR - 2018-01-27 06:45:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;josedasilva&quot; does not exist
LINE 2:          username = josedasilva AND id &lt;&gt; 4;
                            ^ /opt/lampp/htdocs/SGMPE/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-01-27 06:45:06 --> Query error: ERROR:  column "josedasilva" does not exist
LINE 2:          username = josedasilva AND id <> 4;
                            ^ - Invalid query: select count(*) from users where
         username = josedasilva AND id <> 4;
ERROR - 2018-01-27 06:45:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;josedasilva&quot; does not exist
LINE 2:          username = josedasilva AND id &lt;&gt; 4;
                            ^ /opt/lampp/htdocs/SGMPE/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-01-27 06:45:07 --> Query error: ERROR:  column "josedasilva" does not exist
LINE 2:          username = josedasilva AND id <> 4;
                            ^ - Invalid query: select count(*) from users where
         username = josedasilva AND id <> 4;
ERROR - 2018-01-27 06:45:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;josedasilva&quot; does not exist
LINE 2:          username = josedasilva AND id &lt;&gt; 4;
                            ^ /opt/lampp/htdocs/SGMPE/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-01-27 06:45:29 --> Query error: ERROR:  column "josedasilva" does not exist
LINE 2:          username = josedasilva AND id <> 4;
                            ^ - Invalid query: select count(*) from users where
         username = josedasilva AND id <> 4;
ERROR - 2018-01-27 06:47:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;josedasilva&quot; does not exist
LINE 2:          username = josedasilva AND id &lt;&gt; 4;
                            ^ /opt/lampp/htdocs/SGMPE/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-01-27 06:47:14 --> Query error: ERROR:  column "josedasilva" does not exist
LINE 2:          username = josedasilva AND id <> 4;
                            ^ - Invalid query: select count(*) from users where
         username = josedasilva AND id <> 4;
ERROR - 2018-01-27 06:48:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;josedasilva&quot; does not exist
LINE 2:          username = josedasilva AND id &lt;&gt; 4;
                            ^ /opt/lampp/htdocs/SGMPE/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-01-27 06:48:37 --> Query error: ERROR:  column "josedasilva" does not exist
LINE 2:          username = josedasilva AND id <> 4;
                            ^ - Invalid query: select count(*) from users where
         username = josedasilva AND id <> 4;
ERROR - 2018-01-27 06:51:02 --> Severity: error --> Exception: syntax error, unexpected 'nao' (T_STRING) /opt/lampp/htdocs/SGMPE/application/controllers/Users.php 115
ERROR - 2018-01-27 06:51:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  null value in column &quot;pass&quot; violates not-null constraint
DETAIL:  Failing row contains (4, Jose1, da Silva, josedasilva@gmail.com, josedasilva, null, null). /opt/lampp/htdocs/SGMPE/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-01-27 06:51:16 --> Query error: ERROR:  null value in column "pass" violates not-null constraint
DETAIL:  Failing row contains (4, Jose1, da Silva, josedasilva@gmail.com, josedasilva, null, null). - Invalid query: UPDATE "users" SET "firstname" = 'Jose1', "lastname" = 'da Silva', "email" = 'josedasilva@gmail.com', "username" = 'josedasilva', "pass" = NULL, "accesslevel" = NULL
WHERE "id" = '4'
ERROR - 2018-01-27 06:52:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  null value in column &quot;pass&quot; violates not-null constraint
DETAIL:  Failing row contains (4, Jose, da Silva, josedasilva@gmail.com, josedasilva, null, null). /opt/lampp/htdocs/SGMPE/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-01-27 06:52:41 --> Query error: ERROR:  null value in column "pass" violates not-null constraint
DETAIL:  Failing row contains (4, Jose, da Silva, josedasilva@gmail.com, josedasilva, null, null). - Invalid query: UPDATE "users" SET "firstname" = 'Jose', "lastname" = 'da Silva', "email" = 'josedasilva@gmail.com', "username" = 'josedasilva', "pass" = NULL, "accesslevel" = NULL
WHERE "id" = '4'
ERROR - 2018-01-27 06:57:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  null value in column &quot;pass&quot; violates not-null constraint
DETAIL:  Failing row contains (4, Jose, da Silva, josedasilva@gmail.com, josedasilva, null, null). /opt/lampp/htdocs/SGMPE/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-01-27 06:57:48 --> Query error: ERROR:  null value in column "pass" violates not-null constraint
DETAIL:  Failing row contains (4, Jose, da Silva, josedasilva@gmail.com, josedasilva, null, null). - Invalid query: UPDATE "users" SET "firstname" = 'Jose', "lastname" = 'da Silva', "email" = 'josedasilva@gmail.com', "username" = 'josedasilva', "pass" = NULL, "accesslevel" = NULL
WHERE "id" = '4'
ERROR - 2018-01-27 06:58:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  null value in column &quot;pass&quot; violates not-null constraint
DETAIL:  Failing row contains (4, Jose, da Silva, josedasilva@gmail.com, josedasilva, null, null). /opt/lampp/htdocs/SGMPE/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-01-27 06:58:19 --> Query error: ERROR:  null value in column "pass" violates not-null constraint
DETAIL:  Failing row contains (4, Jose, da Silva, josedasilva@gmail.com, josedasilva, null, null). - Invalid query: UPDATE "users" SET "firstname" = 'Jose', "lastname" = 'da Silva', "email" = 'josedasilva@gmail.com', "username" = 'josedasilva', "pass" = NULL, "accesslevel" = NULL
WHERE "id" = '4'
ERROR - 2018-01-27 06:58:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  null value in column &quot;pass&quot; violates not-null constraint
DETAIL:  Failing row contains (4, Jose, da Silva, josedasilva@gmail.com, josedasilvaa, null, null). /opt/lampp/htdocs/SGMPE/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-01-27 06:58:36 --> Query error: ERROR:  null value in column "pass" violates not-null constraint
DETAIL:  Failing row contains (4, Jose, da Silva, josedasilva@gmail.com, josedasilvaa, null, null). - Invalid query: UPDATE "users" SET "firstname" = 'Jose', "lastname" = 'da Silva', "email" = 'josedasilva@gmail.com', "username" = 'josedasilvaa', "pass" = NULL, "accesslevel" = NULL
WHERE "id" = '4'
ERROR - 2018-01-27 06:58:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  null value in column &quot;pass&quot; violates not-null constraint
DETAIL:  Failing row contains (4, Jose, da Silva, josedasilva@gmail.com, josedasilva, null, null). /opt/lampp/htdocs/SGMPE/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-01-27 06:58:59 --> Query error: ERROR:  null value in column "pass" violates not-null constraint
DETAIL:  Failing row contains (4, Jose, da Silva, josedasilva@gmail.com, josedasilva, null, null). - Invalid query: UPDATE "users" SET "firstname" = 'Jose', "lastname" = 'da Silva', "email" = 'josedasilva@gmail.com', "username" = 'josedasilva', "pass" = NULL, "accesslevel" = NULL
WHERE "id" = '4'
ERROR - 2018-01-27 06:59:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  null value in column &quot;pass&quot; violates not-null constraint
DETAIL:  Failing row contains (4, Jose, da Silva, josedasilva@gmail.com, josedasilva, null, null). /opt/lampp/htdocs/SGMPE/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-01-27 06:59:21 --> Query error: ERROR:  null value in column "pass" violates not-null constraint
DETAIL:  Failing row contains (4, Jose, da Silva, josedasilva@gmail.com, josedasilva, null, null). - Invalid query: UPDATE "users" SET "firstname" = 'Jose', "lastname" = 'da Silva', "email" = 'josedasilva@gmail.com', "username" = 'josedasilva', "pass" = NULL, "accesslevel" = NULL
WHERE "id" = '4'
ERROR - 2018-01-27 06:59:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  null value in column &quot;pass&quot; violates not-null constraint
DETAIL:  Failing row contains (4, Jose, da Silva, josedasilva@gmail.com, josedasilva, null, null). /opt/lampp/htdocs/SGMPE/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-01-27 06:59:28 --> Query error: ERROR:  null value in column "pass" violates not-null constraint
DETAIL:  Failing row contains (4, Jose, da Silva, josedasilva@gmail.com, josedasilva, null, null). - Invalid query: UPDATE "users" SET "firstname" = 'Jose', "lastname" = 'da Silva', "email" = 'josedasilva@gmail.com', "username" = 'josedasilva', "pass" = NULL, "accesslevel" = NULL
WHERE "id" = '4'
ERROR - 2018-01-27 06:59:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  null value in column &quot;pass&quot; violates not-null constraint
DETAIL:  Failing row contains (4, Jose, da Silva, josedasilva@gmail.com, josedasilva, null, null). /opt/lampp/htdocs/SGMPE/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-01-27 06:59:49 --> Query error: ERROR:  null value in column "pass" violates not-null constraint
DETAIL:  Failing row contains (4, Jose, da Silva, josedasilva@gmail.com, josedasilva, null, null). - Invalid query: UPDATE "users" SET "firstname" = 'Jose', "lastname" = 'da Silva', "email" = 'josedasilva@gmail.com', "username" = 'josedasilva', "pass" = NULL, "accesslevel" = NULL
WHERE "id" = '4'
ERROR - 2018-01-27 06:59:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  null value in column &quot;pass&quot; violates not-null constraint
DETAIL:  Failing row contains (1, Micael, Belizario, mbelizario@gmail.com, mbelizario, null, null). /opt/lampp/htdocs/SGMPE/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-01-27 06:59:56 --> Query error: ERROR:  null value in column "pass" violates not-null constraint
DETAIL:  Failing row contains (1, Micael, Belizario, mbelizario@gmail.com, mbelizario, null, null). - Invalid query: UPDATE "users" SET "firstname" = 'Micael', "lastname" = 'Belizario', "email" = 'mbelizario@gmail.com', "username" = 'mbelizario', "pass" = NULL, "accesslevel" = NULL
WHERE "id" = '1'
ERROR - 2018-01-27 07:00:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  null value in column &quot;pass&quot; violates not-null constraint
DETAIL:  Failing row contains (1, Micael, Belizario, mbelizario@gmail.com, mbelizario, null, null). /opt/lampp/htdocs/SGMPE/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-01-27 07:00:27 --> Query error: ERROR:  null value in column "pass" violates not-null constraint
DETAIL:  Failing row contains (1, Micael, Belizario, mbelizario@gmail.com, mbelizario, null, null). - Invalid query: UPDATE "users" SET "firstname" = 'Micael', "lastname" = 'Belizario', "email" = 'mbelizario@gmail.com', "username" = 'mbelizario', "pass" = NULL, "accesslevel" = NULL
WHERE "id" = '1'
ERROR - 2018-01-27 18:28:17 --> Severity: Notice --> Undefined variable: result_to_display /opt/lampp/htdocs/SGMPE/application/controllers/Users.php 147
ERROR - 2018-01-27 18:59:14 --> Severity: error --> Exception: syntax error, unexpected 'W' (T_STRING), expecting ',' or ')' /opt/lampp/htdocs/SGMPE/application/controllers/Users.php 60
ERROR - 2018-01-27 19:46:24 --> Severity: error --> Exception: Call to undefined method User::delete() /opt/lampp/htdocs/SGMPE/application/controllers/Users.php 155
ERROR - 2018-01-27 19:54:57 --> Severity: error --> Exception: syntax error, unexpected 'endif' (T_ENDIF), expecting ',' or ';' /opt/lampp/htdocs/SGMPE/application/views/pages/user/index.php 66
