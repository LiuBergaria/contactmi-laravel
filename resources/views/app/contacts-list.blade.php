<div id="contacts-list" class="{{ $class ?? '' }}">
    <div>
        <button class="btn btn-primary btn-block">Adicionar</button>
    </div>
    <div>
        @foreach($contacts as $contact)
            <a>
                <img src="https://picsum.photos/200" alt="Foto">
                <div>
                    <strong>{{$contact->name}}</strong>
                    <span>{{$contact->phones[0]->phone ?? ''}}</span>
                </div>
            </a>
        @endforeach
    </div>
</div>