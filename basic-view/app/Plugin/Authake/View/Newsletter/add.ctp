<style>
#NewsStatus
{
margin-left: 70px;
margin-top: -49px;
}
</style>
<div id="content">
	<div class="container">
        <div class="section">
            <div class="section-header">
              <h3>Add a New Publication</h3>
                <div class="section-actions" style="margin-top: 8px;">
          <?php echo $this->Html->link(__('List Publication Page'), array('action' => 'index'),array( "class"=>"btn btn-primary")); ?>
                </div>
            </div>

            <div class="section-body">
                <div  class="form-horizontal">				
            <?php echo $this->Form->create('News',array('enctype'=>"multipart/form-data"));?>
                <fieldset class="inputs">
                    <legend><?php __('Add New Publication'); ?></legend>
                <br/>
                <br/>
                    <div class="input-prepend">
                    <span class="add-on"><i class="icon-book"></i>&nbsp; Publication Image</span>
                      <input  type="file"  name="data[News][news_image]" >
                </div>
              <br/>
               <br/>
               <div class="input-prepend">
                    <span class="add-on"><i class="icon-book"></i>&nbsp; Publication Date</span>
                      <input  type="date"  name="data[News][news_date]" >
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
