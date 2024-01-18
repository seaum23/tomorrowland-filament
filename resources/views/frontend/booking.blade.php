@extends('layouts.frontend')

@section('css')
<style>
    .page-heading{
        background: linear-gradient(rgba(0, 0, 0, 0.3),rgba(0, 0, 0, 0.3) ), url({{ asset('storage/'. $sport->attachments[0]) }})
    }

    .time-slot {
        background: none repeat scroll 0 0 transparent;
        width: auto;
        display: inline-block;
        font-size: 16px;
        height: 42px;
        padding: 0 20px;
        border: 2px solid #fff;
        color: #fff;
        text-transform: uppercase;
        line-height: 38px;
        position: relative;
        transition: all .3s ease 0s;
        -o-transition: all .3s ease 0s;
        -ms-transition: all .3s ease 0s;
        -moz-transition: all .3s ease 0s;
        -webkit-transition: all .3s ease 0s;
    }

    .time-slot:hover {
        color: #000;
        font-weight: bold;
        background: #ec3642;
        transition: all .3s ease 0s;
        -o-transition: all .3s ease 0s;
        -ms-transition: all .3s ease 0s;
        -moz-transition: all .3s ease 0s;
        -webkit-transition: all .3s ease 0s;
    }

    .time-slot:after {
        content: "";
        height: 0;
        left: 0;
        position: absolute;
        top: 0;
        transition: all .3s ease 0s;
        -o-transition: all .3s ease 0s;
        -ms-transition: all .3s ease 0s;
        -moz-transition: all .3s ease 0s;
        -webkit-transition: all .3s ease 0s;
        width: 100%;
        z-index: -1;
        background: #fff;
    }

    .b-row {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        gap: 10px;
        justify-content: center;
    }

    /* .b-col {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 16.66%;
        flex: 0 0 16.66%;
        max-width: 16.66%;
    } */

    .article {
        position: relative;
        width: 140px;
        height: 50px;
        margin: 5px;
        float: left;
        box-sizing: border-box;
        border: 2px solid #ec3642;

        transition: all .3s ease 0s;
        -o-transition: all .3s ease 0s;
        -ms-transition: all .3s ease 0s;
        -moz-transition: all .3s ease 0s;
        -webkit-transition: all .3s ease 0s;
    }

    .article:hover {
        background: #ec3642;
        transition: all .3s ease 0s;
        -o-transition: all .3s ease 0s;
        -ms-transition: all .3s ease 0s;
        -moz-transition: all .3s ease 0s;
        -webkit-transition: all .3s ease 0s;
    }

    .article div {
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        line-height: 25px;
        transition: .5s ease;
    }

    .article input {
        position: absolute;
        top: 0;
        left: 0;
        width: 140px;
        height: 50px;
        opacity: 0;
        cursor: pointer;
    }

    input[type=checkbox]:checked ~ div {
        background-color: #ec3642;
    }


    .article.disabled{
        border: 2px solid #a5a5a5;
        background: #a5a5a5;
    }

    .article.disabled div{
        text-decoration: line-through;
    }

    .article.disabled:hover {
        background: #a5a5a5;
        transition: all .3s ease 0s;
        cursor: not-allowed;
    }

    input[type=checkbox]:disabled ~ div {
        border: 2px solid #a5a5a5;
    }
</style>
@endsection

@section('content')
    <section class="page-heading">
        <div class="title-slide">
            <div class="container">
                <div class="banner-content slide-container">
                    <div class="page-title">
                        <h3>{{ $sport->name }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="page-content">
        <div class="main-content">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="product-list">                            
                            <label for="birthday">Day to book:</label>
                            <input class="input-text" type="date" id="booking_day" name="booking_day" value="{{ now()->format('Y-m-d') }}" required>
                        </div>
                    </div>
                    <div class="col-12">
                        @foreach ($shifts as $shift)
                            <div class="card">
                                <h1>{{ $shift->name }}</h1>
                                <div class="b-row">
                                    <?php
                                        $start_time = $shift->start_time;
                                        $end_time = $shift->end_time;
                                        if($start_time < $end_time){
                                            while ($start_time < $end_time) {
                                    ?>                                                    
                                        <div class="b-col">
                                            <div class="article ">
                                                <input type="checkbox" id="feature1" />
                                                <div>
                                                    <span>
                                                        {{$start_time->format('h:i a')}} - {{ $start_time->addHour()->format('h:i a') }}
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                                ;
                                            }
                                        }
                                    ?>                                                    
                                </div>
                                {{-- {{ $shift->start_time->format('h:i a') }} --}}
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
