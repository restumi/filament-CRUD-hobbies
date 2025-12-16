<?php

namespace App\Filament\Resources\HobbyResource\Pages;

use App\Filament\Resources\HobbyResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;

class CreateHobby extends CreateRecord
{
    protected static string $resource = HobbyResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Hobby created successfully!');
    }
}
