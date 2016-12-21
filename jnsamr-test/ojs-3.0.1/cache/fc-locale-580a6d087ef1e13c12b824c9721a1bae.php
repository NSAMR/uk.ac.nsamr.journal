<?php return array (
  'plugins.importexport.medra.displayName' => 'mEDRA Export/Registration Plugin',
  'plugins.importexport.medra.description' => 'Export issue, article and galley metadata in Onix for DOI (O4DOI) format and register DOIs with the mEDRA registration agency.',
  'plugins.importexport.medra.intro' => 'If you want to register DOIs with mEDRA, please follow the directions on the
		<a href="http://www.medra.org/en/guide.htm" target="_blank">mEDRA homepage</a>
		to receive a username and password. If you do not have your own username and
		password you\'ll still be able to export into the mEDRA XML format (Onix for DOI)
		but you cannot register your DOIs with mEDRA from within OJS. 
		Please note that the password will be saved as plain text, i.e. not encrypted, due
		to the mEDRA registration service requirements.',
  'plugins.importexport.medra.settings.form.description' => 'Please configure the mEDRA export plugin:',
  'plugins.importexport.medra.settings.form.username' => 'Username',
  'plugins.importexport.medra.settings.form.usernameRequired' => 'Please enter your mEDRA username. The username may not contain colons.',
  'plugins.importexport.medra.settings.form.registrantName' => 'The name of the institution registered at mEDRA',
  'plugins.importexport.medra.settings.form.registrantNameRequired' => 'Please enter the institution that is registered at mEDRA.',
  'plugins.importexport.medra.settings.form.fromFields' => 'Person to be contacted by mEDRA in case of technical inquiries:',
  'plugins.importexport.medra.settings.form.fromCompany' => 'Institution',
  'plugins.importexport.medra.settings.form.fromCompanyRequired' => 'Please enter the institution that is technically responsible for DOI export (e.g. the institution hosting your web server).',
  'plugins.importexport.medra.settings.form.fromName' => 'Contact Person',
  'plugins.importexport.medra.settings.form.fromNameRequired' => 'Please enter a technical contact person.',
  'plugins.importexport.medra.settings.form.fromEmail' => 'Email',
  'plugins.importexport.medra.settings.form.fromEmailRequired' => 'Please enter a valid technical contact email.',
  'plugins.importexport.medra.settings.form.publicationCountry' => 'Please choose the country to be informed as \'publication country\' to mEDRA.',
  'plugins.importexport.medra.settings.form.exportIssuesAs' => 'Please choose whether you want to export issues as <a href="http://www.medra.org/en/metadata_td.htm" target="_blank">\'works\' or \'manifestations\'</a>.',
  'plugins.importexport.medra.settings.form.work' => 'work',
  'plugins.importexport.medra.settings.form.manifestation' => 'manifestation',
  'plugins.importexport.medra.settings.form.exportIssuesAs.label' => 'Issues export as',
  'plugins.importexport.medra.settings.form.automaticRegistration.description' => 'OJS will register assigned DOIs automatically to mEDRA. Please note that this may take a short amount of time after publication to process. You can check for all unregistered DOIs.>',
  'plugins.importexport.medra.settings.form.testMode.description' => 'Use the mEDRA test API (testing environment) for DOI registration. Please do not forget to remove this option for the production.',
  'plugins.importexport.medra.workOrProduct' => 'NB: DOIs assigned to articles will be exported to mEDRA as <a href="http://www.medra.org/en/metadata_td.htm" target="_blank">\'works\'</a>. DOIs assigned to galleys will be exported as <a href="http://www.medra.org/en/metadata_td.htm" target="_blank">\'manifestations\'</a>.',
  'plugins.importexport.medra.senderTask.name' => 'mEDRA automatic registration task',
  'plugins.importexport.medra.cliUsage' => 'Usage: 
{$scriptName} {$pluginName} export [xmlFileName] [journal_path] {issues|articles|galleys} objectId1 [objectId2] ...
{$scriptName} {$pluginName} register [journal_path] {issues|articles|galleys} objectId1 [objectId2] ...',
); ?>