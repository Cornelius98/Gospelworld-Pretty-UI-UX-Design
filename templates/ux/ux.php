<?php 
namespace TemplateManager\UserTemplates;
use ProductManager\ProductPull;
class UXTemplate extends ProductPull{
    public function spinAnime(){
        // echo ' <div class="spin-wrap">
        //         <span class="spin-circle"></span>
        //     </div>';
    }
    public function slideIn(){
        $o = $this->get_global_products();
        echo '<section class="slidein-nav">
            <div class="slidein-fader">
                <span class="slidein-exit">x</span>
                <div class="slidein-nav-header">
                    <div class="slidein-icons">
                        <span class="icon-cat">
                            <a href="index"><i class="fa fa-home icon-shift"></i></a>
                            <span class="nav-cat">
                                <sup class="cart-items-count-1">0</sup>
                                <i class="fa fa-shopping-basket floatin-basket-nav icon-shift shadow"></i>
                            </span>
                            <a href="signup"><i class="fa fa-user icon-shift"></i></a>
                            <a href="advertise"><i class="fa fa-paper-plane slide-menu"></i></a>
                            <a href="gospelworld"><i class="fa fa-globe"></i></a>
                        </span>
                    </div>
                </div>
                <div class="slidein-body">
                    <div class="slidein-search">
                        <form method="GET" action="search" class="form-inline">
                                <div class="form-group">
                                    <input type="search" 
                                            class="form-control" 
                                            name="scx" 
                                            placeholder="Search ..."  />
                                            <i class="fas fa-search f-x2"></i>
                                </div> 
                        </form>
                        <br>
                        <h6 class="slidein-tag">Menu</h6>
                        <hr>
                    </div>
                    <div class="slidein-menu">
                        <div class="slidein-menu-item">
                            <a href="index?#music-chart">Chart</a>
                        </div>
                        <div class="slidein-menu-item">
                            <a href="music">Music</a>
                        </div>
                        <div class="slidein-menu-item">
                            <a href="video">Videos</a>
                        </div>
                        <div class="slidein-menu-item">
                            <a href="album">Albums</a>
                        </div>
                    </div>
                    <hr>
                    <h6 class="slidein-tag">Sort Music By</h6>
                    <hr>
                    <div class="slidein-menu">
                        <div class="slidein-menu-item">
                            <span class="slidein-menu-dropdown">Church</span>
                            <ul class="sort-opts">';
                                    if(is_array($o["Churches"]) && !empty($o["Churches"])){
                                        foreach($o["Churches"] AS $sort){
                                            echo '<li><a href="search?scx='.$sort["dn_name"].'">'.$sort["dn_name"].'</a></li>';
                                        }
                                    }else { echo '<h6 class="err_products">No Church Listing</h6>';}  
                            
                                echo '<li><a href="churches">All Churches ...</a></li>       
                            </ul>
                            <br>
                        </div>
                        <div class="slidein-menu-item">
                            <span class="slidein-menu-dropdown">Language</span> 
                            <ul class="sort-opts">';
                                    if(is_array($o["Languages"]) && !empty($o["Languages"])){
                                        foreach($o["Languages"] AS $sort){
                                            echo '<li><a href="search?scx='.$sort["lng_name"].'">'.$sort["lng_name"].'</a></li>';
                                        }
                                    }else { echo '<h6 class="err_products">No Language Listing</h6>';}   
                                echo '<li><a href="languages">All Languages ...</a></li>   
                            </ul>
                        </div>
                        <div class="slidein-menu-item">
                            <span class="slidein-menu-dropdown">Location</span>
                            <ul class="sort-opts">';
                                    if(is_array($o["Places"]) && !empty($o["Places"])){
                                        foreach($o["Places"] AS $sort){
                                            echo '<li><a href="search?scx='.$sort["stt_name"].'">'.$sort["stt_name"].'</a></li>';
                                        }
                                    }else { echo '<h6 class="err_products">No Location Listing</h6>';}   
                                echo '<li><a href="places">All Locations ...</a></li>  
                            </ul>
                        </div>
                        <div class="slidein-menu-item">
                            <span class="slidein-menu-dropdown">Genre</span>
                            <ul class="sort-opts">';
                                    if(is_array($o["Genres"]) && !empty($o["Genres"])){
                                        foreach($o["Genres"] AS $sort){
                                            echo '<li><a href="search?scx='.$sort["pgc_title"].'">'.$sort["pgc_title"].'</a></li>';
                                        }
                                    }else { echo '<h6 class="err_products">No Genre Listing</h6>';}   
                                echo '<li><a href="genres">All Genres ...</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <footer>
                    <div class="social-links text-left slidein-nav-sc-handles">
                        <a href="https://www.facebook.com/gospelworlds" style="background-color:#4267B2;"><i class="fab fa-facebook"></i></a>
                        <a href="https://wa.me/+260967721900" style="background-color:#25D366;"><i class="fab fa-whatsapp"></i></a>
                        <a href="#" style="background:radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);"><i class="fab fa-instagram"></i></a>
                        <a href="https://twitter.com/gospelworldss" style="background-color:#00acee;"><i class="fab fa-twitter"></i></a>
                    </div>
                </footer>
            </div>
        </section>';
    }
    public function nyumbaNav(){
        echo '<section class="ny-navigation">
                <div class="lg-area">
                    <img src="./assets/nyumba-logo-001.png" alt="ny-logo">
                </div>
                <div class="srch-area">
                    <div class="search-task">
                        <input type="search" 
                                name="" 
                                id=""
                                placeholder="Search ...">
                        <i class="fa fa-search"></i>
                    </div>
                </div>
                <div class="bars-area">
                    <span>  
                        <i class="fa fa-filter" data-toggle="modal" data-target="#exampleModalCenter"></i>
                        &nbsp;
                        &nbsp;
                        <i class="fa fa-bars slide-menu"></i>
                    </span>
                </div>
            </section>
            <section class="ny-types">
                <div class="navigator">
                    <i class="fa fa-arrow-left"></i>
                </div>
                <div class="wrap-types">
                    <div class="type">
                        <i class="fa fa-home"></i>
                        <span>House/Home</span>
                    </div>
                    <div class="type">
                        <i class="fa fa-city"></i>
                        <span>Apartment</span>
                    </div>
                    <div class="type">
                        <i class="fa fa-home"></i>
                        <span>Duplex/Dual</span>
                    </div>
                    <div class="type">
                        <i class="fa fa-home"></i>
                        <span>Mansion</span>
                    </div>
                    <div class="type">
                        <i class="fa fa-home"></i>
                        <span>Quarters</span>
                    </div>
                    <div class="type">
                        <i class="fa fa-city"></i>
                        <span>Boarding/House</span>
                    </div>
                    <div class="type">
                        <i class="fa fa-city"></i>
                        <span>Building</span>
                    </div>
                    <div class="type">
                        <i class="fa fa-home"></i>
                        <span>Plot/Land</span>
                    </div>
                    <div class="type">
                        <i class="fa fa-tree"></i>
                        <span>Farm/Ranch</span>
                    </div>
                    <div class="type">`
                        <i class="fa fa-home"></i>
                        <span>Office/Cube</span>
                    </div>
                    <div class="type">
                        <i class="fa fa-home"></i>
                        <span>Shop/Store</span>
                    </div>
                    <div class="type">
                        <i class="fa fa-home"></i>
                        <span>Events/Center</span>
                    </div>
                    <div class="type">
                        <i class="fa fa-home"></i>
                        <span>Gardens</span>
                    </div>
                </div>
                <div class="navigator">
                    <i class="fa fa-arrow-right"></i>
                </div>
            </section>';
            $this->popSearchFilters();
    }
    public function popSearchFilters(){
        echo '<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Filter Search Results</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" class="filters-search-fm">
                        <div class="form-group">
                            <div class="slidecontainer">
                                <label for="#filter-bedrooms">
                                    <span>Bedrooms:</span>
                                    <span id="bedrooms_ranger">3</span>
                                </label>
                                <br>
                                <input type="range" min="1" max="100" value="3" class="slider" id="filter-bedrooms">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="slidecontainer">
                                <label for="#filter-price">
                                    <span>Price (ZMW):</span>
                                    <span id="price_ranger">K0.00</span>
                                </label>
                                <br>
                                <input type="range" min="1" max="50000" value="800" class="slider" id="filter-price">
                            </div>
                        </div>
                        <div class="form-group">
                            <select class="form-control filter-type" id="filter-type">
                                <option value="">Choose Property .. </option>
                                <option value="">House/Home</option>
                                <option value="">Apartment</option>
                                <option value="">Duplex/Dual</option>
                                <option value="">Mansion</option>
                                <option value="">Quater</option>
                                <option value="">Building</option>
                                <option value="">Plot/Land</option>
                                <option value="">Farm/Ranch</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control filter-type" id="filter-type">
                                <option value="">Choose Type .. </option>
                                <option value="">For Sale</option>
                                <option value="">For Rent</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control filter-city" id="filter-city">
                                <option value="">Choose City .. </option>
                                <option value="">Chingola </option>
                                <option value="">Lusaka</option>
                                <option value="">Kitwe</option>
                                <option value="">Kalomo</option>
                                <option value="">Choma</option>
                                <option value="">Zimba</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-md btn-block btn-secondary">Search</button>
                    </form>
                </div>
                </div>
            </div>
        </div>';
    }
    public function footer(){
        echo '<div class="footer-wraper">
                    <div class="container">
                        <footer>
                            <div class="row justify-content-center">
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3-xl-4">
                                    <h6 style="text-align:center;">INFORMATION</h6>
                                    <ul class="why-us">
                                        <li><a href="music">For Sale</a></li>
                                        <li><a href="video">For Rent</a></li>
                                        <li>Your Story</li>
                                        <li>Why Advertise With Us?</li>
                                        <li>Why We Focus On Real Estate</li>
                                        <li>Our Partners</li>
                                        <li><a href="advertise" style="color:lightgreen;">Advertise Now</a></li>
                                    </ul>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 text-center">
                                    <div class="footer-contact" style="margin-bottom:20%;">
                                        <h6>LEGAL INFORMATION</h6>
                                        <ul class="list-group">
                                            <li><a href="terms?#refund">Refund Policy</a></li>
                                            <li><a href="privacy">Privacy Policy</a></li>
                                            <li><a href="terms?#disclaimer">Disclaimer</a></li>
                                            <li><a href="terms">Terms Of Use</a></li>
                                            <li><a href="terms?#ownership">Ownership</a></li>
                                            <li><a href="terms?#opt-out">Opt-in & Opt-out</a></li>
                                            <li>&copy; 2021 - 2023</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 text-center">
                                    <div class="social-links text-center">
                                        <a href="https://www.facebook.com/gospelworlds" style="background-color:#4267B2;"><i class="fab fa-facebook"></i></a>
                                        <a href="https://wa.me/+260967721900" style="background-color:#25D366;"><i class="fab fa-whatsapp"></i></a>
                                        <a href="#" style="background:radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);"><i class="fab fa-instagram"></i></a>
                                        <a href="https://twitter.com/gospelworldss"  style="background-color:#00acee;"><i class="fab fa-twitter"></i></a>
                                    </div>
                                </div>
                            </div>
                            
                        </footer>
                    </div>
                    
                    <div class="omae-brand">
                        <small style="color:grey;font-family:arial;font-weight:500;">Developed By</small> <small style="font-family:arial;font-weight:800;"><span style="grey;">OMAE</span><span style="color:orange;">SOFTWARE</span></small>
                    </div>
                </div>
                <div class="floatin-basket">
                    <i class="fa fa-phone customer-care"></i>
                </div>'.$this->customerCare();
    }
    public function customerCare(){
        echo '<div class="customer-care-contacts shadow">
                <div class="cc-fader">
                    <div class="header">
                        <span class="customer-care-exit">x</span>
                        <br>
                        <div class="cc-care">
                            <!--<i class="fa fa-headphones"></i><br>-->
                            <small>Hi, Customer Care Responds Almost Immediately</small>
                        </div>
                        <div class="cc-work-hours">
                            <h6>Working Hours</h6>
                            <p>
                                Monday - Friday
                                <br>
                                08:00 - 17:00hrs
                            </p>
                            <p>
                                Saturday - Sunday
                                <br>
                                14:00 - 17:00hrs
                            </p>
                        </div>
                    </div>
                    <hr>
                    <div class="contact-options">
                        <a href=""><i class="fa fa-phone"></i></a>
                        <a href=""><i class="fab fa-whatsapp"></i></a>
                        <a href=""><i class="fab fa-facebook"></i></a>
                        <a href=""><i class="fa fa-envelope"></i></a>
                    </div>
                    <!--<button type="button" class="btn btn-block btn-sm btn-exit-customer-care">HIDE</button>-->
                </div>
        </div>';
    }
    public function search_pop_task(){
        echo '<div class="search-pop" id="pop-finder">
                <span style="font-weight:800; color:white;
                                margin-left:2%;" id="remove-pop">X</span>
                    <div class="container">
                        <div class="row m-auto">
                            <form method="GET" action="search" 
                                    class="form-inline navbar-form navbar-left mx-6 my-lg-0" >
                                <div class="form-group">
                                    <input type="search" class="form-control" 
                                            name="scx" placeholder="Search ..."  />
                                    <button class="btn btn-success">
                                            <i class="fas fa-search f-x2"></i>
                                    </button>
                                </div> 
                            </form>
                        </div>
                    </div>
            </div>
            <div class="task-bar">
                <div class="row">
                    <div class="task task-1">
                        <a href="index">
                            <i class="fas fa-home f-x2 shadow"></i>
                        </a>
                    </div>
                    <div class="task task-1">
                        <a href="music">
                            <i class="fa fa-music f-x2 shadow"></i>
                        </a>
                    </div>
                    <div class="task task-2">
                        <a href="video">
                            <i class="fas fa-video shadow"></i>
                        </a>
                    </div>

                    <div class="task task-3">
                        <a href="album">
                            <i class="fas fa-record-vinyl shadow"></i>
                        </a>
                    </div>

                    <div class="task task-3">
                        <div>
                            <i class="fas fa-search f-x2 shadow" id="task-search"></i>
                        </div>
                    </div>
                </div>
            </div>';
    }
    public function topProducts($o){
        if(is_array($o["TopProducts"]) && !empty($o["TopProducts"])){
            foreach($o["TopProducts"] AS $product){
                $params = "scx=".$product["rand_id"]."&&controller=".$product["pcc_id"]."&&code_scanner=".$product["f_size"]."&&thread=".$product["p_id"];
                $cart_details = "'$product[p_id]'".','."'$product[pcc_id]'".','."'$product[title]'".','."'$product[price]'".','."'$product[main_artist]'".','."'$product[pkg_id]'";
                echo '<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 trending-music-card">
                <div class="sframe shadow">
                    <div class="scrop">
                        <img src="'.$product["store_url"].$product["icon_name"].'" alt="song-artwork">
                    </div>
                    <div class="sframe-detail">';
                        if($product["pac_id"]!=3){
                            echo '<div class="buy-download-tag" onclick="addCartItem(this,'.$cart_details.');">
                                <i class="fa fa-shopping-basket"></i>
                            </div>';
                        }
                    echo '<div class="price"><strong>';
                            if($product["price"]!=0)
                                echo 'K'.$product["price"];
                            else 
                                echo "Free";
                        echo '</strong></div>
                        <a href="preview?'.$params.'">
                            <span class="stitle">'.$product["main_artist"].' - '.$product["title"].'</span><br>
                            <span class="spreacher">';
                                if($product["featured_artist"]!=0)
                                    echo $product["featured_artist"];
                                
                            echo '</span><br>
                            <div class="schurch-lang">
                                <span>'.$product["dn_name"].'</span>
                                <span>'.$product["lng_name"].'</span>
                            </div>
                        </a>
                        <hr>
                        <div class="sm-comedian date" id="sdate">
                            <div class="stag-one"><span>'.$product["dst_name"].', '.$product["stt_name"].'<span></div>
                            <div class="stag-two">
                                <span ><span><i class="fa fa-eye"></i>  5.5K<span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
            }
        }       
    }
    public function audioProducts($o){
        if(is_array($o) && !empty($o)){
            foreach($o AS $product){
                $params = "scx=".$product["rand_id"]."&&controller=".$product["pcc_id"]."&&code_scanner=".$product["f_size"]."&&thread=".$product["p_id"];
                $cart_details = "'$product[p_id]'".','."'$product[pcc_id]'".','."'$product[title]'".','."'$product[price]'".','."'$product[main_artist]'".','."'$product[pkg_id]'";
                echo '<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 trending-music-card">
                <div class="sframe shadow">
                    <div class="scrop">
                        <img src="'.$product["store_url"].$product["icon_name"].'" alt="song-artwork">
                    </div>
                    <div class="sframe-detail">
                        <div class="buy-download-tag" onclick="addCartItem(this,'.$cart_details.');">
                            <i class="fa fa-shopping-basket"></i>
                        </div>
                        <div class="price"><strong>';
                            if($product["price"]!=0)
                                echo 'K'.$product["price"];
                            else 
                                echo "Free";
                        echo '</strong></div>
                        <a href="preview?'.$params.'">
                            <span class="stitle">'.$product["main_artist"].' - '.$product["title"].'</span><br>
                            <span class="spreacher">';
                                if($product["featured_artist"]!=0)
                                    echo $product["featured_artist"];
                                
                            echo '</span><br>
                            <div class="schurch-lang">
                                <span>'.$product["dn_name"].'</span>
                                <span>'.$product["lng_name"].'</span>
                            </div>
                        </a>
                        <hr>
                        <div class="sm-comedian date" id="sdate">
                            <div class="stag-one"><span>'.$product["dst_name"].', '.$product["stt_name"].'<span></div>
                            <div class="stag-two">
                                <span ><span><i class="fa fa-eye"></i>  5.5K<span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
            }
        }       
    }
    public function videoProducts($o){
        if(is_array($o) && !empty($o)){
            foreach($o AS $product){
                $params = "scx=".$product["rand_id"]."&&controller=".$product["pcc_id"]."&&code_scanner=".$product["f_size"]."&&thread=".$product["p_id"];
                $cart_details = "'$product[p_id]'".','."'$product[pcc_id]'".','."'$product[title]'".','."'$product[price]'".','."'$product[main_artist]'".','."'$product[pkg_id]'";
                echo '<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 trending-music-card">
                        <div class="sframe shadow">
                            <div class="scrop">
                                <img src="'.$product["store_url"].$product["icon_name"].'" alt="song-artwork">
                            </div>
                            <div class="sframe-detail">
                                <div class="buy-download-tag" onclick="addCartItem(this,'.$cart_details.');">
                                    <i class="fa fa-shopping-basket"></i>
                                </div>
                                <div class="price"><strong>';
                                    if($product["price"]!=0)
                                        echo 'K'.$product["price"];
                                    else 
                                        echo "Free";
                                echo '</strong></div>
                                <a href="preview?'.$params.'">
                                    <span class="stitle">'.$product["main_artist"].' - '.$product["title"].'</span><br>
                                    <span class="spreacher">';
                                        if($product["featured_artist"]!=0)
                                            echo $product["featured_artist"];
                                        
                                    echo '</span><br>
                                    <div class="schurch-lang">
                                        <span>'.$product["dn_name"].'</span>
                                        <span>'.$product["lng_name"].'</span>
                                    </div>
                                </a>
                                <hr>
                                <div class="sm-comedian date" id="sdate">
                                    <div class="stag-one"><span>'.$product["dst_name"].', '.$product["stt_name"].'<span></div>
                                    <div class="stag-two">
                                        <span ><span><i class="fa fa-eye"></i>  5.5K<span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>';
            }
        }       
    }
    public function albumProducts($o){
        if(is_array($o) && !empty($o)){
            foreach($o AS $product){
                $params = "scx=".$product["rand_id"]."&&controller=".$product["pcc_id"]."&&code_scanner=".$product["f_size"]."&&thread=".$product["p_id"];
                $cart_details = "'$product[p_id]'".','."'$product[pcc_id]'".','."'$product[title]'".','."'$product[price]'".','."'$product[main_artist]'".','."'$product[pkg_id]'";
                echo '<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 trending-music-card">
                <div class="sframe shadow">
                    <div class="scrop">
                        <img src="'.$product["store_url"].$product["icon_name"].'" alt="song-artwork">
                    </div>
                    <div class="sframe-detail">
                        <div class="buy-download-tag" onclick="addCartItem(this,'.$cart_details.');">
                            <i class="fa fa-shopping-basket"></i>
                        </div>
                        <div class="price"><strong>'; 
                            if($product["price"]!=0)
                                echo 'K'.$product["price"];
                            else 
                                echo "Free";
                        echo '</strong></div>
                        <a href="preview?'.$params.'">
                            <span class="stitle">'.$product["main_artist"].' - '.$product["title"].'</span><br>
                            <span class="spreacher">';
                                if($product["featured_artist"]!=0)
                                    echo $product["featured_artist"];
                                
                            echo '</span><br>
                            <div class="schurch-lang">
                                <span>'.$product["dn_name"].'</span>
                                <span>'.$product["lng_name"].'</span>
                            </div>
                        </a>
                        <hr>
                        <div class="sm-comedian date" id="sdate">
                            <div class="stag-one"><span>'.$product["dst_name"].', '.$product["stt_name"].'<span></div>
                            <div class="stag-two">
                                <span ><span><i class="fa fa-eye"></i>  5.5K<span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
            }
        }       
    }
    public function products($o){
        if(is_array($o) && !empty($o)){
            foreach($o AS $product){
                $params = "scx=".$product["rand_id"]."&&controller=".$product["pcc_id"]."&&code_scanner=".$product["f_size"]."&&thread=".$product["p_id"];
                $cart_details = "'$product[p_id]'".','."'$product[pcc_id]'".','."'$product[title]'".','."'$product[price]'".','."'$product[main_artist]'".','."'$product[pkg_id]'";
                echo '<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 trending-music-card">
                <div class="sframe shadow">
                    <div class="scrop">
                        <img src="'.$product["store_url"].$product["icon_name"].'" alt="song-artwork">
                    </div>
                    <div class="sframe-detail">';
                        if($product["pac_id"]!=3){
                            echo '<div class="buy-download-tag" onclick="addCartItem(this,'.$cart_details.');">
                                <i class="fa fa-shopping-basket" ></i>
                            </div>';
                        }
                    echo '<div class="price"><strong>';
                            if($product["price"]!=0)
                                echo 'K'.$product["price"];
                            else 
                                echo "Free";
                        echo '</strong></div>
                        <a href="preview?'.$params.'">
                            <span class="stitle">'.$product["main_artist"].' - '.$product["title"].'</span><br>
                            <span class="spreacher">';
                                if($product["featured_artist"]!=0)
                                    echo $product["featured_artist"];
                                
                            echo '</span><br>
                            <div class="schurch-lang">
                                <span>'.$product["dn_name"].'</span>
                                <span>'.$product["lng_name"].'</span>
                            </div>
                        </a>
                        <hr>
                        <div class="sm-comedian date" id="sdate">
                            <div class="stag-one"><span>'.$product["dst_name"].', '.$product["stt_name"].'<span></div>
                            <div class="stag-two">
                                <span ><span><i class="fa fa-eye"></i>  5.5K<span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
            }
        }else {
            echo '<h6 class="err_products">
                    <i class="fa fa-robot"></i>
                    <br>
                    Sorry, No Results Found
                </h6>';
        }     
    }
    public function sort_language($o){
        if(is_array($o) && !empty($o)){
            foreach($o AS $sort){
                echo '<a href="search?scx='.$sort["lng_name"].'" class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 language-card-wrap">
                    <div class="language-card shadow">
                        <i class="fa fa-language fa-2x"></i>
                        <h6 class="language-name">'.$sort["lng_name"].'</h6>
                    </div>
                </a>';
            }
        }else {
            echo '<h6 class="err_products">
                    <i class="fa fa-robot"></i>
                    <br>
                    Sorry, No Results Found
                </h6>';
        }           
    }
    public function sort_denomination($o){
        if(is_array($o) && !empty($o)){
            foreach($o AS $sort){
                echo'<a href="search?scx='.$sort["dn_name"].'" class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 denom-card-wrap">
                    <div class="denom-card shadow">
                        <i class="fa fa-church fa-2x"></i>
                        <h6 class="denom-name">'.$sort["dn_name"].'</h6>
                    </div>
                </a>';
            }
        }else {
            echo '<h6 class="err_products">
                    <i class="fa fa-robot"></i>
                    <br>
                    Sorry, No Results Found
                </h6>';
        }          
    }
    public function sort_places($o){
        if(is_array($o) && !empty($o)){
            foreach($o AS $sort){
                echo'<a href="search?scx='.$sort["stt_name"].'" class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 denom-card-wrap">
                    <div class="denom-card shadow">
                        <i class="fa fa-city fa-2x"></i>
                        <h6 class="denom-name">'.$sort["stt_name"].' Province</h6>
                    </div>
                </a>';
            }
        }else {
            echo '<h6 class="err_products">
                    <i class="fa fa-robot"></i>
                    <br>
                    Sorry, No Results Found
                </h6>';
        }          
    }
    public function headers(){
        echo '<title>Nyumba - Real Estate</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta charset="UTF-8">
        <link rel="icon" href="./assets/nyumba-logo-01.png" type="image/png" size="16x16">
        <meta name="keywords" content="Gospel Music | Download Gospel Music | Africa Gospel Music | 
                                        African Gospel Music | World Wide Gospel Music | Download New Gospel Music |
                                        Nigerian Gospel Music | Zambia Gospel Music | US Gospel Music |
                                        UK Gospel Music | Best Gospel Music | Trending Gospel Music | Worship Music |
                                        Catholic Music | Pentecost Music | Pentecost Worship | Pentecost Praise |  
                                        Anglican Music | Episcope Music | Sermons | Trending Sermons | Preachers | Christian Ministry |
                                        Love | Faith | Hope | God | Jesus | Prayer | Good | Light | Eternal Life | Salvation | Peace |" >
        <meta name="Author" content="Omae-Software-Zambia | +260967721900 | +260977742472 | omaesoftware@gmail.com">
        <meta name="Description" content="World Community of Christian Content Including:Sermons and Music">
        <link rel="stylesheet" type="text/css" href="./libraries/styles/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="./libraries/styles/fontawesome/css/all.css">
        <link rel="stylesheet" type="text/css" href="./libraries/styles/css/app/anime.css">
        <link rel="stylesheet" type="text/css" href="./libraries/styles/css/app/home.gw.css">
        <script src="./libraries/js/jquery.js"></script>
        <script src="./libraries/js/anime.js" type="text/javascript"></script>';
    }
    public function headers_footer(){
        echo '<script src="./libraries/js/jquery.js"></script>
            <script src="./libraries/js/app/utilsJQ.js"></script>
            <script src="./libraries/js/app/utils.js"></script>
            <script src="./libraries/js/anime.js" type="text/javascript"></script>
            <script src="./libraries/styles/bootstrap/js/bootstrap.js"></script>';
    }
    public function s_audio_or_video($product){
        if(is_array($product) && !empty($product)){
                $cart_details = "'$product[p_id]'".','."'$product[pcc_id]'".','."'$product[title]'".','."'$product[price]'".','."'$product[main_artist]'".','."'$product[pkg_id]'";
                $song_bytes = $product["f_size"];
                $kilo_byte = 1024;
                $byte = 1024;
                $song_kb = ($song_bytes/$kilo_byte);
                $song_mb = ($song_kb/$byte);
                $s_mb = round($song_mb,2);
                echo '<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="artwork">
                            <img src="'.$product["store_url"].$product["icon_name"].'" alt="artwork">
                            <div class="artwork-details">
                                <h6><strong>';
                                    if(($product["price"]!=0)){
                                        echo "<span>K".$product["price"]."</span>";
                                    }else{
                                        echo "<span class='s-avail-status'>Available Free</span>";
                                    }
                                    echo '</strong>
                                </h6>';
                                    if(($product["price"]!=0)){
                                        echo '<div class="btn btn-sm btn-block btn-buy" onclick="addCartItem(this,'.$cart_details.');"> 
                                                <strong>ADD TO BASKET</strong>
                                            </div>';
                                    }else{
                                        echo '<a href="'.$product["store_url"].$product["file_name"].'" 
                                                class="btn btn-sm btn-block btn-buy" 
                                                download
                                                onclick="downloadUnicast('.$product["p_id"].');"> 
                                                <strong><i class="fa fa-download"></i> DOWNLOAD ('.$s_mb.')</strong>
                                        </a>';
                                    }
                                
                            echo '</div>
                        </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 file-details">
                    <div class="wrap-file-details">
                        <h6>
                            <span class="product-title">'.$product["title"].'</span>
                            <br>
                            <small class="product-artist">';
                                if(($product["featured_artist"]!="")||($product["featured_artist"]!=0)){
                                    echo $product["main_artist"].' ft '.$product["featured_artist"].'</small>';
                                }else{
                                    echo $product["main_artist"].'</small>';
                                }
                        echo '</h6>
                        <table>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="file-key">Category:</td>
                                    <td class="file-value">'.$product["pcc_name"].'</td>
                                </tr>
                                <tr>
                                    <td class="file-key">Genre:</td>
                                    <td class="file-value">'.$product["pgc_title"].'</td>
                                </tr>
                                <tr>
                                    <td class="file-key">Church:</td>
                                    <td class="file-value">'.$product["dn_name"].'</td>
                                </tr>
                                <tr>
                                    <td class="file-key">Language:</td>
                                    <td class="file-value">'.$product["lng_name"].'</td>
                                </tr>
                                <tr>
                                    <td class="file-key">Location:</td>
                                    <td class="file-value">'.$product["dst_name"].', '.$product["stt_name"].'</td>
                                </tr>
                                <tr>
                                    <td class="file-key">Published:</td>
                                    <td class="file-value">'.date("F ,D d ,Y",strtotime($product["p_stamp"])).'.</td>
                                </tr>
                            </tbody>
                        </table>
                        <footer class="share-to-platforms">
                            <h6>Share:</h6>
                            <div class="share-options">
                                <a href="" onclick="shareUnicast('.$product["p_id"].',1);"><i class="fab fa-facebook"></i></a>
                                <a href="" onclick="shareUnicast('.$product["p_id"].',3);"><i class="fab fa-twitter"></i></a>
                                <a href="" onclick="shareUnicast('.$product["p_id"].',2);"><i class="fab fa-whatsapp"></i></a>
                                <a href="" onclick="shareUnicast('.$product["p_id"].',4);"><i class="fab fa-instagram"></i></a>
                            </div>
                        </footer>
                    </div>
                </div>';
            
        }else {
            echo '<h6 class="err_products">
                    <i class="fa fa-robot"></i>
                    <br>
                    Sorry, No Results Found
                </h6>';
        }     
    }
    public function s_album_free($product,$a_details,$a_songs){
        if((is_array($product) && !empty($product)) && (is_array($a_details) && !empty($a_details))
            && (is_array($a_songs) && !empty($a_songs))){
                $cart_details = "'$product[p_id]'".','."'$product[pcc_id]'".','."'$product[title]'".','."'$product[price]'".','."'$product[main_artist]'".','."'$product[pkg_id]'";
            echo '<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">';
                        echo ' <div class="artwork-2">
                                    <img src="'.$product["store_url"].$product["icon_name"].'" alt="artwork">
                                    <div class="artwork-details-2">
                                        <h6><strong>';
                                            if(($product["price"]!=0)){
                                                echo "<span>K".$product["price"]."</span>";
                                            }else{
                                                echo "<span class='s-avail-status'>Available Free</span>";
                                            }
                                        echo '</strong>
                                        </h6>';
                                            if(($product["price"]!=0)){
                                                echo '<div class="btn btn-sm btn-block btn-buy" onclick="addCartItem(this,'.$cart_details.');"> 
                                                        <strong>ADD TO BASKET</strong>
                                                    </div>';
                                            }else{
                                               
                                            }
                                        
                                echo '</div>
                        </div>
                </div>    
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 file-details-2">
                    <div class="wrap-file-details-2">
                        <h6>
                            <span class="product-title">'.$product["title"].'</span>
                            <br>
                            <small class="product-artist">'; 
                                if(($product["featured_artist"]!=0)){
                                    echo $product["main_artist"].' ft '.$product["featured_artist"].'</small>';
                                }else{
                                    echo $product["main_artist"].'</small>';
                                }
                            echo '</small>
                        </h6>
                        <table>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="file-key">Category:</td>
                                    <td class="file-value">'.$product["pcc_name"].'</td>
                                </tr>
                                <tr>
                                    <td class="file-key">Release:</td>
                                    <td class="file-value">'.$a_details["a_year"].'</td>
                                </tr>
                                <tr>
                                    <td class="file-key">Tracks:</td>
                                    <td class="file-value">'.$a_details["a_num_songs"].'</td>
                                </tr>
                                <tr>
                                    <td class="file-key">Producer:</td>
                                    <td class="file-value">'.$a_details["a_producer"].'</td>
                                </tr>
                                <tr>
                                    <td class="file-key">Genre:</td>
                                    <td class="file-value">'.$product["pgc_title"].'</td>
                                </tr>
                                <tr>
                                    <td class="file-key">Church:</td>
                                    <td class="file-value">'.$product["dn_name"].'</td>
                                </tr>
                                <tr>
                                    <td class="file-key">Language:</td>
                                    <td class="file-value">'.$product["lng_name"].'</td>
                                </tr>
                                <tr>
                                    <td class="file-key">Location:</td>
                                    <td class="file-value">'.$product["dst_name"].', '.$product["stt_name"].'</td>
                                </tr>
                                <tr>
                                    <td class="file-key">Published:</td>
                                    <td class="file-value">'.date("F ,D d ,Y",strtotime($product["p_stamp"])).'</td>
                                </tr>
                            </tbody>
                        </table>
                        <footer class="share-to-platforms">
                            <h6>Share:</h6>
                            <div class="share-options">
                                <a href="" onclick="shareUnicast('.$product["p_id"].',1);"><i class="fab fa-facebook"></i></a>
                                <a href="" onclick="shareUnicast('.$product["p_id"].',3);"><i class="fab fa-twitter"></i></a>
                                <a href="" onclick="shareUnicast('.$product["p_id"].',2);"><i class="fab fa-whatsapp"></i></a>
                                <a href="" onclick="shareUnicast('.$product["p_id"].',4);"><i class="fab fa-instagram"></i></a>
                            </div>
                        </footer>
                    </div>
                </div>';
                
                echo '<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 file-details-2">
                    <div class="wrap-file-details-2">
                        <h6>
                            <span>Collection Tracks</span>
                            <br>
                            <small>'.$a_details["a_num_songs"].' Tracks</small>
                        </h6>
                                <div>';
                                        foreach($a_songs as $song){
                                            $song_bytes = $song['sa_size'];
                                            $kilo_byte = 1024;
                                            $byte = 1024;
                                            $song_kb = ($song_bytes/$kilo_byte);
                                            $song_mb = ($song_kb/$byte);
                                            $s_mb = round($song_mb,2,PHP_ROUND_HALF_UP);
                                            echo '<div class="track-wrap">
                                                <h5 class="track-title">'.$song["sa_title"].'</h5>
                                                <div class="track-buttons">
                                                    <span class="size">'.$s_mb.'MB</span>
                                                    <div class="action-btns">
                                                        <a class="download" href="'.$product["store_url"].$song["sa_file_name"].'" download><i class="fas fa-download"></i></a>
                                                        <a class="listen" href="'.$product["store_url"].$song["sa_file_name"].'"><i class="fas fa-play"></i></a>
                                                    </div>
                                                </div>
                                            </div>';
                                        }
                                    
                                echo '</div>
                    </div>
                </div>';
        }else {
            echo '<h6 class="err_products">
                    <i class="fa fa-robot"></i>
                    <br>
                    Sorry, No Results Found
                </h6>';
        }     
    }
    public function s_album_sold($product,$a_details,$a_songs){
        if((is_array($product) && !empty($product)) && (is_array($a_details) && !empty($a_details))
            && (is_array($a_songs) && !empty($a_songs))){
                $cart_details = "'$product[p_id]'".','."'$product[pcc_id]'".','."'$product[title]'".','."'$product[price]'".','."'$product[main_artist]'".','."'$product[pkg_id]'";
            echo '<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">';
                        echo ' <div class="artwork-2">
                                    <img src="'.$product["store_url"].$product["icon_name"].'" alt="artwork">
                                    <div class="artwork-details-2">
                                        <h6><strong>';
                                            if(($product["price"]!=0)){
                                                echo "<span>K".$product["price"]."</span>";
                                            }else{
                                                echo "<span class='s-avail-status'>Available Free</span>";
                                            }
                                        echo '</strong>
                                        </h6>';
                                            if(($product["price"]!=0)){
                                                echo '<div class="btn btn-sm btn-block btn-buy" onclick="addCartItem(this,'.$cart_details.');"> 
                                                        <strong>ADD TO BASKET</strong>
                                                    </div>';
                                            }else{
                                               
                                            }
                                        
                                echo '</div>
                        </div>
                </div>    
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 file-details-2">
                    <div class="wrap-file-details-2">
                        <h6>
                            <span class="product-title">'.$product["title"].'</span>
                            <br>
                            <small class="product-artist">'; 
                                if(($product["featured_artist"]!=0)){
                                    echo $product["main_artist"].' ft '.$product["featured_artist"].'</small>';
                                }else{
                                    echo $product["main_artist"].'</small>';
                                }
                            echo '</small>
                        </h6>
                        <table>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="file-key">Category:</td>
                                    <td class="file-value">'.$product["pcc_name"].'</td>
                                </tr>
                                <tr>
                                    <td class="file-key">Release:</td>
                                    <td class="file-value">'.$a_details["a_year"].'</td>
                                </tr>
                                <tr>
                                    <td class="file-key">Tracks:</td>
                                    <td class="file-value">'.$a_details["a_num_songs"].'</td>
                                </tr>
                                <tr>
                                    <td class="file-key">Producer:</td>
                                    <td class="file-value">'.$a_details["a_producer"].'</td>
                                </tr>
                                <tr>
                                    <td class="file-key">Genre:</td>
                                    <td class="file-value">'.$product["pgc_title"].'</td>
                                </tr>
                                <tr>
                                    <td class="file-key">Church:</td>
                                    <td class="file-value">'.$product["dn_name"].'</td>
                                </tr>
                                <tr>
                                    <td class="file-key">Language:</td>
                                    <td class="file-value">'.$product["lng_name"].'</td>
                                </tr>
                                <tr>
                                    <td class="file-key">Location:</td>
                                    <td class="file-value">'.$product["dst_name"].', '.$product["stt_name"].'</td>
                                </tr>
                                <tr>
                                    <td class="file-key">Published:</td>
                                    <td class="file-value">'.date("F ,D d ,Y",strtotime($product["p_stamp"])).'</td>
                                </tr>
                            </tbody>
                        </table>
                        <footer class="share-to-platforms">
                            <h6>Share:</h6>
                            <div class="share-options">
                                <a href="" onclick="shareUnicast('.$product["p_id"].',1);"><i class="fab fa-facebook"></i></a>
                                <a href="" onclick="shareUnicast('.$product["p_id"].',3);"><i class="fab fa-twitter"></i></a>
                                <a href="" onclick="shareUnicast('.$product["p_id"].',2);"><i class="fab fa-whatsapp"></i></a>
                                <a href="" onclick="shareUnicast('.$product["p_id"].',4);"><i class="fab fa-instagram"></i></a>
                            </div>
                        </footer>
                    </div>
                </div>';
                
                echo '<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 file-details-2">
                    <div class="wrap-file-details-2">
                        <h6>
                            <span>Collection Tracks</span>
                            <br>
                            <small>'.$a_details["a_num_songs"].' Tracks</small>
                        </h6>
                                <div>';
                                        foreach($a_songs as $song){
                                            $song_bytes = $song['sa_size'];
                                            $kilo_byte = 1024;
                                            $byte = 1024;
                                            $song_kb = ($song_bytes/$kilo_byte);
                                            $song_mb = ($song_kb/$byte);
                                            $s_mb = round($song_mb,2,PHP_ROUND_HALF_UP);
                                            echo '<div class="track-wrap">
                                                <h5 class="track-title">'.$song["sa_title"].'</h5>
                                                <div class="track-buttons">
                                                    <span class="size">'.$s_mb.'MB</span>
                                                    <div class="action-btns">
                                                        <a class="download" href="'.$product["store_url"].$song["sa_file_name"].'" download><i class="fas fa-download"></i></a>
                                                        <a class="listen" href="'.$product["store_url"].$song["sa_file_name"].'"><i class="fas fa-play"></i></a>
                                                    </div>
                                                </div>
                                            </div>';
                                        }
                                    
                                echo '</div>
                    </div>
                </div>';
        }else {
            echo '<h6 class="err_products">
                    <i class="fa fa-robot"></i>
                    <br>
                    Sorry, No Results Found
                </h6>';
        }     
    }
    public function s_product($product,$a_details,$a_songs){
        if($product["pcc_id"] != 3)
            $this->s_audio_or_video($product);
        else {
            if($product["pac_id"]!=3){
                $this->s_album_sold($product,$a_details,$a_songs);
            }else 
                $this->s_album_free($product,$a_details,$a_songs);
        }
    }
    public function chart($o){
        if(is_array($o) && !empty($o)){
            $count = 0;
            foreach($o AS $product){
                $count+=1;
                $params = "scx=".$product["rand_id"]."&&controller=".$product["pcc_id"]."&&code_scanner=".rand(1,PHP_INT_MAX)."&&thread=".$product["p_id"];
                 echo '<div class="chart-song">
                    <div>
                        <span class="chart-number">#'.$count.'</span>
                    </div>
                    <a href="preview?'.$params.'">
                        <span class="chart-song-title">'.$product["main_artist"].' - '.$product["title"].'</span>
                        <br>';
                        if($product["featured_artist"]!=0){
                            echo '<span class="chart-song-features">'.$product["featured_artist"].'</span>';
                        }
                    echo '</a>
                </div>'; 
            }
        }else echo '<h6 style="text-align:center;">Chart Unlisted Today</h6>';     
    }
}