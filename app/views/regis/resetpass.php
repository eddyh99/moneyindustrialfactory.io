<!-- ======= Email Registration Section ======= -->
<section id="forgotpass" class="services">
    <div class="container" data-aos="fade-up">
        <header class="section-header">
          <p>Forgot Password</p>
        </header>

        <div class="row alert-box">
            <?php if (isset($_SESSION["failed"])){?>
                <div class="col-sm-12 alert alert-danger">
                    <?php echo @$_SESSION["failed"]?>
                    <span id="alert-message"></span>
                </div>
            <?php }else{?>
                <div class="col-sm-12 alert alert-danger" id="alert-mif">
                    <span id="alert-message"></span>
                </div>
            <?php    
            }
                if (isset($_SESSION["success"])) { ?>
                <div class="col-sm-12 alert alert-success">
                    <?php echo @$_SESSION["success"]?>
                    <span id="alert-message"></span>
                </div>
            <?php }?>
        </div>
		<div class="row box-mif">
			<div class="col-sm-12">
                <form action="<?=base_url()?>email/resetpass" method="post">
                    <div class="form-group row mt-5">
                        <label class="col-12 col-sm-12 col-md-3">Account</label>
                        <div class="col-7 col-sm-7 col-md-6">
                            <input id="username" name="username" type="text" class="form-control" minlength="5" maxlength="15" required/>
                        </div>
                        <div class="col-3 col-sm-3 col-md-2 d-flex align-items-center">
                            @mifmail.vip
                        </div>
                        <div class="col-1 col-sm-1 col-md-1 d-flex align-items-center">
                            <img src="" width="0" height="0" id="validaccount" style="margin-left:15px">
                        </div>
                    </div>
                    <div class="col-12 mt-2 mb-2 d-flex justify-content-between">
				        <a href="<?=base_url()?>email/regisemail" class="mt-2">Create Anonymous Email</a>
                        <button type="submit" class="btn regismail">Submit</button>
                    </div>
                </form>
			</div>
		</div>
      </div>
</section><!-- End Values Section -->