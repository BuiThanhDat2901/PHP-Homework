<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;

class DataHandleController extends Controller
{
    public function handlePathVariable($id){
        return "Tham số vừa truyền lên là  $id ";
    }

    public function handleQueryString(Request $request){
        $firstName = $request->get('firstName');
        $lastName = $request->get('lastName');
        $email = $request->get('email');
        $data =[
            'firstName' =>$firstName,
            'lastName' =>$lastName,
            'email' =>$email
        ];
        return view('datahandle',$data);
    }

    public function handleForm(){
        return view('form-data');
    }

    public function processForm(Request $request){
        $evenName = $request->get('eventName');
        $bandName = $request->get('bandName');
        $startDate = $request->get('startDate');
        $endDate = $request->get('endDate');
        $portfolio = $request->get('portfolio');
        $ticketPrice = $request->get('ticketPrice');
        $status = $request->get('status');
        $text = $this->handleStatus($status);
        return view('form-success',[
            'evenName'=> $evenName,
            'bandName'=> $bandName,
            'startDate'=> $startDate,
            'endDate'=> $endDate,
            'portfolio'=> $portfolio,
            'ticketPrice'=> $ticketPrice,
            'status'=> $text,
        ]);
    }

    public function handleStatus($status)
    {
        $text = "";
        switch ($status) {
            case 1:
                $text = "Đang diễn ra";
                break;
            case 2:
                $text = "Sắp diễn ra";
                break;
            case 3:
                $text = "Đã diễn ra";
                break;
            case 0:
                $text = "Tạm hoãn";
                break;
        }
        return $text;
    }

    public function layout(){
        return view('template.form');
    }
}
