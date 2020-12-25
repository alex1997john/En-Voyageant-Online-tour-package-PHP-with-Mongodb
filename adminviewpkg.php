<!doctype html>
<html class="no-js" lang="zxx">

<head>
<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>En-Voyageant</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<?php include('includes/css.php');?>
<style>
span {
  content: "\270E";
}
</style
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <?php include('includes/header1.php');?>
<!-- slider_area_start -->

    <!-- slider_area_end -->

    <!-- where_togo_area_start  -->
    
    <!-- where_togo_area_end  -->
    
    <!-- popular_destination_area_start  -->
    
    <!-- popular_destination_area_end  -->

    <!-- newletter_area_start  -->
    
    <!-- newletter_area_end  -->

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
                $title="title";
	$duration="duration";
	$amount="amount";
	$desc="desc";
	$dest="dest";
	$pkg_type="pkg_type";
	
                        foreach($rows as $row){
	$a=$row->pic;
	$id=$row->pkg_id;
	$b="upload/".$a;
	$dir_name="upload/";
	$images=glob($dir_name."*");
	foreach($images as $image){
	if($b==$image){
                                                                 ?>
                <div class="col-lg-4 col-md-6">
                    <div class="single_place">
                        <div class="thumb">
                            <img src="<?php echo $image; ?>" alt="" width="400" height="200"><?php } }?>
                            <a href="#" class="prise">Rs <?php echo $row->amount ?></a>
                        </div>
                        <div class="place_info">
                            <a href="pkg_desc.php?data=<?=$id ?>"><h3><?php echo $row->pkg_name ?></h3></a>
                            <div class="rating_days d-flex justify-content-between">
                                <span class="d-flex justify-content-center align-items-center">
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i>
                                     <a href="#">(20 Review)</a>
                                </span>
                                <div class="days">
                                    <i class="fa fa-clock-o"></i>
                                    <a href="#"><?php echo $row->duration ?> Days</a>
                                </div>
                            </div>

                        </div>
<div class="days">
<a href="editpkg.php" ><span>&#9998;</span></a>
<a href="deletepkg.php?pkg_id=<?=$id ?>" class="fa fa-trash" aria-hidden="true"></a></div>
                    </div>

                </div><?php  }?>
                

           

            
   


     <!-- testimonial_area  -->
     <!-- /testimonial_area  -->


<div></div>
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