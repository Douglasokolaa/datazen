<?php
defined('APPPATH') or exit('No direct script access allowed');
init_head($title);
// var_dump($user, $courses);
?>

<div class="main-content overflow-hidden">
    <section id="">
        <div class="container">
            <div class="row">
                <div class="col-md-6 order-md-2 mb-4">
                    <h4 class="mb-3">Learning Progress</h4>
                    <ul class="list-group mb-3">
                        <?php foreach ($courses as $course) { ?>
                            <li class="list-group-item">
                                <h6><?= $course['title'] ?></h6>
                                <div class="mt-1">
                                    <div class="progress bg-secondary w-100" style="height:35px;">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: <?= $course['progress_percentage'] ?>%;" role="progressbar" aria-valuenow="<?= $course['progress_percentage'] ?>" aria-valuemin="0" aria-valuemax="100">
                                            <?= $course['progress_percentage'] ?>% progress
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="col-md-6 order-md-1">
                    <h4 class="mb-3">Edit Profile</h4>
                    <?php echo form_open('', ['id' => 'contact-form', 'class' => 'form-group']) ?>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="text" value="<?= $user['name']?>" name="name" class="pop-up-form-fields" id="inputName" disabled placeholder="Your Name">
                        </div>
                        <div class="col-md-12">
                            <input type="email" value="<?= $user['email']?>" name="email" class="pop-up-form-fields" id="inputEmail" disabled placeholder="Your Email" required>
                        </div>
                        <div class="col-md-12">
                            <input type="tel" value="<?= $user['phone']?>" name="phone" class="pop-up-form-fields" id="inputPhone" placeholder="Your Phone Number" required>
                        </div>
                        <div class="col-md-12">
                            <input type="text" value="<?= $user['organization']?>" name="organization" class="pop-up-form-fields" id="inputOrganization" placeholder="Your Organization">
                        </div>
                        <div class="col-md-12 mb-4">
                            <select name="course" class="pop-up-form-fields" id="exampleFormControlSelect1" disabled style="color: #8e989f">
                                <option value="1" <?= $user['course'] == '1' ? 'selected' : '' ?>>Course of Interest</option>
                                <option value="2" <?= $user['course'] == '2' ? 'selected' : '' ?>>Software Developer</option>
                                <option value="3" <?= $user['course'] == '3' ? 'selected' : '' ?>>IT Administrator</option>
                                <option value="4" <?= $user['course'] == '4' ? 'selected' : '' ?>>Customer Service Specialist</option>
                                <option value="5" <?= $user['course'] == '5' ? 'selected' : '' ?>>Sales Representative</option>
                                <option value="6" <?= $user['course'] == '6' ? 'selected' : '' ?>>Data analyst</option>
                                <option value="7" <?= $user['course'] == '7' ? 'selected' : '' ?>>IT Support/ help desk</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <input type="text" value="<?= $user['hours']?> hours" name="hours" class="pop-up-form-fields" disabled placeholder="How many hours can you dedicate each week">
                        </div>
                        <div class="col-md-12 text-center">
                            <button class="button sign-btn org-btn send-contact">
                                Update Profile</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>

        </div>
    </section>
</div>
<?php
init_footer();
