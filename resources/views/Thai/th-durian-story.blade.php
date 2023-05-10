@extends('layouts.index')
@section('css')
    <style>
        .nav_story_durain {
            color: #008000 !important;
        }

        .nav_langule {
            color: #008000 !important;
        }
    </style>
@endsection

@section('content')
<input hidden value="{{ $parameter_language }}" id="la-page">
    <div class=""id="app-story">
        @include('navbar.index')
        <div class="card mb-3" style="max-width: 50rem; margin: auto; margin-top: 75px;">
            <div class="" style="text-align: center;">
                <img src="/img/what is durian.jpg" class="card-img-top" style="width:100%; height: 400px; " alt="ไม่พบรูปภาพ">
                <div class="card-body">

                </div>

                <div class=""v-if="langue === 'TH'" style="padding: 20px;">
                    <h5 class="card-title"><b>เรื่องทุเรียน</b></h5>
                    <p class="card-text">
                        ทุเรียนเป็นผลไม้เมืองร้อนที่มีชื่อเสียงที่สุดในเอเชียตะวันออกเฉียงใต้และมีชื่อเสียงในฐานะ
                        “ราชาผลไม้เมืองร้อน” เอเชียตะวันออกเฉียงใต้ผลิตมากที่สุดในประเทศไทย
                        ในปัจจุบันทุเรียนสดส่วนใหญ่ที่พบในตลาดจีนนำเข้ามาจากประเทศไทย</p>

                    <p><b>เกี่ยวกับฤดูกาลทุเรียนในประเทศไทย</b></p>

                    <p>ในประเทศไทยการกินทุเรียนเป็นไปตามฤดูกาล
                        โดยปกติฤดูกาลทุเรียนจะมาจากกลางเดือนมีนาคมถึงกลางเดือนมิถุนายน
                        (ภาคตะวันออกของประเทศไทย) และจากกลางเดือนมิถุนายนถึงปลายเดือนตุลาคม (ภาคใต้ของประเทศไทย)
                        (โดยปกติแล้วทั้งสองฤดูกาลนี้มักจะเป็นฤดูทุเรียน) บางครั้งอาจมีอุบัติเหตุ
                        หากทุเรียนพบในฤดูฝนในขณะที่ฤดูออกดอกดอกทุเรียนจะล้มลงดอกบัวฤดูกาลนี้จะไม่สามารถเก็บเกี่ยวทุเรียนได้จำนวนมากด้วยวิวัฒนาการอย่างต่อเนื่องของพันธุ์ทุเรียนหมอนทุเรียนหลากสีจึงเป็นพันธุ์ที่เป็นที่ต้องการมากที่สุดในประเทศไทยและจีน
                        เนื่องจากรสชาติที่เป็นเอกลักษณ์เนื้อสัมผัสเพื่อนหลายคนที่รักทุเรียนล้วนได้รับการยกย่อง</p>

                    <p><b>เกี่ยวกับคุณค่าทางโภชนาการของทุเรียน</b></p>

                    <p>ทุเรียนเป็นผลไม้ที่อบอุ่น มันสามารถให้พลังงานและคาร์โบไฮเดรตแก่เราได้

                        หลังจากทุเรียนย่อยแล้วคนมักจะรู้สึกว่าร่างกายอบอุ่น
                        ความอบอุ่นของทุเรียนสามารถช่วยเพิ่มความเย็นของช่องท้องและช่วยเพิ่มอุณหภูมิของร่างกาย
                        มันมีประโยชน์มากสำหรับเพื่อน ๆ ที่มีรัฐธรรมนูญเย็นและสามารถปรับปรุงประจำเดือน
                        มันมีน้ำตาลสูงและมีแป้งโปรตีนและวิตามินที่หลากหลายไขมันแคลเซียมเหล็กและฟอสฟอรัส
                        เพื่อนที่อ่อนแอสามารถทานทุเรียนได้ทุเรียนสามารถเสริมพลังงานและสารอาหารของร่างกายเพื่อให้ได้สมรรถภาพทางกายบำรุงหยินและหยาง
                        มันสามารถใช้ในการบำรุงร่างกายและเสริมสร้างภูมิคุ้มกันหลังการเจ็บป่วยและหลังคลอดของผู้หญิง

                        ทุเรียนมีใยอาหารที่อุดมไปด้วยซึ่งสามารถส่งเสริมการเคลื่อนไหวของลำไส้และรักษาอาการท้องผูก
                        อย่างไรก็ตามควรสังเกตว่าการรับประทานทุเรียนเพื่อรักษาอาการท้องผูกอาจต้องดื่มน้ำมากขึ้น
                        มิฉะนั้นเส้นใยที่อุดมไปด้วยจะไม่ดูดซับน้ำ แต่จะดูดซับน้ำในลำไส้

                        ทุเรียนดาบูชาวกวางตุ้งกล่าวว่า: “พร้อมใช้งานสำหรับวัตถุประสงค์ทางการแพทย์หวานและอบอุ่นปลอดสารพิษ”
                        ซุปกับทุเรียนซึ่งสามารถเปลี่ยนเป็นซุปเพื่อให้น้ำซุปขาวมันหวานและหวาน
                        ชาวบ้านใช้มันเพื่อเติมเต็มหลังจากความเจ็บป่วยและหลังคลอด

                        นักเขียนจีน Yu Dafu เขียนไว้ใน “Nanyang Travel Notes” ว่า
                        “ทุเรียนมีกลิ่นของชีสเหม็นผสมกับหัวหอมและมีน้ำมันสนซึ่งมีกลิ่นหอมหอมและอร่อยจริงๆ”
                        นี่เป็นภาพที่แท้จริงที่สุดของทุเรียน
                        สำหรับผู้ที่ไม่เคยกินทุเรียนตราบใดที่พวกเขากล้าลองกัดครั้งแรกหลายคนจะคิดว่ายิ่งกินมากเท่าไหร่ก็ยิ่งอยากกินมากเท่านั้น
                        หลายคนได้ลิ้มลองรสชาติของทุเรียนและติดใจในรสชาติของทุเรียน
                    </p>
                </div>

                <div class=""v-if="langue === 'EN'" style="padding: 20px;">
                    <h5 class="card-title"><b>Durian Story</b></h5>
                    <p class="card-text">
                        Durian is the most famous tropical fruit in Southeast Asia and has the reputation of “Tropical Fruit
                        King”. Southeast Asia produces the most in Thailand. At present, most of the fresh durians seen in
                        the Chinese market are imported from Thailand.
                    </p>

                    <p><b>About the durian season in Thailand</b></p>

                    <p>In Thailand, eating durian is seasonal. Usually the durian season is from mid-March to mid-June
                        (eastern Thailand) and from mid-June to the end of October (Southern Thailand). (These two seasons
                        are usually the mature season of durian.) Of course, sometimes there will be accidents. If the
                        durian meets the rainy season while the flowering season, the durian lotus is knocked down, then
                        this season will not be able to harvest a large number of durians. With the continuous evolution of
                        durian varieties, the variety of Golden Pillow Durian is now the most sought-after variety in both
                        Thailand and China. Because of its unique taste, texture, many friends who love durian are full of
                        praise

                    </p>

                    <p><b>About the nutritional value of durian</b></p>

                    <p>Durian is a warm fruit. It can provide us with energy and carbohydrates. After the durian is
                        digested, people usually feel that their body is warm. The warmth of durian can improve the coldness
                        of the abdomen and promote the rise of body temperature. It is very helpful for friends with cold
                        constitution and can improve dysmenorrhea. It contains high sugar and contains starch, protein, and
                        a variety of vitamins, fats, calcium, iron and phosphorus. Debilitated friends can eat durian,
                        durian can supplement the body’s energy and nutrition, to achieve physical fitness, nourishing yin
                        and yang. It can be used to nourish the body and strengthen immunity after the illness and women’s
                        postpartum. Durian contains very rich dietary fiber, which can promote bowel movements and treat
                        constipation. However, it should be noted that eating durian to treat constipation may require
                        drinking more water. Otherwise, the rich fiber will not absorb water, but will absorb the water in
                        the intestine. Durian Dabu, the Cantonese said: “A durian three chickens.” “Ci Hai” and “Compendium
                        of Materia Medica” all say that it is “available for medicinal purposes, sweet and warm, non-toxic,
                        attending violent and cold-hearted.” Soup with durian, which can be turned into soup to make the
                        soup white, It is sweet and sweet. The locals use it to replenish after the illness and after the
                        birth. Chinese writer Yu Dafu wrote in “Nanyang Travel Notes” that “durian has the smell of stinky
                        cheese mixed with onions, and has a scent of turpentine, which is really smelly, fragrant and
                        delicious.” This is the most authentic portrayal of durian. For those who have never eaten durian,
                        as long as they dare to try the first bite, many people will think that the more they eat, the more
                        they want to eat. Many people have tasted the taste of durian and are even addicted.
                    </p>
                </div>

                <div class=""v-if="langue === 'CH'" style="padding: 20px;">
                    <h5 class="card-title"><b>榴蓮的故事</b></h5>
                    <p class="card-text">
                        榴莲，是东南亚最著名的热带水果，有“热带果王”之美誉。东南亚以泰国产量最多。目前，在中国市场上见到的新鲜榴莲，大部分都是从泰国进口的。</p>

                    <p><b>关于泰国榴莲季节</b></p>

                    <p>在泰国，吃榴莲是有季节性的。通常榴莲旺季是每年的3月中至6月中（泰国东部地区）还有6月中至10月末（泰国南部地区）。（这两个季节通常是榴莲成熟的大季）当然，有时候也会碰到意外，如果榴莲在开花的时候遇见雨季，榴莲花都被打落，那么这一季就无法收获大批的榴莲。
                        随着榴莲品种的不断演变，现在无论在泰国还是中国市场，金枕榴莲这个品种是最受追捧的一个品种。因为其独特的口感，质地，很多喜爱榴莲的朋友都对其赞不绝口。</p>

                    <p><b>关于榴莲的营养价值</b></p>

                    <p>榴莲属温性的水果。它能给我们提供能量和碳水化合物。榴莲消化后，人们通常觉得自己的身体是温暖的。榴莲的温性可以改善腹部寒凉的情况，促进体温上升，对寒性体质的朋友非常有帮助，可以改善痛经。它含有很高的糖份，并且含淀粉，蛋白质，还有多种维生素，脂肪，钙，铁和磷等。身体虚弱的朋友可以食用榴莲，榴莲可以补充身体需要的能量和营养，达到强身健体、滋阴补阳的功效。病后及妇女产后可用之来补养身体，增强免疫力。
                        榴莲中含有非常丰富的膳食纤维，可以促进肠蠕动，治疗便秘。但需要注意的是，吃榴莲治疗便秘可要多喝开水，不然，丰富的纤维没有水分可吸收，反而会吸肠道里的水分。
                        榴莲大补，广东人称：“一只榴莲三只鸡”。《辞海》和《本草纲目》中都说，其“可供药用，味甘温，无毒，主治暴痢和心腹冷气。”用榴莲煮汤，它可以化入汤中，使汤色乳白，又香又甜。当地人在病后、产后都用它来补身。
                        对于榴莲的‘爱与憎’
                        中国文学家郁达夫在《南洋游记》中曾写道“榴莲有如臭乳酪与洋葱混合的臭气，又有类似松节油的香味，真是又臭又香又好吃”。这是对榴莲最真实的写照。从未吃过榴莲的人只要首次敢大胆尝试第一口后，很多人就会觉得越吃越想吃。许多人在尝过榴莲的美味后，都回味无穷，甚至上瘾。
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        const STORY = {
            data() {
                return {
                    langue: "",

                }
            },
            methods: {
                Start() {
                    let parameter_language = document.querySelector("#la-page").value;
                    this.langue = parameter_language;
                    console.log("Durian Story Argument language:", this.langue);
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
        Vue.createApp(STORY).mount('#app-story');
    </script>
@endsection
