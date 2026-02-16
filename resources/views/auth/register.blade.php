<x-layout>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-12 text-center">
            <h1 class="display-4 pt-5">{{ __('ui.register') }}</h1>
        </div>
    </div>
    <div class="row justify-content-center align-items-center height-custom">
        <div class="col-12 col-md-6">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST"
                  action="{{ route('register') }}" class="bg-secondary-subtle shadow rounded p-5 ">
                @csrf
            <div class="mb-3">
                <label for="name" class="form-label">{{ __('ui.name') }}:</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>   
            <div class="mb-3">
                <label for="registerEmail" class="form-label">{{ __('ui.email') }}:</label>
                <input type="email" class="form-control" id="registerEmail" name="email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">{{ __('ui.password') }}:</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="mb-3">
                <label for="password_confirmation" class="form-label">{{ __('ui.confirmPassword') }}:</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
            </div>
            <button type="submit" class="btn btn-primary">{{ __('ui.register') }}</button>
            </form>
        </div>
    </div>
    <x-_locale lang="it" />
    <x-_locale lang="en" />
    <x-_locale lang="es" />

</div>

</x-layout>