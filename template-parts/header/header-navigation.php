<?php
/**
 * The template for displaying the top navigation
 *
 * Displays all of the navigation element and everything up until the "navbar" div.
 *
 * @link https://jejakcyber.com
 *
 * @package flex-theme
 * @subpackage flex-theme-jejakcyber
 * @since flex-theme-jejakcyber 1.0
 */	

?>

<div class="navbar" id="full">
	<nav class="navbar-main flex flex-center">
		<div class="nav-toggler mp-0 flex-full-center">
			<button class="flex nav-tog-icon btn-icon flex-full-center" onclick="toggleSide()" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<svg height="24" id="h-burger" viewBox="0 0 24 24" width="24" role="img">
					<path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path>
				</svg>
			</button>
		</div>
		<a href="<?= get_home_url() ?>">
			<figure class="nav-logo m-0">
				<img class="flex" title="Jejak Cyber" src="https://randdsoftindonesia.com/wp-content/uploads/2019/12/Randd-Soft-300x57.png" alt="Jejak Cyber">
			</figure>
		</a>
		<div class="navbar-search">
			<button class="flex flex-full-center btn-icon" onclick="toggleSearch(1)">
				<svg xmlns="http://www.w3.org/2000/svg" height="16px" version="1.1" viewBox="-1 0 136 136.21852" width="16px" role="img">
					<g id="surface1">
						<path d="M 93.148438 80.832031 C 109.5 57.742188 104.03125 25.769531 80.941406 9.421875 C 57.851562 -6.925781 25.878906 -1.460938 9.53125 21.632812 C -6.816406 44.722656 -1.351562 76.691406 21.742188 93.039062 C 38.222656 104.707031 60.011719 105.605469 77.394531 95.339844 L 115.164062 132.882812 C 119.242188 137.175781 126.027344 137.347656 130.320312 133.269531 C 134.613281 129.195312 134.785156 122.410156 130.710938 118.117188 C 130.582031 117.980469 130.457031 117.855469 130.320312 117.726562 Z M 51.308594 84.332031 C 33.0625 84.335938 18.269531 69.554688 18.257812 51.308594 C 18.253906 33.0625 33.035156 18.269531 51.285156 18.261719 C 69.507812 18.253906 84.292969 33.011719 84.328125 51.234375 C 84.359375 69.484375 69.585938 84.300781 51.332031 84.332031 C 51.324219 84.332031 51.320312 84.332031 51.308594 84.332031 Z M 51.308594 84.332031 " style=" stroke:none;fill-rule:nonzero;fill-opacity:1;" />
					</g>
				</svg>
			</button>
		</div>
		<div class="navbar-search-input flex-center" id="nav-search">
			<section>
				<form action="#" method="GET">
					<button>
						<svg xmlns="http://www.w3.org/2000/svg" height="16px" version="1.1" viewBox="-1 0 136 136.21852" width="16px" role="img">
							<g id="surface1">
								<path d="M 93.148438 80.832031 C 109.5 57.742188 104.03125 25.769531 80.941406 9.421875 C 57.851562 -6.925781 25.878906 -1.460938 9.53125 21.632812 C -6.816406 44.722656 -1.351562 76.691406 21.742188 93.039062 C 38.222656 104.707031 60.011719 105.605469 77.394531 95.339844 L 115.164062 132.882812 C 119.242188 137.175781 126.027344 137.347656 130.320312 133.269531 C 134.613281 129.195312 134.785156 122.410156 130.710938 118.117188 C 130.582031 117.980469 130.457031 117.855469 130.320312 117.726562 Z M 51.308594 84.332031 C 33.0625 84.335938 18.269531 69.554688 18.257812 51.308594 C 18.253906 33.0625 33.035156 18.269531 51.285156 18.261719 C 69.507812 18.253906 84.292969 33.011719 84.328125 51.234375 C 84.359375 69.484375 69.585938 84.300781 51.332031 84.332031 C 51.324219 84.332031 51.320312 84.332031 51.308594 84.332031 Z M 51.308594 84.332031 " style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" />
							</g>
						</svg>
					</button>
					<input type="text" name="search" placeholder="Cari sesuatu..">
				</form>
			</section>
			<button onclick="toggleSearch(0)">
				<svg width="22px" height="22px" role="img" id="btn-close" viewBox="0 0 24 24">
					<path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path>
					<path d="M0 0h24v24H0z" fill="none"></path>
				</svg>
			</button>
		</div>
		<div class="navbar-menu md-none flex-center" id="topside">
			<ul class="mainmenu-blog g-menu" id="">
				<li><a href="#" class="active"> Halaman Utama</a></li>
				<li>
					<a href="#" onclick="toggleDropBox()" class="dropbtn flex">Pilihan Kategori 
						<svg id="about" height="24" width="24">
							<path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z"></path>
						</svg>
					</a>
				</li>
				<li class="dropdown2">
					<a href="#" class="">Company news <i class="fa fa-angle-down"></i></a>
					<div id="" class="dropdown-content2">
						<a href="#">Google.org</a>
						<a href="#">Doodle</a>
						<a href="#">Grow with google</a>
					</div>
				</li>
				<li class="dk-none" style="border-top: 2px solid #DADCE0;"><a href="#">Press corner</a></li>
				<li class="dk-none"><a id="close-side" href="#" style="margin: 0 10px;">RSS feed</a></li>
				<section onclick="toggleSide(1)" id="close-side"></section>
			</ul>
		</div>
		<div class="nav-other flex-full-center md-none">
			<button class="dropdown3 flex flex-full-center btn-icon">
				<span class="dropbtn3 flex">
					<svg id="mi-more-vert" height="24" viewBox="0 0 24 24" width="24">
						<path d="M0 0h24v24H0z" fill="none"></path>
						<path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"></path>
					</svg>
					<div id="myDropdown3" class="dropdown-content3">
						<a href="#">Press corner</a>
						<a href="#">RSS feed <i class="fa fa-rss"></i></a>
					</div>
				</span>
			</button>
		</div>
		<div class="md-none"><a class="btn btn-outline" href="#">Subscribe</a></div>
	</nav>
	<div id="drop-box" class="drop-box">
		<section><a href="#" onclick="toggleDropBox()"><i class="fa fa-angle-left"></i> &nbsp;Back</a></section>
		<ul class="full-width-3">
			<li>Aplikasi</li>
			<li><a href="#">Android</a></li>
			<li><a href="#">Ios</a></li>
			<li><a href="#">Windows</a></li>
			<li><a href="#">Mac</a></li>
		</ul>
		<ul class="full-width-3">
			<li>Gadget</li>
			<li><a href="#">Smartphone</a></li>
			<li><a href="#">Tablet</a></li>
			<li><a href="#">Laptop</a></li>
			<li><a href="#">Komputer</a></li>
		</ul>
		<ul class="full-width-3">
			<li>Tips & Trick</li>
			<!-- <li><a href="#">Yoga</a></li>
			<li><a href="#">Yanto</a></li>
			<li><a href="#">Ali</a></li>
			<li><a href="#">Fian</a></li> -->
		</ul>
		<ul class="full-width-3">
			<li>Out of IT</li>
			<li><a href="#">CoVid-19</a></li>
		</ul>
		<!-- <a href="#" class="full-width-12">Lorem ipsum, dolor sit amet consectetur.</a> -->
		<section onclick="toggleSide(1)" id="close-side"></section>
	</div>
</div>
<!-- header-area end -->