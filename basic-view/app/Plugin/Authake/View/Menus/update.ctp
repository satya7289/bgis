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
                <h3>Update SubMenu</h3>
                <div class="section-actions" style="margin-top: 8px;">
                    <?php echo $this->Html->link(__('List Menus'), array('action' => 'index'),array( "class"=>"btn btn-primary")); ?>
                </div>
            </div>

            <div class="section-body">
                <div  class="form-horizontal">				
              <?php echo $this->Form->create(null, array('url' => array('controller' => 'menus', 'action'=>'update_menu')));?>
                <fieldset class="inputs">
                    <legend><?php __('Change Sub Menu'); ?></legend>
              <?php echo  $this->Form->input('menu_id',array('type'=>'hidden','value' => $this -> params['pass'][0]));?>
               <div class="input-prepend">
                    <span class="add-on"><i class="icon-book"></i>&nbsp; SubMenu</span>
                      <?php
                       echo $this->Form->input('id', array( 'label'=> false ,'type' => 'select', 'options' => $submenu));
                        ?>
                </div>
                    <div class="input-prepend">
                    <span class="add-on"><i class="icon-book"></i>&nbsp;Change Menu Name</span>
                      <input class="span2 validate[required]" name="data[Submenu][name]" type="text" placeholder="">
                </div>
                <br/>
                 <br />
								
                </fieldset>
               <?php  echo '<br />'; ?>
            <?php echo $this->Form->end(array('div'=>false,'label'=>'Submit','class'=>'action input-action btn btn-primary'));?>
            </div>
		</div>
    </div>
</div>
