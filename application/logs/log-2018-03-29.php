<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-03-29 00:23:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;suppliers_cnpj_key&quot;
DETAIL:  Key (cnpj)=(11.111.111/1111-11) already exists. /opt/lampp/htdocs/SGMPE/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-03-29 00:23:46 --> Query error: ERROR:  duplicate key value violates unique constraint "suppliers_cnpj_key"
DETAIL:  Key (cnpj)=(11.111.111/1111-11) already exists. - Invalid query: INSERT INTO "suppliers" ("company_name", "cnpj", "email", "address_zip_code", "address_street", "address_number", "address_comp", "address_neighborhood", "address_city", "address_state", "phone", "cell_phone") VALUES ('Fornedor Teste', '11.111.111/1111-11', 'emailteste@teste.com.br', '11.111-111', 'Rua teste', '12', 'Complemento Teste', 'Bairro Teste', 'Cidade Teste', 'SP', '(11) 3333-3333', '(35) 33333-3333')
ERROR - 2018-03-29 01:01:06 --> 404 Page Not Found: Supplier/index
ERROR - 2018-03-29 01:01:25 --> 404 Page Not Found: Supplier/index
ERROR - 2018-03-29 01:13:02 --> 404 Page Not Found: Users/widgets.html
ERROR - 2018-03-29 01:25:45 --> 404 Page Not Found: Suppliers/viacep.com.br
ERROR - 2018-03-29 01:25:48 --> 404 Page Not Found: Suppliers/viacep.com.br
ERROR - 2018-03-29 01:25:50 --> 404 Page Not Found: Suppliers/viacep.com.br
ERROR - 2018-03-29 01:25:55 --> 404 Page Not Found: Suppliers/viacep.com.br
ERROR - 2018-03-29 01:26:56 --> 404 Page Not Found: Suppliers/viacep.com.br
ERROR - 2018-03-29 01:28:44 --> 404 Page Not Found: Suppliers/viacep.com.br
ERROR - 2018-03-29 01:29:16 --> 404 Page Not Found: Suppliers/widgets.html
ERROR - 2018-03-29 01:29:27 --> 404 Page Not Found: Suppliers/viacep.com.br
ERROR - 2018-03-29 01:34:14 --> 404 Page Not Found: Suppliers/viacep.com.br
ERROR - 2018-03-29 01:37:46 --> 404 Page Not Found: Suppliers/viacep.com.br
ERROR - 2018-03-29 01:38:26 --> 404 Page Not Found: Suppliers/viacep.com.br
ERROR - 2018-03-29 01:38:50 --> 404 Page Not Found: Suppliers/viacep.com.br
ERROR - 2018-03-29 01:39:20 --> 404 Page Not Found: Suppliers/viacep.com.br
ERROR - 2018-03-29 01:47:07 --> 404 Page Not Found: Suppliers/viacep.com.br
ERROR - 2018-03-29 01:47:34 --> 404 Page Not Found: Suppliers/viacep.com.br
ERROR - 2018-03-29 02:04:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;undefined&quot;
LINE 3: WHERE &quot;id&quot; = 'undefined'
                     ^ /opt/lampp/htdocs/SGMPE/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-03-29 02:04:06 --> Query error: ERROR:  invalid input syntax for integer: "undefined"
LINE 3: WHERE "id" = 'undefined'
                     ^ - Invalid query: SELECT *
FROM "suppliers"
WHERE "id" = 'undefined'
ERROR - 2018-03-29 02:04:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;undefined&quot;
LINE 3: WHERE &quot;id&quot; = 'undefined'
                     ^ /opt/lampp/htdocs/SGMPE/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-03-29 02:04:18 --> Query error: ERROR:  invalid input syntax for integer: "undefined"
LINE 3: WHERE "id" = 'undefined'
                     ^ - Invalid query: SELECT "firstname", "lastname", "email", "username"
FROM "users"
WHERE "id" = 'undefined'
ERROR - 2018-03-29 02:41:48 --> Severity: error --> Exception: Too few arguments to function Supplier::__construct(), 0 passed in /opt/lampp/htdocs/SGMPE/system/core/Loader.php on line 353 and at least 11 expected /opt/lampp/htdocs/SGMPE/application/models/Supplier.php 7
