<?php

/**
 * @file plugins/generic/usageStats/OMPUsageStatsReportPlugin.inc.php
 *
 * Copyright (c) 2013-2020 Simon Fraser University
 * Copyright (c) 2003-2020 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class OMPUsageStatsReportPlugin
 * @ingroup plugins_generic_usageStats
 *
 * @brief OMP default statistics report plugin (and metrics provider)
 */


import('plugins.generic.usageStats.PKPUsageStatsReportPlugin');

define('OMP_METRIC_TYPE_COUNTER', 'omp::counter');

class OMPUsageStatsReportPlugin extends PKPUsageStatsReportPlugin {

	/**
	 * @copydoc ReportPlugin::getMetrics()
	 */
	function getMetrics($metricType = null, $columns = null, $filters = null, $orderBy = null, $range = null) {
		// Validate the metric type.
		if (!(is_scalar($metricType) || count($metricType) === 1)) return null;
		if (is_array($metricType)) $metricType = array_pop($metricType);
		if ($metricType !== OMP_METRIC_TYPE_COUNTER) return null;

		return parent::getMetrics($metricType, $columns, $filters, $orderBy, $range);
	}

	/**
	 * @copydoc ReportPlugin::getMetricTypes()
	 */
	function getMetricTypes() {
		return array(OMP_METRIC_TYPE_COUNTER);
	}

	/**
	 * @copydoc ReportPlugin::getMetricDisplayType()
	 */
	function getMetricDisplayType($metricType) {
		if ($metricType !== OMP_METRIC_TYPE_COUNTER) return null;
		return parent::getMetricDisplayType($metricType);
	}

	/**
	 * @copydoc ReportPlugin::getMetricFullName()
	 */
	function getMetricFullName($metricType) {
		if ($metricType !== OMP_METRIC_TYPE_COUNTER) return null;
		return parent::getMetricDisplayType($metricType);
	}

	/**
	 * @copydoc ReportPlugin::getColumns()
	 */
	function getColumns($metricType) {
		if ($metricType !== OMP_METRIC_TYPE_COUNTER) return array();
		return array(
			STATISTICS_DIMENSION_ASSOC_ID,
			STATISTICS_DIMENSION_ASSOC_TYPE,
			STATISTICS_DIMENSION_FILE_TYPE,
			STATISTICS_DIMENSION_REPRESENTATION_ID,
			STATISTICS_DIMENSION_SUBMISSION_ID,
			STATISTICS_DIMENSION_CONTEXT_ID,
			STATISTICS_DIMENSION_SERIES_ID,
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
		if ($metricType !== OMP_METRIC_TYPE_COUNTER) return array();
		return array(
			ASSOC_TYPE_PRESS,
			ASSOC_TYPE_SERIES,
			ASSOC_TYPE_MONOGRAPH,
			ASSOC_TYPE_SUBMISSION_FILE
		);
	}

	/**
	 * @copydoc ReportPlugin::getDefaultReportTemplates()
	 */
	function getDefaultReportTemplates($metricTypes = null) {
		$reports = parent::getDefaultReportTemplates($metricTypes);
		// Define the press report template.
		$reports[0]['nameLocaleKey'] = 'manager.statistics.reports.defaultReport.pressIndexPageViews';

		$contextReportTemplate = current($reports);
		$metricType = $contextReportTemplate['metricType'];
		$aggregationColumns = $this->getAggregationColumns();

		// Monograph file downloads.
		$columns = array(STATISTICS_DIMENSION_ASSOC_TYPE,
			STATISTICS_DIMENSION_SERIES_ID,
			STATISTICS_DIMENSION_SUBMISSION_ID,
			STATISTICS_DIMENSION_MONTH,
			STATISTICS_DIMENSION_COUNTRY);
		$filter = array(STATISTICS_DIMENSION_ASSOC_TYPE => ASSOC_TYPE_SUBMISSION_FILE);
		array_unshift($reports, array('nameLocaleKey' => 'manager.statistics.reports.defaultReport.monographDownloads',
			'metricType' => $metricType, 'columns' => $columns, 'filter' => $filter,
			'aggregationColumns' => $aggregationColumns));

		// Monograph abstract views.
		$filter = array(STATISTICS_DIMENSION_ASSOC_TYPE => ASSOC_TYPE_SUBMISSION);
		array_unshift($reports, array('nameLocaleKey' => 'manager.statistics.reports.defaultReport.monographAbstract',
			'metricType' => $metricType, 'columns' => $columns, 'filter' => $filter,
			'aggregationColumns' => $aggregationColumns));

		// Series main page views.
		$columns = array(STATISTICS_DIMENSION_ASSOC_TYPE,
			STATISTICS_DIMENSION_MONTH,
			STATISTICS_DIMENSION_COUNTRY);
		$filter = array(STATISTICS_DIMENSION_ASSOC_TYPE => ASSOC_TYPE_SERIES);
		array_unshift($reports, array('nameLocaleKey' => 'manager.statistics.reports.defaultReport.seriesIndexPageViews',
			'metricType' => $metricType, 'columns' => $columns, 'filter' => $filter,
			'aggregationColumns' => $aggregationColumns));

		return $reports;
	}
}

