<div>

    <div class="main-demo main-demo-1 spacing-top overflow-hidden reveal" id="home">
        <div class="container px-sm-0">

            @if($this->quizComplete() == false)
            <div class="row">
                <div class="col-xl-12 col-lg animation-zidex pos-relative">
                    <h4 class="fw-semibold mt-7 text-white">Question {{ $this->questionNumber()}}</h4>
                    <h1 class="text-start fw-bold text-white display-1" style="font-size: 4.5em;">{{ isset($question) ?
                        $question->question : ""}}
                    </h1>

                </div>

            </div>

            <div class="row">
                @unless (empty($answers))
                @foreach ($answers->chunk(2) as $chunk)
                <div class="row">
                    @foreach ($chunk as $answer)


                    <div class="col-lg-6">

                        <a href="javascript:void(0);" wire:click="selectAnswer({{$answer->id}})">


                            <div class="card custom-card bg-secondary-gradient">
                                <div class="card-body">
                                    <div class="mb-2">
                                        <div class="row">
                                            <div class="col-lg-10">
                                                <p class="mb-0 font-weight-semibold">
                                                <h1 class="text-start fw-bold text-white display-1"
                                                    style="font-size: 3.5em;">{{$answer->answer}}
                                                </h1>
                                                </p>
                                            </div>
                                            @if($this->showAnswers() == false)
                                            @if($this->answerSelected($answer->id))
                                            <div class="col-lg-2">
                                                <img src="{{ asset('assets/img/tick.svg')}}"
                                                    class="float-sm-right wd-50p wd-sm-100 mg-t-10 mg-sm-t-0" />

                                            </div>
                                            @endif
                                            @endif

                                            @if($this->showAnswers())
                                            <div class="col-lg-2">
                                                @if($answer->is_correct == 1)
                                                <img src="{{ asset('assets/img/tick.svg')}}"
                                                    class="float-sm-right wd-50p wd-sm-100 mg-t-10 mg-sm-t-0" />
                                                @else
                                                <img src="{{ asset('assets/img/close.svg')}}"
                                                    class="float-sm-right wd-50p wd-sm-100 mg-t-10 mg-sm-t-0" />
                                                @endif
                                            </div>
                                            @endif



                                        </div>
                                    </div>
                                </div>
                        </a>
                    </div>

                    {{-- <div class="d-grid gap-2">
                        <button class="button bg-orange " wire:click="selectAnswer({{$answer->id}})">


                            <div class="alert bg-orange button">
                                <div class="row">
                                    <div class="col-lg-10">
                                        <span class="alert-inner--text">
                                            <h1 class="text-start fw-bold text-white display-1"
                                                style="font-size: 3.5em;">{{$answer->answer}}
                                            </h1>

                                        </span>
                                    </div>
                                    @if($this->showAnswers() == false)
                                    @if($this->answerSelected($answer->id))
                                    <div class="col-lg-2">
                                        <img src="{{ asset('assets/img/tick.svg')}}"
                                            class="float-sm-right wd-50p wd-sm-100 mg-t-10 mg-sm-t-0" />

                                    </div>
                                    @endif
                                    @endif



                                    @if($this->showAnswers())
                                    <div class="col-lg-2">
                                        @if($answer->is_correct == 1)
                                        <img src="{{ asset('assets/img/tick.svg')}}"
                                            class="float-sm-right wd-50p wd-sm-100 mg-t-10 mg-sm-t-0" />
                                        @else
                                        <img src="{{ asset('assets/img/close.svg')}}"
                                            class="float-sm-right wd-50p wd-sm-100 mg-t-10 mg-sm-t-0" />
                                        @endif
                                    </div>
                                </div>
                                @endif

                            </div>
                        </button>
                    </div> --}}





                </div>
                @endforeach

            </div>
            @endforeach

            @endunless

        </div>
        @endif

        <!--Correct -->
        
        @if($this->questionAnswered() && $this->quizComplete() == false)
            @if($this->answerCorrect() == true)
            <x-quiz.correct-alert />
            @endif
        @endif

        <!--In Correct -->
        @if($this->questionAnswered() && $this->quizComplete() == false)
            @if($this->answerCorrect() == false)
            <x-quiz.in-correct-alert />
            @endif
        @endif

        <div class="row height">

            @if($this->quizComplete() == false)
            <div class="col-lg-4">
                <a href="javascript:void(0);" wire:click="endQuiz">
                    <div class="card custom-card bg-info-gradient">
                        <div class="card-body">
                            <div class="mb-2">
                                <p class="mb-0 font-weight-semibold">
                                <h3 class="text-center fw-bold">End Quiz</h3>
                                </p>
                            </div>

                        </div>
                    </div>
                </a>

            </div>
            @endif

            <div class="col-lg-4">
            </div>
            <div class="col-lg-4">
                <div class="row height">
                    <div class="col-lg">
                        @if($this->showCompleteQuiz() == false)
                            @if($this->questionAnswered())
                            <a href="javascript:void(0);" wire:click="nextQuestion"
                            >
                                <div class="card custom-card bg-secondary-gradient">
                                    <div class="card-body">
                                        <p class="mb-0 font-weight-semibold">
                                         <h3 class="text-center fw-bold">Next Question</h3></i>
                                        </p>
                                    </div>
                                </div>
                            </a>
                            @else

                            <a href="javascript:void(0);" wire:click="submitAnswers"
                                >
                                <div class="card custom-card bg-success-gradient">
                                    <div class="card-body">
                                        <p class="mb-0 font-weight-semibold">
                                <h3 class="text-center fw-bold">Submit</h3></p>
                                    </div>
                                </div>
                            </a>
                            @endif

                        @endif

                        @if($this->showCompleteQuiz() && $this->quizComplete() == false)
                            <a href="javascript:void(0);" wire:click="completeQuiz"
                                >
                                <div class="card custom-card bg-secondary-gradient">
                                    <div class="card-body">
                                <h3 class="text-center fw-bold">Complete Quiz</h3>
                                    </div>
                            </a>
                        @endif
                    </div>
                </div>
             
                <div class="d-flex align-items-right justify-content-between">

                    {{-- @if($this->quizComplete() == false)
                    <div class="d-flex align-items-right justify-content-between">
                        <a href="javascript:void(0);" wire:click="endQuiz"
                            class="btn ripple btn-min w-lg mb-3 me-2 btn-info">
                            <h3 class="text-center fw-bold">End Quiz</h3>
                            {{-- <i class="fe fe-skip-forward me-2"></i> --}}
                        </a>



                    </div>
                    {{-- @endif --}}
                    <div class="d-flex align-items-right justify-content-between">




                    </div>







                </div>
            </div>
        </div>

        @if($this->quizComplete())
        <div class="demo-screen-headline main-demo main-demo-1 spacing-top overflow-hidden reveal" id="home">
            <div class="container px-sm-0">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 animation-zidex pos-relative">
                        <h3 class="fw-semibold mt-7 text-white">Quiz it</h3>
                        <h1 class="text-start fw-bold text-white" style="font-size: 3.5em;">Score: {{$this->quizScore()}}</h1>
                        <h4 class="pb-3 text-white">
                            Thank you for participating in our quiz! Your enthusiasm and engagement made it a truly
                            enjoyable experience. We hope you had fun testing your knowledge, and we appreciate your
                            support. Stay tuned for more exciting quizzes and events in the future!</h4>

                        <a href="javascript:void(0);" wire:click="closeWindow"
                            class="btn ripple btn-min w-lg mb-3 me-2 btn-secondary"><i class="fe fe-play me-2"></i>
                            Close Window
                        </a>

                    </div>
                    <div class="col-xl-6 col-lg-6 my-auto">
                        <img src="{{ asset('assets/landing/images/image-1.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        @endif

    </div>
</div>
<!-- ROW CLOSED -->


</div>