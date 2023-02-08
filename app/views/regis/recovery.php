<!-- ======= Reset Password Email Section ======= -->
<section id="anonemail" class="services">
    <div class="container" data-aos="fade-up">
        <header class="section-header">
          <p>Reset Password</p>
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
                <form action="<?=base_url()?>email/updatepassword" method="post">
                    <input type="hidden" name="anonemail" value="<?=$email?>">
                    <input type="hidden" name="code" value="<?=$code?>">
                    <div class="form-group row mt-2">
                        <label class="col-12 col-sm-12 col-md-3">Password</label>
                        <div class="col-10 col-sm-10 col-md-8">
                            <div class="input-group">
                                <input type="password" class="form-control" maxlength="15" name="pass" id="pass" required>
                                <div class="input-group-addon d-flex align-items-center">
                                    <i class="far fa-eye" id="togglePassword" style="cursor: pointer;margin-left:5px"></i>
                                </div>
                            </div>
                            <div id="pswd_info">
                                Password must meet the following requirements:
                                <ul>
                                    <li id="letter" class="invalid">At least <strong>one letter</strong></li>
                                    <li id="capital" class="invalid">At least <strong>one capital letter</strong></li>
                                    <li id="number" class="invalid">At least <strong>one number</strong></li>
                                    <li id="length" class="invalid">Be at least <strong>9 characters</strong></li>
                                    <li id="special" class="invalid">Contains at least <strong>2 special character</strong> ^!@#$%^&*\-_=+ </li>
                                </ul>
                            </div>        
                        </div>
                        <div class="col-1 col-sm-1 col-md-1 d-flex align-items-center">
                            <img src="" width="0" height="0" id="validpass"  style="margin-left:15px">
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label class="col-12 col-sm-12 col-md-3">Confirm Password</label>
                        <div class="col-10 col-sm-10 col-md-8">
                            <div class="input-group">
                                <input type="password" class="form-control"  maxlength="15" name="confirmpass" id="confirmpass" required>
                                <div class="input-group-addon d-flex align-items-center">
                                    <i class="far fa-eye" id="toggleCPassword" style="cursor: pointer;margin-left:5px"></i>
                                </div>
                            </div>

                        </div>
                        <div class="col-1 col-sm-1 col-md-1 d-flex align-items-center">
                            <img src="" width="0" height="0" id="confpass" style="margin-left:15px">
                        </div>
                    </div>
                    <div class="col-12 mt-2 mb-2 d-flex justify-content-between">
				        <a href="<?=base_url()?>email/createemail" class="mt-2">Create Anonymous Email</a>
                        <button type="submit" class="btn regismail">Submit</button>
                    </div>
                </form>
			</div>
		</div>
    </div>
</section>

<!-- End Values Section -->