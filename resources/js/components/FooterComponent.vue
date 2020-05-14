<template>
    <div class="footer">
        <div class="row">
            <div class="col-md-4">
                <div class="headerfooter">
                    Register
                    <div class="underline"></div>
                </div>
                <div class="bodyfooter" style="justify-content: center">
                  <form method="post" action="#" enctype="multipart/form-data">

                          <span>Email</span>
                      <input class="form-control" placeholder="Enter email">

                      <button class="send btn btn-success" style="margin: auto"><span>send</span></button>
                  </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="headerfooter">
                    Introduce
                    <div class="underline"></div>
                </div>
                <div class="bodyfooter">
                    <ul>
                        <li>Nguyen van troi Ha Dong HN</li>
                        <li>Email: Khoanld98@gmail.com</li>
                        <li>hotline: 033 995 7799</li>
                        <li>Fullname: Le Dac Khoan</li>
                        <li>Đem lại cho Quý khách dịch vụ tốt nhất trong công nghệ. Chúng tôi đang ngày càng hoàn thiện sản phẩm và dịch vụ của mình nhằm không ngừng đáp ứng sự tin tưởng và niềm tin của khách hàng</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="headerfooter">
                    FaceBook
                    <div class="underline"></div>
                </div>
                <div class="bodyfooter" style="justify-content: center">
                    <div class="fb-page" data-href="https://www.facebook.com/G007-1229634433866552/" data-tabs="timeline" data-width="300" data-height="500" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/G007-1229634433866552/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/G007-1229634433866552/">G.007</a></blockquote></div>
                </div>
            </div>
        </div>
        <div class="compaty">
            <div class="footer-copyright text-center py-3">© 2020 Copyright:
                <a href="https://www.facebook.com/kawaibii"> Le Khoan</a>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "FooterComponent"
    }
</script>

<style scoped>
    .headerfooter{
        font-size: 30px;
        margin-bottom: 30px;
        text-align: center;
    }
    .underline{
        margin: auto;
        border-bottom: 4px solid red;
        width: 40%;
    }
    .footer{
        background: #1b4b72;
        color: white;
    }
</style>
