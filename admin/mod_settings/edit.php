<?php

 
$setting = new Setting();
$result = $setting->single_setting($_GET['id']);

?>
<form class="form-horizontal well span6" action="controller.php?action=edit" method="POST">

					<fieldset>
		<legend>New Setting</legend> 
          <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "DESCRIPTION">Description:</label>

              <div class="col-md-8"> 
              <input type="hidden" id="ID" name="ID" type="text" value="<?php Echo $result->ID;?>">
                 <textarea rows="6" class="form-control input-sm" id="DESCRIPTION" name="DESCRIPTION" placeholder=
									  "Description" type="textarea">   <?php Echo $result->DESCRIPTION;?></textarea>
              </div>
            </div>
          </div>  
          
          
          
          
          <!--<div class="form-group">
             <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "type">Type:</label>

              <div class="col-md-8">
                <select class="form-control input-sm" name="type" id="type"> 
                    <option value="Home Slider Message 1">Home Slider Message 1</option>
                    <option value="Home Slider Message 2">Home Slider Message 2</option> 
                    <option value="Home Slider Message 3">Home Slider Message 3</option> 
                    <option value="Room Reservation Write Ups">Room Reservation Write Ups</option> 
                    <option value="Pavilion Reservation Write Ups">Pavilion Reservation Write Ups</option> 
                    <option value="Pool Reservation Write Ups">Pool Reservation Write Ups</option> 
                    <option value="About Our Hotel Write Ups">About Our Hotel Write Ups</option>
                    <option value="Our Experience Write Ups">Our Experience Write Ups</option>
                    <option value="Successful Events Write Ups">Successful Events Write Ups</option>
                    <option value="Address">Address</option>
                    <option value="Phone #1 ">Phone #1 </option>
                    <option value="Phone #2 ">Phone #2 </option>
                    <option value="Email">Email </option>
                    <!-- <option value="Mission">Mission</option>
                    <option value="Vision">Vision</option>   
                    <option value="Facebook Link">Facebook Link</option>
                    <option value="Google Link">Google Link</option>
                    <option value="Twitter Link">Twitter Link</option>
                    <option value="LinkedIn Link">LinkedIn Link</option>
                    <option value="Instagram Link">Instagram Link</option>   
                   
                </select> 
              </div>
            </div>  
          </div>  --> 

		
		 <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "idno"></label>

              <div class="col-md-8">
                <button class="btn btn-primary" name="save" type="submit" >Save</button>
              </div>
            </div>
          </div>

			
	</fieldset>	
	
</form>
			
