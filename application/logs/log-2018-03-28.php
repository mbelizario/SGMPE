<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-03-28 00:17:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;Numero Teste&quot;
LINE 1: ...ilteste@teste.com.br', '11.111-111', 'Rua teste', 'Numero Te...
                                                             ^ /opt/lampp/htdocs/SGMPE/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-03-28 00:17:24 --> Query error: ERROR:  invalid input syntax for integer: "Numero Teste"
LINE 1: ...ilteste@teste.com.br', '11.111-111', 'Rua teste', 'Numero Te...
                                                             ^ - Invalid query: INSERT INTO "suppliers" ("company_name", "cnpj", "email", "address_zip_code", "address_street", "address_number", "address_comp", "address_neighborhood", "address_state", "phone", "cell_phone") VALUES ('Fornedor Teste', '11.111.111/1111-11', 'emailteste@teste.com.br', '11.111-111', 'Rua teste', 'Numero Teste', 'Complemento Teste', 'Bairro Teste', 'SP', '(11) 3333-3333', '(11) 11111-1111')
ERROR - 2018-03-28 00:17:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;Numero Teste&quot;
LINE 1: ...ilteste@teste.com.br', '11.111-111', 'Rua teste', 'Numero Te...
                                                             ^ /opt/lampp/htdocs/SGMPE/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-03-28 00:17:40 --> Query error: ERROR:  invalid input syntax for integer: "Numero Teste"
LINE 1: ...ilteste@teste.com.br', '11.111-111', 'Rua teste', 'Numero Te...
                                                             ^ - Invalid query: INSERT INTO "suppliers" ("company_name", "cnpj", "email", "address_zip_code", "address_street", "address_number", "address_comp", "address_neighborhood", "address_state", "phone", "cell_phone") VALUES ('Fornedor Teste', '11.111.111/1111-11', 'emailteste@teste.com.br', '11.111-111', 'Rua teste', 'Numero Teste', 'Complemento Teste', 'Bairro Teste', 'SP', '(11) 3333-3333', '(35) 33333-3333')
ERROR - 2018-03-28 00:20:46 --> Severity: Notice --> Undefined property: stdClass::$id /opt/lampp/htdocs/SGMPE/application/views/pages/supplier/index.php 53
ERROR - 2018-03-28 00:20:46 --> Severity: Notice --> Undefined property: stdClass::$cnpj /opt/lampp/htdocs/SGMPE/application/views/pages/supplier/index.php 57
ERROR - 2018-03-28 00:20:46 --> Severity: Notice --> Undefined property: stdClass::$email /opt/lampp/htdocs/SGMPE/application/views/pages/supplier/index.php 58
ERROR - 2018-03-28 00:22:05 --> Severity: Notice --> Undefined property: stdClass::$company_name /opt/lampp/htdocs/SGMPE/application/views/pages/supplier/index.php 56
ERROR - 2018-03-28 00:22:05 --> Severity: Notice --> Undefined property: stdClass::$cnpj /opt/lampp/htdocs/SGMPE/application/views/pages/supplier/index.php 57
ERROR - 2018-03-28 00:22:05 --> Severity: Notice --> Undefined property: stdClass::$email /opt/lampp/htdocs/SGMPE/application/views/pages/supplier/index.php 58
ERROR - 2018-03-28 00:26:17 --> 404 Page Not Found: Widgetshtml/index
ERROR - 2018-03-28 00:28:28 --> 404 Page Not Found: Chartshtml/index
ERROR - 2018-03-28 00:32:34 --> 404 Page Not Found: Widgetshtml/index
ERROR - 2018-03-28 00:36:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;undefined&quot;
LINE 3: WHERE &quot;id&quot; = 'undefined'
                     ^ /opt/lampp/htdocs/SGMPE/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-03-28 00:36:04 --> Query error: ERROR:  invalid input syntax for integer: "undefined"
LINE 3: WHERE "id" = 'undefined'
                     ^ - Invalid query: SELECT "firstname", "lastname", "email", "username"
FROM "users"
WHERE "id" = 'undefined'
ERROR - 2018-03-28 00:43:29 --> 404 Page Not Found: Widgetshtml/index
ERROR - 2018-03-28 00:44:22 --> 404 Page Not Found: Suppliers/edit
ERROR - 2018-03-28 00:44:29 --> 404 Page Not Found: Suppliers/edit
ERROR - 2018-03-28 23:46:28 --> 404 Page Not Found: Suppliers/edit
ERROR - 2018-03-28 23:59:35 --> Severity: Notice --> Trying to get property of non-object /opt/lampp/htdocs/SGMPE/application/views/pages/supplier/edit.php 36
