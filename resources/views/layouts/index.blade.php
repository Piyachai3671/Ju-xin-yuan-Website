<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> • บริษัท จู ซิน หยวน เทรดดิ้ง จำกัด เกี่ยวกับเรา</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.13/flatpickr.min.css"
        integrity="sha512-MQXduO8IQnJVq1qmySpN87QQkiR1bZHtorbJBD0tzy7/0U9+YIC93QWHeGTEoojMVHWWNkoCp8V6OzVSYrX0oQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.3/swiper-bundle.min.css"
        integrity="sha512-uuenj2ro+QKfF5Ig2BYOy3s3BhYPODotv/9V8Ue1MHrrwsiYKY01WzNMNk45i0jRUMXZxEuGpUzyPahsKOMKTg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="/css/main.css">
    @yield('css')
    <style>
        /* .nav-link {
            border: none;
            outline: none;
            padding: 10px 16px;

            cursor: pointer;
        }

        .active,
        .nav-link:hover {
            background-color: #e85d5d;
            color: white;
        } */
        /* .nav-link:focus {
            background-color: #73ff00;
            color: white;
        } */
    </style>
</head>

<body>
    <div class="background" id="app-layouts">
        

        <div class="">
            
        </div>
        <div class=""> 
            {{-- @extends('navbar.index') --}}
            {{-- @include('navbar.index') --}}
            @yield('content')
        </div>

        <div class="footer mt-3">
            <p>
                <span style="color: white; margin-left: auto; span-size: small;">
                    Ju Xin Yuan Trading Co.,Ltd. 89,89/5
                    Nong
                    Waen Moo 6 Wangmai Nayaiam Chanthaburi 22170 Tel 039-480-216 , 039-480-217
                </span>
            </p>
            <a href="https://www.facebook.com/profile.php?id=100091847397228" style="text-decoration: none;">
                <i class="fa-brands fa-facebook fa-2xl" style="color: white;"></i>
            </a>
            &nbsp;&nbsp;
            <a href="https://twitter.com/?lang=th" style="text-decoration: none;">
                <i class="fa-brands fa-twitter fa-2xl" style="color: white;"></i>
            </a>&nbsp;&nbsp;
            <a href="https://www.instagram.com/" style="text-decoration: none;">
                <i class="fa-brands fa-instagram fa-2xl" style="color: white;"></i>
            </a>

            <hr color="white">
            <div style="text-align: center;">
                <span style="color: white; margin:auto">Copyright © 2030 Ju Xin Yuan Trading Co.,Ltd.</span>
            </div>
            <div style="text-align: center;">
                <span style="colol: white; margin:auto">DESIGNED BY NATEEKAN HEMSUJI</span>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.26/sweetalert2.all.min.js"
        integrity="sha512-bVcYYoHEq3wY3x3w9TMN1dt25bbLyGO9xfAbGgTqCdirYUht2rR+drAMtvlduQ7sA0/XRoFu1oWMVEw8Uno0Gw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js"
        integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.13/flatpickr.min.js"
        integrity="sha512-K/oyQtMXpxI4+K0W7H25UopjM8pzq0yrVdFdG21Fh5dBe91I40pDd9A4lzNlHPHBIP2cwZuoxaUSX0GJSObvGA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.13/l10n/th.min.js"
        integrity="sha512-0XU8EDwsRqhnSukLw3KIQoRvFJs3SGlsoLpX1RpRAjmYrc7w56F6J5pwJ0p0p+v23qg14VPRQe9OhPRfbhVzdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/3.2.37/vue.global.prod.min.js"
        integrity="sha512-8GokEWxcB/NrPU4O8BHTgd9dkLouAsvqCnk6BSa2CZw7QXh0QM8GHfS53xYW1QJJVyJWctlcdRQwu5UxeLVsNA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.3/swiper-bundle.min.js"
        integrity="sha512-4MIWP9ui3MVR0iuCnJ9l6b9DWrCspboU0BbX5DNXoSJ4ZQXjrY7+sPJEehrR0rAx88jVUT9f9Hoa7fawwB3jHg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  
    {{-- <script>
        const LAYOUTS = {
            data() {
                return {
                    langue: "",
                }
            },
            methods: {
                // Start() {
                    
                //     let parameter_language = document.querySelector("#la-page").value;
                //     if(parameter_language==""){
                //         parameter_language="TH";
                //     }
                //     this.langue = parameter_language;
                //     console.log("Argument language:", this.langue);
                // },
                Start() {
                    this.langue = "";
                    console.log("Layouts start Langue", this.langue);
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
                OnGoPage_Contract(parameter_language){
                    location='/Thai/th-contact-us/'+parameter_language ;
                },     
            },
            mounted() {
                this.Start();

            }
        }
        Vue.createApp(LAYOUTS).mount('#app-layouts');
    </script>  --}}
    @yield('js')
</body>

</html>
