@extends('layouts.frontend')

@section('css')
<link rel="stylesheet" href="{{ asset('js/app/bootstrap-grid.css') }}">
<style>
    .content-div{
        margin-left: 1rem;
        margin-right: 1rem;
    }

    .page-heading{
        background: linear-gradient(rgba(0, 0, 0, 0.3),rgba(0, 0, 0, 0.3) ), url({{ asset('storage/'. $sport->attachments[0]) }});
        background-repeat: no-repeat;
        background-size: cover;
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
        background: #dbf227;
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
        border: 2px solid #dbf227;

        transition: all .3s ease 0s;
        -o-transition: all .3s ease 0s;
        -ms-transition: all .3s ease 0s;
        -moz-transition: all .3s ease 0s;
        -webkit-transition: all .3s ease 0s;
    }

    .article:hover {
        background: #dbf227;
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
        background-color: #dbf227;
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
    @if($errors->any())
        {{ implode('', $errors->all('<div>:message</div>')) }}
    @endif
    <form action="{{ route('book.store') }}" method="post">
        @csrf
        <input type="hidden" name="sport" value="{{ $sport->id }}">
        <div class="page-content bootstrap-wrapper">
            <div class="main-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-12">
                            <div class="row">
                                <div class="col-12">
                                    <div class="product-list">
                                        <label for="birthday">Day to book:</label>
                                        {{-- <input class="input-text" type="date" id="booking_day" name="booking_day" value="{{ now()->format('Y-m-d') }}" required> --}}
                                        <input min="{{ now()->format('Y-m-d') }}" class="input-text" type="date" id="booking_day" name="booking_day" required>
                                    </div>
                                </div>
                                <div id="shifts-body" class="col-12">
                                    <p style="font-size: 3.5rem; color: #dbf227;line-height: normal">Select a date to see the available slots!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-12">
                            <input type="hidden" name="total_amount" id="total_amount">
                            <div style="display: flex;gap: 50px">
                                <div>
                                    <label for="birthday">Total amount:</label>
                                    <div class="price-box" style="margin-bottom: 1rem">
                                        <span class="woocommerce-Price-amount amount">
                                            <bdi>
                                                <span id="price_amount">0</span>
                                                <span class="woocommerce-Price-currencySymbol">taka</span>
                                            </bdi>
                                        </span>
                                    </div>
                                </div>
                                <div>
                                    <label for="birthday">Advance amount:</label>
                                    <div class="price-box" style="margin-bottom: 1rem">
                                        <span class="woocommerce-Price-amount amount">
                                            <bdi>
                                                <span id="advance_amount">0</span>
                                                <span class="woocommerce-Price-currencySymbol">taka</span>
                                            </bdi>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <label for="phone">Provide informations:</label>
                            <input class="input-text" type="text" id="name" name="name" placeholder="Name" required>
                            <input class="input-text" type="text" id="phone" name="phone" placeholder="Phone number">
                            {{-- <input class="input-text" type="text" id="email" name="email" placeholder="Email" required> --}}
                            <button type="submit" class="single_add_to_cart_button button alt btn-cart">Confirm</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection


@section('js')
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
    let price = Number(0);
    $('#booking_day').on('change', (e) => {
        let booking_date = e.target.value;
        console.log(booking_date)
        $.get('{{ route('book.shift.available') }}',{ booking_date })
        .done(function(response) {
            $('#price_amount').html(0);
            $('#total_amount').val(0);            
            price = 0;
            $('#shifts-body').html(response);
            $('.booking-times').on('change', (e) => {
                let shift_price = e.target.dataset.price;
                console.log(shift_price)
                if(e.target.checked){
                    price += Number(shift_price)
                }else{
                    price -= Number(shift_price)
                }
                $('#total_amount').val(price);
                $('#price_amount').html(price);
                let advance_amount = price * 0.3;
                $('#advance_amount').html((advance_amount).toFixed());
            });
        })
    });

    

</script>
@endsection