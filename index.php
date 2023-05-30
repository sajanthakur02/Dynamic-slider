<?php 
    // Include database configuration file 
    require 'dbConfig.php'; 
     
    // Retrieve images from the database 
    $query = $db->query("SELECT * FROM images WHERE status = 1"); 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>  
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css"/>       
        <!-- <link rel="stylesheet" href="css/style.css">  -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <style>
.slider-item {
    padding: 20px;
    text-align: center;
}
.img-sec img {
    width: 100%;
}
.img-sec {
    border-radius: 20px;
    overflow: hidden;
}
.collection-slider-main {
  max-width: 1280px;
  margin: 0 auto;
}
.custon-collection-slider button.slick-arrow {
  background-color: #ddd !important;
  width: 40px;
  height: 40px;
  border-radius: 50px;
  z-index: 2;
}
.custon-collection-slider button.slick-arrow:before {
  content: ' ';
  position: absolute;
  border-left: 2px solid #000;
  border-bottom: 2px solid #000;
  width: 12px;
  height: 12px;
  transform: rotate(45deg);
  top: 13px;
  left: 15px;
}
.custon-collection-slider button.slick-next:before {
  transform: rotate(-135deg);
  left: 13px;
}
  .slider-item {
  position: relative;
}
.price_current.product_product-price {
  position: absolute;
  bottom: 10px;
  left: 0;
}
      .img-sec {
    border-radius: 20px;
    overflow: hidden;
    background: #efefef;
    padding: 10px;
    position: relative;
}
.price__current.my-auto.product__product-price {
  background: #b10505;
    width: 70px;
    height: 70px;
    display: flex;
    border-radius: 50px;
    justify-content: center;
    align-items: center;
    color: #fff;
    font-size: 13px !important;
    font-weight: 600 !important;
    line-height: 16px;
    position: absolute;
    bottom: 0;
    left: 0;
}
   .slider-item p.name {
    text-overflow: ellipsis;
    overflow: hidden;
    width: 250px;
    padding: 20px;
    height: 2rem;
    white-space: nowrap;
}
a.productitem--image-link {
    display: block;
    height: 350px;
}
.collection-slider-main {
    max-width: 1280px;
    / margin: 0 auto; /
    margin-bottom: 8rem;
}
img.productitem--image- {
    height: -webkit-fill-available;
}
/* .img-sec  a img.productitem--image- {
    width: 216px;
    height: 267px;
} */
 

  </style>       
    </head>
<body>
<div class="collection-slider-main">
      <div class="heading">
        <h2 class="tc type-heading-1">Bringing the Bestsellers</h2>
      </div>
    <div class="custon-collection-slider">
    <?php
    if($query->num_rows > 0){
        while($row = $query->fetch_assoc()){ 
                $imageURL = 'images/'.$row["image"]; 
        ?>
    <div class="slider-item">
    <div class="img-sec">
   
        <img src="<?php echo $imageURL; ?>" alt="" />
   
    </div>
    </div>
    <?php } 
    } ?>
    </div>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


    <script>

jQuery('.custon-collection-slider').slick({
  dots: false,
  infinite: false,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,         
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});


</script>

</body>

</html>

