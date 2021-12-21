{!! Form::open()->get()->attrs(['class' => 'search-form-wrap'])->idPrefix('search_') !!}
<div class="row">
    <div class="col">
        {!! Form::text('name', 'Name')->placeholder(trans('ui-bootstrap5::word.username'))->wrapperAttrs(['class' => 'mb-2']) !!}
        {!! Form::text('email', 'Email')->placeholder(trans('ui-bootstrap5::word.email'))->wrapperAttrs(['class' => 'mb-2']) !!}

        <div class="input-group mb-3">
            <input data-type="data-picker-date" type="text" name="created_at__from" class="form-control"
                placeholder="{{ trans('ui-bootstrap5::word.created_at') }}">
            <span class="input-group-text">~</span>
            <input data-type="data-picker-date" type="text" name="created_at__to" class="form-control"
                placeholder="{{ trans('ui-bootstrap5::word.created_at') }}">
        </div>
    </div>
</div>
<div class="row mt-1">
    <div class="col">
        <a href="{{ url()->current() }}"
            class="btn btn-secondary d-block">{{ Str::title(trans('ui-bootstrap5::word.button.initialization')) }}</a>
    </div>
    <div class="col">
        <button type="button"
            class="btn btn-primary d-block w-100 btn-crud-search">{{ Str::title(trans('ui-bootstrap5::word.button.search')) }}</button>
    </div>
</div>
{!! Form::close() !!}
