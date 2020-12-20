pnotify
=======
* Wrapper around pnotify
* PNotify 2.0.1 sciactive.com/pnotify/

Without Symfony
-----
Include CSS:
```
<link href="pnotify.custom.min.css" media="all" rel="stylesheet" type="text/css" />
```
Include JS:
```
<script type="text/javascript" src="pnotify.custom.min.js"></script>
```
Use it like this:
```
<script type="text/javascript">
$(function(){
	new PNotify({
		title: 'Regular Notice',
		text: 'Check me out! I\'m a notice.'
	});
});
</script>
```

With Symfony
-----

Composer.json
```
Add this line:
"alex198710/pnotify": "dev-master"
```
Config.yml
```
assetic:
    assets:
        pnotify_js:
            inputs:
                - %kernel.root_dir%/../vendor/alex198710/pnotify/assets/js/pnotify.custom.min.js
            output: js/pnotify.js
            filters: [?yui_js]
        pnotify_css:
            inputs:
                - %kernel.root_dir%/../vendor/alex198710/pnotify/assets/css/pnotify.custom.min.css
            output: css/pnotify.css
```

Twig view:
```
{% stylesheets '@pnotify_css' filter='cssrewrite' %}
    <link rel="stylesheet" href="{{ asset_url }}" />
{% endstylesheets %}
```
```
{% javascripts '@pnotify_js' %}
    <script type="text/javascript" src="{{ asset_url }}"></script>
{% endjavascripts %}
```
Then use it like this:
```
<script type="text/javascript">
$(function(){
	new PNotify({
		title: 'Regular Notice',
		text: 'Check me out! I\'m a notice.'
	});
});
</script>
```
            
            
            
