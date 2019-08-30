<style>
.h2 {
background: #fff;
color: #e32;
font-family: 'Gill Sans','lucida grande', helvetica, arial, sans-serif;
font-size: 140%;
font-weight: normal;
margin-bottom: 0.5em;
}
</style>

<div class="action">
	<h3>Action </h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Blog', true), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Edit Blog', true), array('action' => 'edit', $Blog['Blog']['id'])); ?></li>
	</ul>
</div>

<h2>Blog</h2>
<div class="view">
<table style="background:#fff;clear: both;color:#333;margin-bottom:10px; width:100%; display:table; border-collapse: separate;
border-spacing: 2px;
border-color: gray;" width= "100%" cellpadding="0" cellspacing="0">
<tr>
<td colspan="2"><?php $i = 0; $class = ' class="altrow"';?>
		<tr>
		<td<?php if ($i % 2 == 0) echo $class;?>>Blog id</td>
		<td<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($Blog['Blog']['id'], array('action' => 'view', $Blog['Blog']['id']), array('target' => '_blank')); ?>
			&nbsp;
		</td>
        </tr>
        <tr>
		<td<?php if ($i % 2 == 0) echo $class;?>>Blog Name</td>
		<td<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $Blog['Blog']['title']; ?>
			&nbsp;
		</td>
        </tr>
 
        <tr>
		<td<?php if ($i % 2 == 0) echo $class;?>>Created</td>
		<td<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo formatDate($Blog['Blog']['created']); ?>
			&nbsp;
		</td>
        </tr>
		
		</td>
</td>
</tr>
</table>
</div>