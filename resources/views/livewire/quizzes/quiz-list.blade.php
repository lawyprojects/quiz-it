<div>
    <div class="row row-sm">
        <!-- Alerts -->
        @if (session('success_message'))
            <x-alerts.success-alert message="{{ session('success_message') }}" />
        @elseif(session('error_message'))
            <x-alerts.error-alert message="{{ session('error_message') }}" />
        @endif


        <div class="row">
        @unless(empty($quizzes))
            @foreach($quizzes as $quiz)
            <div class="col-lg-12 col-xl-6 col-md-12 col-sm-12 p-2">
                <div class="card wow fadeInUp reveal revealleft" >
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="d-flex align-items-center">
                                    <div class="settings-main-icon me-4"><i class="fe fe-home"></i></div>
                                    <div>
                                        <p class="tx-20 font-weight-semibold d-flex mb-0">{{ $quiz->name}}</p>
                                        <p class="tx-13 text-muted mb-0">{{ $quiz->description}}</p>
                                     </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a href="{{route('quiz-questions-page',['id' => $quiz->id])}}" class="tx-14 mb-0 d-flex align-items-center"><i class="ri-settings-4-line me-1"></i>Manage Questions</a>
                        <label class="form-switch float-end mb-0">
                            <a href="javascript:void(0);" class="tx-14 mb-0 me-2">Restore default</a>
                            <input type="checkbox" name="form-switch-checkbox3" class="form-switch-input">
                            <span class="form-switch-indicator custom-radius"></span>
                        </label>
                    </div>
                </div>
            </div>
            @endforeach
        @endunless
        </div>
    </div>
   
</div>
