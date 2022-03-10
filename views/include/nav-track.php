<div class="container">


<div class="mx-5 px-5">
  
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
  <i class="navbar-brand bg-secondary text-primary p-2 rounded shadow-lg fa-solid fa-paw"></i>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="/">Home
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/dashboard">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/pet">Pet</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active disabled" href="/tracker">Tracker</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/search">Search</a>
        </li>
       
      </ul>
      <div class="d-flex">
      <form class="d-flex" action="/search" method="GET" method="GET">
          <div class="input-group me-2">
        <input type="text" class="form-control" name="id"  placeholder="Pet Unique Id" aria-label="Recipient's username" aria-describedby="basic-addon2">
        <input class="input-group-text btn btn-success" type="submit" value="Search" id="basic-addon2">
      </div>        
      </form>
        <div class="nav-item dropdown">
        <a class="btn btn-secondary nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['username']?></a>
      <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Edit Profile</a>
            <a class="dropdown-item" href="#">Request User Report</a>
            <!-- <a class="dropdown-item" href="#"></a> -->
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="/logout">Logout</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>  