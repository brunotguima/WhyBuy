@extends('layouts.app')

@section('content')


<div class="container">

    <h2 class="center text-principal"><span class="orange-text">SOBRE NÓS</span><h2>

            <h5 class="center-justify"><span class="black-text text-principal">
                    O WhyBuy é um projeto que teve início no primeiro semestre de 2017, suprindo o tema no nosso Trabalho de Conclusão de Curso para a ETEC Pedro Ferreira Alves, cuja a idéia foi desenvolvida pelo aluno e regente do projeto Bruno Guimarães. 
                    A equipe é constituída também por mais outros 7 membros que fazem parte de todo o processo de desenvolvimento.</span><h5>
                    <br>
                    <br>
                    <div class="center">
                       <span class='orange-text'><h2>MEMBROS DESENVOLVEDORES</h2></span>
                      </div>

            <ul class="collapsible" data-collapsible="accordion">

                <li class ='white-text'>

            <div class="collapsible-header z-depth-4 orange darken-2"><i class="material-icons">desktop_windows</i>Bruno</div>
            <div class="collapsible-body z-depth-4 orange lighten-1 ">
                <img class="circle "   width="125" height="125" src="{{asset('images')}}/brunotguima.jpg">
                <span><h7>Nasci em Mogi-Mirim, tenho 17 anos, venho desde criança estudando em escolas públicas. Sempre apreciei tudo na área da informática, programar, mexer com peças de computador ou de qualquer aparelho eletrônico em geral, sempre foi um hobby. Pretendo cursar uma faculdade de Engenharia da Computação ou de Ciências da Computação. Dessa forma podendo trabalhar com o que eu sempre apreciei.<h7></span></div>
               
        </li>
        <li class ='white-text'>
            
            <div class="collapsible-header z-depth-4 orange darken-2"><i class="material-icons">share</i>Filício</div>
            <div class="collapsible-body z-depth-4 orange lighten-1"align="right"> <img class="circle" align="left" width="125" height="125" src="{{asset('images')}}/fifi.jpg"><span><h7>Nasci em Jaguariúna, cresci estudando em grande parte do tempo em escola de ensino privado, tenho 17 anos. Gosto de ver filmes de gênero de ação e fantasia, ler livros e ouvir músicas. Pretendo cursar uma faculdade de Engenharia Mecânica para poder exercer essa carreira.</h7></span></div>
        
        </li>
        <li class ='white-text'>
           
            <div class="collapsible-header z-depth-4 orange darken-2"><i class="material-icons">brush</i>Luana</div>
            <div class="collapsible-body z-depth-4 orange lighten-1"align="right"> <img class="circle" width="125" height="125" src="{{asset('images')}}/luana.jpg"><span><h7>Nasci na cidade de Mogi-Mirim, tenho 18 anos, estudei desde criança em escolas públicas. Sempre admirei a beleza que a natureza possui, a perfeição em cada detalhe me fascina. Decidi então que irei cursar uma faculdade de Ciências Biológicas e depois uma pós-graduação no ramo. Podendo assim trabalhar com o que amo.</h7></span></div>

            </li>
        <li class ='white-text'> 
            
            <div class="collapsible-header z-depth-4 orange darken-2"><i class="material-icons">web</i>Gabriel</div>
            <div class="collapsible-body z-depth-4 orange lighten-1"align="right"><img class="circle" width="125" height="125" src="{{asset('images')}}/gabriel.jpg"><span><h7>Nasci em Mogi Mirim, tenho 18 anos e estudei minha vida inteira em escolas públicas. Após o Ensino Médio, pretendo cursar Direito e, em minhas horas vagas, jogo video game, leio livros, ouço muitas músicas e assisto a filmes.</h7></span></div>

            </li>
        <li class ='white-text'>
           
            <div class="collapsible-header z-depth-4 orange darken-2" ><i class="material-icons">whatshot</i>Victor Hugo</div>
            <div class="collapsible-body z-depth-4 orange lighten-1"align="right"><img class="circle" width="125" height="125" src="{{asset('images')}}/victor.jpg"><span><h7>Nasci em Mogi-Mirim, tenho 17 anos, sempre estudei em escolas públicas. Sempre curti praticar esportes, por isso pretendo me fomar em Educação Física, e talvez, quando eu for mais experiente, fazer Fisioterapia./<h7></span></div>

            </li>
        <li class ='white-text'>
             
            <div class="collapsible-header z-depth-4 orange darken-2"><i class="material-icons">whatshot</i>Gustavo</div>
            <div class="collapsible-body z-depth-4 orange lighten-1"align="right"><img class="circle" width="125" height="125" src="{{asset('images')}}/gustavo.jpg"><span><h7>Nasci em São Paulo capital, tenho 17 anos. Depois de me formar no Ensino Médio, pretendo trabalhar e juntar dinheiro para minha faculdade, nas minhas horas vagas, gosto de jogar basquete e video game.</h7></span></div>

            </li>
        <li class ='white-text'>
            
            <div class="collapsible-header z-depth-4 orange darken-2"><i class="material-icons">library_books</i>Milena</div>
            <div class="collapsible-body z-depth-4 orange lighten-1"align="right"><img class="circle" width="125" height="125" src="{{asset('images')}}/milena2.jpg"><span><h7>Nasci em mogi Mirim, tenho 17 anos, sou muito impática, pretendo cursar Psicologia para poder atuar mais na parte neural, quero muito ir para Federal de Curitiba (UFPR). </h7></span></div>

            </li>
                <li class ='white-text'>
            
            <div class="collapsible-header z-depth-4 orange darken-2"><i class="material-icons">library_books</i>Juliana</div>
            
            <div class="collapsible-body z-depth-4 orange lighten-1"align="right"><img class="circle" width="125" height="125" src="{{asset('images')}}/juliana2.jpg"><span><h7>Nasci em Mogi Mirim, tenho 18 anos, estudei sempre em escolas públicas. Pretendo cursar Direito. Nas minhas horas vagas Aprecio músicas de Reggae, a natureza e gosto de escrever.</h7></span></div>
        </div>
        </li>
    </ul>
                                   
       
                                                                                                                                                                                                        

                                                                                                                                                                                                        @endsection