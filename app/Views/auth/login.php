<?php
defined('APPPATH') or exit('No direct script access allowed');
init_head($title);
?>
<div class="main-content overflow-hidden">
    <div>
        <div class="container">
            <div class="row">

                <!-- Status message -->
                <div class="text-center">
                    <?php
                    if (!empty($success_msg)) {
                        echo '<p class="status-msg success">' . $success_msg . '</p>';
                    } elseif (!empty($error_msg)) {
                        echo '<p class="status-msg error">' . $error_msg . '</p>';
                    }
                    ?>
                </div>
                <div class="col-md-4 offset-md-4 my-4" id="learn-register">
                    <?php echo form_open(base_url('/login'), ['id' => 'contact-form']) ?>
                    <h4 class="mb-2 text-center">Welcome Back</h4>
                    <div class="row">
                        <div class="col-lg-12">
                            <input type="email" name="email" class="pop-up-form-fields" id="inputEmail" placeholder="Your Email" required>
                        </div>
                        <div class="col-lg-12">
                            <input type="password" class="pop-up-form-fields" name="password" placeholder="Password">
                        </div>
                        <!-- <div class="col-lg-12 text-center">
                            <i class="fa fa-spinner fa-spin fa-3x fa-fw mx-auto" id="register-loading"></i>
                            </div> -->

                        <div class="col-lg-12 text-center">
                            <button class="button sign-btn org-btn send-contact w-100" id="disableBtn">
                                Register</button>
                        </div>
                        <div style="margin-top: 5px; margin-left: 40%;">
                            <span class="contact-confirm-msg text-primary">Registeration Successful!</span>
                            <span class="contact-err-msg text-danger">Error Sending Message. Try
                                Again!</span>
                            <span class="contact-validation text-danger">Kindly Fill all Fields</span>
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
</div>
<?php init_footer() ?>