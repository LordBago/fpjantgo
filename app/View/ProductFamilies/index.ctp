<?php 

$this->Paginator->options(array(
    'update' => '#conted-productFamilies',
    'before' => $this->Js->get('#processing')->effect('fadeIn',array('buffer'=>'false')),
    'complete' => $this->Js->get('#processing')->effect('fadeOut',array('buffer'=>'false'))
));

?>
    

<div id="conted-productFamilies">

    <div class="page-header">
       <h2><?php echo __('Product Families'); ?></h2>        
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
                <th><?php echo $this->Paginator->sort('id'); ?></th>
                <th><?php echo $this->Paginator->sort('family'); ?></th>
                <th><?php echo $this->Paginator->sort('created'); ?></th>
                <th><?php echo $this->Paginator->sort('modified'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($productFamilies as $productFamily): ?>
        <tr>
            <td><?php echo h($productFamily['ProductFamily']['id']); ?>&nbsp;</td>
            <td><?php echo h($productFamily['ProductFamily']['family']); ?>&nbsp;</td>
            <td><?php echo h($productFamily['ProductFamily']['created']); ?>&nbsp;</td>
            <td><?php echo h($productFamily['ProductFamily']['modified']); ?>&nbsp;</td>
            <td class="actions">
                <?php echo $this->Html->link(__('View'), array('action' => 'view', $productFamily['ProductFamily']['id']),array('class'=>'btn btn-sm btn-info')); ?>
                <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $productFamily['ProductFamily']['id']),array('class'=>'btn btn-sm btn-success')); ?>
                <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $productFamily['ProductFamily']['id']), array('class'=>'btn btn-sm btn-danger'), __('Are you sure you want to delete # %s?', $productFamily['ProductFamily']['id'])); ?>
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
		<li><?php //echo $this->Html->link(__('New Product Family'), array('action' => 'add')); ?></li>
		<li><?php //echo $this->Html->link(__('List Product Types'), array('controller' => 'product_types', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Product Type'), array('controller' => 'product_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
--->
