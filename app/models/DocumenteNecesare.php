<?php

namespace Credite\Banci;

use \Illuminate\Database\Eloquent\SoftDeletingTrait;

class DocumenteNecesare extends \Eloquent
{

    use SoftDeletingTrait;

    protected $table = 'uploaded_docs';
    protected $guarded = [];

    public static function getRecord( $id )
    {
        return self::find($id);
    }

    /**
    Cate documente are
     **/
    public static function NumarDocumente($id_filter)
    {
        return \DB::table('uploaded_docs')->whereNull('uploaded_docs.deleted_at')->where('uploaded_docs.id_document_necesar', (int) $id_filter )->count();
    }

    public static function createRecord($data )
    {
        // $file = $data['file'];
        return self::create([
            $data['type']             => $data['id_filter'],
            'file_name'               => $data['path'] . $data['file'],
            'file_url'                => \URL::to('/') . '/uploads/' . $data['file'],
            'file_extension'          => $data['extension'],
            'file_size'               => $data['size'],
            'created_at'              => $now = \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'              => $now
        ]);
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

    public static function deleteFile($id, $id_user)
    {
        $record = self::find($id);
        if( ! $record )
        {
            return \Response::json( ['success' => false, 'message' => 'No record ...'] );
        }
        \File::delete( $record->file_name );
        $record->save();
        $record->delete();
        return \Response::json( ['success' => true, 'message' => 'Delete. OK'] );
    }

    public static function downloadFile($id)
    {
        $record = self::find($id);
        if( ! $record )
        {
            return \Response::json( ['success' => false, 'message' => 'No record ...'] );
        }
        return \Response::download($record->file_name, basename($record->file_name), []);
    }

}