<?php return array (
  'plugins.importexport.pubIds.displayName' => 'Public Identifiers XML Plugin',
  'plugins.importexport.pubIds.description' => 'Import and export public identifiers',
  'plugins.importexport.pubIds.cliUsage' => 'Usage: {$scriptName} {$pluginName} [command] ...
Commands:
	import [xmlFileName] [journal_path] [user_name]
	export [xmlFileName] [journal_path] issues [issueId1] [issueId2] ...
	export [xmlFileName] [journal_path] issue [issueId]',
  'plugins.importexport.pubIds.export' => 'Export public identifiers',
  'plugins.importexport.pubIds.export.forIssues' => 'Export public identifiers',
  'plugins.importexport.pubIds.export.selectIssue' => 'Select Issue',
  'plugins.importexport.pubIds.export.selectIssue.description' => 'Please select issues, for whose objects you whish to export the public identifiers.',
  'plugins.importexport.pubIds.import' => 'Import public identifiers',
  'plugins.importexport.pubIds.import.description' => 'This plugin supports the import of the public identifiers based on the pubIds.dtd Document Type Definition.',
  'plugins.importexport.pubIds.import.results' => 'Import Results',
  'plugins.importexport.pubIds.import.errors' => 'Import Errors',
  'plugins.importexport.pubIds.import.errors.description' => 'One or more errors occurred during import. Please check to ensure that the format of the import file correctly matches the specification. Specific details of the import errors are listed below.',
  'plugins.importexport.pubIds.import.success' => 'Import Success',
  'plugins.importexport.pubIds.import.success.description' => 'Successfully-imported public identifiers are listed below.',
  'plugins.importexport.pubIds.cliError' => 'ERROR:',
  'plugins.importexport.pubIds.cliError.unknownJournal' => 'The specified journal path, "{$journalPath}", does not exist.',
  'plugins.importexport.pubIds.cliError.unknownUser' => 'The specified user, "{$userName}", does not exist.',
  'plugins.importexport.pubIds.cliError.issueNotFound' => 'No issue matched the specified issue ID "{$issueId}".',
  'plugins.importexport.pubIds.cliError.couldNotWrite' => 'Could not write to the file "{$fileName}".',
  'plugins.importexport.pubIds.import.error.uploadFailed' => 'The upload failed; please ensure that uploads are allowed on your server and that the file is not too big for your PHP and web server configuration.',
  'plugins.importexport.pubIds.import.error.unsupportedRoot' => 'This plugin does not support the supplied root node "{$rootName}". Please ensure that the file is correctly formed and try again.',
  'plugins.importexport.pubIds.import.error.unknownObjectType' => 'An unknown object type "{$pubObjectType}" was specified in the "pubObjectType" attribute of the element with the value "{$pubId}".',
  'plugins.importexport.pubIds.import.error.unknownObject' => 'The object "{$pubObjectType}" with ID = {$pubObjectId} specified in the element with the value "{$pubId}" deos not exist for this journal.',
  'plugins.importexport.pubIds.import.error.pubIdExists' => 'Public identifier of the type "{$pubIdType}" for the object {$pubObjectType} with ID = {$pubObjectId} already exists.',
  'plugins.importexport.pubIds.import.error.duplicatePubId' => 'The public identifier "{$pubId}" is already in use by another object.',
  'plugins.importexport.pubIds.import.error.unknownPubId' => 'Your import file contains a public identifier type "{$pubIdType}" that no pubId plugin can handle. Please install and/or activate the corresponding pubId plugin before trying to import this dataset.',
); ?>