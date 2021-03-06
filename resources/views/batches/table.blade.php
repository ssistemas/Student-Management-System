<div class="table-responsive">
    <table class="table" id="batches-table">
        <thead>
            <tr>
                <th>Name</th>
                <th class="text-center">Year</th>
                <th colspan="3" class="pull-right" style="margin-right: 15px;">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($batches as $batch)
            <tr>
                <td>{{ $batch->name }}</td>
                <td class="text-center">{{ date('Y', strtotime($batch->year))  }}</td>
                <td>
                    {!! Form::open(['route' => ['batches.destroy', $batch->id], 'method' => 'delete']) !!}
                    <div class='btn-group pull-right'>
                        <a href="{{ route('batches.show', [$batch->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('batches.edit', [$batch->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
