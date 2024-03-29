<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Automattic\WooCommerce\GoogleListingsAndAds\Vendor\Google\Service\ShoppingContent;

class ReturnPolicyOnlineReturnShippingFee extends \Automattic\WooCommerce\GoogleListingsAndAds\Vendor\Google\Model
{
  /**
   * @var PriceAmount
   */
  public $fixedFee;
  protected $fixedFeeType = PriceAmount::class;
  protected $fixedFeeDataType = '';
  /**
   * @var string
   */
  public $type;

  /**
   * @param PriceAmount
   */
  public function setFixedFee(PriceAmount $fixedFee)
  {
    $this->fixedFee = $fixedFee;
  }
  /**
   * @return PriceAmount
   */
  public function getFixedFee()
  {
    return $this->fixedFee;
  }
  /**
   * @param string
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return string
   */
  public function getType()
  {
    return $this->type;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ReturnPolicyOnlineReturnShippingFee::class, 'Google_Service_ShoppingContent_ReturnPolicyOnlineReturnShippingFee');
