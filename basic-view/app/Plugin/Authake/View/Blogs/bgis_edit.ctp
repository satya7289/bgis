<?php echo $this->Html->script('ckeditor/ckeditor');?>
<style>
#BlogsTitle
{
  width:700px;
}
#BlogsDesc
{
width:700px;
height:400px;
}

</style>
<?php $this->Html->addCrumb('Edit Page', $this->Html->url( null, true )); ?>
<div id="content">
	<div class="container">
		<div class="section">
			<div class="section-header">
	         <h3>Modify Page </h3><br/>
				<div class="section-actions" style="margin-top: 8px;">
	 <a href="<?php echo $this->Html->url( array('controller'=> 'blogs', 'action'=>'bgis_index')); ?>" class="btn btn-link">Cancel</a>
					<?php echo $this->Html->link(__('Delete'), array('action'=>'bgis_delete', $this->Form->value('Blogs.id')), array('class'=>'btn btn-danger'), sprintf(__('Are you sure you want to delete @%s?'), $this->Form->value('Blogs.id'))); ?>
				</div>
			</div>
			<div class="section-body" >
		  <?php echo $this->Form->create('Blogs',array('enctype'=>"multipart/form-data"));?>
				<div class="form-horizontal">
					<fieldset class="inputs">
						<legend>New Bgis Blog Information</legend>
			        <?php echo  $this->Form->input('id',array('type'=>'hidden','value' => $this -> params['pass'][0]));?>
						<div class="string control-group stringish" id="Group">
							</div>
                            <div class="string control-group stringish" id="Email">
				            <?php  echo $this->Form->input('title'); ?>
							</div>
                             <div class="string control-group stringish" id="Email">
		              <?php  echo $this->Form->textarea('desc',array('class'=>'ckeditor','label' => 'Blog Description')); ?>
							</div>
							 <div class="string control-group stringish" id="Email">
		              <?php echo $this->Form->input('sub_title', array('label'=>false));?>
							</div>
                             <div class="string control-group stringish" id="EmailChangecode">
	            <?php   echo $this->Form->input('status', array('label' => ' Status', 'type' => 'select', 'options' =>  array('1'=>  'Active', '2'=>  'Inactive'))); ?>
							</div>
							<div class="string control-group stringish" id="Email">
						</div>
					</fieldset>
					<fieldset class="form-actions">
						<?php echo $this->Form->end(array('div'=>false,'label'=>'Edit','class'=>'action input-action btn btn-success'));?>
		<a href="<?php echo $this->Html->url( array('controller'=> 'blogs', 'action'=>'bgis_index')); ?>" class="btn btn-link">Cancel</a>
					</fieldset>
				</div>
			</div>
		</div>
	</div>
</div>