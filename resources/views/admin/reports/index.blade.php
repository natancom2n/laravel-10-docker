<h1>Listagem dos relatórios</h1>

<a href="{{route('reports.create')}}">Criar Ação</a>

<table>
    <thead>
        <th>Data</th>
        <th>Ação</th>
        <th>Observação</th>
        <th>Status</th>
    </thead>
    <tbody>
        @foreach ($reports as $report)
            <tr>
                <td>{{ $report->date}}</td>
                <td>{{ $report->action}}</td>
                <td>{{ $report->body}}</td>
                <td>{{ $report->status}}</td>
                <td>
                    <a href="{{ route('reports.show', $report->id) }}">#</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>