<?php
defined('APPPATH') or exit('No direct script access allowed');
init_head($title);
?>

<div class="text-left iq-breadcrumb-one iq-bg-over black banner-images parallax" style="background-image: url(images/learn.jpg)">
    <div class="container ">
        <div class="row">
            <div class="col-md-6">
                <br>
                <br>
                <h1 style="color: #ffff;">Learn relevant skills</h1>
            </div>
            <div class="col-md-6">
            </div>

        </div>
    </div>
</div>


<div class="main-content overflow-hidden">
    <section id="iq-service">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="box-effect-two index-box wow fadeInUp text-left feature-box-effect selected">
                        <div>
                            <img src="images/software_developer.jpg" alt="software developer">
                            <h5 class="mb-2 mt-3">Software Developer</h5>
                            <p class="mb-0 text-justify">
                                Become a software developer. Learn core software concepts, get started with modern
                                programming
                                languages that power the web and beyond.
                            </p>
                        </div>
                        <div class="mt-4">
                            <a href="<?php echo base_url('/course/software-developer') ?>" rel="noopener noreferrer" class="learn-links orange-text">
                                Start Learning
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="box-effect-two index-box wow fadeInUp text-left feature-box-effect">
                        <div>
                            <img src="images/it-admin.jpg" alt="it admin">
                            <h5 class="mb-2 mt-3">IT Administrator</h5>
                            <p class="mb-0 text-justify">
                                Learn how to administer IT infrastructure that support entire ecosystems.
                                Manage servers, users/user groups and ensure system security and availability.
                            </p>
                        </div>
                        <div class="mt-4">
                            <a href="<?php echo base_url('/course/it-administrator') ?>" rel="noopener noreferrer" class="learn-links orange-text">
                                Start Learning
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="box-effect-two index-box wow fadeInUp text-left feature-box-effect">
                        <div>
                            <img src="images/customer-service.jpg" alt="customer service">
                            <h5 class="mb-2 mt-3">Customer Service Specialist</h5>
                            <p class="mb-0 text-justify">
                                Become an expert at providing world class customer service support to improve
                                customer experience and engagement with your product.
                            </p>
                        </div>
                        <div class="mt-4">
                            <a href="<?php echo base_url('/course/customer-service-specialist') ?>" rel="noopener noreferrer" class="learn-links orange-text">
                                Start Learning
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="box-effect-two index-box wow fadeInUp text-left feature-box-effect">
                        <div>
                            <img src="images/sales-rep.jpg" alt="sales rep">
                            <h5 class="mb-2 mt-3">Sales Representative</h5>
                            <p class="mb-0 text-justify">
                                Learn core concepts and skills necessary in today’s selling environment—from
                                negotiation and
                                closing strategies to selling with authenticity.
                            </p>
                        </div>
                        <div class="mt-4">
                            <a href="<?php echo base_url('/course/sales-representative') ?>" rel="noopener noreferrer" class="learn-links orange-text">
                                Start Learning
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="box-effect-two index-box wow fadeInUp text-left feature-box-effect">
                        <div>
                            <img src="images/data-analyst.jpg" alt="data analyst">
                            <h5 class="mb-2 mt-3">Data analyst</h5>
                            <p class="mb-0 text-justify">
                                Master data analysis, data analytics, data visualization and more with modern
                                techniques and tools, following industry standard best practices.
                            </p>
                        </div>
                        <div class="mt-4">
                            <a href="<?php echo base_url('/course/data-analysis') ?>" rel="noopener noreferrer" class="learn-links orange-text">
                                Start Learning
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="box-effect-two index-box wow fadeInUp text-left feature-box-effect">
                        <div>
                            <img src="images/it-support-help.jpg" alt="data analyst">
                            <h5 class="mb-2 mt-3">IT Support/ help desk</h5>
                            <p class="mb-0 text-justify">
                                Learn how to provide IT support, track issues, provide assistance,
                                troubleshoot problems and provide solutions to everyday challenges.
                            </p>
                        </div>
                        <div class="mt-4">
                            <a href="<?php echo base_url('/course/it-support-specialist') ?>" rel="noopener noreferrer" class="learn-links orange-text">
                                Start Learning
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Main Content END -->

<?php
init_footer($title);
?>