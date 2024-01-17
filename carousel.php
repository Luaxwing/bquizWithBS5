<div class="myCarousel">
    <!-- carousel -->
    <div id="carouselExampleInterval" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <!-- carousel-img -->
            <div class="row">
                <div class="col">
                    <div class="cal-mask"></div>
                </div>
                <div class="col-8">

                    <!-- SAMPLE -->

                    <!-- <div class="carousel-item active" data-bs-interval="3000">
                        <img src="./img/01D01.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <img src="./img/01D02.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <img src="./img/01D03.jpg" class="d-block w-100" alt="...">
                    </div> -->


                    <!--  -->

                    <?php
                    $imgs = $Img->all(['sh' => 1]);
                    foreach ($imgs as $idx => $img) {


                        ?>
                        <div class="carousel-item <?=($idx==0)?"active":""?>" data-bs-interval="3000">
                            <img src="./img/<?=$img['img']?>" class="d-block w-100" alt="...">
                        </div>
                        <?php
                    }
                    ?>
                </div>
                <div class="col">
                    <div class="cal-mask"></div>
                </div>
            </div>
        </div>

        <!-- carousel-img ED -->
        <button class="carousel-control-prev myCarouselBtn" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next myCarouselBtn" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- carousel ED -->
</div>