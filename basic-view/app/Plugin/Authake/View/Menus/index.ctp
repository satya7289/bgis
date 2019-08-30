<div class="widget widget-table action-table">
						<h3>
                            Menus
                            <small>
                                <?php
                                echo $this->Paginator->counter(array(
                                'format' => __('There are %current% menu on this system.')
                                ));
								//pr($specs);
                                ?>
                            </small>
                        </h3>
                        <?php if(sizeof($menus) > 0){?>
					<div class="widget-header">
						<i class="icon-th-list"></i>
						<h3> Menus</h3>
					</div> <!-- /widget-header -->
					
					<div class="widget-content">
						
						<table class="table table-striped table-bordered">
							<thead>
								<tr>
									<th width="50%"><?php echo "All Menus";  ?></th>
        <th><?php echo $this->Html->link(__('New Menu'), array('action' => 'add'),array( "class"=>"btn btn-primary" ,"style"=>"margin-left:220px;")); ?></th>
								</tr>
							</thead>
							<tbody>
					<?php
                        $i = 0;
                        foreach ($menus as $menu):
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
                                    <td colspan="5" class="<?php echo $class;?>"><center><strong>Menu Details</strong></center></td>
  
                                    <td  class="td-actions <?php echo $class2;?>" style="background-color:#FFF;">
                                    	<div class="btn-group">
                                          <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cogs"></i> Manage</a>
                                          <ul class="dropdown-menu">
                                               <li><a href="<?php echo $this->Html->url(array('controller'=>'menus','action'=>'subadd', $menu['Menu']['id'])); ?>"><i class="icon-fixed-width icon-plus-sign"></i> Add SubMenu</a></li>
                                              <li><a href="<?php echo $this->Html->url(array('controller'=>'menus','action'=>'edit', $menu['Menu']['id'])); ?>"><i class="icon-fixed-width icon-thumbs-up"></i> Update</a></li>
                                            <li><a href="<?php echo $this->Html->url(array('controller'=>'menus','action'=>'delete', $menu['Menu']['id'])); ?>"><i class=" icon-fixed-width icon-trash"></i> Delete</a></li>
                                          </ul>
                                        </div>
                                    </td>
                                  </tr>
                                  <tr>
                                     <th><?php echo $this->Paginator->sort('Menu Name'); ?></th>
                                     <th><?php echo $this->Paginator->sort('Status'); ?></th>
                                     <th><?php echo $this->Paginator->sort('Created'); ?></th>
                                  </tr>
                                  <tr>
                                    <td><?php echo h($menu['Menu']['name']); ?>&nbsp;</td>
                                    <td><?php if($menu['Menu']['status'] == 1){ echo 'Active'; }else { echo 'inactive';} ?>&nbsp;&nbsp;&nbsp;</td>
                                    <td><?php echo h($menu['Menu']['created']); ?>&nbsp;</td>
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