<?php

class Meanbee_CmsPageRevisions_Block_Adminhtml_Cms_Block_Review extends Mage_Core_Block_Template
{
    public function isHtml(string $string): bool
    {
        // Contains HTML
        return $string !== strip_tags($string);
    }

    public function getDisplayName(string $name): string
    {
        return ucwords(str_replace('_', ' ', $name));
    }
}