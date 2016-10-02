<ul>
    @foreach ($facultades as $facultad)
    <li>
    {{ $facultad->nombre }}
    </li>
    @endforeach
</ul>

<ul>
    @foreach ($sede_facultades as $facultad)
        @if (!in_array($facultad->id, $facultades_id))
    <li>
            {{ $facultad->nombre }}

    </li>
        @endif
    @endforeach
</ul>