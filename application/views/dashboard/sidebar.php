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
  <style>
    .power-switch {
      --color-invert: blue;
      --width: 150px;
      --height: 150px;
      position: relative;
      display: flex;
      justify-content: center;
      align-items: center;
      width: var(--width);
      height: var(--height);
    }

    .power-switch .button {
      width: 100%;
      height: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      position: relative;
    }

    .power-switch .button:after {
      content: "";
      width: 100%;
      height: 100%;
      position: absolute;
      background: radial-gradient(circle closest-side, var(--color-invert), transparent);
      filter: blur(20px);
      opacity: 0;
      transition: opacity 1s ease, transform 1s ease;
      transform: perspective(1px) translateZ(0);
      backface-visibility: hidden;
    }

    .power-switch .button .power-on,
    .power-switch .button .power-off {
      height: 100%;
      width: 100%;
      position: absolute;
      z-index: 1;
      fill: none;
      stroke: var(--color-invert);
      stroke-width: 8px;
      stroke-linecap: round;
      stroke-linejoin: round;
    }

    .power-switch .button .power-on .line,
    .power-switch .button .power-off .line {
      opacity: 0.2;
    }

    .power-switch .button .power-on .circle,
    .power-switch .button .power-off .circle {
      opacity: 0.2;
      transform: rotate(-58deg);
      transform-origin: center 80px;
      stroke-dasharray: 220;
      stroke-dashoffset: 40;
    }

    .power-switch .button .power-on {
      filter: drop-shadow(0px 0px 6px rgba(255, 255, 255, 0.8));
    }

    .power-switch .button .power-on .line {
      opacity: 0;
      transition: opacity 0.3s ease 1s;
    }

    .power-switch .button .power-on .circle {
      opacity: 1;
      stroke-dashoffset: 220;
      transition: transform 0s ease, stroke-dashoffset 1s ease 0s;
    }

    .power-switch input {
      position: absolute;
      height: 100%;
      width: 100%;
      z-index: 2;
      cursor: pointer;
      opacity: 0;
    }

    .power-switch input:checked+.button:after {
      opacity: 0.15;
      transform: scale(2) perspective(1px) translateZ(0);
      backface-visibility: hidden;
      transition: opacity 0.5s ease, transform 0.5s ease;
    }

    .power-switch input:checked+.button .power-on,
    .power-switch input:checked+.button .power-off {
      animation: click-animation 0.3s ease forwards;
      transform: scale(1);
    }

    .power-switch input:checked+.button .power-on .line,
    .power-switch input:checked+.button .power-off .line {
      animation: line-animation 0.8s ease-in forwards;
    }

    .power-switch input:checked+.button .power-on .circle,
    .power-switch input:checked+.button .power-off .circle {
      transform: rotate(302deg);
    }

    .power-switch input:checked+.button .power-on .line {
      opacity: 1;
      transition: opacity 0.05s ease-in 0.55s;
    }

    .power-switch input:checked+.button .power-on .circle {
      transform: rotate(302deg);
      stroke-dashoffset: 40;
      transition: transform 0.4s ease 0.2s, stroke-dashoffset 0.4s ease 0.2s;
    }

    @keyframes line-animation {
      0% {
        transform: translateY(0);
      }

      10% {
        transform: translateY(10px);
      }

      40% {
        transform: translateY(-25px);
      }

      60% {
        transform: translateY(-25px);
      }

      85% {
        transform: translateY(10px);
      }

      100% {
        transform: translateY(0px);
      }
    }

    @keyframes click-animation {
      0% {
        transform: scale(1);
      }

      50% {
        transform: scale(0.9);
      }

      100% {
        transform: scale(1);
      }
    }
  </style>
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
        <li class="nav-item <?= ($title == "Dashboard") ? 'active' : '' ?>">
          <a href="<?= base_url('user') ?>">
            <span class="icon">
              <svg width="22" height="22" viewBox="0 0 22 22">
                <path d="M17.4167 4.58333V6.41667H13.75V4.58333H17.4167ZM8.25 4.58333V10.0833H4.58333V4.58333H8.25ZM17.4167 11.9167V17.4167H13.75V11.9167H17.4167ZM8.25 15.5833V17.4167H4.58333V15.5833H8.25ZM19.25 2.75H11.9167V8.25H19.25V2.75ZM10.0833 2.75H2.75V11.9167H10.0833V2.75ZM19.25 10.0833H11.9167V19.25H19.25V10.0833ZM10.0833 13.75H2.75V19.25H10.0833V13.75Z" />
              </svg>
            </span>
            <span class="text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item <?= ($title == "Tracker") ? 'active' : '' ?>">
          <a href="<?= base_url('user/tracker') ?>">
            <span class="icon">
              <i class="lni lni-map-marker fw-bold"></i>
            </span>
            <span class="text">Tracker</span>
          </a>
        </li>
        <li class="nav-item <?= ($title == "Power") ? 'active' : '' ?>">
          <a href="<?= base_url('user/power') ?>">
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