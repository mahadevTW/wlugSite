<?php
include "header.html";
?>

<section class="tiles" id="courses">
    <div class="inner">

        <div class="intro">
            <h3 style="font-family: 'Lobster', cursive; color: teal;font-size: xx-large">Welcome To WLUG</h3>
        </div><!-- end div.intro -->
        <!--cara-->	<div class="container" style="height:500px;width:960px;">
            <div id="myCarousel"class="carousel slide">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">
                    <div class="item active">
                        <img src="img/rsz_wce_sangli_campus.jpg" class="img-responsive">
                        <div class="carousel-caption">
                            <h1>Walchand College Of Engineering,Sangli</h1>
                            <p></p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="img/rsz_mm1.jpg" class="img-responsive" style="height:400px;width:960px;">
                    </div>
                    <div class="item">
                        <img src="img/rsz_about-image.jpg" class="img-responsive">
                    </div>
                </div>

                <div class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="icon-prev"></span></div>


                <div class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="icon-next"></span>
                </div>
            </div>
        </div>


        <!--end carasual-->

        <h3 style="font-family: 'Lobster', cursive; color: teal;font-size: xx-large">Metamorphosis 2015-16</h3>

        <div class="grid">
            <div class="col-1-3">

                <div class="tile ">
                    <div class="courseimage" style="background-image:url(img/python.jpg)">
                        <a href="py.html">&nbsp;</a>					</div>
                    <div class="courseicon" style="background-image:url(index4.jpeg)">

                    </div>
                    <div class="courseinner">

                        <h5>Python</h5>

                        <div class="coursemeta"></div><!-- end .coursemeta -->
                        <p>Welcome to Python,Python is a widely used general-purpose, high-level programming language.Its design philosophy emphasizes code <a href="py.html">&nbsp;<img src="img/learn.png" alt="learn more" style="width:100px;height:30px;border:0"></a></p>

                    </div><!-- end .courseinner -->

                </div><!-- end.tile -->

            </div><!-- end .col-1-3 -->

            <div class="col-1-3">

                <div class="tile ">
                    <div class="courseimage" style="background-image:url(10.jpeg)">
                        <a href="shell.html">&nbsp;</a>					</div>
                    <div class="courseicon" style="background-image:url(images1.png)">
                    </div>
                    <div class="courseinner">
                        <h5>Shell</h5>
                        <div class="coursemeta"></div><!-- end .coursemeta -->
                        <p>Welcome to Shell Scripting,Shell Scripting is a Environment provided for the user interaction with kernel,it is command line Interpreter<a href="shell.html">&nbsp;<img src="img/learn.png" alt="learn more" style="width:100px;height:30px;border:0"></a> </p>
                    </div><!-- end .courseinner -->
                </div><!-- end.tile -->
            </div><!-- end .col-1-3 -->
            <div class="col-1-3">

                <div class="tile ">
                    <div class="courseimage" style="background-image:url(img/uck.jpg)">
                    </div>
                    <div class="courseicon" style="background-image:url(index3.png)">

                    </div>
                    <div class="courseinner">

                        <h5><a">Ubuntu Custamization</a></h5>

                        <div class="coursemeta"></div><!-- end .coursemeta -->
                        <p>Welcome to UCK,UCK is a tool that helps you customizing official Ubuntu Live CDs (including Kubuntu/Xubuntu)to your needs.<a href="uck.html">&nbsp;<img src="img/learn.png" alt="learn more" style="width:100px;height:30px;border:0"></a></p>

                    </div><!-- end .courseinner -->

                </div><!-- end.tile -->

            </div><!-- end .col-1-3 -->



        </div><!-- end .grid -->

    </div><!-- end .inner -->

</section>
    <---><section id="intro_a1" style="margin-top:-30px;">
    <div class="intro_copy">

        <h2>Techno-Tweet Coming Soon</h2>
        <p>Let's Explore Various Web Technologies Boooming in market</p>

        <a href="registration.html" class="button">Registration </a>

    </div>

</section>

<?php
include "footer.html";
?>