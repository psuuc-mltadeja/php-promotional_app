<!DOCTYPE html>
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
        <title>Dagupan City</title>
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
            <a href="dagupancity.php" data-aos="zoom-in-left" data-aos-delay="300">Travel Guide</a>
        
        </nav>

    
        <a href="#book-form" class="btn" data-aos="zoom-in-left" data-aos-delay="1200" style="text-decoration: none;">Logout</a>

    </header>
            <h1 style="
                font-family:'Times New Roman', Times, serif;
                font-size: 4rem;
                text-align: center;
                padding-top: 10%;
                margin-bottom: 2%;
                color: #264653;"><i><b>Dagupan City</b></i></h1></div>
                <hr width="40%" style="margin: auto; color: rgb(70, 70, 63); margin-top: 2%; margin-bottom: 5%;">

            <div class="container marketing">
                  
                <h1 style="
                font-family:'Times New Roman', Times, serif;
                font-size: 3rem;
                text-align: left;
                color: #ffffff;
                margin-bottom: 2%;
                background-color: #ebb70e;
                width: 55%;
                border-radius: 10px;
                padding-left: 2%;
                margin-top: 3%;"><i><b>Explore Food Adventures in Dagupan City</b></i></h1>

                <section id="one">

          
            
                <div class="row featurette" style="margin-bottom: 3%;">
                  <div class="col-md-7" style="margin-bottom: 6%; margin-top: 2%;">
                    <h3 class="featurette-heading fw-normal lh-1" 
                   style="font-family:'Times New Roman', Times, serif;    font-size: 2.5rem;"><b>Boneless Bangus</b></h3>
                    <p style="
                    font-family: Arial, Helvetica, sans-serif;    font-size: 2rem;">Made from deboned milkfish, the Boneless Bangus is expertly prepared 
                    by skilled local fishmongers. The tender and succulent meat is marinated in a flavorful blend of vinegar, garlic,
                    and spices, then cooked to perfection through grilling, frying, or baking. Served with steamed rice and 
                    accompanied by soy sauce or spicy vinegar, this renowned delicacy offers a delightful taste and texture that 
                    will leave you craving more. Discover why our Boneless Bangus is loved not only in Dagupan City but also 
                    internationally. 
                    </p> 
                  </div>
                  <div class="col-md-5" style="margin-top: 3%">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto rounded" 
                    width="500" height="250" xmlns="http://www.w3.org/2000/svg" role="img" preserveAspectRatio="xMidYMid slice" 
                    focusable="false">
                    <rect width="100%" height="100%" fill="var(--bs-secondary-bg)"/>
                    <image xlink:href="https://cdn.shopify.com/s/files/1/0478/9098/9207/products/TSP-Daing-Bangus4.jpg?v=1654760755" width="100%" height="100%" preserveAspectRatio="xMidYMid slice" />
                    </svg>
                  </div>
                  </div>
           
                </section>


                <section id="second">

            
                  <div class="row featurette" style="background-color: #f3f3f3; border-radius: 10px; margin-bottom: 2%; height: 275px;">
                    <div class="col-md-7 order-md-2" style="padding-top: 2%;">
                     <h3 class="featurette-heading fw-normal lh-1" 
                     style="font-family:'Times New Roman', Times, serif;    font-size: 2.5rem;"><b>Kaleskes</b></h3>
                      <p style="
                      font-family: Arial, Helvetica, sans-serif;    font-size: 2rem;">This traditional delicacy features tender beef or carabao tripe 
                      simmered in a flavorful broth infused with aromatic herbs and spices. Served with calamansi, soy sauce, and 
                      chili on the side, Kaleskes offers a hearty and comforting culinary experience. Discover 
                      the rich heritage and local culture through this must-try dish, showcasing the unique flavors of Dagupan City. 
                      </p> 
                      
                    </div>
              
                    <div class="col-md-5 order-md-1" style="padding-top: 2%;">
                      <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto rounded" width="500" height="250" xmlns="http://www.w3.org/2000/svg" role="img" preserveAspectRatio="xMidYMid slice" 
                      focusable="false">
                      <rect width="100%" height="100%" fill="var(--bs-secondary-bg)"/>
                          <image xlink:href="https://www.angsarap.net/wp-content/uploads/2020/02/Kaleskes-Wide.jpg" width="101%" height="135%" />
                        </svg>
                    </div>
                  </div>
            
                </section>

                <section id="third">

               
                <div class="row featurette" style="margin-bottom: 5%;">
                    <div class="col-md-7" style="margin-top: 1%;">
                      <h3 class="featurette-heading fw-normal lh-1" 
                     style="font-family:'Times New Roman', Times, serif;    font-size: 2.5rem;"><b>Pigar-pigar</b></h3>
                      <p style="
                      font-family: Arial, Helvetica, sans-serif;    font-size: 2rem;">This delectable stir-fry features thinly sliced beef, fresh 
                      vegetables, and a harmonious blend of spices and sauces. Served alongside steamed rice, Pigar-pigar offers 
                      a savory and aromatic experience that will delight your taste buds. Experience the authentic flavors of Dagupan 
                      City and immerse yourself in its lively food culture. 
                      Indulge in the flavors of Pigar-pigar and create lasting memories of your visit to Dagupan City.
                      </p> 
                    </div>
                    <div class="col-md-5" style="margin-top: 3%">
                      <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto rounded" 
                      width="500" height="250" xmlns="http://www.w3.org/2000/svg" role="img" preserveAspectRatio="xMidYMid slice" 
                      focusable="false">
                      <rect width="100%" height="100%" fill="var(--bs-secondary-bg)"/>
                      <image xlink:href="https://i0.wp.com/www.angsarap.net/wp-content/uploads/2014/03/pigar-pigar-wide.jpg?fit=1080%2C720&ssl=1" width="100%" height="100%" preserveAspectRatio="xMidYMid slice" />
                      </svg>
                    </div>
                    </div>
                      
                  </section>
            
            
        
    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"
  ></script>

    </body>
</html>
