<?php
$logos1 = array("logo1.png","logo2.png","logo3.jpg","logo4.webp","logo5.png","logo6.png","logo7.png");
$logos2 = array("partner1.png","partner2.png","partner3.jpg","partner4.jpg","partner5.jpg","partner6.jpg","partner7.jpg","partner8.jpg",)
?>
<!-- start section partners -->
<section class="SH-partners">
    <div class="container">
        <div class="text-center">
            <div class="SH-title mb-4" data-aos="fade-up" data-aos-duration="300">اعتماداتنا</div>
            <div class="SH-subtitle" data-aos="fade-up" data-aos-duration="500">
                هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث
                يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها
                التطبيق.
            </div>
        </div>
        <div class="logos-slider mt-5" data-aos="zoom-in" data-aos-duration="700">

            <?php
            for($logo = 0 ; $logo < 6; $logo++){
                ?>
            <div>
                <div class="logo-box">
                    <img src="assets/images/logos/<?php echo $logos1[$logo];?>">
                </div>
            </div>
            <?php

            }?>
        </div>
    </div>
</section>

<!-- start section partners -->
<section class="SH-partners">
    <div class="container">
        <div class="text-center">
            <div class="SH-title mb-4" data-aos="fade-up" data-aos-duration="300">شركاؤنا</div>
            <div class="SH-subtitle" data-aos="fade-up" data-aos-duration="500">
                هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث
                يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها
                التطبيق.
            </div>
        </div>
        <div class="row g-4">
        <?php
            for($logo2 = 0 ; $logo2 < 8; $logo2++){
                ?>
            <div class="col-md-3 col-sm-4 col-6">
                <div class="logo-box" data-aos="fade-up" data-aos-duration="700">
                    <img src="assets/images/logos/<?php echo $logos2[$logo2];?>">
                </div>
            </div>
            <?php

            }?>
            
        </div>
    </div>
</section>