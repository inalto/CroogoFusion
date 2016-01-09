<h1><?php echo __('TextBoxes Demo'); ?></h1>

<?php

echo $this->Form->create('Demo');

echo $this->CroogoFusion->slider(
				'slider',

				array(),
				array(
					'jsobject'=>'{
                height: 16,
                value: 100000,
                minValue: 10000,
                maxValue: 1000000,
                incrementStep: 10,
                change: "onchange",
                slide: "onchange"}')
				);
?>
<pre>
echo $this->CroogoFusion->slider(
				'slider',

				array(),
				array(
					'jsobject'=>'{
                height: 16,
                value: loanvalue,
                minValue: 10000,
                maxValue: 1000000,
                incrementStep: 10,
                change: "onchange",
                slide: "onchange"}')
				);
</pre>

<?php

echo $this->Form->end();

?>
