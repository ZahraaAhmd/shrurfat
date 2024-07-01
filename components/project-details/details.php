<!--start section projects -->
<section class="SH-project-details">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">الرئيسية</a></li>
                    <li class="breadcrumb-item"><a href="#">المشاريع</a></li>
                    <li class="breadcrumb-item active" aria-current="page">اسم المشروع</li>
                </ol>
            </nav>
            <?php include "components/project-details/title.php";?>
            <?php include "components/project-details/book.php";?>
            <?php //include "components/project-details/slider.php";?>
            <div class="row pt-4">
                <div class="col-lg right-side">
                
                <?php include "components/project-details/overview.php";?>
                <?php include "components/project-details/about.php";?>
                <?php include "components/project-details/gallery.php";?>
                <?php include "components/project-details/map.php";?>
                </div>
                <div class="col-lg-auto d-none d-lg-block">
                <?php include "components/project-details/contact.php";?>
                </div>
            </div>
        </div>
    </section>