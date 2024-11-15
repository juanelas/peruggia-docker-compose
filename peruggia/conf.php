<?php

/*
 * This file is part of Peruggia.
 *
 * Peruggia is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 3 of the License, or (at your option) any later
 * version.
 *
 * Peruggia is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Peruggia; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
 */

//MySQL
$mysql_host = getenv("DB_HOST")	?: "mysql";
$mysql_user = getenv("DB_USER")	?: "peruggiauser";
$mysql_pass = getenv("DB_PASS")	?: "peruggiapass";
$mysql_db = getenv("DB_NAME") ?: "peruggiadb";

//General
$title = 		"Gallery";
$version = 		"2.0";
$peruggia_root = getenv("EXTERNAL_URL") ?: "http://localhost/";
error_reporting(1);	// You may or may not want to see these, your choice

//Vulnerabilities (true or false)
//NOTE: disabling some vulnerabilities may render others useless
$guard_pers_xss = 	true; //Block persistent cross site scripting
$guard_refl_xss = 	true; //Block reflected cross site scripting
//$guard_csrf = 	true; //Block cross site request forgery //Blocker not yet implemented
//$guard_sesfix = 	true; //Block session fixation //Blocker not yet implemented
$guard_sqli = 		false; //Block SQL injection
$guard_auth_sqli = 	true; //Block authentication bypass SQL injection
$guard_lfi = 		true; //Block local file inclusions
$guard_rfi = 		true; //Block remote file inclusions
$guard_fuv = 		true; //Block file upload vulnerabilities
$fu_types = array(	//Allowed file upload types (mime types)
	"image/gif",
	"image/jpeg",
	"image/pjpeg",
	"image/png",
);

?>