<style>
#AboutStatus
{
margin-left: 70px;
margin-top: -49px;
}
#AboutMenuId
{
  margin-left: 100px;
  margin-top: -49px;	
}
#AboutContent
{
width: 1120px;
height: 300px;
}
</style>
<?php echo $this->Html->script('ckeditor/ckeditor');?>
<div id="content">
	<div class="container">
        <div class="section">
            <div class="section-header">
              <h3>Add a New About Page</h3>
                <div class="section-actions" style="margin-top: 8px;">
          <?php echo $this->Html->link(__('List About Page'), array('action' => 'index'),array( "class"=>"btn btn-primary")); ?>
                </div>
            </div>

            <div class="section-body">
                <div  class="form-horizontal">				
            <?php echo $this->Form->create('About',array('enctype'=>"multipart/form-data"));?>
                <fieldset class="inputs">
                    <legend><?php __('Add About Page'); ?></legend>
                     <div class="input-prepend">
                    <span class="add-on"><i class="icon-book"></i>&nbsp; Page Name </span>
                      <?php
                    echo $this->Form->input('menu_id', array('label' => false, 'type' => 'select', 'options' => $submenu ));
                        ?>
                </div>
                <br/>
                <br/>
                     <div class="input-prepend">
                    <span class="add-on"><i class="icon-book"></i>&nbsp; Page Title</span>
                      <input  name="data[About][page_title]" type="text" placeholder="">
                </div>
                <br/>
                <br/>
                    <div class="input-prepend">
                    <span class="add-on"><i class="icon-book"></i>&nbsp; Banner Image</span>
                      <input  type="file"  name="data[About][banner_image]" >
                </div>
                <br/>
                <br/>
                 <div class="input-prepend">
                    <span class="add-on"><i class="icon-book"></i>&nbsp; Content </span>
                     <?php echo $this->Form->input('content', array('label'=>false));?>
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
