<?php /* Smarty version 2.6.25-dev, created on 2017-01-16 15:56:06
         compiled from controllers/grid/grid.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'concat', 'controllers/grid/grid.tpl', 11, false),array('modifier', 'uniqid', 'controllers/grid/grid.tpl', 12, false),array('modifier', 'escape', 'controllers/grid/grid.tpl', 18, false),array('modifier', 'json_encode', 'controllers/grid/grid.tpl', 21, false),array('function', 'translate', 'controllers/grid/grid.tpl', 86, false),)), $this); ?>

<?php $this->assign('staticId', ((is_array($_tmp="component-")) ? $this->_run_mod_handler('concat', true, $_tmp, $this->_tpl_vars['grid']->getId()) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, $this->_tpl_vars['grid']->getId()))); ?>
<?php $this->assign('gridId', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['staticId'])) ? $this->_run_mod_handler('concat', true, $_tmp, '-') : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, '-')))) ? $this->_run_mod_handler('uniqid', true, $_tmp) : uniqid($_tmp))); ?>
<?php $this->assign('gridTableId', ((is_array($_tmp=$this->_tpl_vars['gridId'])) ? $this->_run_mod_handler('concat', true, $_tmp, "-table") : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, "-table"))); ?>
<?php $this->assign('gridActOnId', $this->_tpl_vars['gridTableId']); ?>

<script>
	$(function() {
		$('#<?php echo ((is_array($_tmp=$this->_tpl_vars['gridId'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); ?>
').pkpHandler(
			'<?php echo ((is_array($_tmp=$this->_tpl_vars['grid']->getJSHandler())) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); ?>
',
			{
				gridId: <?php echo ((is_array($_tmp=$this->_tpl_vars['grid']->getId())) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp)); ?>
,
				<?php $_from = $this->_tpl_vars['grid']->getUrls(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['gridUrls'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['gridUrls']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['itemUrl']):
        $this->_foreach['gridUrls']['iteration']++;
?>
					<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp)); ?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['itemUrl'])) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp)); ?>
,
				<?php endforeach; endif; unset($_from); ?>
				bodySelector: '#<?php echo ((is_array($_tmp=$this->_tpl_vars['gridActOnId'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); ?>
',
				<?php if ($this->_tpl_vars['grid']->getPublishChangeEvents()): ?>
					publishChangeEvents: <?php echo json_encode($this->_tpl_vars['grid']->getPublishChangeEvents()); ?>
,
				<?php endif; ?>
				features: <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'controllers/grid/feature/featuresOptions.tpl', 'smarty_include_vars' => array('features' => $this->_tpl_vars['features'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			}
		);
	});
</script>

<div id="<?php echo ((is_array($_tmp=$this->_tpl_vars['gridId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" class="pkp_controllers_grid<?php if (is_a ( $this->_tpl_vars['grid'] , 'CategoryGridHandler' )): ?> pkp_grid_category<?php endif; ?><?php if (! $this->_tpl_vars['grid']->getTitle()): ?> pkp_grid_no_title<?php endif; ?>">
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/grid/gridHeader.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<table id="<?php echo ((is_array($_tmp=$this->_tpl_vars['gridTableId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/grid/columnGroup.tpl", 'smarty_include_vars' => array('columns' => $this->_tpl_vars['columns'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<thead>
						<tr>
				<?php $_from = $this->_tpl_vars['columns']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['columns'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['columns']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['column']):
        $this->_foreach['columns']['iteration']++;
?>
										<?php if ($this->_tpl_vars['column']->hasFlag('indent')): ?>
						<?php continue; ?>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['column']->hasFlag('alignment')): ?>
						<?php $this->assign('alignment', $this->_tpl_vars['column']->getFlag('alignment')); ?>
					<?php else: ?>
						<?php $this->assign('alignment', @COLUMN_ALIGNMENT_LEFT); ?>
					<?php endif; ?>
					<th scope="col" style="text-align: <?php echo $this->_tpl_vars['alignment']; ?>
;">
						<?php echo $this->_tpl_vars['column']->getLocalizedTitle(); ?>

												<?php if (($this->_foreach['columns']['iteration'] == $this->_foreach['columns']['total']) && $this->_tpl_vars['grid']->getActions(@GRID_ACTION_POSITION_LASTCOL)): ?>
							<span class="options pkp_linkActions">
								<?php $_from = $this->_tpl_vars['grid']->getActions(@GRID_ACTION_POSITION_LASTCOL); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['action']):
?>
									<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "linkAction/linkAction.tpl", 'smarty_include_vars' => array('action' => $this->_tpl_vars['action'],'contextId' => $this->_tpl_vars['staticId'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
								<?php endforeach; endif; unset($_from); ?>
							</span>
						<?php endif; ?>
					</th>
				<?php endforeach; endif; unset($_from); ?>
			</tr>
		</thead>
		<?php if ($this->_tpl_vars['grid']->getIsSubcomponent() && ! is_a ( $this->_tpl_vars['grid'] , 'CategoryGridHandler' )): ?>
						</table>
			<div class="scrollable">
			<table>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/grid/columnGroup.tpl", 'smarty_include_vars' => array('columns' => $this->_tpl_vars['columns'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php endif; ?>
		<?php $_from = $this->_tpl_vars['gridBodyParts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['bodyPart']):
?>
			<?php echo $this->_tpl_vars['bodyPart']; ?>

		<?php endforeach; else: ?>
 			<tbody></tbody>
		<?php endif; unset($_from); ?>
		<tbody class="empty"<?php if (count ( $this->_tpl_vars['gridBodyParts'] ) > 0): ?> style="display: none;"<?php endif; ?>>
						<tr>
				<td colspan="<?php echo $this->_tpl_vars['grid']->getColumnsCount('indent'); ?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['grid']->getEmptyRowText()), $this);?>
</td>
			</tr>
		</tbody>
	</table>

	<?php if ($this->_tpl_vars['grid']->getIsSubcomponent() && ! is_a ( $this->_tpl_vars['grid'] , 'CategoryGridHandler' )): ?>
		</div>
	<?php endif; ?>

	<?php if ($this->_tpl_vars['grid']->getActions(@GRID_ACTION_POSITION_BELOW) || $this->_tpl_vars['grid']->getFootNote()): ?>
	<div class="footer">

		<?php if ($this->_tpl_vars['grid']->getActions(@GRID_ACTION_POSITION_BELOW)): ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/grid/gridActionsBelow.tpl", 'smarty_include_vars' => array('actions' => $this->_tpl_vars['grid']->getActions(@GRID_ACTION_POSITION_BELOW),'gridId' => $this->_tpl_vars['staticId'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php endif; ?>

		<?php if ($this->_tpl_vars['grid']->getFootNote()): ?>
			<div class="footnote">
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['grid']->getFootNote()), $this);?>

			</div>
		<?php endif; ?>
	</div>
	<?php endif; ?>

</div>