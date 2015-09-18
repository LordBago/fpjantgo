<?php 

$this->Paginator->options(array(
    'update' => '#conted-product',
    'before' => $this->Js->get('#processing')->effect('fadeIn',array('buffer'=>'false')),
    'complete' => $this->Js->get('#processing')->effect('fadeOut',array('buffer'=>'false'))
));

?>

<div id="conted-product" class="index">

    <div class="page-header">
	    <h2><?php echo __('Products'); ?></h2>
	</div>
	
	<div class="col-md-12">
	
	<div class="progress occult" id="processing">
            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
            <span class="sr-only">100% Complete</span>
            </div>
        </div>
	
	<table class="table table-striped" cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('metal'); ?></th>
			<th><?php echo $this->Paginator->sort('weight'); ?></th>
			<th><?php echo $this->Paginator->sort('depth'); ?></th>
			<th><?php echo $this->Paginator->sort('length'); ?></th>
			<th><?php echo $this->Paginator->sort('width'); ?></th>
			<th><?php echo $this->Paginator->sort('price'); ?></th>
			<th><?php echo $this->Paginator->sort('photo'); ?></th>
			<th><?php echo $this->Paginator->sort('product_type_id'); ?></th>
			<th><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($products as $product): ?>
	<tr>
		<td><?php echo h($product['Product']['name']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['metal']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['weight']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['depth']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['length']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['width']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['price']); ?>&nbsp;</td>
		<td><?php echo $this->Html->image('../files/product/photo/'.$product['Product']['photo_address'].'/'.'thumb_'.$product['Product']['photo']); ?></td>
		<td>
			<?php echo $this->Html->link($product['ProductType']['id'], array('controller' => 'product_types', 'action' => 'view', $product['ProductType']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $product['Product']['id']),array('class'=>'btn btn-sm btn-info')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $product['Product']['id']),array('class'=>'btn btn-sm btn-success')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $product['Product']['id']), array('class'=>'btn btn-sm btn-danger'), __('Are you sure you want to delete # %s?', $product['Product']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	</div>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<ul class="pagination">
	
		<li> <?php echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled btn btn-sm btn-default'));?></li>
		<?php echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentTag' => 'a', 'currentClass' => 'active'));?>
		<li> <?php echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled btn btn-sm btn-default'));?></li>
	
	</ul>
	
	<?php echo $this->Js->writeBuffer(); ?>
	
</div>

<!---
<div class="actions">
	<h3><?php //echo __('Actions'); ?></h3>
	<ul>
		<li><?php //echo $this->Html->link(__('New Product'), array('action' => 'add')); ?></li>
		<li><?php //echo $this->Html->link(__('List Product Types'), array('controller' => 'product_types', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Product Type'), array('controller' => 'product_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
--->