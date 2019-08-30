<div class="widget widget-table action-table">
						
					<div class="widget-header">
						<i class="icon-th-list"></i>
						<h3>Users</h3>
					</div> <!-- /widget-header -->
					
					<div class="widget-content">
						
						<table class="table table-striped table-bordered">
							<thead>
								<tr>
                                	<th></th>
									<th><?php echo $this->Paginator->sort('id');?></th>
									<th><?php echo $this->Paginator->sort('login');?></th>
                                    <th><?php echo $this->Paginator->sort('email');?></th>
                                    <th><?php echo 'Group';?></th>
                                    <th><?php echo $this->Paginator->sort('created');?></th>
                                    <th><?php echo "Status";?></th>
									<th class="td-actions">Actions</th>
								</tr>
							</thead>
							<tbody>
					<?php
                        $i = 0;
                        foreach ($users as $user):
                            $class = '';
                            if ($i++ % 2 == 0) {
                                $class = 'altrow';
                            }

                            // check if user account enables
                            $exp = $user['User']['expire_account'];

                    		if($user['User']['disable'] or ($exp != '0000-00-00' and $this->Time->fromString($exp) < time())){
                                $class = ' class=\"{$class} disabled\"';
							}else{
                                $class = ' class=\"{$class}\"';
							}
						?>
								<tr>
									<td><a href="<?php echo $this->Html->url( array('action'=>'view', $user['User']['id'])); ?>">
									<?php echo $this->Gravatar->get_gravatar($user['User']['email'],30,'','',true) ?>
								</a></td>
									<td>
								<i class="picons-16-basic3-146">
								</i>
								<?php echo $user['User']['id']; ?>
							</td>
							<td>
									<?php echo $this->Html->link($user['User']['login'], array('action'=>'view', $user['User']['id'])); ?>
							</td>
							<td>
									<?php $email = $user['User']['email']; echo "<a href=\"mailto:{$email}\">{$email}</a>"; ?>
							</td>
							<td>
								<div class="muted">
									<?php //pr($user['Group']);
								$gr = (count($user['Group'])) ? array() : array(__('Guest'));     // Specify Guest group if lonely group
								foreach($user['Group'] as $k=>$group)
									$gr[] = $this->Html->link(__($group['name']), array('controller'=>'groups', 'action'=>'view', $group['id']),array('class'=>'label'));

								echo implode(' ', $gr); ?>
								</div>
								</td>
							<td>
								<?php echo $this->Time->format('j M Y', $user['User']['created']); ?>&nbsp;
							</td>
							<td>
								<?php if ($user['User']['disable']) echo '<span class="label label-important">Disabled</span>&nbsp;';

								$exp = $user['User']['expire_account'];
								if ($exp != '0000-00-00' and $this->Time->fromString($exp) < time()){ echo '<span class="label label-warning">Expired</span>'; }else{
									echo '<span class="label label-info">Active</span>';
									}
								?>
							</td>
									<td class="td-actions">
                                    
										<!--<a href="<?php //echo $this->Html->url(array('action'=>'edit', $user['User']['id'])); ?>" class="btn btn-small btn-warning">
											<i class="btn-icon-only icon-ok"></i>										
										</a>
										
										<a href="<?php //echo $this->Html->url( array('action'=>'delete', $user['User']['id']))?>" class="btn btn-small">
											<i class="btn-icon-only icon-remove"></i>										
										</a>-->
                                        <div class="btn-group">
  <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cogs"></i> Manage</a>
  <ul class="dropdown-menu">
    <li><a href="<?php echo $this->Html->url(array('action'=>'edit', $user['User']['id'])); ?>"><i class="icon-fixed-width icon-pencil"></i> Edit</a></li>
    <li><a href="<?php echo $this->Html->url( array('action'=>'delete', $user['User']['id']))?>"><i class="icon-fixed-width icon-trash"></i> Delete</a></li>
    <li><a href="#"><i class="icon-fixed-width icon-ban-circle"></i> Ban</a></li>
    <li class="divider"></li>
    <li><a href="#"><i class="i"></i> Make admin</a></li>
  </ul>
</div>

                                        
									</td>
								</tr>
								
                                <?php endforeach; ?>
								</tbody>
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