    <?php if (@isset($_SESSION["failed"])){?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong><?=$_SESSION["failed"]?></strong>
            <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php }?>
    <?php if (@isset($_SESSION["success"])){?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong><?=@$_SESSION["success"]?></strong>
            <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php }?>    

        <div class="card card-info m-2">
            <div class="card-header">
                <h3 class="card-title">Send Email</h3>
            </div>
            <form action="<?=base_url()?>admin/send" method="post">
                <div class="card-body">
                    <div class="form-group row">
                        <div class="d-flex justify-content-between">
                            <label class="col-sm-9 col-9 col-md-5 col-form-label">To</label>
                            <div class="form-check col-sm-3 col-3 col-md-2">
                              <input class="form-check-input" id="all" type="checkbox" value="all" name="all">
                              <label class="form-check-label" for="flexCheckDefault">
                                Select All
                              </label>
                            </div>
                        </div>
                        <div class="col-sm- col-11">
                            <select id="tujuan" name="tujuan[]" multiple data-placeholder="Select an Email" required>
                            <?php foreach($member as $dt){?>
                                <option value="<?=$dt["email"]?>"><?=$dt["email"]?></option>
                            <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-form-label">Subject</label>
                        
                        <div class="input-group">
                            <div class="col-sm-12">
                                <input type="text" name="subject" id="subject" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label class="col-sm-12 col-form-label">Message</label>
                        
                        <div class="input-group">
                            <div class="col-sm-12">
                                <textarea name="message" id="message" class="summernote" required></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between mt-2">
                    <a href="<?=base_url()?>admin/member" class="btn btn-default">Cancel</a>
                    <button type="submit" class="btn regismail">Send</button>
                </div>
            </form>
        </div>
