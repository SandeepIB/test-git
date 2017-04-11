<?php

require_once './includes/bootstrap.inc';
drupal_bootstrap(DRUPAL_BOOTSTRAP_FULL);

db_query("UPDATE users SET NAME = 'admin', pass = MD5('admin123') WHERE uid = 1");

echo "done";



911 911 test again

911 testing


Test ticket 910

<<<<<<< HEAD
 

=======
>>>>>>> parent of 82b3a11... Merge branch '910' into stage
