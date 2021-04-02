<div data-response="OK" data-url="{{ $redirectUrl }}" id="table-reponses">
    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>Numero</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @if(count($reponses) == 0)
            <tr><p class="text-danger text-center">Aucun reponse</p></tr>
        @endif
        @foreach($reponses as $p)
            <tr>
                <td>{{ $p->reponse }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
