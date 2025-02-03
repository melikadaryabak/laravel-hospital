<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\Report;

class ReportController extends Controller
{
    public function index(){

            // $phone = request('phonenumber');
            $nationalid = request('nationalid');
    
            
            $patient = Patient::where('national_id',$nationalid)->firstOrFail();
            $reports = Report::where('patient_id', $patient->id)->get();
            // $patient == $patient[0]
            return view('pages.reports-user' ,[
                "reports" => $reports,
                "patient" => $patient
            ]);
        } 

        public function store(){
                $report = new Report();
        
                $nationalid = request('nationalid');
                $patient = Patient::where('national_id',$nationalid)->first();
                $report->patient_id = $patient->id;
                $report->type_test = request('type-test');
                $report->test_name = request('test-name');
                $report->file_path = request('file-upload');
                $report->save();
        
                return redirect('/reports/staff')->with('save_file','فایل با موفقیت ذخیره شد.');
            } 
            
}
