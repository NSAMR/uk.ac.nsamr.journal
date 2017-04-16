<?php /* Smarty version 2.6.25-dev, created on 2017-02-08 20:34:19
         compiled from controllers/grid/feature/featuresOptions.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'json_encode', 'controllers/grid/feature/featuresOptions.tpl', 12, false),array('modifier', 'escape', 'controllers/grid/feature/featuresOptions.tpl', 16, false),)), $this); ?>
{
	<?php $_from = $this->_tpl_vars['features']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['features'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['features']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['feature']):
        $this->_foreach['features']['iteration']++;
?>
		<?php echo ((is_array($_tmp=$this->_tpl_vars['feature']->getId())) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp)); ?>
: {
			JSClass: <?php echo ((is_array($_tmp=$this->_tpl_vars['feature']->getJSClass())) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp)); ?>
,
			options: {
				<?php $_from = $this->_tpl_vars['feature']->getOptions(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['featureOptions'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['featureOptions']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['optionName'] => $this->_tpl_vars['optionValue']):
        $this->_foreach['featureOptions']['iteration']++;
?>
					<?php echo $this->_tpl_vars['optionName']; ?>
: <?php if ($this->_tpl_vars['optionValue']): ?>'<?php echo ((is_array($_tmp=$this->_tpl_vars['optionValue'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); ?>
'<?php else: ?>false<?php endif; ?><?php if (! ($this->_foreach['featureOptions']['iteration'] == $this->_foreach['featureOptions']['total'])): ?>,<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?>
			}
		}<?php if (! ($this->_foreach['features']['iteration'] == $this->_foreach['features']['total'])): ?>,<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>
}