<!DOCTYPE html><html lang="en">

@include('templates.partials._head')
<body>
<!-- Begin page -->
<div id="wrapper">
	<!-- Top Bar Start -->
	<div class="topbar">
		@include('templates.partials._header')
	</div>
	<!-- Top Bar End -->
	<!-- ========== Left Sidebar Start ========== -->
	<div class="left side-menu">
		@include('templates.partials._sidebar')
    </div>
	<!-- Left Sidebar End -->
	<!-- ============================================================== -->
	<!-- Start right Content here -->
	<!-- ============================================================== -->
	<div class="content-page">
		<!-- Start content -->
		<div class="content">

			@yield('content')
            
        </div>
		<!-- content -->
		<footer class="footer">© 2019 Veltrix <span class="d-none d-sm-inline-block">- Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</span>.</footer>
	</div>
	<!-- ============================================================== -->
	<!-- End Right content here -->
	<!-- ============================================================== --></div>
<!-- END wrapper -->
<!-- jQuery  -->
@include('templates.partials._script')
</body>
</html>