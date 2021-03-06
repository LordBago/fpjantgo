<div class="container">
	<div class="row">
		<div class="col-md-6">
            <?php echo $this->Form->create('Product',array('type' => 'file', 'novalidate' => 'novalidate')); ?>
                <fieldset>
                    <legend><?php echo __('Add Product'); ?></legend>
                <?php
                    echo $this->Form->input('name',array('class' => 'form-control', 'label' => 'Nombre'));
                    echo $this->Form->input('metal',array('class' => 'form-control', 'label' => 'Metal'));
                    echo $this->Form->input('weight',array('class' => 'form-control', 'label' => 'Peso(gr)'));
                    echo $this->Form->input('depth',array('class' => 'form-control', 'label' => 'Espesor(mm)'));
                    echo $this->Form->input('length',array('class' => 'form-control', 'label' => 'Largo(mm)'));
                    echo $this->Form->input('width',array('class' => 'form-control', 'label' => 'Ancho(mm)'));
                    echo $this->Form->input('price',array('class' => 'form-control', 'label' => 'Precio S/.'));
                    echo $this->Form->input('photo',array('type'=>'file','label' => 'Foto'));
                    echo $this->Form->input('photo_address',array('type'=>'hidden'));
                    echo $this->Form->input('product_type_id',array('class' => 'form-control', 'label' => 'Tipo de Joya'));
                ?>
                </fieldset>
            <p>
            <?php echo $this->Form->end(array('label' => 'Crear Producto', 'class' =>'btn btn-success')); ?>
            </p>
        </div>
    </div>
</div>

<!---
<div class="actions">
	<h3><?php //echo __('Actions'); ?></h3>
	<ul>

		<li><?php //echo $this->Html->link(__('List Products'), array('action' => 'index')); ?></li>
		<li><?php //echo $this->Html->link(__('List Product Types'), array('controller' => 'product_types', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Product Type'), array('controller' => 'product_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
--->