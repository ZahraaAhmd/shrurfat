 <?php
 $photos= array("img1.jpg","img1.webp","img4.jpg","img5.jpg","img6.jpg","img7.jpg","img8.webp","img9.webp","img10.webp","img11.webp","img13.webp","img16.webp");
 $counter=1;
 
 ?>
 <!--start section projects -->
 <section class="SH-projects">
     <div class="container">
         <div class="mb-5">
             <h4 class="mb-4 page-title">
                 تتميز مجمعاتنا بأربع ركائز أساسية، وهي:

                 <span>
                     المواقع الاستراتيجية، الجودة العالية في التصميم والتنفيذ، المرافق المتكاملة، وإثراء نمط الحياة
                 </span>
             </h4>
             <div class="SH-subtitle">في شرفات تجد ما تبحث عنه واكثر. فقط القي نظره على بعض اعمالنا. </div>
         </div>
         <div class="projects-filter">
             <div>
                 <select class="form-select" aria-label="Default select example">
                     <option selected>المنطقة</option>
                     <option value="1">منطقه 1</option>
                     <option value="2">منطقه 2</option>
                     <option value="3">منطقه 3</option>
                 </select>
                 <select class="form-select" aria-label="Default select example">
                     <option selected>الحي</option>
                     <option value="1">منطقه 1</option>
                     <option value="2">منطقه 2</option>
                     <option value="3">منطقه 3</option>
                 </select>
                 <select class="form-select" aria-label="Default select example">
                     <option selected>نوع العقار</option>
                     <option value="1">سكني</option>
                     <option value="2">تجاري</option>
                 </select>
                 <select class="form-select" aria-label="Default select example">
                     <option selected>حسب الحالة</option>
                     <option value="1">المشاريع المتاحة</option>
                     <option value="2">المشاريع المباعه</option>
                     <option value="3">المشاريع القريبه</option>
                 </select>
             </div>
             <div>
                 <select class="form-select" aria-label="Default select example">
                     <option selected>السعر</option>
                     <option value="1">من الاعلي للاقل</option>
                     <option value="2">من الاقل للاعلي</option>
                     <option value="3">الاحدث</option>
                     <option value="3">الاقدم</option>
                 </select>
             </div>
         </div>



         <?php  for($row=0;$row<6;$row++){  ?>
         <div class="row g-3 mb-3 projects-row">
             <div class="col-md-7 col-sm-6 col-12">
                 <div class="project-box">
                     <?php if($row === 0){ ?>
                     <div class="tag ailable">متاح</div>
                     <div class="tag feature">مميز</div>
                     <?php } ?>
                     <img src="assets/images/<?php echo $photos[$row];?>">
                     <div class="project-content">
                         <h3>اسم المشروع</h3>
                         <ul class="mb-3">
                             <li>فيلا</li>
                             <li>جده</li>
                             <li>عدد الوحدات : <span>324</span></li>
                         </ul>
                         <div class="row g-3">
                             <div class="col">
                                 <a href="project-details.php" class="btn btn-warning w-100">تفاصيل المشروع</a>
                             </div>
                             <div class="col">
                                 <a href="project-details.php" class="btn btn-warning w-100">تحديثات المشروع</a>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-md-5 col-sm-6 col-12">
                 <div class="project-box">
                     <img src="assets/images/<?php echo $photos[$counter];?>">
                     <div class="project-content">
                         <h3>اسم المشروع</h3>
                         <ul class="mb-3">
                             <li>فيلا</li>
                             <li>جده</li>
                             <li>عدد الوحدات : <span>324</span></li>
                         </ul>
                         <div class="row">
                             <div class="col">
                                 <a href="project-details.php" class="btn btn-warning w-100">تفاصيل المشروع</a>
                             </div>
                             <div class="col">
                                 <a href="project-details.php" class="btn btn-warning w-100">تحديثات المشروع</a>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <?php  $counter+=2; } ?>
         <nav aria-label="Page navigation example" class="pt-4">
             <ul class="pagination justify-content-center ">
                 <li class="page-item disabled">
                     <a class="page-link"><i class="fa-solid fa-chevron-right"></i></a>
                 </li>
                 <li class="page-item"><a class="page-link" href="project-details.php">1</a></li>
                 <li class="page-item active"><a class="page-link" href="project-details.php">2</a></li>
                 <li class="page-item"><a class="page-link" href="project-details.php">3</a></li>
                 <li class="page-item">
                     <a class="page-link" href="project-details.php"><i class="fa-solid fa-chevron-left"></i></a>
                 </li>
             </ul>
         </nav>
     </div>
 </section>