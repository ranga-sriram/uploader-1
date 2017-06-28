<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class UploaderModel extends Model
{
        public $table = 'files_table';
        public $primaryKey = 'id';
        public $timestamps = false;
     	public $fillable = ['file_name','project_name','project_lead_name','file_description','share_type'];
}
