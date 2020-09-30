<?php
namespace SeyedMR\LaraliteMetadata\Traits;

use App\UserMetaData;

trait HasMeta
{
    public function Meta()
    {
        return $this->hasMany(\App\UserMetaData::class);
    }

    public function getMeta($key)
    {
        $meta = $this->meta->where('meta_key', $key)->first();
        if(!$meta){
            return null;
        }
        return $meta->meta_value;
    }

    public function setMeta($key, $value)
    {
        $meta = $this->meta->where('meta_key', $key)->first();
        if (!$meta) {
            $meta = new UserMetaData();
            $meta->user_id = $this->id;
            $meta->meta_key = $key;
        }
        $meta->meta_value = $value;
        return $meta->save();
    }

}