<?php

require_once './includes/bootstrap.inc';
drupal_bootstrap(DRUPAL_BOOTSTRAP_FULL);

db_query("UPDATE users SET NAME = 'admin', pass = MD5('admin123') WHERE uid = 1");

echo "done";


 


911 test

 
Test ticket 910 910 
 
Test ticket 910


912 testing


Test ticket 910 910 

 
911 testing is completed!!

changes 980 

