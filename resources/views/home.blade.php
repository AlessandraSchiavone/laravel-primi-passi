<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->     
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://fonts.googleapis.com/css2?family=Encode+Sans+SC&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            *{
                box-sizing:border-box;
                margin:0;
                padding:0;
            }
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;

                height: 100vh;
                
            }
            header{
                height:90px;
                background-color:#1b5a8f;
                color:white;
            }
            header  i{
                font-size:30px;
                text-shadow: 2px 2px 2px lightgrey;
                cursor:pointer;
            }
            
            nav{ 
                display:flex;
            }
            .container{
                width:60%;
                margin:0 auto;
                display:flex; 
            }
            .flex-spbt{  
                height:100%;
               justify-content:space-between;
               align-items:center;
            }
            .list-inline{
              margin-right:30px;  
            }
               
            .list-inline >li{ 
                display:inline;
                list-style:none;
                padding:0 20px;
                font-size:22px;
                font-style:700;
            }
            li:hover{
                color:black;
            }
            main{
                background-color:#0E4D76;
            }
          
            main > .container{  
                height:calc(100vh - 280px);
            }
            .bck-img{
                background-image:url('https://www.raffaelegaito.com/wp-content/uploads/2019/02/reply-code-challenge-2019-new.jpg');
                background-repeat:no-repeat;
                background-position:50% 40%;
                background-size:auto;
            }
            .title{
                padding:20px;
                width:100%;
                text-align:center;
            }
            .title h1{
                padding-top:20px;
                font-size:55px;
                font-family: 'Encode Sans SC', sans-serif;
                text-shadow: 3px 3px 3px black;
                text-transform:uppercase;
                color:#99cbff;
            }
            .title p{
                padding:10px 0px;
                letter-spacing:2px;
                font-size:30px;
                color:black;
            }
            .col-50{
                width:50%;
                text-align:center;
                padding-top:100px;
            }
            .col-50 ul{
                padding-top:60px;
                color:white;
            }
            .col-50 ul > li{
                padding:5px 0;
                font-size:30px;
                font-weight:700;
                list-style:none;
            }
            .col-50 ul > li > i{
                margin-right:50px;
            }
            .flex-center{
                display:flex;
                justify-content:center;
                align-items:center;
            }
            h2{
                color:lightgrey;
                font-style:italic;
                font-size:45px;
                text-transform:uppercase;
                text-shadow:2px 2px 2px black;
                padding-bottom:50px;
            }
           

        </style>
    </head>
    <body>
        <header>
            <div class="container flex-spbt">
                <i class="fas fa-code"></i>
                <nav>
                    <ul class="list-inline">
                        @foreach ($navfirst as $item)
                        <li>
                            {{ $item }}
                        </li>
                        @endforeach  
                    </ul>
                    <ul class="list-inline">
                    @foreach ($socials as $item)
                        <li>
                            <i class= '{{ $item }}'>
                            </i>  
                        </li>
                        @endforeach  
                    </ul>
                </nav>
            </div>
        </header>
        <main > 
            <div class="title" >
                <h1 >Full Stack Web Developer</h1>
                <p>Front end developer who writes clean, elegant and efficient code.</p>
            </div>
            <div class="container bck-img">
                <div class="col-50 ">
                   <h2>Front-End </h2>
                   <ul>
                       <li><i class="fas fa-code"></i>HTML</li>
                       <li><i class="fas fa-code"></i>CSS</li>
                       <li><i class="fas fa-terminal"></i>Javascript</li>
                   </ul>
                </div>
                <div class="col-50 ">
                    <h2>Back-End</h2>
                    <ul>
                        <li><i class="fas fa-terminal"></i>PHP</li>
                        <li><i class="fas fa-terminal"></i>SQL</li>
                    </ul>
                </div>
            </div>
        </main>
    </body>
</html>
