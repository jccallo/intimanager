<template>
	<!-- application -->
	<div class="hold-transition sidebar-mini">

		<!-- Site wrapper -->
		<div class="wrapper">

            <!-- Preloader -->
            <div class="preloader flex-column justify-content-center align-items-center">
                <div class="spinner-border text-dark" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>

			<!-- Navbar -->
			<Navbar></Navbar>
			<!-- /.navbar -->

			<!-- Main Sidebar Container -->
			<Sidebar></Sidebar>
			<!-- /.Main Sidebar Container -->

			<!-- Content Wrapper. Contains page content -->
			<router-view></router-view>
			<!-- /.content-wrapper -->

			<!-- Footer -->
			<Footer></Footer>
			<!-- ./footer -->

			<!-- Control Sidebar -->
			<aside class="control-sidebar control-sidebar-dark">
				<!-- Control sidebar content goes here -->
				Control sidebar content goes here
			</aside>
			<!-- /.control-sidebar -->

		</div>
		<!-- ./wrapper -->
	</div>
	<!-- /.application -->
</template>

<script>
import Navbar from "../shared/Navbar.vue";
import Footer from "../shared/Footer.vue";
import Sidebar from "../shared/Sidebar.vue";
// import Content from "./shared/Content.vue";

export default {
	components: {
		Navbar,
		Sidebar,
		// Content,
		Footer,
	}
}
</script>
