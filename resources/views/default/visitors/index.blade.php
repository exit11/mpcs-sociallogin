@extends(Bootstrap5::theme('layouts.crud'))

{{-- 브라우저 타이틀 --}}
@section('app_title', SocialLogin::menuTitle('mpcs-sociallogin::menu.visitors',
    config('mpcssociallogin.app_title.visitors')))

    {{-- 목록 서브타이틀 --}}
@section('crud_subtitle', SocialLogin::menuTitle('mpcs-sociallogin::menu.visitors',
    config('mpcssociallogin.subtitle.visitors')))

    {{-- 목록 타이틀 --}}
    {{-- @section('crud_list_title', SocialLogin::menuTitle('mpcs-sociallogin::menu.visitors', config('mpcssociallogin.list_title.visitors'))) --}}

    {{-- 사이트메뉴 인클루드 --}}
    {{-- @section('aside_left_nav')
    @include(SocialLogin::theme('visitors.partials.list_categories'), ['datas' => $categories])
@endsection --}}


    {{-- 검색폼 영역 --}}
@section('crud_search')
    @component(Bootstrap5::theme('components.aside_crud_search'))
        @include(SocialLogin::theme('visitors.partials.search'))
    @endcomponent
@endsection


{{-- 헤더 버튼 그룹 --}}
@section('crud_button_group')
    {{-- <button class="btn-crud-create btn btn-primary font-weight-bold"><i class="mdi mdi-account-plus mr-1"></i>
        {{ Str::title(trans('ui-bootstrap5::word.create')) }}</button> --}}
@endsection


{{-- 목록 그리드 영역 --}}
@section('crud_grid')
    {{-- @include(Bootstrap5::theme('visitors.partials.list')) --}}
@endsection


{{-- CRUD 모달 폼 영역 --}}
@section('crud_form')

    {{-- 생성 --}}
    {{-- @component(Bootstrap5::theme('components.modal_crud_create'), ['modalSize' => 'modal-lg'])
        {!! Form::open()->idPrefix('create_')->attrs(['class' => 'h-100']) !!}
        @include(SocialLogin::theme('visitors.partials.form'))
        {!! Form::close() !!}
    @endcomponent --}}

    {{-- 수정 --}}
    {{-- @component(Bootstrap5::theme('components.modal_crud_edit'), ['modalSize' => 'modal-lg'])
        {!! Form::open()->idPrefix('edit_')->method('put')->attrs(['class' => 'h-100']) !!}
        @include(SocialLogin::theme('visitors.partials.form'))
        {!! Form::close() !!}
    @endcomponent --}}

    {{-- 보기 --}}
    @component(Bootstrap5::theme('components.modal_crud_show'), ['modalSize' => 'modal-lg', 'editButtonHide' => true])
        {{-- 컨텐츠 인클루드 --}}
        @include(SocialLogin::theme('visitors.partials.show'))
    @endcomponent

    {{-- 삭제 --}}
    {{-- @component(Bootstrap5::theme('components.modal_crud_delete'))
    @endcomponent --}}

@endsection



{{-- 스크립트 템플릿 --}}
@push('header_script')

    {{-- 보기 : 카테고리, 첨부파일 --}}
    @component(SocialLogin::theme('visitors.partials.script_templates'))
    @endcomponent
@endpush


@push('after_app_src_scripts')
    <script src="/vendor/mpcs-ui/bootstrap5/js/crud.js"></script>
@endpush

{{-- CURD 스크립트 추가 --}}
@push('after_app_scripts')
    <script>
        window.CRUD.init();
    </script>
@endpush
