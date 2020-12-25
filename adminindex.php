<!doctype html>
<html class="no-js" lang="zxx">

<head>
<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>En-Voyageant</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<?php include('includes/css.php');?>
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <?php include('includes/header1.php');?>
<!-- slider_area_start -->
<div class="slider_area">
        <div class="slider_active owl-carousel">
            <div class="single_slider  d-flex align-items-center slider_bg_1 overlay">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-md-12">
                            <div class="slider_text text-center">
                                <h3>Indonesia</h3>
                                <p>A region with so many islands, ethnics, tongues and cultures that make it hard to be recognized as a single nation.</p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center slider_bg_2 overlay">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-md-12">
                            <div class="slider_text text-center">
                                <h3>Australia</h3>
                                <p>Home of the largest living thing on earth, the Great Barrier Reef, and of the largest monolith, Ayers Rock.. </p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center slider_bg_3 overlay">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-md-12">
                            <div class="slider_text text-center">
                                <h3>Switzerland</h3>
                                <p>Heaven on Earth</p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>










    <div class="popular_places_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb_70">
                        <h3>Added Places</h3>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                $mng = new MongoDB\Driver\Manager("mongodb://localhost:27017");
                 $qry=new MongoDB\Driver\Query([]);
                 $rows=$mng->executeQuery("travelo.package",$qry);
                foreach($rows as $row){
                    ?>
        
                
                            
                <div class="col-lg-4 col-md-6">
                    <div class="single_place">
                        <div class="thumb">
                        <?php
                        $a=$row->pic;
                        $id=$row->pkg_id;
                        ?>
                        
                        <a href="admindescription.php?data=<?=$row->_id?>"><img src="upload/<?php echo $a;?>" alt="" style="width:300px;height:200px;"></a><?php
                      
                        ?>
                            
                            <a href="#" class="prise">Rs <?php echo $row->amount ?></a>
                        </div>
                        <div class="place_info">
                            <a href="admindescription.php"><h3><?php echo $row->pkg_name ?></h3></a><br>
                            <p>Package Type:<?php echo $row->type ?></p>
                            <div class="rating_days d-flex justify-content-between">
                            <p><?php echo $row->date ?></p>
                            <div class="days">
                                    <i class="fa fa-clock-o"></i>
                                    <a href="#"><?php echo $row->duration ?> Days</a>
                            </div>
                            </div>
                            <a href="editpkg.php?id=<?=$row->_id ?>" ><span>&#9998;</span></a>&emsp;&emsp;&emsp;&emsp;
                            <a href="deletepkg.php?id=<?=$row->_id?>" class="fa fa-trash" aria-hidden="true"></a>
                        </div>
                    </div>
                </div><?php } ?>
                
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="more_place_btn text-center">
                        <a class="boxed-btn4" href="#">More Places</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

 
   
       <?php include('includes/footer.php');?>
     <!-- Modal
  <div class="modal fade custom_search_pop" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="serch_form">
            <input type="text" placeholder="Search" >
            <button type="submit">search</button>
        </div>
      </div>
    </div>
  </div> -->
  <?php include('includes/js.php');?>


  
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }
        });
    </script>
</body>

</html>