<?php

/**
 * @file plugins/generic/usageStats/PKPUsageStatsReportPlugin.inc.php
 *
 * Copyright (c) 2013-2020 Simon Fraser University
 * Copyright (c) 2003-2020 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class PKPUsageStatsReportPlugin
 * @ingroup plugins_generic_usageStats
 *
 * @brief OJS default statistics report plugin (and metrics provider)
 */


import('lib.pkp.classes.plugins.ReportPlugin');

abstract class PKPUsageStatsReportPlugin extends ReportPlugin {

	/**
	 * @copydoc Plugin::register()
	 */
	function register($category, $path, $mainContextId = null) {
		$success = parent::register($category, $path, $mainContextId);
		$this->addLocaleData();
		return $success;
	}

	/**
	 * @copydoc Plugin::getName()
	 */
	function getName() {
		return 'usageStatsReportPlugin';
	}

	/**
	 * @copydoc Plugin::getDisplayName()
	 */
	function getDisplayName() {
		return __('plugins.reports.usageStats.report.displayName');
	}

	/**
	 * @copydoc Plugin::getDescription()
	 */
	function getDescription() {
		return __('plugins.reports.usageStats.report.description');
	}

	/**
	 * @copydoc ReportPlugin::display()
	 */
	function display($args, $request) {
		$router = $request->getRouter();
		$context = $router->getContext($request);

		$metricType = $this->getMetricTypes();

		import('classes.statistics.StatisticsHelper');
		$statsHelper = new StatisticsHelper();
		$columnNames = $statsHelper->getColumnNames();
		// Make sure we aggregate by month instead of day.
		unset($columnNames[STATISTICS_DIMENSION_DAY]);
		$columns = array_keys($columnNames);

		$reportArgs = array(
			'metricType' => $metricType,
			'columns' => $columns,
			'filters' => json_encode(array(STATISTICS_DIMENSION_CONTEXT_ID => $context->getId())),
			'orderBy' => json_encode(array(STATISTICS_DIMENSION_MONTH => STATISTICS_ORDER_ASC))
		);

		$request->redirect(null, null, 'tools', 'generateReport', $reportArgs);
	}

	/**
	 * @copydoc ReportPlugin::getMetrics()
	 */
	function getMetrics($metricType = null, $columns = null, $filters = null, $orderBy = null, $range = null) {
		// This plug-in uses the MetricsDAO to store metrics. So we simply
		// delegate there.
		$metricsDao = DAORegistry::getDAO('MetricsDAO'); /* @var $metricsDao MetricsDAO */
		return $metricsDao->getMetrics($metricType, $columns, $filters, $orderBy, $range);
	}

	/**
	 * @copydoc ReportPlugin::getMetricDisplayType()
	 */
	function getMetricDisplayType($metricType) {
		return __('plugins.reports.usageStats.metricType');
	}

	/**
	 * @copydoc ReportPlugin::getMetricFullName()
	 */
	function getMetricFullName($metricType) {
		return __('plugins.reports.usageStats.metricType.full');
	}

	/**
	 * @copydoc ReportPlugin::getDefaultReportTemplates()
	 */
	function getDefaultReportTemplates($metricTypes = null) {
		$reports = array();
		$pluginMetricTypes = $this->getMetricTypes();
		if (is_null($metricTypes)) $metricTypes = $pluginMetricTypes;

		if (!$this->isMetricTypeValid($metricTypes)) return $reports;

		// Context index page views.
		$columns = array(STATISTICS_DIMENSION_ASSOC_TYPE,
			STATISTICS_DIMENSION_CONTEXT_ID,
			STATISTICS_DIMENSION_MONTH,
			STATISTICS_DIMENSION_COUNTRY);

		$filter = array(STATISTICS_DIMENSION_ASSOC_TYPE => Application::getContextAssocType());

		// We allow the subclasses to define the name locale key.
		$reports[] = array('nameLocaleKey' => '',
				'metricType' => $metricTypes, 'columns' => $columns, 'filter' => $filter,
				'aggregationColumns' => $this->getAggregationColumns());

		return $reports;
	}


	/**
	 * @copydoc ReportPlugin::getOptionalColumns()
	 */
	function getOptionalColumns($metricType) {
		if (!$this->isMetricTypeValid($metricType)) return array();
		return array(
			STATISTICS_DIMENSION_CITY,
			STATISTICS_DIMENSION_REGION
		);
	}


	//
	// Protected methods.
	//
	/**
 	 * Get aggregation columns, the ones that
	 * can be part of any report template not changing
	 * it's main purpose.
	 * @return array
	 */
	protected function getAggregationColumns() {
		return array(STATISTICS_DIMENSION_COUNTRY,
			STATISTICS_DIMENSION_REGION,
			STATISTICS_DIMENSION_CITY,
			STATISTICS_DIMENSION_MONTH,
			STATISTICS_DIMENSION_DAY);
	}

	/**
	 * Check the passed metric type against the
	 * metric types this plugin implements.
	 * @param $metricType array|string
	 * @return boolean
	 */
	protected function isMetricTypeValid($metricType) {
		$pluginMetricTypes = $this->getMetricTypes();
		if (!is_array($metricType)) $metricType = array($metricType);

		// Check if the plugin supports the passed metric types.
		$intersection = array_intersect($metricType, $pluginMetricTypes);
		return !empty($intersection);
	}
}

