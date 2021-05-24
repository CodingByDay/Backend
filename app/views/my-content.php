<!-- BEGIN: Content-->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="<?= view_templates ?>emmares/app-assets/js/scripts/extensions/sweetalert.min.js"></script>
<!-- Vendor files -->
<script src="app\view_templates\emmares\app-assets\js\scripts\extensions\sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="sweetalert2.min.css">

<div class="app-content content ">
   <div class="content-overlay"></div>
   <div class="header-navbar-shadow"></div>
   <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">
         <!-- Dashboard Analytics Start -->
         <section id="dashboard-analytics">
            <div class="row match-height">
               <!-- Greetings Card starts -->
              
            </div>
           
            <div class="row match-height">
               <!-- Timeline Card -->
               <div class="col-lg-4 col-12">
                  <div class="card card-user-timeline">
                     <div class="card-header">
                        <div class="d-flex align-items-center">
                           <i data-feather="" class="user-timeline-title-icon"></i>
                           <h4 class="card-title">Confirm your sending email addressess</h4>
                        </div>
                     </div>
                     <div class="card-body">
<form  method="post" action="index.php?page=main&action=useremails">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
     <input type="email" class="form-control" id="exampleInputEmail1" name="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">Confirm your sent from email address to manage your content and accesss analytics.</small>
   </div>
  <input type="hidden" name="<?= ASCsrf::getTokenName() ?>" value="<?= ASCsrf::getToken() ?>">
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php
	if(isset($_SESSION['success']))
	{
      echo '<script type="text/javascript">';
      echo 'setTimeout(function () { swal("Uspešno poslan email!","Vaš email je poslan!","success");';
      echo '}, 1000);</script>';
	?>
	<?php
	}
	unset($_SESSION['success']);
	if(isset($_SESSION['error']))
	{
      echo '<script type="text/javascript">';
      echo 'setTimeout(function () { swal("Prišlo je do napake","Poskusite spet!","success");';
      echo '}, 1000);</script>';
	}
	unset($_SESSION['error']);
?>

                     </div>
                  </div>
               </div>
               <!--/ Timeline Card -->
               <!-- Sales Stats Chart Card starts -->
               <div class="col-lg-4 col-md-6 col-12">
                  <div class="card">
                     <div class="card-header d-flex justify-content-between align-items-start pb-1">
                        <div>
                           <h4 class="card-title mb-25">Your email addresses</h4>
                           <p class="card-text">Confirmed and pending</p>
                        </div>
                        
                     </div>
                     <div class="card-body">
                      
                       
                       
                     </div>
                  </div>
               </div>
               <!-- Sales Stats Chart Card ends -->
               <!-- App Design Card -->
               <div class="col-lg-4 col-md-6 col-12">
                  <div class="card card-app-design">
                     <div class="card-body">
                        <div class="badge badge-light-primary">03 Sep, 20</div>
                        <h4 class="card-title mt-1 mb-75 pt-25">App design</h4>
                        <p class="card-text font-small-2 mb-2">
                           You can Find Only Post and Quotes Related to IOS like ipad app design, iphone app design
                        </p>
                        <div class="design-group mb-2 pt-50">
                           <h6 class="section-label">Team</h6>
                           <div class="badge badge-light-warning mr-1">Figma</div>
                           <div class="badge badge-light-primary">Wireframe</div>
                        </div>
                        <div class="design-group pt-25">
                           <h6 class="section-label">Members</h6>
                           <div class="avatar">
                              <img src="<?= view_templates ?>emmares/app-assets/images/portrait/small/avatar-s-9.jpg" width="34" height="34" alt="Avatar" />
                           </div>
                           <div class="avatar bg-light-danger">
                              <div class="avatar-content">PI</div>
                           </div>
                           <div class="avatar">
                              <img src="<?= view_templates ?>emmares/app-assets/images/portrait/small/avatar-s-14.jpg" width="34" height="34" alt="Avatar" />
                           </div>
                           <div class="avatar">
                              <img src="<?= view_templates ?>emmares/app-assets/images/portrait/small/avatar-s-7.jpg" width="34" height="34" alt="Avatar" />
                           </div>
                           <div class="avatar bg-light-secondary">
                              <div class="avatar-content">AL</div>
                           </div>
                        </div>
                        <div class="design-planning-wrapper mb-2 py-75">
                           <div class="design-planning">
                              <p class="card-text mb-25">Due Date</p>
                              <h6 class="mb-0">12 Apr, 21</h6>
                           </div>
                           <div class="design-planning">
                              <p class="card-text mb-25">Budget</p>
                              <h6 class="mb-0">$49251.91</h6>
                           </div>
                           <div class="design-planning">
                              <p class="card-text mb-25">Cost</p>
                              <h6 class="mb-0">$840.99</h6>
                           </div>
                        </div>
                        <button type="button" class="btn btn-primary btn-block">Join Team</button>
                     </div>
                  </div>
               </div>
               <!--/ App Design Card -->
            </div>
            <!-- List DataTable -->
            
            <!--/ List DataTable -->
         </section>
         <!-- Dashboard Analytics end -->
      </div>
   </div>
</div>
<!-- END: Content-->
<script src="assets/js/app/sweetalert.min.js"></script>
