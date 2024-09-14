<?php

namespace App\Filament\Resources\PostResource\Widgets;

use App\Models\Post;
use Filament\Forms\Components\Card;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Card::make('posts', Post::all()->count())
                ->description('32k increase')
                ->descriptionIcon('All Posts'),
            Card::make('Publised', Post::where('status', true)->count())
                ->description('Status On'),
            Card::make('Draft', Post::where('status', false)->count())
                ->description('Status Off'),

        ];
    }
}
