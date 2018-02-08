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

class Product extends \Aurora\System\EAV\Entity
{
	protected $aStaticMap = [
		'ProductGroupUUID'	=>['string', ''],
		'Title'				=> ['string', ''],
		'Description'		=> ['string', ''],
		'Homepage'			=> ['string', ''],
		'Price'				=> ['int', 0],
		'Status'			=> ['int', 0]
	];

	public function toResponseArray()
	{
		$aResponse = parent::toResponseArray();
		$aResponse['ProductId'] = $this->EntityId;
		return $aResponse;
	}
}