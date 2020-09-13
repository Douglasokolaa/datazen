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
                            <img src="../../images/it_admin/understand_networks.jpg" alt="understand networks">
                            <h5 class="mb-2 mt-3">Cert Prep1: Understanding Networks</h5>
                            <p class="mb-0">
                                Part 1 of our 9-part training series covers networking basics: OSI versus TCP/IP models, MAC and IP addressing, and packets and ports.
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
                            <img src="../../images/it_admin/physical_net.jpg" alt="physical networks">
                            <h5 class="mb-2 mt-3">Cert Prep 2: The Physical Network</h5>
                            <p class="mb-0">
                                Prepare for questions on physical network components such as cabling, Ethernet, and switches.
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
                            <img src="../../images/it_admin/world_of_tcp_ip.jpg" alt="the world of tcp-ip">
                            <h5 class="mb-2 mt-3">Cert Prep 3: The World of TCP/IP</h5>
                            <p class="mb-0">
                                This cert prep course covers TCP/IP basics, including IP addressing, subnetting, port forwarding, and routing.
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
                            <img src="../../images/it_admin/tcp_ip_work.jpg" alt="making tcp/ip work">
                            <h5 class="mb-2 mt-3">Cert Prep 4: Making TCP/IP Work</h5>
                            <p class="mb-5">
                                Review key networking exam concepts as you learn about TCP/IP applications and network naming.
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
                            <img src="../../images/it_admin/secure_tcp_ip.jpg" alt="securing tcp/ip">
                            <h5 class="mb-2 mt-3">Cert Prep 5: Securing TCP/IP</h5>
                            <p class="mb-5">Review key network security exam concepts as you learn how to secure TCP/IP.</p>
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
                            <img src="../../images/it_admin/adv_ip_networking.jpg" alt="advanced ip networking">
                            <h5 class="mb-2 mt-3">Cert Prep 6: Advanced IP Networking</h5>
                            <p class="mb-5">
                                Review networking and infrastructure concepts as you learn about advanced networking devices, IPv6, and remote connectivity.
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
                            <img src="../../images/it_admin/wirel_cloud_mobile.jpg" alt="wireless cloud and mobile">
                            <h5 class="mb-2 mt-3">Cert Prep 7: Wireless, Cloud, and Mobile Networking</h5>
                            <p class="mb-5">
                                Review networking and infrastructure concepts as you learn about wireless, cloud, virtual, and mobile networking.
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
                            <img src="../../images/it_admin/real_world_net.jpg" alt="buile real world network">
                            <h5 class="mb-2 mt-3">Cert Prep 8: Building a Real-World Network</h5>
                            <p class="mb-5">
                                Review key networking exam concepts as you learn how to design and build a real-world network.
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