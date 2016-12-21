<?php return array (
  'plugins.importexport.pubmed.displayName' => 'PubMed XML Export Plugin',
  'plugins.importexport.pubmed.description' => 'Export article metadata in PubMed XML format for indexing in MEDLINE.',
  'plugins.importexport.pubmed.export' => 'Export Data',
  'plugins.importexport.pubmed.export.issues' => 'Export Issues',
  'plugins.importexport.pubmed.export.selectIssue' => 'Select an Issue to export.',
  'plugins.importexport.pubmed.export.articles' => 'Export Articles',
  'plugins.importexport.pubmed.export.selectArticle' => 'Select Articles to export.',
  'plugins.importexport.pubmed.cliUsage' => 'Usage: 
{$scriptName} {$pluginName} [xmlFileName] [journal_path] articles [articleId1] [articleId2] ...
{$scriptName} {$pluginName} [xmlFileName] [journal_path] issue [issueId]',
  'plugins.importexport.pubmed.cliError' => 'ERROR:',
  'plugins.importexport.pubmed.export.error.issueNotFound' => 'No issue matched the specified issue ID "{$issueId}".',
  'plugins.importexport.pubmed.export.error.articleNotFound' => 'No article matched the specified article ID "{$articleId}".',
); ?>