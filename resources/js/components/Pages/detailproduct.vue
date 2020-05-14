<template>
    <div class="container" style="margin: 20px 0">
        <div class="detail">
            <div class="url-detail">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href=""> Detail product</a></li>
                </ul>
            </div>
            <div class="row content">
                <div class="col-md-6">
                    <div class="img-content justify-content-center">
                        <a href=""  data-toggle="modal" data-target="#detail-product">
                        <img src="https://cdn.nhanh.vn/cdn/store/7534/ps/20190210/19010333__1350x1350.JPG" width="100%" height="100%">
                        </a>
                    </div>
                    <div class="img-about">
                        <div class="row">
                            <div class="col-md-3 img">
                                <a href=""><img src="https://cdn.nhanh.vn/cdn/store/7534/ps/20190210/19010333__1350x1350.JPG" width="100%" ></a>
                            </div>
                            <div class="col-md-3 img">
                                <a href=""><img src="https://cdn.nhanh.vn/cdn/store/7534/ps/20190210/19010333__1350x1350.JPG" width="100%" ></a>
                            </div>
                            <div class="col-md-3 img">
                                <a href=""><img src="https://cdn.nhanh.vn/cdn/store/7534/ps/20190210/19010333__1350x1350.JPG" width="100%" ></a>
                            </div>
                            <div class="col-md-3 img">
                                <a href=""><img src="https://cdn.nhanh.vn/cdn/store/7534/ps/20190210/19010333__1350x1350.JPG" width="100%" ></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="tittle">
                        <span class="icon">yeu thich:</span>
                        <b style="font-size: 20px">[ FULL KHO ] [ FREESHIP ĐƠN TỪ 50K TOÀN QUỐC ] ỐP LƯNG NẮP TRƯỢT BẢO VỆ CAMERA - ỐP IPHONE DẺO</b>
                    </div>
                    <div class="price-product">
                        <p class="price-loser">d29.0000</p>
                        <h3 class="real-price">d25000 290000 <span class="icon">14% giam gia</span></h3>
                        <di class="adver">O dau re hon. shop tang mien phu</di>
                    </div>
                    <div class="promotion">
                        <span class="label">khuyen mai:</span>
                        <p>Combo mua 2 tang 1 tinh tien 3</p>
                    </div>
                    <div class="transition">
                        <span class="label">Van chuyen:</span>
                            <ul>
                                <li> Ha noi : free shop</li>
                                <li>cac tinh khac : 50.000d</li>
                            </ul>
                    </div>
                    <div class="color-product">
                        <span class="label">Mau sac:</span>
                        <ul>
                            <a href=""> <li>xanh</li> </a>
                            <a href=""><li>do</li></a>
                            <a href=""><li>tim</li></a>
                            <a href=""><li>vang</li></a>
                            <a href=""><li>luc</li></a>
                        </ul>
                    </div>

                    <div class="quality-product">
                        <span class="label">So luong:</span>
                        <button style="font-size: 15px" onclick="document.getElementById('quality').stepDown()">-</button>
                            <input id='quality' class="quality-input" width="40px" min="0" name="quantity" value="1" type="number">
                        <button style="font-size: 15px" onclick="document.getElementById('quality').stepUp()">+</button>
                    </div>
                    <br>
                    <div class="buy-product">
                        <span class="label">Mua:</span>
                        <button class="btn btn-primary" > <i class="fa fa-shopping-cart" aria-hidden="true"></i> Them vao Gio hang</button>
                        <button class="btn btn-danger"> Mua ngay </button>
                    </div>
                </div>
            </div>
            <div class="description text-center">
                <h3> Mo ta san pham</h3>
                <div class="detai-des">
                    12314325
                </div>
            </div>
        </div>
        <!-------------------------
            Xu Ly modal mua san pham hoac them san pham vao gio hang
        -->
        <div class="modal justify-content-center" id="detail-product" >
            <div class="modals">
                <div class="modal-content">
                    <div class="modal-body">
                        <iframe width="100%" height="340px"
                                src="https://www.youtube.com/embed/DGn3brKtW4U?autoplay=1">
                        </iframe>
                    </div>
                </div>

            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "detailproduct"
    }
</script>

<style scoped>
    .url-detail ul li {
        list-style: none;
        display: inline-block;
        font-size: 20px;
    }
    .url-detail ul li a {
        text-decoration: none;
        color: black;
    }
    .content{
        padding: 20px;
    }
    .img-content{
        margin: 20px 0;
    }
    .img-content img{
        margin: auto;
        border-radius: 25px;
        border: 1px solid red;
    }
    .img-about .row .img img {
        margin: auto;
        border-radius: 25px;
        border: 1px solid red;
    }
    .img img:hover{
        border: 1px solid #1b1e21;
    }
    .icon{
        height: 25px;
        background: red;
        font-size: 15px;
    }
    .transition ul li {
        list-style: none;
    }
    .color-product ul li{
        list-style: none;
        display: inline-block;
        padding: 10px;
        border: 1px solid white;
        color: #1b1e21;
    }
    .label{
        font-size: 20px;
        color: #1d68a7;
    }
    .quality-input {
        width: 50px;
    }
    /* xoa button trong input number */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
    input[type=number] {
        -moz-appearance: textfield;
    }


    /* chinh sua css cua modal */
    .modals {
        transform: translateY(40%);
       width: 500px;
        height: 500px;
        margin: auto;
    }
</style>
