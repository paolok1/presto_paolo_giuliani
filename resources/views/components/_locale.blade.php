<form class="d-inline" action="{{ route('setLocale', $lang)}}" method="POST">
    @csrf
    <button type="submit" class="btn">
        <img src="{{ asset('vendor/blade-flags/language-' . $lang . '.svg')}}" width="16" height="16">
    </button>
</form>

<!-- <h1 class="display-1">{{__('ui.hello') }}</h1>
<h1 class="display-1">{{__('ui.allArticles') }}</h1>
<h1 class="display-1">{{__('ui.homepage') }}</h1>
<h1 class="display-1">{{__('ui.search') }}</h1> -->
