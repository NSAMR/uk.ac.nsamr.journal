/**
 * @file plugins/pkpWordcount/plugin.js
 *
 * Copyright (c) 2014-2020 Simon Fraser University
 * Copyright (c) 2000-2020 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @brief TinyMCE PKP wordcount plugin
 */

tinymce.PluginManager.add('pkpwordcount', function (editor, url) {
	
	function update() {
		var wordcount = getCount();
		editor.theme.panel.find('#pkpwordcount').text(['Words: {0}', wordcount]);
		var target = $('#' +
				$.pkp.classes.Helper.escapeJQuerySelector(editor.id)),
				height;
		if (wordcount > target.attr('wordCount')) {
			editor.theme.panel.find('#pkpwordcount').addClass('maxReached');
		} else {
			editor.theme.panel.find('#pkpwordcount').removeClass('maxReached');
		}
		
	}
	
	function getCount() {
		var wordcount = 0;
		var text = editor.getContent({ format: 'text' });
		if (text != '') {
			var words = text.match(/\S+/g);
			if (words != null) {
				wordcount = words.length;
			}
		}
		return wordcount;
	}
	
	editor.on('init', function () {
		var cssURL = url + '/styles/editor.css';
		if(document.createStyleSheet){
			document.createStyleSheet(cssURL);
		} else {
			cssLink = editor.dom.create('link', {
				rel: 'stylesheet',
				href: cssURL
			});
			document.getElementsByTagName('head')[0].
				appendChild(cssLink);
		}

		var statusbar = editor.theme.panel && editor.theme.panel.find('#statusbar')[0];		 
		if (statusbar) {
			window.setTimeout(function () {
				statusbar.insert({
					type: 'label',
					name: 'pkpwordcount',
					text: ['Words: {0}', getCount()],
					classes: 'pkpwordcount',
					disabled: editor.settings.readonly
				}, 0);

				editor.on('setcontent beforeaddundo', update);

				editor.on('keyup', function (e) {
					update();
				});
			}, 0);
		}
	});

});