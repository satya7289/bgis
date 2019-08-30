<style>
#ResultStatus
{
margin-left: 70px;
margin-top: -49px;
}
#address
{
width: 150%;
height: 70px;
}
</style>
<script type="text/javascript">
	$(document).ready(function(){
			// binds form submission and fields to the validation engine
		$("#ResultAddForm").validationEngine('attach', {promptPosition : "topRight", autoPositionUpdate : true});
		});

	</script>
<div id="content">
	<div class="container">
        <div class="section">
            <div class="section-header">
              <h3>Add a New Student </h3>
                <div class="section-actions" style="margin-top: 8px;">
           <?php echo $this->Html->link(__('List Student'), array('action' => 'index'),array( "class"=>"btn btn-primary")); ?>
      <?php echo $this->Html->link(__('Class wise Student'), array('action' => 'welcome_index'),array( "class"=>"btn btn-primary","style"=>"margin-left: 150px;")); ?>
           <?php echo $this->Html->link(__('New Student'), array('action' => 'add'),array( "class"=>"btn btn-primary","style"=>"margin-left: 150px;")); ?>
                </div>
            </div>

            <div class="section-body">
                <div  class="form-horizontal">				
              <?php echo $this->Form->create('Result',array('enctype'=>"multipart/form-data"));?>
                <fieldset class="inputs">
                    <legend><?php __('Add Student'); ?></legend>
                      <br/>
                     <div class="input-prepend">
                    <span class="add-on"><i class="icon-book"></i><span style="color:red;font-size:20px;"><sup>*</sup></span>&nbsp;Student Name</span>
                      <input  name="data[Result][name]" type="text" placeholder="" class= "validate[required]">
                </div>
                <br/>
                <br/> 
                  <div class="input-prepend">
           <span class="add-on"><i class="icon-book"></i><span style="color:red;font-size:20px;"><sup>*</sup></span>&nbsp; Parent Name</span>
                      <input  name="data[Result][parent_name]" type="text" placeholder="" class= "validate[required]">
                </div>
                <br/>
                <br/> 
                  <div class="input-prepend">
                    <span class="add-on"><i class="icon-book"></i><span style="color:red;font-size:20px;"><sup>*</sup></span>&nbsp; Parent Email id</span>
          <input  name="data[Result][parent_email]" type="text" placeholder="" class="validate[required,custom[email]] text-input">
                </div>
                <br/>
                <br/> 
                  <div class="input-prepend">
                    <span class="add-on"><i class="icon-book"></i>&nbsp; Student Roll No</span>
                      <input  name="data[Result][roll_no]" type="text" placeholder="" class= "validate[required,custom[number]] text-input">
                </div>
                <br/>
                <br/> 
                 <div class="input-prepend">
                    <span class="add-on"><i class="icon-book"></i><span style="color:red;font-size:20px;"><sup>*</sup></span>&nbsp; Student Registration No</span>
         <input  name="data[Result][registration_no]" type="text" placeholder="" class="validate[required]">
                </div>
                <br/>
                <br/>  
                 <div class="input-prepend">
        <span class="add-on"><i class="icon-book"></i><span style="color:red;font-size:20px;"><sup>*</sup></span>&nbsp; Student Date Of Birth</span>
           <input  name="data[Result][dob]" type="date" placeholder="" class="validate[required,custom[date]]">
                </div>
                <br/>
                <br/> 
                        <div class="input-prepend">
                    <span class="add-on"><i class="icon-book"></i><span style="color:red;font-size:20px;"><sup>*</sup></span>&nbsp; Student Class</span>
                     <?php
				 $class = array('1' => 'First', '2' => 'Second', '3' => 'Third','4' => 'Fourth', '5' => 'Fifth', '6' => 'Sixth','7' => 'Seventh', '8' => 'Eight', '9' => 'Ninth','10' => 'Tenth','11' => 'Eleventh', '12' => 'Twelve');
           echo $this->Form->input('class', array('label' => false, 'type' => 'select', 'options' => $class ,'class' => 'validate[required]'));
                        ?>
                </div>
                <br/> 
                <br/>
                        <div class="input-prepend">
                    <span class="add-on"><i class="icon-book"></i><span style="color:red;font-size:20px;"><sup>*</sup></span>&nbsp; Student Section</span>
                     <?php
					 $section = array('A' => 'A', 'B' => 'B', 'C' => 'C','D' => 'D');
           echo $this->Form->input('section', array('label' => false, 'type' => 'select', 'options' => $section ,'class' => 'validate[required]' ));
                        ?>
                </div>
                <br/> 
                <br/>
                        <div class="input-prepend">
                    <span class="add-on"><i class="icon-book"></i><span style="color:red;font-size:20px;"><sup>*</sup></span>&nbsp; Student Batch</span>
                     <?php
			    $year = array('2000' => '2000','2001' => '2001','2002' => '2002', '2003' => '2004', '2005' => '2005','2006' => '2006','2007' => '2007', '2008' => '2008', '2009' => '2009','2010' => '2010','2011' => '2011', '2011' => '2011', '2012' => '2012','2013' => '2013','2014' => '2014', '2015' => '2015', '2016' => '2016','2017' => '2017');
           echo $this->Form->input('year', array('label' => false, 'type' => 'select', 'options' => $year ,'class' => 'validate[required]' ));
                        ?>
                </div>
                <br/> 
                <br/>
                        <div class="input-prepend">
                    <span class="add-on"><i class="icon-book"></i><span style="color:red;font-size:20px;"><sup>*</sup></span>&nbsp; Student Session</span>
                     <?php
 $session = array('2007-2008' => '2007-2008','2008-2009' => '2008-2009','2009-2010' => '2009-2010','2010-2011' => '2010-2011','2011-2012' => '2011-2012','2013-2014' => '2013-2014', '2014-2015' => '2014-2015', '2015-2016' => '2015-2016','2016-2017' => '2016-2017');			 
           echo $this->Form->input('session', array('label' => false, 'type' => 'select', 'options' => $session ,'class' => 'validate[required]' ));
                        ?>
                </div>
                <br/>
                  <br/>
                        <div class="input-prepend">
                    <span class="add-on"><i class="icon-book"></i>&nbsp; Student Image</span>
                      <input  type="file"  name="data[Result][student_image]" >
                </div>
                <br/>
                <br/> 
                 <div class="input-prepend">
                    <span class="add-on"><i class="icon-book"></i><span style="color:red;font-size:20px;"><sup>*</sup></span>&nbsp; Class Teacher Name</span>
                     <input  name="data[Result][class_teacher]" type="text" placeholder="" class= "validate[required]" >
                </div>
              <br/>
              <br/> 
              <div class="input-prepend">
                    <span class="add-on"><i class="icon-book"></i><span style="color:red;font-size:20px;"><sup>*</sup></span>&nbsp; Class Teacher Email</span>
                     <input  name="data[Result][class_teacher_email]" type="text" placeholder="" class= "validate[required]">
                </div>
                 <br/>
              <br/>
                  <div class="input-prepend">
                    <span class="add-on"><i class="icon-book"></i><span style="color:red;font-size:20px;"><sup>*</sup></span>&nbsp; Student Address</span>
                     <input  name="data[Result][postal_address]" type="text" placeholder="" class= "validate[required]" id="address">
                </div>
                 <br/>
              <br/>
                 <div class="input-prepend">
                    <span class="add-on"><i class="icon-book"></i><span style="color:red;font-size:20px;"><sup>*</sup></span>&nbsp; Student Boarding Type</span>
                      <?php
                      echo $this->Form->input('boarding_type', array('label' => false,'class' => 'validate[required]', 'type' => 'select', 'options' =>  array('DS'=>  'Day Scholor', 'RS'=>'Resident Scholor')));
                        ?>
                </div>
              <br/>
              <br/>
                  <div class="input-prepend">
                    <span class="add-on"><i class="icon-book"></i><span style="color:red;font-size:20px;"><sup>*</sup></span>&nbsp; Status</span>
                      <?php
                      echo $this->Form->input('status', array('label' => false,'class' => 'validate[required]', 'type' => 'select', 'options' =>  array('1'=>  'Active', '2'=>  'Inactive')));
                        ?>
                </div>
								
                </fieldset>
               <?php  echo '<br />'; ?>
            <?php echo $this->Form->end(array('div'=>false,'label'=>'Submit','class'=>'action input-action btn btn-primary'));?>
            </div>
		</div>
    </div>
</div>