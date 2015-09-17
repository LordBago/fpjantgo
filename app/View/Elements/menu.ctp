 <!-- Fixed navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <?php echo $this->Html->link("SCP Xiovi's",'/pages/home',array('class' => 'navbar-brand'));?>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Productos<span class="caret"></span></a>
          <ul class="dropdown-menu">
           <li class="dropdown-header">Productos</li>
            <li><?php echo $this->Html->link('Listar',array('controller' => 'products', 'action' => 'index'));?></li>
            <li><?php echo $this->Html->link('Añadir',array('controller' => 'products', 'action' => 'add'));?></li>
            <li role="separator" class="divider"></li>
            <li class="dropdown-header">Tipo de Productos</li>
            <li><?php echo $this->Html->link('Listar',array('controller' => 'ProductTypes', 'action' => 'index'));?></li>
            <li><?php echo $this->Html->link('Añadir',array('controller' => 'ProductTypes', 'action' => 'add'));?></li>
            <li role="separator" class="divider"></li>
            <li class="dropdown-header">Familia de Productos</li>
            <li><?php echo $this->Html->link('Listar',array('controller' => 'ProductFamilies', 'action' => 'index'));?></li>             
            <li><?php echo $this->Html->link('Añadir',array('controller' => 'ProductFamilies', 'action' => 'add'));?></li>
          </ul>
        </li>
        <!---<li><a href="#about">About</a></li>
        <li><a href="#contact">Contact</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li class="dropdown-header">Nav header</li>
            <li><a href="#">Separated link</a></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>--->
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>