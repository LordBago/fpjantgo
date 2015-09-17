<div class="container">
	<div class="row">
		<div class="col-md-6">
            <?php echo $this->Form->create('ProductFamily'); ?>
                <fieldset>
                    <legend><?php echo __('Edit Product Family'); ?></legend>
                <?php
                    echo $this->Form->input('id');
                    echo $this->Form->input('family',array('class' => 'form-control', 'label' => 'Familia de Producto'));
                ?>
                </fieldset>
            <?php echo $this->Form->end(__('Submit')); ?>
        </div>
    </div>
</div>
<!---
<div class="actions">
	<h3><?php //echo __('Actions'); ?></h3>
	<ul>

		<li><?php //echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ProductFamily.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('ProductFamily.id'))); ?></li>
		<li><?php ///echo $this->Html->link(__('List Product Families'), array('action' => 'index')); ?></li>
		<li><?php //echo $this->Html->link(__('List Product Types'), array('controller' => 'product_types', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Product Type'), array('controller' => 'product_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
--->
