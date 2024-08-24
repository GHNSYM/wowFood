<?php include('partials-front/menu.php');?>


    <!--food-menu section starts here-->
    <section class="food-menu">
      <div class="container">
        <h2 class="text-center">Explore Foods</h2>


        <?php 
          $sql2="SELECT * FROM tbl_food WHERE active='Yes'";
          $res2=mysqli_query($conn,$sql2);
          $count2=mysqli_num_rows($res2);

          if($count2>0){

            while($row=mysqli_fetch_assoc($res2)){
              $id=$row['id'];
              $title=$row['title'];
              $price=$row['price'];
              $image_name=$row['image_name'];
              $description=$row['description'];

              ?>
                <div class="food-menu-box">
                  <div class="food-menu-img">
                    <img src="<?php echo SITEURL;?>images/food/<?php echo $image_name ?>" alt="Veg Pizza"class="image-responsive img-curve"/>
                  </div>
                  <div class="food-menu-desc">
                    <h4><?php echo $title;?></h4>
                    <p class="food-price">&#8377;<?php echo $price;?></p>
                    <p class="food-detail">
                      <?php echo $description;?>
                    </p>
                    <br />
                    <a href="#" class="btn btn-primary">Order Now</a>
                  </div>
                  <div class="clearfix"></div>
                </div>
              <?php
            }
          }
          else{
            echo "<div class='error'>Food not Available.</div>";

          }
        
        ?>
        <!-- <div class="food-menu-box">
          <div class="food-menu-img">
            <img
              src="images/menu-pizza.jpg"
              alt="Veg Pizza"
              class="image-responsive img-curve"
            />
          </div>
          <div class="food-menu-desc">
            <h4>Farmhouse</h4>
            <p class="food-price">$3.3</p>
            <p class="food-detail">
              Made with Italian Sauce, Chicken and vegetable
            </p>
            <br />
            <a href="#" class="btn btn-primary">Order Now</a>
          </div>
          <div class="clearfix"></div>
        </div> -->

        

        <div class="clearfix"></div>
      </div>
    </section>
    <!--food-menu section ends here-->

    <?php include('partials-front/footer.php');?>
