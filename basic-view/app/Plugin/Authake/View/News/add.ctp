<style>
#EventStatus
{
margin-left: 70px;
margin-top: -49px;
}
#EventContent
{
width: 1120px;
height: 300px;
}
#EventNewsType
{
margin-left: 95px;
margin-top: -49px;	
}
</style>
<div id="content">
	<div class="container">
        <div class="section">
            <div class="section-header">
              <h3>Add a New News</h3>
                <div class="section-actions" style="margin-top: 8px;">
          <?php echo $this->Html->link(__('List News Page'), array('action' => 'index'),array( "class"=>"btn btn-primary")); ?>
                </div>
            </div>

            <div class="section-body">
                <div  class="form-horizontal">				
            <?php echo $this->Form->create('Event',array('enctype'=>"multipart/form-data"));?>
                <fieldset class="inputs">
                    <legend><?php __('Add New News'); ?></legend>
                <br/>
                  <div class="input-prepend">
                    <span class="add-on"><i class="icon-book"></i>&nbsp; News Type </span>
            <?php   echo $this->Form->input('news_type', array('label' => false,'type' => 'select','options' => array('choose one','Latest News','Daily Bulletin','Media'))); ?>
 </div>
                <br/>
                <br/>
                     <div class="input-prepend">
                    <span class="add-on"><i class="icon-book"></i>&nbsp; News Heading</span>
                      <input  name="data[Event][news_heading]" type="text" placeholder="">
                 </div>
                 <br/>
                <br/>
                   <div class="input-prepend">
                    <span class="add-on"><i class="icon-book"></i>&nbsp; News Url</span>
                      <input  name="data[Event][url]" type="text" placeholder="">
                </div>
              
                <br/>
                <br/>
                   <div class="input-prepend">
                    <span class="add-on"><i class="icon-book"></i>&nbsp; News Description</span>
                      <input  name="data[Event][news_description]" type="text" placeholder="">
                </div>
                <br/>
                <br/>
                    <div class="input-prepend">
                    <span class="add-on"><i class="icon-book"></i>&nbsp; News Image</span>
                      <input  type="file"  name="data[Event][news_image]" >
                </div>
              <br/>
               <br/>
               <div class="input-prepend">
                    <span class="add-on"><i class="icon-book"></i>&nbsp; News Date</span>
                      <input  type="date"  name="data[Event][news_date]" >
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