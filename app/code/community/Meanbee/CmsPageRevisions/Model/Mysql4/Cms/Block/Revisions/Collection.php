<?php
class Meanbee_CmsPageRevisions_Model_Mysql4_Cms_Block_Revisions_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract {

    protected function _construct() {
        $this->_init('meanbee_cmspagerevisions/cms_block_revisions');
    }
}
