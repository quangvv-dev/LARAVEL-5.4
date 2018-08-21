<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    public function index ()
    {
        return view ('sendMail');
    }

    public function store (Request $request )
    {   $data=[
        'to'        => $request->get('txtTo'),
        'subject'   => $request->get('txtSubject'),
        'content'   => $request->get('txtContent'),
        'file'      => $request->file('up')->getPathName()

    ];
    // dd($request->file('up')); die();
        Mail::send([] ,[], function($message) use($data)
        {
            $message->to($data['to'], 'Người Nhận')
            ->subject($data['subject'])
            ->setBody($data['content']);
            $message->attach($data['file']);
        });
        return 'Đã gửi thành công';
    }
}
