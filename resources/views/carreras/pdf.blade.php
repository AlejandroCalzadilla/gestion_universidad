<!DOCTYPE html>
<html>
<head>
    <title>Malla {{$carreras->nombre}}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 15px;
            text-align: center;
            box-shadow: 0 0 10px rgba(0,0,0,0.15);
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
        }
        th {
            background-color: #f2f2f2;
            color: #333;
        }
        tr:nth-child(odd) {
            background-color:rgb(0,125,255);
        }
    </style>
</head>
<body>
    <h2>Malla {{$carreras->nombre}}</h2>
    @if ($carreras->count())
            <div class="card-body">
                <table class="table table-striped">
                    <thead class="bg-primary">
                        <tr>

                            {{-- en descripcion ira vehiculo con marca --}}
                            <th>sigla</th>
                            <th>nombre</th>
                            <th>semestre</th>
                            <th>creditos</th>

                           
                          
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($materias as $materia)
                            <tr>
                                <td>
                                    {{ $materia->sigla }}
                                </td>  
                                <td>
                                    {{ $materia->nombre }}
                                </td>
                                <td>
                                    {{ $materia->semestre }}
                                </td>
                                <td>
                                    {{ $materia->credito }}
                                </td>
                                
                               

                            </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>  
            @else
                <div class="card-body">
                    <strong>No hay registros ...</strong>
                </div>
            @endif
</body>
</html>
