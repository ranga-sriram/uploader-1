<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UploaderModel;

class FileUploadController extends Controller
{
	public function uploadForm()
	{
        return view('form_upload');
	}

	public function uploadSubmit(Request $request)
	{
		$model = new UploaderModel;
		$model->file_name = $request->fname;
	    $model->project_name = $request->pname;
	    $model->project_lead_name = $request->plname;
	    $model->file_description = $request->fd;
	    $model->share_type = $request->sharetype;
	    //$tempModel->save();
	    //$targetPath=dirname( __FILE__ ) . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR. $tempModel->ID;
	    $filename = str_random(20) . "." . $request->file->extension();
	    $request->file->storeAs('uploads', $filename);
	    $model->stored_file_name = $filename;
	    $model->save();
	    
	    //dd($path); // this line when uncommented will show the generated random filename by stopping further execution abruptly
	    //dump($path);  // you can use this helper as well if you don't want the processing to stop abruptly
	    
	    //$filename = str_random(10).$request->file->extension();
	   	//$targetPath = $request->file->storeAs('uploads', $tempModel->ID);
	    
	    return view('form_upload');
	}


	public function view_table()
	{
		$request_data = UploaderModel::all();
		return view('view_files')->with('request_data', $request_data);
	}

	public function downloader($file_param)
	{
		return response()->download(storage_path('app/uploads/'.$file_param));
	}
}