!<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
        <title>Alaminos City</title>
        <style>
          @import url("https://fonts.googleapis.com/css2?family=Comfortaa:wght@600&display=swap");


*{

    font-family: "Comfortaa", cursive;
    margin: 0;
    padding: 0;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    outline: none;

    -webkit-transition: all .2s linear;
    transition: all .2s linear;
}
html{
    font-size: 62.5%;
overflow-x: hidden;
scroll-behavior: smooth;
scroll-padding-top: 9rem;
}
html ::-webkit-scrollbar{
    width: 0.5rem;}


 html ::-webkit-scrollbar-thumb{
    background:#d9296f;
 }
body{
    background: #f8f9fc;
    overflow-x: hidden;
}
section{

    padding: 3rem
    9%;
}

.heading{

    text-align: center;
    margin-top: 2rem;
}
.heading span{

    color: #d9296f;
    font-size: 2rem;
}
.heading h1{

    font-size: 4rem;
    color: #000;
}
.btn{

    margin-top: 1rem;
    display: inline-block;
    padding: 1rem 3rem;
    font-size: 1.7rem;
    color: #d9296f;
    border: 0.2rem solid #d9296f;
    border-radius: 5rem;
    cursor: pointer;
    background: none;
}
.btn:hover{
    background: #d9296f;
    color: #f8f9fc;

}
.header{

    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 1100;
    background: #fff;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: justify;
    justify-content: space-between;
    padding: 1.5rem 9%;
    box-shadow:  0 1px 6px 0 rgba(32 32 36 / 28%);
    ;

}
.header .navbar a{
    font-size: 1.7rem;
    color: #3d3d3d;
    display: inline-block;
    margin: 0 1rem;
    text-decoration: none;
    
}
.header .navbar a:hover{
    color: #d9296f;
    
    }
    .logo{
        font-size: 2.5rem;
        color: #000;
        font-weight: bolder;
    }
    .logo span{
        color: #d9296f;

    }
#menu-btn{

  font-size: 2.5rem;
  color: #000;
  cursor: pointer;
  display: none;
}
</style>
    </head>
    <body>
      <header class="header">
        <div id="menu-btn" class="fas fa-bars"></div>
        <a href="#" data-aos="zoom-in-left" data-aos-delay="150" class="logo" style="text-decoration: none;"> <span>T</span>aste<span>T</span>ravels</a>
        <nav class="navbar">
            <a href="home.php" data-aos="zoom-in-left" data-aos-delay="300">Home</a>
        
        </nav>

    
        <a href="#book-form" class="btn" data-aos="zoom-in-left" data-aos-delay="1200" style="text-decoration: none;">Logout</a>

    </header>
            <h1 style="
                font-family:'Times New Roman', Times, serif;
                font-size: 4rem;
                text-align: center;
                padding-top: 10%;
                margin-bottom: 2%;
                color: #264653;"><i><b>Alaminos City</b></i></h1></div>
                <hr width="40%" style="margin: auto; color: rgb(70, 70, 63); margin-top: 2%; margin-bottom: 5%;">

            <div class="container marketing">

            
                <div class="row featurette" style="background-color: #f3f3f3; border-radius: 10px; height: 286px; margin-bottom: 8%;">
                  <div class="col-md-7" style="margin-bottom: 2%; margin-top: 2%; padding: 1%;">
                    <p style="
                    font-family: Arial, Helvetica, sans-serif;
                    font-size: 2rem;">Alaminos is the home to the Hundred Islands National Park, the very first national park in 
                    the Philippines.  It is also the heart of Western Pangasinan, its center of commerce, finance, education, 
                    industry and services. Discover a coastal paradise boasting the breathtaking Hundred Islands National Park. 
                    With 123 stunning islands, white sandy beaches, and crystal-clear waters, it's a haven for nature lovers and 
                    adventure seekers. Experience the vibrant city center, rich cultural heritage, and warm hospitality that make 
                    Alaminos City an irresistible destination for relaxation and exploration.</p>
                  </div>
                  <div class="col-md-5" style="margin-top: 2%;">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto rounded" 
                    width="500" height="260" xmlns="http://www.w3.org/2000/svg" role="img" preserveAspectRatio="xMidYMid slice" 
                    focusable="false">
                    <rect width="100%" height="100%" fill="var(--bs-secondary-bg)"/>
                    <image xlink:href="https://ilovepangasinan.com/wp-content/uploads/2021/10/pangasinan-hundred-islands-1.jpg" width="100%" height="100%" preserveAspectRatio="xMidYMid slice" />
                    </svg>
                  </div>
                
                  
                <h1 style="
                font-family:'Times New Roman', Times, serif;
             
                text-align: left;
                color: #ffffff;
                margin-bottom: 4%;
                background-color: #264653;
                width: 35%;
                border-radius: 10px;
                padding-left: 2%;
                margin-top: 3%;  font-size: 3rem;"><i><b>Festivals and Celebrations</b></i></h1></div>

                
            
                <div class="row featurette">
                  <div class="col-md-7" style="margin-bottom: 6%; margin-top: 3%;">
                    <h3 class="featurette-heading fw-normal lh-1" 
                   style="font-family:'Times New Roman', Times, serif;  font-size: 2.5rem; "><b>Hundred Islands Festival</b></h3>
                    <p style="
                    font-family: Arial, Helvetica, sans-serif;  font-size: 2rem;">The Hundred Islands Festival in Alaminos City, Pangasinan is an 
                    annual celebration that showcases the beauty of the Hundred Islands National Park. It features vibrant street 
                    dances, cultural performances, art exhibits, and culinary showcases. The festival offers guided tours and island 
                    hopping adventures to explore the stunning natural wonders of the park. It is a joyful event that 
                    promotes environmental conservation and sustainable tourism while highlighting the cultural heritage of Pangasinan.
                    </p> 
                  </div>
                  <div class="col-md-5" style="margin-top: 3%">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto rounded" 
                    width="500" height="250" xmlns="http://www.w3.org/2000/svg" role="img" preserveAspectRatio="xMidYMid slice" 
                    focusable="false">
                    <rect width="100%" height="100%" fill="var(--bs-secondary-bg)"/>
                    <image xlink:href="https://files01.pna.gov.ph/ograph/2023/03/23/fbimg1679563613836.jpg" width="100%" height="100%" preserveAspectRatio="xMidYMid slice" />
                    </svg>
                  </div>
                
                <h1 style="
                font-family:'Times New Roman', Times, serif;
                font-size: 3rem;
                text-align: left;
                color: #ffffff;
                margin-bottom: 4%;
                padding-left: 2%;
                background-color: #264653;
                width: 28%;
                border-radius: 10px;"><i><b>Travel Destinations</b></i></h1></div>
            
            
                <div class="row featurette" style="background-color: #f3f3f3; border-radius: 10px; margin-bottom: 7%;">
                  <div class="col-md-7 order-md-2" style="padding-top: 2%;">
                   <h3 class="featurette-heading fw-normal lh-1" 
                   style="font-family:'Times New Roman', Times, serif;  font-size: 2.5rem;"><b>Hundred Islands</b></h3>
                    <p style="
                    font-family: Arial, Helvetica, sans-serif;  font-size: 2rem;" ><b>Description: </b><br>
                        Alaminos City is tagged as the home of the Philippines’ first national park, The Hundred Islands. 
                        It is blessed with a unique and diverse ecosystem, fascinating caves and tunnels, new amenities and an array of 
                        island activities that would make your stay thrilling and enjoyable. We booked our Hundred Islands Tours through 
                        The First Islatel which offers a seamless adventure.
                    </p> 
                    
                    <p style="
                    font-family: Arial, Helvetica, sans-serif;  font-size: 1.5rem;"><b>Location: </b><br>
                        Hundred Islands National Park, Alaminos, Pangasinan, Philippines
                    </p></p>
                  </div>
            
                  <div class="col-md-5 order-md-1" style="padding-top: 2%;">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto rounded" width="500" height="270" xmlns="http://www.w3.org/2000/svg" role="img" preserveAspectRatio="xMidYMid slice" 
                    focusable="false">
                    <rect width="100%" height="100%" fill="var(--bs-secondary-bg)"/>
                        <image xlink:href="https://www.ourpangasinan.com/wp-content/uploads/2023/02/hundred-islands-1.jpg" width="102%" height="106%" />
                      </svg>
                  </div>
                </div>
            
                <div class="row featurette" style="margin-bottom: 5%;">
                  <div class="col-md-7">
                    <h3 class="featurette-heading fw-normal lh-1" style="font-family:'Times New Roman', Times, serif;  font-size: 2.5rem;">
                        <b>Bolo Beach</b></h3>
                    <p style="
                    font-family: Arial, Helvetica, sans-serif;  font-size: 2rem;" ><b>Description: </b><br>
                        Bolo Beach in Alaminos, Pangasinan is a serene coastal destination known for its pristine shoreline and tranquil 
                        atmosphere. With its powdery white sand, clear turquoise waters, and tall coconut trees, it offers a picturesque 
                        setting for relaxation and beach activities. Visitors can enjoy swimming, snorkeling, beach volleyball, and 
                        picnics while savoring delicious local seafood. Bolo Beach is a hidden gem that provides a memorable and peaceful 
                        beach experience for all.
                        </p>
                    
                    <p style="
                    font-family: Arial, Helvetica, sans-serif;  font-size: 1.5rem;"><b>Location: </b><br>
                        Barangay Bolo, Alaminos City, Pangasinan
                    </p>
                    </div>
                    <div class="col-md-5 order-md-1">
                        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto rounded" width="500" height="300" xmlns="http://www.w3.org/2000/svg" role="img">
                        <rect width="100%" height="100%" fill="var(--bs-secondary-bg)"/>
                        <image xlink:href="https://beachresortfinder.com/resorts/bolo-beach-santorini/gallery/b11.jpg" width="107%" height="101%"/>
                        </svg>
                      </div>
                      
                </div>

                
                <div class="row featurette" style="background-color: #f3f3f3; border-radius: 10px; margin-bottom: 7%;">
                    <div class="col-md-7 order-md-2" style="padding-top: 2%;">
                     <h3 class="featurette-heading fw-normal lh-1" 
                     style="font-family:'Times New Roman', Times, serif;  font-size: 2.5rem;"><b>Children's Island</b></h3>
                      <p style="
                      font-family: Arial, Helvetica, sans-serif;  font-size: 2rem;"><b>Description: </b><br>
                           Children's Island is a delightful retreat specifically designed for families. This small, tranquil island boasts 
                           shallow, calm waters, making it an ideal spot for children to swim and play safely. The island is equipped with 
                           facilities like picnic huts and cottages, ensuring that families can relax and enjoy quality time together in a 
                           serene and natural environment. 
                      </p> 
                      
                      <p style="
                      font-family: Arial, Helvetica, sans-serif;  font-size: 1.5rem;"><b>Location: </b><br>
                          Hundred Islands National Park, 2404 Alaminos Pangasinan                          

                      </p>
                    </div>
              
                    <div class="col-md-5 order-md-1" style="padding-top: 2%; height: 270px;">
                      <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto rounded" width="500" height="250" xmlns="http://www.w3.org/2000/svg" role="img" preserveAspectRatio="xMidYMid slice" 
                      focusable="false">
                      <rect width="100%" height="100%" fill="var(--bs-secondary-bg)"/>
                        <image xlink:href="https://i0.wp.com/travellingpeoples.com/wp-content/uploads/2022/11/img_3809.jpg?resize=810%2C608&ssl=1" width="100%" height="149%" />
                        </svg>
                    </div>
                  </div>
              
                
                <h1 style="
                font-family:'Times New Roman', Times, serif;
                font-size: 3rem;
                text-align: left;
                color: #ffffff;
                margin-bottom: 1%;
                background-color: #6b8a96;
                width: 55%;
                border-radius: 10px;
                padding-left: 2%;"><i><b>Explore Food Adventures in Alaminos City</b></i></h1></div>

                </div>
            
            
            <div class="album py-5">
                <div class="container" style="background-color: #ebb70e; border-radius: 20px; margin-bottom: 5%; padding: 2%;">
            
                  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                      <div class="card shadow-sm">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="300" 
                        xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" 
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="#55595c"/>
                        <image xlink:href="https://media.karousell.com/media/photos/products/2020/6/25/alaminos_longganisa_1593054217_f17bc989.jpg" width="100%" height="100%" preserveAspectRatio="xMidYMid slice" />
                      </svg>
                        <div class="card-body">
                          <p class="card-text" style=" font-size: 2rem;">Alaminos Longganisa</p>
                          <button onclick="redirectToSection()" class="btn btn-primary">View details &raquo;</button>
                        </div><!-- /.col-lg-4 -->
                        <div class="col-lg-4">
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card shadow-sm">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="300" 
                        xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" 
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="#55595c"/>
                        <image xlink:href="https://www.foxyfolksy.com/wp-content/uploads/2019/05/how-to-make-sapin-sapin.jpg" width="100%" height="100%" preserveAspectRatio="xMidYMid slice" />
                      </svg>
                        <div class="card-body">
                          <p class="card-text" style=" font-size: 2rem;">Sapin-sapin</p>
                  
                          <button onclick="redirectToSectionn()" class="btn btn-primary">View details &raquo;</button>

                        </div><!-- /.col-lg-4 -->
                        <div class="col-lg-4">
                        </div>
                      </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                          <svg class="bd-placeholder-img card-img-top" width="100%" height="300" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c"/>
                            <image xlink:href="https://64.media.tumblr.com/091993852c7902406386aa6e017ecd7c/tumblr_nqt37ez8lG1qbot52o1_500.jpg" width="100%" height="100%" preserveAspectRatio="xMidYMid slice" />
                      </svg>
                        <div class="card-body">
                          <p class="card-text" style=" font-size: 2rem;">Binungey</p>
                          <button onclick="redirectToSectionnn()" class="btn btn-primary">View details &raquo;</button>
                        </div><!-- /.col-lg-4 -->
                        <div class="col-lg-4">
                          </div>
                        </div>
                      </div>
                     
                      <script>
                        function redirectToSection() {
                          window.location.href = "alaminoscityfood.php";
                        }

                        function redirectToSectionn() {
                          window.location.href = "alaminoscityfood.php#second";
                        }

                        function redirectToSectionnn() {
                          window.location.href = "alaminoscityfood.php#third";
                        }
                      </script>
                      
            
        
    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"
  ></script>

    </body>
</html>
