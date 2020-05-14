<template>
    <div>
    <div class="InforHeader">
        <div class="row">
            <div class="col-md 4 offset-md-8" style="float: right">
                <div class="icon" style="float: left">
                    <a href=""><i class="fa fa-facebook-official" style="font-size: 30px"></i></a>
                    <a href=""><i class="fa fa-youtube-play" style="font-size: 30px"></i></a>
                    <a href=""><i class="fa fa-twitter-square" style="font-size: 30px"></i></a>
                    <a href=""><i class="fa fa-google-plus-square" style="font-size: 30px"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="header container-fluid">
        <nav class="navbar navbar-expand-md ">
            <div class="navbar-brand">
                <a href="">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTvawwDVzQGAqujoSRdhWwmxNcWnRiKwckGW4YoyxkhYzAq9wUG&usqp=CAU" class="rounded-circle" width="40px" height="40px">
                </a>
            </div>
            <button class="navbar-toggler buttonicon" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <div class="icon-bar"></div>
                <div class="icon-bar"></div>
                <div class="icon-bar"></div>
            </button>
            <div class=" Menu collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="home">Home</a> </li>
                    <li class="nav-item"><a class="nav-link" href="about">About</a> </li>
                    <li class="nav-item"><a class="nav-link" href="contact">Contact</a> </li>
                    <li class="nav-item"><a class="nav-link" href="information">Information</a> </li>
                </ul>
            </div>
        </nav>
    </div>
    </div>
</template>

<script>
    export default {
        name: "MenuComponents",

    }
</script>

<style scoped>
    .buttonicon{
        border: 1px solid white;
    }
    .icon-bar{
        width: 35px;
        height: 5px;
        background-color: black;
        margin: 6px 0;
    }
    .InforHeader{
        background: #1b4b72;
        border-bottom:1px solid white;
    }
    .icon a i {
        margin-left: 10px;
        color: white;

    }
    .icon a i:hover {
        color: red;
    }
    .header{
        background: #1b4b72;
        position: relative;
        color: white;
    }
    .navbar-nav{
        margin: auto;
        left: 400px;
    }
    .nav-item{
        text-decoration: none;
        margin-left: 50px;
        color: red;
        font-size: 30px;

    }
    .Menu .nav-item  a{
        color: white;
    }
    .Menu .nav-item  a:hover{
        color: red;
        text-decoration: none;
        border-bottom: 1px solid red;

    }

</style>
