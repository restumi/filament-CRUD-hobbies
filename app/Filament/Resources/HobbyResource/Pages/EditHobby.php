<?php

namespace App\Filament\Resources\HobbyResource\Pages;

use App\Filament\Resources\HobbyResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Filament\Notifications\Notification;

class EditHobby extends EditRecord
{
    protected static string $resource = HobbyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()->successNotificationTitle('Hobby deleted successfully!'),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getSavedNotificationTitle(): string
    {
        return 'Hobby updated successfully!';
    }
}
