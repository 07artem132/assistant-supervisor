@section('language_bar')
    @desktop
    <style>
        .dropdown.bootstrap-select {
            width: 150px;
        }

        .bootstrap-select:not([class*="col-"]):not([class*="form-control"]):not(.input-group-btn) {
            width: 150px;
        }
    </style>
    @elsedesktop
    <style>
        .dropdown.bootstrap-select {
            width: 70px;
        }

        .bootstrap-select:not([class*="col-"]):not([class*="form-control"]):not(.input-group-btn) {
            width: 70px;
        }

    </style>
    @enddesktop

    <div class="language_bar">
        @desktop
        <select id="language" class="selectpicker">
            <option data-icon="flag-icon flag-icon-ru" value="ru"
                    @if (App::getLocale() == 'ru')
                    selected
                    @endif
            >Русский
            </option>
            <option data-icon="flag-icon flag-icon-ua" value="uk"
                    @if (App::getLocale() == 'uk')
                    selected
                    @endif
            >Український
            </option>
            <option data-icon="flag-icon flag-icon-us" value="en"
                    @if (App::getLocale() == 'en')
                    selected
                    @endif
            >English
            </option>
        </select>
        @elsedesktop
        <select class="selectpicker">
            <option data-icon="flag-icon flag-icon-ru" value="ru"
                    @if (App::getLocale() == 'ru')
                    selected
                    @endif
            >
            </option>
            <option data-icon="flag-icon flag-icon-ua" value="uk"
                    @if (App::getLocale() == 'uk')
                    selected
                    @endif
            >
            </option>
            <option data-icon="flag-icon flag-icon-us" value="en"
                    @if (App::getLocale() == 'en')
                    selected
                    @endif
            >
            </option>
        </select>
        @enddesktop
    </div>
@endsection
