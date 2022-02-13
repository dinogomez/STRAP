<?php

require_once("{$_SERVER['DOCUMENT_ROOT']}/router.php");

// GET
get('/', 'views/index.php');
get('/login', 'views/login.php');
get('/register', 'views/register.php');
get('/dashboard', 'views/dashboard.php');
get('/about', 'views/about.php');
get('/landing', 'views/landing.php');

get('/sample', 'views/sample.php');
get('/about', 'views/about.php');
get('/signin', 'views/signin.php');
get('/signup', 'views/signup.php');


// POST
post('/process-login','server/process-login.php');
post('/process-registration', 'server/process-registration.php');
post('/process-logout' , 'server/process-logout.php');

// ANY
any('/404','views/404.php');

