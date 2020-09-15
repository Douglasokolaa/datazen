<?php
defined('APPPATH') or exit('No direct script access allowed');
init_head($title);
?>
<div class="main-content overflow-hidden mb-3">
    <div>
        <div class="container">
            <div class="col-md-4 offset-md-4 my-5" id="learn-register">
                <div class="row">
                    <!-- Status message -->
                    <div class="text-center">
                        <?php
                        if (isset($error_msg) || session()->get('error_msg')) { ?>
                            <div class="alert alert-danger text-center">
                                <?= $error_msg ?? session()->get('error_msg') ?>
                            </div>
                        <?php } ?>

                        <?php if (session()->get('success')) { ?>
                            <div class="alert alert-success">
                                <?php echo session()->get('success'); ?>
                            </div>
                        <?php } ?>
                    </div>
                    <?php echo form_open(base_url('/forgot-password'), ['id' => 'contact-form']) ?>
                    <h4 class="mb-2 text-center">Reset Password</h4>
                    <div class="row mt-2">
                        <div class="col-lg-12">
                            <input type="email" name="email" class="pop-up-form-fields" id="inputEmail" placeholder="Your Email" required>
                        </div>

                        <div class="col-lg-12 text-center">
                            <button class="button sign-btn org-btn send-contact w-100" id="disableBtn">
                                Reset Password</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <div id="loading">
            <div id="loading-center">
                <div class="loader">
                    <div class="cube">
                        <img src="images/datazen/data_zen_loader.png" class="img-fluid" alt="" style="height: auto !important; width: 300px">
                    </div>
                </div>
            </div>
        </div>
        <!-- loading End -->
    </div>
</div>
<?php init_footer() ?>