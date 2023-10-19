<?php

namespace App\Filament;

use Filament\Resources\Resource;

class BaseResource extends Resource
{
  protected static bool $isGloballySearchable = false;
}
