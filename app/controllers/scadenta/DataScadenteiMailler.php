<?php namespace Credite;
use Illuminate\Support\Facades\Input;
use Symfony\Component\HttpFoundation\Response;

/**
 * Created by PhpStorm.
 * User: lupac
 * Date: 1/14/2016
 * Time: 5:39 PM
 */
class DataScadenteiMailler extends \BaseController
{
    public function send()
    {
        $id = Input::get('id');
        $time = Input::get('time');
        $client = PersoaneFizice::find($id);
        $mailler = new \Mailers\Mailer();
        $mailler->sendTo(
            $client->email,
            'Clientul - ' . $client->nume . ' ' . $client->prenume,
            'emails.scadenta.confirmare',
            [
                'body' => \View::make('emails.scadenta.email-content')->with([
                    'client'          => $client,
                    'time' => $time,
                ])->render(),
                'client'  => $client,
            ]
        );
        return ['message' => 'Email trimis cu succes'];
    }
}