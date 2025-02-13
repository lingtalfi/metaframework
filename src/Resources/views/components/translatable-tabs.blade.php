<x-mfw::language-tabs id="{{ $id }}"/>
<div class="tab-content pt-4">
    @foreach(config('mfw.translatable.locales') as $locale)
        <div class="tab-pane fade {!! $locale == app()->getLocale() ? 'show active': null !!}"
             id="{{ $id }}_translatable_{{ $locale }}"
             role="tabpanel"
             aria-labelledby="{{ $id }}_translatable__btn_{{ $locale }}">
            <div class="row mb-4">
                <x-mfw::fillable-parser :datakey="$datakey" :fillables="$fillables" :model="$model" :locale="$locale" :disabled="$disabled" :parsed="$pluck"/>
            </div>
        </div>
    @endforeach
</div>