<!doctype html>
<html lang="zxx">
    <head>
        @include('frontend.includes.head')
    </head>
    <body>   
        <header class="header-area">
            @include('frontend.includes.header')
        </header>
        <!--body content start-->
            @yield('content')
        <!--body content end-->
        <section class="footer-area">
             @include('frontend.includes.footer')
        </section>

        <div class="go-top"><i class="fas fa-chevron-up"></i></div>
        <script src="https://www.gstatic.com/firebasejs/8.3.2/firebase.js"></script>
        <script>
            var firebaseConfig = {
                apiKey: 'api-key',
                authDomain: 'project-id.firebaseapp.com',
                databaseURL: 'https://project-id.firebaseio.com',
                projectId: 'project-id',
                storageBucket: 'project-id.appspot.com',
                messagingSenderId: 'sender-id',
                appId: 'app-id',
                measurementId: 'G-measurement-id',
            };

            firebase.initializeApp(firebaseConfig);
            const messaging = firebase.messaging();
            messaging.onMessage(function (payload) {
				const id = payload.notification.image;
				$.ajax({
                    url: "{{route('patient-call-information')}}",
                    type: "post",
                    data: {id:id,_token: "{{ csrf_token() }}"},
                    success: function(response) {
						$data = JSON.parse(JSON.stringify(response))
						$("#callInformation").html($data['html']);
						$("#callModal").modal('show');
                    }
                });
                
                const title = payload.notification.title;
                const options = {
                    body: payload.notification.body,
                    icon: payload.notification.icon,
                };
                new Notification(title, options);
            });

        </script>
        <script src="{{asset('web_assets/assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('web_assets/assets/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('web_assets/assets/js/jquery.meanmenu.js')}}"></script>
        <script src="{{asset('web_assets/assets/js/jquery.appear.min.js')}}"></script>
        <script src="{{asset('web_assets/assets/js/jquery.nice-select.min.js')}}"></script>
        <script src="{{asset('web_assets/assets/js/main.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"
				type="text/javascript"></script>
<link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/start/jquery-ui.css"
			rel="Stylesheet" type="text/css" />

    </body>
</html>