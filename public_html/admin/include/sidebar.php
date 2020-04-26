<div class="span3">
					<div class="sidebar">


<ul class="widget widget-menu unstyled">
							<li>
								<a class="collapsed" data-toggle="collapse" href="#togglePages">
									<i class="menu-icon icon-cog"></i>
									<i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right"></i>
									Gerenciar os pedidos
								</a>
								<ul id="togglePages" class="collapse unstyled">
									<li>
										<a href="todays-orders.php">
											<i class="icon-tasks"></i>
											Pedidos de hoje
  <?php
  $f1="00:00:00";
$from=date('Y-m-d')." ".$f1;
$t1="23:59:59";
$to=date('Y-m-d')." ".$t1;
 $result = mysqli_query($con,"SELECT * FROM Orders where orderDate Between '$from' and '$to'");
$num_rows1 = mysqli_num_rows($result);
{
?>
											<b class="label orange pull-right"><?php echo htmlentities($num_rows1); ?></b>
											<?php } ?>
										</a>
									</li>
									<li>
										<a href="pending-orders.php">
											<i class="icon-tasks"></i>
										Pedidos Pendentes
										<?php	
	$status='Delivered';									 
$ret = mysqli_query($con,"SELECT * FROM Orders where orderStatus!='$status' || orderStatus is null ");
$num = mysqli_num_rows($ret);
{?><b class="label orange pull-right"><?php echo htmlentities($num); ?></b>
<?php } ?>
										</a>
									</li>
									<li>
										<a href="delivered-orders.php">
											<i class="icon-inbox"></i>
											Pedidos entregues
								<?php	
	$status='Delivered';									 
$rt = mysqli_query($con,"SELECT * FROM Orders where orderStatus='$status'");
$num1 = mysqli_num_rows($rt);
{?><b class="label green pull-right"><?php echo htmlentities($num1); ?></b>
<?php } ?>

										</a>
									</li>
								</ul>
							</li>
							
							<li>
								<a href="manage-users.php">
									<i class="menu-icon icon-group"></i>
									Gerenciar usuarios
								</a>
							</li>
						</ul>


						<ul class="widget widget-menu unstyled">
                                <li><a href="category.php"><i class="menu-icon icon-tasks"></i> Criar Categoria</a></li>
                                <li><a href="subcategory.php"><i class="menu-icon icon-tasks"></i>Subcategoria</a></li>
                                <li><a href="insert-product.php"><i class="menu-icon icon-paste"></i>Inserir produto</a></li>
                                <li><a href="manage-products.php"><i class="menu-icon icon-table"></i>Gerenciar produtos</a></li>
                        
                            </ul><!--/.widget-nav-->

						<ul class="widget widget-menu unstyled">
							<li><a href="user-logs.php"><i class="menu-icon icon-tasks"></i>Logs do Usuario </a></li>
							
							<li>
								<a href="logout.php">
									<i class="menu-icon icon-signout"></i>
									Deslogar
								</a>
							</li>
						</ul>

					</div><!--/.sidebar-->
				</div><!--/.span3-->
