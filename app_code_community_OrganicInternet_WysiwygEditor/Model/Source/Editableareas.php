<?php

class OrganicInternet_WysiwygEditor_Model_Source_EditableAreas
{
    public function toOptionArray()
    {
        return array(
            array('value' => 'description',             'label' => Mage::helper('organicinternet_wysiwygeditor')->__('Product Description')),
            array('value' => 'short_description',       'label' => Mage::helper('organicinternet_wysiwygeditor')->__('Product Short Description')),
            array('value' => '_generaldescription',     'label' => Mage::helper('organicinternet_wysiwygeditor')->__('Category Description')),
            array('value' => 'text',                    'label' => Mage::helper('organicinternet_wysiwygeditor')->__('Newsletter Template')),
            array('value' => 'page_content',            'label' => Mage::helper('organicinternet_wysiwygeditor')->__('CMS Page Content')),
            array('value' => 'block_content',           'label' => Mage::helper('organicinternet_wysiwygeditor')->__('Static Block Content')),
        );
    }
}

