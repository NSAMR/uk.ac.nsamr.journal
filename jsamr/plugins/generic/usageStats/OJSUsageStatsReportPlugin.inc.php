<?php

/**
 * @file plugins/generic/usageStats/OJSUsageStatsReportPlugin.inc.php
 *
 * Copyright (c) 2013-2020 Simon Fraser University
 * Copyright (c) 2003-2020 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class OJUsageStatsReportPlugin
 * @ingroup plugins_generic_usageStats
 *
 * @brief OJS default statistics report plugin (and metrics provider)
 */


import('plugins.generic.usageStats.PKPUsageStatsReportPlugin');

define('OJS_METRIC_TYPE_COUNTER', 'ojs::counter');

class OJSUsageStatsReportPlugin extends PKPUsageStatsReportPlugin {

	/**
	 * @copydoc ReportPlugin::getMetrics()
	 */
	function getMetrics($metricType = null, $columns = null, $filters = null, $orderBy = null, $range = null) {
		// Validate the metric type.
		if (!(is_scalar($metricType) || count($metricType) === 1)) return null;
		if (is_array($metricType)) $metricType = array_pop($metricType);
		if ($metricType !== OJS_METRIC_TYPE_COUNTER) return null;

		return parent::getMetrics($metricType, $columns, $filters, $orderBy, $range);
	}

	/**
	 * @copydoc ReportPlugin::getMetricTypes()
	 */
	function getMetricTypes() {
		return array(OJS_METRIC_TYPE_COUNTER);
	}

	/**
	 * @copydoc ReportPlugin::getMetricDisplayType()
	 */
	function getMetricDisplayType($metricType) {
		if ($metricType !== OJS_METRIC_TYPE_COUNTER) return null;
		return parent::getMetricDisplayType($metricType);
	}

	/**
	 * @copydoc ReportPlugin::getMetricFullName()
	 */
	function getMetricFullName($metricType) {
		if ($metricType !== OJS_METRIC_TYPE_COUNTER) return null;
		return parent::getMetricDisplayType($metricType);
	}

	/**
	 * @copydoc ReportPlugin::getColumns()
	 */
	function getColumns($metricType) {
		if ($metricType !== OJS_METRIC_TYPE_COUNTER) return array();
		return array(
			STATISTICS_DIMENSION_ASSOC_ID,
			STATISTICS_DIMENSION_ASSOC_TYPE,
			STATISTICS_DIMENSION_FILE_TYPE,
			STATISTICS_DIMENSION_REPRESENTATION_ID,
			STATISTICS_DIMENSION_SUBMISSION_ID,
			STATISTICS_DIMENSION_ISSUE_ID,
			STATISTICS_DIMENSION_CONTEXT_ID,
			STATISTICS_DIMENSION_CITY,
			STATISTICS_DIMENSION_REGION,
			STATISTICS_DIMENSION_COUNTRY,
			STATISTICS_DIMENSION_DAY,
			STATISTICS_DIMENSION_MONTH,
			STATISTICS_METRIC
		);
	}

	/**
	 * @copydoc ReportPlugin::getObjectTypes()
	 */
	function getObjectTypes($metricType) {
		if ($metricType !== OJS_METRIC_TYPE_COUNTER) return array();
		return array(
			ASSOC_TYPE_JOURNAL,
			ASSOC_TYPE_ISSUE,
			ASSOC_TYPE_ISSUE_GALLEY,
			ASSOC_TYPE_SUBMISSION,
			ASSOC_TYPE_SUBMISSION_FILE
		);
	}

	/**
	 * @copydoc ReportPlugin::getDefaultReportTemplates()
	 */
	function getDefaultReportTemplates($metricTypes = null) {
		$reports = parent::getDefaultReportTemplates($metricTypes);
		// Define the press report template.
		$reports[0]['nameLocaleKey'] = 'manager.statistics.reports.defaultReport.journalIndexPageViews';

		$contextReportTemplate = current($reports);
		$metricType = $contextReportTemplate['metricType'];
		$aggregationColumns = $this->getAggregationColumns();

		// Article file downloads.
		$columns = array(STATISTICS_DIMENSION_ASSOC_TYPE,
			STATISTICS_DIMENSION_ASSOC_ID,
			STATISTICS_DIMENSION_ISSUE_ID,
			STATISTICS_DIMENSION_SUBMISSION_ID,
			STATISTICS_DIMENSION_MONTH,
			STATISTICS_DIMENSION_COUNTRY);
		$filter = array(STATISTICS_DIMENSION_ASSOC_TYPE => ASSOC_TYPE_SUBMISSION_FILE);
		array_unshift($reports, array('nameLocaleKey' => 'manager.statistics.reports.defaultReport.articleDownloads',
			'metricType' => $metricType, 'columns' => $columns, 'filter' => $filter,
			'aggregationColumns' => $aggregationColumns));

		// Article abstract views.
		$filter = array(STATISTICS_DIMENSION_ASSOC_TYPE => ASSOC_TYPE_SUBMISSION);
		array_unshift($reports, array('nameLocaleKey' => 'manager.statistics.reports.defaultReport.articleAbstract',
			'metricType' => $metricType, 'columns' => $columns, 'filter' => $filter,
			'aggregationColumns' => $aggregationColumns));

		// Issue main page views.
		$columns = array(STATISTICS_DIMENSION_ASSOC_TYPE,
			STATISTICS_DIMENSION_MONTH,
			STATISTICS_DIMENSION_COUNTRY);
		$filter = array(STATISTICS_DIMENSION_ASSOC_TYPE => ASSOC_TYPE_ISSUE);
		array_unshift($reports, array('nameLocaleKey' => 'manager.statistics.reports.defaultReport.issuePageViews',
			'metricType' => $metricType, 'columns' => $columns, 'filter' => $filter,
			'aggregationColumns' => $aggregationColumns));

		return $reports;
	}
}

