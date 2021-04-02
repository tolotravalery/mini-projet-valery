<div data-response="OK" data-url="{{ $redirectUrl }}" id="table-questions">
    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>Question ?</th>
            <th>Type</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @if(count($questions) == 0)
            <tr><p class="text-danger text-center">Aucun Question</p></tr>
        @endif
        @foreach($questions as $p)
            <tr>
                <td>{{ $p->question }}</td>
                <td>{{ $p->type }}</td>
                <td><a href="" target="_blank">Ajouter reponse</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
