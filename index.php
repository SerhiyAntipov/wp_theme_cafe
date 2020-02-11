<?php
get_header();
?>
<section class="about container" id="about-us">
<h2>About Us</h2>
<div class="row">
    <div class="col-sm-12	col-md-7">
        <div class="about__text">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste reiciendis, nihil veritatis
                dignissimos repellat labore?</p>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus quidem ut tempore
                excepturi accusantium optio quo exercitationem fuga, error quibusdam at. Quo modi nam veniam
                dignissimos ad quis ea earum. Totam, nulla voluptatum blanditiis iste repellendus enim
                delectus! Magni, soluta. Velit, delectus quidem nobis est iusto voluptatum, quibusdam quae
                placeat harum maiores, odit quasi voluptas! Delectus distinctio, odit itaque nihil nulla
                praesentium, quasi quod error explicabo beatae alias voluptate doloremque?</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus eum cum impedit
                consequuntur dolore delectus nobis ipsa! Ex, cupiditate dolorem!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum amet, sunt libero adipisci
                molestias, repellendus nihil inventore ullam accusamus a praesentium at quasi iure numquam
                voluptas vel ea facilis blanditiis! Provident, consequuntur. Placeat accusantium excepturi
                obcaecati, suscipit quae repellendus minima!</p>
        </div>
    </div>
    <div class="col-sm-8 offset-sm-2 col-md-5 offset-md-0">
        <div class="about__contacts">
            <h4>Contacts</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus, quisquam earum?</p>
            <h4>ADDRESS:</h4>
            <p class="p-lite">17 Awesome Street, Belgrade</p>
            <p class="p-lite">SR 877900 <a class="popup-modal btn-small" href="#test-modal">View Map</a></p>
            <h4>OPENING HOURS:</h4>
            <div class="about__contacts-open">
                <p class="p-lite">Monday-Friday<span></span>8:00am-11:00pm</p>
                <p class="p-lite">Saturday-Sunday<span></span>8:00am-10:00pm</p>
            </div>
            <a href="#reservations" class="btn btn-transparent">Table Reservation</a>
        </div>
    </div>
</div>
</section>
<section class="best-price">
<h2>Best Price</h2>
<div class="container">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, quo magni, exercitationem delectus ab
        enim voluptate placeat ullam fugiat veritatis dolor sequi aliquid culpa cum animi in harum non sed
        voluptatum velit unde, tempore voluptates.</p>
    <div class="price-slider">
    <?php echo do_shortcode('[slick-carousel-slider design="design-6" slidestoshow="5" image_size="medium" limit="10" category="4" autoplay="false" slidestoscroll="3"]'); ?>
      
            <!-- BEST PRICE SLIDER render js -->
        <!-- <div class="price-slider__slide">
            <img src="img/price-slider/img_01.jpg" alt="price-slider_01 img">
            <div class="price-slider__text-container">
                <button class="btn btn-small">Read More</button>
                <p>Crispy duck salad</p>
                <h4 class="price-slider__sub-title">$5.50</h4>
            </div>-->
    </div>
</div>
</section>
<section class="our-menu" id="our-menu">
    <div class="container">
        <h2>Our Menu</h2>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente dolore, debitis veritatis iste
            voluptatibus, labore alias autem eum quasi ratione qui ipsum deserunt nesciunt velit! Sapiente
            perspiciatis aliquid dignissimos molestias?</p>
        <ul class="our-menu__list">
            <!-- OUR MENU CATEGOTY render js -->
            <!-- <li class="our-menu__category-title active">
                mains
            </li> -->
        </ul>
        <div class="our-menu__category">
            <div class="our-menu__category-wrapper">
                <!-- OUR MENU LIST render js -->
                <!-- <div class="food__wrapper">
                    <div class="food_info">
                        <h4 class="food__title">Keralan sweet potato curry</h4>
                        <p class="food__sub-title p-lite">
                            Choy sum, broccoli, coriander and coconut with steamed jasmine rice <span></span>
                        </p>
                    </div>
                    <p class="food__price">$14.25</p>
                </div> -->
            </div>
        </div>
        <button class="btn">View All Menu</button>
    </div>
</section>
<section class="reservations" id="reservations">
    <div class="container">
        <h2>Book a Table</h2>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Recusandae nobis voluptas corrupti iste
            deleniti eos quia exercitationem et nesciunt, aut similique at veritatis autem architecto modi
            laudantium. Delectus libero, eligendi natus ipsum, est et repellendus neque in voluptatibus,
            accusantium distinctio?.</p>
        <!-- <form action="https://formspree.io/firstasv@gmail.com" method="POST" name="book-form" id="book-form"> -->
        <form action="index.html" method="GET" name="book-form" id="book-form">
            <div class="form-section-wrapper">
                <div class="form-first-row">
                    <label class="book-form__user-name">
                        <span>Name</span>
                        <input type="text" name="book-name" placeholder="Your name" required="">
                    </label>
                    <label class="book-form__user-phone">
                        <span>Phone</span>
                        <input type="text" class="book-tel" name="book-tel" placeholder="+380509172020"
                            required="">
                    </label>
                </div>
                <div class="form-second-row">
                    <label class="book-form__date">
                        <span>Date</span>
                        <input class="book-date" type="date" name="book-date" min="2020-01-01" max="2021-01-01"
                            required="">
                    </label>
                    <label class="book-form__time">
                        <span>Time</span>
                        <input class="book-time" type="time" name="book-time" value="09:00" min="09:00"
                            max="19:00" required="">
                    </label>
                    <label class="book-form__number-people">
                        <span>People</span>
                        <select name="book-table" size="1">
                            <option selected value="people-1">1 People</option>
                            <option value="people-2">2 People</option>
                            <option value="people-3">3 People</option>
                            <option value="people-4">4 People</option>
                        </select>
                    </label>
                </div>
            </div>
            <button class="btn book-form-btn" type="submit" form="book-form">Book Table</button>
        </form>
    </div>
</section>
<section class="collage">
    <h2>Photo Gallery</h2>
    <div class="container">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae aliquid explicabo minus
            exercitationem sapiente, recusandae facilis aliquam reprehenderit dolor qui quasi. Ipsa cupiditate
            nesciunt sequi pariatur commodi perspiciatis natus quod accusantium enim alias? Amet, quasi.</p>
        <div class="popup-gallery">
            <!-- PHOTO GALLERY render js -->
            <!-- <a href="img/photo-gallery/collage_01.jpg" title="Cafe 'Name'"><img
                    src="img/photo-gallery/collage_01.jpg" alt="img Cafe"></a> -->
        </div>
        <button class="btn swipe-all">Swipe All Photo</button>
    </div>
</section>
<?php
get_footer();
?>