<h1><?php echo __('Date Time Picker Demo'); ?></h1>

<?php

echo $this->Form->create('Demo');

echo $this->CroogoFusion->datetimepicker(
				'mydate',

				array('value'=>'2015-08-08 22:22'),
				array(

					'jscript'=> '',
					'jsobject'=> "{
					width: '180px',
					locale: 'it-IT',
					dateTimeFormat: 'yyyy-MM-dd HH:mm'
					}"
					)
				);
?>
<pre>
echo $this->CroogoFusion->datetimepicker(
				'mydate',

				array('value'=>'2015-08-08 22:22'),
				array(

					'jscript'=> '',
					'jsobject'=> "{
					width: '180px',
					locale:'it-IT',
					dateTimeFormat: 'yyyy-MM-dd HH:mm'
					} 
					"
					)
				);
</pre>

<?php

echo $this->Form->end();

?>
