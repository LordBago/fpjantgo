<div class="well">
<h2><?php echo __('Product Type'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($productType['ProductType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($productType['ProductType']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($productType['ProductType']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($productType['ProductType']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product Family'); ?></dt>
		<dd>
			<?php echo $this->Html->link($productType['ProductFamily']['family'], array('controller' => 'product_families', 'action' => 'view', $productType['ProductFamily']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>

<!---
<div class="actions">
	<h3><?php/* echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Product Type'), array('action' => 'edit', $productType['ProductType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Product Type'), array('action' => 'delete', $productType['ProductType']['id']), array(), __('Are you sure you want to delete # %s?', $productType['ProductType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Product Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Product Families'), array('controller' => 'product_families', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product Family'), array('controller' => 'product_families', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Products'); ?></h3>
	<?php if (!empty($productType['Product'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Metal'); ?></th>
		<th><?php echo __('Weight'); ?></th>
		<th><?php echo __('Depth'); ?></th>
		<th><?php echo __('Length'); ?></th>
		<th><?php echo __('Width'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Product Type Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($productType['Product'] as $product): ?>
		<tr>
			<td><?php echo $product['id']; ?></td>
			<td><?php echo $product['name']; ?></td>
			<td><?php echo $product['metal']; ?></td>
			<td><?php echo $product['weight']; ?></td>
			<td><?php echo $product['depth']; ?></td>
			<td><?php echo $product['length']; ?></td>
			<td><?php echo $product['width']; ?></td>
			<td><?php echo $product['price']; ?></td>
			<td><?php echo $product['created']; ?></td>
			<td><?php echo $product['modified']; ?></td>
			<td><?php echo $product['product_type_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'products', 'action' => 'view', $product['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'products', 'action' => 'edit', $product['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'products', 'action' => 'delete', $product['id']), array(), __('Are you sure you want to delete # %s?', $product['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
--->