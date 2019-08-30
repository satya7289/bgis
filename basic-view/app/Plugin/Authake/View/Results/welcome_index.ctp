<script>
$(document).ready(function(e) {
	$('.statuschange').change(function(){
		var val = $(this).val();	
		var status = 0;
		if(val == 1){
			status = "1";	
		}
		if(val == 2){
			status = "2";	
		}
		if(val == 3){
			status = "3";	
		}
		if(val == 4){
			status = "4";	
		}
		if(val == 5){
			status = "5";	
		}
		if(val == 6){
			status = "6";	
		}
		if(val == 7){
			status = "7";	
		}
		if(val == 8){
			status = "8";	
		}
		if(val == 9){
			status = "9";	
		}
		if(val == 10){
			status = "10";	
		}
		if(val == 11){
			status = "11";	
		}
		if(val == 12){
			status = "12";	
		}
		location.href = "http://www.bgis.org/authake/results/index/?q="+status;
	});	
});
</script>
<?php $groupIds = $this->Authake->getGroupIds();
		  $curGroup = $groupIds[0];
?>
<div class="widget widget-table action-table">
						<h3>
                                              PLEASE SELECT CLASS 
                                  <small>
                                
                                  </small>
                              
                                <div align="center" style="margin-left:-160px;">
                                    <select class="statuschange" name="status">
     <option value="0" <?php if(isset($this->request->query['q']) && $this->request->query['q'] == "Select Class"){ echo "selected"; }?>>Select Class</option>  
                                        <option value="1" <?php if(isset($this->request->query['q']) && $this->request->query['q'] == "1"){ echo "selected"; }?>>Class 1</option> 
                                           <option value="2" <?php if(isset($this->request->query['q']) && $this->request->query['q'] == "2"){ echo "selected"; }?>>Class 2</option> 
                                               <option value="3" <?php if(isset($this->request->query['q']) && $this->request->query['q'] == "3"){ echo "selected"; }?>>Class 3</option> 
                                                   <option value="4" <?php if(isset($this->request->query['q']) && $this->request->query['q'] == "4"){ echo "selected"; }?>>Class 4</option> 
                                                       <option value="5" <?php if(isset($this->request->query['q']) && $this->request->query['q'] == "5"){ echo "selected"; }?>>Class 5</option> 
                                                           <option value="6" <?php if(isset($this->request->query['q']) && $this->request->query['q'] == "6"){ echo "selected"; }?>>Class 6</option> 
                                                               <option value="7" <?php if(isset($this->request->query['q']) && $this->request->query['q'] == "7"){ echo "selected"; }?>>Class 7</option> 
                                                                   <option value="8" <?php if(isset($this->request->query['q']) && $this->request->query['q'] == "8"){ echo "selected"; }?>>Class 8</option> 
                                                                     <option value="9" <?php if(isset($this->request->query['q']) && $this->request->query['q'] == "9"){ echo "selected"; }?>>Class 9</option> 
                                                               <option value="10" <?php if(isset($this->request->query['q']) && $this->request->query['q'] == "10"){ echo "selected"; }?>>Class 10</option> 
                                                                   <option value="11" <?php if(isset($this->request->query['q']) && $this->request->query['q'] == "11"){ echo "selected"; }?>>Class 11</option>
                                                                   <option value="12" <?php if(isset($this->request->query['q']) && $this->request->query['q'] == "12"){ echo "selected"; }?>>Class 12</option> 
                                                                   
                                                                
                                    </select>
                                    
                                </div>
            <?php  if(($curGroup == 3)){ ?>
           <?php echo $this->Html->link(__('New Student'), array('action' => 'add'),array( "class"=>"btn btn-primary","style"=>"margin-left: 900px;margin-top: -75px;")); ?>
         <?php  }else{ ?>
          <?php echo $this->Html->link(__('New Student'), array('action' => 'add'),array( "class"=>"btn btn-primary","style"=>"margin-left: 610px;margin-top: -75px;")); ?>
           <?php echo $this->Html->link(__('List Student'), array('action' => 'index'),array( "class"=>"btn btn-primary","style"=>"margin-top: -75px;margin-left: 30px;")); ?>
         <?php } ?>
                         
	</div>
</div>