@extends('spark::layouts.default_layout')

@section('title', 'Page Title')

@section('content')
<style>

/* задаем относительное позиционирование контейнеру */
.block{position:relative;}
/* Оформление скрытого элемента по умолчанию */ 
.hidden
{display: none;
position: absolute;
bottom: 130%;
left: 0px;
background-color: #fff;
color: #8487e8;
width: 100px;
padding: 7px;
text-align: center;
-moz-box-shadow: 0 1px 1px rgba(0,0,0,.16);
-webkit-box-shadow: 0 1px 1px rgba(0,0,0,.16);
box-shadow: 0 1px 1px rgba(0,0,0,.16);
font-size: 15px;}
/* Дополнительное оформление скрытого элемента(необязательно) */
.focus + .hidden:before
{content: " ";
position: absolute;
top: 98%;
left: 10%;
margin-left: -5px;
border-width: 5px;
border-style: solid;
height: 0;
width: 0;
border: 7px solid transparent;
border-right: 7px solid #fff;
border-color: #fff transparent transparent transparent;
z-index: 2;}
/* Дополнительное оформление скрытого элемента(необязательно) */
.focus + .hidden:after
{content: " ";
position: absolute;
top: 100%;
left: 10%;
margin-left: -5px;
border-width: 5px;
border-style: solid;
height: 0;
width: 0;
border: 7px solid transparent;
border-right: 7px solid #fff;
border-color: rgba(0,0,0,.16) transparent transparent transparent;
z-index: 1;}
/* Появление скрытого элемента при клике */
.focus:focus + .hidden{display: block;}

</style>

<section class="plans__primary">
      <div class="container">

        <div class="row description-info">
          <div class="col-lg-6 d-flex flex-column align-items-lg-start align-items-center">
            <img src="img/map.svg" alt="Map">

              <div style="top: 1%; right: 26%; position: absolute;" class="block"> <!-- контейнер -->
                <a style="font-size:30px; opacity: 0.0;"href="#" class="focus">1</a> <!-- видимый элемент -->
                <span class="hidden">Adress 1</span> <!-- скрытый элемент -->
              </div>

              <div style="bottom: 24%; right: 18%; position: absolute;" class="block"> <!-- контейнер -->
                <a style="font-size:30px; opacity: 0.0;"href="#" class="focus">3</a> <!-- видимый элемент -->
                <span class="hidden">Adress 3</span> <!-- скрытый элемент -->
              </div>

              <div style="bottom:33%; left: 26%; position: absolute;" class="block"> <!-- контейнер -->
                <a style="font-size:30px; opacity: 0.0;"href="#" class="focus">2</a> <!-- видимый элемент -->
                <span class="hidden">Adress 1</span> <!-- скрытый элемент -->
              </div>

          </div>
          <div class="col-lg-6 d-flex flex-column align-items-lg-start align-items-center">
            <h1>Receive money for participation in online surveys</h1>
            <p>Receive money for participation in online surveys</p>
            <a class="go" href="#choose-your-plan">
              <button>Start Now</button>
            </a>
          </div>
        </div>

        <div class="row description-steps">
          <div class="col-lg-2 col-md-2 d-flex flex-column align-items-center step-block">
            <a href="{{ url('/login') }}"><img src="img/icons/plans__signup.svg" alt="Sign up"> </a>
           <p>Sign up</p>
          </div>
          <div class="col-lg-1 col-md-1 d-flex flex-column align-items-center">
              <img class="right-arrow" src="img/right-arrow.svg" alt="">
          </div>
          <div class="col-lg-2 col-md-2 d-flex flex-column align-items-center step-block">
          <a href="#"><img src="img/icons/plans__secimg.svg" alt="Document"></a>
            <p>Confirm E-mail</p>
          </div>
          <div class="col-lg-2 col-md-2 d-flex flex-column align-items-center">
              <img class="right-arrow" src="img/right-arrow.svg" alt="">
          </div>
          <div class="col-lg-2 col-md-2 d-flex flex-column align-items-center step-block">
          <a href="#"><img src="img/icons/plans__thirdimg.svg" alt="Convert"></a>
            <p>Back to site</p>
          </div>
          <div class="col-lg-1 col-md-1 d-flex flex-column align-items-center">
              <img class="right-arrow" src="img/right-arrow.svg" alt="">
          </div>
          <div class="col-lg-2 col-md-2 d-flex flex-column align-items-center step-block">
          <a href="{{ url('/index') }}"><img src="img/icons/plans__fourthimg.svg" alt="Computer"></a>
            <p>Start using!</p>
          </div>
        </div>
        
        <div id="choose-your-plan" class="row description-choose-plan">
          <div class="col-lg-12 d-flex justify-content-center">
            <h2>Select your plan</h2>
          </div>
          
          <div class="col-lg-4 d-flex flex-column align-items-center">
            <div class="plan-block d-flex flex-column align-items-center">
              <h3>Basic plan</h3>
              <span class="price-tag"><sup>$</sup><b>49</b>/ mo</span>
              <p class="plan-price-description">Lorem ipsum</p>
              <p class="plan-price-description">Lorem ipsum</p>
              <p class="plan-price-description">Lorem ipsum</p>
              <p class="plan-trial">14 days trial</p>
              <div class="d-flex justify-content-center">
                <a>
                  <button class="link-see-all-posts" data-toggle="modal" data-target="#plan1">Get started</button>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 d-flex flex-column align-items-center">
            <div class="plan-block d-flex flex-column align-items-center most-popular-plan">
              <h3>Pro plan</h3>
              <span class="price-tag"><sup>$</sup><b>149</b>/ mo</span>
              <p class="plan-price-description-popular first-child">Lorem ipsum</p>
              <p class="plan-price-description-popular">Lorem ipsum</p>
              <p class="plan-price-description-popular">Lorem ipsum</p>
              <p class="plan-trial">14 days trial</p>
              <div class="d-flex justify-content-center">
                <a>
                  <button class="link-see-all-posts" data-toggle="modal" data-target="#plan2">Get started</button>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 d-flex flex-column align-items-center">
              <div class="plan-block d-flex flex-column align-items-center">
                <h3>Pro plus plan</h3>
                <span class="price-tag"><sup>$</sup><b>179</b>/ mo</span>
                <p class="plan-price-description">Lorem ipsum</p>
                <p class="plan-price-description">Lorem ipsum</p>
                <p class="plan-price-description">Lorem ipsum</p>
                <p class="plan-trial">14 days trial</p>
                <div class="d-flex justify-content-center">
                  <a>
                    <button class="link-see-all-posts" data-toggle="modal" data-target="#plan3">Get started</button>
                  </a>
                </div>
              </div>
          </div>
        </div>
      </div>
    </section>    
  </div>


  <!-- All Polls-->

  <div class="modal fade" id="plan3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div style="height: 450px;" class="modal-body">
                <section class="plans__primary">
                  <div id="choose-your-plan" class="row description-choose-plan">
                  <div class="col-lg-12 d-flex flex-column align-items-center">
                              <div class="plan-block d-flex flex-column align-items-center">
                                <h3>Pro plus plan</h3>
                                <span class="price-tag"><sup>$</sup><b>179</b>/ mo</span>
                                <p class="plan-price-description">Lorem ipsum</p>
                                <p class="plan-price-description">Lorem ipsum</p>
                                <p class="plan-price-description">Lorem ipsum</p>
                                <p class="plan-trial">14 days trial</p>
                                <div class="d-flex justify-content-center">
                                  <a>
                                    <button class="link-see-all-posts" data-toggle="modal" data-target="#allPolls">Get started</button>
                                  </a>
                                </div>
                              </div>
                          </div>
                        </div>
                  </section>
                </div>
            </div>
        </div>{{-- /modal-content --}}
    </div>{{-- /modal-dialog --}}
</div>{{-- /modal fade --}}

<div class="modal fade" id="plan2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div style="height: 450px;" class="modal-body">
                <section class="plans__primary">
                  <div id="choose-your-plan" class="row description-choose-plan">
                  <div class="col-lg-12 d-flex flex-column align-items-center">
                              <div class="plan-block d-flex flex-column align-items-center">
                                <h3>Pro plus plan</h3>
                                <span class="price-tag"><sup>$</sup><b>149</b>/ mo</span>
                                <p class="plan-price-description">Lorem ipsum</p>
                                <p class="plan-price-description">Lorem ipsum</p>
                                <p class="plan-price-description">Lorem ipsum</p>
                                <p class="plan-trial">14 days trial</p>
                                <div class="d-flex justify-content-center">
                                  <a>
                                    <button class="link-see-all-posts" data-toggle="modal" data-target="#allPolls">Get started</button>
                                  </a>
                                </div>
                              </div>
                          </div>
                        </div>
                  </section>
                </div>
            </div>
        </div>{{-- /modal-content --}}
    </div>{{-- /modal-dialog --}}
</div>{{-- /modal fade --}}

<div class="modal fade" id="plan1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div style="height: 450px;" class="modal-body">
                <section class="plans__primary">
                  <div id="choose-your-plan" class="row description-choose-plan">
                  <div class="col-lg-12 d-flex flex-column align-items-center">
                              <div class="plan-block d-flex flex-column align-items-center">
                                <h3>Pro plus plan</h3>
                                <span class="price-tag"><sup>$</sup><b>49</b>/ mo</span>
                                <p class="plan-price-description">Lorem ipsum</p>
                                <p class="plan-price-description">Lorem ipsum</p>
                                <p class="plan-price-description">Lorem ipsum</p>
                                <p class="plan-trial">14 days trial</p>
                                <div class="d-flex justify-content-center">
                                  <a>
                                    <button class="link-see-all-posts" data-toggle="modal" data-target="#allPolls">Get started</button>
                                  </a>
                                </div>
                              </div>
                          </div>
                        </div>
                  </section>
                </div>
            </div>
        </div>{{-- /modal-content --}}
    </div>{{-- /modal-dialog --}}
</div>{{-- /modal fade --}}


<!-- Initialize Bootstrap functionality -->
<script>
// Initialize tooltip component
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

// Initialize popover component
$(function () {
  $('[data-toggle="popover"]').popover()
})
</script>

@endsection