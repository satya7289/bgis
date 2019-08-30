<style>
fieldset legend {
color: #e32;
font-weight: bold;
}
</style>
<div class="widget widget-table action-table">
						<h3>
                            Result Detail 
                            <small>
                                <?php
                                echo $this->Paginator->counter(array(
                                'format' => __('There are %current% Result of student  on this system.')
                                ));
								//pr($specs);
                                ?>
                            </small>
                            
      <?php echo $this->Html->link(__('New Result Entry'), array('action' => 'add_pdf',$this -> params['pass'][0]),array( "class"=>"btn btn-primary" ,"style"=>"margin-left:410px;")); ?>
      <?php echo $this->Html->link(__('New Student'), array('action' => 'add'),array( "class"=>"btn btn-primary","style"=>"margin-left: 15px;")); ?>
      <?php echo $this->Html->link(__('List Student'), array('action' => 'index'),array( "class"=>"btn btn-primary","style"=>"margin-left: 15px;")); ?>
                        </h3>
                        <?php if(sizeof($results) > 0){?>
					<div class="widget-header">
						<i class="icon-th-list"></i>
						  <h3>Result Detail</h3>
					</div> <!-- /widget-header -->
					
				     	<div class="widget-content">
						<table class="table table-striped table-bordered">
							<thead>
							</thead>
							<tbody>
					<?php
                        $i = 0;
                        foreach ( $results as $result):
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
              <td colspan="5" class="<?php echo $class;?>"><center><strong>Result Details</strong></center></td>
                      <td  class="td-actions <?php echo $class2;?>" style="background-color:#FFF;">
                                    	<div class="btn-group">
      <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cogs"></i> Manage</a>
                                          <ul class="dropdown-menu">
 <li><a href="<?php echo $this->Html->url(array('controller'=>'results','action'=>'pdf_delete', $result['Upload']['id'])); ?>"><i class=" icon-fixed-width icon-trash"></i> Delete</a></li>
                                          </ul>
                                        </div>
                                    </td>
                                  </tr>
                                  <tr>
                                     <th><?php echo $this->Paginator->sort('Registration no'); ?></th>
                                     <th><?php echo $this->Paginator->sort('Subject'); ?></th>
                                     <th><?php echo $this->Paginator->sort('Status'); ?></th>
                                  </tr>
                                  <tr>
                      <td><?php echo h($result['Upload']['registration_no']); ?>&nbsp;</td>
                      <td><?php echo h($result['Upload']['subject']); ?>&nbsp;</td>
                    <td><?php if($result['Upload']['status'] == 1){ echo 'Active'; }else { echo 'inactive';} ?>&nbsp;&nbsp;&nbsp;</td>
                                  </tr>	
                                <?php endforeach; ?>
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