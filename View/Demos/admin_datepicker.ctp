<h1><?php echo __('Date Picker Demo'); ?></h1>

<?php

echo $this->Form->create('Demo');

echo $this->CroogoFusion->datepicker(
				'mydate',

				array('value'=>'2015-07-08'),
				array(
					'dateFormat'=> 'yyyy-MM-dd'
					)
				);
?>
<pre>
echo $this->CroogoFusion->datetimepicker(
				'mydate',

				array(),
				array(
					
					)
				);
</pre>

<?php

echo $this->Form->end();

?>
