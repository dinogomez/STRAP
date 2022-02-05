<?php

require_once("{$_SERVER['DOCUMENT_ROOT']}/router.php");

// GET
get('/', 'views/index.php');
get('/login', 'views/login.php');
get('/register', 'views/register.php');
get('/dashboard', 'views/dashboard.php');
get('/about', 'views/about.php');


// POST
post('/process-login.php','server/process-login.php');
post('/process-registration.php', 'server/process-registration.php');

// ANY
any('/404','views/404.php');
