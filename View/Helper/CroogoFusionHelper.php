<?php

App::uses('AppHelper', 'View/Helper');

/**
 

 */
class CroogoFusionHelper extends AppHelper {

/**
 * Other helpers used by this helper
 *
 * @var array
 * @access public
 */
	public $helpers = array(
		'Html',
		'Form',
		'Session',
		'Js',
//		'Croogo.Layout',
	);

/**
 * Current Node
 *
 * @var array
 * @access public
 */
	public $node = null;

/**
 * constructor
 */
	public function __construct(View $view, $settings = array()) {
		parent::__construct($view);

	}


	public function datepicker ($id,$options = array(),$jsoptions = array()) {
	

//		var_dump($options);
		$this->Html->css("/CroogoFusion/css/web/ej.widgets.core.min",  array("inline"=>false));
		$this->Html->css("/CroogoFusion/css/web/default-theme/ej.datepicker",  array("inline"=>false));
	//	
		$this->Html->script(array("/CroogoFusion/js/jquery.globalize.min"), array("inline"=>false));
		$this->Html->script(array("/CroogoFusion/js/jquery.easing.1.3.min"), array("inline"=>false));
	//	$this->Html->script(array("/CroogoFusion/js/web/ej.datepicker.min"), array("inline"=>false));
		$this->Html->script(array("/CroogoFusion/js/web/ej.web.all.min"), array("inline"=>false));

	//	$this->Html->script(array("/CroogoFusion/js/ej.widget.all.min"), array("inline"=>false));


		$options = Hash::merge(array(
			'class'=>'datepicker',
			'type'=>'text',
			),$options
		);

		$jsoptions = Hash::merge(array(
	//		'value'=> "jQuery('#".$this->genId($id)."').val()",
			),$jsoptions
		);
//debug(Inflector::classify($this->params['controller']));
//var_dump($this->model());
		$output=$this->Form->input($id,$options);
	//	$jsoptions['value']=$options['value'];

	//	var_dump(json_encode($jsoptions,JSON_FORCE_OBJECT));
	
		$output.=$this->Html->scriptBlock("$(function(){
			var data ='".json_encode($jsoptions)."';
			var jsonobject=JSON.parse(data);
		
			jsonobject.value=$('#".$this->genId($id)."').val();
			$('#".$this->genId($id)."').ejDatePicker(jsonobject);

	});", array("inline"=>false));
		
		return $output;
	}


	private function genId( $id ) {
		return Inflector::classify($this->params['controller']).Inflector::camelize($id);
	}

}
