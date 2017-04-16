<?php return array (
  'plugins.importexport.datacite.displayName' => 'DataCite Export/Registration Plugin',
  'plugins.importexport.datacite.description' => 'Export or register issue, article, galley and supplementary file metadata in DataCite format.',
  'plugins.importexport.datacite.settings.description' => 'Please configure the DataCite export plugin before using it for the first time.',
  'plugins.importexport.datacite.intro' => 'If you want to register DOIs with DataCite, please contact the Managing
		Agent via the <a href="http://datacite.org/contact" target="_blank">DataCite
		homepage</a>, who will refer you to your local DataCite Member. Once you have
		established a relationship with the Member organisation, you will be provided
		with access to the DataCite service for minting persistent identifiers (DOIs)
		and registering associated metadata. If you do not have your own username and
		password you\'ll still be able to export into the DataCite XML format but you
		cannot register your DOIs with DataCite from within OJS.
		Please note that the password will be saved as plain text, i.e. not encrypted, due
		to the DataCite registration service requirements.',
  'plugins.importexport.datacite.settings.form.username' => 'Username (symbol)',
  'plugins.importexport.datacite.settings.form.usernameRequired' => 'Please enter the username (symbol) you got from DataCite. The username may not contain colons.',
  'plugins.importexport.datacite.settings.form.automaticRegistration.description' => 'OJS will deposit DOIs automatically to DataCite. Please note that this may take a short amount of time after publication to process. You can check for all unregistered DOIs.',
  'plugins.importexport.datacite.settings.form.testMode.description' => 'Use the DataCite test prefix for DOI registration. Please do not forget to remove this option for the production.',
  'plugins.importexport.datacite.senderTask.name' => 'DataCite automatic registration task',
  'plugins.importexport.datacite.cliUsage' => 'Usage: 
{$scriptName} {$pluginName} export [outputFileName] [journal_path] {issues|articles|galleys} objectId1 [objectId2] ...
{$scriptName} {$pluginName} register [journal_path] {issues|articles|galleys} objectId1 [objectId2] ...',
); ?>