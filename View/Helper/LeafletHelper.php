<?php

App::uses('AppHelper', 'View/Helper');

/**
 

 */
class LeafletHelper extends AppHelper {

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
	);

/**
 * constructor
 */
	public function __construct(View $view, $settings = array()) {
		parent::__construct($view);

	}



public function pointChooser ($idlat,$idlon,$options = array(),$jsoptions = array()) {
		

		$this->Html->css("/CroogoFusion/css/leaflet",  array("inline"=>false));
		$this->Html->script(array("/CroogoFusion/js/leaflet"), array("inline"=>false));


		$output =$this->Form->input($idlat,$options);
		$output.=$this->Form->input($idlon,$options);
		$output.="<div id=\"".$this->genId($idlat)."-map\" style=\"height:180px\"></div>";


		$this->Html->scriptBlock("$(document).ready(function(){
			var map = L.map('".$this->genId($idlat)."-map')
						.setView([51.505, -0.09], 13);

			L.tileLayer('http://tile.mtbmap.cz/mtbmap_tiles/{z}/{x}/{y}.png', {
							attribution: '&copy; <a href=\"http://www.openstreetmap.org/copyright\">OpenStreetMap</a> &amp; USGS'
						}).addTo(map);
		});", array("inline"=>false));
		
		return $output;
		//.Debugger::dump($this);;

}




	private function genId( $id ) {
		return Inflector::classify($this->params['controller']).Inflector::camelize($id);
	}

	



}

