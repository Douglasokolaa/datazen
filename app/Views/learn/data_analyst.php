<?php
defined('APPPATH') or exit('No direct script access allowed');
init_head($title);
?>

<div class="main-content overflow-hidden">
    <div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="box-effect-two wow fadeInUp text-left feature-box-effect selected learn-cards">
                        <div>
                            <img src="../../images/data_analyst/learn_data_analytics.jpg" alt="Image of woman at desk taking notes">
                            <h5 class="mb-2 mt-3">Learning Data Analytics</h5>
                            <p class="mb-0">
                                Learn the basics of data analytics: using data for analysis and reporting. This beginner-level data science course is for anyone who works with data.
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
                            <img src="../../images/data_analyst/data_fluency.jpg" alt="Illustration of man with chat bubbles showing charts">
                            <h5 class="mb-2 mt-3">Data Fluency: Exploring and Describing Data</h5>
                            <p class="mb-0">
                                Learn how anyone can speak the language of data analysis. Find out how to prepare data, explore it visually, and describe it using statistical methods.
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
                            <img src="../../images/data_analyst/excel_stats.jpg" alt="Image of man on laptop looking into camera">
                            <h5 class="mb-2 mt-3">Excel Statistics Essential Training: 1</h5>
                            <p class="mb-0">
                                Learn statistics. Dr. Joseph Schmuller uses Microsoft Excel to teach the fundamentals of descriptive and inferential statistics.
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
                            <img src="../../images/data_analyst/learn_excel.jpg" alt="Illustration showing chart on a clipboard">
                            <h5 class="mb-2 mt-3">Learning Excel: Data-Analysis</h5>
                            <p class="mb-5">
                                Unlock the power of your organization's data. Learn how to perform data analysis in Microsoft Excel.
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
                            <img src="../../images/data_analyst/learn_data_visualization.jpg" alt="Image of woman in front of desk with laptop on lap">
                            <h5 class="mb-2 mt-3">Learning Data Visualization</h5>
                            <p class="mb-5">Communicate complex ideas quickly and thoroughly with data visualization. Turn information into artwork and intrigue your audience.</p>
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
                            <img src="../../images/data_analyst/power_bi_ess.jpg" alt="Illustration showing hand holding bar chart">
                            <h5 class="mb-2 mt-3">Power BI Essential Training</h5>
                            <p class="mb-5">
                                Learn how to use this powerful set of business analytics tools to create and share visualizations with others in your organization.
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
                            <img src="../../images/data_analyst/tableau_ess_train.jpg" alt="Illustration showing 3 category buttons, category one selected">
                            <h5 class="mb-2 mt-3">Tableau Essential Training (2020.1)</h5>
                            <p class="mb-5">
                                Discover how to leverage the software to make smarter, more data-driven decisions.
                            </p>
                        </div>
                        <div class="mt-5 watch-link">
                        <a href="<?= course_url($modules[6]) ?>" target="_blank" rel="noopener noreferrer" class="learn-links orange-text">
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