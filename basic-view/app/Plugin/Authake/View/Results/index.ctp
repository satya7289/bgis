<style>
fieldset legend {
color: #e32;
font-weight: bold;
}
.table td {
padding: 3px;
line-height: 18px;
text-align: left;
vertical-align: top;
border-top: 1px solid #dddddd;
}
#ResultRegistrationNo
{
margin-top: -36px;
margin-left: 145px;
width: 120px;
}

#ResultName
{
margin-top: -47px;
float: right;
width: 170px;
margin-right: 110px;
}

#ResultClass
{
margin-top: -38px;
margin-left: 325px;
width: 70px;
}

#ResultSection
{
margin-top: -47px;
float: right;
width: 70px;
margin-right: 385px;
}
label[for=ResultRegistrationNo] 
{
  margin-left: 4px;
}
label[for=ResultName] 
{
margin-top: -43px;
float: right;
width: 170px;
margin-right: 208px;
}
label[for=ResultClass] 
{
margin-top: -43px;
margin-left: 285px;
}
label[for=ResultSection] 
{
float: right;
margin-top: -43px;
margin-right: 460px;
}
.submit input[type="submit"]
{
color: #fff;
background-color: #0074cc;
width: 100px;
margin-left: 804px;
border-radius: 15px;
margin-top: 0px;

}
</style>

<div class="widget widget-table action-table">
						<h3>
                            Student Detail 
                            <small>
                                <?php
                                echo $this->Paginator->counter(array(
                                'format' => __('There are %current% Student  on this system.')
                                ));
								//pr($specs);
                                ?>
                            </small>
                            <?php echo $this->Html->link(__('List Student Entry'), array('action' => 'index'),array( "class"=>"btn btn-primary" ,"style"=>"margin-left:10px;")); ?>
                            <?php echo $this->Html->link(__('New Student Entry'), array('action' => 'add'),array( "class"=>"btn btn-primary" ,"style"=>"margin-left:20px;")); ?>
                             <?php echo $this->Html->link(__('Class wise Student'), array('action' => 'welcome_index'),array( "class"=>"btn btn-primary","style"=>"margin-left:50px;")); ?>
                        </h3>
                        <?php if(sizeof($results) > 0){?>
					<div class="widget-header">
						<i class="icon-th-list"></i>
						  <h3>Student Detail</h3>
					</div> <!-- /widget-header -->
					
				     	<div class="widget-content">
<p style="font-weight: bold;margin-top: 4px;text-align: center;font-size: 15px;">Note: <span style="font-size:15px;color:red;">*</span>Choose row heading to view in order</p>
						<table class="table table-striped table-bordered">
						
							<thead>
							</thead>
							<tbody>
					
                        		  <tr>
                       <td colspan="9" class="altrows2"><center><strong>Students Details</strong></center></td>
                                  </tr>
                                    <tr>
                                     <th><?php echo $this->Paginator->sort('Result.name','Name'); ?></th>
                                     <th><?php echo $this->Paginator->sort('Result.roll_no','Roll No'); ?></th>
                                     <th><?php echo $this->Paginator->sort('Result.registration_no','Registration no'); ?></th>
                                     <th><?php echo $this->Paginator->sort('Result.class','Class'); ?></th>
                                     <th><?php echo $this->Paginator->sort('Result.section','Section'); ?></th>
                                     <th><?php echo $this->Paginator->sort('Result.year','Batch'); ?></th>
                                     <th><?php echo $this->Paginator->sort('Result.session','Session'); ?></th>
                                     <th><?php echo $this->Paginator->sort('Result.name','Status'); ?></th>
                                      <th><?php echo $this->Paginator->sort('Action'); ?></th>
                                  </tr>
                                  <?php
                        $i = 0;
                        foreach ($results as $result):
                            $class = '';
                            if ($i++ % 2 == 0) {
                                $class = 'altrows';
								$class2 = 'wheat';
                            }else{
								$class = 'altrows2';
								$class2 = 'wheat2';	
							}

						?>
                                  <tr>
                    <td><?php echo h($result['Result']['name']); ?>&nbsp;</td>
                    <td><?php echo h($result['Result']['roll_no']); ?>&nbsp;</td>
                    <td><?php echo h($result['Result']['registration_no']); ?>&nbsp;</td>
                    <td><?php echo h($result['Result']['class']); ?>&nbsp;</td>
                    <td><?php echo h($result['Result']['section']); ?>&nbsp;</td>
                    <td><?php echo h($result['Result']['year']); ?>&nbsp;</td>
                    <td><?php echo h($result['Result']['session']); ?>&nbsp;</td>
                   <td><?php if($result['Result']['status'] == 1){ echo 'Active'; }else { echo 'inactive';} ?>&nbsp;&nbsp;&nbsp;</td>
                      <td  class="td-actions <?php echo $class2;?>" style="background-color:#FFF;">
                                    	<div class="btn-group">
      <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cogs"></i> Manage</a>
                                          <ul class="dropdown-menu">
                         <li><a href="<?php echo $this->Html->url(array('controller'=>'results','action'=>'add_pdf', $result['Result']['registration_no'])); ?>"><i class="icon-file"></i> Upload Pdf</a></li>
 <li><a href="<?php echo $this->Html->url(array('controller'=>'results','action'=>'edit', $result['Result']['id'])); ?>"><i class="icon-fixed-width icon-thumbs-up"></i> Update</a></li>
                                            <li><a href="<?php echo $this->Html->url(array('controller'=>'results','action'=>'delete', $result['Result']['id'])); ?>"><i class=" icon-fixed-width icon-trash"></i> Delete</a></li>
                                          </ul>
                                        </div>
                                    </td>
                                  </tr>	
                                <?php endforeach; ?>
                       <?php echo $this->Filter->filterForm('Result', array('legend' => 'Search'));?>          
								</tbody>
                                <thead>
								<tr>
                                    <th colspan="12" style="background:#CCC">&nbsp;</th>		
								</tr>
							</thead>
							</table>
                            
						
					</div> <!-- /widget-content -->
                    <p align="center">
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('<b>Page {:page} of {:pages}, showing {:current} records out of {:count} total</b>')
	));
	?>	</p>

	<div class="paging">
    
	<?php
		echo $this->Paginator->prev('< ' . __('PREVIOUS'), array(), null, array('class' => 'prev disabled','style' => 'margin-right:10px;'));
		echo $this->Paginator->numbers(array('separator' => '&nbsp;&nbsp;'));
		echo $this->Paginator->next(__('NEXT') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<?php } ?>