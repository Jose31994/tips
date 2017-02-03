 <div id="page">
<nav class="fh5co-nav" role="navigation">
		<div class="top">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-right">
						<!--<p class="num">Call: +01 123 456 7890</p>-->
						<ul class="fh5co-social">
							<li><a href="https://twitter.com/JoseAlbertoNoh" target="_blank"><i class="icon-twitter"></i></a></li>
							<li><a href="https://www.facebook.com/Jose191994" target="_blank"><i class="icon-facebook"></i></a></li>
							<li><a href="https://mx.linkedin.com/in/josenoh94" target="_blank"><i class="icon-linkedin"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="top-menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-1">
						<div id="fh5co-logo"><a href="default.php">Tips<span>.</span>esy<span>.</span>es</a></div>
					</div>
					<div class="col-xs-11 text-right menu-1">
						<ul>

						<?php
						if ($default) {
							 echo '<li class="active"><a href="default.php">Inicio</a></li>'; 
						}
						else
						{
							 echo '<li ><a href="default.php">Inicio</a></li>';
						}
						if ($book) {
							echo '<li class="active"><a href="books">Libros</a></li>';
						}
						else {
							echo '<li><a href="books">Libros</a></li>';
						}
						if ($software) {
							echo '<li class="active"><a href="software">Software</a></li>';
						}
						else {
							echo '<li><a href="software">Software</a></li>';
						}
                        if ($papers) {
							echo '<li class="active"><a href="papers">Papers</a></li>';
						}
						else {
							echo '<li><a href="papers">Papers</a></li>';
						}
						if ($tizimin) {
							echo '<li class="active"><a href="tizimin">Tizimín</a></li>';
						}else {
							echo '<li><a href="tizimin">Tizimín</a></li>';
						}
						if ($contacto) {
							echo '<li class="active"><a href="contact">Contacto</a></li>';
						}else {
							echo '<li><a href="contact">Contacto</a></li>';
						}

						 ?>
						
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</nav>