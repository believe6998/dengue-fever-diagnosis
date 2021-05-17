<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Utils\TBot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class ContactController extends AppBaseController
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
   */
  public function index()
  {
    return view('contact-us');
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param \Illuminate\Http\Request $request
   * @return \Illuminate\Http\RedirectResponse
   */
  public function store(Request $request)
  {
    $rules = [
      'name' => 'required',
      'email' => 'required|email',
      'phone' => 'required',
      'content' => 'required'
    ];

    $customMessages = [
      'name.required' => 'Vui lòng nhập tên của bạn',
      'email.required' => 'Vui lòng nhập email',
      'phone.required' => 'Vui lòng nhập số điện thoại',
      'content.required' => 'Vui lòng nhập nội dung',
      'email.email' => 'Không đúng định dạng email'
    ];

    $validator = Validator::make($request->all(), $rules, $customMessages);

    if ($validator->fails()) {
      return back()
        ->withErrors($validator)
        ->withInput();
    }
    $contact = new Contact([
      'name' => $request->get('name'),
      'email' => $request->get('email'),
      'phone' => $request->get('phone'),
      'content' => $request->get('content')
    ]);
    $contact->save();

    $tbot = new TBot();
    $tbot->notifyNewContact(
      $request->get('name'),
      $request->get('email'),
      $request->get('phone'),
      $request->get('content'),
      'https://admin.gosport.vn/contracts'
    );

    return redirect('/contact-us')->with('success', 'Gửi thông tin thành công!');
  }

  /**
   * Display the specified resource.
   *
   * @param \App\Contact $contact
   * @return \Illuminate\Http\Response
   */
  public function show(Contact $contact)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param \App\Contact $contact
   * @return \Illuminate\Http\Response
   */
  public function edit(Contact $contact)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param \Illuminate\Http\Request $request
   * @param \App\Contact $contact
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Contact $contact)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param \App\Contact $contact
   * @return \Illuminate\Http\Response
   */
  public function destroy(Contact $contact)
  {
    //
  }

  /**
   * Add new.
   *
   * @param \Illuminate\Http\Request $request
   * @return \Illuminate\Http\JsonResponse
   */
  public function add(Request $request)
  {
    $phone = $request->get('phone');

    if ($phone == '' || strlen($phone) < 10) {
      return $this->sendError('Số điện thoại không đúng định dạng!', 200);
    }

    try {
      $contact = new Contact([
        'name' => 'Thêm từ khung nhập',
        'email' => '',
        'phone' => $phone,
        'content' => ''
      ]);
      $contact->save();

      $tbot = new TBot();
      $tbot->notifyNewContact(
        $request->get('name'),
        $request->get('email'),
        $request->get('phone'),
        $request->get('content'),
        'https://admin.gosport.vn/contracts'
      );

      return $this->sendResponse([
        'success' => true,
        'message' => 'Thêm thành công',
      ]);
    } catch (\Exception $exception) {
      Log::error($exception);
      return $this->sendError($exception->getMessage());
    }
  }
}
