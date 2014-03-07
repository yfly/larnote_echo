<?php 
if( !function_exists('text_field'))
{
	function text_field($name,$label, $value)
	{
		$ui= '<div class="form-group">';
		$ui .= '<div class="form-group">';
		$ui .= Form::label($name , $label , array('class' => 'col-lg-2 control-label'));
		$ui .= '<div class="col-lg-10">';
		$ui .= Form::text($name, $value, array('class' => 'form-control'));
		$ui .='</div>';
		$ui .='</div>';
		$ui .='</div>';

		return $ui;
	}
}

if(!function_exists('textarea_field'))
{
	function textarea_field($name , $label , $value)
	{
		$ui = '<div class="form-group">';
			$ui .= '<div class="form-group">';
				$ui .= Form::label($name, $label, array('class' => 'col-lg-2 control-label'));
			$ui .= '<div class="col-lg-10">';
				$ui .= Form::textarea($name, $value, array('class' => 'form-control'));
				$ui .= '</div>';
			$ui .= '</div>';
				$ui .='</div>';

		return $ui;
	}
}

if (!function_exists('is_post'))
{
	function is_post()
	{
		return Input::server('REQUEST_METHOD') == 'POST';
	}
}

if (!function_exists('password_field'))
{
	function password_field($name, $label)
	{
		$ui = '<div class="form-group">';
		$ui .= '<div class="form-group">';
			$ui .= Form::label($name,$label,array('class' => 'col-lg-2 control-label'));
			$ui .= '<div class="col-lg-10">';
			$ui .= Form::password($name, array('class' => 'form-control'));
		$ui .= '</div></div>';
		return $ui;			
	}
}
?>