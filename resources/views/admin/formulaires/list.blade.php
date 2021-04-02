<div data-response="OK" data-url="{{ $redirectUrl }}" id="table-formulaires">
    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>Nom</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @if(count($formulaires) == 0)
            <tr><p class="text-danger text-center">Aucun Formulaire</p></tr>
        @endif
        @foreach($formulaires as $f)
            <tr>
                <td>{{ $f->nom }}</td>
                <td><a href="{{ url('/admin/ajout-page/'.$f->id) }}" target="_blank">Ajouter page</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
