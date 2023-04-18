<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    {{-- <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome-free/css/all.min.css') }} ">  --}}
    <link rel="stylesheet" href=" {{ asset('css/index.css') }}">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.rtl.min.css" integrity="sha384-trxYGD5BY4TyBTvU5H23FalSCYwpLA0vWEvXXGm5eytyztxb+97WzzY+IWDOSbav" crossorigin="anonymous">
</head>
<body >
    {{-- <div class="title">
        المدرسة العتيقة
    </div>   --}}
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <img src="{{ asset('images/ministre_pic.png') }} " class="pic_min position-sticky">
                </div>
            </div>
        </div>
        <div class="contai mb-5">
                <div class="row ">
                    <div class="col-lg-6 col-sm-6 col-md-6 ">
                        <div class="etudiant">
                            <div class="accueil-component " data-url="./administration">
                                <div class="accueil-component-icon " >
                                    <img src="{{ asset('images/admine.jpg') }}" class="img-circle w-50" />
                                    <div class="texte mt-3">الفضاء الخاص بالادارة</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6">
                        <div class="administration">
                            <div class="accueil-component" data-url="./etudiant">
                                <div class="accueil-component-icon"  >
                                    <img src="{{ asset('images/student.png') }}" class="img-circle w-50" />
                                    <div class="text mt-3"> لفضاء الخاص بالتلاميذ </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br/><br/>
                <div class="row mt-5 mb-5">
                    <div class="col-lg-6 col-sm-6 col-md-6">
                        <div class="economiste">
                            <div class="accueil-component" data-url="./economiste">
                                <div class="accueil-component-icon" >
                                    <img src="{{ asset('images/economiste.png') }}" class="img-circle w-50 position-sticky" />
                                    <div class="texte mt-3">الفضاء الخاص بالقتصد</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6">
                        <div class="prof">
                            <div class="accueil-component" data-url="./enseignant">
                                <div class="accueil-component-icon mb-2" >
                                    <img src="{{ asset('images/admin.jpg') }}" class="img-circle w-50" />
                                    <div class="text mt-3">الفضاء الخاص بالاساتذة</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br/>
                <br/><br/>
                
        </div>
        <br/>
        <br/>

        {{-- se diriger vers l'un des deux espaces  --}}
        <script>
            $(".accueil-component").click(function () {
                var $url = $(this).data("url");
                window.location.href = $url;
            })
        </script>

    {{-- <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }} "></script>
    <script src="{{ asset('assets/jquery/jquery.min.js') }} "></script> --}}
</body>
</html>