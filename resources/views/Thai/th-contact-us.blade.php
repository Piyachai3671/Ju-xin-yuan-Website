@extends('layouts.index')
@section('css')
    <style>
        .nav_contract {
            color: #FFFF00 !important;
        }

        .nav_langule {
            color: #008000 !important;
        }
    </style>
@endsection
@section('content')
    <input hidden value="{{ $parameter_language }}" id="la-page">
    {{-- @extends('navbar.index') --}}

    <div class=""id="app-contract">
        @include('navbar.index')
        <div class="text-contact">
            <marquee style="color: white; background-color: #007f57; background-size: auto;"><b> Chanthaburi Office </b>
            </marquee>
        </div>

        <div class="bg padding-page">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <h2>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d7783.3303655138125!2d101.90165!3d12.735252!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTLCsDQ0JzA2LjkiTiAxMDHCsDU0JzA1LjkiRQ!5e0!3m2!1sth!2sth!4v1680599369032!5m2!1sth!2sth"
                            style="border:0; width: 100%; height: 400px;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </h2>
                </div>
            </div>

            <div class="card" style="background-color:#007f57; width: 400px;">
                <div class="card-header">
                    <div class="" v-if="langue === 'TH'">
                        <p class="mt-2" style="color: white; font-size: larger; margin-left: 15px;">
                            ติดต่อ บริษัท ซิน จู หยวน
                            จำกัด
                        </p>
                    </div>
                    <div class="" v-if="langue === 'EN'">
                        <p class="mt-2" style="color: white; font-size: larger; margin-left: 15px;">
                            Contact Ju Xin Yuan Trading
                        </p>
                    </div>
                    <div class="" v-if="langue === 'CH'">
                        <p class="mt-2" style="color: white; font-size: larger; margin-left: 15px;">
                            Contact Ju Xin Yuan Trading
                        </p>
                    </div>



                </div>
                <div class="card-body"v-if="langue === 'TH'">
                    <p style="color: white; margin-top: 20px;">
                        <i class="fa-sharp fa-solid fa-location-pin" style="color: #d4ff00; margin-right: 5px;"></i>
                        89,89/5 หมู่ที่ 6 ถนน สุขุมวิท
                    </p>
                    <p style="color: white; margin-left: 15px;">ตำบล วังใหม่ อำเภอ นายายอาม จ.จันทบุรี 22170</p>
                    <p style="color: white;">
                        <i class="fa-solid fa-phone" style="color: #d4ff00; margin-right: 5px;"></i>
                        โทร.039-480-216 , 039-480-217
                    </p>
                </div>
                <div class="card-body"v-if="langue === 'EN'">
                    <p style="color: white; margin-top: 20px;">
                        <i class="fa-sharp fa-solid fa-location-pin" style="color: #d4ff00; margin-right: 5px;"></i>
                        89,89/5 Moo 6 road Sukhumvit
                    </p>
                    <p style="color: white; margin-left: 15px;">Tambon Wangmai Amphoe Nayaiam Chanthaburi 22170</p>
                    <p style="color: white;">
                        <i class="fa-solid fa-phone" style="color: #d4ff00; margin-right: 5px;"></i>
                        Tel. 039-480-216 , 039-480-217
                    </p>
                </div>
                <div class="card-body"v-if="langue === 'CH'">
                    <p style="color: white; margin-top: 20px;">
                        <i class="fa-sharp fa-solid fa-location-pin" style="color: #d4ff00; margin-right: 5px;"></i>
                        89,89/5 Moo 6 road Sukhumvit
                    </p>
                    <p style="color: white; margin-left: 15px;">Tambon Wangmai Amphoe Nayaiam Chanthaburi 22170</p>
                    <p style="color: white;">
                        <i class="fa-solid fa-phone" style="color: #d4ff00; margin-right: 5px;"></i>
                        Tel. 039-480-216 , 039-480-217
                    </p>
                </div>
            </div>
        </div>


    </div>
@endsection
@section('js')
    <script>
        const CONTRACT = {
            data() {
                return {
                    langue: "",
                    as: "afsdfdsf",
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
                // this.Oncheck();
            }
        }
        Vue.createApp(CONTRACT).mount('#app-contract');
    </script>
@endsection
