<?php
/**
 * This code is licensed under AGPLv3 license or Afterlogic Software License
 * if commercial version of the product was purchased.
 * For full statements of the licenses see LICENSE-AFTERLOGIC and LICENSE-AGPL3 files.
 */

namespace Aurora\Modules\SaleObjects\Classes;

/**
 * @license https://www.gnu.org/licenses/agpl-3.0.html AGPL-3.0
 * @license https://afterlogic.com/products/common-licensing Afterlogic Software License
 * @copyright Copyright (c) 2019, Afterlogic Corp.
 *
 * @package SaleObjects
 * @subpackage Classes
 */
class Product extends \Aurora\System\EAV\Entity
{
	protected $aStaticMap = [
		'ProductGroupUUID'	=>['string', ''],
		'Title'				=> ['string', '', true],
		'Description'		=> ['string', ''],
		'Homepage'			=> ['string', ''],
		'Price'				=> ['double', 0],
		'Status'			=> ['int', 0]
	];

	public function toResponseArray()
	{
		$aResponse = parent::toResponseArray();
		$aResponse['ProductId'] = $this->EntityId;
		return $aResponse;
	}
}