@extends('layouts.index')
@section('css')
    <style>
        .card-img img {
            width: 100%;
            height: 400px;
        }

        /* h1,
                    h2,
                    h3,
                    h4,
                    h5 {
                        color: rgb(255, 255, 255);
                    } */

        @keyframes slide-down {
            0% {
                opacity: 0;
                /* ระยะเริ่มจากบนลงล่าง */
                transform: translateY(-50px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
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
            opacity: 0.5;
        }


        .item .con {

            animation: slide-down 1s ease-out forwards;
            padding: 20px;
            position: absolute;
            bottom: -60px;
            left: 0;
            width: 100%;
            -webkit-transition: all .3s;
            transition: all .3s;
            text-align: left;
            z-index: 1;
            height: auto;
            box-sizing: border-box;
            background: -moz-linear-gradient(top, transparent 0, rgba(0, 0, 0, .1) 2%, rgba(0, 0, 0, .75) 90%);
            background: -webkit-linear-gradient(top, transparent 0, rgba(0, 0, 0, .01) 2%, rgba(0, 0, 0, .75) 90%);
            background: linear-gradient(to bottom, transparent 0, rgba(0, 0, 0, .01) 2%, rgba(0, 0, 0, .75) 90%);
        }

        @media screen and (max-width: 768px) {
            .item .con {
                padding-bottom: 0px;
            }
        }

        .item .con h6 a {
            position: relative;
            color: #fff;
            font-size: 9px;
            font-family: 'Barlow Condensed', sans-serif;
            display: inline;
            letter-spacing: 3px;
            text-transform: uppercase;
            text-decoration: none;
        }

        .item .con h5 a {

            font-family: 'Barlow Condensed', sans-serif;
            position: relative;
            color: #fff;
            font-size: 26px;
            font-weight: 400;
            margin-top: 5px;
            margin-bottom: 5px;
            text-decoration: none;
        }

        .con:hover {
            animation: slide-up 1s ease-out forwards;
        }

        @keyframes slide-up {
            0% {
                opacity: 0;
                /* ระยะเริ่มจากบนลงล่าง */
                transform: translateY(0);
            }

            100% {
                opacity: 1;
                transform: translateY(-50px);
            }
        }

        .item .line {
            text-align: center;
            height: 1px;
            width: 60px;
            background-color: rgba(255, 255, 255, 0.2);
            transition-property: all;
            transition-duration: 0.3s;
            transition-timing-function: ease-in-out;
            margin: auto 0 30px;
        }

        .item:hover .line {
            width: 100%;
            transition-property: all;
            transition-duration: 0.8s;
            transition-timing-function: ease-in-out;
        }


        .facilities ul li i {
            margin-right: 10px;
        }

        .facilities ul li {
            color: #fff;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 3px;
            line-height: 1.2em;
            padding-bottom: 20px;
            float: left;
        }

        .facilities ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }


        .item .con .permalink a {
            font-family: 'Barlow Condensed', sans-serif;
            font-size: 9px;
            letter-spacing: 3px;
            text-transform: uppercase;
            color: #fff;
            height: 0;
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
            -ms-transition: all .3s ease;
            -o-transition: all .3s ease;
            -moz-transition: all .3s ease;
            -webkit-transition: all .3s ease;
            transition: all .3s ease;
            display: inline;
            text-decoration: none;
        }
    </style>
@endsection
@section('content')
    <input hidden value="{{ $parameter_language }}" id="la-page">
    <div class="padding-page"id="app-job">
        @include('navbar.index')

        <div class="" style="text-align: center; justify-content: center;">
            <h1>บริษัท จู ซิน หยวน เทรดดิ้ง จำกัด เปิดรับสมัครพนักงาน </h1>
            <img :src="imgSrc" style="height: 600px; width: 80%; border-radius:2%; ">
        </div>

        <div class="badge bg-primary mt-4">
            <h3>เกี่ยวกับตำแหน่งงาน</h3>
        </div>
        {{-- <div class="row">
            <div class="col-xs-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4 mt-3 mb-3" v-for="item in items_TH"
                :key="item.id">
                <div class="card">
                    <div class="card-header">
                        <img src="/img/no-photo.png" class="card-img">
                    </div>
                    <div class="card-body ">
                        <h3>@{{ item.Position }}</h3>
                        <p>@{{ item.Description }}</p>

                    </div>

                </div>
            </div>
        </div> --}}
        <div class="row">
            <div class="col-xs-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4 mt-3 mb-3" v-for="item in items_TH":key="item.id">
                <div class="item">
                    <div class="position-re o-hidden img-hover-zoom ">
                        <img class="" style="width:100%; height:500px; object-fit:cover;" :src="item.Image">
                        <div class="con">
                            <h5>
                                <a href="#">
                                    @{{ item.Position }}
                                </a>
                            </h5>
                            <div class="line"></div>
                            <div class="row facilities">
                                <div class="col-md-7">
                                    <ul>
                                        <li>สมาชิกทั้งหมด : 0คน</li>
                                    </ul>
                                </div>
                                <div class="col-md-5 text-end">
                                    <div class="permalink">
                                        <a href="#">
                                            Details
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </a>
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
        const JOB = {
            data() {
                return {
                    langue: "",
                    imgSrc: "/img/job3.png",
                    altImgSrc: "/img/job2.png",
                    isMobile: false,
                    items_TH: [{
                            id: 1,
                            Image: "/img/job1.jpg",
                            Position: "เจ้าหน้าที่บุคคล",
                            Description: "Item 1",
                        },
                        {
                            id: 2,
                            Image: "/img/no-photo.png",
                            Position: "เจ้าหน้าที่จัดซื้อ",
                            Description: "Item 2"
                        },
                        {
                            id: 3,
                            Image: "/img/no-photo.png",
                            Position: "เจ้าหน้าที่บัญชี",
                            Description: "Item 3"
                        },
                        {
                            id: 4,
                            Image: "/img/no-photo.png",
                            Position: "เจ้าหน้าที่จป.",
                            Description: "Item 3"
                        },
                        {
                            id: 5,
                            Image: "/img/no-photo.png",
                            Position: "ช่างไฟฟ้าโรงงาน",
                            Description: "Item 3"
                        },
                        {
                            id: 6,
                            Image: "/img/no-photo.png",
                            Position: "เจ้าหน้าที่การตลาด",
                            Description: "Item 3"
                        },
                        {
                            id: 7,
                            Image: "/img/no-photo.png",
                            Position: "เจ้าหน้าที่ไอที",
                            Description: "Item 3"
                        },
                        {
                            id: 8,
                            Image: "/img/no-photo.png",
                            Position: "เจ้าหน้าที่ควบคุมคุณภาพทุเรียน (QC,QA)",
                            Description: "Item 3"
                        },
                        {
                            id: 9,
                            Image: "/img/no-photo.png",
                            Position: "ฝ่ายผลิต",
                            Description: "Item 3"
                        },
                        {
                            id: 10,
                            Image: "/img/no-photo.png",
                            Position: "พนักงานคัดทุเรียน",
                            Description: "Item 3"
                        },
                        {
                            id: 10,
                            Image: "/img/no-photo.png",
                            Position: "พนักงานจัดซื้อทุเรียน",
                            Description: "Item 3"
                        },
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
                handleResize() {
                    this.isMobile = window.innerWidth < 768;
                    if (this.isMobile) {
                        this.imgSrc = this.altImgSrc;
                    } else {
                        this.imgSrc = "/img/job3.png";
                    }
                },

            },
            mounted() {
                this.Start();
                window.addEventListener("resize", this.handleResize);
                this.handleResize();
            },
            destroyed() {
                window.removeEventListener("resize", this.handleResize);
            },
        }
        Vue.createApp(JOB).mount('#app-job');
    </script>
@endsection
