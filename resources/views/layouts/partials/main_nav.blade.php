 <!-- Begin Navigation -->
				<div class="navbar">
					<div class="container container-header">
						<div class="navbar-header">
							<!-- Brand -->
							<a href="{{ url('/') }}" class="navbar-brand">
								<img src="images/logo.png" class="raleway-logo" alt="Carfties Consulting">
							</a>
							<!-- Mobile Navigation -->
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
					            <span class="sr-only">Toggle navigation</span>
					            <span class="icon-bar"></span>
					            <span class="icon-bar"></span>
					            <span class="icon-bar"></span>
							</button>
						</div><!-- /navbar header -->

						<!-- Main Navigation -->
						<nav class="navbar-collapse collapse navHeaderCollapse" role="navigation">
							<ul class="nav navbar-nav navbar-right">
							<li class="<?php if($active == "home"){ echo "active"; }?>"><a href="{{ url('/') }}">Home</a></li>
							<li class=""><a>About</a></li>
						        <li class="dropdown <?php if($active == "services"){ echo "active"; }?>">
						        	<a href="" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="300" data-close-others="true">Services<span class="fa fa-angle-down dropdown-arrow"></span></a>
						        	<ul class="dropdown-menu">
						          		<li class="dropdown-submenu"><a href="#">IT Solutions</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Web Portals</a></li>
                                                <li><a href="#">SMEs Websites</a></li>
                                                <li><a href="#">School Site Nigeria</a></li>
                                                <li><a href="#">E-Libray</a></li>
                                                <li><a href="#">E-Voting</a></li>
                                            </ul>
						        	    </li>
						          		<li class="dropdown-submenu?>"><a href="{{ url('academy') }}">Academy</a>
						          		    <ul class="dropdown-menu">
						          		        <li class=""><a href="{{ url('yibc') }}">Bootcamp</a></li>
						          		        <li><a>School to work</a></li>
						          		    </ul>
						          		</li>
						          		<li><a href="{{ url('training') }}">Training</a></li>
						        	</ul>
						        </li>
						          <li class="dropdown">
						        	<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="300" data-close-others="true">Products<span class="fa fa-angle-down dropdown-arrow"></span></a>
						        	<ul class="dropdown-menu">
						          		<li><a href="#">iVote</a></li>
						          		<li><a href="#">School Site Nigeria</a></li>
						          		<li><a href="#">Virtual Library</a></li>
						          		<li><a href="#">Computer Based Test</a></li>
						        	</ul>
						        </li>
						        <li><a href="">Blog</a></li>
						        <li class="<?php if($active == 'contact') echo "active";  ?>"><a href="{{ url('contact') }}">Contact</a></li>
								<li class="dropdown">
			                    	<a href="#" class="dropdown-toggle dropdown-form-toggle" data-toggle="dropdown"><i class="fa fa-search"></i></a>
			                        <ul class="dropdown-menu dropdown-menu-user">
			                            <li id="dropdownForm">
			                            	<div class="dropdown-form">
			                                	<form class="form-default form-inline p15">
			                                        <div class="input-group">
			                                            <input type="text" class="form-control search-input" placeholder="Search...">
			                                            <span class="input-group-btn">
			                                                <button class="btn btn-rw btn-primary search-btn" type="button">Go!</button>
			                                            </span>
			                                        </div><!-- /input group -->
			                                    </form><!-- /searh form -->
			                                </div><!-- /dropdown form -->
			                            </li><!-- /dropdownForm list item -->
			                        </ul><!-- /search dropdown -->
			                	</li><!-- /search navbar list item -->
							</ul><!-- /navbar right -->
						</nav><!-- /nav -->

					</div><!-- /container header -->
				</div><!-- /navbar -->
				<!-- End Navigation -->