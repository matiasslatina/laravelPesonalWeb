<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="education">
        <div class="my-auto">
          <h2 class="mb-5 text-primary">@lang('education.education')</h2>

          @foreach (Lang::get('education.educations'); as $item)
            <div class="resume-item d-flex flex-column flex-md-row mb-5">
                <div class="resume-content mr-auto">
                <h3 class="mb-0">{{ $item['curse_name'] }}</h3>
                <div class="subheading mb-3">{{ $item['institute'] }}</div>
                <div>{!! $item['description'] !!}</div>
                </div>
                <div class="resume-date text-md-right">
                <span class="text-primary">{{ $item['date'] }}</span>
                </div>
            </div>
          @endforeach

          @foreach (Lang::get('education.certifications') as $item)
          <div class="resume-item d-flex flex-column flex-md-row mb-5">
              <div class="resume-content mr-auto">
              <h3 class="mb-0">{{ $item['title'] }}</h3>
              <div class="subheading mb-3">{{ $item['place'] }}</div>
              <div>{!! $item['description'] !!}</div>
              </div>
              <div class="resume-date text-md-right">
              <span class="text-primary">{{ $item['date'] }}</span>
              </div>
          </div>
        @endforeach

        </div>
      </section>
