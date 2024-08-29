<div class="compe-mobile">
    <div class="conte">
        <div class="punggawa d-flex justify-content-center flex-column">
            <div class="tirta position-relative tirtaGanteng">
                <img src="assets/compe/competition_tirta_mobile.png">
                <div class="category position-absolute text-end">
                    <h1 class="title font1 m-0">TIRTA</h1>
                    <p class="desc font3">CATEGORY</p>
                </div>
                <div class="vignette-effect-front"></div>
            </div>
            <div class="agni position-relative agniAyu">
                <img src="assets/compe/competition_agni_mobile.png">
                <div class="category position-absolute text-end">
                    <h1 class="title font1 m-0">AGNI</h1>
                    <p class="desc font3">CATEGORY</p>
                </div>
                <div class="vignette-effect-front"></div>
            </div>
            <div class="bayu position-relative bayuGanteng">
                <img src="assets/compe/competition_bayu_mobile.png">
                <div class="category position-absolute text-end">
                    <h1 class="title font1 m-0">BAYU</h1>
                    <p class="desc font3">CATEGORY</p>
                </div>
                <div class="vignette-effect-front"></div>
            </div>
            <div class="buana position-relative buanaAyu">
                <img src="assets/compe/competition_buana_mobile.png">
                <div class="category position-absolute text-end">
                    <h1 class="title font1 m-0">BUANA</h1>
                    <p class="desc font3">CATEGORY</p>
                </div>
                <div class="vignette-effect-front"></div>
            </div>
        </div>
    </div>
</div>
<?php include "competitions/agni.php" ?>
<?php include "competitions/tirta.php" ?>
<?php include "competitions/bayu.php" ?>
<?php include "competitions/buana.php" ?>
<script>
    $(document).ready(function() {
        $('.agniAyu').click(function() {
            $('.container-tirta').css('display', 'none');
            $('.container-agni').css('display', 'block');
            $('.container-bayu').css('display', 'none');
            $('.container-buana').css('display', 'none');
            $('.conte').css('display', 'none');
        });

        $('.buanaAyu').click(function() {
            $('.container-tirta').css('display', 'none');
            $('.container-agni').css('display', 'none');
            $('.container-bayu').css('display', 'none');
            $('.container-buana').css('display', 'block');
            $('.conte').css('display', 'none');
        });

        $('.tirtaGanteng').click(function() {
            $('.container-tirta').css('display', 'block');
            $('.container-agni').css('display', 'none');
            $('.container-bayu').css('display', 'none');
            $('.container-buana').css('display', 'none');
            $('.conte').css('display', 'none');
        });

        $('.bayuGanteng').click(function() {
            $('.container-tirta').css('display', 'none');
            $('.container-agni').css('display', 'none');
            $('.container-bayu').css('display', 'block');
            $('.container-buana').css('display', 'none');
            $('.conte').css('display', 'none');
        });

        $('.btn-arrow').click(function() {
            $('.container-agni').css('display', 'none');
            $('.container-buana').css('display', 'none');
            $('.container-bayu').css('display', 'none');
            $('.container-tirta').css('display', 'none');
            $('.conte').css('display', 'block');
        });
    });
</script>