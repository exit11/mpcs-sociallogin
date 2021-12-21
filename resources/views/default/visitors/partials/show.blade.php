<div class="row">
    <div class="col-12 col-sm">
        <dl class="dl">
            <dt class="col-4 col-lg-2">ID</dt>
            <dd class="col-8 col-lg-4" data-crud-show-name="id"></dd>
            <dt class="col-4 col-lg-2">Provider</dt>
            <dd class="col-8 col-lg-4" data-crud-show-template-id="script-template-sociallogin_provider"
                data-crud-show-type="template-html" data-crud-show-name="social_logins"></dd>

            <dt class="col-4 col-lg-2">{{ Str::title(trans('ui-bootstrap5::word.name')) }}</dt>
            <dd class="col-8 col-lg-4" data-crud-show-name="name"></dd>
            <dt class="col-4 col-lg-2">{{ Str::title(trans('ui-bootstrap5::word.email')) }}</dt>
            <dd class="col-8 col-lg-4" data-crud-show-name="email"></dd>

            <dt class="col-4 col-lg-2">{{ Str::title(trans('ui-bootstrap5::word.last_login_date')) }}</dt>
            <dd class="col-8 col-lg-4" data-style="date" data-crud-show-type="datetime"
                data-crud-show-name="last_login_date"></dd>
            <dt class="col-4 col-lg-2">{{ Str::title(trans('ui-bootstrap5::word.last_login_ip')) }}</dt>
            <dd class="col-8 col-lg-4" data-crud-show-name="last_login_ip"></dd>

            <dt class="col-4 col-lg-2">{{ Str::title(trans('ui-bootstrap5::word.updated_at')) }}</dt>
            <dd class="col-8 col-lg-4" data-style="date" data-crud-show-type="datetime"
                data-crud-show-name="updated_at"></dd>
            <dt class="col-4 col-lg-2">{{ Str::title(trans('ui-bootstrap5::word.created_at')) }}</dt>
            <dd class="col-8 col-lg-4" data-style="date" data-crud-show-type="datetime"
                data-crud-show-name="created_at"></dd>
        </dl>
    </div>
</div>

{{-- CURD 스크립트 --}}
@push('after_app_scripts')
    <script>

    </script>
@endpush
