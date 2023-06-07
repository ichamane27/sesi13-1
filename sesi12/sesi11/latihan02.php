<?php
  $dta[0]["NIM"]= "1122334455";
  $dta[0]["NAMA"]= "iccha mane";
  $dta[0]["JURUSAN"]= "TIPAR";
  $dta[0]["ALAMAT"]= "sesetan";
  $dta[0]["NO_TLPN"]= "081345267666";
  $dta[0]["Hobi"]= "rebahan";
  $dta[0]["JKEL"]= "P";

  $dta[1]["NIM"]= "3334445556";
  $dta[1]["NAMA"]= "putra embun";
  $dta[1]["JURUSAN"]= "TIKAB";
  $dta[1]["ALAMAT"]= "panjer";
  $dta[1]["NO_TLPN"]= "087908000657";
  $dta[1]["Hobi"]= "halu";
  $dta[1]["JKEL"]= "L";

  $dta[2]["NIM"]= "1111111111";
  $dta[2]["NAMA"]= "agung buditama";
  $dta[2]["JURUSAN"]= "SI";
  $dta[2]["ALAMAT"]= "badung";
  $dta[2]["NO_TLPN"]= "123456345900";
  $dta[2]["Hobi"]= "basket";
  $dta[2]["JKEL"]= "L";

  $dta[3]["NIM"]= "2222222222";
  $dta[3]["NAMA"]= "budi luhur";
  $dta[3]["JURUSAN"]= "TIPAR";
  $dta[3]["ALAMAT"]= "ubud";
  $dta[3]["NO_TLPN"]= "083425167111";
  $dta[3]["Hobi"]= "renang";
  $dta[3]["JKEL"]= "L";

  $dta[4]["NIM"]= "4444444444";
  $dta[4]["NAMA"]= "audi cintya";
  $dta[4]["JURUSAN"]= "TIPAR";
  $dta[4]["ALAMAT"]= "panjer";
  $dta[4]["NO_TLPN"]= "087657000234";
  $dta[4]["Hobi"]= "masak";
  $dta[4]["JKEL"]= "P";




  header("content-type: application/json; charset=utf-8");
  echo json_encode($dta);
  