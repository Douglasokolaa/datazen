<?php
defined('APPPATH') or exit('No direct script access allowed'); 
init_head($title);
?>

<div class="main-content overflow-hidden">
    <div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="box-effect-two learn-cards wow fadeInUp text-left feature-box-effect selected">
                        <div>
                            <img src="../../images/software_developer/programming_fundamentals.jpg" alt="software developer">
                            <h5 class="mb-2 mt-3">Programming Foundations : Fundamentals</h5>
                            <p class="mb-0">
                                Prepare to learn the fundamental concepts, practices, and terminology of programming.
                            </p>
                        </div>
                        <div class="mt-4 watch-link">
                            <a href="<?= course_url($modules[0]) ?>" target="_blank" rel="noopener noreferrer" class="learn-links orange-text">
                                Watch Course
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="box-effect-two learn-cards wow fadeInUp text-left feature-box-effect selected">
                        <div>
                            <img src="../../images/software_developer/databases.jpg" alt="software developer">
                            <h5 class="mb-2 mt-3">Programming Foundations : Databases</h5>
                            <p class="mb-0">
                                Find out how to build a database, define relationships, and write queries.
                            </p>
                        </div>
                        <div class="mt-4 watch-link">
                        <a href="<?= course_url($modules[1]) ?>" target="_blank" rel="noopener noreferrer" class="learn-links orange-text">
                                Watch Course
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="box-effect-two learn-cards wow fadeInUp text-left feature-box-effect selected">
                        <div>
                            <img src="../../images/software_developer/full_stack_FE.jpg" alt="software developer">
                            <h5 class="mb-2 mt-3">
                                Succeeding in Web Development: Full Stack and Front End</h5>
                            <p class="mb-0">
                                Learn about the skills you need to get a job as a front-end, back-end, or full-stack web developer.
                            </p>
                        </div>
                        <div class="mt-4 watch-link">
                        <a href="<?= course_url($modules[2]) ?>" target="_blank" rel="noopener noreferrer" class="learn-links orange-text">
                                Watch Course
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="box-effect-two learn-cards wow fadeInUp text-left feature-box-effect selected">
                        <div class="mb-5">
                            <img src="../../images/software_developer/html_ess.jpg" alt="software developer">
                            <h5 class="mb-2 mt-3">
                                HTML Essential Training</h5>
                            <p class="mb-5">
                                Learn how to write HTML, the programming language that powers the web.
                            </p>
                        </div>
                        <div class="mt-5 watch-link">
                        <a href="<?= course_url($modules[3]) ?>" target="_blank" rel="noopener noreferrer" class="learn-links orange-text">
                                Watch Course
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="box-effect-two learn-cards wow fadeInUp text-left feature-box-effect selected">
                        <div class="mb-5">
                            <img src="../../images/software_developer/css_ess.jpg" alt="software developer">
                            <h5 class="mb-2 mt-3">
                                CSS Essential Training
                            </h5>
                            <p class="mb-5">
                                Learn how to select content, style text, manage layouts, and more as you work on a real-world project.
                            </p>
                        </div>
                        <div class="mt-5 watch-link">
                        <a href="<?= course_url($modules[4]) ?>" target="_blank" rel="noopener noreferrer" class="learn-links orange-text">
                                Watch Course
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="box-effect-two learn-cards wow fadeInUp text-left feature-box-effect selected">
                        <div class="mb-5">
                            <img src="../../images/software_developer/js_ess.jpg" alt="software developer">
                            <h5 class="mb-2 mt-3">
                                JavaScript Essential Training
                            </h5>
                            <p class="mb-5">
                                Learn how to work with objects, variables, data types, conditionals, functions, loops, closures, the DOM, ES6, and more.
                            </p>
                        </div>
                        <div class="mt-5 watch-link">
                        <a href="<?= course_url($modules[5]) ?>" target="_blank" rel="noopener noreferrer" class="learn-links orange-text">
                                Watch Course
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="box-effect-two learn-cards wow fadeInUp text-left feature-box-effect selected">
                        <div class="mb-5">
                            <img src="../../images/software_developer/learn_python.jpg" alt="software developer">
                            <h5 class="mb-2 mt-3">
                                Learning Python
                            </h5>
                            <p class="mb-5">
                                Get started with Python, the popular and highly readable object-oriented language.
                            </p>
                        </div>
                        <div class="mt-5 watch-link">
                        <a href="<?= course_url($modules[6]) ?>" target="_blank" rel="noopener noreferrer" class="learn-links orange-text">
                                Watch Course
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="box-effect-two learn-cards wow fadeInUp text-left feature-box-effect selected">
                        <div class="mb-5">
                            <img src="../../images/software_developer/learn_SQL.jpg" alt="software developer">
                            <h5 class="mb-2 mt-3">
                                Learning SQL Programming
                            </h5>
                            <p class="mb-5">
                                Learn the basics of SQL, the programming language for retrieving and editing data from databases such as SQL Server and MySQL.
                            </p>
                        </div>
                        <div class="mt-5 watch-link">
                        <a href="<?= course_url($modules[7]) ?>" target="_blank" rel="noopener noreferrer" class="learn-links orange-text">
                                Watch Course
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Content END -->
<?php init_footer(); ?>
