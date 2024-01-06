<?php
include "header.php";
?>

<div class="container my-5">
	<div class="row">
		<div class="col text-center">
			<div class="card">
				<div class="card-header display-6">
					Acciones sobre la BD
				</div>
				<div class="p-4">
					<div class="table-responsive">
						<table class="table table-primary">
							<thead>
								<tr>
									<th scope="col">Alta de producto</th>
									<th scope="col">Baja de producto</th>
									<th scope="col">Actualización de producto</th>
									<th scope="col">Listado de productos</th>
								</tr>
							</thead>
							<tbody>
								<tr class="">
									<td scope="row"><a href="alta.php"><i class="bi-database-add px-3" style="font-size: 4rem;"></i></a></td>
									<td scope="row"><a href="baja.php"><i class="bi-database-dash px-3" style="font-size: 4rem;"></i></a></td>
									<td scope="row"><a href="actualiza.php"><i class="bi-database-check px-3" style="font-size: 4rem;"></i></a></td>
									<td scope="row"><a href="listado.php"><i class="bi-database-down px-3" style="font-size: 4rem;"></i></a></td>
								</tr>
							</tbody>
						</table>
					</div>

				</div>
			</div>

		</div>
	</div>
</div>

<?php
include "footer.php";
?>