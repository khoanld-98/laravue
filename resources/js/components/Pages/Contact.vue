<template>
    <div class="container-fluid" style="margin: 20px 0">
        <div class="urlsite">
            <ul>
                <li><a href="">Home</a> </li>
                <li><a href="">About</a> </li>
            </ul>
        </div>
        <h1 class="tittle text-center">Contact For Me</h1>
        <div class="contact container">
           <div class="row justify-content-center">
               <div class="col-md-4 detail-contact">
                   <div class="stt"><span class="status dot">1</span><b>Tien Du Bac Ninh</b></div>
                   <div>Xom 1 Tri phuong Tien Du Bac Ninh</div>
                   <div><span>Hotline:</span>0339957799</div>
                   <div><b>Thoi gian lam viec</b></div>
                   <div>Tu 8h --> 16h30 cac ngay trong tuan</div>
               </div>
               <div class="col-md-4 detail-contact">
                   <div class="stt"><span class="status dot">2</span><b>Tien Du Bac Ninh</b></div>
                   <div>Xom 1 Tri phuong Tien Du Bac Ninh</div>
                   <div><span>Hotline:</span>0339957799</div>
                   <div><b>Thoi gian lam viec</b></div>
                   <div>Tu 8h --> 16h30 cac ngay trong tuan</div>
               </div>
               <div class="col-md-4 detail-contact">
                   <div class="stt"><span class="status dot">3</span><b>Tien Du Bac Ninh</b></div>
                   <div>Xom 1 Tri phuong Tien Du Bac Ninh</div>
                   <div><span>Hotline:</span>0339957799</div>
                   <div><b>Thoi gian lam viec</b></div>
                   <div>Tu 8h --> 16h30 cac ngay trong tuan</div>
               </div>
               <div class="col-md-4 detail-contact">
                   <div class="stt"><span class="status dot">3</span><b>Tien Du Bac Ninh</b></div>
                   <div>Xom 1 Tri phuong Tien Du Bac Ninh</div>
                   <div><span>Hotline:</span>0339957799</div>
                   <div><b>Thoi gian lam viec</b></div>
                   <div>Tu 8h --> 16h30 cac ngay trong tuan</div>
               </div>
               <div class="col-md-4 detail-contact">
                   <div class="stt"><span class="status dot">3</span><b>Tien Du Bac Ninh</b></div>
                   <div>Xom 1 Tri phuong Tien Du Bac Ninh</div>
                   <div><span>Hotline:</span>0339957799</div>
                   <div><b>Thoi gian lam viec</b></div>
                   <div>Tu 8h --> 16h30 cac ngay trong tuan</div>
               </div>
           </div>
        </div>
        <h1 class="tittle text-center">Send email for us</h1>
        <div class="form-contact container">
            <form>
                <div class="form-group">
                    <label>Email: </label>
                    <input class="form-control" type="email" placeholder="enter Email">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Enter contact</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="text-center">
                    <button class="btn btn-primary" style="margin: auto">submit</button>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Contact"
    }
</script>

<style scoped>
    .urlsite ul li {
        display: inline-block;
        margin-right: 20px;
        font-size:20px;
    }
    .urlsite ul li a {
        text-decoration: none;
    }
    .detail-contact{
        font-size: 15px;
        padding: 30px;
    }
    .detail-contact .status {
        height: 25px;
        width: 25px;
        background-color: #ffe924;
        border-radius: 50%;
        display: inline-block;
        text-align: center;
    }
    .tittle{
        color: red;
    }
    .form-contact{
        padding: 20px;
        justify-content: center;
    }
</style>
