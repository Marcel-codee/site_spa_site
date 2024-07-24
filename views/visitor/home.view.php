<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="row g-0">
                    <div class="col-6">
                        <img class="img-fluid" src="<?= LINK ?>assets/visitor/img/about-1.jpg">
                    </div>
                    <div class="col-6">
                        <img class="img-fluid" src="<?= LINK ?>assets/visitor/img/about-2.jpg">
                    </div>
                    <div class="col-6">
                        <img class="img-fluid" src="<?= LINK ?>assets/visitor/img/about-3.jpg">
                    </div>
                    <div class="col-6">
                        <div class="bg-primary w-100 h-100 mt-n5 ms-n5 d-flex flex-column align-items-center justify-content-center">
                            <div class="icon-box-light">
                                <i class="bi bi-award text-dark"></i>
                            </div>
                            <h1 class="display-1 text-white mb-0" data-toggle="counter-up">25</h1>
                            <small class="fs-5 text-white">Years Experience</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <h1 class="display-6 mb-4">Trusted Lab Experts and Latest Lab Technologies</h1>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue, iaculis
                    id elit eget, ultrices pulvinar tortor. Quisque vel lorem porttitor, malesuada arcu quis, fringilla
                    risus. Pellentesque eu consequat augue.</p>
                <div class="row g-4 g-sm-5 justify-content-center">
                    <div class="col-sm-6">
                        <div class="about-fact btn-square flex-column rounded-circle bg-primary ms-sm-auto">
                            <p class="text-white mb-0">Awards Winning</p>
                            <h1 class="text-white mb-0" data-toggle="counter-up">9999</h1>
                        </div>
                    </div>
                    <div class="col-sm-6 text-start">
                        <div class="about-fact btn-square flex-column rounded-circle bg-secondary me-sm-auto">
                            <p class="text-white mb-0">Complete Cases</p>
                            <h1 class="text-white mb-0" data-toggle="counter-up">9999</h1>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="about-fact mt-n130 btn-square flex-column rounded-circle bg-dark mx-sm-auto">
                            <p class="text-white mb-0">Happy Clients</p>
                            <h1 class="text-white mb-0" data-toggle="counter-up">9999</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Features Start -->
<div class="container-fluid py-5">
    <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
        <h1 class="display-6 mb-3">Nos Réalisations</h1>
        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue, iaculis id
            elit eget, ultrices pulvinar tortor.</p>
    </div>
    <div class="container">
        <div class="row g-0 feature-row">
            <?php foreach ($application as $data) : ?>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="feature-item border h-100 p-5">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-award text-dark"></i>
                        </div>
                        <h5 class="mb-3"><?= $data['titre'] ?></h5>
                        <p class="mb-0"><?= $data['contenu'] ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- Features End -->


<!-- Features Start -->
<div class="container-fluid feature mt-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-6 pt-lg-5">
                <div class="bg-white p-5 mt-lg-5">
                    <h1 class="display-6 mb-4 wow fadeIn" data-wow-delay="0.3s">The Best Medical Test & Laboratory
                        Solution</h1>
                    <p class="mb-4 wow fadeIn" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit. Curabitur tellus augue, iaculis id elit eget, ultrices pulvinar tortor. Quisque vel lorem
                        porttitor, malesuada arcu quis, fringilla risus. Pellentesque eu consequat augue.</p>
                    <div class="row g-5 pt-2 mb-5">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                            <div class="icon-box-primary mb-4">
                                <i class="bi bi-person-plus text-dark"></i>
                            </div>
                            <h5 class="mb-3">Experience Doctors</h5>
                            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                            <div class="icon-box-primary mb-4">
                                <i class="bi bi-check-all text-dark"></i>
                            </div>
                            <h5 class="mb-3">Advanced Microscopy</h5>
                            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5 wow fadeIn" data-wow-delay="0.5s" href="">Explore More</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row h-100 align-items-end">
                    <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                        <div class="d-flex align-items-center justify-content-center" style="min-height: 300px;">
                            <button type="button" class="btn-play" data-bs-toggle="modal" data-src="https://wwwvisitor/.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                <span></span>
                            </button>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="bg-primary p-5">
                            <div class="experience mb-4 wow fadeIn" data-wow-delay="0.3s">
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="text-white">Sample Preparation</span>
                                    <span class="text-white">90%</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="experience mb-4 wow fadeIn" data-wow-delay="0.4s">
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="text-white">Result Accuracy</span>
                                    <span class="text-white">95%</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="experience mb-0 wow fadeIn" data-wow-delay="0.5s">
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="text-white">Lab Equipments</span>
                                    <span class="text-white">90%</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features End -->


<!-- Video Modal Start -->
<div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Pr&#233;sentation de l'entreprise</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- 16:9 aspect ratio -->
                <div class="ratio ratio-16x9">
                    <iframe class="embed-responsive-item" src="" id="videovisitor/" allowfullscreen allowscriptaccess="always" allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Video Modal End -->


<!-- Service Start -->
<div class="container-fluid container-service py-5">
    <div class="container pt-5">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="display-6 mb-3">Nos Formations de hautes qualités et certifiées</h1>
            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue, iaculis id
                elit eget, ultrices pulvinar tortor.</p>
        </div>
        <div class="row g-4">
            <?php foreach ($formation as $data) : ?>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-heart-pulse text-dark"></i>
                        </div>
                        <h5 class="mb-3"><?= $data['titre'] ?></h4>
                            <p class="mb-4"><?= $data['contenu'] ?>
                            </p>
                            <a class="btn btn-light px-3" href="">Read More<i class="bi bi-chevron-double-right ms-1"></i></a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- Service End -->


<!-- Appoinment Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="display-6 mb-4">Nous garantissons que vous obtiendrez toujours le meilleur résultat</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue, iaculis id elit
                    eget, ultrices pulvinar tortor. Quisque vel lorem porttitor, malesuada arcu quis, fringilla risus.
                    Pellentesque eu consequat augue.
                </p>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue, iaculis
                    id elit eget, ultrices pulvinar tortor.</p>
                <div class="d-flex align-items-start wow fadeIn" data-wow-delay="0.3s">
                    <div class="icon-box-primary">
                        <i class="bi bi-geo-alt text-dark fs-1"></i>
                    </div>
                    <div class="ms-3">
                        <h5>Office Address</h5>
                        <span>123 Street, New York, USA</span>
                    </div>
                </div>
                <hr>
                <div class="d-flex align-items-start wow fadeIn" data-wow-delay="0.4s">
                    <div class="icon-box-primary">
                        <i class="bi bi-clock text-dark fs-1"></i>
                    </div>
                    <div class="ms-3">
                        <h5>Office Time</h5>
                        <span>Mon-Sat 09am-5pm, Sun Closed</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <h2 class="mb-4">Rendez-vous en ligne</h2>
                <div class="row g-3">
                    <div class="col-sm-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="name" placeholder="Your Name">
                            <label for="name">Your Name</label>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-floating">
                            <input type="email" class="form-control" id="mail" placeholder="Your Email">
                            <label for="mail">Your Email</label>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="mobile" placeholder="Your Mobile">
                            <label for="mobile">Your Mobile</label>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-floating">
                            <select class="form-select" id="service">
                                <option selected>Pathology Testing</option>
                                <option value="">Microbiology Tests</option>
                                <option value="">Biochemistry Tests</option>
                                <option value="">Histopatology Tests</option>
                            </select>
                            <label for="service">Choose A Service</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 130px"></textarea>
                            <label for="message">Message</label>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <button class="btn btn-primary w-100 py-3" type="submit">Submit Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Appoinment Start -->


<!-- Team Start -->
<div class="container-fluid container-team py-5">
    <div class="container pb-5">
        <div class="row g-5 align-items-center mb-5">
            <div class="col-md-6 wow fadeIn" data-wow-delay="0.3s">
                <img class="img-fluid w-100" src="<?= LINK ?>assets/visitor/img/team-1.jpg" alt="">
            </div>
            <div class="col-md-6 wow fadeIn" data-wow-delay="0.5s">
                <h1 class="display-6 mb-3"><?= $chef['nom'] . ' ' . $chef['prenom'] ?></h1>
                <p class="mb-1">CEO & Founder</p>
                <p class="mb-5">Labsky, New York, USA</p>
                <h3 class="mb-3">Biography</h3>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue, iaculis
                    id elit eget, ultrices pulvinar tortor. Quisque vel lorem porttitor, malesuada arcu quis, fringilla
                    risus. Pellentesque eu consequat augue.</p>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue, iaculis
                    id elit eget, ultrices pulvinar tortor. Quisque vel lorem porttitor, malesuada arcu quis, fringilla
                    risus. Pellentesque eu consequat augue.</p>
                <div class="d-flex">
                    <a class="btn btn-lg-square btn-primary me-2" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg-square btn-primary me-2" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg-square btn-primary me-2" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-lg-square btn-primary me-2" href=""><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
        <div class="row g-4">
            <?php foreach ($employe as $data) : if ($data['poste'] != "chef") : ?>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="<?= LINK ?>assets/visitor/img/team-2.jpg" alt="">
                                <!-- <img class="img-fluid w-100" src="<?php echo htmlspecialchars($data['photo']); ?>" alt=""> -->
                                <div class="team-social">
                                    <a class="btn btn-square btn-light mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-light mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-light mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="btn btn-square btn-light mx-1" href=""><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4">
                                <h5 class="mb-1"><?php echo $data['nom'] . ' ' . $data['prenom'] ?></h5>
                                <span>Lab Assistant</span>
                            </div>
                        </div>
                    </div>
            <?php endif;
            endforeach; ?>
        </div>
    </div>
</div>
<!-- Team End -->


<!-- Testimonial Start -->
<div class="container-fluid testimonial py-5">
    <div class="container pt-5">
        <div class="row gy-5 gx-0">
            <div class="col-lg-6 pe-lg-5 wow fadeIn" data-wow-delay="0.3s">
                <h1 class="display-6 text-white mb-4">What Clients Say About Our Lab Services!</h1>
                <p class="text-white mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus
                    augue, iaculis id elit eget, ultrices pulvinar tortor.</p>
                <a href="" class="btn btn-primary py-3 px-5">More Testimonials</a>
            </div>
            <div class="col-lg-6 mb-n5 wow fadeIn" data-wow-delay="0.5s">
                <div class="bg-white p-5">
                    <div class="owl-carousel testimonial-carousel wow fadeIn" data-wow-delay="0.1s">
                        <div class="testimonial-item">
                            <div class="icon-box-primary mb-4">
                                <i class="bi bi-chat-left-quote text-dark"></i>
                            </div>
                            <p class="fs-5 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
                                tellus augue, iaculis id elit eget, ultrices pulvinar tortor. Quisque vel lorem
                                porttitor, malesuada arcu quis, fringilla risus. Pellentesque eu consequat augue.</p>
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0" src="<?= LINK ?>assets/visitor/img/testimonial-1.jpg" alt="">
                                <div class="ps-3">
                                    <h5 class="mb-1">Client Name</h5>
                                    <span class="text-primary">Profession</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="icon-box-primary mb-4">
                                <i class="bi bi-chat-left-quote text-dark"></i>
                            </div>
                            <p class="fs-5 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
                                tellus augue, iaculis id elit eget, ultrices pulvinar tortor. Quisque vel lorem
                                porttitor, malesuada arcu quis, fringilla risus. Pellentesque eu consequat augue.</p>
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0" src="<?= LINK ?>assets/visitor/img/testimonial-2.jpg" alt="">
                                <div class="ps-3">
                                    <h5 class="mb-1">Client Name</h5>
                                    <span class="text-primary">Profession</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->