@if ($errors->any())
    <div class="container">
        <div class="notification is-danger mt-6">

            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach

        </div>
    </div>
@endif
