<div id="sidebar" class="sidebar sidebar-fixed expandable sidebar-light">
          <div class="sidebar-inner">

            <div class="ace-scroll flex-grow-1" data-ace-scroll="{}">

              <div class="sidebar-section my-2">
                <!-- the shortcut buttons -->
                <div class="sidebar-section-item fadeable-left">
                  <div class="fadeinable sidebar-shortcuts-mini">
                    <!-- show this small buttons when collapsed -->
                    <span class="btn btn-success p-0 opacity-1"></span>
                    <span class="btn btn-info p-0 opacity-1"></span>
                    <span class="btn btn-orange p-0 opacity-1"></span>
                    <span class="btn btn-danger p-0 opacity-1"></span>
                  </div>

                  <div class="fadeable">
                    <!-- show this small buttons when not collapsed -->
                    <div class="sub-arrow"></div>
                    <div>
                      <button class="btn px-25 py-2 text-95 btn-success opacity-2">
                        <i class="fa fa-signal f-n-hover"></i>
                      </button>

                      <button class="btn px-25 py-2 text-95 btn-info opacity-2">
                        <i class="fa fa-edit f-n-hover"></i>
                      </button>

                      <button class="btn px-25 py-2 text-95 btn-orange opacity-2">
                        <i class="fa fa-users f-n-hover"></i>
                      </button>

                      <button class="btn px-25 py-2 text-95 btn-danger opacity-2">
                        <i class="fa fa-cogs f-n-hover"></i>
                      </button>
                    </div>
                  </div>
                </div>
           </div>

              <ul class="nav has-active-border">
                <li class="nav-item">
                  <a href="<?php echo base_url();?>index.php/super_admin/index" class="nav-link">
                    <i class="nav-icon fa fa-tachometer-alt"></i>
                    <span class="nav-text fadeable">
               	  <span>Dashboard</span>
                    </span>
                  </a>
                  <b class="sub-arrow"></b>
                </li>
                <li class="nav-item active open">

                  <a href="#" class="nav-link dropdown-toggle">
                    <i class="nav-icon fa fa-cube"></i>
                    <span class="nav-text fadeable">
               	  <span>Client</span>
                    </span>
               	 	<b class="caret d-collapsed fa fa-plus text-80"></b>
                  </a>

                  <div class="hideable submenu collapse show">
                    <ul class="submenu-inner">

                      <li class="nav-item">
                        <a href="<?php echo base_url();?>index.php/super_admin/possible_tenant" class="nav-link">
                          <span class="nav-text">
               				  <span>Possible Tenant</span>
                          </span>
                        </a>
                      </li>
					   <li class="nav-item">
                        <a href="<?php echo base_url();?>index.php/super_admin/registered_tenant_list" class="nav-link">
                          <span class="nav-text">
               				  <span>Registered Tenant</span>
                          </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="<?php echo base_url();?>index.php/super_admin/possible_landlord" class="nav-link">
                          <span class="nav-text">
               				  <span>Possible Landlord</span>
                          </span>
                        </a>
                      </li>
					  
                    </ul>
                  </div>
				  <b class="sub-arrow"></b>
				</li>
				
				
				
				<li class="nav-item">
					<a href="<?php echo base_url();?>index.php/super_admin/add_property" class="nav-link">
                    <i class="nav-icon far fa-window-restore"></i>
                    <span class="nav-text fadeable">
               	  	<span>Property</span>
                    </span>
					</a>
					<b class="sub-arrow"></b>
				</li>
				<li class="nav-item">
					<a href="<?php echo base_url();?>index.php/super_admin/add_room" class="nav-link">
                    <i class="nav-icon far fa-window-restore"></i>
                    <span class="nav-text fadeable">
               	  	<span>Room</span>
                    </span>
					</a>
					<b class="sub-arrow"></b>
				</li>
				
				<li class="nav-item">
					<a href="<?php echo base_url();?>index.php/super_admin/add_landlord" class="nav-link">
                    <i class="nav-icon fa fa-window-restore"></i>
                    <span class="nav-text fadeable">
               	  	<span>Landlord</span>
                    </span>
					</a>
					<b class="sub-arrow"></b>
				</li>
				<li class="nav-item">
					<a href="<?php echo base_url();?>index.php/super_admin/add_contractor" class="nav-link">
                    <i class="nav-icon far fa-window-restore"></i>
                    <span class="nav-text fadeable">
               	  	<span>Contractor</span>
                    </span>
					</a>
					<b class="sub-arrow"></b>
				</li>
				<li class="nav-item">
					<a href="<?php echo base_url();?>index.php/super_admin/add_employee" class="nav-link">
                    <i class="nav-icon far fa-window-restore"></i>
                    <span class="nav-text fadeable">
               	  	<span>Employee</span>
                    </span>
					</a>
					<b class="sub-arrow"></b>
				</li>
				<li class="nav-item">
					<a href="<?php echo base_url();?>index.php/super_admin/add_user" class="nav-link">
                    <i class="nav-icon fa fa-window-restore"></i>
                    <span class="nav-text fadeable">
               	  	<span>User</span>
                    </span>
					</a>
					<b class="sub-arrow"></b>
				</li>
				
              </ul>

            </div><!-- /.sidebar scroll -->