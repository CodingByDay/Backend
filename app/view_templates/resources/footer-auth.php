    <!-- BEGIN: Vendor JS-->
    <script src="<?= view_templates ?>emmares/app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!--<script src="<?= view_templates ?>emmares/app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="<?= view_templates ?>emmares/app-assets/js/core/app-menu.js"></script>
    <script src="<?= view_templates ?>emmares/app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="<?= auth_assets ?>js/vendor/sha512.js"></script>
    <script src="<?= auth_assets ?>js/vendor/jquery.min.js"></script>
    <script src="<?= auth_assets ?>js/vendor/popper.min.js"></script>
    <script src="<?= auth_assets ?>js/vendor/bootstrap.min.js"></script>
    <script src="<?= auth_assets ?>js/vendor/jquery-validate/jquery.validate.min.js"></script>
    <script src="<?= auth_assets ?>js/app/bootstrap.php"></script>
    <script src="<?= auth_assets ?>js/app/common.js"></script>
    <?php if (ASLang::getLanguage() != DEFAULT_LANGUAGE) : ?>
        <script src="<?= crmpublicpath ?>assets/js/vendor/jquery-validate/localization/messages_<?= ASLang::getLanguage() ?>.js"></script>
    <?php endif; ?>
    
    <script type="text/javascript" src="<?= auth_assets ?>js/app/login.js"></script>
    <script type="text/javascript" src="<?= auth_assets ?>js/app/passwordreset.js"></script>
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
    <!-- END: Page JS-->
</body>
<!-- END: Body-->

</html>