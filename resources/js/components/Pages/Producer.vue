<template>
    <div class="container-fluid">
        <div class="Home container-fluid">
            <div class="product">
                <h1 class="tittleHome text-center">Hot trend</h1>
                <div class="underline-title"></div>
                <div class="row list-product" style="justify-content: center">
                    <div class="col-md-3 Item">
                        <div class="imgItem">
                            <span class="name-detail-product">Op lung dien thoai</span>
                            <img src="data:image/jpeg;base64,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">
                            <div class="caption">
                                <span class="unit-product ">$ 22</span>
                                <p class="description">description:anh bo dep trep</p>
                                <a href=""><button class="btn btn-info">Detail</button></a>
                                <a href=""><button class="btn btn-danger">Buy</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 Item">
                        <div class="imgItem">
                            <span class="name-detail-product">Op lung dien thoai</span>
                            <img src="data:image/jpeg;base64,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">
                            <div class="caption">
                                <span class="unit-product ">$ 22</span>
                                <p class="description">description:anh bo dep trep</p>
                                <a href=""><button class="btn btn-info">Detail</button></a>
                                <a href=""><button class="btn btn-danger">Buy</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 Item">
                        <div class="imgItem">
                            <span class="name-detail-product">Op lung dien thoai</span>
                            <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxAQEBAQDw4PEA0QEA8QDw8QDw8PDxAPFRIWFhUVFRYYHSggGB0lGxYVITEhJikrLi4uFx82RDMtNygtLisBCgoKDg0OFRAQFy0lHR0tLS0rLS0tLS0tKy0tLS0tLy0tKy0rLS0tLS0tLy0rKy0tLSstLS0tLS0tLS0tMi0tNf/AABEIAOEA4QMBIgACEQEDEQH/xAAcAAEAAgMBAQEAAAAAAAAAAAAAAQUCBgcEAwj/xABNEAABAwICBAYNBwoGAwEAAAABAAIDBBEFIQYSMXEyQVFhsbMHEyIjMzRyc3SBkaGyJGJkgqPB0RQlJjVCQ1KiwuEVFlOSw/Bjg7Q2/8QAFgEBAQEAAAAAAAAAAAAAAAAAAAEC/8QAHBEBAQEAAwEBAQAAAAAAAAAAAAEREiExQWEC/9oADAMBAAIRAxEAPwDuKIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIhK1qv07w6Fxa6pa5w29rbJIL72ghBsqLRZ+ynQN4ImfuiI+Oy+UfZLZJ4GkkfkLXkhBNxcZNe4+7LZtQb+i59/nWvee9YXJY7Dq1juint715K7TDEI/GO0UYIuA+nmmlcPmsEjSePM2HOi46Yi5NNp+w5flWIudx9opqFgJ3Sl5CiPSJ8t9WDGZbC93SMivmBYdoh5/cUMdaBRc4pdIK8WbHhcxA2PkfXvJ3l0DelfeXGccd4Ohjbfjc29s/nVDOJRc/XQEXIptMq3MSVsUTgbFsNCKi2241jPqHisQ48a8b9Kah+X+IYi48kVHhkN/brlEyO0aw5R7VK5FQYhXAtex2KzE56s00Rac9hbHSOt7bq+hx3FTmyhDchwo6tw/mjYLj70Mjf0XPpK7H3cGGNuWVoYxnzl9SPbb1Lyy0mkjybVEMTbm1+0A24r2D7H1lVHS0XLv8sY8/wmKxN8h77/AMsQVTimJ43g5a6oeyqp3u1WSXJBdYnULrAtdYcY5c8jYOzotE7G+nhxLWinjbFUNbrx6pJbLGDY5HY4G1xxg35bb2gIiICIiAiIgIiICIiDVdOJ5XiGihdqyVT9Vzs8o+P1WBvutxrWK/EMFwyQUr6aOaZtteWZrZCXcdiQc/UG8V7g22zEB+c6Qn+Cq6uP8T7VwHSh+tXYgXBzi2olGtmdVjX6o1ubYM1qD9EYN+SSxNlp4Ymsd/DFGwg7bHVHPtGRBBFwQVZrS+xT4hF86OJ58otLSfY0exboisHmwJ5AStCh7S1k2K1jGyufK5tOyQgRta0kBxuDYZHOxNgAAXEA75NwTuXJtP32wKj5DIxrvJzJHtA9iDatGtO4KqQRt7VqlwYHROkAa88Frmva02OwEXz4gtyX510ENsQjABbrQSuIN7kBgkaRcbLtBC/RQREWVHpXI8xNgjNn1DxFf5pIBHrv7AeVXqp8VHyik8/H8EyUa5iWO4dhMjKbtcPbNVpkml1tZxPJqMe4+vVbnYEkOA2/BMUjqY9eOwsbOaHNcAbXBDm5OaRYhwyK4D2Q3h2LYhrBzrEEWudVojZcnLYL5710/sNuJoYycyYgCTtIbVVTG33NDRuAUwb+VBUqFBCgqSoQYlUWnFI2bDq1jwCBTTSNvxPjaZGH1OaFfKr0nF6Gt9Equpcg5noXQthhwmsabSvrpIXc7Hvc0+4n2rtK4Vhd5KXBIhHEe1VYqnSSNJe1n+IU8WrGeIl0rCTyN3g91QEREBERAREQEREBERBrWJ/rGj3VPVMXG63SE0k+PQCnEv5VNUMDybBlzI062XdCziQLjPeuzYsPzhRf+/qx+C5RproNWOr53wt73O8v1iHlvdHiIaSTtyaCRybLsl9Nvxv3YqHyCn9GgP8ANIPuW6qh0Nwg0tMyN17tZGxoIDXBjG2GsBsJdrutxa9uJXy2PnLsO5ck0/H5iptmUuwi4Nn2zHGM11yTYdxWgYjo8+vwhkUZ7418thlcjtt8rkC92t2nZrcqlVp1DpEcQxaCUwCAR0FSwN1tZzrQyPJJsMs8hbn48u4Bci0B0CqYqjt1SLWBjvqPjaI7jXye1pcXAFuQtZzje4APXkkk8Tu+iqMX8NS+kRdEv4q3VTjA77S+fi/q/FKOSYxpEaDFsZtTiYztZGLu1QwhlhfLNp18xlsHq3TsLi2HwDkiePZV1P4qg7IegFVNWyVNNbUqCNclkrwHWte0bXFthlsAyBuSSBv2guAGhpmRG92sDBcAOI1nvc4i51SXyPNrmw1Rtus5PTa2NQpUIIKhSVCDFVukYvR1fotR1TlZlV+Oi9LUjlp5+rcg5TgEnybC2lpObn3sC2wxbDh7QSCu3LjuB0rJMJwwubd7cSaWu1i0hoJkcLjaO9g6uwlreQW7EgIiICIiAiIgIiICIiDXcY8fod83Vu/BXhVHjfjtD5bx9nIr1aisUUrEqjCQ5HcehVGho+SNHJLUD7Vyu5uC7yXdCpdDvFd09UPtnKC6KhSVCoxKq8YHd0x/87Pi/urePjVVjvCp/PM+Nn4qVF0QoUqFkQoUlZhB8ioWUixQYlePGB8nqPMzfAV7SvJig7xN5qT4Cg5po262DULibWryPW6GRrR63OA9a68uQ6Mi+CUu3KtLsiRm2Jz2+8DLjXXkBERAREQEREBERAREQa7jvjlB50j7KVXqosf8bofPt6qZXq1FQsSpRUYyu7l3ku6FTaH+Lv5qusH2zlbzcF3ku6FUaI+Al9MrOucoLtQpUFBF1VY47ODmlb1sStVVY5th8tnXQpUXihSoWRBQORQgOddYqSoQQV5sQ8FL5uT4SvSV8K0d7f5D+goOX6LH8xQnkrQPU5mofc4ldfXHdFT+j7easb0MXYkBERAREQEREBERAREQa7pD41Q+kxj7OdXqodJPGKH0qH4JlerUVBREVR85uC7yXdCp9ET3qfmrazrSribgu8k9CpdDz3up9Oq+sKir5QVKxVBVWOfu/LZ18KtFVY9wWeUz/wCiFSovVBUqCsiFClQggqFJUIIK+NVwH+S7oX1KwmHcu3HoQco0UP6PHmqx0MXY1xjRQ/o7JzVTf+NdnQEREBERAREQEREBERBrelHhqI/S6f4ZlfKh0sykoj9Mp+iT8VerUUUFSoKoxk2HcehUOhp7mr5q6q+O6vite0LOVb6dP9yg2MqEKKiFVaQcAb2dfCrVVOkfgvWzrolKi+UFEWRChSViUEFEUFBCxfsKyWJCDkOibv0dn5qpn/Gu0rimin/56qHJVR9MS7WgIiICIiAiIgIiICIiDWdMeHRH6bT/ANX4q/Wv6bGxoj9Np+n+62BaiixKkqFQWt6FHx7mrpehq2RaxoQc8Q5q5/VsKlI2dQpUKgqjSXwJPIWdYxWyp9KTandvb8QP3KVGwBQjdg3IsiFBUqCghQUKhAUcYQqBtG9ByDRX9Q1o5KpnxxrtLdg3Li2i4/MmJDkqm9Y1doiPct3DoQZIiICIiAiIgIiICIiDV9OtlF6dT/GFsK1zT89xR+nUvWtWxLUUKhFBVRIWraDnu8RH00++Ji2e61XQc99xMfTG++BiitrUIoVC6ptLfFncxH3q4JVLpe75JJ/39lyVGxN2DcFJWLNg3DoUrAhQhUIBUIoQCo5EUIOQ6N/qfFhyVTetC7NT8Bnkt6FxnR39V40OSrHXFdkpD3uPyGdAQfZERAREQEREBERAREQal2RT3qlP02l65i2QrWeyR4Gm9NpeuYtlK1AuhUKFRK1LQc9/xUfTI+oatsWpaEeMYt6YzqQlVtqIoKAVRaZn5HLuPwOV4VQacH5DN5LurelRssfBbuHQpKwiPct8lvQs1gQVCKCgKCii6ASoRQg5Do4fzdjvNVN69y7LQeCi82z4QuMaOH5DpAOSpb1712XDT3mHzUfwhB6UREBERAREQEREBERBp3ZOdq00DjkBWUxJ4haVrugFbMSvFpbgorqSWnyDnC8ZOwSDNv4etaXgWnjadv5LirZYKqDvZl7W+RsgGQJDASHW5rHbfiWoOgrFa/Bpthr8m1jCdtiyZuXravt/mzDuPEKRvlzxs+IhUWTp3A21CedatoRKBWYvGcn/AJUx+qduqWaoPuV5Fj9C/gV1G8/NqYHH3OWq6Twy09U3FMOLJjqCOrp2PDu2x5WNm3JyAzGYIBzBNsyX7V2N/uoutHp+yhQOA7Y2oif+00xh4aeMXac/YrKLTmgcAe2TNadjnUlWGn62pb3rSNhnkIGQvzLXNM5XOoZxqEdw7Pe1zR73BeoaXYcdtbC0fPJj+IBZPxbD6hjoxWUj2yNLXBtRDexFss9qzZd9XrPF3h9Q2SGKRpu18cbmnlBaCvsSuY0OkFRhBNPLGauhBJgmhc0ua0m9gdn1SRbPMhW1L2TaOQ6vaKth+cyG3uk51EbuSvO+VwOwW3qhZpxRHa6oHF4rUPsb22sa4L7N0vw87atjdvhGSxbNvDaFL39WdfFxHKSbFtudfVVMGkmHvNmV9G53IKmDW9mtdWMVQx/Aex3kua7oSFfS6i6EHkXgxrFYqSCSoncGxxi/O937LG8ricgFUcnwWRzaPSLUYXuFS3uQWg+MyAnMge9dpwRxNNTFws4wQki97HUFxfjXCdGRNIyohA77iMzXSNaTa5eXW3azj7F3+niDGNYNjGtaNwFkH0REQEREBERAREQEREBanpTFSz9y+COV7cg9zbkcwK2PEZdSNx47WVbQUgDQ4i7nC5O/iQaC/AIQe5gjjP8AE0Fh9t1534C3Ozn8eydw4+YrppYvm6IHaAfUiuXv0d84Rya7nHk47rx1mjcQGs7WAH8UED7kbLXbmc+NdYdSRnbGw/VaqiTD45JiCxuoywsAAL/9B9yYOcvnnaLCZz2j/Wgp5feWk+9efUcTcCiLidpp4g7+UghdXfh0fE224kfevkcKiO1vvJU4xeVc6goJncOODmLHTxD+VxVjFo/GW98a9ztl2ulLdwEhK3OTA4rdyxt+drSOheVtOxrXWYAQCLDubHYNnOnE5VoM2Esjee0OkEmY1mthB59jbkbyvPUYZVvtd7uYmGI2/wBoXS8Kw2PU17G7vnO2bBxr7vw5h5fcekK8TdcnZo/VO/03c74JR99lY0+ATC2s4NA2hjy2/qvl7eNdHZhbRmCQdw+5TZzHAOOR4LlLKa5/U4LcdyZwRbhTGYeoH1qvl0buQSA4jYX0sLveWlddYxr+E1pO4ZqHYfCf3TP9oVzU7cg/wOYHvdXJFe3AfNE0eplrL30+g1XUuZ2yr7c4GzDNNNJblsX3I9XIunNweA/u/Y5w+9eylwpjHscy7dU3te4OXOiK3RHQ2Oh7tzhLUWsHWs1g49UfetpREBERAREQEREBERAREQeHGPBO9fwlIR3A3KcX8E7cfhKRcEblR83BQQvoQsSEV8JL8SraW/bZcuMferchV1MO+y72/wBSmK+zgoaF9HhYtC0jMjJU1b4Uj+LUJ9oCuwFVV7e+t3M+NZonAnd4aOS495XsIXkwG3afrP6V7SFRLAvhiUd2Hmz9n9rr0sCwrB3t/ku6EHkpnOsx2WZsVYtVdSeDb5xvQFZlZ/mLamNeti8sa9bFplVT1EgqdQPdquAsL7O5/EKzwyUvia4m5zBO4kKpn8cZub0OVhgbrwjIjun5HIjuioLBERAREQEREBERAREQePFvBO3HoKiHgN3BEVEFYlSiKxKr6fwsv1f6kRB6HLFqIqPsqqv8K3cz40RQTgPgT5b+le0oiozjWFZ4N/ku6ERB4qXgN86PhVoURZi1lGvWzYpRVlTT+OR7m9Dl7sA8D9d/xIigskREBERAREQf/9k=">
                            <div class="caption">
                                <span class="unit-product ">$ 22</span>
                                <p class="description">description:anh bo dep trep</p>
                                <a href=""><button class="btn btn-info">Detail</button></a>
                                <a href=""><button class="btn btn-danger">Buy</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Producer"
    }
</script>

<style scoped>
    .list-product{
        margin-top: 20px;
        margin-bottom:20px;
    }
    .Item{
        border-right: 2px solid #1b4b72;
        margin: 10px 10px;
    }
    .imgItem{
        justify-content: center;
    }
    .imgItem img {
        width: 100%;
        height: 100%;
        margin: auto;
    }
    .tittleHome{
        color: red;
    }
    .name-detail-product{
        position: absolute;
        left: auto;
        top: -20px;
        background: #9561e2;
        text-align: center;
        border-radius: 30px 30px 30px 30px;
        color: #000;
        padding: 5px 10px;
        font-size: 20px;
    }
    .name-detail-product:hover{
        background: #b3d7f5;
        font-size: 25px;
        color: #ffe924;
    }
    .unit-product{
        text-align: center;
        color: black;
        font-size: 20px;
    }
    .description{
        color: black;
        font-size: 18px;
    }
    .caption{
        justify-content: center;
        text-align: center;
    }
    .underline-title{
        width: 20%;
        border-bottom: 2px solid #1d68a7;
        margin: auto;
    }
</style>
