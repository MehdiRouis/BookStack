@extends('layouts.tri')

@section('body')
    @include('books.parts.list', ['books' => $books, 'view' => $view, 'listOptions' => $listOptions])
@stop

@section('left')
    @if($recents)
        <div id="recents" class="mb-xl">
            <h5>{{ trans('entities.recently_viewed') }}</h5>
            @include('entities.list', ['entities' => $recents, 'style' => 'compact'])
        </div>
    @endif

    <div id="popular" class="mb-xl">
        <h5>{{ trans('entities.books_popular') }}</h5>
        @if(count($popular) > 0)
            @include('entities.list', ['entities' => $popular, 'style' => 'compact'])
        @else
            <p class="text-muted pb-l mb-none">{{ trans('entities.books_popular_empty') }}</p>
        @endif
    </div>

    <div id="new" class="mb-xl">
        <h5>{{ trans('entities.books_new') }}</h5>
        @if(count($new) > 0)
            @include('entities.list', ['entities' => $new, 'style' => 'compact'])
        @else
            <p class="text-muted pb-l mb-none">{{ trans('entities.books_new_empty') }}</p>
        @endif
    </div>
@stop

@section('right')

    <div class="actions mb-xl">
        <h5>{{ trans('common.actions') }}</h5>
        <div class="icon-list text-link">
            @if(userCan('book-create-all'))
                <a href="{{ url("/create-book") }}" data-shortcut="new" class="icon-list-item">
                    <span>@icon('add')</span>
                    <span>{{ trans('entities.books_create') }}</span>
                </a>
            @endif

            @include('entities.view-toggle', ['view' => $view, 'type' => 'books'])

            <!-- <a href="{{ url('/tags') }}" class="icon-list-item">
                <span>@icon('tag')</span>
                <span>{{ trans('entities.tags_view_tags') }}</span>
            </a> -->

            @if(userCan('content-import'))
                <a href="{{ url('/import') }}" class="icon-list-item">
                    <span>@icon('upload')</span>
                    <span>{{ trans('entities.import') }}</span>
                </a>
            @endif
        </div>
    </div>

@stop
