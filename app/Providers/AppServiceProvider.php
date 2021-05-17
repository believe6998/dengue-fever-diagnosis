<?php

namespace App\Providers;

use App\Category;
use App\DynamicImage;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
  /**
   * Register any application services.
   *
   * @return void
   */
  public function register()
  {
    //
  }

  /**
   * Bootstrap any application services.
   *
   * @return void
   */
  public function boot()
  {
    Schema::defaultStringLength(191);
    if (Schema::hasTable('categories')) {
      $categories = Category::where('status', '!=', 0)->get()->toArray();
      $categories = $this->buildTree($categories ?? []);
      View::share('share_categories', $categories);
    }
    if (Schema::hasTable('dynamic_images')) {
      $images = DynamicImage::where('status', '=', 1)->get()->toArray();
      $images = $this->arrayToObject($images);
      View::share('dynamic_images', $images);
    }
  }

  private function arrayToObject(array $array): array
  {
    $object = array();
    foreach ($array as $value) {
      $code = $value['code'];
      $object = array_merge($object, [$code => $value]);
    }
    return $object;
  }

  private function buildTree(array $elements, $parentId = 0): array
  {
    $branch = array();
    foreach ($elements as $element) {
      if ($element['parent_id'] == $parentId) {
        $children = $this->buildTree($elements, $element['id']);
        if ($children) {
          $element['children'] = $children;
        }
        $branch[] = $element;
      }
    };
    return $branch;
  }
}
