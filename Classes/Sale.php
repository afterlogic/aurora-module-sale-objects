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

class Sale extends \Aurora\System\EAV\Entity
{
	public function __construct($sModuleName)
	{
		$this->aStaticMap = [
			'ProductUUID' => ['string', ''],
			'CustomerUUID' => ['string', ''],
			'Date' => ['datetime', date('Y-m-d H:i:s', 0)],
			'Price' => ['int', 0]
		];
		parent::__construct($sModuleName);
	}

	public function toResponseArray()
	{
		$aResponse = parent::toResponseArray();
		$aResponse['SaleId'] = $this->EntityId;
		return $aResponse;
	}
}