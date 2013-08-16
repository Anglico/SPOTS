/*
 File: SP_Authorization.sql
 Author: Koro
 Date created: 08/July/2012
 Changelog: 1.01: Changed from Webmaster and Founder to Admin and Mod.
 					Also changed authorization method; check roles, not Config table
 			1.02: Removed old references to Config table
*/

--Authentication

--is_admin

DELIMITER // 
DROP FUNCTION IF EXISTS is_admin //
CREATE FUNCTION is_admin(userID smallint unsigned) RETURNS boolean
BEGIN 
DECLARE suUserRole character;
DECLARE boolResult boolean;
SELECT su.userRole INTO suUserRole FROM ScanUser AS su WHERE su.userID = userID;
SELECT suUserRole = 'A' INTO boolResult;
RETURN boolResult;
END // 
DELIMITER ;

--is_mod
--or is_webmaster, however the implementation is decided

DELIMITER // 
DROP FUNCTION IF EXISTS is_mod //
CREATE FUNCTION is_mod(userID smallint unsigned) RETURNS boolean
BEGIN 
DECLARE suUserRole character;
DECLARE boolResult boolean;
SELECT su.userRole INTO suUserRole FROM ScanUser AS su WHERE su.userID = userID;
SELECT suUserRole = 'M' INTO boolResult;
RETURN boolResult;
END // 
DELIMITER ;