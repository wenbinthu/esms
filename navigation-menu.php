<?php
echo '<nav class="navbar navbar-expand-sm mb-5 bg-white navbar-light shadow">
          <a class="ml-2" href="#">
            <img src="static/images/logo-54x64.png" alt="LLAS logo" width="54" height="64">
          </a>
          <button class="navbar-toggler mr-2" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="navbar-collapse collapse ml-2" id="navbarNav">
            <ul class="navbar-nav mr-2">
              <li>
                <a class="nav-link text-secondary" href="#">Home</a>
              </li>
              <li class="dropdown">
                <a class="dropdown-toggle nav-link text-secondary" href="#" id="departureDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Departure</a>
                <div class="dropdown-menu shadow animated--grow-in" aria-labelledby="departureDropdown">
                  <a class="dropdown-item text-secondary" href="departure-form.php">Departure form</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item text-secondary" href="departure-records.php">Departure records</a>
                </div>
              </li>
              <li class="dropdown">
                <a class="dropdown-toggle nav-link text-secondary" href="#" id="leaveDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Leave</a>
                <div class="dropdown-menu shadow animated--grow-in" aria-labelledby="leaveDropdown">
                  <a class="dropdown-item text-secondary" href="#">Leave form</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item text-secondary" href="#">Leave records</a>
                </div>
              </li>
              <li>
                <a class="nav-link text-secondary" href="#">Users</a>
              </li>
            </ul>
            <ul class="navbar-nav ml-auto">
              <li class="dropdown">
                <a class="dropdown-toggle nav-link text-secondary" href="#" id="usernameDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">John Doe</a>
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="usernameDropdown">
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-1 text-secondary"></i>
                    <span class="text-secondary">Log out</span>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-user fa-sm fa-fw mr-1 text-secondary"></i>
                    <span class="text-secondary">Account</span>
                  </a>
                </div>
              </li>
            </ul>
          </div>
        </nav>
';
?>
