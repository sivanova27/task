<?php
require_once "class/db.php";
require "class/xml.php";
$db = new DB;
$db->connect("localhost", "5432", "xmldatabase", "postgres", "root");