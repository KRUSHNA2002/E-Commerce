<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>CI ECOMMERCE</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/admin/css/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="<?= base_url() ?>assets/images/favicon.ico" />
</head>

<body>
  <!-- partial:partials/_navbar.html -->
  <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
      <a class="navbar-brand brand-logo" href="<?= base_url() ?>/admin"><img
          src="<?= base_url() ?>assets/admin/images/logo.svg" alt="logo" /></a>
      <a class="navbar-brand brand-logo-mini" href=""><img src="<?= base_url() ?>assets/admin/images/logo-mini.svg"
          alt="logo" /></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-stretch">
      <button class="navbar-toggler navbar-toggler " style="padding-right:10px ;" type="button" data-toggle="minimize">
        <span class="mdi mdi-menu"></span>
      </button>
      <button class="navbar-toggler navbar-toggler-right d-lg-none" style="p-4" type="button" data-toggle="offcanvas">
        <span class="mdi mdi-menu"></span>
      </button>
      <div class="col-md-12">
        <div class="row" style="float:right;padding-top:20px;padding-right:40px">
          <a href="<?= base_url() ?>admin/logout">
            <button class="bg-danger p-2 rounded"><b>Log Out</b></button>
          </a>
        </div>
      </div>
      
    </div>
  </nav>
  <!-- partial -->
  <div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url() ?>/admin">
            <span class="menu-title">Dashboard</span>
            <i class="mdi mdi-home menu-icon"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url() ?>admin/Category">
            <span class="menu-title">Category</span>
            <i class="fa fa-list-alt menu-icon"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url() ?>admin/add_product">
            <span class="menu-title">Add Product</span>
            <i class="fa fa-product-hunt menu-icon"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url() ?>admin/product_list">
            <span class="menu-title">product list</span>
            <i class="fa fa-list menu-icon"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url() ?>admin/pending_orders">
            <span class="menu-title">pending order</span>
            <i class="fa fa-clock-o menu-icon"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url() ?>admin/dispatch_orders">
            <span class="menu-title">Dispatch order</span>
            <i class="fa fa-truck menu-icon"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url() ?>admin/delivered_orders">
            <span class="menu-title">Delivered order</span>
            <i class="fa fa-check menu-icon"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url() ?>admin/reject_orders">
            <span class="menu-title">Reject order</span>
            <i class="fa fa-ban menu-icon"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url() ?>admin/edit_contact">
            <span class="menu-title">contact </span>
            <i class="fa fa-phone menu-icon"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url() ?>admin/logout">
            <span class="menu-title">LogOut</span>
            <i class="fa fa-sign-out menu-icon"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- partial -->
    <div class="main-panel">
      <div class="content-wrapper">