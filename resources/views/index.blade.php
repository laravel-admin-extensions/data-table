@php($id = 'datatable-' . uniqid())
<table id="{{ $id }}" {!! $attributes !!} style="width:100%">
    <thead>
    <tr>
        @foreach($headers as $header)
            <th>{{ $header }}</th>
        @endforeach
    </tr>
    </thead>
    <tbody>
    @foreach($rows as $row)
        <tr>
            @foreach($row as $item)
                <td>{!! $item !!}</td>
            @endforeach
        </tr>
    @endforeach
    </tbody>
</table>

<script>
    $(function () {
        $('#{{ $id }}').DataTable(
            {!! $options !!}
        )
    })
</script>
