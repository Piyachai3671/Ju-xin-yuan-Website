<div class="bg">
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #005c3f;">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNavbar"
                aria-controls="myNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a @click="OnGoPage_Home('TH')" v-if="langue === 'TH'" class="nav-link nav_home"
                            style="color:#fff;" aria-current="page" href="#">
                            หน้าแรก
                        </a>
                        <a @click="OnGoPage_Home('EN')" v-if="langue === 'EN'" class="nav-link nav_home"
                            style="color:#fff;" aria-current="page" href="#">
                            Home
                        </a>
                        <a @click="OnGoPage_Home('CH')" v-if="langue === 'CH'" class="nav-link nav_home"
                            style="color:#fff;" aria-current="page" href="#">
                            首页
                        </a>
                        <a @click="OnGoPage_Home('TH')" v-if="langue === ''" class="nav-link nav_home" style="color:#fff;" aria-current="page"
                            href="#">
                            หน้าแรก
                        </a>

                    </li>
                    <li class="nav-item dropdown">
                        <a  v-if="langue === 'TH'" class="nav-link dropdown-toggle"
                            href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false" style="color:#ffffff">
                            เกี่ยวกับเรา
                        </a>

                        <a  v-if="langue === 'EN'" class="nav-link dropdown-toggle"
                            href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false" style="color:#ffffff">
                            About us
                        </a>

                        <a  v-if="langue === 'CH'" class="nav-link dropdown-toggle"
                            href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false" style="color:#ffffff">
                            关于聚鑫源
                        </a>
                        <a  v-if="langue === ''" class="nav-link dropdown-toggle"
                            href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false" style="color:#ffffff">
                            เกี่ยวกับเรา
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <div class="" v-if="langue === 'TH'">
                                <li><a @click="OnGoPage_About('TH')" class="dropdown-item nav_aboutme" href="#">เกี่ยวกับเรา</a></li>
                                <li><a @click="OnGoPage_StoryDurian('TH')" class="dropdown-item nav_story_durain"
                                        href="#">เรื่องทุเรียน</a></li>
                            </div>

                            <div class="" v-if="langue === 'EN'">
                                <li><a @click="OnGoPage_About('EN')" class="dropdown-item nav_aboutme" href="#">About us</a></li>
                                <li><a @click="OnGoPage_StoryDurian('EN')" class="dropdown-item nav_story_durain"
                                        href="#">Durain
                                        Story</a></li>
                            </div>

                            <div class="" v-if="langue === 'CH'">
                                <li><a @click="OnGoPage_About('CH')" class="dropdown-item nav_aboutme" href="#">关于聚鑫源</a></li>
                                <li><a @click="OnGoPage_StoryDurian('CH')" class="dropdown-item nav_story_durain"
                                        href="#">榴蓮的故事</a>
                                </li>
                            </div>

                            <div class="" v-if="langue === ''">
                                <li><a @click="OnGoPage_About('TH')" class="dropdown-item nav_aboutme" href="#">เกี่ยวกับเรา</a>
                                </li>
                                <li><a @click="OnGoPage_StoryDurian('TH')" class="dropdown-item nav_story_durain"
                                        href="#">เรื่องทุเรียน</a></li>
                            </div>

                        </ul>
                    <li class="nav-item ">
                        <a @click="OnGoPage_Product('TH')" v-if="langue === 'TH'" class="nav-link nav_product" href="#"
                            style="color:#ffffff;">
                            สินค้าและบริการ
                        </a>
                        <a @click="OnGoPage_Product('EN')" v-if="langue === 'EN'" class="nav-link nav_product" href="#"
                            style="color:#ffffff;">
                            Products &amp; Services
                        </a>
                        <a @click="OnGoPage_Product('CH')" v-if="langue === 'CH'" class="nav-link nav_product" href="#"
                            style="color:#ffffff;">
                            产品与服务
                        </a>
                        <a @click="OnGoPage_Product('TH')" v-if="langue === ''" class="nav-link nav_product" href="#"
                            style="color:#ffffff;">
                            สินค้าและบริการ
                        </a>
                    </li>
                    <li class="nav-item">
                        <a @click="OnGoPage_Contract('TH')" v-if="langue === 'TH'" class="nav-link nav_contract"
                            href="#" style="color:#ffffff;">
                            ติดต่อเรา
                        </a>
                        <a @click="OnGoPage_Contract('EN')" v-if="langue === 'EN'" class="nav-link nav_contract"
                            href="#" style="color:#ffffff;">
                            Contacts Us
                        </a>
                        <a @click="OnGoPage_Contract('CH')" v-if="langue === 'CH'" class="nav-link nav_contract"
                            href="#" style="color:#ffffff;">
                            联络我们
                        </a>
                        <a @click="OnGoPage_Contract('TH')" v-if="langue === ''" class="nav-link nav_contract"
                            href="#" style="color:#ffffff;">
                            ติดต่อเรา
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a v-if="langue === 'TH'" class="nav-link dropdown-toggle" style="color: white;"
                            href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            เลือกภาษา :
                            &nbsp;<span style="color: yellow;">ไทย</span>
                        </a>

                        <a v-if="langue === 'EN'" class="nav-link dropdown-toggle" style="color: white;"
                            href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Language Menu :
                            &nbsp;<span style="color: yellow;">English</span>
                        </a>

                        <a v-if="langue === 'CH'" class="nav-link dropdown-toggle" style="color: white;"
                            href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Language Menu :
                            &nbsp;<span style="color: yellow;">中文</span>
                        </a>
                        <a v-if="langue === ''" class="nav-link dropdown-toggle" style="color: white;"
                            href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            เลือกภาษา :
                            &nbsp;<span style="color: yellow;">ไทย</span>
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li v-if="langue === 'TH'" @click="OnchangeLangue_CN">
                                <a class="dropdown-item " href="#">中文</a>
                            </li>
                            <li v-if="langue === 'TH'" @click="OnchangeLangue_EN">
                                <a class="dropdown-item " href="#">Englist</a>
                            </li>
                            <li v-if="langue === 'TH'" @click="OnchangeLangue_TH">
                                <a class="dropdown-item  color-select-langue" href="#">ไทย</a>
                            </li>

                            <li v-if="langue === 'EN'" @click="OnchangeLangue_CN">
                                <a class="dropdown-item " href="#">中文</a>
                            </li>
                            <li v-if="langue === 'EN'" @click="OnchangeLangue_EN">
                                <a class="dropdown-item color-select-langue" href="#">Englist</a>
                            </li>
                            <li v-if="langue === 'EN'" @click="OnchangeLangue_TH">
                                <a class="dropdown-item " href="#">ไทย</a>
                            </li>

                            <li v-if="langue === 'CH'" @click="OnchangeLangue_CN">
                                <a class="dropdown-item  color-select-langue" href="#">中文</a>
                            </li>
                            <li v-if="langue === 'CH'" @click="OnchangeLangue_EN">
                                <a class="dropdown-item" href="#">Englist</a>
                            </li>
                            <li v-if="langue === 'CH'" @click="OnchangeLangue_TH">
                                <a class="dropdown-item " href="#">ไทย</a>
                            </li>

                            <li v-if="langue === ''" @click="OnchangeLangue_CN">
                                <a class="dropdown-item " href="#">中文</a>
                            </li>
                            <li v-if="langue === ''" @click="OnchangeLangue_EN">
                                <a class="dropdown-item " href="#">Englist</a>
                            </li>
                            <li v-if="langue === ''" @click="OnchangeLangue_TH">
                                <a class="dropdown-item  color-select-langue" href="#">ไทย</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <span style="color: white; margin:auto"><i class="fa-sharp fa-solid fa-location-pin"
                        style="color: #d4ff00; margin-right: 5px;"></i> 89,89/5 Nong Waen Moo 6 Wangmai Nayaiam
                    Chanthaburi 22170 </span>
                <span style="color: white; margin:auto"><i class="fa-solid fa-clock"
                        style="color: #d4ff00; margin-right: 5px;"></i> Open Mon - Sat 8.00 - 17.00 </span>
                <span style="color: white; margin:auto"><i class="fa-solid fa-phone"
                        style="color: #d4ff00; margin-right: 5px;"></i> 039-480-216 , 039-480-217 </span>
            </div>
        </div>
    </nav>

</div>
