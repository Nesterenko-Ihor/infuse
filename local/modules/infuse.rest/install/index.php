<?php
use Bitrix\Main\Localization\Loc;
use Bitrix\Main\ModuleManager;

Loc::loadMessages(__FILE__);

class infuse_rest extends CModule
{
	public function __construct()
	{
		$this->MODULE_ID = "infuse.rest";
		$this->MODULE_NAME = Loc::getMessage("INFUSE_REST_MODULE_NAME");
		$this->MODULE_DESCRIPTION = Loc::getMessage("INFUSE_REST_MODULE_DESC");
		$this->PARTNER_NAME = Loc::getMessage("INFUSE_REST_PARTNER_NAME");
		$this->PARTNER_URI = Loc::getMessage("INFUSE_REST_PARTNER_URI");
	}

	public function doInstall()
	{
		ModuleManager::registerModule($this->MODULE_ID);
	}

	public function doUninstall()
	{
		ModuleManager::unRegisterModule($this->MODULE_ID);
	}
}
