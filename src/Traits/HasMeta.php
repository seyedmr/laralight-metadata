<?php
namespace SeyedMR\LaraliteMetadata\Traits;

use \SeyedMR\LaraliteMetadata\Models\MetaData;

trait HasMeta
{
    public function Meta()
    {
        return $this->hasMany(\SeyedMR\LaraliteMetadata\Models\MetaData::class,'owner_id')->where('model',self::class);
    }

    public function getMeta($key)
    {
        $meta = $this->GetMetaData('key', $key);
        if(!$meta){
            return null;
        }
        return $meta->value;
    }

    public function setMeta($key, $value)
    {
        $meta = $this->GetMetaData($key);
        if (!$meta) {
            $meta = new MetaData();
            $meta->owner_id = $this->id;
            $meta->key = $key;
            $meta->model = self::class;
        }
        $meta->value = $value;
        return $meta->save();
    }
    
    private function GetMetaData($key){
            return $this->meta->where('key', $key)->first();
    }

}
