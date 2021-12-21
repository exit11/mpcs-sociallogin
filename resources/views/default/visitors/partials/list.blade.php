<table class="table table-borderless table-hover align-middle mb-0 w-100">
    <thead class="thead-light">
        <tr class="d-none d-md-table-row border-bottom">
            <th class="text-center min-width-rem-4 d-none d-md-table-cell">
                @sortablelink('id', 'ID')
            </th>
            <th class="text-center">
                @sortablelink('email', trans('ui-bootstrap5::word.email'))
            </th>
            <th class="text-center min-width-rem-8 d-none d-md-table-cell">
                @sortablelink('name', trans('ui-bootstrap5::word.name'))
            </th>
            <th class="text-center min-width-rem-10 d-none d-md-table-cell">
                {{ trans('ui-bootstrap5::word.last_login_date') }}
            </th>
            <th class="text-center min-width-rem-10">
                @sortablelink('created_at', trans('ui-bootstrap5::word.created_at'))
            </th>
            <th class="text-center min-width-rem-3">
                {{ trans('ui-bootstrap5::word.actions') }}
            </th>
        </tr>
    </thead>
    <tbody class="crud-list">
        @forelse($datas as $data)
            <tr data-crud-id="{{ $data->id }}" class="border-bottom d-block d-md-table-row">
                <td data-name='id' class="text-md-center d-none d-md-table-cell">
                    {{ $data->id }}
                </td>
                <td class="text-start d-block d-md-table-cell">
                    {{ $data->email }}
                </td>
                <td data-name='name' class="d-none d-md-table-cell text-center">
                    {{ $data->name }}
                </td>
                <td data-name='last_login' class="d-none d-md-table-cell text-center">
                    {{ $data->last_login_date }}
                </td>
                <td data-name='created_at' class="d-none d-md-table-cell">
                    {{ $data->created_at }}
                </td>
                <td class="d-block d-md-table-cell text-end text-md-center">
                    <button class="btn-crud-show btn btn-sm btn-icon btn-success text-white align-middle"
                        title="{{ trans('ui-bootstrap5::word.button.show') }}">
                        <i class="mdi mdi-eye"></i>
                    </button>
                    {{-- <button class="btn-crud-delete btn btn-icon btn-danger text-white align-middle"
                        title="{{ trans('ui-bootstrap5::word.button.delete') }}">
                        <i class="mdi mdi-trash-can"></i>
                    </button> --}}
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6" class="text-center">{{ trans('ui-bootstrap5::word.crud.none_data') }}</td>
            </tr>
        @endforelse
    </tbody>
</table>

@isset($datas)
    <div class="mt-3 d-flex justify-content-center">
        {{ $datas->render(Bootstrap5::theme('partials.paginator')) }}
    </div>
@endisset
