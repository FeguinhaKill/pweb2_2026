<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Relatório de Produtos</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 20px;
            color: #333;
        }
        h3 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 20px;
        }
        img {
            display: block;
            margin: 0 auto 20px auto;
            border-radius: 8px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        thead {
            background-color: #2c3e50;
            color: #fff;
        }
        th, td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
            font-size: 14px;
        }
        tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tbody tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>

    <h3>{{ $titulo }}</h3>
    <img src="{{ storage_path('app/public/nerd.png') }}" style="width: 120px; height: 120px">

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Categoria</th>
                <th>Mecanismo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produtos as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->nome }}</td>
                    <td>R$ {{ number_format($item->preco, 2, ',', '.') }}</td>
                    <td>{{ $item->categoria->nome }}</td>
                    <td>{{ $item->mecanismo->nome }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>