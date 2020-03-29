@extends('admin.layout.admin')

@section('content')

    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("option.create") }}">
                Add Option
            </a>
        </div>
    </div>

<div class="card">
    

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Option">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th style="text-align:center;">
                            Id
                        </th>
                        <th style="text-align:center;">
                            Question
                        </th>
                        <th style="text-align:center;">
                            Option_text
                        </th>
                        <th style="text-align:center;">
                            Points
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($options as $key => $option)
                        <tr data-entry-id="{{ $option->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $option->id ?? '' }}
                            </td>
                            <td>
                                {{ $option->question->question_text ?? '' }}
                            </td>
                            <td>
                                {{ $option->option_text ?? '' }}
                            </td>
                            <td>
                                {{ $option->points ?? '' }}
                            </td>
                            <td>
                                <a class="btn btn-xs btn-primary" href="{{ route('option.show', $option->id) }}">
                                    view
                                </a>
                                

                                <a class="btn btn-xs btn-info" href="{{ route('option.edit', $option->id) }}">
                                    edit
                                </a>  
                                <form action="{{ route('option.destroy', $option->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="submit" class="btn btn-xs btn-danger" value="delete">
                                </form>
                                

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('option_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.options.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  $('.datatable-Option:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
@endsection