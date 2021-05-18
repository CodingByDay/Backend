<div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2021 Emmares<span class="d-none d-sm-inline-block">, All rights Reserved</span></span></p>
    </footer>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="<?= view_templates ?>emmares/app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="<?= view_templates ?>emmares/app-assets/vendors/js/charts/apexcharts.min.js"></script>
    <!--<script src="<?= view_templates ?>emmares/app-assets/vendors/js/extensions/toastr.min.js"></script>-->
    <script src="<?= view_templates ?>emmares/app-assets/vendors/js/extensions/moment.min.js"></script>
    <script src="<?= view_templates ?>emmares/app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
    <script src="<?= view_templates ?>emmares/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="<?= view_templates ?>emmares/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
    <script src="<?= view_templates ?>emmares/app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js"></script>
    <script src="<?= view_templates ?>emmares/app-assets/vendors/js/tables/datatable/responsive.bootstrap.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="<?= view_templates ?>emmares/app-assets/js/core/app-menu.js"></script>
    <script src="<?= view_templates ?>emmares/app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="<?= view_templates ?>emmares/app-assets/js/scripts/pages/dashboard-analytics.js"></script>
    <script src="<?= view_templates ?>emmares/app-assets/js/scripts/pages/app-invoice-list.js"></script>
    <!-- END: Page JS-->

    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
</body>
<!-- END: Body-->

</html>