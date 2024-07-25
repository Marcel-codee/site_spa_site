    <!-- Service Start -->
    <div class="container-fluid container-service py-5">
        <div class="container py-5">
            <div class="text-center bg-white p-5  col-md-10 mx-auto wow fadeInUp" data-wow-delay="0.1s" >
                <h1 class="display-6 mb-3">Découvrez nos applications sur le marché</h1>
                <p class="mb-5 fs-5">Bienvenue chez S.P.A Technology, votre partenaire de confiance pour des solutions de gestion de stock innovantes et efficaces. Nous offrons une gamme complète de services conçus pour optimiser vos opérations de stockage, réduire les coûts et maximiser votre rentabilité. Que vous soyez dans le commerce de détail, la manufacture, ou la logistique, nos outils de gestion en temps réel, nos analyses avancées et nos intégrations système vous permettront de gérer vos stocks de manière plus intelligente et efficiente. Faites confiance à notre expertise et à notre support dédié pour transformer votre gestion de stock et propulser votre entreprise vers de nouveaux sommets.</p>
            </div>
            <br>

            <div class=" mt-3 row g-4">
                <?php foreach ($typeService as $data):
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