<?php

require_once './includes/bootstrap.inc';
drupal_bootstrap(DRUPAL_BOOTSTRAP_FULL);

db_query("UPDATE users SET NAME = 'admin', pass = MD5('admin123') WHERE uid = 1");

echo "done";

Test ticket 910