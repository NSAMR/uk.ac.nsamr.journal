<?php return array (
  'plugins.importexport.users.displayName' => 'Users XML Plugin',
  'plugins.importexport.users.description' => 'Import and export users',
  'plugins.importexport.users.cliUsage' => 'Usage: {$scriptName} {$pluginName} [command] ...
Commands:
	import [xmlFileName] [journal_path]
	export [xmlFileName] [journal_path]
	export [xmlFileName] [journal_path] [userId1] [userId2] ...',
  'plugins.importexport.users.cliUsage.examples' => 'Examples:
	Import users into myJournal from myImportFile.xml:
	{$scriptName} {$pluginName} import myImportFile.xml myJournal

	Export all users from myJournal:
	{$scriptName} {$pluginName} export myExportFile.xml myJournal

	Export users specified by their ID:
	{$scriptName} {$pluginName} export myExportFile.xml myJournal 1 2',
  'plugins.importexport.users.import.importUsers' => 'Import Users',
  'plugins.importexport.users.import.instructions' => 'Select an XML data file containing user information to import into this journal. See the journal help for details on the format of this file.<br /><br />Note that if the imported file contains any usernames or email addresses that already exist in the system, the user data for those users will not be imported and any new roles to be created will be assigned to the existing users.',
  'plugins.importexport.users.import.dataFile' => 'User data file',
  'plugins.importexport.users.import.sendNotify' => 'Send a notification email to each imported user containing the user\'s username and password.',
  'plugins.importexport.users.import.continueOnError' => 'Continue to import other users if a failure occurs.',
  'plugins.importexport.users.import.usersWereImported' => 'The following users were successfully imported into the system',
  'plugins.importexport.users.import.errorsOccurred' => 'Errors occurred during the import',
  'plugins.importexport.users.import.confirmUsers' => 'Confirm that these are the users you would like to import into the system',
  'plugins.importexport.users.import.warning' => 'Warning',
  'plugins.importexport.users.import.encryptionMismatch' => 'Cannot use passwords hashed with {$importHash}; OJS is configured to use {$ojsHash}. If you continue, you will need to reset the imported users\' passwords.',
  'plugins.importexport.users.unknownPress' => 'An unknown journal path "{$journalPath}" was specified.',
  'plugins.importexport.users.export.exportUsers' => 'Export Users',
  'plugins.importexport.users.export.exportByRole' => 'Export By Role',
  'plugins.importexport.users.export.exportAllUsers' => 'Export All',
  'plugins.importexport.users.export.errorsOccurred' => 'Errors occurred during the export',
  'plugins.importexport.users.export.couldNotWriteFile' => 'Could not write to the file "{$fileName}".',
  'plugins.importexport.users.importComplete' => 'The import completed successfully. Users with usernames and email addresses that are not already in use have been imported, along with accompanying user groups.',
  'plugins.importexport.users.results' => 'Results',
  'plugins.importexport.users.uploadFile' => 'Please upload a file under "Import" in order to continue.',
); ?>