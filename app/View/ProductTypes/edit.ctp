<div class="container">
	<div class="row">
		<div class="col-md-6">
            <?php echo $this->Form->create('ProductType'); ?>
                <fieldset>
                    <legend><?php echo __('Edit Product Type'); ?></legend>
                <?php
                    echo $this->Form->input('id');
                    echo $this->Form->input('type',array('class' => 'form-control', 'label' => 'Tipo de Producto'));
                    echo $this->Form->input('product_family_id',array('class' => 'form-control', 'label' => 'Familia de Producto'));
                ?>
                </fieldset>
                <p>
                <?php echo $this->Form->end(array('label' => 'Modificar Tipo de Producto', 'class' =>'btn btn-success')); ?>
                </p>
        </div>
    </div>
</div>
<!---
<div class="actions">
	<h3><?php //echo __('Actions'); ?></h3>
	<ul>

		<li><?php //echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ProductType.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('ProductType.id'))); ?></li>
		<li><?php //echo $this->Html->link(__('List Product Types'), array('action' => 'index')); ?></li>
		<li><?php //echo $this->Html->link(__('List Product Families'), array('controller' => 'product_families', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Product Family'), array('controller' => 'product_families', 'action' => 'add')); ?> </li>
		<li><?php //echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
--->
