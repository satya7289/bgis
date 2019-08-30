<div class="widget widget-table action-table">
						<h3>
                            Admission Pages
                            <small>
                                <?php
                                echo $this->Paginator->counter(array(
                                'format' => __('There are %current% Admission pages on this system.')
                                ));
								//pr($specs);
                                ?>
                            </small>
                        </h3>
                        <?php if(sizeof($admissions) > 0){?>
					<div class="widget-header">
						<i class="icon-th-list"></i>
						<h3>Admission Pages</h3>
					</div> <!-- /widget-header -->
					
					<div class="widget-content">
						
						<table class="table table-striped table-bordered">
							<thead>
								<tr>
									<th width="40%"><?php echo "All Admission Pages";  ?></th>
        <th><?php echo $this->Html->link(__('New Admission'), array('action' => 'add'),array( "class"=>"btn btn-primary" ,"style"=>"margin-left:220px;")); ?></th>
								</tr>
							</thead>
							<tbody>
					<?php
                        $i = 0;
                        foreach ($admissions as $admission):
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
                    <td colspan="5" class="<?php echo $class;?>"><center><strong>Admission Pages Details</strong></center></td>
  
                                    <td  class="td-actions <?php echo $class2;?>" style="background-color:#FFF;">
                                    	<div class="btn-group">
                     <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cogs"></i> Manage</a>
                                          <ul class="dropdown-menu">
                                              <li><a href="<?php echo $this->Html->url(array('controller'=>'admissions','action'=>'edit', $admission['Admission']['id'])); ?>"><i class="icon-fixed-width icon-thumbs-up"></i> Update</a></li>
                                            <li><a href="<?php echo $this->Html->url(array('controller'=>'admissions','action'=>'delete', $admission['Admission']['id'])); ?>"><i class=" icon-fixed-width icon-trash"></i> Delete</a></li>
                                          </ul>
                                        </div>
                                    </td>
                                  </tr>
                                  <tr>
                                     <th><?php echo $this->Paginator->sort('Page Name'); ?></th>
                                     <th><?php echo $this->Paginator->sort('Page Title'); ?></th>
                                     <th><?php echo $this->Paginator->sort('Status'); ?></th>
                                     <th><?php echo $this->Paginator->sort('Created'); ?></th>
                                  </tr>
                                  <tr>
       <td><?php if(!isEmpty($admission['Submenu']['name'])){ echo $admission['Submenu']['name'];} else { echo '-'; }?>&nbsp;</td>
                                    <td><?php echo h($admission['Admission']['page_title']); ?>&nbsp;</td>
                                    <td><?php if($admission['Admission']['status'] == 1){ echo 'Active'; }else { echo 'inactive';} ?>&nbsp;&nbsp;&nbsp;</td>
                                    <td><?php echo h($admission['Admission']['created']); ?>&nbsp;</td>
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