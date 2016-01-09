<h1><?php echo __('TextBoxes Demo'); ?></h1>

<?php

echo $this->Form->create('Demo');

echo $this->CroogoFusion->numeric(
				'numeric',

				array(),
				array(
					'jsobject'=>'{
						name:"numeric",
						value:35,
						minValue:0	
						}')
				);
?>
<pre>
echo $this->CroogoFusion->numeric(
				'numeric',

				array(),
				array(
					'jsobject'=>'{
						name:"numeric",
						value:35,
						minValue:0	
						}')
				);
</pre>
<?php
echo $this->CroogoFusion->percent(
				'percentage',
				array(),
				array(
					'jsobject'=>'{
						name:"percentage",
						value:3,
						minValue:0	
						}'
					)
				);
?>
<pre>
echo $this->CroogoFusion->percent(
				'percentage',
				array(),
				array(
					'jsobject'=>'{
						name:"percentage",
						value:3,
						minValue:0	
						}'
					)
				);
</pre>
<?php
echo $this->CroogoFusion->currency(
				'currency',
				array(),
				array(
				'jsobject'=>'{
						name:"currency",
						value:555
						}'
					)
				);
?>
<pre>
echo $this->CroogoFusion->currency(
				'currency',
				array(),
				array(
				'jsobject'=>'{
						name:"currency",
						value:555
						}'
					)
				);
</pre>
<?php
echo $this->CroogoFusion->mask(
				'mask',
				array(),
				array(
					'jsobject'=>'{
										name: "mask",
                                        inputMode: ej.InputMode.Text,
                                        maskFormat: "99-999-99999",
                                        watermarkText: "99-999-99999",
										width:"100%"
									}
					')
				);
?>
<pre>
echo $this->CroogoFusion->mask(
				'mask',
				array(),
				array(
					'jsobject'=>'{
										name: "mask",
                                        inputMode: ej.InputMode.Text,
                                        maskFormat: "99-999-99999",
                                        watermarkText: "99-999-99999",
										width:"100%"
									}')
				);
</pre>

<?php

echo $this->Form->end();

?>
