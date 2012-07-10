<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='//layouts/main';
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();
	
	public function yield($section = null, $required = false)
	{
		if(empty($section))
			echo $this->content;
		else
		{
			if(isset($this->clips[$section]))
				echo $this->clips[$section];
			else if($required)
				throw new Exception('The layout '.$this->layout.' requires the definition of a '.$section.' section in the view.');
		}
	}
	
	public function contentFor($section)
	{
		$this->beginWidget('system.web.widgets.CClipWidget', array('id'=> $section));
	}
	
	public function endContentFor()
	{
		$this->endWidget();
	}
}