<?php
SESSION_START();

if(empty($_SESSION['accountid']) || empty($_SESSION['accountname'])){
	echo ("<script language='JavaScript'>
				window.alert('Please Log In')
				window.location.href='../';
				</SCRIPT>");
}
?>