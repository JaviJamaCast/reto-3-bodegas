@props(['url'])
<tr>
    <td class="header">
        <a href="{{ $url }}" style="display: inline-block;">
            @if (trim($slot) === 'Killer')
                <img src="{{ asset('images/Logo.png') }}" class="logo" alt="Kille Logo">
            @else
                {{ $slot }}
            @endif
        </a>
    </td>
</tr>
