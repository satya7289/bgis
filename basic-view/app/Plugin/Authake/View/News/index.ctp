<div class="widget widget-table action-table">
						<h3>
                            News Pages
                            <small>
                                <?php
                                echo $this->Paginator->counter(array(
                                'format' => __('There are %current% News pages on this system.')
                                ));
								//pr($specs);
                                ?>
                            </small>
                            <?php echo $this->Html->link(__('New News'), array('action' => 'add'),array( "class"=>"btn btn-primary" ,"style"=>"margin-left:220px;")); ?>
                        </h3>
                        <?php if(sizeof($events) > 0){?>
					<div class="widget-header">
						<i class="icon-th-list"></i>
						<h3>News Pages</h3>
					</div> <!-- /widget-header -->
					
					<div class="widget-content">
						
						<table class="table table-striped table-bordered">
							<thead>
								<tr>
									<th width="40%"><?php echo "All News ";  ?></th>
        <th><?php echo $this->Html->link(__('New News'), array('action' => 'add'),array( "class"=>"btn btn-primary" ,"style"=>"margin-left:220px;")); ?></th>
								</tr>
							</thead>
							<tbody>
					<?php
                        $i = 0;
                        foreach ($events as $event):
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
                    <td colspan="5" class="<?php echo $class;?>"><center><strong>News Pages Details</strong></center></td>
  
                                    <td  class="td-actions <?php echo $class2;?>" style="background-color:#FFF;">
                                    	<div class="btn-group">
                     <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cogs"></i> Manage</a>
                                          <ul class="dropdown-menu">
               <li><a href="<?php echo $this->Html->url(array('controller'=>'news','action'=>'edit', $event['Event']['id'])); ?>"><i class="icon-fixed-width icon-thumbs-up"></i> Update</a></li>
                                            <li><a href="<?php echo $this->Html->url(array('controller'=>'news','action'=>'delete', $event['Event']['id'])); ?>"><i class=" icon-fixed-width icon-trash"></i> Delete</a></li>
                                          </ul>
                                        </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <th><?php echo $this->Paginator->sort('News Type'); ?></th>
                                    <th><?php echo $this->Paginator->sort('News Heading'); ?></th>
                                    <th><?php echo $this->Paginator->sort('News Date'); ?></th>
                                    <th><?php echo $this->Paginator->sort('Status'); ?></th>
                                    <th><?php echo $this->Paginator->sort('Created'); ?></th>
                                  </tr>
                                  <tr>
                                  <td>
    <?php if($event['Event']['news_type'] == 1){ echo 'Latest News';} elseif($event['Event']['news_type'] == 2){ echo 'Daily Bulletin'; }    else { echo 'Media'; } ?>
                                  &nbsp;</td>
                                     <td><?php echo h($event['Event']['news_heading']); ?>&nbsp;</td>
                                     <td><?php echo h($event['Event']['news_date']); ?>&nbsp;</td>
                <td><?php if($event['Event']['status'] == 1){ echo 'Active'; }else { echo 'inactive';} ?>&nbsp;&nbsp;&nbsp;</td>
                                    <td><?php echo h($event['Event']['created']); ?>&nbsp;</td>
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