<?php


namespace App\Utils;


use Telegram\Bot\Laravel\Facades\Telegram;

class TBot
{
  private function sendMessage($text)
  {
    Telegram::sendMessage([
      'chat_id' => env('TELEGRAM_CHANNEL_ID', ''),
      'parse_mode' => 'markdown',
      'text' => $text
    ]);
  }

  private function sendLog($text)
  {
//    Telegram::sendMessage([
//      'chat_id' => env('TELEGRAM_CHANNEL_LOG_ID', ''),
//      'parse_mode' => 'markdown',
//      'text' => $text
//    ]);
  }

  public function notifyNewOrder($name, $email, $phone, $address, $total_price, $detail_link)
  {
    $notify =
      '**📦 ĐƠN HÀNG MỚI**
```
- Khách hàng: ' . $name . '
- Email: ' . $email . '
- SĐT: ' . $phone . '
- Địa chỉ: ' . $address . '
- Tổng tiền: ' . $total_price . '
```
[Xem chi tiết](' . $detail_link . ')';

    $this->sendMessage($notify);
  }

  public function notifyNewContact($name, $email, $phone, $content, $detail_link)
  {
    $notify =
      '**📩 THÔNG TIN LIÊN HỆ MỚI**
```
- Khách hàng: ' . $name . '
- Email: ' . $email . '
- SĐT: ' . $phone . '
- Nội dung: ' . $content . '
```
[Xem chi tiết](' . $detail_link . ')';

    $this->sendMessage($notify);
  }
}
