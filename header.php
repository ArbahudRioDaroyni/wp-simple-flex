<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "header" tag.
 *
 * @link https://github.com/ArbahudRioDaroyni/wp-simple-flex
 * @package WP Simple Flex
 * @subpackage WP Simple Flex
 * @since 1.0.0
 */
  
?>
<?php ob_start("minifier"); ?> 
<!doctype html>
<html <?= $a=(isset($_GET['amp']))?'amp':'' ?> <?php language_attributes(); ?>>
  <head>
    <?php get_template_part( 'template-parts/header/header', 'meta' ); ?>
    <?= $url = (!isset($_GET['amp'])) ? '<link rel="amphtml" href="' . get_permalink() . '?amp" />' : '' ?>
    <?php if(isset($_GET['amp'])){ ?>
      <style amp-custom>.carousel{padding-left:0;overflow:overlay;-ms-overflow-style:none}.carousel::-webkit-scrollbar{display:none}.carousel .carousel-list .carousel-container{flex:0 0 120px;border:1px #ccc solid;border-radius:8px;position:relative;vertical-align:top;text-decoration:none}.carousel .carousel-list .carousel-container:hover{box-shadow:4px 4px 6px #ccc;transition:.4s}.carousel .carousel-list .carousel-container:hover .carousel-cta{fill:#0b929e;margin-right:-12px;transition:all ease .5s}.carousel .carousel-list .carousel-container:hover .carousel-title{color:#0b929e;transition:all ease .5s}.carousel .carousel-list .carousel-container .carousel-card{justify-content:space-between;flex:1 1 auto}.carousel .carousel-list .carousel-container .carousel-card .carousel-image>figure{width:100%;overflow:hidden;position:relative;border-top-left-radius:8px 8px;border-top-right-radius:8px 8px}.carousel .carousel-list .carousel-container .carousel-card .carousel-image>figure>img{position:absolute;margin:auto;min-height:100%;min-width:100%;left:-100%;right:-100%;top:-100%;bottom:-100%;object-fit:cover}.carousel .carousel-list .carousel-container .carousel-card .carousel-image>figure amp-img{min-height:100%}.carousel .carousel-list .carousel-container .carousel-card .carousel-content>h5{color:gray;margin-top:2rem;margin-bottom:4px;font-weight:400}.carousel .carousel-list .carousel-container .carousel-card .carousel-content .carousel-title{color:#000;margin-top:6px;font-size:18px;font-weight:400}.carousel .carousel-list .carousel-container .carousel-card .carousel-info{justify-content:space-between;align-items:center}.carousel .carousel-list .carousel-container .carousel-card .carousel-info .time{color:gray}.carousel .carousel-list .carousel-container .carousel-card .carousel-info .carousel-cta{height:18px;width:18px}.carousel-pagination{border:none;text-align:center}.carousel-dot{-webkit-appearance:none}@media screen and (min-width: 992px){.carousel-container{width:280px;height:390px;margin:24px 24px 2rem}.carousel-container:first-of-type{margin:24px 24px 2rem 0}.carousel-content{margin:0 2rem 0}.carousel-content>h5{font-size:14px}.carousel-info{margin:0 2rem 0;margin-bottom:2rem}.carousel-list:first-of-type{margin-left:calc(50% - 292px)}.carousel-image>figure{height:13rem}.carousel-info>span{font-size:14px}}@media screen and (max-width: 768px){.carousel-container{width:240px;height:320px;margin:24px 18px 2rem 18px}.carousel-container:first-of-type{margin:24px 18px 2rem 0}.carousel-content{margin:0 1rem 0}.carousel-content>h5{font-size:1rem}.carousel-info{margin:0 1rem 0;margin-bottom:1rem}.carousel-list:first-of-type{margin-left:calc(50% - 120px)}.carousel-image>figure{height:9rem}.carousel-info>span{font-size:14px}}.footer-gblog{margin-top:3rem;padding:2rem 0;background:#d9d9d9}.footer-gblog .follow-us{display:flex;padding:1rem;align-items:center;justify-content:flex-start;margin-bottom:2rem}.footer-gblog .follow-us p{color:#000;font-size:16px;font-weight:500;margin:0 32px 0 0}.footer-gblog .follow-us .follow-us-list{display:flex;padding:0;margin:0}.footer-gblog .follow-us .follow-us-list li{margin-right:32px;background:transparent;transition:all 0.3s ease}.footer-gblog .nav-bottom{padding-top:1rem;border-top:1px solid #dadce0;display:flex;flex-direction:column}.footer-gblog .nav-bottom img{width:35%}.footer-gblog .nav-bottom ul{padding:0;display:flex;flex-flow:row wrap}.footer-gblog .nav-bottom ul li{margin:0.5rem;background:transparent;transition:all 0.3s ease;list-style:none}.footer-gblog .nav-bottom ul li a{display:flex;color:#404040;margin:5px 10px;font-size:14px;font-weight:500;text-decoration:none}.footer-gblog .nav-bottom ul li a:hover{color:#000}.footer-gblog .nav-bottom .help{text-decoration:none;margin-left:1rem}.footer-gblog .nav-bottom .help li{margin:0}@media (max-width: 768px){.footer-gblog .follow-us .follow-us-list li{margin-right:1rem}}.dropdown2{position:relative;display:inline-block;text-align:left}.dropdown2:hover .dropdown-content2{display:flex;flex-direction:column;margin-top:59px}.dropdown-content2{display:none;position:absolute;background-color:#fff;min-width:160px;box-shadow:0px 8px 16px 0px rgba(0,0,0,0.2);z-index:100}.dropdown-content2 a{color:#555555;padding:12px 16px;text-decoration:none;display:block}.dropdown-content2 a:hover{color:#000}.nav-other{height:7vh;width:7vh}.dropdown3{position:relative;display:inline-block;text-align:left}.dropdown-content3{display:none;position:absolute;background-color:#fff;min-width:120px;box-shadow:0px 8px 16px 0px rgba(0,0,0,0.2);z-index:100}.dropdown-content3 a{color:#555555;padding:12px 16px;text-decoration:none;display:block}.dropbtn3 p{text-align:center}.dropdown-content3 a:hover{color:#000}.dropdown3:hover .dropdown-content3{display:block;margin-top:2rem}.navbar{background:#fff;padding:0 1rem 0;z-index:99;width:100%;position:fixed;top:0;box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 5px 0 rgba(0,0,0,0.23);font-family:Google Sans,Roboto,Arial,Helvetica}.navbar .navbar-main{position:relative;-ms-flex-pack:justify;justify-content:space-between;padding:0 1rem}.navbar .navbar-main .nav-toggler{width:7vh;height:7vh;font-size:1.1rem;line-height:-1;background-color:transparent;border:1px solid transparent;border-radius:0.25rem;display:none}.navbar .navbar-main .nav-logo img{width:auto;height:6vh}.navbar .navbar-main .navbar-search{width:7vh;height:7vh;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center}.navbar .navbar-main .navbar-search button{border:0;font-size:1.1rem;cursor:pointer;z-index:2;outline:0}.navbar .navbar-main .navbar-search-input{position:absolute;width:100%;height:100%;background:#fff;top:0;z-index:2;display:none;-webkit-transition:.5s;transition:.5s;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between}.navbar .navbar-main .navbar-search-input section{background:#efefef;border-radius:6px;flex:1 1 100%;padding-top:5px;padding-bottom:5px}.navbar .navbar-main .navbar-search-input button{border:0;background:0;padding:12px;outline:0;cursor:pointer}.navbar .navbar-main .navbar-search-input input{border:0;background:0;padding:12px;outline:0;width:80%}.navbar .navbar-main .navbar-menu{-ms-flex-preferred-size:100%;flex-basis:100%;-ms-flex-positive:1;flex-grow:1}.navbar .navbar-main .navbar-menu .mainmenu-blog{display:flex;list-style:none;padding:0 40px;margin:0}.navbar .navbar-main .navbar-menu .mainmenu-blog li{display:inherit}.navbar .navbar-main .navbar-menu .mainmenu-blog li a{display:flex;align-items:center;color:#4d4d4d;text-decoration:none;font-size:14px;padding:18px 9px;text-transform:unset;border-bottom:2px solid transparent;transition:all 0.4s ease;font-size:16px}.navbar .navbar-main .navbar-menu .mainmenu-blog li a:hover{color:#000;border-bottom:2px solid #3367D6}.navbar .navbar-main .navbar-menu .mainmenu-blog li .active{color:#000;border-bottom:2px solid #3367D6}@media (min-width: 768px){.navbar .navbar-main{-ms-flex-flow:row nowrap;flex-flow:row nowrap;-ms-flex-pack:start;justify-content:flex-start}.navbar .navbar-main .navbar-menu{display:-ms-flexbox;display:flex;-ms-flex-preferred-size:auto;flex-basis:auto}}@media (max-width: 767px){.navbar{box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 5px 0 rgba(0,0,0,0.23);padding:0;clear:both}.navbar .navbar-main{flex-wrap:wrap;padding:1vh}.navbar .navbar-main .nav-toggler{display:-webkit-box;display:-ms-flexbox;display:flex}.navbar .navbar-main .navbar-menu{border-top:2px solid #e6e6e6}.navbar .navbar-main .navbar-menu .mainmenu-blog{padding:10px 0;flex:1 1 100%;flex-direction:column;flex-wrap:wrap}.navbar .navbar-main .navbar-menu .mainmenu-blog li{display:flex;border-right:none}.navbar .navbar-main .navbar-menu .mainmenu-blog li a{text-align:left;padding:18px 12px;margin:0 10px 0 0}.navbar .navbar-main .navbar-menu .mainmenu-blog li .active{display:flex;flex:1 1 100%;background:#F5F5F5;border-bottom:2px solid transparent;border-top-right-radius:25px;border-bottom-right-radius:25px;margin-bottom:7px}.navbar .navbar-main .navbar-search-input{margin-left:14px}}#btn-close{margin-right:16px;font-size:120%}.drop-box{position:absolute;left:0;width:100%;height:0vh;z-index:99;background:white;-webkit-transition:.5s;transition:.5s;-webkit-box-shadow:0px -1px 4px rgba(58,56,56,0.157);box-shadow:0px -1px 4px rgba(58,56,56,0.157);overflow:hidden;display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;font-size:16px}.drop-box section{display:none}.drop-box ul{margin:0;width:30%;list-style:none}.drop-box ul li{width:100%;text-align:left;padding:20px}.drop-box ul li:nth-child(1){font-weight:bold;color:#6c6f74;border-bottom:2px solid #f1f3f4}.drop-box ul a{text-decoration:none;color:#6c6f74}.drop-box ul a:hover{color:#0b929e;transition:all 0.4s ease}@media screen and (max-width: 800px){#about{-webkit-transform:rotate(-90deg);transform:rotate(-90deg)}.drop-box{width:80%;height:0;position:fixed;top:0;margin-top:0;z-index:3;overflow-y:scroll}.drop-box ul{width:100%}.drop-box ul li{margin-left:2%}.drop-box section{width:100%;height:10vh;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center}.drop-box section a{margin-left:7%;text-decoration:none;color:#6c6f74;font-size:120%}.drop-box section a i{font-weight:bold}}.pagination-area{margin-top:4rem}.pagination{margin:0;padding:0;list-style:none;list-style-type:none;border-radius:0.25rem}.page-link{position:relative;padding:0rem 0.75rem;margin-left:-1px;line-height:1.25;color:#696969;font-size:17px;font-weight:600;background-color:transparent;border:none;text-decoration:none}.page-link:hover,.page-link.active{color:#00334d}button:focus{outline:none}.btn{background:#0b929e;color:#fff;border:none;font-size:14px;text-decoration:none;display:flex;align-items:center;justify-content:center;font-weight:500;padding:14px 24px;transition:all .4s ease;cursor:pointer}.btn:hover{background-color:#0dafbe}.btn-outline{background:#fff;color:#0b929e;border:1px solid #0b929e}.btn-outline:hover{background:#0b929e;color:#fff}.btn-icon{background:transparent;border:none;height:40px;margin:0;padding:0;width:40px;cursor:pointer;color:#666;fill:#666}.btn-icon:hover{background:#eee;transition:width .2s,height .2s,left .2s,top .2s,background .2s;border-radius:50%}img{width:100%}.img-cover{display:-webkit-box;display:-moz-box;display:-ms-flexbox;display:-webkit-flex;display:flex;-webkit-box-orient:horizontal;-moz-box-orient:horizontal;box-orient:horizontal;flex-direction:row;-webkit-box-pack:center;-moz-box-pack:center;box-pack:center;justify-content:center;-webkit-box-align:center;-moz-box-align:center;box-align:center;align-items:center}.img-cover .img{-webkit-box-flex:1;-moz-box-flex:1;box-flex:1;-webkit-flex:1 1 auto;flex:1 1 auto;padding:0;margin:0;text-align:center}.img-full{width:100%}.boor-area .boor-content{display:flex;justify-content:center;margin:auto}.boor-area .boor-content .boor-h{font-size:28px;font-weight:600;color:#282820;margin:0 0 15px 0}.boor-area .boor-content .boor-text{font-size:17px;font-weight:normal;color:#747373;margin-bottom:12px}.boor-area .boor-content .boor-meta,.boor-area .boor-content .boor-date{color:gray;margin:0}.boor-area .boor-content .boor-author,.boor-area .boor-content .boor-category{font-size:17px;font-weight:600;color:#747373;margin:0}.category-headline{align-items:center}.category-headline .ch-img{background:url("../C19-Impact-hero.gif");background-repeat:no-repeat;background-position:50%;background-size:cover}.category-headline .ch-description{padding:0 2rem}.category-headline .ch-description .ch-name h4{line-height:1.57143;font-size:14px;letter-spacing:1.5px;color:#1a1a1a;font-weight:500;text-transform:uppercase}.category-headline .ch-description .ch-name h4:hover{color:#0b929e;text-decoration:none;transition:all ease .5s}.category-headline .ch-description .ch-content{cursor:pointer;padding:0}.category-headline .ch-description .ch-content .ch-text{display:block;text-decoration:none;color:#1a1a1a}.category-headline .ch-description .ch-content .ch-text h3{font-size:26px;line-height:35px;margin-bottom:0;margin-top:20px;font-weight:500}.category-headline .ch-description .ch-content .ch-text p{font-size:16px;line-height:26px;margin-bottom:30px;color:#414141}.category-headline .ch-description .ch-content .ch-cta{font-weight:bold;letter-spacing:.02778em;text-transform:uppercase;color:#1a1a1a;white-space:nowrap;font-size:14px;line-height:1.571;text-decoration:none;transition:all 0.4s ease}.category-headline .ch-description .ch-content .ch-icon{height:18px;width:29px;padding-left:10px}.category-headline .ch-description .ch-content:hover .ch-cta{color:#0b929e;text-decoration:none}.category-headline .ch-description .ch-content:hover .ch-icon{fill:#0b929e;margin-left:10px;transition:all ease .5s}.category-block{padding:1rem}.category-block .cb-name h4{line-height:1.57143;font-size:14px;letter-spacing:1.5px;color:#1a1a1a;font-weight:500;text-transform:uppercase}.category-block .cb-name:hover h4{color:#0b929e;transition:all ease .5s}.category-block .cb-content{cursor:pointer}.category-block .cb-content:hover h3{color:#0b929e;transition:all ease .5s}.category-block .cb-content h3{line-height:1.36364;font-size:22px;font-weight:600;letter-spacing:0;margin:8px 0 12px}.category-block .cb-content .img img,.category-block .cb-content .img amp-img{width:100%;height:240px;object-fit:cover}.category-story h2{font-weight:500}.category-story a{padding:2rem 0;border-bottom:1px solid #d9d9d9;text-decoration:none}.category-story .cs-content h4{font-size:14px;font-weight:600;color:gray;margin:0;margin-bottom:10px;text-transform:uppercase}.category-story .cs-content h3{font-size:22px;line-height:1.25;letter-spacing:0;color:#4d4d4d;font-weight:600;margin:0}.category-story .cs-img figure img,.category-story .cs-img figure amp-img{height:120px;object-fit:cover}.category-story .btn{text-align:center}@media only screen and (min-width: 576px){.ch-img{padding:187px 0}.ch-description .ch-name h4{margin-top:0}.category-story{padding:0 3rem}.category-story .btn{padding:1.5rem 0;font-size:18px;font-weight:600}}@media screen and (max-width: 576px){.ch-img{padding:107px 0}.ch-description{padding:1rem}.ch-description .ch-description .ch-name h4{margin-top:inherit}.category-story{padding:0 1rem}.category-story .cs-img figure{margin-top:1rem}.category-story .cs-img figure img,.category-story .cs-img figure amp-img{height:160px;object-fit:cover}.category-story .btn{padding:1rem 0;font-size:14px;font-weight:500}}.feature-trand{padding:60px 0}.featured .f-h{font-size:24px;font-weight:bold;color:#262626}.featured .f-pst .f-pst-title{font-size:18px;font-weight:500;color:#262626;margin:1rem 0}.featured .f-pst .f-pst-content,.featured .f-pst .f-pst-meta,.featured .f-pst .f-pst-footer{font-size:14px;font-weight:normal;color:gray;margin-top:0}.featured .f-pst .f-pst-meta{margin-bottom:0.2rem}.featured .f-pst .f-pst-meta,.featured .f-pst .f-pst-footer{font-size:12px}.featured .f-pst .f-pst-meta .f-pst-author,.featured .f-pst .f-pst-meta .f-pst-category,.featured .f-pst .f-pst-footer .f-pst-author,.featured .f-pst .f-pst-footer .f-pst-category{font-size:13px;font-weight:500;color:gray}.featured .f-pst .btn-outline{margin-bottom:1rem}.featured .f-pst figure img,.featured .f-pst figure amp-img{height:230px;object-fit:cover}.featured .f-lst{margin:0 0 1rem}.featured .f-lst .f-lst-box{display:flex;margin-bottom:2rem;height:120px;cursor:pointer}.featured .f-lst .f-lst-box:hover{box-shadow:0px 0px 10px 1px #ccc;transition:all 0.4s ease}.featured .f-lst .f-lst-box .f-lst-img{width:35%;height:auto}.featured .f-lst .f-lst-box .f-lst-img img,.featured .f-lst .f-lst-box .f-lst-img amp-img{height:100%;object-fit:cover}.featured .f-lst .f-lst-box .f-lst-content{width:65%;margin-left:1rem;display:flex;flex-direction:column;padding:.5rem 0;margin-top:auto;margin-bottom:auto}.featured .f-lst .f-lst-box .f-lst-content .f-list-title{font-size:18px;font-weight:600;color:#262626;margin:0 0 0.5rem}.featured .f-lst .f-lst-box .f-lst-content .f-lst-meta,.featured .f-lst .f-lst-box .f-lst-content .f-lst-footer{font-size:13px;font-weight:normal;color:gray;margin:0}.featured .f-lst .f-lst-box .f-lst-content .f-lst-meta .f-lst-author,.featured .f-lst .f-lst-box .f-lst-content .f-lst-meta .f-lst-category,.featured .f-lst .f-lst-box .f-lst-content .f-lst-footer .f-lst-author,.featured .f-lst .f-lst-box .f-lst-content .f-lst-footer .f-lst-category{font-size:13px;font-weight:600;color:gray;margin:0}.featured .f-lst .f-lst-box .f-lst-content .f-lst-meta{margin-bottom:0.2rem}.hentry .entry-header .a-category{line-height:1.5;font-size:12px;font-weight:500;letter-spacing:1.25px;text-transform:uppercase}.hentry .entry-header .a-category:hover{color:#0b929e;transition:all 0.4s ease}.hentry .entry-header .entry-title{margin:0.5rem 0 0}.hentry .entry-header .entry-title a:hover{color:#0b929e;transition:all 0.4s ease}.hentry .hero-img{padding:0 1rem}.hentry .hero-img img{max-height:500px;padding-bottom:1rem;object-fit:cover}.hentry .entry-meta{font-size:1rem}.hentry .entry-meta .vcard{font-weight:500;margin-bottom:5px}.hentry .entry-meta .author-role{margin-bottom:1rem}.hentry .entry-meta .entry-date{font-size:.8rem;padding-bottom:1rem;color:#666;font-weight:400}.hentry .entry-content h1,.hentry .entry-content h2,.hentry .entry-content h3,.hentry .entry-content h4,.hentry .entry-content h5,.hentry .entry-content h6{margin:1rem 0}.hentry .entry-content p{margin:1rem 0;letter-spacing:0;line-height:1.644;color:#666}.hentry .entry-content p:first-of-type{margin-top:0}.hentry .entry-content p:last-of-type{margin-bottom:0}.hentry .entry-content ul{padding-left:2rem}.hentry .entry-content ol{padding-left:2rem}.hentry .entry-content li,.hentry .entry-content figcaption{letter-spacing:0;line-height:1.644;color:#666;text-align:left;font-size:1rem;padding-left:.5rem}.hentry .entry-content strong{font-weight:500;color:#000}.hentry .entry-content img{height:100%;max-height:460px;object-fit:cover}.hentry .entry-content a{color:#0b929e}.hentry .entry-content a:hover{text-decoration:underline}.hentry .entry-content iframe{width:100%;height:auto}@media (max-width: 767px){.hentry .hero-img{padding:0}.hentry .hero-img img{max-height:225px;padding-bottom:0.5rem}.hentry .entry-meta{border-bottom:1px gray solid;margin-bottom:1rem}.hentry aside{margin-top:1rem}}.mrp-box{margin-bottom:2rem;padding-bottom:2rem;border-bottom:1px solid #ccc}.mrp-box:first-of-type{margin-top:1rem}.mrp-box:last-of-type{border-bottom:none}.mrp-box .mrp-pst{margin-bottom:1rem}.mrp-box .mrp-pst .mrp-tag{font-size:14px;font-weight:700;color:#999;margin:0;text-transform:uppercase}.mrp-box .mrp-pst .mrp-h{font-size:18px;font-weight:600;color:#000;margin:8px 0}.mrp-box .mrp-pst .mrp-text,.mrp-box .mrp-pst p{font-size:14px;font-weight:normal;color:#666;margin:0;margin-bottom:10px}.mrp-box .mrp-pst .mrp-author,.mrp-box .mrp-pst .mrp-category{font-size:14px;font-weight:600;color:#666;margin:0}.tranding .trd-h{font-size:24px;font-weight:bold;color:#262626}.tranding .trd-box{display:flex;flex-flow:row nowrap;padding:1rem 0 1rem;clear:both;cursor:pointer;border-bottom:1px solid #ccc}.tranding .trd-box:last-of-type{border-bottom:none}.tranding .trd-box:hover{background-color:#dffafd;transition:all 0.4s ease}.tranding .trd-number{flex:1 1 20%;text-align:center}.tranding .trd-number span{font-size:25px;color:#a6a6a6;font-weight:600}.tranding .trd-content{flex:1 1 80%;margin-left:12px}.tranding .trd-content .trd-title{font-size:16px;font-weight:600;color:#262626;margin:0 0 0.5rem}.tranding .trd-content p,.tranding .trd-content time{font-size:13px;font-weight:normal;color:gray;margin:0}.tranding .trd-content p span,.tranding .trd-content time span{font-size:13px;font-weight:600;color:gray;margin:0}.flex{display:flex;display:-ms-flexbox}.flex-nowrap{flex-wrap:nowrap}.flex-wrap{flex-wrap:wrap}.flex-center{align-items:center;-webkit-box-align:center;-ms-flex-align:center}.flex-full-center{justify-content:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center}.flex-columns{flex-direction:column}.flex-columns-nowrap{flex-flow:column nowrap}.container{width:100%;padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto}.row{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap}@media (max-width: 576px){.row{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap}.container{max-width:540px}}@media screen and (min-width: 577px) and (max-width: 767px){.row{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap}.container{max-width:540px}}@media screen and (min-width: 768px) and (max-width: 991px){.container{max-width:720px}.row{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap}}@media screen and (min-width: 992px) and (max-width: 1199px){.container{max-width:960px}.row{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap}}@media screen and (min-width: 1200px){.container{max-width:1140px}}@media screen and (min-width: 1400px){.container{max-width:1320px}}@media (min-width: 992px){.full-width{-ms-flex:100%;flex:100%}.full-width-1{-ms-flex:0 0 8.33333%;flex:0 0 8.33333%;max-width:8.33333%;padding-right:15px;padding-left:15px;position:relative}.full-width-2{-ms-flex:0 0 16.66667%;flex:0 0 16.66667%;max-width:16.66667%;padding-right:15px;padding-left:15px;position:relative}.full-width-3{-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%;padding-right:15px;padding-left:15px;position:relative}.full-width-4{-ms-flex:0 0 33.33333%;flex:0 0 33.33333%;max-width:33.33333%;padding-right:15px;padding-left:15px;position:relative}.full-width-5{-ms-flex:0 0 41.66667%;flex:0 0 41.66667%;max-width:41.66667%;padding-right:15px;padding-left:15px;position:relative}.full-width-6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%;padding-right:15px;padding-left:15px;position:relative}.full-width-7{-ms-flex:0 0 58.33333%;flex:0 0 58.33333%;max-width:58.33333%;padding-right:15px;padding-left:15px;position:relative}.full-width-8{-ms-flex:0 0 66.66667%;flex:0 0 66.66667%;max-width:66.66667%;padding-right:15px;padding-left:15px;position:relative}.full-width-9{-ms-flex:0 0 75%;flex:0 0 75%;max-width:75%;padding-right:15px;padding-left:15px;position:relative}.full-width-10{-ms-flex:0 0 83.33333%;flex:0 0 83.33333%;max-width:83.33333%;padding-right:15px;padding-left:15px;position:relative}.full-width-11{-ms-flex:0 0 91.66667%;flex:0 0 91.66667%;max-width:91.66667%;padding-right:15px;padding-left:15px;position:relative}}@media screen and (min-width: 320px) and (max-width: 991px){.full-width{-ms-flex:100%;flex:100%}.full-width-1{-ms-flex:100%;flex:100%;width:100%}.full-width-2{-ms-flex:100%;flex:100%;width:100%}.full-width-3{-ms-flex:100%;flex:100%;width:100%}.full-width-4{-ms-flex:100%;flex:100%;width:100%}.full-width-5{-ms-flex:100%;flex:100%;width:100%}.full-width-6{-ms-flex:100%;flex:100%;width:100%}.full-width-7{-ms-flex:100%;flex:100%;width:100%}.full-width-8{-ms-flex:100%;flex:100%;width:100%}.full-width-9{-ms-flex:100%;flex:100%;width:100%}.full-width-10{-ms-flex:100%;flex:100%;width:100%}.full-width-11{-ms-flex:100%;flex:100%;width:100%}}a{text-decoration:none;color:#000}.heading{font-weight:bold;color:#000}.h1,h1,.h2,h2,.h3,h3,.h4,h4,.h5,h5,.h6,h6{line-height:1.344;letter-spacing:-.05px;font-weight:400;word-wrap:normal;-moz-osx-font-smoothing:grayscale;-webkit-font-smoothing:antialiased;text-rendering:optimizeLegibility}.h1,h1{font-size:3rem}.h2,h2{font-size:2.5rem}.h3,h3{font-size:2rem}.h4,h4{font-size:1.5rem}.h5,h5{font-size:1.25rem}.h6,h6{font-size:1rem}@media (max-width: 768px){.h1,h1{font-size:2rem}.h2,h2{font-size:1.75rem}.h3,h3{font-size:1.5rem}.h4,h4{font-size:1.25rem}.h5,h5{font-size:1rem}.h6,h6{font-size:.75rem}}@media (max-width: 576px){.mrpm-txt h3{font-size:13px}.md-none{display:none}}@media (min-width: 577px) and (max-width: 767px){.md-none{display:none}}@media (min-width: 992px) and (max-width: 1199px){.boor-txt{padding:0px 0}.boor-txt h3{font-size:25px}.mrp-pst h3{font-size:15px;margin:0}.mrpm-txt h3{font-size:15px}}@media (prefers-reduced-motion: reduce){.nav-coll:not(.show){display:none}}*,::before,::after{box-sizing:border-box;-webkit-box-sizing:border-box}figure{margin:0}body{margin:0;padding:0;background:#fff;font-family:-apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"}hr{margin-top:0;margin-bottom:2rem;border-top:2px solid rgba(0,0,0,0.1);border-right:none;border-left:none;border-bottom:none}hr:before{content:"";width:65px;height:2px;background:#282820;display:block}.lsn{list-style:none}.section{padding-top:9vh}.hide{display:none}.show{display:flex}.m-0{margin:0}.mt-0{margin-top:0}.mt-1{margin-top:1rem}.mt-2{margin-top:2rem}.mb-1{margin-bottom:1rem}.p-set{padding:1rem 1rem 2rem}.p-0{padding:0}.pl-0{padding-left:0}.pr-0{padding-right:0}.pt-1{padding-top:1rem}.pb-1{padding-bottom:1rem}.mp-0{margin:0;padding:0}@media (min-width: 768px){.dk-none{display:none}.md-none{display:flex}.section{padding-top:14vh}}@media (max-width: 768px){.dk-none{display:flex}.md-none{display:none}}</style>
      <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
    <?php }else{ ?>
      <link rel="stylesheet" media="screen" type="text/css" href="<?= get_template_directory_uri() ?>/css/main.min.css?ver=1.4"/>
    <?php } ?>
  </head>
  <body>
    <?= $ads = (isset($_GET['amp'])) ? '<amp-auto-ads type="adsense" data-ad-client="ca-pub-5419652163962979"></amp-auto-ads>' : '' ?>
    <header>
      <?php get_template_part( 'template-parts/header/header', 'navigation' ); ?>
    </header>