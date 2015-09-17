<div class="container">
	<div class="row">
		<div class="col-md-6">
            <?php echo $this->Form->create('ProductType'); ?>
                <fieldset>
                    <legend><?php echo __('Add Product Type'); ?></legend>
                <?php
                    echo $this->Form->input('type',array('class' => 'form-control', 'label' => 'Tipo de Producto'));
                    echo $this->Form->input('product_family_id',array('class' => 'form-control', 'label' => 'Familia de Producto'));
                ?>
                </fieldset>
            <p>
            <?php echo $this->Form->end(array('label' => 'Crear Tipo de Producto', 'class' =>'btn btn-success')); ?>
            </p>
        </div>
    </div>
</div>

<!---
<div class="actions">
	<h3><?php //echo __('Actions'); ?></h3>
	<ul>

		<li><?php //echo $this->Html->link(__('List Product Types'), array('action' => 'index')); ?></li>
		<li><?php //echo $this->Html->link(__('List Product Families'), array('controller' => 'product_families', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Product Family'), array('controller' => 'product_families', 'action' => 'add')); ?> </li>
		<li><?php //echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
--->