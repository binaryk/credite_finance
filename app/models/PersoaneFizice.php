<?php

namespace Credite;

use \Illuminate\Database\Eloquent\SoftDeletingTrait;

class PersoaneFizice extends \Eloquent
{
    use SoftDeletingTrait;
    protected $table = 'persoane_fizice';
    protected $guarded = ['client_extern'];

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
        $mail = new \Mailers\Mailer();

        $mail->sendTo(
            'lupacescueduard@yahoo.com', 
            'Clientul - ' . $client->nume . ' ' . $client->prenume, 
            'emails.client.confirmare', 
            [
                'body' => \View::make('extern.email-content')->with([
                        'client'          => $client,
                    ])->render(),
                'client'  => $client,
            ]
        );
        \Event::fire('client.send-confirm-email', [
            'client'          => $client,
        ]);

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
            '1' => 'Necăsătorit/ă',
            '2' => 'Căsătorit/ă',  
            '3' => 'Divorțat/ă',
            '4' => 'Văduv/a',     
        ];
    }

    public static function getSitLocativa(){
        return[
            '1' => 'Chirie',
            '2' => 'Locuiește cu părinții',
            '3' => 'Proprietar cu ipotecă',
            '4' => 'Proprietar făra ipotecă',
            '5' => 'Alțe situații',
        ];
    }

    public static function getBanca(){
        return[
            '1' => 'Alpha Bank',                          
            '2' => 'Banca Comercială Carpatică',  
            '3' => 'Veneto Bank',
            '4' => 'Banca Romanească',
            '5' => 'Banca Transilvania',   
            '6' => 'Bancpost',   
            '7' => 'BCR',
            '8' => 'BRD', 
            '9' => 'Emporiki Bank',
            '10' => 'CEC',
            '11' => 'CreditEurope Bank',
            '12' => 'GarantiBank',
            '13' => 'ING Bank',
            '14' => 'Idea Bank',
            '15' => 'Intesa Sanpaolo Bank',
            '16'  => 'Leumi Bank',
            '17' => 'Libra Bank',
            '18' => 'Marfin Bank',
            '19' => 'Millennium Bank',
            '20' => 'MKB Romexterra Bank',
            '21' => 'OTP Bank',
            '22' => 'Piraeus Bank',
            '23' => 'ProCredit Bank',
            '24' => 'Raiffeisen Bank',
            '25' => 'RBS',
            '26' => 'UniCredit Bank',
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