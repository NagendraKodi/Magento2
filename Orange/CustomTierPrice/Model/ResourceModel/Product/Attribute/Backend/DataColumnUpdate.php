<?php

namespace Orange\CustomTierPrice\Model\ResourceModel\Product\Attribute\Backend;

use Magento\Catalog\Model\ResourceModel\Product\Attribute\Backend\Tierprice;

class DataColumnUpdate extends Tierprice
{
   /**
    * @param array $columns
    * @return array
    */
   protected function _loadPriceDataColumns($columns)
   {
       $columns = parent::_loadPriceDataColumns($columns);
       $columns['priceexcludingtax'] = 'priceexcludingtax';
       return $columns;
   }
}