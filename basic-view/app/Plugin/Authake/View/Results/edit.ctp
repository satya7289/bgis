<style>
#ResultPostalAddress
{
width: 70%;
height: 83px;
}
</style>

<?php $this->Html->addCrumb('Edit Page', $this->Html->url( null, true )); ?>
<div id="content">
	<div class="container">
		<div class="section">
			<div class="section-header">
	         <h3>Modify Student </h3><br/>
				<div class="section-actions" style="margin-top: 8px;">
	 <a href="<?php echo $this->Html->url( array('controller'=> 'results', 'action'=>'index')); ?>" class="btn btn-link">Cancel</a>
					<?php echo $this->Html->link(__('Delete'), array('action'=>'delete', $this->Form->value('Result.id')), array('class'=>'btn btn-danger'), sprintf(__('Are you sure you want to delete @%s?'), $this->Form->value('Result.id'))); ?>
				</div>
			</div>
			<div class="section-body" >
		  <?php echo $this->Form->create('Result',array('enctype'=>"multipart/form-data"));?>
				<div class="form-horizontal">
					<fieldset class="inputs">
						<legend>Student Information</legend>
			<?php echo  $this->Form->input('id',array('type'=>'hidden','value' => $this -> params['pass'][0]));?>
						  <div class="string control-group stringish" id="Group">
                            <?php  echo $this->Form->input('name'); ?>
							</div>
                             <div class="string control-group stringish" id="Group">
                            <?php  echo $this->Form->input('parent_name'); ?>
							</div>
                             <div class="string control-group stringish" id="Group">
                            <?php  echo $this->Form->input('parent_email'); ?>
							</div>
                                  <div class="string control-group stringish" id="Group">
                                        <?php  echo $this->Form->input('roll_no'); ?>
							</div>
				     <div class="string control-group stringish" id="Group">
                                              <?php  echo $this->Form->input('dob'); ?>
				 	</div>
                             <div class="string control-group stringish" id="Group">
                             <?php
				 $class = array('1' => 'First', '2' => 'Second', '3' => 'Third','4' => 'Fourth', '5' => 'Fifth', '6' => 'Sixth','7' => 'Seventh', '8' => 'Eight', '9' => 'Ninth','10' => 'Tenth','11' => 'Eleventh', '12' => 'Twelve');
           echo $this->Form->input('class', array('label' => false, 'type' => 'select', 'options' => $class ));
                        ?>
							</div>
                             <div class="string control-group stringish" id="Group">
                            <?php
					 $section = array('A' => 'A', 'B' => 'B', 'C' => 'C','D' => 'D');
           echo $this->Form->input('section', array('label' => false, 'type' => 'select', 'options' => $section ));
                        ?>
							</div>
                             <div class="string control-group stringish" id="Group">
                             <?php
 $session = array('2007-2008' => '2007-2008','2008-2009' => '2008-2009','2009-2010' => '2009-2010','2010-2011' => '2010-2011','2011-2012' => '2011-2012','2013-2014' => '2013-2014', '2014-2015' => '2014-2015', '2015-2016' => '2015-2016','2016-2017' => '2016-2017');				 
           echo $this->Form->input('session', array('label' => false, 'type' => 'select', 'options' => $session ));
                        ?>
							</div>
				        <div class="string control-group stringish" id="Email">
				            <?php  echo $this->Form->input('class_teacher'); ?>
							</div>
                                <div class="string control-group stringish" id="Email">
		                    <?php echo $this->Form->input('class_teacher_email')?>
							</div>
				       <div class="string control-group stringish" id="Email">
		                        <?php echo $this->Form->input('postal_address')?>
							</div>
				<div class="string control-group stringish" id="Email">
				  <?php
                      echo $this->Form->input('boarding_type', array('label' => false,'class' => 'validate[required]', 'type' => 'select', 'options' =>  array('DS'=>  'Day Scholor', 'RS'=>'Resident Scholor')));
                        ?>
				</div>
                             <div class="string control-group stringish" id="EmailChangecode">
	            <?php   echo $this->Form->input('status', array('label' => ' Status', 'type' => 'select', 'options' =>  array('1'=>  'Active', '2'=>  'Inactive'))); ?>
							</div>
							<div class="string control-group stringish" id="Email">
						</div>
					</fieldset>
					<fieldset class="form-actions">
						<?php echo $this->Form->end(array('div'=>false,'label'=>'Edit','class'=>'action input-action btn btn-success'));?>
		<a href="<?php echo $this->Html->url( array('controller'=> 'Results', 'action'=>'index')); ?>" class="btn btn-link">Cancel</a>
					</fieldset>
				</div>
			</div>
		</div>
	</div>
</div>