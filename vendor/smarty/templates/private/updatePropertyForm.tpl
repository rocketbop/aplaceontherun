<div class="container">
  {foreach $properties as $property}
    <div class="row">
    <div class="col-md-12">
      <h1>Update Property Details</h1>  
      <h2>{$property.address_line_1}</h2>
      <p>Below are the details on record for {$property.address_line_1}. When you finish editing, submit the revised records.</p>
    </div>
   
  </div>
  <div class="row">
    <div class="col-md-12 add-property-form-background">

  <div class="row"> 
     <div class="add-property-form col-md-offset-2 col-md-8">
      <form role="form" method="post" action="updateProperty.php" enctype="multipart/form-data">

        <div class="form-group">
          <label for="address_line_1">Property Address line 1*</label>
          <h6>* Required</h6>
          <input type="text" class="form-control" name="address_line_1" id="address_line_1" value="{$property.address_line_1}">
        </div>

        <div class="form-group">
          <label for="address_line_2">Property Address line 2</label>
          <input type="text" class="form-control" name="address_line_2" id="address_line_2" value="{$property.address_line_2}">
        </div>

        <div class="form-group">
          <label for="town">Town*</label>
          <h6>* Required</h6>
          <input type="text" class="form-control" name="town" id="town" value="{$property.town}">
        </div>

        <div class="form-group">
          <label for="county_name">County</label>
          <select name="county_name"class="form-control">
            {foreach $counties as $county}
              <option>{$county.county_name}</option>
            {/foreach}
            <option selected="selected"><strong>{$property.county_name}</strong></option>  
          </select>
        </div>

        <div class="row">
          <div class="form-group col-md-4">
            <label for="property_image">Photo</label>
            <input type="file" name="property_image" id="property_image">
            <p class="help-block">Upload a photo of the property.</p>
          </div>

          <div class="col-md-6">
            <img src="uploads/{$property.image_name}" width="200px">
          </div> 
        </div>

        <div class="form-group">
          <label for="house_type">House Type</label>
          <select name="house_type" class="form-control">
            {foreach $houseTypes as $houseType}
              <option>{$houseType.house_type}</option>
            {/foreach} 
            <option selected="selected">{$property.house_type}</option> 
          </select>
        </div>

        <div class="form-group">
          <label for="monetary_value">Price*</label>
          <h6>* Required</h6>
          <input type="text" class="form-control" name="monetary_value" id="monetary_value" value="{$property.monetary_value}">
        </div>

        <div class="form-group">
        <input type="hidden" name="property_id" value="{$property.property_id}">
        <input type="hidden" name="address_id" value="{$property.address_id}">
        <input type="hidden" name="newDataForUpdating" value="yes">
        <input name="form-submit" value="Update" type="submit" class="btn btn-success"></input>
        </div>
      </form>
    </div>
  </div>
      </div>
  </div>
     {/foreach}
</div> <!-- Close container -->    