<style>
#MenuStatus
{
margin-left: 70px;
margin-top: -49px;
}
</style>
<div id="content">
	<div class="container">
        <div class="section">
            <div class="section-header">
                <h3>Add a New Menu</h3>
                <div class="section-actions" style="margin-top: 8px;">
                    <?php echo $this->Html->link(__('List Menus'), array('action' => 'index'),array( "class"=>"btn btn-primary")); ?>
                </div>
            </div>

            <div class="section-body">
                <div  class="form-horizontal">				
            <?php echo $this->Form->create('Menu',array('enctype'=>"multipart/form-data"));?>
                <fieldset class="inputs">
                    <legend><?php __('Add Menu'); ?></legend>
                    <div class="input-prepend">
                    <span class="add-on"><i class="icon-book"></i>&nbsp;Menu Name</span>
                      <input class="span2 validate[required]" name="data[Menu][name]" type="text" placeholder="">
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
