<!-- banner in -->
<div class="row">

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
        


<?php include_once "./carousel.php" ;?>


    



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
                    $news = $News->all(["sh" => 1]);

                    foreach ($news as $new) {
                        echo "<li>" . "<a href='#'>" . mb_substr($new['text'], 0, 50) . "...</a>" . "</li>";
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