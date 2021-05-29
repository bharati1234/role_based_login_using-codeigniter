<nav class="col-md-2 d-none d-md-block bg-light sidebar">
  <div class="sidebar-sticky">
    <ul class="nav flex-column">
      <?php if ($this->session->userdata('role_level') == 1 && $this->session->userdata('logged_in') == TRUE) { ?>

        <li class="nav-item">
          <a class="nav-link active" href="<?php echo base_url() . 'index.php/Admin/index' ?>">
            <span data-feather="home"></span>
            Dashboard <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url() . 'index.php/Supervisor/supervisor_list' ?>">
            <span data-feather="file"></span>
            Supervisor List
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url() . 'index.php/Employee/employee_list' ?>">
            <span data-feather="shopping-cart"></span>
            Employee List
          </a>
        </li>

      <?php } else if (($this->session->userdata('role_level') == 2 && $this->session->userdata('logged_in') == TRUE)) { ?>


        <li class="nav-item">
          <a class="nav-link active" href="<?php echo base_url() . 'index.php/Supervisor/index' ?>">
            <span data-feather="home"></span>
            Dashboard <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url() . 'index.php/Employee/employee_list' ?>">
            <span data-feather="file"></span>
            Employee List
          </a>
        </li>
      <?php } else { ?>

        <li class="nav-item">
          <a class="nav-link active" href="#">
            <span data-feather="home"></span>
            Dashboard <span class="sr-only">(current)</span>
          </a>
        </li>
      <?php } ?>
      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">


        <!-- <span>Saved reports</span>
      
      
        <a class="d-flex align-items-center text-muted" href="#">
          <span data-feather="plus-circle"></span>
        </a>
      </h6>
      <ul class="nav flex-column mb-2">
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="file-text"></span>
            Current month
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="file-text"></span>
            Last quarter
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="file-text"></span>
            Social engagement
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="file-text"></span>
            Year-end sale
          </a>
        </li>
      </ul> -->
  </div>
</nav>