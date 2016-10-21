<?php
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
			
		),
		'datepicker' => array(
			'title' => 'DatePicker',
			'url' =>  array(
				'admin' => true,
				'plugin' => 'croogo_fusion',
				'controller' => 'demos',
				'action' => 'datepicker'
				),
			
		),
		'datetimepicker' => array(
			'title' => 'DateTimePicker',
			'url' =>  array(
				'admin' => true,
				'plugin' => 'croogo_fusion',
				'controller' => 'demos',
				'action' => 'datetimepicker'
				),
			
		),
		'slider' => array(
			'title' => 'Slider',
			'url' =>  array(
				'admin' => true,
				'plugin' => 'croogo_fusion',
				'controller' => 'demos',
				'action' => 'slider'
				),
		),
		'listbox' => array(
			'title' => 'List Box',
			'url' =>  array(
				'admin' => true,
				'plugin' => 'croogo_fusion',
				'controller' => 'demos',
				'action' => 'listbox'
				),
		)


		)

	));

?>