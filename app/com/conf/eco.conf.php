<?php
/**
 * Eco is a PHP Framework for PHP 5.5+
 *
 * @package Eco
 * @copyright 2015-2017 Shay Anderson <http://www.shayanderson.com>
 * @license MIT License <https://github.com/shayanderson/eco/blob/master/LICENSE>
 * @link <https://github.com/shayanderson/eco>
 */

/**
 * Eco configuration settings
 */
return [
	'__eco__' => [

		/**
		 * Database settings
		 */
		'database' => [

			/**
			 * Database connections
			 */
			'connection' => [

				/**
				 * Default connection
				 */
				1 => [

					/**
					 * Database host
					 */
					'host' => 'localhost',

					/**
					 * Database name
					 */
					'database' => '',

					/**
					 * Database user
					 */
					'user' => '',

					/**
					 * Database password
					 */
					'password' => '',

					/**
					 * Enable query logging (unset or set false to disable)
					 */
					'log' => true
				]
			],

			/**
			 * Makes fetch queries memory safe (appends LIMIT clause if does not exist)
			 * use 0 (zero) for no limit (default: 10000)
			 */
			'global_limit' => 10000,

			/**
			 * Global database pagination settings
			 */
			'pagination' => [

				/**
				 * Records per page (default: 30)
				 */
				'rpp' => 30,

				/**
				 * Page settings
				 */
				'page' => [

					/**
					 * Encode page number in query string (default: true)
					 */
					'encode' => true,

					/**
					 * GET parameter name for current page number (default: 'pg')
					 */
					'get_var' => 'pg',

					/**
					 * Show page range count, 0 (zero) for no page range (default: 5)
					 */
					'range_count' => 5,
				],

				/**
				 * Markup wrappers
				 */
				'wrapper' => [

					/**
					 * Pagination group wrapper (default: '<div>{$group}</div>')
					 */
					'group' => '<div>{$group}</div>',

					/**
					 * Next page wrapper (default: '<a href="{$uri}">Next</a>')
					 */
					'next' => '<a href="{$uri}">Next</a>',

					/**
					 * Previous page wrapper (default: '<a href="{$uri}">Previous</a>')
					 */
					'prev' => '<a href="{$uri}">Previous</a>',

					/**
					 * Range page number wrapper (default: '<a href="{$uri}">{$page}</a>')
					 */
					'range' => '<a href="{$uri}">{$page}</a>',

					/**
					 * Active range page number wrapper (default: '{$page}')
					 */
					'range_active' => '{$page}'
				]
			]
		],

		/**
		 * Log settings
		 */
		'log' => [

			/**
			 * Sets what errors are logged (default: 2)
			 *	1 - only server errors are logged (500 errors)
			 *	2 - all errors are logged (403, 404, 500)
			 *	3 - no errors are logged
			 */
			'error_level' => 2,

			/**
			 * Sets what errors are sent to local system log writer (default: 1)
			 *	1 - only server errors are logged (500 errors)
			 *	2 - all errors are logged (403, 404, 500)
			 *	3 - no errors are logged
			 */
			'error_write_level' => 1,

			/**
			 * Set what level of log messages are logged (default: 4)
			 *	1 - error (error messages)
			 *	2 - warning (warnings and above)
			 *	3 - notice (notices and above)
			 *	4 - debug (all messages)
			 *	5 - none (no messages)
			 */
			'level' => 4
		],

		/**
		 * Path settings
		 */
		'path' => [

			/**
			 * Path where controller files are loaded from (default: PATH_MODULE)
			 */
			'controller' => PATH_MODULE,

			/**
			 * Path where view template files are loaded from (default: PATH_TEMPLATE)
			 */
			'template' => PATH_TEMPLATE
		],

		/**
		 * Request settings
		 */
		'request' => [

			/**
			 * Auto sanitize request params GET and POST (default: true)
			 */
			'sanitize_params' => true
		]
	]
];