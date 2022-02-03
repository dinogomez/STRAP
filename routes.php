<?php

require_once("{$_SERVER['DOCUMENT_ROOT']}/router.php");


get('/', 'views/index.php');
get("/login", 'views/login.php');
get('/dashboard', 'views/dashboard.php');
post('/process-login.php','server/process-login.php');

get('/about', 'views/about.php');

any('/404','views/404.php');
