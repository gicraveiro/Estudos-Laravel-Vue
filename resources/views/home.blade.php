@extends('layouts.app')

@section('content')
        
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <painel titulo="Painel! Dentro da row e col do container (col-md-10 col-md-offset-1) " cor="blue">            
                    Aqui é o conteúdo

                    <caixa qtd="80" titulo="Caixa dentro da row e col do container, mas fora da row do painel 1" url="#" cor="pink" icone="ion ion-pie-graph"></caixa>

                    <div class="row">
                        <div class="col-md-4">
                            <painel titulo="PAINEL dentro da row, col do painel 1 e row,col 1 do container" cor="panel-success"></painel>
                            <caixa qtd="80" titulo="CAIXA dentro da row, col do painel 1 e row,col 1 do container" url="#" cor="purple" icone="ion ion-pie-graph"></caixa>
                        </div>

                        <div class="col-md-4">
                            <painel titulo="Esse tbm mas col 2 do container" cor="panel-warning"></painel>

                            <painel titulo="Esse tbm mas col 2 do container" cor="blue"></painel>

                            <painel titulo="Esse tbm mas col 2 do container"></painel>
                        </div>

                        <div class="col-md-4">
                            <caixa qtd="80" titulo="Esse tbm mas col 3 do container" url="#" cor="#00c0ef" icone="ion ion-bag"></caixa>
                            <caixa qtd="80" titulo="Esse tbm mas col 3 do container" url="#" cor="orange" icone="ion ion-pie-graph"></caixa>
                            <caixa qtd="80" titulo="Esse tbm mas col 3 do container" url="#" cor="orange" icone="ion ion-pie-graph"></caixa>
                        </div>

                        <div class="col-md-4">
                            <caixa qtd="80" titulo="Esse tbm mas col 4 do container" url="#" cor="orange" icone="ion ion-pie-graph"></caixa>
                        </div>
                    </div>
                    
                </painel>
            </div>
        </div>
    </div>

@endsection