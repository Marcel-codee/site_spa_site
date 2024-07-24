    <!-- Service Start -->
    <div class="container-fluid container-service py-5">
        <div class="container py-5">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="display-6 mb-3">Reliable & High-Quality Laboratory Service</h1>
                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue, iaculis id elit eget, ultrices pulvinar tortor.</p>
            </div>
            <div class="row g-4">
                <?php foreach ($service as $data):
                        if($data['status']==1) :
                ?>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item">
                            <div class="icon-box-primary mb-4">
                            <img src="<?=LINK?>uploads/<?=$data['image']?>" width="100px">
                            </div>
                            <h5 class="mb-3"><?=$data['titre']?></h4>
                            <p class="mb-4"><?= mb_strimwidth($data['contenu'], 0, 150, "...") ?></p>
                            <a class="btn btn-light px-3" <a href="<?= LINK ?>detailService/<?= $data['id']?>">En savoir plus<i class="bi bi-chevron-double-right ms-1"></i></a>
                        </div>
                    </div>
                <?php endif; endforeach; ?>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->