<?php

  require_once './includes/bootstrap.inc';
  drupal_bootstrap(DRUPAL_BOOTSTRAP_FULL);

  /*	http://dev.fivestaralliance.com/get_bid.php?bid=66321&iam=Kama.x.2021	*/

  if($_GET['iam'] == 'Kama.x.2021') {
    $file_path = file_create_path('xmldata/' . $_GET['bid']);

    $dh = opendir($file_path);
    while (false !== ($filename = readdir($dh))) {
      if ( ! ( $filename == '.' || $filename == '..' ) ) {
        echo "$filename\n";
      }
    }
  }

  else {
    print "<h1>Invalid request</h1>";
  }

