<!-- BEGIN: Content-->
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
               <div class="col-lg-6 col-md-12 col-sm-12">
                  <div class="card card-congratulations">
                     <div class="card-body text-center">
                        <img src="<?= view_templates ?>emmares/app-assets/images/elements/decore-left.png" class="congratulations-img-left" alt="card-img-left" />
                        <img src="<?= view_templates ?>emmares/app-assets/images/elements/decore-right.png" class="congratulations-img-right" alt="card-img-right" />
                        <div class="avatar avatar-xl bg-primary shadow">
                           <div class="avatar-content">
                              <i data-feather="award" class="font-large-1"></i>
                           </div>
                        </div>
                        <div class="text-center">
                         
                           <p class="card-text m-auto w-75">
                              You have done <strong>57.6%</strong> more sales today. Check your new badge in your profile.
                           </p>
                        </div>
                     </div>
                  </div>
               </div>

               
               <!-- Orders Chart Card ends -->
            </div>
     
            <div class="row match-height">
               <!-- Timeline Card -->
               <div class="col-lg-4 col-12">
                  <div class="card card-user-timeline">
                     <div class="card-header">
                        <div class="d-flex align-items-center">
                           <i data-feather="list" class="user-timeline-title-icon"></i>
                           <h4 class="card-title">User Timeline</h4>
                        </div>
                     </div>
                     <div class="card-body">
                        <ul class="timeline ml-50">
                           <li class="timeline-item">
                              <span class="timeline-point timeline-point-indicator"></span>
                              <div class="timeline-event">
                                 <h6>12 Invoices have been paid</h6>
                                 <p>Invoices are paid to the company</p>
                                 <div class="media align-items-center">
                                    <img class="mr-1" src="<?= view_templates ?>emmares/app-assets/images/icons/json.png" alt="data.json" height="23" />
                                    <h6 class="media-body mb-0">data.json</h6>
                                 </div>
                              </div>
                           </li>
                           <li class="timeline-item">
                              <span class="timeline-point timeline-point-warning timeline-point-indicator"></span>
                              <div class="timeline-event">
                                 <h6>Client Meeting</h6>
                                 <p>Project meeting with Carl</p>
                                 <div class="media align-items-center">
                                    <div class="avatar mr-50">
                                       <img src="<?= view_templates ?>emmares/app-assets/images/portrait/small/avatar-s-9.jpg" alt="Avatar" width="38" height="38" />
                                    </div>
                                    <div class="media-body">
                                       <h6 class="mb-0">Carl Roy (Client)</h6>
                                       <p class="mb-0">CEO of Infibeam</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="timeline-item">
                              <span class="timeline-point timeline-point-info timeline-point-indicator"></span>
                              <div class="timeline-event">
                                 <h6>Create a new project</h6>
                                 <p>Add files to new design folder</p>
                                 <div class="avatar-group">
                                    <div data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="Billy Hopkins" class="avatar pull-up">
                                       <img src="<?= view_templates ?>emmares/app-assets/images/portrait/small/avatar-s-9.jpg" alt="Avatar" width="33" height="33" />
                                    </div>
                                    <div data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="Amy Carson" class="avatar pull-up">
                                       <img src="<?= view_templates ?>emmares/app-assets/images/portrait/small/avatar-s-6.jpg" alt="Avatar" width="33" height="33" />
                                    </div>
                                    <div data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="Brandon Miles" class="avatar pull-up">
                                       <img src="<?= view_templates ?>emmares/app-assets/images/portrait/small/avatar-s-8.jpg" alt="Avatar" width="33" height="33" />
                                    </div>
                                    <div data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="Daisy Weber" class="avatar pull-up">
                                       <img src="<?= view_templates ?>emmares/app-assets/images/portrait/small/avatar-s-7.jpg" alt="Avatar" width="33" height="33" />
                                    </div>
                                    <div data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="Jenny Looper" class="avatar pull-up">
                                       <img src="<?= view_templates ?>emmares/app-assets/images/portrait/small/avatar-s-20.jpg" alt="Avatar" width="33" height="33" />
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="timeline-item">
                              <span class="timeline-point timeline-point-danger timeline-point-indicator"></span>
                              <div class="timeline-event">
                                 <h6>Update project for client</h6>
                                 <p class="mb-0">Update files as per new design</p>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
               <!--/ Timeline Card -->
               <!-- Sales Stats Chart Card starts -->
               <div class="col-lg-4 col-md-6 col-12">
                  <div class="card">
                     <div class="card-header d-flex justify-content-between align-items-start pb-1">
                        <div>
                           <h4 class="card-title mb-25">Sales</h4>
                           <p class="card-text">Last 6 months</p>
                        </div>
                        <div class="dropdown chart-dropdown">
                           <i data-feather="more-vertical" class="font-medium-3 cursor-pointer" data-toggle="dropdown"></i>
                           <div class="dropdown-menu dropdown-menu-right">
                              <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                              <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                              <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                           </div>
                        </div>
                     </div>
                     <div class="card-body">
                        <div class="d-inline-block mr-1">
                           <div class="d-flex align-items-center">
                              <i data-feather="circle" class="font-small-3 text-primary mr-50"></i>
                              <h6 class="mb-0">Sales</h6>
                           </div>
                        </div>
                        <div class="d-inline-block">
                           <div class="d-flex align-items-center">
                              <i data-feather="circle" class="font-small-3 text-info mr-50"></i>
                              <h6 class="mb-0">Visits</h6>
                           </div>
                        </div>
                        <div id="sales-visit-chart" class="mt-50"></div>
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