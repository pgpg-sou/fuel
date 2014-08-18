<?php
/**
 * Use this file to override global defaults.
 *
 * See the individual environment DB configs for specific config information.
 */

return array(

	'default' => array(
                'type'        => 'mysql',
                'connection'  => array(
                        'hostname' => 'localhost',
                        'port' => '8889',
                        'database' => 'fuel_dev',
                        'username' => 'root',
                        'password' => 'root',
                        'persistent' => false,
                ),
                'identifier'   => '`',
                'table_prefix' => '',
                'charset'      => 'utf8',
                'caching'      => false,
                'profiling'    => false,
    ),

);
