<div data-response="OK" data-url="{{ $redirectUrl }}" id="table-pages">
    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>Numero</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @if(count($pages) == 0)
            <tr><p class="text-danger text-center">Aucun Page</p></tr>
        @endif
        @foreach($pages as $p)
            <tr>
                <td>Page #{{ $p->nom }}</td>
                <td><a href="{{ url('/admin/ajout-question/form='.$p->form->id.'&page='.$p->id) }}" target="_blank">Ajouter questions</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
