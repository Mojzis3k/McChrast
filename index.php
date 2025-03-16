<?php
include "header.php";
include "nav.php";
?>

<main>
    <style>
        .pozadi {
            background-image: url("IMGS/2025-01-30_15.42.19.jpg");
            background-repeat: no-repeat;
            position: absolute;
            background-size: cover;
            width: 100%;
            height: 100dvh;
        }
    </style>
    <div class="container position-relative">
        <div class="row d-flex justify-content-center bila">
            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-12 col-xl-12 ">
                <div class="row d-flex justify-content-center">
                    <div class="col-xs-10 col-sm-10 col-md-12 col-lg-12 col-xl-12 blok">
                        <h1 class="text-center">Vítejte na McChrast</h1>
                        <h2 class="text-center">Na serveru plném zábavy</h2>
                        <button type="button" class="btn btn-primary mt-4" id="ip">Začít hrát</button>
                        <h3 class="mt-4" id="ip_hide">IP: play.mcchrast.cz</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-12 col-xl-12">
                <h3 class="text-center fs-2 mt-5 mb-2">Co u nás najdete?</h3>
                <div class="row d-flex justify-content-center">
                    <div class="col-xs-10 col-sm-10 col-md-8 col-lg-8 col-xl-6 d-block justify-content-center">
                        <p class="text-center mb-5">
                            McChrast je jedinečný český Minecraft server zaměřený na výstavbu reálných měst v
                            měřítku 1:1.
                            Na našem serveru můžete prozkoumat a podílet se na
                            detailní rekonstrukci skutečných českých lokalit, včetně města Chrast u Chrudimi, Prahy
                            a
                            Štěchovic!
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 d-flex justify-content-center">
                        <div class="row  d-flex justify-content-center">
                            <div
                                class="col-xs-10 col-sm-10 col-lg-10 col-xl-10 d-flex justify-content-center align-items-center flex-column">
                                <img src="IMGS/2025-01-30_15.51.57.jpg" alt="Chrast"
                                    style="width: 100%; border-radius: 15px;">
                                <button type="button" class="btn btn-primary mt-2 mb-2 but"><i
                                        class="bi bi-geo-alt-fill me-2"></i><a
                                        href="https://mapy.cz/zakladni?q=chrast&source=muni&id=2269&pid=91318831&newest=1&yaw=2.433&fov=1.257&pitch=0.063&x=15.9349745&y=49.9017474&ds=2&z=19&ovl=8"
                                        target="_blank">Chrast</a></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 d-flex justify-content-center">
                        <div class="row  d-flex justify-content-center">
                            <div
                                class="col-xs-10 col-sm-10 col-lg-10 col-xl-10 d-flex justify-content-center align-items-center flex-column">
                                <img src="IMGS/2025-01-30_20.53.13.jpg" alt="Praha"
                                    style="width: 100%; border-radius: 15px;">
                                <button type="button" class="btn btn-primary mt-2 mb-2 but"><i
                                        class="bi bi-geo-alt-fill me-2"></i><a
                                        href="https://mapy.cz/zakladni?source=base&id=1916001&pid=101855155&newest=1&yaw=1.202&fov=1.571&pitch=-0.263&x=14.3981604&y=50.0896638&ds=1&z=18&ovl=8"
                                        target="_blank">Praha</a></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 d-flex justify-content-center">
                        <div class="row  d-flex justify-content-center">
                            <div
                                class="col-xs-10 col-sm-10 col-lg-10 col-xl-10 d-flex justify-content-center align-items-center flex-column">
                                <img src="IMGS/2025-02-01_14.12.41.jpg" alt="štěchovice"
                                    style="width: 100%; border-radius: 15px;">
                                <button type="button" class="btn btn-primary mt-2 mb-2 but"><i
                                        class="bi bi-geo-alt-fill me-2"></i><a
                                        href="https://mapy.cz/zakladni?q=Štěchovic&source=muni&id=4290&pid=76121495&newest=1&yaw=2.682&fov=1.257&pitch=-0.064&x=14.4005421&y=49.8537849&ds=2&z=17&ovl=8"
                                        target="_blank">Štěchovice</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center mt-5">
            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-9 col-xl-9">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 d-flex justify-content-center">
                        <img src="IMGS/kramsmor_full.png" alt="kramsmor" class="postava">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center flex-column">
                        <h4>Přidej se k naší komunitě!</h4>
                        <p class="text-center">Připoj se k McChrast a zažij nekonečná
                            dobrodružství s ostatními hráči! Čekají tě eventy, skvělá atmosféra a aktivní
                            komunita.</p>
                        <button type="button" id="tlacitko" class="btn btn-primary mt-3 flex-row d-flex">
                            <a href="https://discord.gg/RGfc5QJNeZ" target="_blank">Připojit se
                            <img src="IMGS/discord.svg" alt="Discord" id="static" class="ms-1">
                            </a>
                        </button>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 d-flex justify-content-center">
                        <img src="IMGS/ZaseMaZi_full.png" alt="zasemazi" class="postava">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include "footer.php";
    ?>