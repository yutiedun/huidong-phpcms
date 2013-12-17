<?php
class ErrorModule extends CWebModule{
    public $debug = false;
    public function init(){
        $this->setImport(array(
            'error.models.*',
            'error.components.*',
        ));
    }
    public function beforeControllerAction($controller, $action)
	{
		if(parent::beforeControllerAction($controller, $action))
		{
			return true;
		}
		else
			return false;
	}

    public function configure($config)
	{
		if(is_array($config))
		{
			foreach($config as $key=>$value)
			{
				if(isset(ErrorModule::${$key}))
				{
					ErrorModule::${$key} = $value;
				}
				else
					$this->$key=$value;
			}
		}
	}

    public function hasModule($module)
	{
		return in_array($module, array_keys($this->getModules()));
	}
}
?>
