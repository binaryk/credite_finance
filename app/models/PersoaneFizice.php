<?php

namespace Credite;

use \Illuminate\Database\Eloquent\SoftDeletingTrait;

class PersoaneFizice extends \Eloquent
{
    use SoftDeletingTrait;
    protected $table = 'persoane_fizice';
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

    public static function getPerioada(){
        return [
            'Determinata'   => 'Determinata',
            'Nedeterminata' => 'Nedeterminata',
            ];
    }

    public static function getTipAngajator(){
        return [
            'Institutie publica'   => 'Institutie publica',
            'Multinationala' => 'Multinationala',
            'Societate cu capital privat' => 'Societate cu capital privat',
            ];
    }

    public static function getNrAngajati(){
        return[
            'Sub 5' => 'Sub 5',
            'Intre 5 si 20' => 'Intre 5 si 20',
            'Intre 21 si 250' => 'Intre 21 si 250',
            'Peste 250' => 'Peste 250',
        ];
    }

    public static function getUltimStudii(){
        return[
            'Gimnaziu' => 'Gimnaziu',
            'Liceu' => 'Liceu',
            'Postuniversitare' => 'Postuniversitare',
            'Scoala postliceala' => 'Scoala postliceala',
            'Scoala profesionala' => 'Scoala profesionala',
            'Superioare' => 'Superioare',
        ];
    }

    public static function getStareCivila(){
        return[
            'Necasatorit/a' => 'Necasatorit/a',
            'Casatorit/a' => 'Casatorit/a',  
            'Divortat/a' => 'Divortat/a',
            'Vaduv/a' => 'Vaduv/a',     
        ];
    }

    public static function getSitLocativa(){
        return[
            'Chirie' => 'Chirie',
            'Locuieste cu parintii' => 'Locuieste cu parintii',
            'Proprietar cu ipoteca' => 'Proprietar cu ipoteca',
            'Proprietar fara ipoteca' => 'Proprietar fara ipoteca',
            'Alte situatii' => 'Alte situatii',
        ];
    }

    public static function toCombobox()
    {
        return [0 => ' -- Selectaţi persoana --'] + self::orderBy('nume')->lists('nume', 'id');
    }   
     
}