<?php return array (
  'plugins.importexport.native.displayName' => 'Native XML Plugin',
  'plugins.importexport.native.description' => 'Import and export articles and issues in OJS\'s native XML format.',
  'plugins.importexport.native.import' => 'Import',
  'plugins.importexport.native.import.instructions' => 'Upload XML file to import',
  'plugins.importexport.native.exportSubmissions' => 'Export Articles',
  'plugins.importexport.native.exportIssues' => 'Export Issues',
  'plugins.importexport.native.results' => 'Results',
  'plugins.inportexport.native.uploadFile' => 'Please upload a file under "Import" in order to continue.',
  'plugins.importexport.native.importComplete' => 'The import completed successfully. The following items were imported:',
  'plugins.importexport.native.cliUsage' => 'Usage: {$scriptName} {$pluginName} [command] ...
Commands:
	import [xmlFileName] [journal_path] [user_name] ...
	export [xmlFileName] [journal_path] articles [articleId1] [articleId2] ...
	export [xmlFileName] [journal_path] article [articleId]
	export [xmlFileName] [journal_path] issues [issueId1] [issueId2] ...
	export [xmlFileName] [journal_path] issue [issueId]

Additional parameters are required for importing data as follows, depending
on the root node of the XML document.

If the root node is <article> or <articles>, additional parameters are required.
The following formats are accepted:

{$scriptName} {$pluginName} import [xmlFileName] [journal_path] [user_name]
	issue_id [issueId] section_id [sectionId]

{$scriptName} {$pluginName} import [xmlFileName] [journal_path] [user_name]
	issue_id [issueId] section_name [name]

{$scriptName} {$pluginName} import [xmlFileName] [journal_path]
	issue_id [issueId] section_abbrev [abbrev]',
  'plugins.importexport.native.cliError' => 'ERROR:',
  'plugins.importexport.native.error.unknownUser' => 'The specified user, "{$userName}", does not exist.',
  'plugins.importexport.native.error.unknownJournal' => 'The specified journal path, "{$journalPath}", does not exist.',
  'plugins.importexport.native.export.error.couldNotWrite' => 'Could not write to the file "{$fileName}".',
); ?>