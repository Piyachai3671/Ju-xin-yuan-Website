@extends('layouts.index')
@section('css')
    <style>
        .nav_aboutme {
            color: #008000 !important;
        }

        .nav_langule {
            color: #008000 !important;
        }
    </style>
@endsection

@section('content')
<input hidden value="{{ $parameter_language }}" id="la-page">
    <div class=""id="app-about">
        @include('navbar.index')
        <div class="bg">
            <div class="card mb-3" style="max-width: 50rem; margin: auto; margin-top: 75px;">
                <img src="/img/factory.jpg" style="width: 100%; height: 400px; object-fit: cover;" alt="ไม่พบรูปภาพ">
                <div class="card-body">
                    <div class="" v-if="langue === 'TH'">
                        <h5 class="card-title"><b>เกี่ยวกับเรา</b></h5>
                        <p class="card-text">รอการอัพเดตข้อมูล...</p>
                    </div>

                    <div class="" v-if=" langue === 'EN'">
                        <h5 class="card-title"><b>About us</b></h5>
                        <p class="card-text">waiting for update...</p>
                    </div>

                    <div class="" v-if=" langue === 'CH'">
                        <h5 class="card-title"><b>关于聚鑫源</b></h5>
                        <p class="card-text">waiting for update.</p>
                    </div>
                </div>
            </div>
            <div class=""v-if="langue === 'TH'">
                <h5 class="card-title" style="text-align:center;" style="color:white; font-size: 35px; font-weight: bold;">
                    ข่าวประชาสัมพันธ์
                </h5>
                <div class="card mb-3" style="max-width: 50rem; margin: auto; margin-top: 20px;">
                    <h5 class="card-title" style="margin-left: 10px;"><b>มอบของรางวัล</b></h5>
                    <img src="#" class="card-img-top" width="50%" height="50%" alt="ไม่พบรูปภาพ">
                </div>
                <div class="card mb-3" style="max-width: 50rem; margin: auto; margin-top: 20px;">
                    <h5 class="card-title" style="margin-left: 10px;"><b>งานเทศกาลตรุษจีน</b></h5>
                    <img src="#" class="card-img-top" width="50%" height="50%" alt="ไม่พบรูปภาพ">
                </div>
            </div>

            <div class=""v-if="langue === 'EN'">
                <h5 class="card-title" style="text-align:center;" style="color:white; font-size: 35px; font-weight: bold;">
                    News Release
                </h5>
                <div class="card mb-3" style="max-width: 50rem; margin: auto; margin-top: 20px;">
                    <h5 class="card-title" style="margin-left: 10px;"><b>Giving Gift Baskets</b></h5>
                    <img src="#" class="card-img-top" width="50%" height="50%" alt="ไม่พบรูปภาพ">
                </div>
                <div class="card mb-3" style="max-width: 50rem; margin: auto; margin-top: 20px;">
                    <h5 class="card-title" style="margin-left: 10px;"><b>Chinese New Year Festival</b></h5>
                    <img src="#" class="card-img-top" width="50%" height="50%" alt="ไม่พบรูปภาพ">
                </div>
            </div>

            <div class=""v-if="langue === 'CH'">
                <h5 class="card-title" style="text-align:center;" style="color:white; font-size: 35px; font-weight: bold;">
                    公司时事
                </h5>
                <div class="card mb-3" style="max-width: 50rem; margin: auto; margin-top: 20px;">
                    <h5 class="card-title" style="margin-left: 10px;"><b>位送礼品篮</b></h5>
                    <img src="#" class="card-img-top" width="50%" height="50%" alt="ไม่พบรูปภาพ">
                </div>
                <div class="card mb-3" style="max-width: 50rem; margin: auto; margin-top: 20px;">
                    <h5 class="card-title" style="margin-left: 10px;"><b>年春节联欢晚会</b></h5>
                    <img src="#" class="card-img-top" width="50%" height="50%" alt="ไม่พบรูปภาพ">
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        const ABOUT = {
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
        Vue.createApp(ABOUT).mount('#app-about');
    </script>
@endsection
