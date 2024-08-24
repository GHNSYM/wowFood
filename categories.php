<?php include('partials-front/menu.php');?>

      <!--category section starts here-->
    <section class="categories">
        <div class="container">
          <h2 class="text-center">Categories</h2>
  

          <?php 
          $sql="SELECT * FROM tbl_category WHERE active='Yes'";
          $res=mysqli_query($conn,$sql);
          $count=mysqli_num_rows($res);

          if($count>0){

            while($row=mysqli_fetch_assoc($res)){
              $id=$row['id'];
              $title=$row['title'];
              $image_name=$row['image_name'];
              ?>
                <a href="<?php echo SITEURL;?>category-foods.php?category_id=<?php echo $id?>">
                  <div class="box-3 float-container">
                    <?php
                      if($image_name==""){
                        echo "<div class='error'>Image not Available</div>";
                      }
                      else{
                        ?>
                          <img
                          src="<?php echo SITEURL;?>images/category/<?php echo $image_name; ?>"
                          alt="Pizza"class="image-responsive img-curve"/>
                        <?php
                      }
                    ?>
                    
                    <h3 class="float-text text-white"><?php echo $title;?></h3>
                  </div>
                </a>
              <?php
            }
          }
          else{
            echo "<div class='error'>Category not Added.</div>";

          }
        
        ?>
  
          
          <div class="clearfix"></div>
        </div>
      </section>
      <!--category section ends here-->

<?php include('partials-front/footer.php');?>