<?php
  $dta["NIM"]= "1122334455";
  $dta["NAMA"]= "iccha mane";
  $dta["JURUSAN"]= "TIPAR";
  $dta["ALAMAT"]= "sesetan";
  $dta["NO_TLPN"]= "081345267666";
  $dta["Hobi"]= "rebahan";
  $dta["JKEL"]= "P";



  header("content-type: application/json; charset=utf-8");
  echo json_encode($dta);
  