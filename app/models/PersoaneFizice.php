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
            'Determinată'   => 'Determinată',
            'Nedeterminată' => 'Nedeterminată',
            ];
    }

    public static function getTipAngajator(){
        return [
            'Instituție financiară'   => 'Instituție financiară',
            'Corporație multinațională' => 'Corporație multinațională',
            'Sector public' => 'Sector public',
            'Companie de stat' => 'Companie de stat',
            'Companie privată romană' => 'Companie privată romană',
            'Regie autonomă' => 'Regie autonomă',
            'Companie străină' => 'Companie străină',
            'Societate cu răspundere limitată' => 'Societate cu răspundere limitată',
            'Societate în nume colectiv' => 'Societate în nume colectiv',
            'Societate pe acțiuni' => 'Societate pe acțiuni',
            'Poliție/Armată' => 'Poliție/Armată',
            'Jandarmerie' => 'Jandarmerie',
            'Alte entități' => 'Alte entități', 
            ];
    }

    public static function getNrAngajati(){
        return[
            'Între 0 și 10' => 'Între 0 și 10',
            'Între 11 și 20' => 'Între 11 și 20',
            'Între 21 și 50' => 'Între 21 și 50',
            'Între 51 și 100' => 'Între 51 și 100',
            'Între 101 și 250' => 'Între 101 și 250',
            'Peste 250' => 'Peste 250',
        ];
    }

    public static function getUltimStudii(){
        return[
            'Gimnaziu' => 'Gimnaziu',
            'Liceu' => 'Liceu',
            'Postuniversitare' => 'Postuniversitare',
            'Școală postliceală' => 'Școală postliceală',
            'Școală profesională' => 'Școală profesională',
            'Superioare' => 'Superioare',
        ];
    }

    public static function getStareCivila(){
        return[
            'Necăsătorit/ă' => 'Necăsătorit/ă',
            'Căsătorit/ă' => 'Căsătorit/ă',  
            'Divorțat/ă' => 'Divorțat/ă',
            'Văduv/a' => 'Văduv/a',     
        ];
    }

    public static function getSitLocativa(){
        return[
            'Chirie' => 'Chirie',
            'Locuiește cu părinții' => 'Locuiește cu părinții',
            'Proprietar cu ipotecă' => 'Proprietar cu ipotecă',
            'Proprietar fără ipotecă' => 'Proprietar făra ipotecă',
            'Alte situații' => 'Alțe situații',
        ];
    }

    public static function getBanca(){
        return[
            'Alpha Bank' => 'Alpha Bank',                          
            'Banca Comercială Carpatică' => 'Banca Comercială Carpatică',  
            'Veneto Bank' => 'Veneto Bank',
            'Banca Romanească' => 'Banca Romanească',
            'Banca Transilvania' => 'Banca Transilvania',   
            'Bancpost' => 'Bancpost',   
            'BCR' => 'BCR',
            'BRD' => 'BRD', 
            'Emporiki Bank' => 'Emporiki Bank',
            'CEC' => 'CEC',
            'CreditEurope Bank' => 'CreditEurope Bank',
            'GarantiBank' => 'GarantiBank',
            'ING Bank' => 'ING Bank',
            'Idea Bank' => 'Idea Bank',
            'Intesa Sanpaolo Bank' => 'Intesa Sanpaolo Bank',
            'Leumi Bank'  => 'Leumi Bank',
            'Libra Bank' => 'Libra Bank',
            'Marfin Bank' => 'Marfin Bank',
            'Millennium Bank' => 'Millennium Bank',
            'MKB Romexterra Bank' => 'MKB Romexterra Bank',
            'OTP Bank' => 'OTP Bank',
            'Piraeus Bank' => 'Piraeus Bank',
            'ProCredit Bank' => 'ProCredit Bank',
            'Raiffeisen Bank' => 'Raiffeisen Bank',
            'RBS' => 'RBS',
            'UniCredit Bank' => 'UniCredit Bank',
        ];
    }

    public static function getTipClient(){
        return[
            '1' => 'Prima casă',
            '2' => 'Credit de achiziție',
            '3' => 'Credit de nevoi personale cu ipotecă',
            '4' => 'Credit construcție',
            '5' => 'Credit de renovări/amenajări',
            '6' => 'Refinanțări',
            '7' => 'Nevoi personale',
            '8' => 'Credite medicale/studii/vacanțe',
            '9' => 'Leasing',
        ];
    }

    public static function toCombobox()
    {
        return [0 => ' -- Selectaţi persoana --'] + self::orderBy('nume')->lists('nume', 'id');
    }   
     
}