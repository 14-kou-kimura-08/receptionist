<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Panel;
use Illuminate\Http\Request;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Fields\BelongsTo;

class Member extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Member';

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
            ID::make()->sortable(),
            Text::make('名前', function () {
                return $this->last_name.' '.$this->first_name;
            })->exceptOnForms(),
            Text::make('フリガナ', function () {
                return $this->last_furigana.' '.$this->first_furigana;
            })->exceptOnForms(),

            Text::make('苗字', 'last_name')->onlyOnForms(),
            Text::make('名前', 'first_name')->onlyOnForms(),
            Text::make('フリガナ（苗字）', 'last_furigana')->onlyOnForms(),
            Text::make('フリガナ（名前）', 'first_furigana')->onlyOnForms(),
            Text::make('slack_id')->onlyOnForms(),

            new Panel('Group Information', $this->groupFields()),
        ];
    }

    /**
     * Get the group fields for the resource.
     *
     * @return array
     */
    protected function groupFields()
    {
        return [
            BelongsTo::make('Group')->hideFromIndex(),
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

    /**
     * The relationships that should be eager loaded on index queries.
     *
     * @var array
     */
    public static $with = ['group'];
}
