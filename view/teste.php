<?php include_once("header.php") ?>

<section>
    <div class="container" id="destaque-produtos-container">
        <div  id="destaque-produtos" class="owl-carousel owl-theme">

            <div class="item">

                <div class="col-sm-6 col-imagem">
                    <img src="img/produtos/moto-x.png" alt="Moto X">
                </div>
                <div class="col-sm-6 col-descricao">
                    <h2>Smartphone Motorola Moto X Play Dual <br>Chip Desbloqueado Andoid 5.1</h2>
                    <div class="box-valor">
                        <div class="tex-noboleto text-arial-cinza" >no boleto</div>
                        <div class="text-por" text-arial-cinza>por</div>
                        <div class="text-reias">R$</div>
                        <div class="text-valor">1.259</div>
                        <div class="text-valor-centavos">,10</div>
                        <div class="text-parcelas text-arial-cinza">ou em até 8x de R$ 174,88</div>
                        <div class="text-total text-arial-cinza ">total a prazo R$ 1.399,00</div>
                    </div>
                    <a href="#" class="btn btn-comprar"><i class="fa fa-shopping-cart"> compre agora</i></a>
                </div>

            </div>

            <div class="item">

                <div class="col-sm-6 col-imagem">
                    <img src="img/produtos/moto-max.png" alt="Moto X">
                </div>
                <div class="col-sm-6 col-descricao">
                    <h2>Smartphone Motorola Moto Maxx <br>Chip Desbloqueado Android 4.4 Tela</h2>
                    <div class="box-valor">
                        <div class="tex-noboleto text-arial-cinza" >no boleto</div>
                        <div class="text-por" text-arial-cinza>por</div>
                        <div class="text-reias">R$</div>
                        <div class="text-valor">1.943</div>
                        <div class="text-valor-centavos">,33</div>
                        <div class="text-parcelas text-arial-cinza">ou em até 8x de R$ 242 ,92 sem juros</div>
                        <div class="text-total text-arial-cinza ">total a prazo R$ 1.943,36</div>
                    </div>
                    <a href="#" class="btn btn-comprar"><i class="fa fa-shopping-cart"> compre agora</i></a>
                </div>

            </div>

        </div>

    </div>




</section>

<?php include_once("footer.php") ?>

<script>
$(function (){
    $("#destaque-produtos").owlCarousel({
        autoPlay: 5000,
        items : 1,
        singleItem: true
    });

    var owlDestaque = $("#destaque-produtos").data('owlCarousel');
    
    $('#btn-destaque-prev').on("click", function () {

        owlDestaque.prev();
    });

    $('#btn-destaque-next').on("click", function () {

        owlDestaque.next();
    });


})


</script>

