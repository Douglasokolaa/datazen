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
                            <img src="../../images/sales_rep/prepare_yourself.jpg" alt="Image of man and woman shaking hands with wavy graphic overlay">
                            <h5 class="mb-2 mt-3">Prepare Yourself for a Career in Sales</h5>
                            <p class="mb-0">
                                Learn how to develop yourself and build more effective relationships with both your teammates and your customers.
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
                            <img src="../../images/sales_rep/sales_foundations.jpg" alt="Image showing man on phone looking at laptop">
                            <h5 class="mb-2 mt-3">Sales Foundations</h5>
                            <p class="mb-0">
                                Find out what makes salespeople effective, and learn specific strategies for prospecting and product positioning and developing a sales process.
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
                            <img src="../../images/sales_rep/ask_great_questions.jpg" alt="woman talking to a man with her hand slightly forward and palm open">
                            <h5 class="mb-2 mt-3">Asking Great Sales Questions</h5>
                            <p class="mb-0">
                                Learn how to ask sales questions that lead to high-quality interactions with customers and clients.
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
                            <img src="../../images/sales_rep/soft_skills_sales.jpg" alt="Image of woman talking on phone sitting at table">
                            <h5 class="mb-2 mt-3">Soft Skills for Sales Professionals</h5>
                            <p class="mb-5">
                                Learn how to build your soft sales skills to better connect with—and ultimately sell to—your customers.
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
                            <img src="../../images/sales_rep/handling_objections.jpg" alt="Image of three people meeting around a table talking">
                            <h5 class="mb-2 mt-3">Sales: Handling Objections</h5>
                            <p class="mb-5">
                                Learn how to confidently handle objections that can crop up throughout the sales process.
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
                            <img src="../../images/sales_rep/sales_negotiations.jpg" alt="Image of two men shaking hands with circle graphic ">
                            <h5 class="mb-2 mt-3">Sales Negotiation</h5>
                            <p class="mb-5">
                                Discover what makes sales negotiations different and how to negotiate deals that stick.
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
                            <img src="../../images/sales_rep/closing_strategies.jpg" alt="Image of man looking at papers with check mark graphic">
                            <h5 class="mb-2 mt-3">Sales: Closing Strategies</h5>
                            <p class="mb-5">
                                Develop an effective closing strategy. Get tips to recognize buying signals and close more sales.
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
                            <img src="../../images/sales_rep/sell_with_stories.jpg" alt="buile real world network">
                            <h5 class="mb-2 mt-3">Selling with Stories: Stories Great Sales People Tell</h5>
                            <p class="mb-5">
                                Learn the 25 most essential types of sales stories to earn buyer trust and make the sale.
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