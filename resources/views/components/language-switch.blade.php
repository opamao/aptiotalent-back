<div class="me-3">
    <form action="{{ route('language.switch') }}" method="POST" class="inline-block">
        @csrf
        <select name="language" onchange="this.form.submit()" class="select">
            <option value="en" {{ app()->getLocale() === 'en' ? 'selected' : '' }}>
                <h6 class="d-flex align-items-center fw-medium">
                    <img src="{{ URL::asset('') }}assets/img/flags/us.png" class="me-2 avatar avatar-sm avatar-rounded"
                        alt="Img">
                    English
                </h6>
            </option>
            <option value="fr" {{ app()->getLocale() === 'fr' ? 'selected' : '' }}>
                <h6 class="d-flex align-items-center fw-medium">
                    <img src="{{ URL::asset('') }}assets/img/flags/fr.png" class="me-2 avatar avatar-sm avatar-rounded"
                        alt="Img">
                    French
                </h6>
            </option>
        </select>
    </form>
</div>
