<?php
Croogo::hookHelper('*', 'CroogoFusion.CroogoFusion');

/**
 * Admin menu (navigation)
 */
CroogoNav::add('SyncFusion', array(
	'icon' => array('envelope', 'large'),
	'title' => 'SyncFusion',
	'url' => '#',
	'weight'=>'0',
	'children' => array(

		'textboxes' => array(
			'title' => 'Textboxes',
			'url' =>  array(
				'admin' => true,
				'plugin' => 'croogo_fusion',
				'controller' => 'demos',
				'action' => 'textboxes'
				),
			
		),
		'schedule' => array(
			'title' => 'Schedule',
			'url' =>  array(
				'admin' => true,
				'plugin' => 'croogo_fusion',
				'controller' => 'demos',
				'action' => 'schedule'
				),
			
		)
		)

	));