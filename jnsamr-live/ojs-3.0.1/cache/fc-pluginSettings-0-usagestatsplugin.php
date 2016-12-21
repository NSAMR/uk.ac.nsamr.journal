<?php return array (
  'accessLogFileParseRegex' => '/^(?P<ip>\\S+) \\S+ \\S+ \\[(?P<date>.*?)\\] "\\S+ (?P<url>\\S+).*?" (?P<returnCode>\\S+) \\S+ ".*?" "(?P<userAgent>.*?)"/',
  'chartType' => 'bar',
  'createLogFiles' => true,
  'datasetMaxCount' => '4',
  'enabled' => true,
  'optionalColumns' => 
  array (
    0 => 'city',
    1 => 'region',
  ),
); ?>