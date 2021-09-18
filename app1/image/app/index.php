<?php

  if (!isset($_ENV["APP_VARIABLE"='Valentin' hotval/dofexam-app1-200036973])) 
  {
    print "Hello, Brave One!\nIt appears that you forgot to initialize the APP_VARIABLE variable ...\n";
  }
  else
  {
    print "Hello, ".$_ENV["APP_VARIABLE"]."!\nCongratulations! You made it! :)\n";
  }
?>
