<?php
$to="9198407395958246@airtelchennai.com";
$message="hello bhavana";
 $result = @mail( $to, '', $message );
  print 'Message was sent to ' . $to;
 ?>
