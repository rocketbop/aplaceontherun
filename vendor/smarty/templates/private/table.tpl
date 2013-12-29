<div class="container">
	<div class="row">
		<div class="col-md-12 property-table table table-bordered table-striped">
			<table>
				<thead>
					<tr>
						<td>ID</td>
						<td>Address Line 1</td>
						<td>County</td>
						<td>Image</td>
						<td>House Type</td>
						<td>Price</td>
					</tr>
				</thead>
				<tbody>
					{foreach $properties as $property}
						<tr>
							<td>{$property.property_id}</td>
							<td>{$property.address_line_1}</td>
							<td>{$property.county_name}</td>
							<td><img src="uploads/{$property.image_name}" alt="{$property.image_name}" width="150px"></td>
							<td>{$property.house_type}</td>
							<td>{$property.monetary_value}</td>
						</tr>
					{/foreach}
				</tbody>
			</table>
		</div>	
	</div> <!-- Close row -->
</div>	<!-- Close container -->
