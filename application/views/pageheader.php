<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
    <title>Property Management System</title>

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.14.0/css/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.14.0/css/regular.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.14.0/css/brands.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.14.0/css/solid.min.css">
    <!-- include fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600&display=swap">
    <!-- ace.css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>dist/css/ace.min.css">
    <!-- favicon -->
    <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/favicon.png">

    <style>
      .piechart-legends ul {
        list-style: none;
        margin-left: 1.5rem;
        padding-left: 0;
      }

      .piechart-legends li {
        margin-bottom: 0.25rem;
        white-space: nowrap;
      }

      .piechart-legends span {
        display: inline-block;
        vertical-align: middle;
        border-radius: 1rem;
        width: 0.5rem;
        height: 0.5rem;
        margin-right: 0.5rem;
      }

      .piechart-legends-info li {
        margin-bottom: 0.25rem;
        white-space: nowrap;
      }


      .rtl .piechart-legends ul {
        list-style: none;
        margin-left: 0;
        margin-right: 1.5rem;
        padding-right: 0;
      }

      .rtl .piechart-legends span {
        margin-left: 0.5rem;
        margin-right: 0;
      }
    </style>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>dist/css/ace-themes.min.css">

  </head>