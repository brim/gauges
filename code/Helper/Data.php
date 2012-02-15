<?php
/**
 * Brim LLC
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to support@brimllc.com so we can send you a copy immediately.
 *
 *
 * @category   Brim
 * @package    Brim_Gauges
 * @copyright  Copyright (c) 2012 Brim LLC
 * @license    http://ecommerce.brimllc.com/license-osl
 */

/**
 *
 */
class Brim_Gauges_Helper_Data extends Mage_Core_Helper_Abstract {

    /**
     * @return bool
     */
    public function isEnabled() {
        return ($this->getGaugeId() != '');
    }

    /**
     * @return string
     */
    public function getGaugeId() {
        return trim(Mage::getStoreConfig('brim_gauges/settings/gauge_id'));
    }
}