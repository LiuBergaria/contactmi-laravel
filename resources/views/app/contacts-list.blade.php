<div id="contacts-list" class="{{ $class ?? '' }}">
    <div>
        <button class="btn btn-primary btn-block">Adicionar</button>
    </div>
    <div>
        @for($i = 0; $i < 15; $i++)
            <a>
                <img src="https://picsum.photos/200" alt="Foto">
                <div>
                    <strong>Nome do Contato</strong>
                    <span>016 12345678</span>
                </div>
            </a>
        @endfor
    </div>
</div>