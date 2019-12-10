<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="skills">
    <div class="my-auto">
        <h2 class="mb-5 text-primary">@lang('skills.skills')</h2>

        <div class="subheading mb-3">@lang('skills.description')</div>
        <ul class="list-inline list-icons">

        @foreach (Lang::get('skills.lenguajes') as $item)
        <li class="list-inline-item">
                <i class="devicons {{$item['class']}}" title="{{$item['title']}}"></i>
            </li>
        @endforeach

        </ul>
    </div>
</section>
