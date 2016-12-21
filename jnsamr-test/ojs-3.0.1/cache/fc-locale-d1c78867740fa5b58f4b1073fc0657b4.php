<?php return array (
  'plugins.importexport.crossref.displayName' => 'CrossRef XML Export Plugin',
  'plugins.importexport.crossref.description' => 'Export article metadata in CrossRef XML format.',
  'plugins.importexport.crossref.requirements' => 'Requirements',
  'plugins.importexport.crossref.requirements.satisfied' => 'All plugin requirements are satisfied.',
  'plugins.importexport.crossref.error.publisherNotConfigured' => 'A journal publisher has not been configured! You must add a publisher institution on the <a href="{$journalSettingsUrl}" target="_blank">Journal Settings Page</a>.',
  'plugins.importexport.crossref.error.issnNotConfigured' => 'A journal ISSN has not been configured! You must add an ISSN on the <a href="{$journalSettingsUrl}" target="_blank">Journal Settings Page</a>.',
  'plugins.importexport.crossref.error.noDOIContentObjects' => 'Articles are not selected for DOI assignment in the DOI public identifier plugin, so there is no deposit or export possibility in this plugin.',
  'plugins.importexport.crossref.settings.depositorIntro' => 'The following items are required for a successful CrossRef deposit.',
  'plugins.importexport.crossref.settings.form.depositorName' => 'Depositor name',
  'plugins.importexport.crossref.settings.form.depositorEmail' => 'Depositor email',
  'plugins.importexport.crossref.settings.form.depositorNameRequired' => 'Please enter the depositor name.',
  'plugins.importexport.crossref.settings.form.depositorEmailRequired' => 'Please enter the depositor email.',
  'plugins.importexport.crossref.registrationIntro' => 'If you would like to use this plugin to register Digital Object Identifiers (DOIs) directly with CrossRef you will need a username and password (available from <a href="http://www.crossref.org" target="_blank">CrossRef</a>) in order to do so. If you do not have your own username and password you can still export into the CrossRef XML format, but you cannot register your DOIs with CrossRef from within OJS.',
  'plugins.importexport.crossref.settings.form.username' => 'Username',
  'plugins.importexport.crossref.settings.form.usernameRequired' => 'Please enter the username you got from CrossRef.',
  'plugins.importexport.crossref.settings.form.automaticRegistration.description' => 'OJS will deposit assigned DOIs automatically to CrossRef. Please note that this may take a short amount of time after publication to process. You can check for all unregistered DOIs.',
  'plugins.importexport.crossref.settings.form.testMode.description' => 'Use the CrossRef test API (testing environment) for the DOI deposit. Please do not forget to remove this option for the production.',
  'plugins.importexport.crossref.issues.description' => 'Note: Only issues (and not their articles) will be considered for export/registration here.',
  'plugins.importexport.crossref.status.submitted' => 'Submitted',
  'plugins.importexport.crossref.status.completed' => 'Deposited',
  'plugins.importexport.crossref.status.failed' => 'Failed',
  'plugins.importexport.crossref.status.registered' => 'Active',
  'plugins.importexport.crossref.status.markedRegistered' => 'Marked active',
  'plugins.importexport.crossref.statusLegend' => '<p>Deposit status:</p>
		<p>
		- Not deposited: no deposit attempt has been made for this DOI.<br />
		- Submitted: this DOI has been submitted for the deposit.<br />
		- Deposited: the DOI has been deposited to Crossref, but may not be active yet.<br />
		- Active: the DOI has been deposited, and is resolving correctly.<br />
		- Failed: the DOI deposit has failed.<br />
		- Marked active: the DOI was manually marked as active.
		</p>
		<p>Only the status of the last deposit attempt is displayed.</p>
		<p>If a deposit has failed, please solve the problem and try to register the DOI again.</p>',
  'plugins.importexport.crossref.action.export' => 'Download XML',
  'plugins.importexport.crossref.action.markRegistered' => 'Mark active',
  'plugins.importexport.crossref.action.register' => 'Submit',
  'plugins.importexport.crossref.action.checkStatus' => 'Check status',
  'plugins.importexport.crossref.senderTask.name' => 'CrossRef automatic registration task',
  'plugins.importexport.crossref.notification.failed' => 'A DOI has failed to register. Please go to Tools > Import/Export > CrossRef XML Export Plugin to see the failed deposits.',
  'plugins.importexport.crossref.cliUsage' => 'Usage:
{$scriptName} {$pluginName} export [xmlFileName] [journal_path] articles objectId1 [objectId2] ...
{$scriptName} {$pluginName} register [journal_path] articles objectId1 [objectId2] ...',
  'plugins.importexport.crossref.register.error.mdsError' => 'Submission was not successful! The DOI registration server returned an error: \'{$param}\'.',
  'plugins.importexport.crossref.register.success' => 'Submission successful!',
  'plugins.importexport.crossref.export.error.issueNotFound' => 'No issue matched the specified issue ID "{$issueId}".',
  'plugins.importexport.crossref.export.error.articleNotFound' => 'No article matched the specified article ID "{$articleId}".',
); ?>