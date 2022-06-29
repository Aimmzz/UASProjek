<?php
include "coba.php";
$query = mysqli_query($connection,'SELECT * FROM barang');
?>
        <!-- Header-->
        <header class="bg-dark py-3">
        <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">QURHIMGYO</h1>
                    <p class="lead fw-normal text-white-50 mb-0">Menyediakan Pakaian Impian Anda</p>
                </div>
        </div>
        </header>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row">
                    <?php if(mysqli_num_rows($query)>0){ ?>
                    <?php
                        while($data = mysqli_fetch_array($query)){
                    ?>
                    <div class="col-md-2 col-md-3">
                        <div class="card h-100" style="height: 200px; width: 200px">
                            <!-- Product image-->
                            <img class="card-img-top" src="uploads/<?= $data['foto'];?>" alt="..."/>
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"><?= $data['nama_barang'];?></h5>
                                    <p>Harga : Rp.<?= $data['harga'];?></p>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <!-- <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="<?= base_url(); ?>katalog/detailBaju/<?= $data['id_barang'];?>">Lihat Barang</a></div>
                            </div> -->
                        </div>
                    </div>
                    <?php } ?>
                    <?php } ?>
                </div>
            </div>
                
        </section>