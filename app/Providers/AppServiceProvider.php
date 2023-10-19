<?php

namespace App\Providers;

use Filament\Navigation\MenuItem;
use Filament\Support\Facades\FilamentView;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;

class AppServiceProvider extends ServiceProvider
{
  /**
   * Register any application services.
   */
  public function register(): void
  {
    //
  }

  /**
   * Bootstrap any application services.
   */
  public function boot(): void
  {
    FilamentView::registerRenderHook(
      'panels::global-search.after',
      fn (): View => view('filament.components.admin-menu', [
        'items' => $this->getAdminMenuItems()
      ]),
    );
  }


  protected function getAdminMenuItems(): array
  {
    $array = collect(config('filament.adminMenu.items', []))
      ->map(function ($item, $key) {
        return MenuItem::make($key)
          ->label($item['label'] ?? 'no label')
          ->url($item['url'] ?? '')
          ->icon($item['icon'] ?? '');
      })
      ->toArray();
    return $array;
  }
}
