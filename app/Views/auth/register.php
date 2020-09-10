<?php
defined('APPPATH') or exit('No direct script access allowed');
init_head($title);
?>
<div class="main-content overflow-hidden">
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-2" id="learn-register">
                    <?php echo form_open('',['id' => 'contact-form']) ?>
                    <h4 class="mb-2 text-center">Welcome to Datazen Learn.</h4>
                    <h6 class="mb-2 text-center">Please fill out the following details.</h6>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="text" name="name" class="pop-up-form-fields" id="inputName" placeholder="Your Name">
                        </div>
                        <div class="col-lg-12">
                            <input type="email" name="email" class="pop-up-form-fields" id="inputEmail" placeholder="Your Email" required>
                        </div>
                        <div class="col-lg-12">
                            <input type="number" name="phone" class="pop-up-form-fields" id="inputPhone" placeholder="Your Phone Number" required>
                        </div>
                        <div class="col-lg-12">
                            <input type="text" name="organization" class="pop-up-form-fields" id="inputOrganization" placeholder="Your Organization">
                        </div>
                        <div class="col-lg-12 mb-4">
                            <select name="course" class="pop-up-form-fields" id="exampleFormControlSelect1" style="color: #8e989f">
                                <option value="1">Course of Interest</option>
                                <option value="2">Software Developer</option>
                                <option value="3">IT Administrator</option>
                                <option value="4">Customer Service Specialist</option>
                                <option value="5">Sales Representative</option>
                                <option value="6">Data analyst</option>
                                <option value="7">IT Support/ help desk</option>
                            </select>
                        </div>

                        <div class="col-lg-12">
                            <input type="number" name="hours" class="pop-up-form-fields" placeholder="How many hours can you dedicate each week">
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