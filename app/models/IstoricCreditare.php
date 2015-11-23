<?php

/**
 * Created by PhpStorm.
 * User: lupac
 * Date: 11/22/2015
 * Time: 10:20 PM
 */
namespace Credite;
class IstoricCreditare extends \Eloquent {
    protected $table   = 'istoric_creditare';
    protected $guarded = [];


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


}