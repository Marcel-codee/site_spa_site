    <!-- Service Start -->
    <div class="container-fluid container-service py-5">
        <div class="container py-5">
        <div class="text-center bg-white p-5  col-md-10 mx-auto wow fadeInUp" data-wow-delay="0.1s" >
                <h1 class="display-6 mb-3">Découvrez nos Formations </h1>
                <p class="mb-5 fs-5">Chez [Nom de votre entreprise], nous proposons des formations complètes et personnalisées pour vous aider à maîtriser les compétences en informatique essentielles pour une reconversion professionnelle réussie. Nos cours couvrent une vaste gamme de sujets, notamment la suite Microsoft Office, les langages de programmation tels que Python, Java et C++, ainsi que les bases de données et le développement web. Que vous soyez débutant ou utilisateur avancé, nos experts vous guideront à travers chaque étape, assurant une adoption fluide des technologies et une utilisation optimale des outils informatiques. Investissez dans la formation avec [Nom de votre entreprise] et donnez à votre équipe les moyens de transformer leur carrière grâce à des compétences informatiques avancées et pertinentes pour le marché du travail d'aujourd'hui.</p>
            </div>
            <div class="row g-4">
                <?php foreach ($tab as $data):
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