<?php /* Smarty version 2.6.25-dev, created on 2017-02-08 20:10:22
         compiled from controllers/grid/columnGroup.tpl */ ?>

<colgroup>
	<?php $_from = $this->_tpl_vars['columns']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['column']):
?>
				<?php if ($this->_tpl_vars['column']->hasFlag('indent')): ?>
			<?php continue; ?>
		<?php endif; ?>
		<col class="grid-column column-<?php echo $this->_tpl_vars['column']->getId(); ?>
"
		<?php if ($this->_tpl_vars['column']->hasFlag('width')): ?>
			style="width: <?php echo $this->_tpl_vars['column']->getFlag('width'); ?>
%;"
		<?php endif; ?> />
	<?php endforeach; endif; unset($_from); ?>
</colgroup>