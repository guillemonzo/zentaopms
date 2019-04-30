<?php
$url = getenv('JAWSDB_URL');
$dbparts = parse_url($url);
$config->installed       = true;
$config->debug           = false;
$config->requestType     = 'PATH_INFO';
$config->timezone        = 'Europe/Madrid';
$config->db->host        = $dbparts['host'];
$config->db->port        = '3306';
$config->db->name        = ltrim($dbparts['path'],'/');
$config->db->user        = $dbparts['user'];
$config->db->password    = $dbparts['pass'];
$config->db->prefix      = 'zt_';
$config->webRoot         = getWebRoot();
$config->default->lang   = 'en';