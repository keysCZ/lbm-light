<?php
ob_Start();
include("../../includes/header_catalogue.php");
$buffer=ob_get_contents();
ob_end_clean();

$buffer=str_replace("%TITLE%","AIR JORDAN 13",$buffer);
echo $buffer;
$path = '../../json/AirJordan/13.json';
?>
<div class="py-5 mb-0">
	<!-- SideBar -->
	<?php include("../../includes/filter.php"); ?>
	<header class="jumbotron py-5 bg-light text-center"></header>
	<div class="container main">
		<section>

			<div class="container"> 
				<div class="row text-center store-items" id="all-card">
				</div>
				<nav aria-label="Page navigation example" class="">
					<ul class="pagination justify-content-center">
						<li class="page-item">
							<a class="page-link" id="prev-page" href="javascript:void(0)" aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
							</a>
						</li>
					</ul>
				</nav>
			</div>
		</section>
	</div>
</div>


<?php include("../../includes/footer.php"); ?>
