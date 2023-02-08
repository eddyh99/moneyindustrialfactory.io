<!-- ======= Email Registration Section ======= -->
<section id="anonemail" class="services">
    <div class="container" data-aos="fade-up">
        <header class="section-header">
          <p>Anonymous Email</p>
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
        <div class="row">
            <div class="col-sm-12 text-center text-white">
                <?php echo $this->lang->line('notif_regis'); ?>
            </div>
        </div>
		<div class="row box-mif">
			<div class="col-sm-12">
                <form action="<?=base_url()?>email/createemail" method="post">
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
                    <div class="form-group row mt-2">
                        <label class="col-12 col-sm-12 col-md-3">Email</label>
                        <div class="col-10 col-sm-10 col-md-8">
                            <input type="email" name="email" id="email" class="form-control" maxlength="50" id="email" required>
                        </div>
                    </div>
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
				        <a href="<?=base_url()?>email/forgotpass" class="mt-2">Forgot Password</a>
                        <button type="submit" class="btn regismail">Submit</button>
                    </div>
                </form>
			</div>
		</div>
		<div class="row">
            <div class="col-sm-12 text-center">
                <p><h3><b><span style="color:white">ATTENTION:</span></b>  if you cannot  see the email check into the spam folder.</h3></p>
            </div>
        </div>
    </div>
</section>

<!-- End Values Section -->