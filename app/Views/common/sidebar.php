
<style>
.logo-wrap {
    display: flex;
    align-items: center;
}

.company-logo {
    width: 50px;   /* smaller logo */
    height: auto;
    margin-right: 10px;
}

.company-name {
  font-size: 25px;    /* 🔹 increase font size */
  font-weight: bold;
  color: #333;
  padding-left: 10px;
  border-left: 2px solid #333; /* vertical line */
}

/*.company-name-mobile {
  font-size: 20px;    /* 🔹 increase font size * /
  font-weight: bold;
  color: #333;
  /*padding-left: 10px;* /
  border-left: 2px solid #333; /* vertical line * /
}*/

.topbar-area {
    background-color: #008000;
}

/*.company-name-mobile {
  font-size: 20px;
  font-weight: bold;
  color: #333;
  /*padding-left: 10px;* /
  border-left: 2px solid #333;
  white-space: nowrap;      /* Prevents text wrapping * /
  display: inline-block;    /* Ensures proper alignment * /
  vertical-align: middle;   /* Aligns with logo vertically * /
}

.logo-mobile {
  display: flex;            /* Use flexbox for alignment * /
  align-items: center;      /* Center items vertically * /
  white-space: nowrap;      /* Prevent wrapping of entire container * /
}

.company-logo-mobile {
  display: inline-block;
  vertical-align: middle;
  height: 40px;    /* 🔹 Adjust height as needed * /
  width: 40px;     /* 🔹 Adjust width as needed * /
  object-fit: contain; /* 🔹 Maintains aspect ratio * /
}*/
</style>

<header class="header-one">
    <!-- Start top bar -->
    <div class="topbar-area fix hidden-xs">
        <div class="container">
            <div class="row">
                <div class=" col-md-10 col-sm-9">
                    <div class="topbar-left">
                        <ul>
                            <li><a href="#"><i class="fa fa-map-marker"></i> Plot no 4 , Ramadhani, Njombe</a></li>
                            <li class="hidden-sm"><a href="#"><i class="fa fa-clock-o"></i> Mon - Fri: 10:00 - 18:00</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i> info@sujathaglobal.co.tz</a></li>
                            <li><a href="#"><i class="fa fa-phone"></i> +255 679 199 555</a></li>
                        </ul>  
                    </div>
                </div>
                <div class="col-md-2 col-sm-3">
                    <div class="quote-button">
                        <a href="contact.html" class="quote-btn"  title="Quick view" data-toggle="modal" data-target="#quoteModal">Get a quote</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End top bar -->
    <!-- header-area start -->
    <div id="sticker" class="header-area header-area-4 hidden-xs">
        <div class="container">
            <div class="row">
                <!-- logo start -->
                <div class="col-md-5 col-sm-5">
                    <div class="logo">
                        <a class="navbar-brand page-scroll sticky-logo" href="<?= base_url('Home') ?>">
                            <div class="logo-wrap">
                                <img src="<?= base_url('assets/img/logo/logo_round.png') ?>" alt="Logo" class="company-logo">
                                <span class="company-name">SUJATHA GLOBAL COMPANY</span>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- logo end -->
                <div class="col-md-7 col-sm-7">
                    <div class="header-right-link">
                        <!-- search option start -->
                        <form action="#">
                            <div class="search-option">
                                <input type="text" placeholder="Search...">
                                <button class="button" type="submit"><i class="fa fa-search"></i></button>
                            </div>
                            <a class="main-search" href="#"><i class="fa fa-search"></i></a>
                        </form>
                        <!-- search option end -->
                    </div>
                    <!-- mainmenu start -->
                    <nav class="navbar navbar-default">
                        <div class="collapse navbar-collapse" id="navbar-example">
                            <div class="main-menu">
                                <ul class="nav navbar-nav navbar-right">
                                    
                                    <li><a href="<?= base_url('Home') ?>">Home</a></li>
                                    <li><a class="pagess" href="#">About us</a>
                                        <ul class="sub-menu">
                                            <li><a href="<?= base_url('About') ?>">About us</a></li>
                                            <li><a href="<?= base_url('About/team') ?>">Team</a></li>
                                            <li><a href="<?= base_url('About/faq') ?>">FAQ</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="" href="<?= base_url('Services') ?>">Services</a>
                                    </li>
                                    <li><a class="pagess" href="##">Projects</a>
                                        <ul class="sub-menu">
                                            <li><a href="#project-2.html">Project 2 Column</a></li>
                                            <li><a href="#project-3.html">Project 3 Column</a></li>
                                            <li><a href="#project-4.html">Project 4 Column</a></li>
                                            <li><a href="#single-project.html">Single Project</a></li>
                                        </ul>
                                    </li>
<!--                                     <li><a class="pagess" href="##">Blog</a>
                                        <ul class="sub-menu">
                                            <li><a href="#blog.html">Blog grid</a></li>
                                            <li><a href="#blog-sidebar.html">Blog Sidebar</a></li>
                                            <li><a href="#blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li> -->
                                    <li><a href="<?= base_url('Contact') ?>">contacts</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <!-- mainmenu end -->
                </div>
            </div>
        </div>
    </div>
    <!-- header-area end -->

    <!-- mobile-menu-area start -->
    <div class="mobile-menu-area hidden-lg hidden-md hidden-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mobile-menu">
                    <div class="logo">
                        <a class="navbar-brand page-scroll sticky-logo" href="#">
                            <div class="logo-mobile">
                                <img src="<?= base_url('assets/img/logo/logo_round.png') ?>" alt="Logo" class="company-logo-mobile">
                                <!-- <span class="company-name-mobile">SUJATHA GROBAL COMPANY</span> -->
                            </div>
                        </a>
                    </div>                        
                    <nav id="dropdown">
                            <ul>
                                <li><a href="<?= base_url('Home') ?>">Home</a>
                                </li>
                                <li><a class="pagess" href="#">About us</a> 
                                    <ul class="sub-menu">
                                        <li><a href="<?= base_url('About') ?>">About us</a></li>
                                        <li><a href="<?= base_url('About/team') ?>">Team</a></li>
                                        <li><a href="<?= base_url('About/faq') ?>">FAQ</a></li>
                                    </ul>
                                </li>
                                <li><a class="" href="<?= base_url('Services') ?>">Services</a>
                                </li>
                                <li><a class="pagess" href="#">Projects</a>
                                    <ul class="sub-menu">
                                        <li><a href="#project-2.html">Project 2 Column</a></li>
                                        <li><a href="#project-3.html">Project 3 Column</a></li>
                                        <li><a href="#project-4.html">Project 4 Column</a></li>
                                        <li><a href="#single-project.html">Single Project</a></li>
                                    </ul>
                                </li>
<!--                                 <li><a class="pagess" href="#">Blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="#blog.html">Blog grid</a></li>
                                        <li><a href="#blog-sidebar.html">Blog Sidebar</a></li>
                                        <li><a href="#blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li> -->
                                <li><a href="<?= base_url('Contact') ?>">contacts</a></li>
                            </ul>
                        </nav>
                    </div>                  
                </div>
            </div>
        </div>
    </div>
    <!-- mobile-menu-area end -->       
</header>

<!-- header end -->
