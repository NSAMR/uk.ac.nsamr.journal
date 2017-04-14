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
  'plugins.importexport.native.error.unknownSection' => 'Unknown section {$param}',
  'plugins.importexport.native.error.unknownUser' => 'The specified user, "{$userName}", does not exist.',
  'plugins.importexport.native.import.error.sectionTitleMismatch' => 'The section title "{$section1Title}" and the section title "{$section2Title}" in the "{$issueTitle}" issue matched the different existing journal sections.',
  'plugins.importexport.native.import.error.sectionTitleMatch' => 'The section title "{$sectionTitle}" in the "{$issueTitle}" issue matched an existing journal section, but another title of this section doesn\'t match with another title of the existing journal section.',
  'plugins.importexport.native.import.error.sectionAbbrevMismatch' => 'The section abbreviation "{$section1Abbrev}" and the section abbreviation "{$section2Abbrev}" of the "{$issueTitle}" issue matched the different existing journal sections.',
  'plugins.importexport.native.import.error.sectionAbbrevMatch' => 'The section abbreviation "{$sectionAbbrev}" in the "{$issueTitle}" issue matched an existing journal section, but another abbreviation of this section doesn\'t match with another abbreviation of the existing journal section.',
  'plugins.importexport.native.import.error.issueIdentificationMatch' => 'None or more than one issue matches the given issue identification "{$issueIdentification}".',
  'plugins.importexport.native.import.error.issueIdentificationMissing' => 'The issue identification element is missing for the article "{$articleTitle}"".',
); ?>