<h1><?php echo __('TextBoxes Demo'); ?></h1>

<?php

echo $this->Form->create('Demo');

echo $this->CroogoFusion->textbox(
				'numeric',
				array("value"=>35),
				array(
					"name"=>"numeric",
					
					"minValue"=>0
					)
				);
?>
<pre>
echo $this->CroogoFusion->textbox(
				'numeric',
				array("value"=>35),
				array(
					"name"=>"numeric",
					
					"minValue"=>0
					)
				);
</pre>
<?php
echo $this->CroogoFusion->textbox(
				'percent',
				array("value"=>3),
				array(
					"name"=>"percentage",
					
					"minValue"=>0
					)
				);
?>
<pre>
echo $this->CroogoFusion->textbox(
				'percentage',
				array(),
				array(
					"name"=>"percent",
					"value"=>3,
					"minValue"=>0
					)
				);
</pre>
<?php
echo $this->CroogoFusion->textbox(
				'currency',
				array("value"=>555),
				array(
					"name"=>"currency"
					
					)
				);
?>
<pre>
echo $this->CroogoFusion->textbox(
				'currency',
				array(),
				array(
					"name"=>"currency",
					"value"=>555
					
					)
				);
</pre>
<?php
echo $this->CroogoFusion->textbox(
				'mask',
				array(),
				array(
					"name"=>"mask",
					"inputMode" => "ej.InputMode.Text",
                    "maskFormat" => "99-999-99999"
					)
				);
?>
<pre>
echo $this->CroogoFusion->textbox(
				'mask',
				array(),
				array(
					"name"=>"mask",
					"inputMode" => "ej.InputMode.Text",
                    "maskFormat" => "99-999-99999"
					)
				);
</pre>

<?php

echo $this->Form->end();

?>
