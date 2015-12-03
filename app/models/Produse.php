<?php

namespace Credite;

use \Illuminate\Database\Eloquent\SoftDeletingTrait;

class Produs extends \Eloquent
{
    use SoftDeletingTrait;
    protected $table = 'produse';
    protected $guarded = [];

    public function banci()
    {
        return $this->belongsToMany('\Credite\Banca', 'banca_produs', 'id_banca', 'id_produs');
    }

    public static function getRecord( $id )
    {
        return self::find($id);
    }

    public static function createRecord($data )
    {
        return self::create($data);
    }

    public static function updateRecord($id, $data)
    {
        $record = self::find($id);
        if( ! $record )
        {
            return false;
        }
        return $record->update($data);
    }

    public static function deleteRecord($id, $data)
    {
        $record = self::find($id);
        if( ! $record )
        {
            return false;
        }
        return $record->delete();
    }

    public static function toCombobox()
    {
        return [0 => ' -- Selectaţi banca --'] + self::orderBy('nume')->lists('nume', 'id');
    }

}