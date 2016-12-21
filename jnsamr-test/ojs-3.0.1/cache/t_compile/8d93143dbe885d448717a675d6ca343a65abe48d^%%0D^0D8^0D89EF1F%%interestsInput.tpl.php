<?php /* Smarty version 2.6.25-dev, created on 2016-12-21 21:56:18
         compiled from form/interestsInput.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'form/interestsInput.tpl', 12, false),array('modifier', 'json_encode', 'form/interestsInput.tpl', 18, false),array('function', 'url', 'form/interestsInput.tpl', 18, false),)), $this); ?>
<script>
	$(document).ready(function(){
		$("#<?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
").find(".interests").tagit({
			fieldName: 'interests[]',
			allowSpaces: true,
			autocomplete: {
				source: function(request, response) {
					$.ajax({
						url: <?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'user','op' => 'getInterests','escape' => false), $this))) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp));?>
,
						data: {'term': request.term},
						dataType: 'json',
						success: function(jsonData) {
							if (jsonData.status == true) {
								response(jsonData.content);
							}
						}
					});
				}
			}
		});
	});
</script>

<div id="<?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">
	<!-- The container which will be processed by tag-it.js as the interests widget -->
	<ul class="interests">
		<?php if ($this->_tpl_vars['FBV_interests']): ?><?php $_from = $this->_tpl_vars['FBV_interests']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['interest']):
?><li class="hidden"><?php echo ((is_array($_tmp=$this->_tpl_vars['interest'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</li><?php endforeach; endif; unset($_from); ?><?php endif; ?>
	</ul>
	<?php if ($this->_tpl_vars['FBV_label_content']): ?><span><?php echo $this->_tpl_vars['FBV_label_content']; ?>
</span><?php endif; ?>
</div>