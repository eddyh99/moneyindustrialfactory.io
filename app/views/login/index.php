<!-- ======= Email Registration Section ======= -->
<section id="anonemail" class="services">
    <div class="container" data-aos="fade-up">
        <header class="section-header">
          <p>Sign In</p>
        </header>

        <div class="row alert-box">
            <?php if (isset($_SESSION["message"])){?>
                <div class="alert alert-danger" role="alert">
                    <strong><?php echo @$_SESSION["message"]?></strong>
                    <span id="alert-message"></span>
                </div>
            <?php }?>
        </div>
		<div class="row box-mif">
			<div class="col-sm-12">
			    
                <form action="<?=base_url()?>adminlogin/auth_login" method="post">
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" name="email" maxlength="50" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="form-group row mt-2">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="pass" name="pass" maxlength="20" placeholder="Password" required>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="d-flex card-footer justify-content-between">
                        <a href="<?=base_url()?>adminlogin/forgotpass" class="btn text-white">Forgot Password?</a>
                        <button type="submit" class="btn regismail">Sign In</button>
                    </div>
                    <!-- /.card-footer -->
                </form>

			</div>
		</div>
    </div>
</section>

<!-- End Values Section -->
<section class="services">

    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Sign In</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="<?=base_url()?>Auth/auth_login" method="post">
            <input type="hidden" id="token" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
            <div class="card-body">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="email" maxlength="50" placeholder="Email" required>
                    </div>
                </div>
                <div class="form-group row mt-2">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="pass" name="pass" maxlength="15" placeholder="Password" required>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="d-flex card-footer justify-content-between">
                <a href="<?=base_url()?>auth/forgotpass" class="btn btn-default">Forgot Password?</a>
                <button type="submit" class="btn btn-piggy">Sign In</button>
            </div>
            <!-- /.card-footer -->
        </form>
    </div>
    <!-- /.card -->
</section>