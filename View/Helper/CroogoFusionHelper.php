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

	private $themefusion = "default-theme";
	private $function = null;


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

	private function styleSet($options) {
		if (array_key_exists("theme", $options)) {
			$this->themefusion=$options['theme'];
		}
		$this->Html->css("/CroogoFusion/css/web/".$this->themefusion."/ej.widgets.all.min",  array("inline"=>false));
	}

	private function javascriptSet($options) {
		$this->Html->script(array("/CroogoFusion/js/jquery.globalize.min"), array("inline"=>false));
		$this->Html->script(array("/CroogoFusion/js/jquery.easing.1.3.min"), array("inline"=>false));
	//	$this->Html->script(array("/CroogoFusion/js/web/ej.common.all.min"), array("inline"=>false));
		$this->Html->script(array("/CroogoFusion/js/web/ej.web.all.min"), array("inline"=>false));		
		}

public function textbox ($id,$options = array(),$jsoptions = array()) {
		
	//	var_dump($this->request->data);
	//	var_dump($this->request->data[$this->Form->defaultModel][$id]);
	//	var_dump($this->Form->defaultModel);

		$this->styleSet($options);
		$this->javascriptSet($options);


		if (isset($jsoptions['name'])) {
		
		switch(strtolower($jsoptions['name'])) {

			case "numeric":
			$this->function = "ejNumericTextbox";
			break;
			case "percentage":
			$this->function = "ejPercentageTextbox";
			break;
			case "currency":
			$this->function = "ejCurrencyTextbox";
			break;
			case "mask":
			$this->function = "ejMaskEdit";
			break;
			}
		}
$value="\"\"";
if (isset($options['value'])){
	$value=$options['value'];
}
if (isset($this->request->data[$this->Form->defaultModel][$id])){
	$value=$this->request->data[$this->Form->defaultModel][$id];
}
 $options['type']="text";
		$output=$this->Form->input($id,$options);

//.json_encode($jsoptions,JSON_FORCE_OBJECT)
		$output.=$this->Html->scriptBlock("$(document).ready(function(){
		
			$('#".$this->genId($id)."').".$this->function."( {value:".

				$value.
			   ",name:\"".$jsoptions['name']."\"".
				"});

	});", array("inline"=>false));
		
		return $output;
		//.Debugger::dump($this);;

}


	public function datepicker ($id,$options = array(),$jsoptions = array()) {
	
		$this->themeSet($options);
		$this->javascriptSet($options);

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
		
			jsonobject.value=$('#".$this->domId($options)."').val();
			$('#".$this->genId($id)."').ejDatePicker(jsonobject);

	});", array("inline"=>false));
		
		return $output;
	}


/*
*  schedule
*
*/

public function schedule ($id,$options = array(),$jsoptions = array()) {
		
		$this->styleSet($options);
		$this->javascriptSet($options);

$this->function="ejSchedule";
$this->Html->script(array("/CroogoFusion/js/jsrender.min"), array("inline"=>false));
		
		$output='<div id="'.$this->genId($id).'"></div>';

		$output.=$this->Html->scriptBlock("$(document).ready(function(){
			".array_key_exists('jscript', $jsoptions)?$jsoptions['jscript']:null."
		//var dManager = ej.DataManager(window.Default).executeLocal(ej.Query().take(10));
			$('#".$this->genId($id)."').".$this->function."(
			".array_key_exists('jsobject', $jsoptions)?$jsoptions['jsobject']:null.");

	});", array("inline"=>false));
		//json_encode($jsoptions,JSON_FORCE_OBJECT)
		return $output;
		//.Debugger::dump($this);;

}



	private function genId( $id ) {
		return Inflector::classify($this->params['controller']).Inflector::camelize($id);
	}

	



}

