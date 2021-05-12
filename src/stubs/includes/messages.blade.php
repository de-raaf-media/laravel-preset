@foreach (['danger', 'warning', 'success', 'info'] as $msg)
    @if(Session::has('alert-' . $msg))
        <div class="container">
            <div class="notification is-{{ $msg }} mt-6">
                {{ Session::get('alert-' . $msg) }}
            </div>
        </div>
    @endif
@endforeach
