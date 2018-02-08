<?php
/**
 * @copyright Copyright (c) 2017, Afterlogic Corp.
 * @license AGPL-3.0 or AfterLogic Software License
 *
 * This code is licensed under AGPLv3 license or AfterLogic Software License
 * if commercial version of the product was purchased.
 * For full statements of the licenses see LICENSE-AFTERLOGIC and LICENSE-AGPL3 files.
 */

namespace Aurora\Modules\SaleObjects\Classes;

/**
 *
 * @package SaleObjects
 * @subpackage Classes
 */

class ProductGroup extends \Aurora\System\EAV\Entity
{
	public function __construct($sModule)
	{
		$this->aStaticMap = array(
			'Title'			=> array('string', ''),
			'Description'	=> array('string', ''),
			'Homepage'		=> array('string', '')
		);
		parent::__construct($sModule);
	}
	
	public function toResponseArray()
	{
		$aResponse = parent::toResponseArray();
		$aResponse['Id'] = $this->EntityId;
		return $aResponse;
	}
}
