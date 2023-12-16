<h1>Nova Relatorio</h1>

<form action="{{ route('reports.store') }}" method="POST">
    {{-- <input type="hidden" value="{{ csrf_token() }}" name="_token" > --}}
    @csrf()
    <input type="text" name="date" id="date" placeholder="data">
    <input type="text" name="action" id="action" placeholder="Adiciona a ação">
    <textarea name="body" cols="30" rows="5" placeholder="Caso seja necessário alguma observação"></textarea>
    <button type="submit">Salvar</button>
</form>