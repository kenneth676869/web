<div class="table-responsive">
    <table class="table" id="dota2s-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Hero Type</th>
        <th>Hero Skills</th>
        <th>Rating</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($dota2s as $dota2)
            <tr>
                <td>{{ $dota2->name }}</td>
            <td>{{ $dota2->hero_type }}</td>
            <td>{{ $dota2->hero_skills }}</td>
            <td>{{ $dota2->rating }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['dota2s.destroy', $dota2->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('dota2s.show', [$dota2->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('dota2s.edit', [$dota2->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
