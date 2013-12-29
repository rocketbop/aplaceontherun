<div class="container">

    <div class="row">
    <div class="col-md-12">
      <h1>Add New Property</h1>
      <p>Enter the details for the property to be added. An image is recommended but not required.</p>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 add-property-form-background">

  <div class="row"> 
     <div class="add-property-form col-md-offset-2 col-md-8">
      <form role="form" method="post" action="addProperty.php" enctype="multipart/form-data">

        <div class="form-group">
          <label for="address_line_1">Property Address line 1*</label>
          <h6>* Required</h6>
          <input type="text" class="form-control" name="address_line_1" id="address_line_1" placeholder="Address Line 1">
        </div>

        <div class="form-group">
          <label for="address_line_2">Property Address line 2</label>
          <input type="text" class="form-control" name="address_line_2" id="address_line_2" placeholder="Address Line 2">
        </div>

        <div class="form-group">
          <label for="town">Town*</label>
          <h6>* Required</h6>
          <input type="text" class="form-control" name="town" id="town" placeholder="Town">
        </div>

        <div class="form-group">
          <label for="county_name">County</label>
          <select name="county_name"class="form-control">
            {foreach $properties as $property}
              <option>{$property.county_name}</option>
            {/foreach}  
          </select>
        </div>
        
        <div class="form-group">
          <label for="property_image">Photo</label>
          <input type="file" name="property_image" id="property_image">
          <p class="help-block">Upload a photo of the property.</p>
        </div>

        <div class="form-group">
          <label for="house_type">House Type</label>
          <select name="house_type" class="form-control">
            {foreach $houseTypes as $houseType}
              <option>{$houseType.house_type}</option>
            {/foreach}  
          </select>
        </div>

        <div class="form-group">
          <label for="monetary_value">Price*</label>
          <h6>* Required</h6>
          <input type="text" class="form-control" name="monetary_value" id="monetary_value" placeholder="Price">
        </div>

        <div class="form-group">
        <input type="hidden" name="tried" value="yes">
        <input name="form-submit" type="submit" class="btn btn-success"></input>
        </div>
      </form>
    </div>
  </div>
      </div>
  </div>
</div> <!-- Close container -->    