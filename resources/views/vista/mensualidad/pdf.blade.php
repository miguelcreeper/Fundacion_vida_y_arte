
<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="{!! asset("assets/css/pdf.css") !!}">
      

        <title>Mensualidad en PDF | FURGART</title>
<div align="center"><img src="{{ asset("assets/img/logo01.png") }}" width="400px" height="100px" text-aling=¨center¨ ></div> 
<h1 align="center"> Mensualidad  </h1>
<h3 align="center"> Fundación Vida y Arte</h3>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                	@yield('content')
                </div>

                <table class="table table-striped table-bordered table-hover" id="tabla-data">
                    <thead id="cabecera">
                        <tr>
                            <th>Matricula</th>
                            <th>Fecha</th>
                            <th>Total pago</th>
                            
                        </tr>
                    </thead>
                        <tbody>
                            @foreach($datas as $mensualidad)
                            <tr>
                                <td id="td">{{$mensualidad->matriculan->id}}</td>
                                <td>{{$mensualidad->fecha}}</td>
                                <td>{{$mensualidad->total_pago}}</td>  
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
            </div>
        </div>
    </body>
</html>
