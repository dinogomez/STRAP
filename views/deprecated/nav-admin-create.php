<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <i class="navbar-brand bg-morph text-dark p-2 rounded shadow-lg fa-solid fa-paw"></i>

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
          <a class="nav-link" href="/admin">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/pet">Manage Logs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/pet">Add Device</a>
        </li>
        <?php
        if (isset($_SESSION['role'])) {
          if ($_SESSION['role'] == "super") {
            echo "<li class='nav-item'>
              <a class='nav-link active disabled' href='/admin-add'>Add Admin</a>
            </li>";
          }
        }
        ?>
      </ul>
      <div class="d-flex">
        <form class="d-flex" action="/search" method="GET" method="GET">
          <div class="input-group me-2">
            <input type="text" class="form-control" name="id" placeholder="Enter A Pet's ID 🖋" aria-label="Recipient's username" aria-describedby="basic-addon2">
            <input class="input-group-text btn btn-dark" type="submit" value="Search" id="basic-addon2">
          </div>
        </form>
        <div class="nav-item dropdown">
          <a class="btn btn-outline-dark  dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">👋Hi, <?php echo $_SESSION['username'] ?></a>
          <div class="dropdown-menu">
            <!-- <a class="dropdown-item" href="#"></a> -->
            <a class="dropdown-item" href="/logout"><i class="fa-solid fa-door-open me-2"></i> Logout</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>