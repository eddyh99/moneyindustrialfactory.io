<!-- ======= Email Registration Section ======= -->
<section id="anonemail" class="services">
    <div class="container" data-aos="fade-up">
        <header class="section-header">
          <p>Forgot Password</p>
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
                <form action="<?=base_url()?>adminlogin/resetpass" method="post">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" maxlength="50" required>
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
        <!-- /.card -->
</section>
