<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Panel;

class Event extends Resource
{
    public static $model = \App\Models\Event::class;

    public static $title = 'id';


    public static $search = [
        'id',
    ];

    public function fields(Request $request)
    {
        return [
            ID::make()->sortable(),

            DateTime::make('Held at'),

            new Panel('Speaker 1', $this->speakerFields(1)),

            new Panel('Speaker 2', $this->speakerFields(2))
        ];
    }

    protected function speakerFields(int $number): array
    {
        return [
            Text::make('Name', "speaker_{$number}_name")
                ->sortable()
                ->hideFromIndex()
                ->rules('max:255'),

            Text::make('Title', "speaker_{$number}_title")
                ->sortable()
                ->hideFromIndex()
                ->rules('max:255'),

            Text::make('Talk Title', "speaker_{$number}_talk_title")
                ->sortable()
                ->rules('max:255'),

            Textarea::make('Talk Title', "speaker_{$number}_talk_abstract")
                ->sortable(),

            Image::make('Photo', "speaker_{$number}_photo")
                ->disk('public')
                ->hideFromIndex(),
        ];
    }

    public function cards(Request $request)
    {
        return [];
    }

    public function filters(Request $request)
    {
        return [];
    }

    public function lenses(Request $request)
    {
        return [];
    }

    public function actions(Request $request)
    {
        return [];
    }
}
