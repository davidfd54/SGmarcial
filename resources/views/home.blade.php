@extends('layouts.app')

@section('content')
<div class="d-flex" id="wrapper">

  <!-- Sidebar -->
  <div class="bg-light border-right" id="sidebar-wrapper">
    <div class="sidebar-heading">Administracion </div>
    <div class="list-group list-group-flush">
      <a href="#" class="list-group-item list-group-item-action bg-light">Dashboar</a>
      <a href="#" class="list-group-item list-group-item-action bg-light">Shortcuts</a>
      <a href="#" class="list-group-item list-group-item-action bg-light">Overview</a>
      <a href="#" class="list-group-item list-group-item-action bg-light">Events</a>
      <a href="#" class="list-group-item list-group-item-action bg-light">Profile</a>
      <a href="#" class="list-group-item list-group-item-action bg-light">Status</a>
    </div>
  </div>
  <!-- /#sidebar-wrapper -->

  <!-- Page Content -->
  <div id="page-content-wrapper">




  <img  id="menu-toggle" height="6%" width="3%" src="{{ asset('img/flecha.png') }}"  >


    <div class="container-fluid">
<!--
aqui va el coontenido
-->


      <h1 class="mt-4">Simple Sidebar</h1>



    </div>
  </div>
  <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Bootstrap core JavaScript -->

<!-- Menu Toggle Script -->
<script>
  $("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
  });
</script>


@endsection
