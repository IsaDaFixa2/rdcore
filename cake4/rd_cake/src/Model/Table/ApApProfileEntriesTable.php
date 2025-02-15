<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\ORM\TableRegistry;

class ApApProfileEntriesTable extends Table {

    public function initialize(array $config):void{  
        $this->addBehavior('Timestamp');
        $this->belongsTo('Aps', [
                'className' => 'Aps',
                'foreignKey' => 'ap_id'
            ]);
        $this->belongsTo('ApProfileEntries', [
                'className' => 'ApProfileEntries',
                'foreignKey' => 'ap_profile_entry_id'
            ]);
        $this->hasMany('ApStaticEntryOverrides',  ['dependent' => true]);	
    }

    public function afterSave($event, $entity){
        return $this->_doAfterSave($entity);   
    }

    private function _doAfterSave($entity){
    
       
    }

}
