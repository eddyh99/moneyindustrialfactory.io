        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
    	        <div class="d-flex justify-content-center align-items-center">
        			<span class="align-middle text-mif"><h3>MIF</h3></span>
        		</div>
            </div>
            <!-- menu member -->
            <ul class="list-unstyled components">
                <li class="<?=@$menu2?>">
                    <a href="<?=base_url()?>admin/member">
                        <i class="fas fa-coins"></i>
                        Member
                    </a>
                </li>
                <li class="<?=@$menu3?>">
                    <a href="<?=base_url()?>admin/massmail">
                        <i class="fas fa-wallet"></i>
                        Email
                    </a>
                </li>
                <li>
                    <a href="<?=base_url()?>adminlogin/logout">
                        <i class="fas fa-sign-out-alt"></i>
                        Sign Out
                    </a>
                </li>
            </ul>

        </nav>
        <!-- Page Content  -->
        <div id="content">