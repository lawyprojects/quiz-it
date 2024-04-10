<div>

    <div class="col-lg-12 col-xl-6 col-md-12 col-sm-12">
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
                @unless(empty($quizQuestions))
                    <strong> {{count($quizQuestions)}} Questions</strong>
                @endunless
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-lg">
            <div class="card mg-b-20 wow fadeInUp reveal revealleft" id="list">
                <div class="card-header">
                    <h3 class="card-title">Quiz Questions  </h3>
                    <p class="mb-0 text-muted card-sub-title">Questions available for this quiz</p>
                </div>
                <div class="card-body">
                    <div class="text-wrap">
                        <div class="example">
                            @unless(empty($quizQuestions))
                            @foreach($quizQuestions as $question)
                                <div class="row row-sm">
                                    <div class="col-lg">
                                        <div class="alert alert-default" role="alert">
                                            <span class="alert-inner--icon"><i class="fe fe-check-square  d-inline-flex"></i></span>
                                            <span class="alert-inner--text">{{$question->question->question}}</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="row row-sm">
                                            <div class="col-lg">
                                                <button type="button" class="btn btn-icon btn-danger" wire:click="removeFromQuiz({{$question->question->id}})"><i class="fe fe-trash"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                
                            </div>
                            @endforeach
                        @endunless
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-lg">
            <div class="card mg-b-20 wow fadeInUp reveal revealleft" id="list1">
                <div class="card-header">
                    <h3 class="card-title">All Questions</h3>
                    <p class="mb-0  text-muted card-sub-title">Select questions to add to Quiz</p>
                </div>
                <div class="card-body">
                    <div class="text-wrap">
                        <div class="example">

                            @unless(empty($questions))
                            @foreach($questions as $question)
                            <div class="row row-sm">
                                <div class="col-lg">
                                    <div class="alert alert-default" role="alert">
                                        <span class="alert-inner--icon"><i class="fe fe-check-square  d-inline-flex"></i></span>
                                        <span class="alert-inner--text">{{$question->question}}</span>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="row row-sm">
                                        <div class="col-lg">
                                            <button type="button" class="btn btn-icon btn-primary" wire:click="addToQuiz({{$question->id}})"><i class="fe fe-plus"></i></button>
                                        </div>
                                    </div>
                                </div>
                               
                           </div>
                            @endforeach
                        @endunless

                        </div>
                    </div>
                </div>
            </div>
        </div>
       
    </div>
</div>