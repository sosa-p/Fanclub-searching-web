<?php

  function haha($number){
	 $token=hash('sha512',$number);
	 $token=(string)$token;
	 $result=hexdec(substr($token,0,1));
	 echo $number.":".(string)$result."<br>";
	 }
 echo "----성별-----"."<br>";
 haha(10);
 haha(20);
 echo "----기수-----"."<br>";
 haha(11);
 haha(12);
 haha(13);
 haha(14);
 echo "----개인번호----"."<br>";
 haha(23);
 haha(85);
 haha(77);
 haha(38);
 haha(59);
 haha(49);
 haha(55);
 haha(44);
 haha(60);
haha(95);
haha(30);
haha(83);
haha(53);
haha(86);
haha(96);
haha(56);
 haha(65);
 haha(52);
 haha(47);
 haha(34);
 haha(34);
 haha(22);
 haha(78);
 haha(56);
 haha(32);
 haha(89);
 haha(68);
 haha(74);
 haha(57);
 haha(87);
 haha(31);
 haha(99);
 haha(45);
 haha(64);
 haha(00);
 echo "----생일----"."<br>";
  for($i=1;$i<13;$i++)
	  haha($i);
 ?>