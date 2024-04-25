<x-app>
   
    <style>
        *{
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body{
            background-color: rgb(214,202,221);
            font-weight: bold;
            font-family: Arial, sans-serif;
        }
        .nav-link { 
            font-family: italic;
            font-size: 20px;
        }
        .parent {
            display: flex;
            justify-content:space-around;
            flex-direction: row;
            align-items: center;
            padding: 20px;
            /* background-color: rgb(214,202,221); */
            width: 100%;
        }
        .parent img {
            height: 50rem ;
            object-fit: contain ;
            width: 40% ;
        }
        .parent p{
            font-size: 4rem;
            padding: 5rem ;
            width: 50% ;
            text-shadow: -1px 1px 0 #41ba45,
            1px 1px 0 #c63d2b,
            1px -1px 0 #42afac,
            -1px -1px 0 #c6c23f;
        }
        .parent p:hover{
            text-shadow: -1px 1px 0 #00ff0d,
            1px 1px 3px #ff1e00,
            1px -1px 3px #00fff7,
            -1px -1px 3px #aca700;
            transition: 1s;
}

    </style>

</head>

<div class="parent">

    <p> Département de la Formation Professionnelle</p>

    <img src="Server-amico.svg"/>
    
</div>

</x-app>
