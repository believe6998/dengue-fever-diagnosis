<?php

namespace App\Http\Controllers\API;

use App\Contact;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ContactController extends AppBaseController
{

  public function index(Request $request)
  {
    $page = $request->input('page', 1);
    $size = $request->input('limit', 10);
    $name = $request->input('name', '');
    $email = $request->input('email', '');
    $phone = $request->input('phone', '');

    try {
      $data = Contact::query();

      if (isset($name) && $name !== '') {
        $data = $data->where('name', 'like', '%' . $name . '%');
      }

      if (isset($email) && $email !== '') {
        $data = $data->where('email', 'like', '%' . $email . '%');
      }

      if (isset($phone) && $phone !== '') {
        $data = $data->where('phone', '=', $phone);
      }

      $data = $data
        ->orderBy('created_at', 'desc')
        ->paginate(
          $size,
          ['*'],
          'page',
          $page
        );

      return $this->sendResponse($data);
    } catch (\Exception $exception) {
      Log::error($exception);
      return $this->sendError($exception->getMessage());
    }
  }
}
