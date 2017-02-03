<?php
	include('conexion.php');
        $link=conectar();
?>


                  <br><br>
                                <form class="navbar-form centr"  role="search">
                                  <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                  </div>
                                  <button type="submit" class="btn btn-default">Submit</button>
                                </form>

                            	<div id="fh5co-blog" >
                        		<div class="container">
                                  <div class="row">

                        	<?php
                            $result = mysqli_query($link,"SELECT * FROM mapa ORDER BY nombre ASC");
                            while ($row=mysqli_fetch_array($result))
                            {
                                /*almacenamos el nombre de la ruta en la variable $ruta_img*/
                               $ruta_img = $row["ruta"];
                               $nombre=$row["nombre"];
                               $url1=$row["url1"];
                            ?>
                            			   <br>	<div class="col-md-4 col-lg-4 row-eq-height">
                            					<div class="fh5co-blog animate-box">
                            						<a href="tizimin/<?php echo $ruta_img;?>" ><img class="img-responsive zoom" src="tizimin/<?php echo $ruta_img;?>" alt=""></a>
                            						<div class="blog-text">
                            							<h3><a href=""#><?php echo $nombre;?></a></h3>
                            							<a href="<?php echo $url1;?>" class="btn btn-primary" target="_blank">Obtener</a>
                            						</div>
                            					</div>
                            				</div>
                            <?php
                              // echo '<img src="books/'.$ruta_img.'"/>';  class="btn btn-primary btn-lg popup-vimeo btn-video"
                               //echo $ruta_img;
                            }
                            mysqli_close();
                            	  ?>
                                    </div>
                        		</div>
                        	</div>




