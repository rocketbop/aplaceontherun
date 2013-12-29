<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>Current Properties</h1>
			<p>You can update or delete the following properties using the buttons below, or <a href="addProperty.php">add a new property.</a></p>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12 property-table table table-bordered table-striped">
			<table>
				<thead>
					<tr>
						<td>ID</td>
						<td>Address ID</td>
						<td>Address</td>
						<td>Town</td>
						<td>County</td>
						<td>Image</td>
						<td>House Type</td>
						<td>Price</td>
						<td>Update</td>
						<td>Delete</td>
					</tr>
				</thead>
				<tbody>
					{foreach $properties as $property}
						<tr>
							<td>{$property.property_id}</td>
							<td>{$property.address_id}</td>
							<td>{$property.address_line_1} <br /> {$property.address_line_2}</td>
							<td>{$property.town}</td>
							<td>{$property.county_name}</td>
							<td><img src="uploads/{$property.image_name}" alt="{$property.image_name}" width="150px"></td>
							<td>{$property.house_type}</td>
							<td>EUR {$property.monetary_value}</td>
							<td>
								<form role="form" method="post" action="updateProperty.php" enctype="multipart/form-data">
									<input type="hidden" name="property_id" value="{$property.property_id}">
									<input type="hidden" name="address_id" value="{$property.address_id}">
									<input name="form-submit" type="submit" value="Update" class="btn btn-warning"></input>
								</form>
							</td>
							<td>
								<form role="form" method="post" action="deleteProperty.php" enctype="multipart/form-data">
									<input type="hidden" name="property_id" value="{$property.property_id}">
									<input type="hidden" name="address_id" value="{$property.address_id}">
									<input name="form-submit" type="submit" value="Delete" class="btn btn-danger"></input>
								</form>
							</td>
						</tr>
					{/foreach}
				</tbody>
			</table>
		</div>	
	</div> <!-- Close row -->
</div>	<!-- Close container -->
