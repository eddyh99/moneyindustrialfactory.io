<!-- ======= Email Registration Section ======= -->
<section id="anonemail" class="services">
    <div class="container" data-aos="fade-up">
        <header class="section-header">
          <p>Create New Password</p>
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
                <div class="card-body">
                    <form action="<?=base_url()?>adminlogin/updatepassword" method="post">
                    <input type="hidden" name="token" value="<?=$token?>">
                    <input type="hidden" name="email" value="<?=$email?>">
                    <div class="form-group row mt-2">
                        <label class="col-12 col-sm-12 col-md-3">Password</label>
                        <div class="col-10 col-sm-10 col-md-8">
                            <input type="password" class="form-control" maxlength="15" name="pass" id="pass" required>
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label class="col-12 col-sm-12 col-md-3">Confirm Password</label>
                        <div class="col-10 col-sm-10 col-md-8">
                            <input type="password" class="form-control"  maxlength="15" name="confirmpass" id="confirmpass" required>
                        </div>
                    </div>
                    <div class="col-12 mt-2 mb-2 d-flex justify-content-between">
				        <a href="<?=base_url()?>adminlogin/" class="mt-2 text-white">Sign In Here</a>
                        <button type="submit" class="btn regismail">Submit</button>
                    </div>
                </form>
                </div>
            </div>
		</div>
	</div>
</section>
