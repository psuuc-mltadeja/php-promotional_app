<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sad</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <header class="header">
        <div id="menu-btn" class="fas fa-bars"></div>
        <a href="#" data-aos="zoom-in-left" data-aos-delay="150" class="logo" style="text-decoration: none;"> <span>T</span>aste<span>T</span>ravels</a>
        <nav class="navbar">
            <a href="#home" data-aos="zoom-in-left" data-aos-delay="300">Home</a>
            <a href="#about" data-aos="zoom-in-left" data-aos-delay="450">About</a>
            <a href="#services"data-aos="zoom-in-left" data-aos-delay="600">destination</a>
            <a href="#gallery" data-aos="zoom-in-left" data-aos-delay="750">Gallery</a>
            <a href="#destination" data-aos="zoom-in-left" data-aos-delay="900"></a>
            <a href="#blogs" data-aos="zoom-in-left" data-aos-delay="1050">blogs</a>
        </nav>

    
        <a href="../login.php" class="btn" data-aos="zoom-in-left" data-aos-delay="1200" style="text-decoration: none;">Login</a>

    </header>
    <!-- home start-->

    <section class="home" id="home">
        <div class="content">
            <span data-aos="fade-up" data-aos-delay="150" > Let's Start</span>
            <h3 data-aos="fade-up" data-aos-delay="300"  id="randomText">
               
            </h3>
           <!--    <p data-aos="fade-up" data-aos-delay="450">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, natus ratione tenetur libero minus error id autem dolor consectetur doloremque, fugit mollitia maiores
            </p> -->
          
        </div>


    </section>
     <!-- home end-->
      <!-- booking start

      <section class="book-form" id="book-form">

        <form action="#">

            <div class="inputBox" data-aos="zoom-in" data-aos-delay="150">

                <span>you are planning?</span>
                <input type="text" placeholder="destination">
            </div>
            <div class="inputBox" data-aos="zoom-in" data-aos-delay="300">

                <span>when looking for?</span>
                <input type="date" placeholder="destination">
            </div>
            <div class="inputBox" data-aos="zoom-in" data-aos-delay="450">

                <span>Total members</span>
                <input type="text" placeholder="no of traverlers">
            </div>
            
            <input type="submit" value="fin now" data-aos="zoom-in" data-aos-delay="600" class="btn">


        </form>
      </section> -->
       <!-- bo0king end-->

        <!-- about start-->
        <section class="about" id="about">
            <div class="video-container" data-aos="fade-right" data-aos-delay="300">
                <video src="images/cities.mp4" loop class="video"  controls></video>
            </div>
            <div class="content" data-aos="fade-left" data-aos-delay="600"> 
                <span>Cities  of</span>
                <h3>Pangasinan</h3>
                <p>
                    Pangasinan, a province in the Philippines, boasts four vibrant cities: Dagupan, Alaminos, Urdaneta, and San Carlos. Dagupan is renowned as the "Bangus (Milkfish) Capital of the Philippines" and hosts the annual Bangus Festival. Alaminos is home to the stunning Hundred Islands National Park, offering picturesque beaches and rich marine life. Urdaneta serves as a thriving commercial and transportation hub, while San Carlos thrives in agriculture, particularly rice and corn production, and offers eco-tourism attractions like the Malacañang of the North and Asin Hot Springs.
                </p>
              
            </div>

        </section>

         <!-- sbout end-->

           <!-- services start-->
           <section class="services" id="services">
            <div class="heading" >
                <span>The Four Cities of</span>
                <h1 style="margin-bottom: 2rem;">Pangasinan</h1>
            </div>

            <div class="box-container">
             <!--    <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
                    <i class="fas fa-globe"></i>
                    <h3>worldwide</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil dolorum numquam minima velit non voluptatibus iste cum dolorem explicabo nulla!</p>
                </div>
                <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
                    <i class="fas fa-hiking"></i>
                    <h3>adventure </h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil dolorum numquam minima velit non voluptatibus iste cum dolorem explicabo nulla!</p>
                </div> -->
                <div class="box" data-aos="zoom-in-up" >
                  
                    <h3>Dagupan City</h3>
                    <p>
                        <img src="images/dagupan.jpeg" alt="" width="100%" style="border-radius: 10px;">
                    </p>
                </div>


                <div class="box" data-aos="zoom-in-up" style="border-radius: 10px;">
                    <h3>Alaminos City</h3>
                    <p>
                        <img src="images/alaminos.jpg" alt="" width="100%" style="border-radius: 10px;">
                    </p>
                </div>
            </div> 
            
            <div class="box-container">
                <div class="box" data-aos="zoom-in-up" data-aos-delay="7">
                    <h3>San Carlos City</h3>
                    <p>
                        <img src="images/sancarlos.jpg" alt="" width="100%" style="border-radius: 10px;">
                    </p>
                </div>
                <div class="box" data-aos="zoom-in-up" data-aos-delay="7">
                    <h3>Urdaneta City</h3>
                    <p>
                        <img src="images/Urdaneta-City.jpg" alt="" width="100%" style="border-radius: 10px;">
                    </p>
                </div>
      
            </div>
           </section>

            <!-- services end-->
             <!--destination start
             <section class="destination" id="destination">
                <div class="heading">
                    <span>our destination</span>
                    <h1>keep looking up</h1>
                </div>
                <div class="box-container">
                    <div class="box" data-aos="fade-up" data-aos-delay="150">
                        <div class="image">
                            <img src="Dagupan_Pangasinan_1.jpg" alt="" >
                        </div>
                        <div class="content">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum quod cum cumque ratione architecto? Quae fugiat temporibus cum rerum possimus.
                            </p>
                            <a href="" style="text-decoration: none;">read more <i class="fas fa-angle-right"></i></a>

                        </div>
                    </div>
                    <div class="box" data-aos="fade-up" data-aos-delay="300">
                        <div class="image">
                            <img src="Dagupan_Pangasinan_1.jpg" alt="" >
                        </div>
                        <div class="content">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum quod cum cumque ratione architecto? Quae fugiat temporibus cum rerum possimus.
                            </p>
                            <a href="" style="text-decoration: none;">read more <i class="fas fa-angle-right"></i></a>

                        </div>
                    </div>
                    <div class="box" data-aos="fade-up" data-aos-delay="450">
                        <div class="image">
                            <img src="Dagupan_Pangasinan_1.jpg" alt="" >
                        </div>
                        <div class="content">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum quod cum cumque ratione architecto? Quae fugiat temporibus cum rerum possimus.
                            </p>
                            <a href="" style="text-decoration: none;">read more <i class="fas fa-angle-right"></i></a>

                        </div>
                    </div>
                    <div class="box" data-aos="fade-up" data-aos-delay="600">
                        <div class="image">
                            <img src="Dagupan_Pangasinan_1.jpg" alt="" >
                        </div>
                        <div class="content">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum quod cum cumque ratione architecto? Quae fugiat temporibus cum rerum possimus.
                            </p>
                            <a href="" style="text-decoration: none;">read more <i class="fas fa-angle-right"></i></a>

                        </div>
                    </div>
                    <div class="box" data-aos="fade-up" data-aos-delay="750">
                        <div class="image">
                            <img src="Dagupan_Pangasinan_1.jpg" alt="" >
                        </div>
                        <div class="content">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum quod cum cumque ratione architecto? Quae fugiat temporibus cum rerum possimus.
                            </p>
                            <a href="" style="text-decoration: none;">read more <i class="fas fa-angle-right"></i></a>

                        </div>
                    </div>
                    <div class="box" data-aos="fade-up" data-aos-delay="900">
                        <div class="image">
                            <img src="Dagupan_Pangasinan_1.jpg" alt="" >
                        </div>
                        <div class="content">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum quod cum cumque ratione architecto? Quae fugiat temporibus cum rerum possimus.
                            </p>
                            <a href="" style="text-decoration: none;">read more <i class="fas fa-angle-right"></i></a>

                        </div>
                    </div>
                    <div class="box" data-aos="fade-up" data-aos-delay="1050">
                        <div class="image">
                            <img src="Dagupan_Pangasinan_1.jpg" alt="" >
                        </div>
                        <div class="content">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum quod cum cumque ratione architecto? Quae fugiat temporibus cum rerum possimus.
                            </p>
                            <a href="" style="text-decoration: none;">read more <i class="fas fa-angle-right"></i></a>

                        </div>
                    </div>
                    <div class="box" data-aos="fade-up" data-aos-delay="1200">
                        <div class="image">
                            <img src="Dagupan_Pangasinan_1.jpg" alt="" >
                        </div>
                        <div class="content">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum quod cum cumque ratione architecto? Quae fugiat temporibus cum rerum possimus.
                            </p>
                            <a href="" style="text-decoration: none;">read more <i class="fas fa-angle-right"></i></a>

                        </div>
                    </div>

                </div>




             </section>
             destination end-->

                <!-- gallery start-->
                <section class="gallery" id="gallery">
                    <div class="heading">
                        <span>Dagupan Gallery</span>
                        <h1>Tourist Attractions</h1>

                    </div>
                    <div class="box-container">
                        <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
                            <img src="images/Tondaliganbeach.jpg" alt="">
                            <span>DAGUPAN</span>
                            <h3>Tondaligan</h3>
                        </div>
                        <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
                            <img src="images/dawel.jpg" alt="">
                            <span>DAGUPAN</span>
                            <h3>Dawel River</h3>
                        </div>
                        <div class="box" data-aos="zoom-in-up" data-aos-delay="450">
                            <img src="images/dagupan_church.jpg" alt="">
                            <span>DAGUPAN</span>
                            <h3> St. John The Evangelist Cathedral</h3>
                        </div>
                     
                    
                    </div>
                    <div class="heading">
                        <span>Alaminos gallery</span>
                        <h1>Tourist Attractions</h1>

                    </div>
                    <div class="box-container">
                        <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
                            <img src="images/hundred.png" alt="">
                            <span>ALAMINOS</span>
                            <h3>Hundred Island</h3>
                        </div>
                        <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
                            <img src="images/Christ.png" alt="">
                            <span>ALAMINOS</span>
                            <h3>Hundred Island</h3>
                        </div>
                        <div class="box" data-aos="zoom-in-up" data-aos-delay="450">
                            <img src="images/stjoseph.jpg" alt="">
                            <span>ALAMINOS</span>
                            <h3>Cathedral of St Joseph the Patriarch</h3>
                        </div>
                     
                    
                    </div>
                    <div class="heading">
                        <span>San Carlos Gallery</span>
                        <h1>Tourist Attractions</h1>

                    </div>
                    <div class="box-container">
                        <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
                            <img src="images/San_Carlos_Pangasinan.jpg" alt="">
                            <span>SAN CARLOS</span>
                            <h3>San Carlos City Plaza</h3>
                        </div>
                        <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
                            <img src="images/62_big.jpg" alt="">
                            <span>SAN CARLOS</span>
                            <h3>San Carlos City Plaza</h3>
                        </div>
                        <div class="box" data-aos="zoom-in-up" data-aos-delay="450">
                            <img src="images/Church_of_San_Carlos_City_Pangasinan.jpg" alt="">
                            <span>SAN CARLOS</span>
                            <h3>Minor Basilica of Saint Dominic</h3>
                        </div>
                     
                    
                    </div>
                    <div class="heading">
                        <span>Urdaneta Gallery</span>
                        <h1>Tourist Attractions</h1>

                    </div>
                    <div class="box-container">
                        <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
                            <img src="images/urdaneta-city hall.jpg" alt="">
                            <span>URDANETA</span>
                            <h3>Urdaneta City Hall</h3>
                        </div>
                        <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
                            <img src="images/Urdaneta-City-landmark-carabao-sculpture.jpg" alt="">
                            <span>URDANETA</span>
                            <h3>A Giant Carabao Sculpture</h3>
                        </div>
                        <div class="box" data-aos="zoom-in-up" data-aos-delay="450">
                            <img src="images/church_urda.jpg" alt="">
                            <span>URDANETA</span>
                            <h3>Cathedral of Our Lady of the Immaculate Conception</h3>
                        </div>
                     
                    
                    </div>

                

                </section>
                 <!--review start

                 

                 <section class="review">

                    <div class="box-container" data-aos="fade-right" data-aos-delay="300">
                        <div class="box">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi ex nostrum deserunt perferendis nemo sint tempore quis, culpa doloremque optio.

                            </p>
                            <div class="user">
                                <img src="Dagupan_Pangasinan_1.jpg" alt="">
                                <div class="info">
                                    <h3>john doe</h3>
                                    <span>designer</span>
                                </div>
                            </div>

                        </div>
                        <div class="box">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi ex nostrum deserunt perferendis nemo sint tempore quis, culpa doloremque optio.

                            </p>
                            <div class="user">
                                <img src="Dagupan_Pangasinan_1.jpg" alt="">
                                <div class="info">
                                    <h3>john doe</h3>
                                    <span>designer</span>
                                </div>
                            </div>

                        </div>
                        <div class="box">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi ex nostrum deserunt perferendis nemo sint tempore quis, culpa doloremque optio.

                            </p>
                            <div class="user">
                                <img src="Dagupan_Pangasinan_1.jpg" alt="">
                                <div class="info">
                                    <h3>john doe</h3>
                                    <span>designer</span>
                                </div>
                            </div>

                        </div>
                        <div class="box">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi ex nostrum deserunt perferendis nemo sint tempore quis, culpa doloremque optio.

                            </p>
                            <div class="user">
                                <img src="Dagupan_Pangasinan_1.jpg" alt="">
                                <div class="info">
                                    <h3>john doe</h3>
                                    <span>designer</span>
                                </div>
                            </div>

                        </div>





                    </div>
                    <div class="content" data-aos="fade-left" data-aos-delay="600">
                        <span>testimonials</span>
                        <h3>good news from our clients</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis atque aspernatur eius doloremque aperiam, consequatur nemo minus eos ad tempora?</p>


                    </div>

                 </section>
                  review end

                -->
                  
                    <!--banner start-->
                    <div class="banner">
                        <div class="content" data-aos="zoom-in-up" data-aos-delay="300">
                            <span>start your adventure</span>
                            <h3>let us discover the beauty of Pangasinan</h3>
                          <!--      <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio itaque aliquam quibusdam quos voluptatibus, sapiente odit molestiae tenetur placeat in.
                            </p>
                            <a href="#book-form" class="btn"> book now</a> -->
                        </div>
                    </div>
                      <!--banner end-->

                       <!--blogs start-->
                       <section class="blogs" id="blogs">
                        <div class="heading">
                            <span>our blogs</span>
                            <h1 id="randomText"></h1>

                            
                        </div>
                        <div class="box-container">
                            <div class="box" data-aos="fade-up" data-aos-delay="150">
                                
                                <div class="content">
                                    <a href="#" class="link">Dagupan City: A Coastal Gem</a>
                                    <p>Dagupan City, known as the "Bangus Capital of the Philippines," is renowned for its thriving fishing industry and mouthwatering seafood delicacies. Immerse yourself in the city's history at the Dagupan City Museum, visit the historic St. John the Evangelist Cathedral, and indulge in the freshest seafood at the Dagupan Fish Market. Don't forget to take a leisurely stroll along the picturesque Tondaligan Blue Beach, where you can relax, soak up the sun, and enjoy the serene coastal ambiance.</p>
                                    <div class="icon">
                                        <a href="" class=""> <i></i> </a>
                                        <a href="" class=""> <i></i></a>
                                    </div>
                                </div>

                            </div>
                            <div class="box" data-aos="fade-up" data-aos-delay="150">
                                
                                <div class="content">
                                    <a href="#" class="link">Urdaneta City: Gateway to Northern Luzon</a>
                                    <p>Urdaneta City serves as a gateway to Northern Luzon and offers a perfect blend of urban convenience and rural charm. Explore the Urdaneta Cultural and Sports Complex, where you can witness traditional Filipino dances and immerse yourself in the local culture. Visit the Urdaneta City Museum, which showcases artifacts and exhibits that depict the city's history and heritage. For nature lovers, a visit to the stunning Balungao Hilltop Adventure is a must, where you can enjoy adrenaline-pumping activities like zip-lining and trekking amidst lush greenery..</p>
                                    <div class="icon">
                                        <a href="" class=""> <i></i> </a>
                                        <a href="" class=""> <i></i></a>
                                    </div>
                                </div>

                            </div>
                            <div class="box" data-aos="fade-up" data-aos-delay="300">
                             
                                <div class="content">
                                    <a href="#" class="link">Alaminos City: Home of the Hundred Islands</a>
                                    <p>Alaminos City is famous for its main attraction, the Hundred Islands National Park. Embark on an island-hopping adventure and explore the breathtakingly beautiful limestone formations, crystal-clear waters, and vibrant marine life. Discover caves, swim in secluded lagoons, and indulge in thrilling water activities like snorkeling and kayaking. Don't miss the opportunity to hike up Governor's Island for a panoramic view of the surrounding islands.</p>
                                    <div class="icon">
                                    <a href="" class=""> <i></i> </a>
                                        <a href="" class=""> <i></i></a>
                                    </div>
                                </div>

                            </div>
                            <div class="box" data-aos="fade-up" data-aos-delay="450">
                             
                                <div class="content">
                                    <a href="#" class="link">San Carlos City: Land of Mangoes and Festivals</a>
                                    <p>San Carlos City, known as the "Mango-Basket of the Philippines," is renowned for its sweet and succulent mangoes. Visit the Mango-Bamboo Festival, held annually in March, to celebrate the city's abundant mango harvest. Explore the stunning San Carlos City Plaza and marvel at its beautiful fountain and vibrant surroundings. For nature enthusiasts, a trip to the San Carlos City Adventure Park offers thrilling activities like ziplining, wall climbing, and rappelling.</p>
                                    <div class="icon">
                                    <a href="" class=""> <i></i> </a>
                                        <a href="" class=""> <i></i></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>

                  
                      <!--   blogs end-->

                        <!--   footer start-->
                        <section class="footer">
                            <div class="box-container">
                                <div class="box" data-aos="fade-up" data-aos-delay="150">
                                    <a href="#" class="logo"> <span>T</span>aste <span>T</span>ravels</a>
                                    <p>Discovering the Flavors of Pangasinan: A Web Application Promoting Local Vendors and Food Delicacies</p>
                                    <div class="share">
                                        <a href="https://web.facebook.com/profile.php?id=100093810634359" class="fab fa-facebook-f"></a>
                                       
                                        <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Finstagram.com%2Ftast_etravels%3Figshid%3DZGUzMzM3NWJiOQ%253D%253D%26fbclid%3DIwAR1yh6cRgb0he28R6pYe2Ondic6jjsLUl4utNqqhANicAG0pQYxI9u2YOpw&h=AT3YWL9asukRyh8TdtxYRlx6fgDy534Jf0ZP4vTbxqy4yVFGiPJEeLxVCNOa13exn0cBIrzN26PYQAXSX2Ddp-r3uL_H1pAjp0Laf3ypcS2-h0iBnUgi4v7NnVpJtTqN-V3YmNOzEbM2CxmJFLK9sg" class="fab fa-instagram"></a>
                                      
                                    </div>
                                </div>

                                <div class="box" data-aos="fade-up" data-aos-delay="300">
                                    <h3>quick links</h3>
                                    <a href="#home" class="links"> <i class="fas fa-arrow-right"></i>home</a>
                                    <a href="#about" class="links"> <i class="fas fa-arrow-right"></i>about</a>
                                    <a href="#services" class="links"> <i class="fas fa-arrow-right"></i>destination</a>
                                    <a href="#destination" class="links"> <i class="fas fa-arrow-right"></i>gallery</a>
                                    <a href="#gallery" class="links"> <i class="fas fa-arrow-right"></i>blogs</a>
                         

                                </div>
                                <div class="box" data-aos="fade-up" data-aos-delay="450">
                                    <h3>contact info</h3>
                                    <p>  <i class="fas fa-map"></i>TasteTravels </p>
                                    <p>  <i class="fas fa-phone"></i>0950 967 4512 </p>
                                    <p>  <i class="fas fa-envelope"></i> travelstaste@gmail.com</p>
                                    <p>  <i class="fas fa-clock"></i> 8am- 10pm</p>
                                   

                                </div>
                                <div class="box" data-aos="fade-up" data-aos-delay="600">
                                <h3>Send Us message</h3>
                                   
                                   <form action="">
                                       <a href="mailto:tadejamarklee@gmail.com" style="text-decoration:underline;
                                       color: #000; font-size: 2rem;"><input type="submit" value="Click Here" class="btn"></a>
                                    
                                    
                                   </form>
                              
                               

                                </div>

                            </div>

                        </section>
                        <div class="credit">
                       Taste   Travel  by |  <span>Group 1</span>
                        </div>
                          <!--  footer end-->

                       









    <script src="script.js" defer> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  

    <script>
        AOS.init({
            duration:800,
            offset:150,
            
        }

        );
      
    </script>
    
</body>
</html>