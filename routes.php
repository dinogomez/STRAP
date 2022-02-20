<?php

require_once("{$_SERVER['DOCUMENT_ROOT']}/router.php");

// GET
get('/', 'views/index.php');
get('/login', 'views/login.php');
get('/register', 'views/register.php');
get('/dashboard', 'views/dashboard.php');
get('/about', 'views/about.php');
get('/landing', 'views/landing.php');
get('/user-profile', 'views/user-profile.php');

get('/sample', 'views/sample.php');
get('/about', 'views/about.php');
get('/signin', 'views/signin.php');
get('/signup', 'views/signup.php');


// POST
post('/process-login.php','server/process-login.php');
post('/process-registration.php', 'server/process-registration.php');
post('/process-user-profile.php' , 'server/process-user-profile.php');
post('/process-logout.php' , 'server/process-logout.php');

// ANY
any('/404','views/404.php');

