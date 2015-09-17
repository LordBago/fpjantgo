<div class="container">
	<div class="row">
		<div class="col-md-6">
            <?php echo $this->Form->create('ProductFamily'); ?>
                <fieldset>
                    <legend><?php echo __('Add Product Family'); ?></legend>
                <?php
                    echo $this->Form->input('family',array('class' => 'form-control', 'label' => 'Familia de Producto'));
                ?>
                </fieldset>
                
            <p>
                <?php echo $this->Form->end(array('label' => 'Crear Familia', 'class' =>'btn btn-success')); ?>
            </p>
        </div>
    </div>
</div>
<!---
<div class="actions">
	<h3><?php //echo __('Actions'); ?></h3>
	<ul>

		<li><?php //echo $this->Html->link(__('List Product Families'), array('action' => 'index')); ?></li>
		<li><?php //echo $this->Html->link(__('List Product Types'), array('controller' => 'product_types', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Product Type'), array('controller' => 'product_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
--->
