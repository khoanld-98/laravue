<template>
    <div class="slidebar">
        <ul class="ulsb">
            <li class="sb-item"><a class="nav-link" href="detail-producer">Oppo</a> </li>
            <li class="sb-item"><a class="nav-link" href="detail-producer">Apple</a> </li>
            <li class="sb-item"><a class="nav-link" href="detail-producer">SamSung</a> </li>
            <li class="sb-item"><a class="nav-link" href="detail-producer">Vinsmart</a> </li>
            <li class="sb-item"><a class="nav-link" href="detail-producer">Sản phẩm khác...</a> </li>
        </ul>
    </div>
</template>

<script>
    export default {
        name: "slidebarleft"
    }
</script>

<style scoped>
    .slidebar{
        justify-content: left;
       font-size: 30px;
    }
    .sb-item{
        list-style: none;
        margin-top: 10px;
        border-bottom: 1px solid white;
        text-align: center;
        background: #1b4b72;
    }
</style>
