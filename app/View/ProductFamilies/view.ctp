<div class="well">
<h2><?php echo __('Product Family'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($productFamily['ProductFamily']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Family'); ?></dt>
		<dd>
			<?php echo h($productFamily['ProductFamily']['family']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($productFamily['ProductFamily']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($productFamily['ProductFamily']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>

<!---
<div class="actions">
	<h3><?php //echo __('Actions'); ?></h3>
	<ul>
		<li><?php //echo $this->Html->link(__('Edit Product Family'), array('action' => 'edit', $productFamily['ProductFamily']['id'])); ?> </li>
		<li><?php //echo $this->Form->postLink(__('Delete Product Family'), array('action' => 'delete', $productFamily['ProductFamily']['id']), array(), __('Are you sure you want to delete # %s?', $productFamily['ProductFamily']['id'])); ?> </li>
		<li><?php //echo $this->Html->link(__('List Product Families'), array('action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Product Family'), array('action' => 'add')); ?> </li>
		<li><?php //echo $this->Html->link(__('List Product Types'), array('controller' => 'product_types', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Product Type'), array('controller' => 'product_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php //echo __('Related Product Types'); ?></h3>
	<?php //if (!empty($productFamily['ProductType'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php //echo __('Id'); ?></th>
		<th><?php //echo __('Type'); ?></th>
		<th><?php //echo __('Created'); ?></th>
		<th><?php //echo __('Modified'); ?></th>
		<th><?php //echo __('Product Family Id'); ?></th>
		<th class="actions"><?php //echo __('Actions'); ?></th>
	</tr>
	<?php //foreach ($productFamily['ProductType'] as $productType): ?>
		<tr>
			<td><?php //echo $productType['id']; ?></td>
			<td><?php //echo $productType['type']; ?></td>
			<td><?php //echo $productType['created']; ?></td>
			<td><?php //echo $productType['modified']; ?></td>
			<td><?php //echo $productType['product_family_id']; ?></td>
			<td class="actions">
				<?php //echo $this->Html->link(__('View'), array('controller' => 'product_types', 'action' => 'view', $productType['id'])); ?>
				<?php //echo $this->Html->link(__('Edit'), array('controller' => 'product_types', 'action' => 'edit', $productType['id'])); ?>
				<?php //echo $this->Form->postLink(__('Delete'), array('controller' => 'product_types', 'action' => 'delete', $productType['id']), array(), __('Are you sure you want to delete # %s?', $productType['id'])); ?>
			</td>
		</tr>
	<?php //endforeach; ?>
	</table>
<?php //endif; ?>

	<div class="actions">
		<ul>
			<li><?php //echo $this->Html->link(__('New Product Type'), array('controller' => 'product_types', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
--->
