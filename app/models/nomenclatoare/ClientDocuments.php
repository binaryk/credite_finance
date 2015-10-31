<?php

namespace Credite\Nomenclatoare;

use \Illuminate\Database\Eloquent\SoftDeletingTrait;

class ClientDocuments extends \Eloquent
{

    use SoftDeletingTrait;

    protected $table = 'uploaded_docs';
    protected $fillable = ['id_client', 'file_name', 'file_url', 'file_extension', 'file_size', 'created_by', 'updated_by', 'deleted_by', 'is_deleted'];

    public function Cladire()
    {
        return $this->belongsTo('\Credite\Cladire', 'id_client');
    }

    public static function getRecord( $id )
    {
        return self::find($id);
    }

    /**
    Cate documente are 
     **/
    public static function NumarDocumente($id_client)
    {
        return \DB::table('uploaded_docs')->whereNull('uploaded_docs.deleted_at')->where('uploaded_docs.id_client', (int) $id_client )->count();
    }

    public static function createRecord($data )
    {
        // $file = $data['file'];
        return self::create([
            'id_client'     => $data['id_client'],
            'file_name'      => $data['path'] . $data['file'],
            'file_url'       => \URL::to('/') . '/uploads/' . $data['file'],
            'file_extension' => $data['extension'],
            'file_size'      => $data['size'],
            'created_at'     => $now = \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'     => $now
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