<?php

namespace Credite;

use \Illuminate\Database\Eloquent\SoftDeletingTrait;

class PersoaneFizice extends \Eloquent
{
    use SoftDeletingTrait;
    protected $table = 'persoane_fizice';
    protected $guarded = ['client_extern', 
    'client_id',
    'tip',
    'an_constructie',
    'localizare',
    'marime',
    'regim_juridic',
    'valoare_estimata',
    ];

    public static function getRecord( $id )
    {
        return self::find($id);
    }

    public static function createRecord($data )
    {  
        
        if($data['client_extern'] == 1){
            /*trimite email*/
            $client = self::create($data);   
            self::sendEmail($client);
            return $client;
        }
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

    public static function sendEmail($client){
        /**
         * Declansez evenimentul de trimitere email
         **/
        $mailler = new \Mailers\Mailer();
        $mailler->sendTo(
            'ioana.biris@creditfin.ro', 
            'Clientul - ' . $client->nume . ' ' . $client->prenume, 
            'emails.client.confirmare', 
            [
                'body' => \View::make('extern.email-content')->with([
                        'client'          => $client,
                    ])->render(),
                'client'  => $client,
            ]
        );
       /* \Event::fire('client.send-confirm-email', [
            'client'          => $client,
        ]);*/

        return ['success' => true];
    } 

    public static function getPerioada(){
        return [
            'Determinată'   => 'Determinată',
            'Nedeterminată' => 'Nedeterminată',
            ];
    }

    public static function getTipAngajator(){
        return [
            '0' => '-- Alege --',
            '1'   => 'Instituție financiară',
            '2' => 'Corporație multinațională',
            '3' => 'Sector public',
            '4' => 'Companie de stat',
            '5' => 'Companie privată romană',
            '6' => 'Regie autonomă',
            '7' => 'Companie străină',
            '8' => 'Societate cu răspundere limitată',
            '9' => 'Societate în nume colectiv',
            '10' => 'Societate pe acțiuni',
            '11' => 'Poliție/Armată',
            '12' => 'Jandarmerie',
            '13' => 'Alte entități', 
            ];
    }

    public static function getNrAngajati(){
        return[
            '0' => '-- Alege --',
            '1' => 'Între 0 și 10',
            '2' => 'Între 11 și 20',
            '3' => 'Între 21 și 50',
            '4' => 'Între 51 și 100',
            '5' => 'Între 101 și 250',
            '6'  => 'Peste 250',
        ];
    }

    public static function getUltimStudii(){
        return[
            '0' => '-- Alege --',
            '1' => 'Gimnaziu',
            '2' => 'Liceu',
            '3' => 'Postuniversitare',
            '4' => 'Școală postliceală',
            '5' => 'Școală profesională',
            '6' => 'Superioare',
        ];
    }

    public static function getStareCivila(){
        return[
            '0' => '-- Alege --',
            '1' => 'Necăsătorit/ă',
            '2' => 'Căsătorit/ă',  
            '3' => 'Divorțat/ă',
            '4' => 'Văduv/a',     
        ];
    }

    public static function getSitLocativa(){
        return[
            '0' => '-- Alege --',
            '1' => 'Chirie',
            '2' => 'Locuiește cu părinții',
            '3' => 'Proprietar cu ipotecă',
            '4' => 'Proprietar făra ipotecă',
            '5' => 'Alțe situații',
        ];
    }

    public static function getBanca(){
        return[ 
            '0' => '-- Alege banca --',
            '1' => 'Nu incasez banii in cont',                          
            '2' => 'Alpha Bank',                          
            '3' => 'Banca Comercială Carpatică',  
            '4' => 'Veneto Bank',
            '5' => 'Banca Romanească',
            '6' => 'Banca Transilvania',   
            '7' => 'Bancpost',   
            '8' => 'BCR',
            '9' => 'BRD', 
            '10' => 'Emporiki Bank',
            '11' => 'CEC',
            '12' => 'CreditEurope Bank',
            '13' => 'GarantiBank',
            '14' => 'ING Bank',
            '15' => 'Idea Bank',
            '16' => 'Intesa Sanpaolo Bank',
            '17'  => 'Leumi Bank',
            '18' => 'Libra Bank',
            '19' => 'Marfin Bank',
            '20' => 'Millennium Bank',
            '21' => 'MKB Romexterra Bank',
            '22' => 'OTP Bank',
            '23' => 'Piraeus Bank',
            '24' => 'ProCredit Bank',
            '25' => 'Raiffeisen Bank',
            '26' => 'RBS',
            '27' => 'UniCredit Bank',
        ];
    }

    public static function getTipClient(){
        return[
            '0' => '-- Alege --',
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