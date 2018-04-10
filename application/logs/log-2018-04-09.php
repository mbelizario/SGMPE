<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-04-09 22:21:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;bills_to_pay_document_number_key&quot;
DETAIL:  Key (document_number)=(1) already exists. /opt/lampp/htdocs/SGMPE/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-04-09 22:21:50 --> Query error: ERROR:  duplicate key value violates unique constraint "bills_to_pay_document_number_key"
DETAIL:  Key (document_number)=(1) already exists. - Invalid query: INSERT INTO "bills_to_pay" ("supplier_id", "document_number", "complementary_information", "issue_date", "due_date", "amount", "paid_amount", "pay_day", "bill_to_pay_type_id") VALUES ('18', '1', '                            Teste                        ', '2018-04-07', '2018-04-19', '6400.65', '6400.65', '2018-04-07', '1')
ERROR - 2018-04-09 22:35:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for type date: &quot;&quot;
LINE 1: ...         ', '09/04/2018', '10/04/2018', '64', '64', '', '2')
                                                               ^ /opt/lampp/htdocs/SGMPE/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-04-09 22:35:25 --> Query error: ERROR:  invalid input syntax for type date: ""
LINE 1: ...         ', '09/04/2018', '10/04/2018', '64', '64', '', '2')
                                                               ^ - Invalid query: INSERT INTO "bills_to_pay" ("supplier_id", "document_number", "complementary_information", "issue_date", "due_date", "amount", "paid_amount", "pay_day", "bill_to_pay_type_id") VALUES ('18', '2', '                        ', '09/04/2018', '10/04/2018', '64', '64', '', '2')
ERROR - 2018-04-09 22:35:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for type date: &quot;&quot;
LINE 1: ...         ', '09/04/2018', '10/04/2018', '64', '64', '', '2')
                                                               ^ /opt/lampp/htdocs/SGMPE/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-04-09 22:35:32 --> Query error: ERROR:  invalid input syntax for type date: ""
LINE 1: ...         ', '09/04/2018', '10/04/2018', '64', '64', '', '2')
                                                               ^ - Invalid query: INSERT INTO "bills_to_pay" ("supplier_id", "document_number", "complementary_information", "issue_date", "due_date", "amount", "paid_amount", "pay_day", "bill_to_pay_type_id") VALUES ('18', '2', '                        ', '09/04/2018', '10/04/2018', '64', '64', '', '2')
ERROR - 2018-04-09 22:42:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;id&quot; does not exist
LINE 1: SELECT id, supplier_id, document_number, complementary_infor...
               ^ /opt/lampp/htdocs/SGMPE/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-04-09 22:42:22 --> Query error: ERROR:  column "id" does not exist
LINE 1: SELECT id, supplier_id, document_number, complementary_infor...
               ^ - Invalid query: SELECT id, supplier_id, document_number, complementary_information, amount,
        paid_amount, pay_day, bill_to_pay_type_id, to_char('issue_date', 'DD/MM/YYYY'), 
        to_char('due_date', 'DD/MM/YYYY'), to_char('pay_day', 'DD/MM/YYYY')
ERROR - 2018-04-09 22:43:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  function to_char(unknown, unknown) is not unique
LINE 2: ...       paid_amount, pay_day, bill_to_pay_type_id, to_char('i...
                                                             ^
HINT:  Could not choose a best candidate function. You might need to add explicit type casts. /opt/lampp/htdocs/SGMPE/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-04-09 22:43:13 --> Query error: ERROR:  function to_char(unknown, unknown) is not unique
LINE 2: ...       paid_amount, pay_day, bill_to_pay_type_id, to_char('i...
                                                             ^
HINT:  Could not choose a best candidate function. You might need to add explicit type casts. - Invalid query: SELECT id, supplier_id, document_number, complementary_information, amount,
        paid_amount, pay_day, bill_to_pay_type_id, to_char('issue_date', 'DD/MM/YYYY'), 
        to_char('due_date', 'DD/MM/YYYY'), to_char('pay_day', 'DD/MM/YYYY') FROM bills_to_pay
ERROR - 2018-04-09 22:45:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  function to_char(unknown, unknown) is not unique
LINE 1: SELECT  *, to_char('issue_date', 'DD/MM/YYYY'), 
                   ^
HINT:  Could not choose a best candidate function. You might need to add explicit type casts. /opt/lampp/htdocs/SGMPE/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-04-09 22:45:51 --> Query error: ERROR:  function to_char(unknown, unknown) is not unique
LINE 1: SELECT  *, to_char('issue_date', 'DD/MM/YYYY'), 
                   ^
HINT:  Could not choose a best candidate function. You might need to add explicit type casts. - Invalid query: SELECT  *, to_char('issue_date', 'DD/MM/YYYY'), 
        to_char('due_date', 'DD/MM/YYYY'), to_char('pay_day', 'DD/MM/YYYY') FROM bills_to_pay
ERROR - 2018-04-09 22:45:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  function to_char(unknown, unknown) is not unique
LINE 1: SELECT  *, to_char('issue_date', 'DD/MM/YYYY'), 
                   ^
HINT:  Could not choose a best candidate function. You might need to add explicit type casts. /opt/lampp/htdocs/SGMPE/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-04-09 22:45:55 --> Query error: ERROR:  function to_char(unknown, unknown) is not unique
LINE 1: SELECT  *, to_char('issue_date', 'DD/MM/YYYY'), 
                   ^
HINT:  Could not choose a best candidate function. You might need to add explicit type casts. - Invalid query: SELECT  *, to_char('issue_date', 'DD/MM/YYYY'), 
        to_char('due_date', 'DD/MM/YYYY'), to_char('pay_day', 'DD/MM/YYYY') FROM bills_to_pay
ERROR - 2018-04-09 22:46:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  function to_char(unknown, unknown) is not unique
LINE 2:         to_char('due_date', 'DD/MM/YYYY'), to_char('pay_day'...
                ^
HINT:  Could not choose a best candidate function. You might need to add explicit type casts. /opt/lampp/htdocs/SGMPE/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-04-09 22:46:56 --> Query error: ERROR:  function to_char(unknown, unknown) is not unique
LINE 2:         to_char('due_date', 'DD/MM/YYYY'), to_char('pay_day'...
                ^
HINT:  Could not choose a best candidate function. You might need to add explicit type casts. - Invalid query: SELECT  *, to_char(issue_date, 'DD/MM/YYYY'), 
        to_char('due_date', 'DD/MM/YYYY'), to_char('pay_day', 'DD/MM/YYYY') FROM bills_to_pay
ERROR - 2018-04-09 22:47:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  function to_char(unknown, unknown) is not unique
LINE 2:         to_char(due_date, 'DD/MM/YYYY'), to_char('pay_day', ...
                                                 ^
HINT:  Could not choose a best candidate function. You might need to add explicit type casts. /opt/lampp/htdocs/SGMPE/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-04-09 22:47:15 --> Query error: ERROR:  function to_char(unknown, unknown) is not unique
LINE 2:         to_char(due_date, 'DD/MM/YYYY'), to_char('pay_day', ...
                                                 ^
HINT:  Could not choose a best candidate function. You might need to add explicit type casts. - Invalid query: SELECT  *, to_char(issue_date, 'DD/MM/YYYY'), 
        to_char(due_date, 'DD/MM/YYYY'), to_char('pay_day', 'DD/MM/YYYY') FROM bills_to_pay
ERROR - 2018-04-09 22:47:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  function to_char(unknown, unknown) is not unique
LINE 2:         to_char(due_date, 'DD/MM/YYYY'), to_char('pay_day', ...
                                                 ^
HINT:  Could not choose a best candidate function. You might need to add explicit type casts. /opt/lampp/htdocs/SGMPE/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-04-09 22:47:16 --> Query error: ERROR:  function to_char(unknown, unknown) is not unique
LINE 2:         to_char(due_date, 'DD/MM/YYYY'), to_char('pay_day', ...
                                                 ^
HINT:  Could not choose a best candidate function. You might need to add explicit type casts. - Invalid query: SELECT  *, to_char(issue_date, 'DD/MM/YYYY'), 
        to_char(due_date, 'DD/MM/YYYY'), to_char('pay_day', 'DD/MM/YYYY') FROM bills_to_pay
ERROR - 2018-04-09 22:49:01 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;(&quot;
LINE 1: SELECT  *, issue_date to_char(issue_date, 'DD/MM/YYYY'), 
                                     ^ /opt/lampp/htdocs/SGMPE/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-04-09 22:49:01 --> Query error: ERROR:  syntax error at or near "("
LINE 1: SELECT  *, issue_date to_char(issue_date, 'DD/MM/YYYY'), 
                                     ^ - Invalid query: SELECT  *, issue_date to_char(issue_date, 'DD/MM/YYYY'), 
        to_char(due_date, 'DD/MM/YYYY'), to_char(pay_day, 'DD/MM/YYYY') FROM bills_to_pay
ERROR - 2018-04-09 22:49:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;(&quot;
LINE 1: SELECT  issue_date to_char(issue_date, 'DD/MM/YYYY'), 
                                  ^ /opt/lampp/htdocs/SGMPE/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-04-09 22:49:24 --> Query error: ERROR:  syntax error at or near "("
LINE 1: SELECT  issue_date to_char(issue_date, 'DD/MM/YYYY'), 
                                  ^ - Invalid query: SELECT  issue_date to_char(issue_date, 'DD/MM/YYYY'), 
        to_char(due_date, 'DD/MM/YYYY'), to_char(pay_day, 'DD/MM/YYYY') FROM bills_to_pay
ERROR - 2018-04-09 22:49:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;(&quot;
LINE 1: SELECT  issue_date to_char(issue_date, 'DD/MM/YYYY'), 
                                  ^ /opt/lampp/htdocs/SGMPE/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-04-09 22:49:27 --> Query error: ERROR:  syntax error at or near "("
LINE 1: SELECT  issue_date to_char(issue_date, 'DD/MM/YYYY'), 
                                  ^ - Invalid query: SELECT  issue_date to_char(issue_date, 'DD/MM/YYYY'), 
        to_char(due_date, 'DD/MM/YYYY'), to_char(pay_day, 'DD/MM/YYYY') FROM bills_to_pay
ERROR - 2018-04-09 22:49:52 --> Severity: Notice --> Undefined property: stdClass::$id /opt/lampp/htdocs/SGMPE/application/controllers/BillsToPay.php 153
ERROR - 2018-04-09 22:49:52 --> Severity: Notice --> Undefined property: stdClass::$supplier_id /opt/lampp/htdocs/SGMPE/application/controllers/BillsToPay.php 154
ERROR - 2018-04-09 22:49:52 --> Severity: Notice --> Undefined property: stdClass::$document_number /opt/lampp/htdocs/SGMPE/application/controllers/BillsToPay.php 155
ERROR - 2018-04-09 22:49:52 --> Severity: Notice --> Undefined property: stdClass::$complementary_information /opt/lampp/htdocs/SGMPE/application/controllers/BillsToPay.php 156
ERROR - 2018-04-09 22:49:52 --> Severity: Notice --> Undefined property: stdClass::$due_date /opt/lampp/htdocs/SGMPE/application/controllers/BillsToPay.php 158
ERROR - 2018-04-09 22:49:52 --> Severity: Notice --> Undefined property: stdClass::$amount /opt/lampp/htdocs/SGMPE/application/controllers/BillsToPay.php 159
ERROR - 2018-04-09 22:49:52 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /opt/lampp/htdocs/SGMPE/application/controllers/BillsToPay.php 160
ERROR - 2018-04-09 22:49:52 --> Severity: Notice --> Undefined property: stdClass::$pay_day /opt/lampp/htdocs/SGMPE/application/controllers/BillsToPay.php 161
ERROR - 2018-04-09 22:49:52 --> Severity: Notice --> Undefined property: stdClass::$bill_to_pay_type_id /opt/lampp/htdocs/SGMPE/application/controllers/BillsToPay.php 162
ERROR - 2018-04-09 22:49:52 --> Severity: Notice --> Undefined property: stdClass::$id /opt/lampp/htdocs/SGMPE/application/controllers/BillsToPay.php 153
ERROR - 2018-04-09 22:49:52 --> Severity: Notice --> Undefined property: stdClass::$supplier_id /opt/lampp/htdocs/SGMPE/application/controllers/BillsToPay.php 154
ERROR - 2018-04-09 22:49:52 --> Severity: Notice --> Undefined property: stdClass::$document_number /opt/lampp/htdocs/SGMPE/application/controllers/BillsToPay.php 155
ERROR - 2018-04-09 22:49:52 --> Severity: Notice --> Undefined property: stdClass::$complementary_information /opt/lampp/htdocs/SGMPE/application/controllers/BillsToPay.php 156
ERROR - 2018-04-09 22:49:52 --> Severity: Notice --> Undefined property: stdClass::$due_date /opt/lampp/htdocs/SGMPE/application/controllers/BillsToPay.php 158
ERROR - 2018-04-09 22:49:52 --> Severity: Notice --> Undefined property: stdClass::$amount /opt/lampp/htdocs/SGMPE/application/controllers/BillsToPay.php 159
ERROR - 2018-04-09 22:49:52 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /opt/lampp/htdocs/SGMPE/application/controllers/BillsToPay.php 160
ERROR - 2018-04-09 22:49:52 --> Severity: Notice --> Undefined property: stdClass::$pay_day /opt/lampp/htdocs/SGMPE/application/controllers/BillsToPay.php 161
ERROR - 2018-04-09 22:49:52 --> Severity: Notice --> Undefined property: stdClass::$bill_to_pay_type_id /opt/lampp/htdocs/SGMPE/application/controllers/BillsToPay.php 162
ERROR - 2018-04-09 22:50:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;to_char&quot;
LINE 1: SELECT  * to_char(issue_date, 'DD/MM/YYYY'), 
                  ^ /opt/lampp/htdocs/SGMPE/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-04-09 22:50:26 --> Query error: ERROR:  syntax error at or near "to_char"
LINE 1: SELECT  * to_char(issue_date, 'DD/MM/YYYY'), 
                  ^ - Invalid query: SELECT  * to_char(issue_date, 'DD/MM/YYYY'), 
        to_char(due_date, 'DD/MM/YYYY'), to_char(pay_day, 'DD/MM/YYYY') FROM bills_to_pay
ERROR - 2018-04-09 22:54:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;bills_to_pay_document_number_key&quot;
DETAIL:  Key (document_number)=(2) already exists. /opt/lampp/htdocs/SGMPE/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-04-09 22:54:47 --> Query error: ERROR:  duplicate key value violates unique constraint "bills_to_pay_document_number_key"
DETAIL:  Key (document_number)=(2) already exists. - Invalid query: INSERT INTO "bills_to_pay" ("supplier_id", "document_number", "complementary_information", "issue_date", "due_date", "amount", "paid_amount", "pay_day", "bill_to_pay_type_id") VALUES ('18', '2', '                            teste                                                ', '09/04/2018', '10/04/2018', '640.05', '640.05', '10/04/2018', '2')
