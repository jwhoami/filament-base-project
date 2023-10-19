<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ConfigResource\RelationManagers;
use App\Filament\Resources\ConfigResource\Pages;
use App\Models\Config;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Tables;
use Filament\Tables\Table;
use App\Filament\BaseResource;

class ConfigResource extends BaseResource
{
  protected static ?string $model = Config::class;

  protected static ?string $navigationIcon = 'heroicon-o-collection';

  protected static bool $shouldRegisterNavigation = false;

  protected static ?string $pluralModelLabel = 'Configuración';

  public static function form(Form $form): Form
  {
    return $form
      ->schema([
        Forms\Components\TextInput::make('name')
          ->label(__('Nombre'))
          ->maxLength(50),
      ]);
  }

  public static function table(Table $table): Table
  {
    return $table
      ->columns([
        Tables\Columns\TextColumn::make('name')
          ->label(__('Nombre')),
      ])
      ->filters([
        //
      ])
      ->actions([
        Tables\Actions\EditAction::make()
          ->toolTip(__('Editar'))
          ->label(false)
          ->hidden(fn (): bool => !(auth()->user()->hasPermission('Config.update'))),
        Tables\Actions\Action::make('configure')
          ->toolTip(__('Configurar'))
          ->icon('heroicon-o-cog')
          ->label(false)
          ->hidden(fn (): bool => !(auth()->user()->hasPermission('Config.configure')))
          ->url(fn (Config $record): string => ConfigResource::getUrl('configure', ['record' => $record])),
      ])
      ->bulkActions([
        // Tables\Actions\DeleteBulkAction::make(),
      ]);
  }

  public static function getRelations(): array
  {
    return [
      //
    ];
  }

  public static function getPages(): array
  {
    return [
      'index' => Pages\ListConfigs::route('/'),
      'configure' => Pages\Configure::route('/{record}/configure'),
    ];
  }
}
