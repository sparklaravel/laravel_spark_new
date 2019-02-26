@extends('spark::layouts.default_app')

@section('title', 'Page Title')

@section('content')

    <!--MAIN CSS + PLUGINS-->
    <link rel="stylesheet" href="css/libs.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/media.css">
    <link rel="stylesheet" href="libs/chartist.min.css">


<section class="main__userpage">
      <div class="d-flex">
          <!--Left side navigation-->
          <nav>
            <div style="width:75px;"class="nav nav-tabs d-flex flex-column justify-content-center align-items-center" id="nav-tab" role="tablist">

              <a class="nav-item active" id="nav-home-tab" data-toggle="tab" href="#dashboard" role="tab" aria-controls="nav-home" aria-selected="true">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="24" viewBox="0 0 22 24">
                <path  fill-rule="nonzero" d="M19.556 2.4h-5.11a3.675 3.675 0 0 0-6.893 0H2.444C1.1 2.4 0 3.48 0 4.8v16.8C0 22.92 1.1 24 2.444 24h17.112C20.9 24 22 22.92 22 21.6V4.8c0-1.32-1.1-2.4-2.444-2.4zM11 2.4c.672 0 1.222.54 1.222 1.2 0 .66-.55 1.2-1.222 1.2-.672 0-1.222-.54-1.222-1.2 0-.66.55-1.2 1.222-1.2zm0 4.8c2.029 0 3.667 1.608 3.667 3.6S13.029 14.4 11 14.4s-3.667-1.608-3.667-3.6S8.971 7.2 11 7.2zm7.333 14.4H3.667v-1.68c0-2.4 4.889-3.72 7.333-3.72s7.333 1.32 7.333 3.72v1.68z"/>
                </svg>
              </a>

              <a class="nav-item" id="nav-profile-tab" data-toggle="tab" href="#create-poll" role="tab" aria-controls="nav-profile" aria-selected="false">
                  <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22">
                    <g  fill-rule="evenodd">
                        <rect width="4" height="22" x="9" rx="2"/>
                        <rect width="4" height="22" x="9" rx="2" transform="rotate(-90 11 11)"/>
                    </g>
                  </svg>
              </a>

              <a class="nav-item" id="nav-contact-tab" data-toggle="tab" href="#poll-results" role="tab" aria-controls="nav-contact" aria-selected="false">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22">
                  <path  fill-rule="nonzero" d="M9.625 7.876V0C4.278.55 0 5.269 0 11s4.278 10.45 9.625 11v-7.876c-1.07-.451-2.139-1.672-2.139-3.124 0-1.452 1.07-2.673 2.139-3.124zm4.74 1.749H22C21.487 4.545 17.722.503 12.375 0v7.657c1.07.321 1.626 1.048 1.99 1.968zm-1.99 4.718V22c5.347-.503 9.112-4.545 9.625-9.625h-7.636c-.363.92-.92 1.647-1.989 1.968z"/>
                </svg>
              </a>
            </div>
          </nav>

          <!--Main content from the right side-->
          <div class="container tab-content" id="nav-tabContent">

            <!--DASHBOARD-->
            <div class="tab-pane fade show active" id="dashboard" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="container">

                  <!--Database block-->
                  <h1 class="database-heading">Database</h1>
                  <div class="database-block default-white-block">
                    <div class="row">
                      <div class="col-lg-4 col-md-3 col-sm-4 d-flex flex-column align-items-center">
                        <img src="img/userpage/create-poll.svg" alt="Create new poll">
                      </div>
                      <div class="col-lg-8 col-md-9 col-sm-8 d-flex flex-column align-items-md-start align-items-lg-start align-items-sm-start align-items-center">
                        <p class="database-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas autem molestias architecto nam dicta ut dolore?</p>
                          <div class="nav nav-tabs d-flex flex-column justify-content-center align-items-center" id="nav-tab" role="tablist">
                            <a class="nav-item" id="nav-profile-tab" data-toggle="tab" href="#create-poll" role="tab" aria-controls="nav-profile" aria-selected="false">
                              <button class="style-lg-btn">create new poll</button>
                            </a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!--Information poll block-->
                  <div class="poll-information-block default-white-block">
                    <div class="row poll-detailed-description">
                      <div class="col-lg-7 col-md-8 col-sm-6 d-flex justify-content-center justify-content-xl-start justify-content-lg-start justify-content-md-start justify-content-sm-start">
                        <img class="operation-img" src="img/userpage/poll-saver.svg" alt="Poll saver image">
                        <div class="d-flex flex-column">
                          <h3 class="operation-name">
                          {{ (!empty($last_poll->poll_name) ? $last_poll->poll_name : '') }}
                          </h3>
                          <div class="d-flex information-poll-list">
                            <span id="number-of-questions-poll">1 question</span>
                            <span id="creation-date-poll">
                            {{ (!empty($last_poll->created_at) ? $last_poll->created_at : '') }}
                            </span>
                            <span id="creation-time-poll"></span>
                              <div class="nav nav-tabs d-flex flex-column justify-content-center align-items-center" id="nav-tab" role="tablist">
                                <a class="nav-item view-poll-link" id="nav-profile-tab" data-toggle="tab" href="#poll-results" role="tab" aria-controls="nav-profile" aria-selected="false"><img src="img/userpage/view.svg" alt="View image"> view</a>
                              </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-5 col-md-4 col-sm-6 d-flex justify-content-lg-end justify-content-md-end justify-content-sm-end align-items-lg-start align-items-md-center align-items-sm-center justify-content-xl-end justify-content-center answers-block">
                        <svg class="number-of-answers-img" xmlns="http://www.w3.org/2000/svg" width="25" height="23" viewBox="0 0 25 23">
                          <g fill="none" fill-rule="evenodd">
                              <path d="M-3-3h30v30H-3z"/>
                              <path fill="#9D9D9D" fill-rule="nonzero" d="M24.5 15.762l.031-.012v5.732a1.25 1.25 0 0 1-2.134.884L19.531 19.5H4.5a3.75 3.75 0 0 1-3.75-3.75V4.5A3.75 3.75 0 0 1 4.5.75h16.25A3.75 3.75 0 0 1 24.5 4.5v11.262z" opacity=".3"/>
                              <path fill="#000" fill-rule="nonzero" d="M6.375 12a1.875 1.875 0 1 1 0-3.75 1.875 1.875 0 0 1 0 3.75zm6.25 0a1.875 1.875 0 1 1 0-3.75 1.875 1.875 0 0 1 0 3.75zm6.25 0a1.875 1.875 0 1 1 0-3.75 1.875 1.875 0 0 1 0 3.75z" opacity=".3"/>
                          </g>
                        </svg>
                        <p id="number-of-answers-poll">0</p>
                        <span class="description-text-poll">answers</span>
                      </div>
                    </div>
                    <div class="d-flex justify-content-xl-start justify-content-lg-start justify-content-md-start justify-content-sm-start justify-content-center">
                        <a href="#">
                          <button class="link-see-all-posts" data-toggle="modal" data-target="#allPolls">See all posts</button>
                        </a> 
                    </div>
                    
                  </div>

                  <!-- All Polls-->

                  <div class="modal fade" id="allPolls" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div style="max-width: 1200px !important;" class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">All poll posts</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div>
                                    <div v-for="id in ids" class="form-group">    
                                        <table class="table table-hover table-bordered">

                                            <thead>
                                                <tr class="text-center">
                                                    <th>Name</th>
                                                    <th>Type</th>
                                                    <th>Question</th>
                                                    <th>Audience</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach( $all_polls as $all_poll)
                                                <tr class="text-center">
                                                  <th>{{ $all_poll->poll_name }}</th>
                                                  <th>{{ $all_poll->poll_type }}</th>
                                                  <th>{{ $all_poll->poll_question }}</th>
                                                  <th>{{ $all_poll->poll_audience }}</th>
                                                </tr>
                                            @endforeach                 
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>{{-- /modal-content --}}
                    </div>{{-- /modal-dialog --}}
                </div>{{-- /modal fade --}}
      
                  <!--Poll graphs-->
                  <div class="poll-graphs default-white-block">
                    <div class="row">
                        <div class="col-lg-6">
                            <div>
                                <h3>Current active</h3>
                                <div>
                                    <div class="card-block">
                                        <div id="bar-chart" class="height-600">
                                          <table>
                                            <tbody>
                                            @foreach ($active_polls as $active_poll)
                                              <tr>
                                                <th>
                                                  {{ $active_poll->poll_name }}
                                                </th>
                                              </tr>
                                              @endforeach
                                            </tbody>
                                          </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                          <div>
                              <h3>Live polls</h3>
                              <div>
                                  <div class="card-block">
                                      <div id="bar-chart2" class="height-400">                       
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                    </div>
                  </div>

                  <!--Poll progress bars-->
                  <div class="poll-progress-bars default-white-block">
      
                    <div class="row progress-bars-info">
                      <div class="col-lg-6 col-md-6 d-flex justify-content-lg-start justify-content-md-start justify-content-sm-start justify-content-center">
                        <p class="poll-progress-bars-description">Lorem ipsum ipsum</p>
                        <button id="value-x">
                          $ 15,32323
                        </button>
                      </div>
                      <div class="col-lg-6 col-md-6 pb-block">
                          <div class="progress">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                      </div>
                    </div>
      
                    <div class="row progress-bars-info">
                      <div class="col-lg-6 col-md-6 d-flex justify-content-lg-start justify-content-md-start justify-content-sm-start justify-content-center">
                          <p class="poll-progress-bars-description">Lorem ipsum ipsum</p>
                          <button id="value-y">$ 16,32323</button>
                      </div>
                      <div class="col-lg-6 col-md-6">
                          <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                      </div>
                    </div>
      
                    <div class="row progress-bars-info">
                      <div class="col-lg-6 col-md-6 d-flex justify-content-lg-start justify-content-md-start justify-content-sm-start justify-content-center">
                        <p class="poll-progress-bars-description">Lorem ipsum ipsum</p>
                        <button id="value-z">$ 16,32323</button>
                      </div>
                      <div class="col-lg-6 col-md-6">
                          <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 90%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                      </div>
                    </div>
      
                    <div class="row progress-bars-info">
                      <div class="col-lg-6 col-md-6 d-flex justify-content-lg-start justify-content-md-start justify-content-sm-start justify-content-center">
                          <p class="poll-progress-bars-description">Lorem ipsum ipsum</p>
                          <button id="value-j">$ 16,32323</button>
                      </div>
                      <div class="col-lg-6 col-md-6">
                          <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 30%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                      </div>
                    </div>
      
                    <div class="row progress-bars-info">
                      <div class="col-lg-6 col-md-6 d-flex justify-content-lg-start justify-content-md-start justify-content-sm-start justify-content-center">
                          <p class="poll-progress-bars-description">Lorem ipsum ipsum</p>
                          <button id="value-k">$ 16,32323</button>
                      </div>
                      <div class="col-lg-6 col-md-6">
                          <div class="progress">
                            <div class="progress-bar bg-default" role="progressbar" style="width: 70%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                      </div>
                    </div>
                  </div>
      
                  <!--Poll circle progress bars-->
                  <div class="poll-circle-pbars default-white-block">
                    <h3>Informations</h3>
                    <div class="row">
                      
                      <div class="col-lg-7 col-sm-12 d-flex justify-content-lg-start justify-content-md-center justify-content-sm-center justify-content-center circle-pbars">
                        <div class="d-flex flex-column align-items-center pbar">
                          <div id="yearly"></div>
                          <p>Yearly</p>
                        </div>
      
                        <div class="d-flex flex-column align-items-center pbar">
                          <div id="monthly"></div>
                          <p>Monthly</p>
                        </div>
      
                        <div class="d-flex flex-column align-items-center">
                          <div id="weekly"></div>
                          <p>Weekly</p>
                        </div>
      
                      </div>
      
                      <div class="col-lg-5 col-sm-12 d-flex flex-column poll-stats justify-content-center">
                        <div class="d-flex stats-fullinfo-block">
                          <div class="col-lg-7 col-9 d-flex">
                              <span class="stats-amount-value">$2,680</span>
                              <p class="stats-amount-description">Mabelle Cook</p>
                          </div>
                          <div class="col-lg-5 col-3 d-flex justify-content-end">
                            <span class="stats-amount-number yearly-stats">10</span>
                          </div>
                        </div>
      
                        <hr>
      
                        <div class="d-flex stats-fullinfo-block">
                          <div class="col-lg-7 col-9 d-flex">
                              <span class="stats-amount-value">$2,680</span>
                              <p class="stats-amount-description">Mabelle Cook</p>
                          </div>
                          <div class="col-lg-5 col-3 d-flex justify-content-end">
                            <span class="stats-amount-number monthly-stats">32</span>
                          </div>
                        </div>
      
                        <hr>
      
                        <div class="d-flex stats-fullinfo-block ">
                          <div class="col-lg-7 col-9 d-flex">
                              <span class="stats-amount-value">$2,680</span>
                              <p class="stats-amount-description">Mabelle Cook</p>
                          </div>
                          <div class="col-lg-5 col-3 d-flex justify-content-end">
                            <span class="stats-amount-number weekly-stats">68</span>
                          </div>
                        </div>
      
                      </div>
                    </div>
                  </div>

                </div>

            </div>

            <!--CREATE NEW POLL-->
            <div class="tab-pane fade" id="create-poll" role="tabpanel" aria-labelledby="nav-profile-tab">
                <div class="d-flex justify-content-center">
                  <h1>Create new poll</h1>
                </div>

                {{-- НОВОЕ --}}
              <form class="form" action="{{ url('/home/create_poll') }}" method="POST">
                @csrf
                  <div class="container">

                  <input type="hidden" name="poll_status" value="active">

                    <!--Name your poll-->
                    <div class="row poll-name-block">
                      <div class="col-lg-12 d-flex flex-column">
                          <label class="createpage-label" for="createpage-poll-name">Name your poll</label>
                          <input name="poll_name" id="createpage-poll-name" type="text">
                      </div>
                    </div>

                    <!--Type of poll-->
                    <div class="poll-type-block">
                      <label class="createpage-label" for="">Type of poll</label>
                      <div class="row">
                        <div class="col-lg-4 col-md-12 d-flex justify-content-center">
                          <label class="type-container-checkbox">
                            <input name="poll_type" type="radio" value="Single choice">
                            <span class="checkmark"><img src="img/dot.svg" alt=""> Single choice</span>
                          </label>
                        </div>
                        <div class="col-lg-4 col-md-12 d-flex justify-content-center">
                          <label class="type-container-checkbox">
                            <input name="poll_type" type="radio" name="radio" value="Dropdown list">
                            <span class="checkmark"><img src="img/down-arrow-decoration.svg" alt=""> Dropdown list</span>
                          </label>
                        </div>
                        <div class="col-lg-4 col-md-12 d-flex justify-content-center">
                          <label class="type-container-checkbox">
                            <input name="poll_type" type="radio" name="radio" value="Multiple choice">
                            <span class="checkmark"><img src="img/checkmark.svg" alt=""> Multiple choice</span>
                          </label>
                        </div> 
                      </div>
                    </div>

                    {{-- Счётчик количества вопросов --}}
                    <input type="hidden" id="counter" name="questions_count" value="1"> <!-- Новое -->
                    <!--Text of question-->
                    <div id="app1">
                        <div v-for="id in ids" class="form-group">
                            <div class="row poll-text-block">
                              <div class="col-lg-12 d-flex flex-column">
                                  <label class="createpage-label" for="">Question #@{{ id.id }}</label>
                                  <label class="createpage-label" for="">Text of question</label>
                                  <textarea name="poll_question" id="" cols="5" rows="5"></textarea>
                              </div>
                            </div>

                            <!--Answer choices-->
                            <div class="poll-answer-choice-block">
                              <label class="createpage-label" for="">Answer choices</label>
                              <div class="row">
                                  <div class="col-lg-4 col-md-12 d-flex flex-column">
                                      <button class="takeImg"><img src="img/camera.svg" alt="Camera"></button>
                                      <button class="closeBlock"><img src="img/close.svg" alt="CloseIt"></button>
                                      <input name="poll_first_answer" class="default-input" type="text" placeholder="Enter answer">
                                      <label for="file-upload" class="custom-file-upload">
                                        <div class="d-flex flex-column align-items-center dashed-border">
                                            <span>Image 1</span>
                                            <p>Upload image</p>
                                        </div>
                                      </label>
                                      <input id="file-upload" type="file">
                                  </div>
                                  <div class="col-lg-4 col-md-12 d-flex flex-column">
                                      <input name="poll_second_answer" class="default-input" type="text" placeholder="Enter answer">
                                      <label for="file-upload" class="custom-file-upload">
                                        <div class="d-flex flex-column align-items-center dashed-border">
                                            <span>Image 1</span>
                                            <p>Upload image</p>
                                        </div>
                                      </label>
                                      <input id="file-upload" type="file">
                                  </div>
                                  <div class="col-lg-4 col-md-12 d-flex flex-column">
                                      <input name="poll_third_answer" class="default-input" type="text" placeholder="Enter answer">
                                      <label for="file-upload" class="custom-file-upload">
                                        <div class="d-flex flex-column align-items-center dashed-border">
                                            <span>Image 1</span>
                                            <p>Upload image</p>
                                        </div>
                                      </label>
                                      <input id="file-upload" type="file">
                                  </div>
                              </div>
                              <!-- <div class="d-flex justify-content-center">
                                <div onclick="app1.addNewEntry()" class="add-question-btn">Add more questions</div>
                                    <button>Add more questions</button>
                                </div>
                            </div> -->
                        </div>
                    </div>
                
            {{-- + button --}}
                    <div class="d-flex justify-content-center">
                        <div onclick="app1.addNewEntry()" class="add-question-btn">Add more questions</div>
                            <!-- <button>Add more questions</button> -->
                        </div>
                    </div>
                    <br>
                    <!-- <div onclick="app1.addNewEntry()" class="d-flex btn btn-light add-question-btn">Add more questions</div> -->
                    <!--Audience category-->
                    <div class="row poll-audience-block">
                      <div class="col-lg-4 col-md-6 d-flex flex-column">
                        <label class="createpage-label" for="">Audience category</label>
                        <div class="select-style">
                          <select name="poll_audience">
                            <option>Woman 30-40</option>
                            <option>Woman 40-50</option>
                            <option>Man 30-40</option>
                            <option>Man 40-50</option>
                          </select>
                        </div>
                      </div>
                      
                      <div class="col-lg-4 col-md-6 d-flex flex-column">
                        <label class="createpage-label" for="">Gender</label>
                        <div class="d-flex">
                            <div>
                                <label class="type-container-checkbox">
                                  <input type="radio" name="poll_audience_gender" value="Male">
                                  <span class="checkmark">
                                  <img src="img/male.svg" alt=""> Male</span>
                                </label>
                            </div>
                            <div>
                              <label class="type-container-checkbox">
                                <input type="radio" name="poll_audience_gender" value="Female">
                                <span class="checkmark"><img src="img/female.svg" alt=""> Female</span>
                              </label>
                            </div>
                        </div>
                      </div>
      
                      <div class="col-lg-4 col-md-12 d-flex flex-column">
                        <label class="createpage-label" for="">Audience age</label>
                        <div class="d-flex">
                          <div class="select-style-min">
                            <select name="poll_audience_age_from">
                              <option>20</option>
                              <option>30</option>
                              <option>40</option>
                              <option>50</option>
                            </select>
                          </div>
                          <div class="select-style-min">
                            <select name="poll_audience_age_to">
                              <option>20</option>
                              <option>30</option>
                              <option>40</option>
                              <option>50</option>
                            </select>
                          </div>
                        </div> 
                      </div>
                    </div>

                    <!--Location-->
                    <div class="row poll-location-block">
                      <div class="col-lg-4 col-md-6 col-sm-4 col-12 d-flex flex-column">
                        <label class="createpage-label" for="">Location</label>
                        <div class="select-style">
                          <select name="poll_audience_location">
                            <option>Armenia</option>
                            <option>Algeria</option>
                            <option>France</option>
                            <option>Netherlands</option>
                          </select>
                        </div>
                      </div>
                    </div>

                    <!--Create poll-->
                    <div class="col-lg-12 d-flex flex-column align-items-center poll-submit-block">
                      <p>Total cost: <span><strong id="total-cost">1</strong>$</span> </p>
                      <button type="submit">Create poll</button>
                    </div>
                  

                  </div>
                </form>
            </div>

            <!--POLL RESULTS PAGE-->
            <div class="tab-pane fade " id="poll-results" role="tabpanel" aria-labelledby="nav-profile-tab">
               <div class="container">

                <div class="poll-information-block default-white-block">

                  <div class="row poll-detailed-description">
                    <div class="col-lg-9 col-md-8 col-sm-6 d-flex justify-content-center justify-content-xl-start justify-content-lg-start justify-content-md-start justify-content-sm-start">
                      <img class="operation-img" src="img/userpage/poll-saver.svg" alt="Poll saver image">
                      <div class="d-flex flex-column">
                        <h3 class="operation-name">
                        {{ (!empty($last_poll->poll_name) ? $last_poll->poll_name : '') }}
                        </h3>
                        <div class="d-flex results-poll-list">
                          <span id="number-of-questions-poll">1 question</span>
                          <span id="type-of-poll-result">
                            <img src="img/dot-result-page.svg" alt=""> 
                            {{ (!empty($last_poll->poll_type) ? $last_poll->poll_type : '') }}
                          </span>
                          <span id="audience-range-result">
                            {{ (!empty($last_poll->poll_audience) ? $last_poll->poll_audience : '') }}
                          </span>
                          <span id="creation-date-poll">
                            {{ (!empty($last_poll->created_at) ? $last_poll->created_at : '') }}
                          </span>
                          <span id="creation-time-poll"></span>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 d-flex justify-content-center  justify-content-lg-end justify-content-md-end justify-content-sm-end user-control-block">
                      <a href="">
                          <button class="edit-poll-btn">Edit</button>
                      </a>
                      <button class="user-control-btn"><img src="img/userpage/trash.svg" alt=""></button>
                      <button class="user-control-btn"><img src="img/userpage/duplicate.svg" alt=""></button>
                    </div>
                  </div>

                  <!--Copy link block-->
                  <div class="row copy-link-block">
                      <div class="col-lg-12 d-flex justify-content-xl-start justify-content-lg-start justify-content-md-start justify-content-sm-start justify-content-center">
                          <label class="heading-block" for="">Direct URL</label>
                      </div>
                      <div class="col-lg-12 d-flex">
                          <input type="text" id="copy-url-input">
                          <button class="copy-btn" onclick="copyFunction()">Copy</button>
                      </div>
                  </div>
                  
                  <div class="row stats-after-result-block">

                    <div class="col-lg-4 d-flex justify-content-center">
                      <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 25 23">
                        <g fill="none" fill-rule="evenodd">
                            <path d="M-3-3h30v30H-3z"/>
                            <path fill="#0bb07b" fill-rule="nonzero" d="M24.5 15.762l.031-.012v5.732a1.25 1.25 0 0 1-2.134.884L19.531 19.5H4.5a3.75 3.75 0 0 1-3.75-3.75V4.5A3.75 3.75 0 0 1 4.5.75h16.25A3.75 3.75 0 0 1 24.5 4.5v11.262z" opacity=".3"/>
                            <path fill="#000" fill-rule="nonzero" d="M6.375 12a1.875 1.875 0 1 1 0-3.75 1.875 1.875 0 0 1 0 3.75zm6.25 0a1.875 1.875 0 1 1 0-3.75 1.875 1.875 0 0 1 0 3.75zm6.25 0a1.875 1.875 0 1 1 0-3.75 1.875 1.875 0 0 1 0 3.75z" opacity=".3"/>
                        </g>
                    </svg>
                    <p id="number-of-answers-poll-result">15</p>
                    <span>answers</span>
                    </div>

                    <div class="col-lg-4 d-flex d-flex justify-content-center">
                      <svg fill="#0bb07b"  width="42px" height="42px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 488.85 488.85" style="enable-background:new 0 0 488.85 488.85;" xml:space="preserve">
                        <g>
                          <path opacity=".4" d="M244.425,98.725c-93.4,0-178.1,51.1-240.6,134.1c-5.1,6.8-5.1,16.3,0,23.1c62.5,83.1,147.2,134.2,240.6,134.2
                            s178.1-51.1,240.6-134.1c5.1-6.8,5.1-16.3,0-23.1C422.525,149.825,337.825,98.725,244.425,98.725z M251.125,347.025
                            c-62,3.9-113.2-47.2-109.3-109.3c3.2-51.2,44.7-92.7,95.9-95.9c62-3.9,113.2,47.2,109.3,109.3
                            C343.725,302.225,302.225,343.725,251.125,347.025z M248.025,299.625c-33.4,2.1-61-25.4-58.8-58.8c1.7-27.6,24.1-49.9,51.7-51.7
                            c33.4-2.1,61,25.4,58.8,58.8C297.925,275.625,275.525,297.925,248.025,299.625z"/>
                        </g>
                      </svg>
                      <p id="number-of-views-poll-result">42</p>
                      <span>views</span>
                    </div>

                    <div class="col-lg-4 d-flex d-flex justify-content-center">
                      <img src="img/bar-chart.svg" alt="">
                      <p id="number-of-percentage-poll-result">24%</p>
                      <span>effective</span>
                    </div>
                  </div>


                  <!--Image results-->
                  <div class="row d-flex flex-column align-items-center">
                    <h2 id="poll-name-of-question-result">
                      {{ (!empty($last_poll->poll_question) ? $last_poll->poll_question : '') }}
                    </h2>
                    <div class="d-flex">
                        <div class="most-popular-answer-img-result d-flex flex-column align-items-center">
                          <img class="hoverOnImage" src="img/test.jpg" alt="">
                          <p class="most-popular-description"><span class="most-popular-stat-result">70</span>%</p>
                          <div class="center-text-description d-flex flex-column align-items-center">
                            <p id="number-of-answers-poll-result-block">18</p>
                            <span>answers</span>
                          </div>
                        </div>
                    </div>
                    <div class="row d-flex less-popular-stat-result">
                      <div class="col-lg-4 d-flex flex-column align-items-center">
                        <img src="img/test2.jpg" alt="">
                        <p><span class="most-popular-stat-result">
                          {{ (!empty($last_poll->poll_first_answer) ? $last_poll->poll_first_answer : '') }}
                        </p> 
                      </div>
                      <div class="col-lg-4 d-flex flex-column align-items-center">
                          <img src="img/test2.jpg" alt="">
                          <p><span class="most-popular-stat-result">
                            {{ (!empty($last_poll->poll_second_answer) ? $last_poll->poll_second_answer : '') }}
                          </p>
                      </div>
                      <div class="col-lg-4 d-flex flex-column align-items-center">
                          <img src="img/test2.jpg" alt="">
                          <p><span class="most-popular-stat-result">
                            {{ (!empty($last_poll->poll_third_answer) ? $last_poll->poll_third_answer : '') }}
                          </p>
                      </div>
                    </div>
                  </div>
                  <!--Image results end-->

                  <!--P-BARS-->
                  <!--<div class="row progress-bars-info">
                    <div class="col-lg-6 d-flex justify-content-start">
                      <p class="poll-progress-bars-description">Lorem ipsum ipsum</p>
                      <button id="value-positive">
                        YES
                      </button>
                    </div>
                    <div class="col-lg-6 pb-block">
                        <div class="progress">
                          <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                  </div>

                  <hr>

                  <div class="row progress-bars-info">
                    <div class="col-lg-6 d-flex justify-content-start">
                      <p class="poll-progress-bars-description">Lorem ipsum ipsum</p>
                      <button id="value-negative">
                        NO
                      </button>
                    </div>
                    <div class="col-lg-6 pb-block">
                        <div class="progress">
                          <div class="progress-bar bg-success" role="progressbar" style="width: 90%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                  </div>

                  <hr>

                  <div class="row progress-bars-info">
                    <div class="col-lg-6 d-flex justify-content-start">
                      <p class="poll-progress-bars-description">Lorem ipsum ipsum</p>
                      <button id="value-dunno">
                        I don't know
                      </button>
                    </div>
                    <div class="col-lg-6 pb-block">
                        <div class="progress">
                          <div class="progress-bar bg-warning" role="progressbar" style="width: 30%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                  </div>-->
                  <!--P-BARS END-->
                   
                </div>

                <div class="col-lg-12 d-flex justify-content-center">
                  <a href="">
                    <button class="style-lg-btn">Back to poll list</button>
                  </a>
                </div>
              </div>
            </div> 

          </div>


      </div>
    </section>

    <script src="js/libs.min.js"></script>

<script src="js/progressbar.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
{{-- <script src="libs/chartist.js"></script> --}}
<script src="libs/chartist.min.js"></script>
<script src="js/common.js"></script>
{{-- <script src="js/app.js"></script> --}}

    
@endsection

@section('vue_js_scripts')
      
      <!-- development version, includes helpful console warnings -->
      <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
      <script>
      var app = new Vue({
        el: '#app',
        data: {
          message: 'Hello Vue!'
        }
      });
      </script>

    <script>
        var currentCounter = 1; 

        var app1 = new Vue({
            el: '#app1',
            data: {
                ids: [
                    { id: currentCounter},
                ]
            },
            methods: {
                addNewEntry: function(){
                    currentCounter = currentCounter + 1;
                    this.ids.push({id: currentCounter});
                    document.getElementById("counter").value = currentCounter;
                },
            }
        });
    </script>
@endsection
