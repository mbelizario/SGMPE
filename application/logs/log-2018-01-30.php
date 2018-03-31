<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-01-30 01:10:31 --> Severity: error --> Exception: syntax error, unexpected 'funtion' (T_STRING), expecting function (T_FUNCTION) or const (T_CONST) /opt/lampp/htdocs/SGMPE/application/controllers/Suppliers.php 18
ERROR - 2018-01-30 01:10:51 --> 404 Page Not Found: Suppliers/index
ERROR - 2018-01-30 01:11:22 --> 404 Page Not Found: Suppliers/index
ERROR - 2018-01-30 01:11:57 --> 404 Page Not Found: Suppliers/index
ERROR - 2018-01-30 01:12:41 --> Severity: error --> Exception: syntax error, unexpected ',' /opt/lampp/htdocs/SGMPE/application/models/Supplier.php 8
ERROR - 2018-01-30 01:13:13 --> Severity: error --> Exception: /opt/lampp/htdocs/SGMPE/application/models/Supplier.php exists, but doesn't declare class Supplier /opt/lampp/htdocs/SGMPE/system/core/Loader.php 336
ERROR - 2018-01-30 01:13:30 --> Severity: Notice --> Undefined variable: users /opt/lampp/htdocs/SGMPE/application/views/pages/supplier/index.php 35
ERROR - 2018-01-30 01:14:03 --> Severity: Notice --> Undefined variable: suppliers /opt/lampp/htdocs/SGMPE/application/views/pages/supplier/index.php 35
ERROR - 2018-01-30 01:15:12 --> Severity: Notice --> Undefined variable: suppliers /opt/lampp/htdocs/SGMPE/application/views/pages/supplier/index.php 35
ERROR - 2018-01-30 01:15:18 --> Severity: Notice --> Undefined variable: suppliers /opt/lampp/htdocs/SGMPE/application/views/pages/supplier/index.php 35
ERROR - 2018-01-30 01:17:22 --> Severity: Notice --> Undefined variable: suppliers /opt/lampp/htdocs/SGMPE/application/views/pages/supplier/index.php 35
ERROR - 2018-01-30 01:17:44 --> Severity: Notice --> Undefined property: stdClass::$company_name /opt/lampp/htdocs/SGMPE/application/views/pages/supplier/index.php 56
ERROR - 2018-01-30 01:17:44 --> Severity: Notice --> Undefined property: stdClass::$cnpj /opt/lampp/htdocs/SGMPE/application/views/pages/supplier/index.php 57
ERROR - 2018-01-30 01:17:44 --> Severity: Notice --> Undefined property: stdClass::$company_name /opt/lampp/htdocs/SGMPE/application/views/pages/supplier/index.php 56
ERROR - 2018-01-30 01:17:44 --> Severity: Notice --> Undefined property: stdClass::$cnpj /opt/lampp/htdocs/SGMPE/application/views/pages/supplier/index.php 57
ERROR - 2018-01-30 01:35:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;undefined&quot;
LINE 3: WHERE &quot;id&quot; = 'undefined'
                     ^ /opt/lampp/htdocs/SGMPE/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-01-30 01:35:10 --> Query error: ERROR:  invalid input syntax for integer: "undefined"
LINE 3: WHERE "id" = 'undefined'
                     ^ - Invalid query: SELECT "firstname", "lastname", "email", "username"
FROM "users"
WHERE "id" = 'undefined'
