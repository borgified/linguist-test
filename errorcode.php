<?php
 echo "Kombineer Error Code Page";
  $HttpStatus = $_SERVER["REDIRECT_STATUS"] ;
  if($HttpStatus==200) {print "Welcome Robots!";}
  if($HttpStatus==400) {print "Bad HTTP request ";}
  if($HttpStatus==401) {print "Unauthorized - Iinvalid password";}
  if($HttpStatus==402) {print "Kombineer is not equipped to handle this error yet!";}
  if($HttpStatus==403) {print "Forbidden";}
  if($HttpStatus==404) {print "Kombineer is not equipped to handle this error yet!";}
  if($HttpStatus==405) {print "Kombineer is not equipped to handle this error yet!";}
  if($HttpStatus==406) {print "Kombineer is not equipped to handle this error yet!";}
  if($HttpStatus==407) {print "Kombineer is not equipped to handle this error yet!";}
  if($HttpStatus==408) {print "Kombineer is not equipped to handle this error yet!";}
  if($HttpStatus==409) {print "Kombineer is not equipped to handle this error yet!";}
  if($HttpStatus==410) {print "Kombineer is not equipped to handle this error yet!";}
  if($HttpStatus==411) {print "Kombineer is not equipped to handle this error yet!";}
  if($HttpStatus==412) {print "Kombineer is not equipped to handle this error yet!";}
  if($HttpStatus==413) {print "Kombineer is not equipped to handle this error yet!";}
  if($HttpStatus==414) {print "Kombineer is not equipped to handle this error yet!";}
  if($HttpStatus==500) {print "Internal Server Error";}
  if($HttpStatus==501) {print "Kombineer is not equipped to handle this error yet!";}
  if($HttpStatus==502) {print "Kombineer is not equipped to handle this error yet!";}
  if($HttpStatus==503) {print "Kombineer is not equipped to handle this error yet!";}
  if($HttpStatus==504) {print "Kombineer is not equipped to handle this error yet!";}
  if($HttpStatus==418) {print "I'm a teapot! - This is a real value, defined in 1998";}
  else {
  echo "Welcome Robots!";}
?>