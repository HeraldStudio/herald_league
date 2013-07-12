<?php
function htmlencode(&$str)
{
	if(empty($str))
		return;

	if($str=="") 
		return $str;
	$str=trim($str);
	$str=str_ireplace("&","&amp;",$str);
	$str=str_ireplace(" ","&nbsp;",$str);
	$str=str_ireplace(">","&gt;",$str);
	$str=str_ireplace("<","&lt;",$str);
	$str=str_ireplace(chr(32),"&nbsp;",$str);
	$str=str_ireplace(chr(9),"&nbsp;",$str);
	$str=str_ireplace(chr(34),"&",$str);
	$str=str_ireplace(chr(39),"&#39;",$str);
	$str=str_ireplace(chr(13),"<br />",$str);
	$str=str_ireplace("'","&#039;",$str);
	$str=str_ireplace("select","sel&#101;ct",$str);
	$str=str_ireplace("join","jo&#105;n",$str);
	$str=str_ireplace("union","un&#105;on",$str);
	$str=str_ireplace("where","wh&#101;re",$str);
	$str=str_ireplace("insert","ins&#101;rt",$str);
	$str=str_ireplace("delete","del&#101;te",$str);
	$str=str_ireplace("update","up&#100;ate",$str);
	$str=str_ireplace("like","lik&#101;",$str);
	$str=str_ireplace("drop","dro&#112;",$str);
	$str=str_ireplace("create","cr&#101;ate",$str);
	$str=str_ireplace("modify","mod&#105;fy",$str);
	$str=str_ireplace("rename","ren&#097;me",$str);
	$str=str_ireplace("alter","alt&#101;r",$str);
	$str=str_ireplace("cast","ca&#115;",$str);
	return $str;
}
