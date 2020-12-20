<?php

/*
 * Copyright (c) 2015 University of Pittsburgh
 * 
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
 */
namespace COUNTER {
	/**
	 * COUNTER Reports classes, release 4.1
	 * Represents the COUNTER XSD schema in class form
	 * @link http://www.niso.org/schemas/sushi
	 *
	 * @author Clinton Graham, University of Pittsburgh Library System, University of Pittsburgh <ctgraham@pitt.edu> +1-412-383-1057
	 * @copyright 2015 University of Pittsburgh
	 * @license http://www.gnu.org/licenses/gpl-2.0.html GPL 2.0 or later
	 * @package COUNTER
	 * @version 0.3
	 * 
	 * @section DESCRIPTION
	 * 
	 * This is a set of classes to represent the Project COUNTER schema ( http://www.projectcounter.org/ )
	 * It is basically an ecapsulation of DOMDocument, with type checking.
	 * Construct any object, then cast it as a string to retrieve the XML, or call asDOMDocument() to retrieve the DOM.
	 * $report = new COUNTER\Report(
	 * 	'reportId',
	 * 	'reportVersion',
	 * 	'reportName',
	 * 	'reportTitle',
	 * 	new COUNTER\Customer(
	 * 		'customerId',
	 * 		new COUNTER\ReportItems(
	 * 			'itemPlatform',
	 * 			'itemName',
	 * 			'Journal',
	 * 			array(
	 * 				new COUNTER\Metric(
	 * 					new COUNTER\DateRange(date_create("first day of previous month"), date_create("last day of previous month")),
	 * 					'Requests',
	 * 					array(new COUNTER\PerformanceCounter('ft_html', 128), new COUNTER\PerformanceCounter('ft_pdf', 129))
	 * 				),
	 * 				new COUNTER\Metric(
	 * 					new COUNTER\DateRange(date_create("first day of this month"), date_create("last day of this month")),
	 * 					'Requests',
	 * 					new COUNTER\PerformanceCounter('other', 121)
	 * 				)
	 * 			)
	 * 		)
	 * 	),
	 * 	new COUNTER\Vendor('vendorId')
	 * );
	 * print $report;
	 */

	/**
	 * COUNTER report builder class
	 * Other classes in this package extend from this core class to have access to several generic functions
	 * @todo should "tool-like" functions be moved to static calls from an non-inherited Tools class?
	 */
	class ReportBuilder {

		const COUNTER_NAMESPACE = 'http://www.niso.org/schemas/counter';

		/**
		 * Validate that $object is a $className instance.  If valid, return the object, otherwise, throw an exception
		 * @param object $object
		 * @param string $className If no namespace specified, defaults to the COUNTER namespace
		 * @return object
		 * @throws Exception
		 */
		protected function validateOneOf($object, $className) {
			if (strpos($className, '\\') === FALSE) {
				$expectedClassname = 'COUNTER\\'.$className;
			} elseif (strpos($className, '\\') === 0) {
				$expectedClassname = substr($className, 1);
			} else {
				$expectedClassname = $className;
			}
			if (is_null($object)) {
				throw new \Exception('Invalid object. Expected "'.$expectedClassname.'", got "NULL"');
			} elseif (is_array($object)) {
				switch ($className) {
					default:
						throw new \Exception('Invalid class. Expected "'.$expectedClassname.'", got unparsable array');
				}
			} elseif (is_string($object)) {
				switch ($className) {
					case '\DateTime':
						$date = date_create($object);
						if ($date) {
							return $date;
						}
						break;
					default:
				}
				throw new \Exception('Invalid class. Expected "'.$expectedClassname.'", got unparsable string');
			} elseif ($expectedClassname == get_class($object) || is_subclass_of($object, $expectedClassname)) {
				return $object;
			} else {
				throw new \Exception('Invalid class. Expected "'.$expectedClassname.'", got "'.get_class($object).'"');
			}
		}

		/**
		 * Validate that $objects is an array of $className instances.  If valid, return the array, otherwise, throw an exception
		 * @param object $objects
		 * @param string $className
		 * @return array
		 * @throws Exception
		 */
		protected function validateOneOrMoreOf($objects, $className) {
			if (is_array($objects)) {
				foreach ($objects as $object) {
					$this->validateOneOf($object, $className);
				}
				return $objects;
			} else {
				return array($this->validateOneOf($objects, $className));
			}
		}

		/**
		 * Validate that $objects is an array of $className instances, or is empty.  If valid, return the array or empty, otherwise, throw an exception
		 * @param object $objects
		 * @param string $className
		 * @return array
		 * @throws Exception
		 */
		protected function validateZeroOrMoreOf($objects, $className) {
			if (empty($objects)) {
				return;
			} else {
				return $this->validateOneOrMoreOf($objects, $className);
			}
		}

		/**
		 * Validate that $object is a $className instance, or is empty.  If valid, return the object or empty, otherwise, throw an exception
		 * @param object $object
		 * @param string $className
		 * @return object
		 * @throws Exception
		 */
		protected function validateZeroOrOneOf($object, $className) {
			if (empty($object)) {
				return;
			} else {
				return $this->validateOneOf($object, $className);
			}
		}

		/**
		 * Validate that $yr is an integer.  If valid, return the year, otherwise, throw an exception
		 * @param int $int
		 * @return int
		 * @throws Exception
		 */
		protected function validatePositiveInteger($int) {
			$intval = intval($int);
			if (!is_int($intval) || $intval < 0) {
				throw new \Exception('Invalid positive integer: '.gettype($int).' value '.$int);
			}
			return $intval;
		}

		/**
		 * Validate that $string is string.  If valid, return the string, otherwise, throw an exception
		 * @param string $string
		 * @return string
		 * @throws Exception
		 */
		protected function validateString($string) {
			if (!is_string($string)) {
				throw new \Exception('Invalid string: '.gettype($string));
			}
			return $string;
		}

		/**
		 * Validate that $array is an array of strings.  If valid, return the array, otherwise, throw an exception
		 * @param array $array
		 * @return array
		 * @throws Exception
		 */
		protected function validateStrings($array) {
			if (is_array($array)) {
				foreach ($array as $string) {
					$this->validateString($string);
				}
				return $array;
			} elseif (is_string($array)) {
				return array($array);
			} elseif (!empty($array)) {
				throw new \Exception('Invalid string array: '.gettype($array));
			}
		}

		/**
		 * Check an array to see if it has associative (non-numeric) keys
		 * @param array $array
		 * @return boolean
		 */
		protected static function isAssociative($array) {
			return count(array_filter(array_keys($array), 'is_string')) > 0;
		}

		/**
		 * Given an classname and an array, call the $classname::build method and return the built object(s)
		 * The array can be associative (for a single object), or an array of associative arrays (for multiple objects)
		 * @param string $classname
		 * @param array $array
		 * @return mixed object or array of objects
		 */
		protected function buildMultiple($classname, $array) {
			if (!is_array($array)) {
				return array();
			}else if (self::isAssociative($array)) {
				return $classname::build($array);
			} else {
				$elements = array();
				foreach ($array as $element) {
					$elements[] = $classname::build($element);
				}
				return $elements;
			}
		}

		/**
		 * Return an array of valid Item Data Types
		 * @return array
		 * @todo verify addition of "Article" here for proposed release 4.2.
		 */
		protected function getItemDataTypes() {
			return array('Journal', 'Database', 'Platform', 'Book', 'Collection', 'Multimedia', 'Article');
		}

		/**
		 * Return an array of valid Identifier Types
		 * @return array
		 */
		protected function getIdentifierTypes() {
			return array('Online_ISSN', 'Print_ISSN', 'Online_ISBN', 'Print_ISBN', 'DOI', 'Proprietary');
		}

		/**
		 * Return an array of valid Contributor Identifier Types
		 * @return array
		 */
		protected function getContributorIdentifierTypes() {
			return array('ORCID', 'ISNI', 'Proprietary');
		}

		/**
		 * Return an array of valid Date Types
		 * @return array
		 * @todo these values are preliminary; need an update from COUNTER
		 */
		protected function getDateTypes() {
			return array('PubDate', 'FirstAccessedOnline', 'Proprietary');
		}

		/**
		 * Return an array of valid Date Types
		 * @return array
		 * @todo these values are preliminary; need an update from COUNTER
		 */
		protected function getAttributeTypes() {
			return array('ArticleVersion', 'ArticleType', 'QualificationName', 'QualificationLevel');
		}

		/**
		 * Return an array of valid Metric Types
		 * @return array
		 */
		protected function getMetricTypes() {
			return array('abstract', 'audio', 'data_set', 'ft_epub', 'ft_html', 'ft_html_mobile', 'ft_pdf', 'ft_pdf_mobile', 'ft_ps', 'ft_ps_mobile', 'ft_total', 'image', 'multimedia', 'no_license', 'other', 'podcast', 'record_view', 'reference', 'result_click', 'search_fed', 'search_reg', 'sectioned_html', 'toc', 'turnaway', 'video');
		}

		/**
		 * Return an array of valid Categories
		 * @return array
		 */
		protected function getCategories() {
			return array('Requests', 'Searches', 'Access_denied');
		}

		/**
		 * Output this object as XML
		 * Inherited by all children of this object; all children must implement asDOMDocument().
		 * @return string
		 */
		public function __toString() {
			$doc = $this->asDOMDocument();
			$doc->formatOutput = TRUE;
			return $doc->saveXML();
		}

		/**
		 * Do NOT Output this object as a DOMDocument
		 * This method must be implemented in the subclass
		 * @throws Exception
		 */
		public function asDOMDocument() {
			throw new Exception(get_class($this).' does not implement asDOMDocument()');
		}
		
		/**
		 * Do NOT build this object
		 * This method must be implemented in the subclass
		 * Subclasses should call this method if unable to build the object in order to report an error.
		 * @throws Exception
		 */
		public static function build($array) {
			throw new \Exception('Failed to build '.get_called_class().' from data '.var_export($array, true));
		}
	}

	/**
	 * COUNTER reports base class
	 * 
	 */
	class Reports extends ReportBuilder {
		/* 
		 * @var array one or more COUNTER\Report objects
		 * @access private
		 */
		private $report = array();

		/**
		 * Construct the object
		 * @param array $reports COUNTER\Report array
		 * @return void
		 * @throws Exception
		 */
		public function __construct($reports) {
			$this->report = $this->validateOneOrMoreOf($reports, 'Report');
		}

		/**
		 * Construct the object from an array
		 * @param array $array Hash of key-values
		 * @return \self
		 * @throws Exception
		 */
		public static function build($array) {
			if (is_array($array)) {
				if (isset($array['Report'])) {
					// Nicely structured associative array
					$reports = parent::buildMultiple('COUNTER\Report', $array['Report']);
					return new self($reports);
				} elseif (!parent::isAssociative($array)) {
					// Just an array of reports
					$reports = parent::buildMultiple('COUNTER\Report', $array);
					return new self($reports);
				}
			}
			parent::build($array);
		}

		/** 
		 * Add a report 
		 * @param object $report CounterReport
		 * @return void
		 * @throws Exception
		 */
		public function addReport($report) {
			$this->report[] = $this->validateOneOf($report, 'Report');
		}

		/** 
		 * Get an array of reports
		 * @return array COUNTER\Report array
		 */
		public function getReports() {
			return $this->report;
		}

		/**
		 * Output this object as a DOMDocument
		 * @return DOMDocument
		 */
		public function asDOMDocument() {
			$doc = new \DOMDocument();
			$root = $doc->appendChild($doc->createElementNS(self::COUNTER_NAMESPACE, 'Reports'));
			$xmlns = $doc->createAttributeNS('http://www.w3.org/2001/XMLSchema-instance', 'xsi:schemaLocation');
			$xmlns->value = self::COUNTER_NAMESPACE.' http://www.niso.org/schemas/sushi/counter4_1.xsd';
			$root->appendChild($xmlns);
			foreach ($this->report as $rep) {
				$root->appendChild($doc->importNode($rep->asDOMDocument()->documentElement, true));
			}
			return $doc;
		}
	}

	/**
	 * COUNTER report instance class
	 */
	class Report extends ReportBuilder {
		/* 
		 * @var string Report attribute "Created"
		 * @access private
		 */
		private $created;
		/* 
		 * @var string Report attribute "ID"
		 * @access private
		 */
		private $id;
		/* 
		 * @var string Report attribute "Version"
		 * @access private
		 */
		private $version;
		/* 
		 * @var string Report attribute "Name"
		 * @access private
		 */
		private $name;
		/* 
		 * @var string Report attribute "Title"
		 * @access private
		 */
		private $title;
		/* 
		 * @var COUNTER\Vendor
		 * @access private
		 */
		private $vendor;
		/* 
		 * @var array one or more COUNTER\Customer objects
		 * @access private
		 */
		private $customer;

		/**
		 * Construct the object
		 * @param string $id
		 * @param string $version
		 * @param string $name
		 * @param string $title
		 * @param string $customers COUNTER\Customer
		 * @param object $vendor COUNTER\Vendor array
		 * @param string $created optional
		 * @return void
		 * @throws Exception
		 */
		public function __construct($id, $version, $name, $title, $customers, $vendor, $created = '') {
			foreach (array('id', 'version', 'name', 'title', 'created') as $arg) {
				$this->$arg = $this->validateString($$arg);
			}
			if (!$created) {
				$this->created = date("Y-m-d\Th:i:sP");
			}
			$this->vendor = $this->validateOneOf($vendor, 'Vendor');
			$this->customer = $this->validateOneOrMoreOf($customers, 'Customer');
		}

		/**
		 * Construct the object from an array
		 * @param array $array Hash of key-values
		 * @return \self
		 * @throws Exception
		 */
		public static function build($array) {
			if (is_array($array)) {
				if (isset($array['ID']) && isset($array['Version']) && isset($array['Name']) && isset($array['Title']) && isset($array['Customer']) && isset($array['Vendor'])) {
					// Nicely structured associative array
					$customers = parent::buildMultiple('COUNTER\Customer', $array['Customer']);
					return new self(
						$array['ID'],
						$array['Version'],
						$array['Name'],
						$array['Title'],
						$customers,
						Vendor::build($array['Vendor']),
						isset($array['Created']) ? $array['Created'] : ''
					);
				}
			}
			parent::build($array);
		}

		/**
		 * Output this object as a DOMDocument
		 * @return DOMDocument
		 */
		public function asDOMDocument() {
			$doc = new \DOMDocument();
			$root = $doc->appendChild($doc->createElement('Report'));
			foreach (array('Created', 'ID', 'Version', 'Name', 'Title') as $arg) {
				$lcarg = strtolower($arg);
				$attrAttr = $doc->createAttribute($arg);
				$attrAttr->appendChild($doc->createTextNode($this->$lcarg));
				$root->appendChild($attrAttr);
			}
			$root->appendChild($doc->importNode($this->vendor->asDOMDocument()->documentElement, true));
			foreach ($this->customer as $customer) {
				$root->appendChild($doc->importNode($customer->asDOMDocument()->documentElement, true));
			}
			return $doc;
		}
	}

	/**
	 * COUNTER vendor class
	 */
	class Vendor extends ReportBuilder {
		/* 
		 * @var string Vendor element "Name"
		 * @access private
		 */
		private $name;
		/* 
		 * @var string Vendor element "ID"
		 * @access private
		 */
		private $id;
		/* 
		 * @var array zero or more COUNTER\Contact elements
		 * @access private
		 */
		private $contact = array();
		/* 
		 * @var string Vendor element "WebSiteUrl"
		 * @access private
		 */
		private $webSiteUrl;
		/* 
		 * @var string Vendor element "LogoUrl"
		 * @access private
		 */
		private $logoUrl;

		/**
		 * Construct the object
		 * @param string $id
		 * @param string $name optional
		 * @param array $contacts optional COUNTER\Contact array
		 * @param string $webSiteUrl optional
		 * @param string $logoUrl optional
		 * @return void
		 * @throws Exception
		 */
		public function __construct($id, $name = '', $contacts = array(), $webSiteUrl = '', $logoUrl = '') {
			foreach (array('id', 'name', 'webSiteUrl', 'logoUrl') as $arg) {
				$this->$arg = $this->validateString($$arg);
			}
			$this->contact = $this->validateZeroOrMoreOf($contacts, 'Contact');
		}

		/**
		 * Construct the object from an array
		 * @param array $array Hash of key-values
		 * @return \self
		 * @throws Exception
		 */
		public static function build($array) {
			if (is_array($array)) {
				if (isset($array['ID'])) {
					// Nicely structured associative array
					$contacts = parent::buildMultiple('COUNTER\Contact', isset($array['Contact']) ? $array['Contact'] : array());
					return new self(
						$array['ID'],
						isset($array['Name']) ? $array['Name'] : '',
						$contacts,
						isset($array['WebSiteUrl']) ? $array['WebSiteUrl'] : '',
						isset($array['LogoUrl']) ? $array['LogoUrl'] : ''
					);
				}
			}
			parent::build($array);
		}

		/**
		 * Output this object as a DOMDocument
		 * @return DOMDocument
		 */
		public function asDOMDocument() {
			$doc = new \DOMDocument();
			$root = $doc->appendChild($doc->createElement('Vendor'));
			if ($this->name) {
				$root->appendChild($doc->createElement('Name'))->appendChild($doc->createTextNode($this->name));
			}
			$root->appendChild($doc->createElement('ID'))->appendChild($doc->createTextNode($this->id));
			if ($this->contact) {
				foreach ($this->contact as $contact) {
					$root->appendChild($doc->importNode($contact->asDOMDocument()->documentElement, true));
				}
			}
			if ($this->webSiteUrl) {
				$root->appendChild($doc->createElement('WebSiteUrl'))->appendChild($doc->createTextNode($this->webSiteUrl));
			}
			if ($this->logoUrl) {
				$root->appendChild($doc->createElement('LogoUrl'))->appendChild($doc->createTextNode($this->logoUrl));
			}
			return $doc;
		}
	}

	/**
	 * COUNTER contact class
	 */
	class Contact extends ReportBuilder {
		/* 
		 * @var string Contact element "Contact"
		 * @access private
		 */
		private $contact;
		/* 
		 * @var string Contact element "Email"
		 * @access private
		 */
		private $email;

		/**
		 * Construct the object
		 * @param string $contact optional
		 * @param string $email optional
		 * @return void
		 * @throws Exception
		 */
		public function __construct($contact = '', $email = '') {
			foreach (array('contact', 'email') as $arg) {
				$this->$arg = $this->validateString($$arg);
			}
		}

		/**
		 * Construct the object from an array
		 * @param array $array Hash of key-values
		 * @return \self
		 * @throws Exception
		 */
		public static function build($array) {
			if (is_array($array)) {
				if (isset($array['E-mail'])) {
					$array['Email'] = $array['E-mail'];
					unset($array['E-mail']);
				}
				if (isset($array['Contact']) || isset($array['Email'])) {
					return new self($array['Contact'] ? $array['Contact'] : '', $array['Email'] ? $array['Email'] : '');
				} elseif (count(array_keys($array)) == 1 && parent::isAssociative($array)) {
					// Loosely structured associative array (name/email => name/email)
					foreach ($array as $k => $v) {
						if (filter_var($k, FILTER_VALIDATE_EMAIL)) {
							// email => name
							return new self($v, $k);
						} else {
							// name => email
							return new self($k, $v);
						}
					}
				} elseif (count(array_keys($array)) == 1 && !parent::isAssociative($array)) {
					// Loosely array with a name or email
					if (filter_var($k, FILTER_VALIDATE_EMAIL)) {
						// email
						return new self('', $array[0]);
					} else {
						// name
						return new self($array[0]);
					}
				}
			} elseif (is_string($array)) {
				// Just a name or email
				if (filter_var($array, FILTER_VALIDATE_EMAIL)) {
					// email
					return new self('', $array);
				} else {
					// name
					return new self($array);
				}
			}
			parent::build($array);
		}

		/**
		 * Output this object as a DOMDocument
		 * @return DOMDocument
		 */
		public function asDOMDocument() {
			$doc = new \DOMDocument();
			$root = $doc->appendChild($doc->createElement('Contact'));
			if ($this->contact) {
				$root->appendChild($doc->createElement('Contact'))->appendChild($doc->createTextNode($this->contact));
			}
			if ($this->email) {
				$root->appendChild($doc->createElement('E-mail'))->appendChild($doc->createTextNode($this->email));
			}
			return $doc;
		}
	}

	/**
	 * COUNTER customer class
	 */
	class Customer extends ReportBuilder {
		/* 
		 * @var string Customer element "Name"
		 * @access private
		 */
		private $name;
		/* 
		 * @var string Customer element "ID"
		 * @access private
		 */
		private $id;
		/* 
		 * @var array zero or more COUNTER\Contact elements
		 * @access private
		 */
		private $contact;
		/* 
		 * @var string Customer element "WebSiteUrl"
		 * @access private
		 */
		private $webSiteUrl;
		/* 
		 * @var string Customer element "LogoUrl"
		 * @access private
		 */
		private $logoUrl;
		/* 
		 * @var string Customer element "Consortium"
		 * @access private
		 */
		private $consortium;
		/* 
		 * @var array zero or more COUNTER\Identifier elements
		 * @access private
		 */
		private $institutionalIdentifier;
		/* 
		 * @var array one or more COUNTER\ReportItem elements
		 * @access private
		 */
		private $reportItems;

		/**
		 * Construct the object
		 * @param string $id
		 * @param array $reportItems COUNTER\ReportItems array
		 * @param string $name optional
		 * @param array $contacts optional COUNTER\Contacts array
		 * @param string $webSiteUrl optional
		 * @param string $logoUrl optional
		 * @param object $consortium optional COUNTER\Consortium
		 * @param array $institutionalIdentifier optional COUNTER\Identifier array
		 * @return void
		 * @throws Exception
		 */
		public function __construct($id, $reportItems, $name = '', $contacts = array(), $webSiteUrl = '' , $logoUrl = '', $consortium = NULL, $institutionalIdentifier = array()) {
			foreach (array('id', 'name', 'webSiteUrl', 'logoUrl') as $arg) {
				$this->$arg = $this->validateString($$arg);
			}
			$this->reportItems = $this->validateOneOrMoreOf($reportItems, 'ReportItems');
			$this->contact = $this->validateZeroOrMoreOf($contacts, 'Contact');
			$this->consortium = $this->validateZeroOrOneOf($consortium, 'Consortium');
			$this->institutionalIdentifier = $this->validateZeroOrMoreOf($institutionalIdentifier, 'Identifier');
		}

		/**
		 * Construct the object from an array
		 * @param array $array Hash of key-values
		 * @return \self
		 * @throws Exception
		 */
		public static function build($array) {
			if (is_array($array)) {
				if (isset($array['ID']) && isset($array['ReportItems'])) {
					// Nicely structured associative array
					$items = parent::buildMultiple('COUNTER\ReportItems', $array['ReportItems']);
					$ids = parent::buildMultiple('COUNTER\Identifier', isset($array['InstitutionalIdentifier']) ? $array['InstitutionalIdentifier'] : array());
					$contacts = parent::buildMultiple('COUNTER\Contact', isset($array['Contact']) ? $array['Contact'] : array());
					return new self(
						$array['ID'],
						$items,
						isset($array['Name']) ? $array['Name'] : '',
						$contacts,
						isset($array['WebSiteUrl']) ? $array['WebSiteUrl'] : '',
						isset($array['LogoUrl']) ? $array['LogoUrl'] : '',
						isset($array['Consortium']) ? Consortium::build($array['Consortium']) : NULL,
						$ids
					);
				}
			}
			parent::build($array);
		}

		/**
		 * Output this object as a DOMDocument
		 * @return DOMDocument
		 */
		public function asDOMDocument() {
			$doc = new \DOMDocument();
			$root = $doc->appendChild($doc->createElement('Customer'));
			if ($this->name) {
				$root->appendChild($doc->createElement('Name'))->appendChild($doc->createTextNode($this->name));
			}
			$root->appendChild($doc->createElement('ID'))->appendChild($doc->createTextNode($this->id));
			if ($this->contact) {
				foreach ($this->contact as $contact) {
					$root->appendChild($doc->importNode($contact->asDOMDocument()->documentElement, true));
				}
			}
			if ($this->webSiteUrl) {
				$root->appendChild($doc->createElement('WebSiteUrl'))->appendChild($doc->createTextNode($this->webSiteUrl));
			}
			if ($this->logoUrl) {
				$root->appendChild($doc->createElement('LogoUrl'))->appendChild($doc->createTextNode($this->logoUrl));
			}
			if ($this->consortium) {
				$root->appendChild($doc->importNode($this->consortium->asDOMDocument()->documentElement, true));
			}
			if ($this->institutionalIdentifier) {
				foreach ($this->institutionalIdentifier as $id) {
					$root->appendChild($doc->importNode($id->asDOMDocument()->documentElement, true));
				}
			}
			foreach ($this->reportItems as $rep) {
				$root->appendChild($doc->importNode($rep->asDOMDocument()->documentElement, true));
			}
			return $doc;
		}
	}

	/**
	 * COUNTER consortium class
	 */
	class Consortium extends ReportBuilder {
		/* 
		 * @var string Consortium element "Code"
		 * @access private
		 */
		private $code;
		/* 
		 * @var string Consortium element "WellKnownName"
		 * @access private
		 */
		private $wellKnownName;

		/*  
		 * Construct the object
		 * @param string $wellKnownName
		 * @param string $code optional
		 */
		public function __construct($wellKnownName, $code = '') {
			foreach (array('wellKnownName', 'code') as $arg) {
				$this->$arg = $this->validateString($$arg);
			}
		}

		/**
		 * Construct the object from an array
		 * @param array $array Hash of key-values
		 * @return \self
		 * @throws Exception
		 */
		public static function build($array) {
			if (is_array($array)) {
				if (isset($array['WellKnownName'])) {
					// Nicely structured associative array
					return new self($array['WellKnownName'], $array['Code'] ? $array['Code'] : '');
				} elseif (count(array_keys($array)) == 1 && parent::isAssociative($array)) {
					// Loosely structured associative array (name => code)
					foreach ($array as $k => $v) {
						return new self($k, $v);
					}
				} elseif (count(array_keys($array)) == 1 && !parent::isAssociative($array)) {
					// Loosely array with a name
					return new self($array[0]);
				}
			} elseif (is_string($array)) {
				// Just a name
				return new self($array);
			}
			parent::build($array);
		}

		/**
		 * Output this object as a DOMDocument
		 * @return DOMDocument
		 */
		public function asDOMDocument() {
			$doc = new \DOMDocument();
			$root = $doc->appendChild($doc->createElement('Consortium'));
			if ($this->code) {
				$root->appendChild($doc->createElement('Code'))->appendChild($doc->createTextNode($this->code));
			}
			$root->appendChild($doc->createElement('WellKnownName'))->appendChild($doc->createTextNode($this->wellKnownName));
			return $doc;
		}
	}

	/**
	 * COUNTER report item class
	 */
	class ReportItems extends ReportBuilder {
		/* 
		 * @var COUNTER\ParentItem ReportItem element "ParentItem"
		 * @access private
		 */
		private $parentItem;
		/* 
		 * @var array zero or more COUNTER\Identifier elements
		 * @access private
		 */
		private $itemIdentifier;
		/* 
		 * @var array zero or more COUNTER\ItemContributor elements
		 * @access private
		 */
		private $itemContributor;
		/* 
		 * @var array zero or more COUNTER\ItemDate elements
		 * @access private
		 */
		private $itemDate;
		/* 
		 * @var array zero or more COUNTER\ItemAttribute elements
		 * @access private
		 */
		private $itemAttribute;
		/* 
		 * @var string ReportItem element "ItemPlatform"
		 * @access private
		 */
		private $itemPlatform;
		/* 
		 * @var string ReportItem element "ItemPublisher"
		 * @access private
		 */
		private $itemPublisher;
		/* 
		 * @var string ReportItem element "ItemName"
		 * @access private
		 */
		private $itemName;
		/* 
		 * @var COUNTER\ItemDataType ReportItem element "ItemData"
		 * @access private
		 */
		private $itemDataType;
		/* 
		 * @var array one or more COUNTER\Metric elements
		 * @access private
		 */
		private $itemPerformance;

		/**
		 * Construct the object
		 * @param string $itemPlatform
		 * @param string $itemName
		 * @param string $itemDataType
		 * @param array $itemPerformance COUNTER\Metric array
		 * @param object $parentItem optional COUNTER\ParentItem
		 * @param array $itemIdentifiers optional COUNTER\Identifier array
		 * @param array $itemContributors optional COUNTER\Contributor array
		 * @param array $itemDates optional COUNTER\Date array
		 * @param array $itemAttributes optional COUNTER\ItemAttribute array
		 * @param string $itemPublisher optional
		 * @return void
		 * @throws Exception
		 */
		public function __construct($itemPlatform, $itemName, $itemDataType, $itemPerformance, $parentItem = NULL, $itemIdentifiers = array(), $itemContributors = array(), $itemDates = array(), $itemAttributes = array(), $itemPublisher = '') {
			foreach (array('itemPlatform', 'itemPublisher', 'itemName', 'itemDataType') as $arg) {
				$this->$arg = $this->validateString($$arg);
			}
			if (!in_array($itemDataType, $this->getItemDataTypes())) {
				throw new \Exception('Invalid item data type: '.$itemDataType);
			}
			$this->itemPerformance = $this->validateOneOrMoreOf($itemPerformance, 'Metric');
			$this->parentItem = $this->validateZeroOrOneOf($parentItem, 'ParentItem');
			$this->itemIdentifier = $this->validateZeroOrMoreOf($itemIdentifiers, 'Identifier');
			$this->itemContributor = $this->validateZeroOrMoreOf($itemContributors, 'ItemContributor');
			$this->itemDate = $this->validateZeroOrMoreOf($itemDates, 'ItemDate');
			$this->itemAttribute = $this->validateZeroOrMoreOf($itemAttributes, 'ItemAttribute');
		}

		/**
		 * Construct the object from an array
		 * @param array $array Hash of key-values
		 * @return \self
		 * @throws Exception
		 */
		public static function build($array) {
			if (is_array($array)) {
				if (isset($array['ItemPlatform']) && isset($array['ItemName']) && isset($array['ItemDataType']) && isset($array['ItemPerformance'])) {
					// Nicely structured associative array
					$performance = parent::buildMultiple('COUNTER\Metric', $array['ItemPerformance']);
					$ids = parent::buildMultiple('COUNTER\Identifier', isset($array['ItemIdentifier']) ? $array['ItemIdentifier'] : array());
					$contributors = parent::buildMultiple('COUNTER\ItemContributor', isset($array['ItemContributor']) ? $array['ItemContributor'] : array());
					$dates = parent::buildMultiple('COUNTER\ItemDate', isset($array['ItemDate']) ? $array['ItemDate'] : array());
					$attributes = parent::buildMultiple('COUNTER\ItemAttribute', isset($array['ItemAttribute']) ? $array['ItemAttribute'] : array());
					return new self(
						$array['ItemPlatform'],
						$array['ItemName'],
						$array['ItemDataType'],
						$performance,
						isset($array['ParentItem']) ? ParentItem::build($array['ParentItem']) : NULL,
						$ids,
						$contributors,
						$dates,
						$attributes,
						isset($array['ItemPublisher']) ? $array['ItemPublisher'] : ''
					);
				}
			}
			parent::build($array);
		}

		/**
		 * Output this object as a DOMDocument
		 * @return DOMDocument
		 */
		public function asDOMDocument() {
			$doc = new \DOMDocument();
			$root = $doc->appendChild($doc->createElement('ReportItems'));
			if ($this->parentItem) {
				$root->appendChild($doc->importNode($this->parentItem->asDOMDocument()->documentElement, true));
			}
			if ($this->itemIdentifier) {
				foreach ($this->itemIdentifier as $id) {
					$root->appendChild($doc->importNode($id->asDOMDocument()->documentElement, true));
				}
			}
			if ($this->itemContributor) {
				foreach ($this->itemContributor as $contrib) {
					$root->appendChild($doc->importNode($contrib->asDOMDocument()->documentElement, true));
				}
			}
			if ($this->itemDate) {
				foreach ($this->itemDate as $date) {
					$root->appendChild($doc->importNode($date->asDOMDocument()->documentElement, true));
				}
			}
			if ($this->itemAttribute) {
				foreach ($this->itemAttribute as $attrib) {
					$root->appendChild($doc->importNode($attrib->asDOMDocument()->documentElement, true));
				}
			}
			$root->appendChild($doc->createElement('ItemPlatform'))->appendChild($doc->createTextNode($this->itemPlatform));
			if ($this->itemPublisher) {
				$root->appendChild($doc->createElement('ItemPublisher'))->appendChild($doc->createTextNode($this->itemPublisher));
			}
			$root->appendChild($doc->createElement('ItemName'))->appendChild($doc->createTextNode($this->itemName));
			$root->appendChild($doc->createElement('ItemDataType'))->appendChild($doc->createTextNode($this->itemDataType));
			foreach ($this->itemPerformance as $perf) {
				$root->appendChild($doc->importNode($perf->asDOMDocument()->documentElement, true));
			}
			return $doc;
		}
	}

	/**
	 * COUNTER parent item class
	 */
	class ParentItem extends ReportBuilder {
		/* 
		 * @var array zero or more COUNTER\Identifier elements
		 * @access private
		 */
		private $itemIdentifier;
		/* 
		 * @var array zero or more COUNTER\ItemContributor elements
		 * @access private
		 */
		private $itemContributor;
		/* 
		 * @var array zero or more COUNTER\ItemDate elements
		 * @access private
		 */
		private $itemDate;
		/* 
		 * @var array zero or more COUNTER\ItemAttribute elements
		 * @access private
		 */
		private $itemAttribute;
		/* 
		 * @var string ParentItem element "ItemPublisher"
		 * @access private
		 */
		private $itemPublisher;
		/* 
		 * @var string ParentItem element "ItemName"
		 * @access private
		 */
		private $itemName;
		/* 
		 * @var COUNTER\DataType ParentItem element "ItemDataType"
		 * @access private
		 */
		private $itemDataType;

		/**
		 * Construct the object
		 * @param string $itemName
		 * @param string $itemDataType
		 * @param array $itemIdentifiers optional COUNTER\Identifier array
		 * @param array $itemContributors optional COUNTER\ItemContributor array
		 * @param array $itemDates optional COUNTER\ItemDate array
		 * @param array $itemAttributes optional COUNTER\ItemAttribute array
		 * @param string $itemPublisher optional
		 * @return void
		 * @throws Exception
		 */
		public function __construct($itemName, $itemDataType, $itemIdentifiers = array(), $itemContributors = array(), $itemDates = array(), $itemAttributes = array(), $itemPublisher = '') {
			foreach (array('itemName', 'itemDataType', 'itemPublisher') as $arg) {
				$this->$arg = $this->validateString($$arg);
			}
			if (!in_array($itemDataType, $this->getItemDataTypes())) {
				throw new \Exception('Invalid type: '.$type);
			}
			$this->itemIdentifier = $this->validateZeroOrMoreOf($itemIdentifiers, 'Identifier');
			$this->itemContributor = $this->validateZeroOrMoreOf($itemContributors, 'ItemContributor');
			$this->itemDate = $this->validateZeroOrMoreOf($itemDates, 'ItemDate');
			$this->itemAttribute = $this->validateZeroOrMoreOf($itemAttributes, 'ItemAttribute');
		}

		/**
		 * Construct the object from an array
		 * @param array $array Hash of key-values
		 * @return \self
		 * @throws Exception
		 */
		public static function build($array) {
			if (is_array($array)) {
				if (isset($array['ItemName']) && isset($array['ItemDataType'])) {
					// Nicely structured associative array
					$ids = parent::buildMultiple('COUNTER\Identifier', isset($array['ItemIdentifier']) ? $array['ItemIdentifier']: array());
					$contributors = parent::buildMultiple('COUNTER\ItemContributor', isset($array['ItemContributor']) ? $array['ItemContributor'] : array());
					$dates = parent::buildMultiple('COUNTER\ItemDate', isset($array['ItemDate']) ? $array['ItemDate'] : array());
					$attributes = parent::buildMultiple('COUNTER\ItemAttribute', isset($array['ItemAttribute']) ? $array['ItemAttribute'] : array());
					return new self(
						$array['ItemName'],
						$array['ItemDataType'],
						$ids,
						$contributors,
						$dates,
						$attributes,
						isset($array['ItemPublisher']) ? $array['ItemPublisher'] : ''
					);
				}
			}
			parent::build($array);
		}

		/**
		 * Output this object as a DOMDocument
		 * @return DOMDocument
		 */
		public function asDOMDocument() {
			$doc = new \DOMDocument();
			$root = $doc->appendChild($doc->createElement('ParentItem'));
			if ($this->itemIdentifier) {
				foreach ($this->itemIdentifier as $id) {
					$root->appendChild($doc->importNode($id->asDOMDocument()->documentElement, true));
				}
			}
			if ($this->itemContributor) {
				foreach ($this->itemContributor as $contrib) {
					$root->appendChild($doc->importNode($contrib->asDOMDocument()->documentElement, true));
				}
			}
			if ($this->itemDate) {
				foreach ($this->itemDate as $date) {
					$root->appendChild($doc->importNode($date->asDOMDocument()->documentElement, true));
				}
			}
			if ($this->itemAttribute) {
				foreach ($this->itemAttribute as $attrib) {
					$root->appendChild($doc->importNode($attrib->asDOMDocument()->documentElement, true));
				}
			}
			if ($this->itemPublisher) {
				$root->appendChild($doc->createElement('ItemPublisher'))->appendChild($doc->createTextNode($this->itemPublisher));
			}
			$root->appendChild($doc->createElement('ItemName'))->appendChild($doc->createTextNode($this->itemName));
			$root->appendChild($doc->createElement('ItemDataType'))->appendChild($doc->createTextNode($this->itemDataType));
			return $doc;
		}
	}

	/**
	 * COUNTER item contributor class
	 */
	class ItemContributor extends ReportBuilder {
		/* 
		 * @var array zero or more COUNTER\ItemContributorID elements
		 * @access private
		 */
		private $itemContributorId;
		/* 
		 * @var string ItemContributor element "Name"
		 * @access private
		 */
		private $itemContributorName;
		/* 
		 * @var string ItemContributor element "Affiliation"
		 * @access private
		 */
		private $itemContributorAffiliation;
		/* 
		 * @var string ItemContributor element "Role"
		 * @access private
		 */
		private $itemContributorRole;

		/**
		 * Construct the object
		 * @param array $itemContributorIds optional COUNTER\ContributorId array
		 * @param string $itemContributorName optional 
		 * @param array itemContributorAffiliations optional string array
		 * @param array itemContributorRoles optional string array
		 * @return void
		 * @throws Exception
		 */
		public function __construct($itemContributorIds = array(), $itemContributorName = '', $itemContributorAffiliations = array(), $itemContributorRoles = array()) {
			$this->itemContributorId = $this->validateZeroOrMoreOf($itemContributorIds, 'ItemContributorId');
			$this->itemContributorName = $this->validateString($itemContributorName);
			$this->itemContributorAffiliation = $this->validateStrings($itemContributorAffiliations);
			$this->itemContributorRole = $this->validateStrings($itemContributorRoles);
		}

		/**
		 * Construct the object from an array
		 * @param array $array Hash of key-values
		 * @return \self
		 * @throws Exception
		 */
		public static function build($array) {
			if (is_array($array)) {
				if (isset($array['ItemContributorID']) || isset($array['ItemContributorName']) || isset($array['ItemContributorAffiliation']) || isset($array['ItemContributorRole'])) {
					// Nicely structured associative array
					$ids = parent::buildMultiple('COUNTER\ItemContributorId', isset($array['ItemContributorID']) ? $array['ItemContributorID'] : array());
					return new self(
						$ids,
						isset($array['ItemContributorName']) ? $array['ItemContributorName'] : '',
						isset($array['ItemContributorAffiliation']) ? $array['ItemContributorAffiliation'] : '',
						isset($array['ItemContributorRole']) ? $array['ItemContributorRole'] : ''
					);
				}
			}
			parent::build($array);
		}

		/**
		 * Output this object as a DOMDocument
		 * @return DOMDocument
		 */
		public function asDOMDocument() {
			$doc = new \DOMDocument();
			$root = $doc->appendChild($doc->createElement('ItemContributor'));
			if ($this->itemContributorId) {
				foreach ($this->itemContributorId as $id) {
					$root->appendChild($doc->importNode($id->asDOMDocument()->documentElement, true));
				}
			}
			if ($this->itemContributorName) {
				$root->appendChild($doc->createElement('ItemContributorName'))->appendChild($doc->createTextNode($this->itemContributorName));
			}
			if ($this->itemContributorAffiliation) {
				foreach ($this->itemContributorAffiliation as $affiliation) {
					$root->appendChild($doc->createElement('ItemContributorAffiliation', $affiliation));
				}
			}
			if ($this->itemContributorRole) {
				foreach ($this->itemContributorRole as $role) {
					$root->appendChild($doc->createElement('ItemContributorRole', $role));
				}
			}
			return $doc;
		}
	}

	/**
	 * COUNTER contributor id class
	 */
	class ItemContributorId extends ReportBuilder {
		/* 
		 * @var string ItemContributorID element "Type"
		 * @access private
		 */
		private $type;
		/* 
		 * @var string ItemContributorID element "Value"
		 * @access private
		 */
		private $value;

		/**
		 * Construct the object
		 * @param string $type
		 * @param string $value
		 * @return void
		 * @throws Exception
		 */
		public function __construct($type, $value) {
			foreach (array('type', 'value') as $arg) {
				$this->$arg = $this->validateString($$arg);
			}
			if (!in_array($type, $this->getContributorIdentifierTypes())) {
				throw new \Exception('Invalid type: '.$type);
			}
		}

		/**
		 * Construct the object from an array
		 * @param array $array Hash of key-values
		 * @return \self
		 * @throws Exception
		 */
		public static function build($array) {
			if (is_array($array)) {
				if (isset($array['Type']) && isset($array['Value'])) {
					// Nicely structured associative array
					return new self($array['Type'], $array['Value']);
				} elseif (count(array_keys($array)) == 1 && parent::isAssociative($array)) {
					// Loosely structured associative array (type => value)
					foreach ($array as $k => $v) {
						return new self($k, $v);
					}
				}
			}
			parent::build($array);
		}

		/**
		 * Output this object as a DOMDocument
		 * @return DOMDocument
		 */
		public function asDOMDocument() {
			$doc = new \DOMDocument();
			$root = $doc->appendChild($doc->createElement('ItemContributorID'));
			$root->appendChild($doc->createElement('Type'))->appendChild($doc->createTextNode($this->type));
			$root->appendChild($doc->createElement('Value'))->appendChild($doc->createTextNode($this->value));
			return $doc;
		}
	}

	/**
	 * COUNTER item identifier class
	 */
	class Identifier extends ReportBuilder {
		/* 
		 * @var string Identifier element "Type"
		 * @access private
		 */
		private $type;
		/* 
		 * @var string Identifier element "Type"
		 * @access private
		 */
		private $value;

		/**
		 * Construct the object
		 * @param string $type
		 * @param string $value
		 * @return void
		 * @throws Exception
		 */
		public function __construct($type, $value) {
			foreach (array('type', 'value') as $arg) {
				$this->$arg = $this->validateString($$arg);
			}
			if (!in_array($type, $this->getIdentifierTypes())) {
				throw new \Exception('Invalid type: '.$type);
			}
		}

		/**
		 * Construct the object from an array
		 * @param array $array Hash of key-values
		 * @return \self
		 * @throws Exception
		 */
		public static function build($array) {
			if (is_array($array)) {
				if (isset($array['Type']) && isset($array['Value'])) {
					// Nicely structured associative array
					return new self($array['Type'], $array['Value']);
				} elseif (count(array_keys($array)) == 1 && parent::isAssociative($array)) {
					// Loosely structured associative array (type => value)
					foreach ($array as $k => $v) {
						return new self($k, $v);
					}
				}
			}
			parent::build($array);
		}

		/**
		 * Output this object as a DOMDocument
		 * @return DOMDocument
		 */
		public function asDOMDocument() {
			$doc = new \DOMDocument();
			$root = $doc->appendChild($doc->createElement('ItemIdentifier'));
			$root->appendChild($doc->createElement('Type'))->appendChild($doc->createTextNode($this->type));
			$root->appendChild($doc->createElement('Value'))->appendChild($doc->createTextNode($this->value));
			return $doc;
		}
	}

	/**
	 * COUNTER item date class
	 */
	class ItemDate extends ReportBuilder{
		/* 
		 * @var string ItemDate element "Type"
		 * @access private
		 */
		private $type;
		/* 
		 * @var string ItemDate element "Value"
		 * @access private
		 */
		private $value;

		/**
		 * Construct the object
		 * @param string $type
		 * @param string $value
		 * @return void
		 * @throws Exception
		 */
		public function __construct($type, $value) {
			$this->type = $this->validateString($type);
			if (!in_array($type, $this->getDateTypes())) {
				throw new \Exception('Invalid type: '.$type);
			}
			$this->value = $this->validateOneOf($value, '\DateTime');
		}

		/**
		 * Construct the object from an array
		 * @param array $array Hash of key-values
		 * @return \self
		 * @throws Exception
		 */
		public static function build($array) {
			if (is_array($array)) {
				if (isset($array['Type']) && isset($array['Value'])) {
					// Nicely structured associative array
					return new self($array['Type'], $array['Value']);
				} elseif (count(array_keys($array)) == 1 && parent::isAssociative($array)) {
					// Loosely structured associative array (type => value)
					foreach ($array as $k => $v) {
						return new self($k, $v);
					}
				}
			}
			parent::build($array);
		}

		/**
		 * Output this object as a DOMDocument
		 * @return DOMDocument
		 */
		public function asDOMDocument() {
			$doc = new \DOMDocument();
			$root = $doc->appendChild($doc->createElement('ItemDate'));
			$root->appendChild($doc->createElement('Type'))->appendChild($doc->createTextNode($this->type));
			$root->appendChild($doc->createElement('Value'))->appendChild($doc->createTextNode(date_format($this->value, 'Y-m-d')));
			return $doc;
		}
	}

	/**
	 * COUNTER item attribute class
	 */
	class ItemAttribute extends ReportBuilder {
		/* 
		 * @var string ItemAttribute element "Type"
		 * @access private
		 */
		private $type;
		/* 
		 * @var string ItemAttribute element "Value"
		 * @access private
		 */
		private $value;

		/**
		 * Construct the object
		 * @param string $type
		 * @param string $value
		 * @return void
		 * @throws Exception
		 */
		public function __construct($type, $value) {
			foreach (array('type', 'value') as $arg) {
				$this->$arg = $this->validateString($$arg);
			}
			if (!in_array($type, $this->getAttributeTypes())) {
				throw new \Exception('Invalid type: '.$type);
			}
		}

		/**
		 * Construct the object from an array
		 * @param array $array Hash of key-values
		 * @return \self
		 * @throws Exception
		 */
		public static function build($array) {
			if (is_array($array)) {
				if (isset($array['Type']) && isset($array['Value'])) {
					// Nicely structured associative array
					return new self($array['Type'], $array['Value']);
				} elseif (count(array_keys($array)) == 1 && parent::isAssociative($array)) {
					// Loosely structured associative array (type => value)
					foreach ($array as $k => $v) {
						return new self($k, $v);
					}
				}
			}
			parent::build($array);
		}

		/**
		 * Output this object as a DOMDocument
		 * @return DOMDocument
		 */
		public function asDOMDocument() {
			$doc = new \DOMDocument();
			$root = $doc->appendChild($doc->createElement('ItemAttribute'));
			$root->appendChild($doc->createElement('Type'))->appendChild($doc->createTextNode($this->type));
			$root->appendChild($doc->createElement('Value'))->appendChild($doc->createTextNode($this->value));
			return $doc;
		}
	}

	/**
	 * COUNTER performance counter class
	 */
	class Metric extends ReportBuilder {
		/* 
		 * @var int Metric element "PubYr"
		 * @access private
		 */
		private $pubYr;
		/* 
		 * @var int Metric element "PubYrFrom"
		 * @access private
		 */
		private $pubYrFrom;
		/* 
		 * @var int Metric element "PubYrTo"
		 * @access private
		 */
		private $pubYrTo;
		/* 
		 * @var COUNTER\DateRange Metric element "Period"
		 * @access private
		 */
		private $period;
		/* 
		 * @var COUNTER\Category Metric element "Category"
		 * @access private
		 */
		private $category;
		/* 
		 * @var array one or more COUNTER\PerformanceCounter elements
		 * @access private
		 */
		private $instance;

		/**
		 * Construct the object
		 * @param array $period COUNTER\DateRange array
		 * @param array $category COUNTER\Category array
		 * @param array $instances COUNTER\PerformanceCounter array
		 * @param int pubYrFrom optional 
		 * @param int pubYrTo optional 
		 * @param int pubYr optional 
		 * @return void
		 * @throws Exception
		 */
		public function __construct($period, $category, $instances, $pubYrFrom = NULL, $pubYrTo = NULL, $pubYr = NULL) {
			$this->period = $this->validateOneOf($period, 'DateRange');
			$this->category = $this->validateString($category);
			if (!in_array($category, $this->getCategories())) {
				throw new \Exception('Invalid category: '.$category);
			}
			$this->instance = $this->validateOneOrMoreOf($instances, 'PerformanceCounter');
			if ($pubYrFrom) {
				$this->pubYrFrom = $this->validatePositiveInteger($pubYrFrom);
			}
			if ($pubYrTo) {
				$this->pubYrTo = $this->validatePositiveInteger($pubYrTo);
			}
			if ($pubYr) {
				$this->pubYr = $this->validatePositiveInteger($pubYr);
			}
		}

		/**
		 * Construct the object from an array
		 * @param array $array Hash of key-values
		 * @return \self
		 * @throws Exception
		 */
		public static function build($array) {
			if (is_array($array)) {
				if (isset($array['Period']) && isset($array['Instance']) && isset($array['Category'])) {
					// Nicely structured associative array
					$instances = parent::buildMultiple('COUNTER\PerformanceCounter', $array['Instance']);
					return new self(
						DateRange::build($array['Period']),
						$array['Category'],
						$instances,
						isset($array['PubYrFrom']) ? $array['PubYrFrom']: NULL,
						isset($array['PubYrTo']) ? $array['PubYrTo'] : NULL,
						isset($array['PubYr']) ? $array['PubYr'] : NULL
					);
				}
			}
			parent::build($array);
		}

		/**
		 * Output this object as a DOMDocument
		 * @return DOMDocument
		 */
		public function asDOMDocument() {
			$doc = new \DOMDocument();
			$root = $doc->appendChild($doc->createElement('ItemPerformance'));
			if ($this->period) {
				$root->appendChild($doc->importNode($this->period->asDOMDocument()->documentElement, true));
			}
			if ($this->category) {
				$root->appendChild($doc->createElement('Category'))->appendChild($doc->createTextNode($this->category));
			}
			foreach ($this->instance as $instance) {
				$root->appendChild($doc->importNode($instance->asDOMDocument()->documentElement, true));
			}
			foreach (array('pubYr', 'pubYrFrom', 'pubYrTo') as $pubYrKey) {
				if ($this->$pubYrKey) {
					$root->appendChild($doc->createElement(ucfirst($pubYrKey)))->appendChild($doc->createTextNode($this->$pubYrKey));
					$attr = $doc->createAttribute(ucfirst($pubYrKey));
					$attr->value = $this->$pubYrKey;
					$root->appendChild($attr);
				}
			}
			return $doc;
		}

		}

	/**
	 * COUNTER date range class
	 */
	class DateRange extends ReportBuilder {
		/* 
		 * @var \DateTime DateRange element "Begin"
		 * @access private
		 */
		private $begin;
		/* 
		 * @var \DateTime DateRange element "End"
		 * @access private
		 */
		private $end;

		/**
		 * Construct the object
		 * @param DateTime $begin
		 * @param DateTime $end
		 * @return void
		 * @throws Exception
		 */
		public function __construct($begin, $end) {
			$this->begin = $this->validateOneOf($begin, '\DateTime');
			$this->end = $this->validateOneOf($end, '\DateTime');
		}

		/**
		 * Construct the object from an array
		 * @param array $array Hash of key-values
		 * @return \self
		 * @throws Exception
		 */
		public static function build($array) {
			if (is_array($array)) {
				if (isset($array['Begin']) && isset($array['End'])) {
					// Nicely structured associative array
					return new self($array['Begin'], $array['End']);
				} elseif (count(array_keys($array)) == 2 && !parent::isAssociative($array)) {
					// Unstructured array of two elements, assume begin and end dates
					return new self($array[0], $array[1]);
				}
			}
			parent::build($array);
		}

		/**
		 * Output this object as a DOMDocument
		 * @return DOMDocument
		 */
		public function asDOMDocument() {
			$doc = new \DOMDocument();
			$root = $doc->appendChild($doc->createElement('Period'));
			$root->appendChild($doc->createElement('Begin'))->appendChild($doc->createTextNode(date_format($this->begin, 'Y-m-d')));
			$root->appendChild($doc->createElement('End'))->appendChild($doc->createTextNode(date_format($this->end, 'Y-m-d')));
			return $doc;
		}
	}

	/**
	 * COUNTER performance counter class
	 */
	class PerformanceCounter extends ReportBuilder {
		/* 
		 * @var COUNTER\MetricType PerformanceCounter element "MetricType"
		 * @access private
		 */
		private $metricType;
		/* 
		 * @var int PerformanceCounter element "Count"
		 * @access private
		 */
		private $count;

		/**
		 * Construct the object
		 * @param string $metricType
		 * @param integer $count
		 * @return void
		 * @throws Exception
		 */
		public function __construct($metricType, $count) {
			$this->metricType = $this->validateString($metricType);
			if (!in_array($metricType, $this->getMetricTypes())) {
				throw new \Exception('Invalid metric type: '.$metricType);
			}
			$this->count = $this->validatePositiveInteger($count);
		}

		/**
		 * Construct the object from an array
		 * @param array $array Hash of key-values
		 * @return \self
		 * @throws Exception
		 */
		public static function build($array) {
			if (is_array($array)) {
				if (isset($array['MetricType']) && isset($array['Count'])) {
					// Nicely structured associative array
					return new self($array['MetricType'], $array['Count']);
				} elseif (count(array_keys($array)) == 1 && parent::isAssociative($array)) {
					// Loosely structured associative array (type => count)
					foreach ($array as $k => $v) {
						return new self($k, $v);
					}
				}
			}
			parent::build($array);
		}

		/**
		 * Output this object as a DOMDocument
		 * @return DOMDocument
		 */
		public function asDOMDocument() {
			$doc = new \DOMDocument();
			$root = $doc->appendChild($doc->createElement('Instance'));
			$root->appendChild($doc->createElement('MetricType'))->appendChild($doc->createTextNode($this->metricType));
			$root->appendChild($doc->createElement('Count'))->appendChild($doc->createTextNode($this->count));
			return $doc;
		}
	}

}
