@extends('layouts.index')
@section('css')
    <style>
        .nav_home {
            color: #FFFF00 !important;
        }

        .nav_langule {
            color: #008000 !important;
        }

        .cover-img-size {
            width: 100%;
            margin: 0 auto;
        }

        @media screen and (min-width: 768px) {
            .cover-img-size {
                margin: 0 auto;
                width: 50%;
            }
        }

        .img-size img {
            width: 100%;
            height: 780px;

        }

        @media screen and (max-width: 768px) {
            .img-size img {
                width: 100%;
                height: 650px;

            }
        }

        .cover-img-size-carousel {
            margin: 0 auto;
            width: 100%;
        }

        @media screen and (min-width: 768px) {
            .cover-img-size-carousel {
                margin: 0 auto;
                width: 50%;
            }
        }

        .img-size-carousel div img {
            width: 100%;
            height: 500px;
        }

        @media screen and (max-width: 768px) {
            .img-size-carousel div img {
                width: 100%;
                height: 400px;
            }
        }
    </style>
@endsection

@section('content')
<input hidden value="{{ $parameter_language }}" id="la-page">
    <div class=""id="app-th-home">
        @include('navbar.index')
        <div class="padding-page">
            <div class="row">
                <div class="col" style="padding:20px;">
                    <div class="cover-img-size">
                        <div class="img-size ">
                            <img src="/img/QrcodeJuxin.jpg" alt="ไม่พบรูปภาพ">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div id="carouselExample" class="carousel slide cover-img-size-carousel">
                        <div class="carousel-inner">
                            <div class="img-size-carousel div img">
                                <div class="carousel-item active">
                                    <img src="/img/2.png" class="d-block "style="" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="/img/3.png" class="d-block" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="/img/4.png" class="d-block" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="/img/5.png" class="d-block" alt="...">
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class=" mt-3 col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-3">
                    <div class="card shadow-sm">
                        <img src="/img/what is durian.jpg">
                        <div class="card-body">
                            <div class="" v-if="langue === 'TH'">
                                <p>
                                    <span style="color: black; span-size: large; margin:auto;"><b>ทุเรียนคืออะไร
                                            ?</b></span>
                                </p>
                                <p class="card-text">
                                    ทุเรียนเป็นผลไม้เมืองร้อนที่มีชื่อเสียงที่สุดในเอเชียตะวันออกเฉียงใต้และมีชื่อเสียงในฐานะ
                                    “ราชาผลไม้เมืองร้อน”
                                </p>
                                <div class="d-flex justify-content-between align-items-text-align: center;">
                                    <div class="btn-group">
                                        <div>
                                            <button style="background-color: #009062; border-color: #d2ad5b; color: white;"
                                                class="btn btn-sm btn-outline-secondary">อ่านเพิ่มเติม <i
                                                    class="fa-solid fa-caret-right" style="color: #d4ff00;"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="" v-if="langue === 'EN'">
                                <p>
                                    <span style="color: black; span-size: large; margin:auto;"><b>Durian story</b></span>
                                </p>
                                <p class="card-text">
                                    Durian is the most famous tropical fruit in Southeast Asia and has the reputation of
                                    “Tropical Fruit King”. Southeast Asia produces the most in Thailand. At present, the
                                    only durians seen in the Chinese market are imported from Thailand.
                                </p>
                                <div class="d-flex justify-content-between align-items-text-align: center;">
                                    <div class="btn-group">
                                        <div>
                                            <button style="background-color: #009062; border-color: #d2ad5b; color: white;"
                                                class="btn btn-sm btn-outline-secondary">Read more<i
                                                    class="fa-solid fa-caret-right" style="color: #d4ff00;"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="" v-if="langue === 'CH'">
                                <p>
                                    <span style="color: black; span-size: large; margin:auto;"><b>榴蓮的故事</b></span>
                                </p>
                                <p class="card-text">
                                    榴莲，是东南亚最著名的热带水果，有“热带果王”之美誉。东南亚以泰国产量最多。目前，在中国市场上见到的原只榴莲，都是从泰国进口的。
                                </p>
                                <div class="d-flex justify-content-between align-items-text-align: center;">
                                    <div class="btn-group">
                                        <div>
                                            <button style="background-color: #009062; border-color: #d2ad5b; color: white;"
                                                class="btn btn-sm btn-outline-secondary">閱讀更多<i
                                                    class="fa-solid fa-caret-right" style="color: #d4ff00;"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class=" mt-3 col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-3">
                    <div class="card shadow-sm">
                        <img src="/img/factory.jpg">
                        <div class="card-body">
                            <div class="" v-if="langue === 'TH'">
                                <p>
                                    <span style="color: black; span-size: large; margin:auto;"><b>เกี่ยวกับเรา </b></span>
                                </p>
                                <p class="card-text">รอการอัพเดตข้อมูล</p>
                                <div class="d-flex justify-content-between align-items-text-align: center;">
                                    <div class="btn-group">
                                        <div>
                                            <button style="background-color: #009062; border-color: #d2ad5b; color: white;"
                                                class="btn btn-sm btn-outline-secondary">อ่านเพิ่มเติม <i
                                                    class="fa-solid fa-caret-right" style="color: #d4ff00;"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="" v-if="langue === 'EN'">
                                <p>
                                    <span style="color: black; span-size: large; margin:auto;"><b>About Us</b></span>
                                </p>
                                <p class="card-text">waiting for update.</p>
                                <div class="d-flex justify-content-between align-items-text-align: center;">
                                    <div class="btn-group">
                                        <div>
                                            <button style="background-color: #009062; border-color: #d2ad5b; color: white;"
                                                class="btn btn-sm btn-outline-secondary">Read more<i
                                                    class="fa-solid fa-caret-right" style="color: #d4ff00;"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="" v-if="langue === 'CH'">
                                <p>
                                    <span style="color: black; span-size: large; margin:auto;"><b>关于聚鑫源</b></span>
                                </p>
                                <p class="card-text">waiting for update.</p>
                                <div class="d-flex justify-content-between align-items-text-align: center;">
                                    <div class="btn-group">
                                        <div>
                                            <button style="background-color: #009062; border-color: #d2ad5b; color: white;"
                                                class="btn btn-sm btn-outline-secondary">閱讀更多<i
                                                    class="fa-solid fa-caret-right" style="color: #d4ff00;"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class=" mt-3 col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-3">
                    <div class="card shadow-sm">
                        <img src="/img/no-photo.png" width="50%" height="50%">
                        <div class="card-body">
                            <div class="" v-if="langue === 'TH'">
                                <p>
                                    <span style="color: black; span-size: large; margin:auto;"><b>ข่าวประชาสัมพันธ์
                                        </b></span>
                                </p>
                                <p class="card-text">รอการอัพเดตข้อมูล</p>
                                <div class="d-flex justify-content-between align-items-text-align: center;">
                                    <div class="btn-group">
                                        <div>
                                            <button style="background-color: #009062; border-color: #d2ad5b; color: white;"
                                                class="btn btn-sm btn-outline-secondary">อ่านเพิ่มเติม <i
                                                    class="fa-solid fa-caret-right" style="color: #d4ff00;"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="" v-if="langue === 'EN'">
                                <p>
                                    <span style="color: black; span-size: large; margin:auto;"><b>News Release
                                        </b></span>
                                </p>
                                <p class="card-text">waiting for update.</p>
                                <div class="d-flex justify-content-between align-items-text-align: center;">
                                    <div class="btn-group">
                                        <div>
                                            <button style="background-color: #009062; border-color: #d2ad5b; color: white;"
                                                class="btn btn-sm btn-outline-secondary">Read more<i
                                                    class="fa-solid fa-caret-right" style="color: #d4ff00;"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="" v-if="langue === 'CH'">
                                <p>
                                    <span style="color: black; span-size: large; margin:auto;"><b>公司时事
                                        </b></span>
                                </p>
                                <p class="card-text">waiting for update.</p>
                                <div class="d-flex justify-content-between align-items-text-align: center;">
                                    <div class="btn-group">
                                        <div>
                                            <button style="background-color: #009062; border-color: #d2ad5b; color: white;"
                                                class="btn btn-sm btn-outline-secondary">閱讀更多<i
                                                    class="fa-solid fa-caret-right" style="color: #d4ff00;"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        const HOMECOPY = {
            data() {
                return {
                    langue: "",
                    // a:"",
                }
            },
            methods: {
                Start() {
                    let parameter_language = document.querySelector("#la-page").value;
                    this.langue = parameter_language;
                    console.log("Home Argument language:", this.langue);
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
        Vue.createApp(HOMECOPY).mount('#app-th-home');
    </script>
@endsection
