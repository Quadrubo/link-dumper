<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LinkResource\Pages;
use App\Models\Link;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\SpatieTagsInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\SpatieTagsColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LinkResource extends Resource
{
    protected static ?string $model = Link::class;

    protected static ?string $recordTitleAttribute = 'title';

    protected static ?string $navigationIcon = 'heroicon-o-link';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Group::make()
                    ->schema([
                        Forms\Components\Section::make(__('app.filament.forms.sections.general_information.label'))
                            ->schema([
                                Forms\Components\TextInput::make('title')
                                    ->required()
                                    ->maxLength(255)
                                    ->localize('app.models.link.attributes.title'),
                                Forms\Components\Select::make('user_id')
                                    ->relationship('user', 'email')
                                    ->required()
                                    ->searchable()
                                    ->getSearchResultsUsing(fn (string $search) => User::where('name', 'like', "%{$search}%")->limit(50)->pluck('name', 'id'))
                                    ->getOptionLabelUsing(fn ($value): ?string => User::find($value)?->name)
                                    ->localize('app.models.link.attributes.user_id'),
                                Forms\Components\TextInput::make('url')
                                    ->required()
                                    ->maxLength(2048)
                                    ->localize('app.models.link.attributes.url'),
                                Forms\Components\TextInput::make('website')
                                    ->maxLength(255)
                                    ->localize('app.models.link.attributes.website'),
                                Forms\Components\TextInput::make('author')
                                    ->maxLength(255)
                                    ->localize('app.models.link.attributes.author'),
                                Forms\Components\DatePicker::make('posted_at')
                                    ->displayFormat('d.m.Y')
                                    ->localize('app.models.link.attributes.posted_at'),
                                Forms\Components\TagsInput::make('tags')
                                    ->columnSpan([
                                        'default' => 1,
                                        'sm' => 2,
                                    ])
                                    ->localize('app.models.link.attributes.tags'),
                            ])
                            ->columns([
                                'default' => 1,
                                'sm' => 2,
                            ]),
                    ])
                    ->columnSpan([
                        'default' => 1,
                        'sm' => fn (Component $livewire): int => $livewire instanceof Pages\CreateLink ? 3 : 2,
                    ]),
                Forms\Components\Group::make()
                    ->hiddenOn('create')
                    ->schema([
                        Forms\Components\Section::make(__('app.filament.forms.sections.metadata.label'))
                        ->schema([
                            Forms\Components\DateTimePicker::make('created_at')
                                ->disabled()
                                ->dehydrated(false)
                                ->displayFormat('d.m.Y H:i:s')
                                ->localize('app.general.attributes.created_at'),
                            Forms\Components\DateTimePicker::make('updated_at')
                                ->disabled()
                                ->dehydrated(false)
                                ->displayFormat('d.m.Y H:i:s')
                                ->localize('app.general.attributes.updated_at'),
                        ])
                            ->columns([
                                'default' => 1,
                            ]),
                    ]),
            ])->columns([
                'default' => 1,
                'sm' => 3,
                'lg' => null,
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->sortable()
                    ->searchable()
                    ->localize('app.general.attributes.id', helper: false, hint: false),
                Tables\Columns\TextColumn::make('title')
                    ->sortable()
                    ->searchable()
                    ->localize('app.models.link.attributes.title', helper: false, hint: false),
                Tables\Columns\TextColumn::make('url')
                    ->sortable()
                    ->searchable()
                    ->localize('app.models.link.attributes.url', helper: false, hint: false),
                Tables\Columns\TagsColumn::make('tags')
                    ->localize('app.models.link.attributes.tags', helper: false, hint: false),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->searchable()
                    ->localize('app.general.attributes.created_at', helper: false, hint: false),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->searchable()
                    ->localize('app.general.attributes.updated_at', helper: false, hint: false),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ]),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListLinks::route('/'),
            'create' => Pages\CreateLink::route('/create'),
            'view' => Pages\ViewLink::route('/{record}'),
            'edit' => Pages\EditLink::route('/{record}/edit'),
        ];
    }

    public static function getModelLabel(): string
    {
        return __('app.models.link.label') !== 'app.models.link.label' ? __('app.models.link.label') : parent::getModelLabel();
    }

    public static function getPluralModelLabel(): string
    {
        return __('app.models.link.plural_label') !== 'app.models.link.plural_label' ? __('app.models.link.plural_label') : parent::getPluralModelLabel();
    }

    protected static function getNavigationGroup(): ?string
    {
        return __('app.models.link.navigation_group') !== 'app.models.link.navigation_group' ? __('app.models.link.navigation_group') : parent::getNavigationGroup();
    }
}
