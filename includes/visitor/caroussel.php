<!-- Carousel Start -->
<div class="container-fluid header-carousel px-0 mb-5">
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="2000">
        <div class="carousel-inner">
            <?php foreach($listArticle as $i => $article): ?>
                <div class="carousel-item <?php if($i==0) echo 'active'  ?>">
                    <img class="w-100" src="<?php echo htmlspecialchars($article['Image']); ?>" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-7 text-start">
                                    <h1 class="display-1 text-white animated slideInRight mb-3"><?=$article['Titre']?></h1>
                                    <p class="mb-5 animated slideInRight"><?=$article['Contenu']?></p>
                                    <a href="" class="btn btn-primary py-3 px-5 animated slideInRight">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>    
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<!-- Carousel End -->