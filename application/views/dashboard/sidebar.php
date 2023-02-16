<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="<?= base_url('assets-admin/') ?>images/favicon.svg" type="image/x-icon" />
  <title>PlainAdmin Demo | Bootstrap 5 Admin Template</title>

  <!-- ========== All CSS files linkup ========= -->
  <link rel="stylesheet" href="<?= base_url('assets-admin/') ?>css/bootstrap.min.css" />
  <link rel="stylesheet" href="<?= base_url('assets-admin/') ?>css/lineicons.css" />
  <link rel="stylesheet" href="<?= base_url('assets-admin/') ?>css/materialdesignicons.min.css" />
  <link rel="stylesheet" href="<?= base_url('assets-admin/') ?>css/fullcalendar.css" />
  <link rel="stylesheet" href="<?= base_url('assets-admin/') ?>css/fullcalendar.css" />
  <link rel="stylesheet" href="<?= base_url('assets-admin/') ?>css/main.css" />
</head>

<body>
  <!-- ======== sidebar-nav start =========== -->
  <aside class="sidebar-nav-wrapper">
    <div class="navbar-logo">
      <a href="index.html">
        <img src="<?= base_url('assets/') ?>img/logo-light.webp" width="70%" alt="logo" />
      </a>
    </div>
    <nav class="sidebar-nav">
      <ul>
        <li class="nav-item ">
          <a href="#0">
            <span class="icon">
              <svg width="22" height="22" viewBox="0 0 22 22">
                <path d="M17.4167 4.58333V6.41667H13.75V4.58333H17.4167ZM8.25 4.58333V10.0833H4.58333V4.58333H8.25ZM17.4167 11.9167V17.4167H13.75V11.9167H17.4167ZM8.25 15.5833V17.4167H4.58333V15.5833H8.25ZM19.25 2.75H11.9167V8.25H19.25V2.75ZM10.0833 2.75H2.75V11.9167H10.0833V2.75ZM19.25 10.0833H11.9167V19.25H19.25V10.0833ZM10.0833 13.75H2.75V19.25H10.0833V13.75Z" />
              </svg>
            </span>
            <span class="text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="invoice.html">
            <span class="icon">
              <i class="lni lni-map-marker fw-bold"></i>
            </span>
            <span class="text">Tracker</span>
          </a>
        </li>
        <li class="nav-item ">
          <a href="#0">
            <span class="icon">
              <i class="lni lni-power-switch fw-bold"></i>
            </span>
            <span class="text">Power</span>
          </a>
        </li>
        <span class="divider">
          <hr />
        </span>

        <li class="nav-item">
          <a href="notification.html">
            <span class="icon">
              <i class="lni lni-exit fw-bold text-danger"></i>
            </span>
            <span class="text">Logout</span>
          </a>
        </li>
      </ul>
    </nav>
  </aside>
  <div class="overlay"></div>
  <!-- ======== sidebar-nav end =========== -->