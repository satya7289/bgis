<?php echo $this->Html->script('ckeditor/ckeditor');?>
<style>
#BlogsStatus
{
margin-left: 70px;
margin-top: -49px;
}
#BlogsDesc
{
width: 895px;
height: 400px;
}
#title
{
width:500px;	
}
</style>
<div id="content">
	<div class="container">
        <div class="section">
            <div class="section-header">
                <h3>Add a New Bgis Blogs</h3>
                <div class="section-actions" style="margin-top: 8px;">
          <?php echo $this->Html->link(__('List Blog Page'), array('action' => 'bgis_index'),array( "class"=>"btn btn-primary")); ?>
                </div>
            </div>

            <div class="section-body">
                <div  class="form-horizontal">				
            <?php echo $this->Form->create('Blogs',array('enctype'=>"multipart/form-data"));?>
                <fieldset class="inputs">
                    <legend><?php __('Add New Blogs'); ?></legend>
                <br/>
                     <div class="input-prepend">
                    <span class="add-on"><i class="icon-book"></i>&nbsp; Title</span>
                      <input  name="data[Blogs][title]" type="text" placeholder="" id="title">
                 </div>
                <br/>
                <br/>
                   <div class="input-prepend">
                    <span class="add-on"><i class="icon-book"></i>&nbsp; Description</span>
              <?php  echo $this->Form->textarea('desc',array('class'=>'ckeditor','label' => 'Blog Description')); ?>
                </div>
                 <br/>
                 <br/>
                  <div class="input-prepend">
                    <span class="add-on"><i class="icon-book"></i>&nbsp; Sub Title</span>
                    <?php echo $this->Form->input('sub_title', array('label'=>false));?>
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