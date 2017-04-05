<?php

$installer = $this;
$installer->startSetup();

$attr = array (
  'attribute_model' => NULL,
  'backend' => '',
  'type' => 'int',
  'table' => '',
  'frontend' => '',
  'input' => 'select',
  'label' => 'Promotional Label',
  'frontend_class' => '',
  'source' => '',
  'required' => '0',
  'user_defined' => '1',
  'default' => '0',
  'unique' => '0',
  'note' => '',
  'input_renderer' => NULL,
  'global' => '1',
  'visible' => '1',
  'searchable' => '1',
  'filterable' => '1',
  'comparable' => '1',
  'visible_on_front' => '0',
  'is_html_allowed_on_front' => '0',
  'is_used_for_price_rules' => '1',
  'filterable_in_search' => '1',
  'used_in_product_listing' => '0',
  'used_for_sort_by' => '0',
  'is_configurable' => '1',
  'apply_to' => 'simple',
  'visible_in_advanced_search' => '1',
  'position' => '1',
  'wysiwyg_enabled' => '0',
  'used_for_promo_rules' => '1',
  'option' => 
  array (
    'values' => 
    array (
      1 => 'New arrival deal',
      2 => 'Clearance offer',
      3 => 'Xmas 15% off',
      4 => 'Sales up to 50% off ',
    ),
  ),
);

$installer->addAttribute(Mage_Catalog_Model_Product::ENTITY, 'promotional_label', $attr);

$this->endSetup();
