<?php

if (!class_exists('OrganicInternet_Wysiwyg_Block_PageHead')) {
class OrganicInternet_Wysiwyg_Block_PageHead extends Mage_Adminhtml_Block_Page_Head
{
    protected function getWysiwygActive()
    {
        return true;#$this->getConfigData('organicinternet_wysiwyg/active');
    }
    
    protected function getEditableAreas()
    {
        return 'description,short_description';#$this->getConfigData('organicinternet_wysiwyg/editable_areas');
    }
}
}