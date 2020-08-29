<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\TextArea;

use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\Status;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\BelongsToMany;

use Laravel\Nova\Fields\HasMany;

use Laravel\Nova\Http\Requests\NovaRequest;

class Project extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Project::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make(__('ID'), 'id')->sortable(),
            Text::make('title'),
            Text::make('type'),
            Status::make('Status ', 'status')
                ->loadingWhen(['Ongoing', 'Complete'])
                ->failedWhen(['Suspended'])
                ->onlyOnIndex(),
            Select::make('Status')->options([
                    'Running' => 'Ongoing',
                    'Suspended' => 'Suspended',
                    'Complete' => 'Complete',
                ])->hideFromIndex(),
            TextArea::make('description'),
            DateTime::make('start-date'),
            DateTime::make('end-date'),

           // BelongsToMany::make('Regions'),



        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
