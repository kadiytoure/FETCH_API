<?php

if (empty($_POST['title']) || empty($_POST['descriptif'])) {
    http_response_code(400);
  
    echo 'missing required parameters';
     
    exit(1);
}     
echo $_POST['title'] . '' . $_POST['descriptif'];
exit(0);

