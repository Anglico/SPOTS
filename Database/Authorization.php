<?php
	
/**
*File: Authorization.php
*Author: Koro
*Date created: 06/July/2012
*Changelog: 1.01: Changed methods to reflect changes made to database; webmaster and founder changed to admin and mod
*Purpose: Provides methods for determining user permissions
**/ 

	require_once('Connection.php');

	//Example usage:
	//echo isAdmin(1);
	//echo isMod(1);

	//If the user is the webmaster, returns true
	function isAdmin($userID){

		$procedure_name = 'is_admin';
		$row = executeFunction($procedure_name, $userID);
		return $row[0];
		
	}
	
	//If the user is a mod, returns true
	function isMod($userID){

		$procedure_name = 'is_mod';
		$row = executeFunction($procedure_name, $userID);
		return $row[0];
		
	}
?>