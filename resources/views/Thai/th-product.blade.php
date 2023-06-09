@extends('layouts.index')
@section('css')
    <style>
        .size-img div img {
            width: 100%;
            height: 450px;
            object-fit: cover;
            /* margin-top: 20px; */
            /* padding: 10px; */
            border-radius: 5%;
        }

        .nav_product {
            color: #FFFF00 !important;
        }

        .nav_langule {
            color: #008000 !important;
        }


        .position-re {
            position: relative;
        }

        .o-hidden {
            overflow: hidden;
        }

        .img-hover-zoom {
            overflow: hidden;
            background-color: black;
            border-radius: 5%;
        }

        .img-hover-zoom img {

            width: 100%;
            height: auto;
            transition: transform 1.0s ease, opacity 1.0s ease;
        }

        .img-hover-zoom:hover img {
            transform: scale(1.1);
            
        }
    </style>
@endsection
@section('content')
    <input hidden value="{{ $parameter_language }}" id="la-page">
    <div class="bg" id="app-product">
        @include('navbar.index')
        <div class="row size-img padding-page" style="" >
            <div class="col-lg-4 col-md-6 col-sm-12 mt-3" v-for="(Image, index) in Images" :key="index">
                <div class="position-re o-hidden img-hover-zoom">
                    <img :src="Image" class="">
                </div>
            </div>
            {{-- <div class="col-lg-4 col-md-6 col-sm-12">
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
            </div> --}}
        </div>
    </div>
@endsection
@section('js')
    <script>
        const PRODUCT = {
            data() {
                return {
                    langue: "",
                    Images: [
                        "/img/S__14778505.jpg",
                        "/img/S__14778507.jpg",
                        "/img/S__14778508.jpg",
                        "/img/S__14778509.jpg",
                        "/img/S__14778510.jpg",
                        "/img/S__14778514.jpg",
                        "/img/S__14778508.jpg",
                        "/img/S__14778509.jpg",
                    ],
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
