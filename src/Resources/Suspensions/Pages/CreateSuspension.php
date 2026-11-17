<?php

namespace JeffersonGoncalves\Filament\LgpdMinors\Resources\Suspensions\Pages;

use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;
use JeffersonGoncalves\Filament\LgpdMinors\LgpdMinorsPlugin;
use JeffersonGoncalves\Filament\LgpdMinors\Resources\Suspensions\SuspensionResource;
use JeffersonGoncalves\LgpdMinors\MinorsManager;

class CreateSuspension extends CreateRecord
{
    protected static string $resource = SuspensionResource::class;

    protected function handleRecordCreation(array $data): Model
    {
        $model = LgpdMinorsPlugin::get()->getSubjectModel();

        return app(MinorsManager::class)->suspend($model::query()->findOrFail($data['subject_id']), $data['reason']);
    }

    protected function getRedirectUrl(): string
    {
        return static::getResource()::getUrl('index');
    }
}
