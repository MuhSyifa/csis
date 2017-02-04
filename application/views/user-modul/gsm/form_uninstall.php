<!-- start: Content -->
    <div id="content">
        <div class="panel box-shadow-none content-header">
            <div class="panel-body">
                <div class="col-md-12">
                    <h3 class="animated fadeInLeft">Form Uninstalled GSM Card</h3>
                        <p class="animated fadeInDown">
                          	Form <span class="fa-angle-right fa"></span> Form Element
                        </p>
                </div>
            </div>
        </div>
        <div class="form-element">
            <div class="col-md-12 padding-0">
                <div class="col-md-12">
                    <div class="panel form-element-padding">
                        <div class="panel-heading">
                         	<h4>GSM Card</h4>
                        </div>
                        <div class="panel-body" style="padding-bottom:30px;">
                        <?php echo form_open(); ?>
						<?php echo validation_errors(); ?>

                          	<div class="col-md-12">
                            <div class="form-group"><label class="col-sm-2 control-label text-right">GSM Uninstalled Date</label>
                              	<div class="col-sm-10"><input type="text" name="gsm_uninstall_date" value="<?php echo set_value('gsm_uninstall_date'); ?>" class="form-control"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label text-right">GSM Uninstalled By</label>
                              	<div class="col-sm-10"><input type="text" name="gsm_uninstall_by" value="<?php echo set_value('gsm_uninstall_by'); ?>" class="form-control"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label text-right"></label>
                              	<div class="col-sm-10"><input type="hidden" name="id" value="<?php echo $editdata->gsm_id ?>"></div>
                            </div>
                        	</div>
                        	<br>
							<br>
							<div class="form-group">
								<div class="col-sm-10"><input type="submit" class="btn" name="submit" value="Uninstall"></div>
							</div>

                        <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- end: content -->