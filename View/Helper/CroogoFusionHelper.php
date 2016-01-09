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

	private function javascriptSet($js) {

		/*
		* Base Javascripts
		*/ 

		$js = Hash::merge(array(
				"/CroogoFusion/js/jquery.globalize.min.js",
				"/CroogoFusion/js/cultures/globalize.culture.it-IT.js",
				"/CroogoFusion/js/common/ej.core.min.js"
				)
				,$js
			);
		$this->Html->script($js, array("inline"=>false));
		}


public function numeric ($id,$options = array(),$jsoptions = array()) {
		
		$this->styleSet($options);

		$this->function = "ejNumericTextbox";
		$js = array("/CroogoFusion/js/web/ej.editor.min.js");

		$this->javascriptSet($js);


		$output=$this->Form->input($id,$options);


		$script ="$(document).ready(function(){";
		$script.=array_key_exists('jscript', $jsoptions)?$jsoptions['jscript']:null;
		$script.="$('#".$this->genId($id)."').".$this->function."(";
		$script.=array_key_exists('jsobject', $jsoptions)?$jsoptions['jsobject']:null;
		$script.=");});";


		$output.=$this->Html->scriptBlock($script, array("inline"=>false));
		
		return $output;
}


public function percent ($id,$options = array(),$jsoptions = array()) {
		
		$this->styleSet($options);

		$this->function = "ejPercentageTextbox";
		$js = array("/CroogoFusion/js/web/ej.editor.min.js");

		$this->javascriptSet($js);


		$output=$this->Form->input($id,$options);


		$script ="$(document).ready(function(){";
		$script.=array_key_exists('jscript', $jsoptions)?$jsoptions['jscript']:null;
		$script.="$('#".$this->genId($id)."').".$this->function."(";
		$script.=array_key_exists('jsobject', $jsoptions)?$jsoptions['jsobject']:null;
		$script.=");});";


		$output.=$this->Html->scriptBlock($script, array("inline"=>false));
		
		return $output;
}

public function currency ($id,$options = array(),$jsoptions = array()) {
		
		$this->styleSet($options);

		$this->function = "ejMaskEdit";
		$js = array("/CroogoFusion/js/web/ej.editor.min.js");

		$this->javascriptSet($js);


		$output=$this->Form->input($id,$options);


		$script ="$(document).ready(function(){";
		$script.=array_key_exists('jscript', $jsoptions)?$jsoptions['jscript']:null;
		$script.="$('#".$this->genId($id)."').".$this->function."(";
		$script.=array_key_exists('jsobject', $jsoptions)?$jsoptions['jsobject']:null;
		$script.=");});";


		$output.=$this->Html->scriptBlock($script, array("inline"=>false));
		
		return $output;
}

public function mask ($id,$options = array(),$jsoptions = array()) {
		
		$this->styleSet($options);

		$this->function = "ejMaskEdit";
		$js = array("/CroogoFusion/js/web/ej.maskedit.min.js");

		$this->javascriptSet($js);


		$output=$this->Form->input($id,$options);


		$script ="$(document).ready(function(){";
		$script.=array_key_exists('jscript', $jsoptions)?$jsoptions['jscript']:null;
		$script.="$('#".$this->genId($id)."').".$this->function."(";
		$script.=array_key_exists('jsobject', $jsoptions)?$jsoptions['jsobject']:null;
		$script.=");});";


		$output.=$this->Html->scriptBlock($script, array("inline"=>false));
		
		return $output;
}


/*
* AutoComplete
*/ 

	public function autocomplete ($id,$options = array(),$jsoptions = array()) {

		$this->function = "ejAutocomplete";

		$this->styleSet($options);

		$js = array(
			"/CroogoFusion/js/common/ej.data.min.js",
			"/CroogoFusion/js/web/ej.autocomplete.min.js",
			);

		$this->log(print_r($this->data,true));
		$this->javascriptSet($js);


		$options = Hash::merge(array(
			'class'=>'autocomplete',
			'type'=>'text',
			),$options
		);
		
		$output=$this->Form->input($id,$options);

		$script ="$(document).ready(function(){";
		$script.=array_key_exists('jscript', $jsoptions)?$jsoptions['jscript']:null;
		$script.="$('#".$this->genId($id)."').".$this->function."(";
		$script.=array_key_exists('jsobject', $jsoptions)?$jsoptions['jsobject']:null;
		$script.=");});";

		$output.=$this->Html->scriptBlock($script, array("inline"=>false));

		return $output;
	}
/*
* ColorPicker
*/ 

	public function colorpicker ($id,$options = array(),$jsoptions = array()) {
	
		$this->styleSet($options);

		$js = array(
			"/CroogoFusion/js/web/ej.button.min.js",
			"/CroogoFusion/js/web/ej.splitbutton.min.js",
			"/CroogoFusion/js/web/ej.menu.min.js",
			"/CroogoFusion/js/web/ej.slider.min.js",
			"/CroogoFusion/js/web/ej.colorpicker.min.js"
			);

		$this->javascriptSet($js);


		$options = Hash::merge(array(
			'class'=>'autocomplete',
			'type'=>'text',
			),$options
		);

if (isset($this->data[Inflector::classify( $this->params['controller'])][$id])){
$options['value'] = $this->data[Inflector::classify( $this->params['controller'])][$id];
}
		$jsoptions = Hash::merge(array(
	//		'value'=> "jQuery('#".$this->genId($id)."').val()",
			),$jsoptions
		);

		$output=$this->Form->input($id,$options);

		$js = '$(function(){$("#';
		$js .=$this->genId($id);
		$js .='").ejColorPicker(';

        if (array_key_exists("value",$options)) { 
        	$js.="{ value: '".$options['value']."'}";
    	};

        $js.=");";
        $js.="});";

		$output.=$this->Html->scriptBlock($js, array("inline"=>false));
		
		return $output;
	}



	public function datepicker ($id,$options = array(),$jsoptions = array()) {
	
		$this->styleSet($options);
		

		$js = array(
			"/CroogoFusion/js/web/ej.datepicker.min.js"
			);

		$this->javascriptSet($js);

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
	
		//var_dump($options);

		$output.=$this->Html->scriptBlock("$(function(){
			var data ='".json_encode($jsoptions)."';
			var jsonobject=JSON.parse(data);
		
			jsonobject.value=$('#".$this->genId($id)."').val();
			$('#".$this->genId($id)."').ejDatePicker(jsonobject);

	});", array("inline"=>false));
		
		return $output;
	}

	public function datetimepicker ($id,$options = array(),$jsoptions = array()) {
	
		$this->styleSet($options);
		
		$js = array(
			"/CroogoFusion/js/common/ej.scroller.min.js",
			"/CroogoFusion/js/web/ej.datepicker.min.js",
			"/CroogoFusion/js/web/ej.timepicker.min.js",
			"/CroogoFusion/js/web/ej.datetimepicker.min.js"
			);

		$this->javascriptSet($js);
		$this->function="ejDateTimePicker";

		$options = Hash::merge(array(
			'class'=>'datetimepicker',
			'type'=>'text',
			),$options
		);

		$output=$this->Form->input($id,$options);

		$script ="$(document).ready(function(){";
		$script.=array_key_exists('jscript', $jsoptions)?$jsoptions['jscript']:null;
		$script.="$('#".$this->genId($id)."').".$this->function."(";
		$script.=array_key_exists('jsobject', $jsoptions)?$jsoptions['jsobject']:null;
		$script.=");});";

$output.=$this->Html->scriptBlock($script, array("inline"=>false));

		return $output;
	}

	public function timepicker ($id,$options = array(),$jsoptions = array()) {

		$this->styleSet($options);
		
		$js = array(
			"/CroogoFusion/js/common/ej.scroller.min.js",
			"/CroogoFusion/js/web/ej.timepicker.min.js",
			"/CroogoFusion/js/web/ej.datetimepicker.min.js"
		);

		$this->javascriptSet($js);
		$this->function="ejTimePicker";

		$options = Hash::merge(array(
			'class'=>'timepicker',
			'type'=>'text',
			),$options
		);

		$output=$this->Form->input($id,$options);

		$script ="$(document).ready(function(){";
		$script.=array_key_exists('jscript', $jsoptions)?$jsoptions['jscript']:null;
		$script.="$('#".$this->genId($id)."').".$this->function."(";
		$script.=array_key_exists('jsobject', $jsoptions)?$jsoptions['jsobject']:null;
		$script.=");});";

		$output.=$this->Html->scriptBlock($script, array("inline"=>false));

		return $output;
	}


/*
*
*/

	public function slider ($id,$options = array(),$jsoptions = array()) {

		$this->styleSet($options);
		
		$js = array(
			"/CroogoFusion/js/web/ej.slider.min.js",
		);

		$this->javascriptSet($js);
		$this->function="ejSlider";

		$options = Hash::merge(array(
			'class'=>'ejslider',
			'style'=>'display:none;',
			'type'=>'text',
			),$options
		);

		$output=$this->Form->input($id,$options).'<div class="wrapper"><div id="'.$this->genId($id).'-sl"></div></div>';

		$script ="$(document).ready(function(){";
		$script.=array_key_exists('jscript', $jsoptions)?$jsoptions['jscript']:null;
		$script.="$('#".$this->genId($id)."-sl').".$this->function."(";
		$script.=array_key_exists('jsobject', $jsoptions)?$jsoptions['jsobject']:null;
		$script.=");});";
		$script.="function onchange(args) { $('#".$this->genId($id)."').val(args.value);}";

		$output.=$this->Html->scriptBlock($script, array("inline"=>false));

		return $output;
	}



/*
* Rich text editor
*/

public function RichTextEditor ($id,$options = array(),$jsoptions = array()) {
	
	$this->function = "ejRTE";
	$this->styleSet($options);

	$js = array(
			"/CroogoFusion/js/common/ej.scroller.min.js",
			"/CroogoFusion/js/common/ej.draggable.min.js",
			"/CroogoFusion/js/common/ej.data.min.js",
			"/CroogoFusion/js/web/ej.rte.min.js",
			"/CroogoFusion/js/web/ej.button.min.js",
			"/CroogoFusion/js/web/ej.togglebutton.min.js",
			"/CroogoFusion/js/web/ej.colorpicker.min.js",
			"/CroogoFusion/js/web/ej.slider.min.js",
			"/CroogoFusion/js/web/ej.splitbutton.min.js",
			"/CroogoFusion/js/web/ej.checkbox.min.js",
			"/CroogoFusion/js/web/ej.radiobutton.min.js",
			"/CroogoFusion/js/web/ej.dropdownlist.min.js",
			"/CroogoFusion/js/web/ej.dialog.min.js",
			"/CroogoFusion/js/web/ej.toolbar.min.js",
			"/CroogoFusion/js/web/ej.editor.min.js",
			"/CroogoFusion/js/web/ej.menu.min.js",
			"/CroogoFusion/js/web/ej.tab.min.js",
			"/CroogoFusion/js/web/ej.treeview.min.js",
			"/CroogoFusion/js/web/ej.waitingpopup.min.js",
			"/CroogoFusion/js/web/ej.uploadbox.min.js",
			"/CroogoFusion/js/web/ej.splitter.min.js",
			"/CroogoFusion/js/web/ej.fileexplorer.min.js",
			"/CroogoFusion/js/web/ej.grid.min.js",
//			"/CroogoFusion/js/web/ej.grid.common.min.js",
//			"/CroogoFusion/js/web/ej.grid.edit.min.js",
//			"/CroogoFusion/js/web/ej.grid.filter.min.js",
//			"/CroogoFusion/js/web/ej.grid.selection.min.js",
//			"/CroogoFusion/js/web/ej.grid.sort.min.js",
			);

		$this->javascriptSet($js);

		$options = Hash::merge(array(
			'class'=>'rte',
			'type'=>'textarea',
			),$options
		);

		$output=$this->Form->input($id,$options);

		$script ="$(document).ready(function(){";
		$script.=array_key_exists('jscript', $jsoptions)?$jsoptions['jscript']:null;
		$script.="$('#".$this->genId($id)."').".$this->function."(";
		$script.=array_key_exists('jsobject', $jsoptions)?$jsoptions['jsobject']:null;
		$script.=");});";

$output.=$this->Html->scriptBlock($script, array("inline"=>false));

		return $output;
	}
/*
*  schedule
*
*/

public function schedule ($id,$options = array(),$jsoptions = array()) {

		$this->styleSet($options);
		//$this->Html->script(array("/CroogoFusion/js/locale/ejSchedule.locale.it-IT"), array("inline"=>false));
		
		$js = array(
			"/CroogoFusion/js/common/ej.scroller.min.js",
			"/CroogoFusion/js/common/ej.draggable.min.js",
			"/CroogoFusion/js/common/ej.data.min.js",
			"/CroogoFusion/js/web/ej.autocomplete.min.js",
			"/CroogoFusion/js/web/ej.button.min.js",
			"/CroogoFusion/js/web/ej.radiobutton.min.js",
			"/CroogoFusion/js/web/ej.checkbox.min.js",
			"/CroogoFusion/js/web/ej.editor.min.js",
			"/CroogoFusion/js/web/ej.dialog.min.js",
			"/CroogoFusion/js/web/ej.dropdownlist.min.js",
			"/CroogoFusion/js/web/ej.datepicker.min.js",
			"/CroogoFusion/js/web/ej.timepicker.min.js",
			"/CroogoFusion/js/web/ej.datetimepicker.min.js",
			"/CroogoFusion/js/web/ej.schedule.min.js",
			"/CroogoFusion/js/locale/ej.schedule.locale.it-IT.js"
			);

		$this->javascriptSet($js);

		$this->function="ejSchedule";

		$this->Html->script(array("/CroogoFusion/js/jsrender.min"), array("inline"=>false));
		
		$output='<div id="'.$this->genId($id).'"></div>';

		$output.='<script type="text/javascript">';
		$output.="$(document).ready(function(){";
		$output.=array_key_exists('jscript', $jsoptions)?$jsoptions['jscript']:null;
		$output.="$('#".$this->genId($id)."').".$this->function."(";
		$output.=array_key_exists('jsobject', $jsoptions)?$jsoptions['jsobject']:null;
		$output.=");});";
		$output.= '</script>';
		
		return $output;
}



	private function genId( $id ) {
		return Inflector::classify($this->params['controller']).Inflector::camelize($id);
	}

	



}

