<?php namespace Layla\Module\Renderers;

class Renderer {

	public function render($fields)
	{
		$html = '';
		foreach ($fields as $field)
		{
			foreach ($field as $type => $options)
			{
				//var_dump($options);
				$html .= call_user_func_array(array($this, $type), $options);
			}
		}

		return $html;
	}

	public function add($children)
	{
		$children = (array) $children;
		return implode("\n", $children);
	}

}