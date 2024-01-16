 <!-- banner in -->
 <div class="row" >
        
        <div class="col banner-sub"></div>
        <div class="col banner-col">
            <a href="./testdb.php" class="banner">
                <img src="./img/01B04.jpg" alt="" width="100%">
                <div class="mask"></div>
            </a>
        </div>
        <div class="col banner-sub"></div>
        
    </div>

        <div class="topBtn">
            <div class="topBtn2" onclick="location.href='#'">
                TOP
            </div>
        </div>


    <!-- banner end -->


    <br>


    <!-- main -->
    <div class="container">
        <div class="main">

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
                                <div class="carousel-item active" data-bs-interval="3000">
                                    <img src="https://picsum.photos/id/237/300/200" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item" data-bs-interval="3000">
                                    <img src="https://picsum.photos/id/238/300/200" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item" data-bs-interval="3000">
                                    <img src="https://picsum.photos/id/239/300/200" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <div class="col">
                                <div class="cal-mask"></div>
                            </div>
                        </div>
                    </div>

                    <!-- carousel-img ED -->
                    <button class="carousel-control-prev myCarouselBtn" type="button"
                        data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next myCarouselBtn" type="button"
                        data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <!-- carousel ED -->
            </div>




            <!-- c-img here -->
            <div class="row newss" id="news">
                <div class="col news1">
                    <!-- news here -->
                    
                    <!-- <span class="text-news">
                        <ol>
                            <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</li>
                            <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</li>
                            <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</li>
                            <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</li>
                            <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</li>
                        </ol>
                    </span> -->
                    <div class="newsmt">

                        <div class="row border">
                            <div class="col-6"><img src="https://picsum.photos/id/237/200/200" alt=""></div>
                            <div class="col-6">Lorem ipsum dolor sit amet.</div>
                        </div>
                        <div style="width:100%;height: 20px;">

                        </div>
                        <div class="row border">
                            <div class="col-6"><img src="https://picsum.photos/id/237/200/200" alt=""></div>
                            <div class="col-6">Lorem ipsum dolor sit amet.</div>
                        </div>

                    </div>
                    <!--  -->
                </div>
                <div class="col ani-img">
                    <img src="./img/01C03.gif" alt="" srcset="" width="500px;" ;>
                </div>
            </div>

            <!-- ani-img here -->




            <div class="contant">
                <!-- news here -->
                <span class="text-news">
                    <ol>

                    <?php  
$news=$News->all(["sh"=>1]);

                    foreach($news as $new){
                        echo "<li>"."<a href='#'>".mb_substr($new['text'],0,50)."...</a>"."</li>";
                    }
                    
                    ?>
                        <!-- <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</li>
                        <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</li>
                        <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</li>
                        <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</li>
                        <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</li> -->
                    </ol>
                </span>
                <!--  -->
            </div>






        </div>
    </div>

    <!-- main -->