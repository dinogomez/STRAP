 <!-- NAVBAR -->
 <nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
  <i class="navbar-brand bg-morph text-dark p-2 rounded shadow-lg fa-solid fa-paw"> </i>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active disavled" href="#">Home
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/search">Search</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Links</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="https://github.com/dinogomez/htdocs">Github <i class="fa-brands fa-github fa-lg"></i></a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="/document">Research Document <i class="fa-solid fa-file-lines fa-lg text-success"></i></a>
          </div>
        </li>
      </ul>
      
      <div class="d-flex">
      <?php if(isset($_SESSION['isLoggedIn'])){?>
        <form class="d-flex" action="/search" method="GET">
        <div class="input-group me-2">
        <input type="text" class="form-control" name="id" placeholder="Enter A Pet's ID 🖋" aria-label="Recipient's username" aria-describedby="basic-addon2">
        <input class="input-group-text btn btn-dark" type="submit" value="Search" id="basic-addon2">
      </div>
        <a class="btn btn-outline-dark my-2 my-sm-0 px-5" href="/dashboard">Dashboard</a>
      </form>
        <?php } else {?>
          <form class="d-flex" action="/search" method="GET" method="GET">
          <div class="input-group me-2">
        <input type="text" class="form-control" name="id"  placeholder="Enter A Pet's ID 🖋" aria-label="Recipient's username" aria-describedby="basic-addon2">
        <input class="input-group-text btn btn-outline-dark shadow-lg" type="submit" value="Search" id="basic-addon2">
      </div>        
      <a class="btn btn-dark my-2 my-sm-0 px-5" data-bs-toggle="modal" data-bs-target="#exampleModal">Login</a>
      </form>
      <?php 
        }
      ?>
      </div>
    </div>
  </div>
</nav>  