<?php

namespace Orange\CustomTierPrice\Ui\DataProvider\Product\Form\Modifier;

use Magento\Catalog\Ui\DataProvider\Product\Form\Modifier\AbstractModifier;
use Magento\Ui\Component\Form\Field;
use Magento\Ui\Component\Form\Fieldset;
use Magento\Framework\Stdlib\ArrayManager;
use Magento\Catalog\Api\Data\ProductAttributeInterface;
use Magento\Catalog\Model\Config\Source\ProductPriceOptionsInterface;
use Magento\Ui\Component\Container;
use Magento\Ui\Component\Form\Element\DataType\Price;
use Magento\Ui\Component\Form\Element\Input;
use Magento\Ui\Component\Form\Element\Select;
	
class UpdateTierPricing extends AbstractModifier
{
   /**
    * @var ArrayManager
    * @since 101.0.0
    */
   protected $arrayManager;

   /**
    * @var string
    * @since 101.0.0
    */
   protected $scopeName;

   /**
    * @var array
    * @since 101.0.0
    */
   protected $meta = [];

   /**
    * UpdateTierPricing constructor.
    * @param ArrayManager $arrayManager
    */
   public function __construct(
       ArrayManager $arrayManager
   ) {
       $this->arrayManager = $arrayManager;
   }

   /**
    * @param array $data
    * @return array
    * @since 100.1.0
    */
   public function modifyData(array $data)
   {
       // TODO: Implement modifyData() method.
       return $data;
   }

   /**
    * @param array $meta
    * @return array
    * @since 100.1.0
    */
   public function modifyMeta(array $meta)
   {
       // TODO: Implement modifyMeta() method.
       $this->meta = $meta;

       $this->customizeTierPrice();

       return $this->meta;
   }

   /**
    * @return $this
    */
   private function customizeTierPrice()
   {
       $tierPricePath = $this->arrayManager->findPath(
           ProductAttributeInterface::CODE_TIER_PRICE,
           $this->meta,
           null,
           'children'
       );

       if ($tierPricePath) {
           $this->meta = $this->arrayManager->merge(
               $tierPricePath,
               $this->meta,
               $this->getTierPriceStructure()
           );
       }

       return $this;
   }

   private function getTierPriceStructure()
   {
       return [
           'children' => [
               'record' => [
                   'children' => [
                       'priceexcludingtax' => [
                           'arguments' => [
                               'data' => [
                                   'config' => [
                                       'formElement' => Input::NAME,
                                       'componentType' => Field::NAME,
                                       'dataType' => Price::NAME,
                                       'label' => __('Price Exl. Tax'),
                                       'dataScope' => 'priceexcludingtax',
                                       'sortOrder' => '100',
                                       'additionalClasses' => 'admin__field-wide', // Add this line to increase the width
                                       'style' => 'width: 70px;',
                                   ],
                               ],
                           ],
                       ],
                   ],
               ],
           ],
       ];
   }
}