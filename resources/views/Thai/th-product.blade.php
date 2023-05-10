@extends('layouts.index')
@section('css')
    <style>
        .size-img div img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            margin-top: 20px;
            padding: 10px;
            border-radius: 5%;
        }

        .nav_product {
            color: #FFFF00 !important;
        }

        .nav_langule {
            color: #008000 !important;
        }
    </style>
@endsection
@section('content')
    <input hidden value="{{ $parameter_language }}" id="la-page">
    <div class="bg" id="app-product">
        @include('navbar.index')


        <div class="row size-img">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <img src="/img/S__14778505.jpg" class="" style="">
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <img src="/img/S__14778507.jpg" class="" alt="">
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <img src="/img/S__14778508.jpg" class="" alt="">
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <img src="/img/S__14778509.jpg" class="" alt="">
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12">
                <img src="/img/S__14778510.jpg" class="" style="">
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <img src="/img/S__14778514.jpg" class="" alt="">
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <img src="/img/S__14778508.jpg" class="" alt="">
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <img src="/img/S__14778509.jpg" class="" alt="">
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        const PRODUCT = {
            data() {
                return {
                    langue: "",
                }
            },
            methods: {
                Start() {
                    let parameter_language = document.querySelector("#la-page").value;
                    this.langue = parameter_language;
                    console.log("Contract Argument language:", this.langue);
                },
                OnchangeLangue_TH() {
                    this.langue = "TH";
                    console.log("Select Langue", this.langue);
                },
                OnchangeLangue_EN() {
                    this.langue = "EN";
                    console.log("Select Langue", this.langue);
                },
                OnchangeLangue_CN() {
                    this.langue = "CH";
                    console.log("Select Langue", this.langue);
                },
                OnGoPage_Home(parameter_language) {
                    location = '/Thai/home-th/' + parameter_language;
                },
                OnGoPage_StoryDurian(parameter_language) {
                    location = '/Thai/th-durian-story/' + parameter_language;
                },
                OnGoPage_Contract(parameter_language) {
                    location = '/Thai/th-contact-us/' + parameter_language;
                },
                OnGoPage_About(parameter_language) {
                    location = '/Thai/th-about-us/' + parameter_language;
                },
                OnGoPage_Product(parameter_language) {
                    location = '/Thai/th-product/' + parameter_language;
                },
            },
            mounted() {
                this.Start();

            }
        }
        Vue.createApp(PRODUCT).mount('#app-product');
    </script>
@endsection
