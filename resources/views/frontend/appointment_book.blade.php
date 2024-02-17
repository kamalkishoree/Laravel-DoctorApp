@extends('frontend.layouts.default')
@section('content')
<section class="banner_a">
    <div class="container">
        <div class="row">
            <div class="col-md-6"></div>
            <div class="col-md-6">
                <div class="banner_right">
                    <h5>BE hear Happy</h5>
                    <h3>Lorem Ipsum</h3>
                    <h2>simply simply simply</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the indstandard dummy text ever</p>
                    <a href="#" class="btn btn-primary">Contact us</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="book">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="bbok_left">
                    <h2>Make an Appointment !</h2>
                    <form>
                        <div class="mb-3">
                            <label for="disabledSelect" class="form-label">Select Specialist</label>
                            <select id="disabledSelect" class="form-select">
                                <option>Disabled select</option>
                                <option>Dental</option>
                                <option value="">Radiation</option>
                                <option value="">Cardologist</option>
                            </select>

                        </div><div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label"> Diseases</label>
                            <input type="text" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Select Date</label>
                            <input type="date" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Select Time</label>
                            <input type="time" class="form-control" id="exampleInputPassword1">
                        </div>
                        <!-- <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div> -->
                        <button type="submit" class="btn btn-primary">Book Appointment</button>
                    </form>
                </div>
            </div>
            <div class="col-md-6"><img src="{{asset('web_assets/assets/img/217385fbe4576efea6f9db603381436c.png')}}"></div>
        </div>
    </div>
</section>
<section class="section aboutus-section">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="right"><img src="assets/img/26b702778cc73ad0a678d3d9c4f21af8.png" alt=""></div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="left">
                    <div class="section-header_a">
                        <h5>WHY CHOOSE US</h5>
                        <h2>We are Achieve the Success of <span>Heart Surgery</span></h2>
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    <div class="feature-col row">
                        <div class="col-12 col-md-6">
                            <div class="feature-box">
                                <div class="corner-img"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAE8AAABMCAYAAAAsoOooAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMDY3IDc5LjE1Nzc0NywgMjAxNS8wMy8zMC0yMzo0MDo0MiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTUgKFdpbmRvd3MpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjg4QUVBNDQ3Mzg3NTExRUJCREFGQjA4NTJCMUQzRjIzIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjg4QUVBNDQ4Mzg3NTExRUJCREFGQjA4NTJCMUQzRjIzIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6ODhBRUE0NDUzODc1MTFFQkJEQUZCMDg1MkIxRDNGMjMiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6ODhBRUE0NDYzODc1MTFFQkJEQUZCMDg1MkIxRDNGMjMiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz45dzhaAAALWklEQVR42uyc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" alt=""></div>
                                <h2>870+</h2>
                                <h6>Satisfied Patients</h6>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="feature-box">
                                <div class="corner-img"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAE8AAABMCAYAAAAsoOooAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMDY3IDc5LjE1Nzc0NywgMjAxNS8wMy8zMC0yMzo0MDo0MiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTUgKFdpbmRvd3MpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkI0QzgwQjc1Mzg3NTExRUI4RDczQTc2MkExNUM4REFGIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkI0QzgwQjc2Mzg3NTExRUI4RDczQTc2MkExNUM4REFGIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6QjRDODBCNzMzODc1MTFFQjhENzNBNzYyQTE1QzhEQUYiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6QjRDODBCNzQzODc1MTFFQjhENzNBNzYyQTE1QzhEQUYiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz5sNao8AAAMYElEQVR42uxcCVRU1xn+h2HfkVUWEVBEQUEj7jmNS7BRY6KNxKhRc4yNtk01TY5JT85pm24x1mgSm0JPrNZTNTExasVa4xqXiDsIsokgorKD7OsM0/+780anCsPALLjMx/l15r03d+Z979/vfU8mW5ZEWnBkmcYygsWTRU4WaCBj2dKeMOOEZoO11s6pLB+xRFt46hSBVsv3nWQCVXhjJW18iWWfhbguMYYlRPMG5IWyJN6nhRZ0DFeWOG3ylkn+zQL9MFubvDgLH91CDPu9AA15/Sx8dAveLCM15FnSke5jvIY8lYWLbmOcdqpiQfcwkP2er4W8nsGDJdxCXs9gwxJmIa/nGGAhr+cItpBnIa9X4Gchz4AmgUk6KQO8nWhmtC/FBLmRr4studhbU3Wjgopqmunc9Tu0N62USmpbuhxHJiOaEuFNcUO8KcLPmQbyuEBOab2QfemldCK3qrfIs5XJliVV8ws3o+ixqx19OGswxQS60g95VXQm/w5dr2yixlYlEyincB9nmjCgDw1nUg9kltEH+66KfR3hhWg/WhUXRk1tSjqaXUHnb9TQrTtNYl+QhwPF9nenqUxqW7uK3t+TTWf4opgZtUYjb0yIB21aGE3fZZbT6u+uUakOzQr3daLfzRgkNPS1LamUUVx3d5+1lYw2zI2isaEe9Kf9ufTNpeJOx8GxSyf0o7emhNK6w/mUeOKGOcmrl8tGznuPX9gbVCWH9aEvl4ygt3dm0mfHrlNDi1Ln8ZUNbfRtSjEplCr6+4JhlHKzhm5UNZGjrZx2L4tVa17Cebp8q1bnOKx0dIE18r9XyunjOUPI29mOjudWmos8hcHkuTvY0IE3R9O7u7Jod2pJtz6byuTcZFPc+Go0Hc6qEBpX16yg+ZtSqI2JdWVf2aJo73KcqsY22sPf/Vl8lLgI8IdmQIvBAeOD5wfR/owynealC7tSSsjRRk7J744X5C9g4l5kfwdTBKDFv9xxha6VN+gcp7imhV7dnEKJ84fRsZwKquWLYGK0G5SqBLjb06QIT+H4DcHWc7fpp1vTaOm/0iiyrwut+clg+s3eHFq69TIHimpaHx+p1zinOUCl3a6l1yeYpb9rGHmzYvzofEE1VdS3GvxLtjGBiKyLxgbSluRbIpWZGO7Fr2+yL7MVkVwfbDxVSC+P9DcHea0GkffjSB/af6XMqL9oCGteOmtPpL8z7WRXgLQEJosURx+cK6g2V8BoMIi8vm52wkyMBSTTCBKIxpX1LA2tZC2X0eWbtfSjcP0m+JA35pY1mIO8MoPIk3OehZM0FoYFuArTbVEo71YgyOUKKhspwtdZVBz6oLyu1RzkFRpEnkqFXMt4UyDjwzwor7yRbOVW1NCqoNhgd65QGukOpyK4UCGejvp5cpVZpmVuGNwYcLLr2eTb6BB3mjHUl0K87hEyjMu67JJ6QZQVq9ncWH+qYhNuVbaLfPAZPU3Xw9HGHOTlGUQe/Es/dujdAcxwy+IYWs01cDxHxb0/ixV1LBDKROZXNJKCSwdnO2sOHHXCBzJ3otqYygFKn/H79XEwNXHI3K8ZlCRncyaPIh/5lb6YPyqA/N3saXbiBY6oLiJXRANAU9iX17dQU2u7SE8uFlaLFKWhRSGCwCuxAWRnbaWz6vDjIObjYmdq8mpAnkGad/xqJY0L89D7eDj8RWODRP07jgt/EFFc00z1TM5c1kL4O5RlMFOQkFVcL0ywjvdXs98DaSBcpzvo70G3q5tN7u8MDhhHsitoEEdBmJY+QNJrb6Mm7Baf4MlrVaK4T+FUZMWkEJHfgVCZ5BLg9m35PfwfjrtUWNOl35s+1If2pZWamrwz7QkzDKswcIWLOaVAs1IfLBkfREl8Yh6OtnSlqI5aWZNAFroq/TmS5pQ2CJ9lw9G2iMdezFoKjdNcnItcqiECdwb4STRg0SQ1MU4J/2roKNu5rPrFMyGUzH5PyeqhklIYFf/TLqUy2B7IgSXK31WYLPbDbGGGkDyuIMrqWjg/axGfd7C1Eu2qtyaH0MJ/ppKDjVzkfkhbwrydRCcHpmwl006ZiF4bF0j5bProrJiyCYpCxijk7bxUxGWaN+1ZHsv+6p4jl+FP6+Rgrn85eE1oVSGf3MxhvqLsQpLdqlDRtyklQgtBij2T5WYvF6WaOmAoqaatXYxz7GoFHVo5hpo5mZZJX4ALhX0eTjY07x+XTK11GQgWRiEPDn4Ra4cvn2R/Twfhn9RC4n/kbDDFZtacumaliK7V9m2iBnWylYvg4ONiS59/X0DhPk5UytWBnbWcBvJr9PaiOfdDr6+ZyUN7/5Mj+XQos1yMC40G8D0o42DqSHVMjP33r0k2CDiRKRFe1M6KhxOGn0JyW17fKsosBAdUCTDhg1nlQqPg56CF0Con9lWZxXWk5P0wT5AylqN44skbNKq/uyAeXeajOZWCVPTqMH5Nk0IIxkZJBo2dxrkg2lomAmrRu7cPGIU8kIJmJLQPThsnCnGSxNlO/R5lF0hGMwEa28AR1Yp/AQIHmgItrF32rHW4GGFeTqK9hIQXeRvMN9DDntMaNbntqnuCiAy3YCOXCVM2YXF2gSX9bkJujBHhb47mVAjyhge5irkEURnwjiYmqFWpPkk4fi9OflGWBTEpv03KEV1k5Hkw2eqmNkGyprxCYvzXYwW0fk4krT2UR578WeZHTRACkUqt6Yjc8IEAqhKMYyJsR4piVPI0gEZsXhjDdWizMEsEAGiF0Aj+Q0BBmymrpE60mDydbAVxaEGNDHYT05V9ufoI8XKgQmmacXPyTfEZVBfQLsQkxHSMB61Fy37S+mT6/qrJJ34qWHb9Xylo1NHZx7254wr9akoovbEtTeex40L7cILtJCaBkBDDD2LaEkDifVZrHhaT5Hs7SHwxf4J4e/a6WRqgu1jrirQ3GH25Bbq/p7hySPr5KBEFOwO0DKUWTB4+L5U1FSaLTyBhPtnFSoAFXCND6xDpm9qUJm+5syTcv9Eka1VW7coSJps4f2inx6CZENzHUaQ0MMevLhTxewfhFxF0snVMH07moLP2pSE0f9Mlc8ySAUmsdalmIQ9A12SwnzP98YWIDvdjbhWa5sbVAqIoABLdpUZAXSekaFYmLN6SKgKFGYAfsrajHSYjD4Hg+c/P07ODvWjN7MEP7Ed+h0CA6Iv0BECqEsKJNhqiHQGTQF+9PoKWb0+nAxnlZCbsZq07Y1byAKQM0zacE2aWMO9BE8YalWAmC83PKPZ/zez7wllbUwprHjgW6c03S5+ilV9nGH3GTgcwk/SHznaafH0etOvptadFkouuMdKTu36Pg8bIYHfR9IyRWvDRAa4PTB+iXbVuzhCK/+Ii7blcQmZEAmtdeq+Rp2nXz2IfiGbn6VXjRckFIDfzd7OjlZND2c8pafuSEZTJBGqWVsAnYtvCMYEU9+lZ0f8zI/JJff9x52WpMVZJ6QvkcUiIP42PEmXbcU5HDmZW0HNRPhTLSTLW8/16T5ZoL8G/fbnkKZEsv7IxRbSszIylrHUXdXfGjbi4UV9goueT+EjRl1vBPgzViHZD88NZETSRK5Df/yeXvr5YRL2AbUzcgq4O6pUblNE2mvm38/TG08FslsOFRqIlhQWNMOE0rjomrksWXZleQB7L2/oc2Cuapw0EkneeDaNpbLp5TOrHh/LMUafqajlNZ6079EiQ95DhPSbuI30PttxKoOXnWNZ05wMW8tQ4zrJc0163kKc/MlnmMXHdLpSfdPIQWWff36ezkNc1CiXicno6wJNKXi7LNCYuzZBBnkTyUHI9x8RlGDrQk0YenpcVx8TlGWOwJ4m89SxzmDijtWaehIdvgax3mLTNxh74cScPDwpc0dHkjYW8zlEvlVprmDiTNQIfR/IOs7zPpJ0z9ReBvMflQVxIdv/MslV7PYmpyVM84qQVsGxg2cSkVZvzi0HedHQUWF5kcX6ESEOS+wWpVy6V98YPAHmnJcHE6lyWl1nCHlLCsOzzCEyT1IsMm5i4Xvsx2gEjXZLVpH7s7wzpf79eJgytcSwq3M/yb9JaXNjb6Cjaoq+1UxIvlqdZJrGMlbTT1gy/CzPbWOLwAwvmEzIlEh8qdJWqYEHfbklwQxduocbzMkezDCT1M4Px8FH3Hn6/QiKqQJI0iTCsNi+jhxzdyfOwVDNPkh3SNmgm7mDBbTlBkonjNW7LtpO0VC5pDZJVLAUoly7KLRasWMRUWbG0/5HC/wQYAKalSGwZHEeyAAAAAElFTkSuQmCC" alt=""></div>
                                <h2>1500+</h2>
                                <h6>Patient/Year</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<section class="choose-us">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="left">
                    <div class="section-header">
                        <h5>OUR BENEFITS</h5>
                        <h2>Choose Our Cardiology <br>Healthcare Solutions</h2>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="choose-col">
                                <div class="top-title d-flex align-items-center"><span><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAcCAYAAAByDd+UAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMDY3IDc5LjE1Nzc0NywgMjAxNS8wMy8zMC0yMzo0MDo0MiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTUgKFdpbmRvd3MpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkZGOTA0QzU3MzhGODExRUJBMENBRTIxQjc1REU1NjhCIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkZGOTA0QzU4MzhGODExRUJBMENBRTIxQjc1REU1NjhCIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6RkY5MDRDNTUzOEY4MTFFQkEwQ0FFMjFCNzVERTU2OEIiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6RkY5MDRDNTYzOEY4MTFFQkEwQ0FFMjFCNzVERTU2OEIiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz4rGgN/AAABeklEQVR42sSWTyhEQRjAZ18ULerdHCSkKCUHjkrt3SoOctmkLQ4OrsrJ0c2fJJG9OaDdi1zejZObHOSAtCkXattCm/hNfa/mQOHNjK9+zZv3dvs1/775Uk+Do0qiDTLQAU3KTlThDqLwvFTWL1IizME21Cs3UYM80oIW6pHdOJSZ0q5AptG1TIkjE8ia+Yr2wOIG+Um0BMpz2BR+wKMv4SsMs+1baZd8COeQnclzybVwB9me0V90KbyE+bjzPJSdpplMIryCWTj+Jk+OM7oXkfXSrCXdNHnYAp1wT774di2yNM0BpJMKe6R9hym4lf4m7Bu/24A+G+dwBTrjJYIxOIUFY91m5LaxcvBDOIJG6V/ACLxJvx/WbWeaAZlCZUyvjmY4hAYXqS0nu9WMXeh2mUtXISv/WYaJvxzcul9eoEXZPKHP2yJMkpr+5T6sevRVAqkbfcW9FkZSwrkO7Yi0sCyJuOZYpgvhcnwsCjJS26V+xSj1H/SLTwEGAKr4Vzwyvhs7AAAAAElFTkSuQmCC" alt=""></span><span>Expert Nursing</span></div>
                                <p>Lorem Ipsum has been the industry's standard dummy text ever since the 500s, when an unknown printer took a galley of type</p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="choose-col">
                                <div class="top-title d-flex align-items-center"><span><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAcCAYAAAByDd+UAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMDY3IDc5LjE1Nzc0NywgMjAxNS8wMy8zMC0yMzo0MDo0MiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTUgKFdpbmRvd3MpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkZGOTA0QzU3MzhGODExRUJBMENBRTIxQjc1REU1NjhCIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkZGOTA0QzU4MzhGODExRUJBMENBRTIxQjc1REU1NjhCIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6RkY5MDRDNTUzOEY4MTFFQkEwQ0FFMjFCNzVERTU2OEIiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6RkY5MDRDNTYzOEY4MTFFQkEwQ0FFMjFCNzVERTU2OEIiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz4rGgN/AAABeklEQVR42sSWTyhEQRjAZ18ULerdHCSkKCUHjkrt3SoOctmkLQ4OrsrJ0c2fJJG9OaDdi1zejZObHOSAtCkXattCm/hNfa/mQOHNjK9+zZv3dvs1/775Uk+Do0qiDTLQAU3KTlThDqLwvFTWL1IizME21Cs3UYM80oIW6pHdOJSZ0q5AptG1TIkjE8ia+Yr2wOIG+Um0BMpz2BR+wKMv4SsMs+1baZd8COeQnclzybVwB9me0V90KbyE+bjzPJSdpplMIryCWTj+Jk+OM7oXkfXSrCXdNHnYAp1wT774di2yNM0BpJMKe6R9hym4lf4m7Bu/24A+G+dwBTrjJYIxOIUFY91m5LaxcvBDOIJG6V/ACLxJvx/WbWeaAZlCZUyvjmY4hAYXqS0nu9WMXeh2mUtXISv/WYaJvxzcul9eoEXZPKHP2yJMkpr+5T6sevRVAqkbfcW9FkZSwrkO7Yi0sCyJuOZYpgvhcnwsCjJS26V+xSj1H/SLTwEGAKr4Vzwyvhs7AAAAAElFTkSuQmCC" alt=""></span><span>Heath care Expert</span></div>
                                <p>Lorem Ipsum has been the industry's standard dummy text ever since the 500s, when an unknown printer took a galley of type</p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="choose-col">
                                <div class="top-title d-flex align-items-center"><span><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAcCAYAAAByDd+UAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMDY3IDc5LjE1Nzc0NywgMjAxNS8wMy8zMC0yMzo0MDo0MiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTUgKFdpbmRvd3MpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkZGOTA0QzU3MzhGODExRUJBMENBRTIxQjc1REU1NjhCIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkZGOTA0QzU4MzhGODExRUJBMENBRTIxQjc1REU1NjhCIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6RkY5MDRDNTUzOEY4MTFFQkEwQ0FFMjFCNzVERTU2OEIiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6RkY5MDRDNTYzOEY4MTFFQkEwQ0FFMjFCNzVERTU2OEIiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz4rGgN/AAABeklEQVR42sSWTyhEQRjAZ18ULerdHCSkKCUHjkrt3SoOctmkLQ4OrsrJ0c2fJJG9OaDdi1zejZObHOSAtCkXattCm/hNfa/mQOHNjK9+zZv3dvs1/775Uk+Do0qiDTLQAU3KTlThDqLwvFTWL1IizME21Cs3UYM80oIW6pHdOJSZ0q5AptG1TIkjE8ia+Yr2wOIG+Um0BMpz2BR+wKMv4SsMs+1baZd8COeQnclzybVwB9me0V90KbyE+bjzPJSdpplMIryCWTj+Jk+OM7oXkfXSrCXdNHnYAp1wT774di2yNM0BpJMKe6R9hym4lf4m7Bu/24A+G+dwBTrjJYIxOIUFY91m5LaxcvBDOIJG6V/ACLxJvx/WbWeaAZlCZUyvjmY4hAYXqS0nu9WMXeh2mUtXISv/WYaJvxzcul9eoEXZPKHP2yJMkpr+5T6sevRVAqkbfcW9FkZSwrkO7Yi0sCyJuOZYpgvhcnwsCjJS26V+xSj1H/SLTwEGAKr4Vzwyvhs7AAAAAElFTkSuQmCC" alt=""></span><span>Individual Approach</span></div>
                                <p>Lorem Ipsum has been the industry's standard dummy text ever since the 500s, when an unknown printer took a galley of type</p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="choose-col">
                                <div class="top-title d-flex align-items-center"><span><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAcCAYAAAByDd+UAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMDY3IDc5LjE1Nzc0NywgMjAxNS8wMy8zMC0yMzo0MDo0MiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTUgKFdpbmRvd3MpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkZGOTA0QzU3MzhGODExRUJBMENBRTIxQjc1REU1NjhCIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkZGOTA0QzU4MzhGODExRUJBMENBRTIxQjc1REU1NjhCIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6RkY5MDRDNTUzOEY4MTFFQkEwQ0FFMjFCNzVERTU2OEIiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6RkY5MDRDNTYzOEY4MTFFQkEwQ0FFMjFCNzVERTU2OEIiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz4rGgN/AAABeklEQVR42sSWTyhEQRjAZ18ULerdHCSkKCUHjkrt3SoOctmkLQ4OrsrJ0c2fJJG9OaDdi1zejZObHOSAtCkXattCm/hNfa/mQOHNjK9+zZv3dvs1/775Uk+Do0qiDTLQAU3KTlThDqLwvFTWL1IizME21Cs3UYM80oIW6pHdOJSZ0q5AptG1TIkjE8ia+Yr2wOIG+Um0BMpz2BR+wKMv4SsMs+1baZd8COeQnclzybVwB9me0V90KbyE+bjzPJSdpplMIryCWTj+Jk+OM7oXkfXSrCXdNHnYAp1wT774di2yNM0BpJMKe6R9hym4lf4m7Bu/24A+G+dwBTrjJYIxOIUFY91m5LaxcvBDOIJG6V/ACLxJvx/WbWeaAZlCZUyvjmY4hAYXqS0nu9WMXeh2mUtXISv/WYaJvxzcul9eoEXZPKHP2yJMkpr+5T6sevRVAqkbfcW9FkZSwrkO7Yi0sCyJuOZYpgvhcnwsCjJS26V+xSj1H/SLTwEGAKr4Vzwyvhs7AAAAAElFTkSuQmCC" alt=""></span><span>Emergency Help</span></div>
                                <p>Lorem Ipsum has been the industry's standard dummy text ever since the 500s, when an unknown printer took a galley of type</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="right"></div>
            </div>
        </div>
    </div>
</section>
@stop