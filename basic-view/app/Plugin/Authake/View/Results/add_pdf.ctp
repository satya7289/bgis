<style>
#UploadStatus
{
margin-left: 70px;
margin-top: -49px;
}
#subject
{
width:400px;
}
#comment
{
width:400px;
}
</style>
<script type="text/javascript">
	$(document).ready(function(){
			// binds form submission and fields to the validation engine
		$("#UploadAddPdfForm").validationEngine('attach', {promptPosition : "topRight", autoPositionUpdate : true});
		});

	</script>
<div id="content">
	<div class="container">
        <div class="section">
            <div class="section-header">
              <h3>Add a New Result </h3>
                <div class="section-actions" style="margin-top: 8px;">
          <?php echo $this->Html->link(__('List Student'), array('action' => 'index'),array( "class"=>"btn btn-primary")); ?>
     <?php echo $this->Html->link(__('Result Deleted'), array('action' => 'index_delete',$this -> params['pass'][0]),array( "class"=>"btn btn-primary","style"=>"margin-left: 25px;")); ?>
     <?php echo $this->Html->link(__('New Student'), array('action' => 'add'),array( "class"=>"btn btn-primary","style"=>"margin-left: 15px;")); ?>
                </div>
            </div>

            <div class="section-body">
                <div  class="form-horizontal">				
              <?php echo $this->Form->create('Upload',array('enctype'=>"multipart/form-data"));?>
                <fieldset class="inputs">
                    <legend><?php __('Add Result'); ?></legend>
                      <br/>
                    <div class="input-prepend">        
    <?php echo  $this->Form->input('registration_no',array('type'=>'text','readonly'=>'readonly','value' => $this -> params['pass'][0]));?>
                </div>
                <br/> 
                <br/>
                 
                <div class="input-prepend">
                    <span class="add-on"><i class="icon-book"></i>&nbsp; Subject</span>
                       <input  name="data[Upload][subject]" type="text" placeholder="" id="subject" class= "validate[required]">
                </div>
              <br/> 
              <br/>
                        <div class="input-prepend">
                      <span class="add-on"><i class="icon-book"></i>&nbsp; Result Pdf</span>
                      <input  type="file"  name="data[Upload][result_pdf]" >
                </div>
                <br/>
                <br/> 
              <div class="input-prepend">
                    <span class="add-on"><i class="icon-book"></i>&nbsp; Class Teacher Comment</span>
                       <input  name="data[Upload][comment]" type="text" placeholder="" id="comment">
                </div>
              <br/>
              <br/>
                  <div class="input-prepend">
                    <span class="add-on"><i class="icon-book"></i>&nbsp; Status</span>
                      <?php
                      echo $this->Form->input('status', array('label' => false, 'type' => 'select', 'options' =>  array('1'=>  'Active', '2'=>  'Inactive','class' => 'validate[required]')));
                        ?>
                </div>
                <br/>								
                </fieldset>
               <?php  echo '<br />'; ?>
            <?php echo $this->Form->end(array('div'=>false,'label'=>'Submit','class'=>'action input-action btn btn-primary'));?>
            </div>
		</div>
    </div>
</div>