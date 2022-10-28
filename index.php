<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rajasthan tourism</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/chat.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

    <header>

        <div id="menu-bar" class="fas fa-bars"></div>

        <a href="#" class="logo"><span>Rajasthan</span>tourism</a>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#book">book</a>
            <a href="#packages">packages</a>
            <a href="#services">services</a>
            <a href="#gallery">gallery</a>
            <a href="#review">review</a>
            <a href="#contact">contact</a>
        </nav>

    </header>



    <section class="home" id="home">

        <div class="content">
            <h3>Welcome to Rajasthan</h3>
            <p>discover new places with us, adventure awaits</p>
        </div>

        <div class="controls">
            <span data-src="image/rj.mp4"></span>
        </div>

        <div class="video-container">

            <video src="image/rj.mp4" id="video-slider" loop autoplay muted></video>
        </div>

    </section>



    <section class="book" id="book">

        <h1 class="heading">
            <span>b</span>
            <span>o</span>
            <span>o</span>
            <span>k</span>
            <span class="space"></span>
            <span>n</span>
            <span>o</span>
            <span>w</span>
        </h1>

        <div class="row">

            <div class="image">
                <img src="image/travel-logo.png" alt="">
            </div>

            <form action="booking.php" method="POST">
                <div class="inputBox">
                    <h3>where to</h3>
                    <input type="text" name="place" placeholder="place name" required>
                </div>
                <div class="inputBox">
                    <h3>how many</h3>
                    <input type="number" name="guest" placeholder="number of guests" required>
                </div>
                <div class="inputBox">
                    <h3>arrivals</h3>
                    <input type="date" name="arrival_date" required>
                </div>
                <div class="inputBox">
                    <h3>leaving</h3>
                    <input type="date" name="leaving_date" required>
                </div>
                <input type="submit" name="submit" class="btn" value="book now">
            </form>

        </div>

    </section>



    <section class="packages" id="packages">

        <h1 class="heading">
            <span>p</span>
            <span>a</span>
            <span>c</span>
            <span>k</span>
            <span>a</span>
            <span>g</span>
            <span>e</span>
            <span>s</span>
        </h1>

        <div class="box-container">

            <div class="box">
                <img src="image/mewar-light-sound1.jpg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> Jodhpur </h3>
                    <p>Udaipur, Mount Abu & Jodhpur 3 Nights & 4 Days Holiday Package</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> Rs20500 <span>Rs25000</span> </div>
                    <a href="#book" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <img src="image/jaipur_282.jpg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> Jaipur </h3>
                    <p>Jaipur Sightseeing Weekend Tour Package 2 Nights & 3 Days</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> Rs12000 <span>Rs15800</span> </div>
                    <a href="#book" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <img src="image/udaipur012.jpg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> Udaypur</h3>
                    <p>Best of Udaipur 3 Nights & 4 Days Tour Package</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> Rs13500 <span>Rs17500</span> </div>
                    <a href="#book" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <img src="image/chittorgarh-fort010.jpg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> Chitaurgarh </h3>
                    <p>Magical Udaipur, Kumbalgarh & Chittorgarh Tour 2 Nights & 3 Days</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> Rs17000 <span>Rs21000</span> </div>
                    <a href="#book" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <img src="image/MOUNT-ABU.jpg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> Mount Abu </h3>
                    <p>Mount Abu Weekend Tour Package 3 Nights & 4 Days</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price">Rs19000<span>Rs22000</span> </div>
                    <a href="#book" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <img src="image/Mehrangarh-jodhpur.jpg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> Jaislmer </h3>
                    <p>Royalty of Rajasthan: Tri-City Luxury Tour Package 6 Nights & 7 Days</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price">Rs32000 <span>Rs41000</span> </div>
                    <a href="#book" class="btn">book now</a>
                </div>
            </div>

        </div>

    </section>



    <section class="services" id="services">

        <h1 class="heading">
            <span>s</span>
            <span>e</span>
            <span>r</span>
            <span>v</span>
            <span>i</span>
            <span>c</span>
            <span>e</span>
            <span>s</span>
        </h1>

        <div class="box-container">

            <div class="box">
                <i class="fas fa-hotel"></i>
                <h3>affordable hotels</h3>
                <p>luxury villas set on 7-acres; this resort is a fresh breath of air away from pollution.Each of the villas has
                    a unique theme inspired by a flower,WiFi is available in all areas and is free of charge.</p>
            </div>
            <div class="box">
                <i class="fas fa-utensils"></i>
                <h3>food and drinks</h3>
                <p>Coffee house on site Fruits Wine/champagne Additional charge Breakfast in the room Kid-friendly
                    buffet kids meals Additional charge special diet menus(on request)</p>
            </div>
            <div class="box">
                <i class="fas fa-bullhorn"></i>
                <h3>safety & Security</h3>
                <p>Fire extinguishers,CCTV outside property,CCTV in common areas,Smoke alarms
                    Security alarm,Key card access,24-hour security,Safety deposit box.</p>
            </div>
            <div class="box">
                <i class="fas fa-hiking"></i>
                <h3>Outdoors</h3>
                <p>Picnic area,Outdoor furniture,Sun terrace,Terrace, Garden
                    BBQ facilities (Additional charge)</p>
            </div>

        </div>

    </section>



    <section class="gallery" id="gallery">

        <h1 class="heading">
            <span>g</span>
            <span>a</span>
            <span>l</span>
            <span>l</span>
            <span>e</span>
            <span>r</span>
            <span>y</span>
        </h1>

        <div class="box-container">

            <div class="box">
                <img src="image/UDAIPUR1.jpg" alt="">
                <div class="content">
                    <h3>Udaipur</h3>
                    <p>Udaipur, also known as the City of Lakes, is one of the most visited tourist places in Rajasthan</p>
                    <a href="https://www.holidify.com/places/udaipur" target="_blank" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="image/jaislmer2.jpg" alt="">
                <div class="content">
                    <h3>Jaisalmer</h3>
                    <p>Jaisalmer is a prominent tourist spot located in the northwestern state of Rajasthan in India.</p>
                    <a href="https://www.holidify.com/places/jaisalmer" target="_blank" target="_blank" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="image/JODHPUR3.jpg" alt="">
                <div class="content">
                    <h3>Jodhpur</h3>
                    <p>Jodhpur is the second-largest city in Rajasthan and the former capital of the Marwar region.</p>
                    <a href="https://www.holidify.com/places/jodhpur" target="_blank" target="_blank" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="image/bikenar4.jpg" alt="">
                <div class="content">
                    <h3>Bikenar</h3>
                    <p>Located in the midst of Thar Desert, Bikaner is a "cultural paradise and a traveller's haven".</p>
                    <a href="https://www.holidify.com/places/bikaner" target="_blank" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="image/Ranthambore5.jpg" alt="">
                <div class="content">
                    <h3>Ranthambore</h3>
                    <p>The Ranthambore Fort, built in the 10th century, stands tall over the entire National Park.</p>
                    <a href="https://www.holidify.com/places/ranthambore" target="_blank" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="image/Chittorgarh6.jpg" alt="">
                <div class="content">
                    <h3>Chittorgarh</h3>
                    <p>Chittorgarh Fort, the largest fort in India built on a hilltop, spreading over an area of around 700 acres.</p>
                    <a href="https://www.holidify.com/places/chittorgarh" target="_blank" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="image/Ajmer7.jpg" alt="">
                <div class="content">
                    <h3>Ajmer</h3>
                    <p>Apart from Ajmer Sharif Dargah and the Jain Temple, there are some other tourist attractions in Ajmer as well.</p>
                    <a href="https://www.holidify.com/places/ajmer" target="_blank" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="image/pushkar8.jpg" alt="">
                <div class="content">
                    <h3>Pushkar</h3>
                    <p>Known for the world's only dedicated Brahma temple, Pushkar is primarily a pilgrimage site for Hindus.</p>
                    <a href="https://www.holidify.com/places/pushkar" target="_blank" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="image/Jaipur09.jpg" alt="">
                <div class="content">
                    <h3>Jaipur</h3>
                    <p>Jaipur is the capital of the royal state of Rajasthan,Also called the Pink City.</p>
                    <a href="https://www.holidify.com/places/jaipur" target="_blank" class="btn">see more</a>
                </div>
            </div>

        </div>

    </section>



    <section class="review" id="review">

        <h1 class="heading">
            <span>r</span>
            <span>e</span>
            <span>v</span>
            <span>i</span>
            <span>e</span>
            <span>w</span>
        </h1>

        <div class="swiper-container review-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="box">
                        <img src="image/sriram.jpg" alt="">
                        <h3>Sriram sir</h3>
                        <p>Overall the trip was ok. However two points we want to highlight, 1) Mount Abu and Jodhpur hotels were not up to the mark. Even the Jaisalmer desert camp was very average. 2) We felt the hotels were overpriced as compared to the price for we paid. Not good value for money. Will think twice before booking. Udaipur boat ride as well as Jeep Safari in Sam dunes</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>
                <!-- <div class="swiper-slide">
                    <div class="box">
                        <img src="image/Bittu.jpg" alt="">
                        <h3>Bitu Sriwastva</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa adipisci quisquam sunt nesciunt
                            fugiat odit minus illum asperiores dolorum enim sint quod ipsam distinctio molestias
                            consectetur ducimus beatae, reprehenderit exercitationem!</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="swiper-slide">
                    <div class="box">
                        <img src="image/sriram.jpg" alt="">
                        <h3>Sriram sir</h3>
                        <p>Overall the trip was ok. However two points we want to highlight, 1) Mount Abu and Jodhpur hotels were not up to the mark. Even the Jaisalmer desert camp was very average. 2) We felt the hotels were overpriced as compared to the price for we paid. Not good value for money. Will think twice before booking. Udaipur boat ride as well as Jeep Safari in Sam dunes</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="swiper-slide">
                    <div class="box">
                        <img src="image/4455.jpeg" alt="">
                        <h3>Manish Shriwastva</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa adipisci quisquam sunt nesciunt
                            fugiat odit minus illum asperiores dolorum enim sint quod ipsam distinctio molestias
                            consectetur ducimus beatae, reprehenderit exercitationem!</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div> -->

            </div>

        </div>

    </section>



    <section class="contact" id="contact">

        <h1 class="heading">
            <span>c</span>
            <span>o</span>
            <span>n</span>
            <span>t</span>
            <span>a</span>
            <span>c</span>
            <span>t</span>
        </h1>

        <div class="row">
            <?php if (isset($_GET['mailsent']) && $_GET['mailsent'] == 1) {
                echo "Message Sent Successfully";
            } else {
                echo "";
            } ?>
            <div class="image">
                <img src="image/logoo.png" alt="">
            </div>

            <form action="contact.php" method="POST">
                <div class="inputBox">
                    <input type="text" placeholder="name" name="name" required>
                    <input type="email" placeholder="email" name="email" required>
                </div>
                <div class="inputBox">
                    <input type="number" placeholder="number" name="mobile" required>
                    <input type="text" placeholder="Destination" name="Destination" required>
                </div>
                <textarea placeholder="message" name="message" cols="30" rows="10" required></textarea>
                <input type="submit" name="submit" class="btn" value="send message">
            </form>

        </div>

    </section>


    <section class="brand-container">

        <div class="swiper-container brand-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="images/1.jpg" alt=""></div>
                <div class="swiper-slide"><img src="images/2.jpg" alt=""></div>
                <div class="swiper-slide"><img src="images/3.jpg" alt=""></div>
                <div class="swiper-slide"><img src="images/4.jpg" alt=""></div>
                <div class="swiper-slide"><img src="images/5.jpg" alt=""></div>
                <div class="swiper-slide"><img src="images/6.jpg" alt=""></div>
            </div>
        </div>

    </section>


    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>about us</h3>
                <p class="Paragraph-style">Rajasthan is one of the most popular tourist destinations in India, for both domestic and international tourists. Rajasthan attracts tourists for its historical forts, palaces, art and culture with its slogan "Padharo mhare desh", now its changed . Every third foreign tourist visiting India travels to Rajasthan as it is part of the Golden Triangle for tourists visiting India.</p>
            </div>
            <div class="box">
                <h3>branch locations</h3>
                <a href="#packages">Jodhpur</a>
                <a href="#packages">Jaipur</a>
                <a href="#packages">Udaypur</a>
                <a href="#packages">Chitaurgarh</a>
                <a href="#packages">Jodhpur</a>
                <a href="#packages">Jaislmer</a>
            </div>
            <div class="box">
                <h3>quick links</h3>
                <a href="#home">home</a>
                <a href="#book">book</a>
                <a href="#packages">packages</a>
                <a href="#services">services</a>
                <a href="#gallery">gallery</a>
                <a href="#review">review</a>
                <a href="#contact">contact</a>
            </div>
            <div class="box">
                <h3>follow us</h3>
                <a href="https://www.facebook.com/rajasthantourism/" target="_blank" rel="noopener noreferrer"><i class="fa fa-facebook" style="font-size:35px;color:dodgerblue;" id="Ficonss"></i></a>
                <a href="https://www.youtube.com/c/RajasthanTourismChannel" target="_blank" rel="noopener noreferrer"><i class="fa fa-youtube-play" style="font-size:35px;color:red;" id="iconss"></i></a>
                <a href="https://www.instagram.com/accounts/login/?next=%2Frajasthan_tourism%2F" target="_blank" rel="noopener noreferrer"><i class="fa fa-instagram" style="font-size: 35px;color:#cd486b"></i></a>
                <a href="https://in.linkedin.com/company/rajasthantourism" target="_blank" rel="noopener noreferrer"><i style="font-size:35px;color:cornflowerblue" class="fa">&#xf08c;</i></a>
            </div>

        </div>

        <a href="https://www.facebook.com/manishrajmanishsinha/" target="_blank"><h1 class="credit"> created by <span> Manish Shriwastva </span> </h1></a>

    </section>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script src="js/script.js"></script>
    <div class="chat-bar-collapsible">
        <button id="chat-button" type="button" class="collapsible">Chat with us!
            <i id="chat-icon" style="color: #fff;" class="fa fa-fw fa-comments-o"></i>
        </button>

        <div class="content-chat">
            <div class="full-chat-block">
                <div class="outer-container">
                    <div class="chat-container">
                        <div id="chatbox">
                            <h5 id="chat-timestamp"></h5>
                            <p id="botStarterMessage" class="botText"><span>Loading...</span></p>
                        </div>

                        <div class="chat-bar-input-block">
                            <div id="userInput">
                                <input id="textInput" class="input-box" type="text" name="msg" placeholder="Enter your message">
                                <p></p>
                            </div>

                            <div class="chat-bar-icons">
                                <i id="chat-icon" style="color: crimson;" class="fa fa-fw fa-heart" onclick="heartButton()"></i>
                                <i id="chat-icon" style="color: #333;" class="fa fa-fw fa-send" onclick="sendButton()"></i>
                            </div>
                        </div>

                        <div id="chat-bar-bottom">
                            <p></p>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/responses.js"></script>
    <script src="js/chat.js"></script>
</body>

</html>