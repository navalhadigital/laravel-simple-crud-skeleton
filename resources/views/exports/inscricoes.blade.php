<table>
    <thead>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>Estado</th>
        <th>Cidade</th>
    </tr>
    </thead>
    <tbody>
    @foreach($inscricoes as $inscricao)
        <tr>
            <td>{{ $inscricao->nome }}</td>
            <td>{{ $inscricao->email }}</td>
            <td>{{ $inscricao->telefone }}</td>
            <td>{{ $inscricao->estado->sigla }}</td>
            <td>{{ $inscricao->cidade->nome }}</td>
        </tr>
    @endforeach
    </tbody>
</table>