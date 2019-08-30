<style>
#FacultyStatus
{
margin-left: 70px;
margin-top: -49px;
}
#FacultyContent
{
width: 1120px;
height: 300px;
}
</style>
<div id="content">
	<div class="container">
        <div class="section">
            <div class="section-header">
              <h3>Add a New Faculty Page</h3>
                <div class="section-actions" style="margin-top: 8px;">
          <?php echo $this->Html->link(__('List Faculty Page'), array('action' => 'index'),array( "class"=>"btn btn-primary")); ?>
                </div>
            </div>

            <div class="section-body">
                <div  class="form-horizontal">				
            <?php echo $this->Form->create('Faculty',array('enctype'=>"multipart/form-data"));?>
                <fieldset class="inputs">
                    <legend><?php __('Add Faculty Page'); ?></legend>
                <br/>
                     <div class="input-prepend">
                    <span class="add-on"><i class="icon-book"></i>&nbsp; Faculty Name</span>
                      <input  name="data[Faculty][name]" type="text" placeholder="">
                </div>
                <br/>
                <br/>
                    <div class="input-prepend">
                    <span class="add-on"><i class="icon-book"></i>&nbsp; Faculty Image</span>
                      <input  type="file"  name="data[Faculty][banner_image]" >
                </div>
                <br/>
                <br/>
                 <div class="input-prepend">
                    <span class="add-on"><i class="icon-book"></i>&nbsp; Description </span>
                     <?php echo $this->Form->input('detail', array('label'=>false));?>
                </div>
              <br/>
              <br/>
                  <div class="input-prepend">
                    <span class="add-on"><i class="icon-book"></i>&nbsp; Status</span>
                      <?php
                      echo $this->Form->input('status', array('label' => false, 'type' => 'select', 'options' =>  array('1'=>  'Active', '2'=>  'Inactive')));
                        ?>
                </div>
								
                </fieldset>
               <?php  echo '<br />'; ?>
            <?php echo $this->Form->end(array('div'=>false,'label'=>'Submit','class'=>'action input-action btn btn-primary'));?>
            </div>
		</div>
    </div>
</div>
