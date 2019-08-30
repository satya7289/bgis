<style>
#ContributeContent
{
width: 1120px;
height: 300px;
}
</style>
<?php $this->Html->addCrumb('Edit Page', $this->Html->url( null, true )); ?>
<div id="content">
	<div class="container">
		<div class="section">
			<div class="section-header">
	   <h3>Modify Page </h3><br/>
				<div class="section-actions" style="margin-top: 8px;">
	<a href="<?php echo $this->Html->url( array('controller'=> 'contributes', 'action'=>'index')); ?>" class="btn btn-link">Cancel</a>
					<?php echo $this->Html->link(__('Delete'), array('action'=>'delete', $this->Form->value('Contribute.id')), array('class'=>'btn btn-danger'), sprintf(__('Are you sure you want to delete @%s?'), $this->Form->value('Contribute.id'))); ?>
				</div>
			</div>
			<div class="section-body" >
		  <?php echo $this->Form->create('Contribute',array('enctype'=>"multipart/form-data"));?>
				<div class="form-horizontal">
					<fieldset class="inputs">
						<legend>Contribute Page Information</legend>
			    <?php echo  $this->Form->input('id',array('type'=>'hidden','value' => $this -> params['pass'][0]));?>
						<div class="string control-group stringish" id="Group">
							</div>
							<div class="string control-group stringish" id="Email">
				            <?php  echo $this->Form->input('page_title'); ?>
							</div>
                            <div class="string control-group stringish" id="Email">
				  <?php   echo $this->Form->input('menu_id', array('type' => 'select', 'label'=>'Page Name' ,'options' => $submenu)); ?>
							</div>
                             <div class="string control-group stringish" id="Email">
		               <?php echo $this->Form->input('content')?>
							</div>
                             <div class="string control-group stringish" id="EmailChangecode">
	            <?php   echo $this->Form->input('status', array('label' => ' Status', 'type' => 'select', 'options' =>  array('1'=>  'Active', '2'=>  'Inactive'))); ?>
							</div>
							<div class="string control-group stringish" id="Email">
						</div>
					</fieldset>
					<fieldset class="form-actions">
						<?php echo $this->Form->end(array('div'=>false,'label'=>'Edit','class'=>'action input-action btn btn-success'));?>
			<?php echo $this->Html->link(__('View Contribute'), array('action'=>'index', $this->Form->value('Contribute.id')), array('class'=>'btn btn-primary'));?>
						<a href="<?php echo $this->Html->url( array('controller'=> 'contributes', 'action'=>'index')); ?>" class="btn btn-link">Cancel</a>
					</fieldset>
				</div>
			</div>
		</div>
	</div>
</div>

