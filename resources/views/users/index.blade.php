<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema RH</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .text-end {
            text-align: right;
            margin-bottom: 20px;
        }

        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        .alert-success {
            background-color: #d4edda;
            color: #155724;
        }

        .alert-warning {
            background-color: #fff3cd;
            color: #856404;
        }

        .table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
            border: 1px solid #ddd;
        }

        .table th, .table td {
            padding: 12px;
            text-align: center;
            border: 1px solid #ddd;
        }

        .table th {
            background-color: #f8f9fa;
        }

        .table-hover tbody tr:hover {
            background-color: #f1f1f1;
        }

        .btn {
            padding: 8px 16px;
            border-radius: 4px;
            text-decoration: none;
            cursor: pointer;
        }

        .btn-primary {
            background-color: #007bff;
            color: white;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-success {
            background-color: #28a745;
            color: white;
            border: none;
        }

        .btn-success:hover {
            background-color: #218838;
        }

        .btn-danger {
            background-color: #dc3545;
            color: white;
            border: none;
        }

        .btn-danger:hover {
            background-color: #c82333;
        }

        .btn-sm {
            font-size: 0.875rem;
        }

        .me-2 {
            margin-right: 0.5rem;
        }

        .actions {
            display: flex;
            justify-content: center;
            gap: 10px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Lista de Colaboradores</h2>

        @if(session('sucess'))
            <div class="alert alert-success">
                {{ session('sucess') }}
            </div>
        @endif

        <div class="text-end">
            <a href="{{ route('user.create') }}" class="btn btn-primary">
                Cadastrar Colaborador
            </a>
        </div>

        @if ($users->isEmpty())
            <div class="alert alert-warning">
                Nenhum colaborador cadastrado ainda.
            </div>
        @else
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Setor</th>
                            <th>Cidade</th>
                            <th>Data de Check-in</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->setor }}</td>
                                <td>{{ $user->cidade }}</td>
                                <td>{{ $user->data_checkin }}</td>
                                <td class="actions">
                                    <a href="{{ route('user.edit', ['user' => $user->id]) }}" class="btn btn-sm btn-success">
                                        Editar
                                    </a>

                                    <form method="POST" action="{{ route('user.destroy', ['user' => $user->id]) }}" class="d-inline" onsubmit="return confirm('Tem certeza que deseja excluir?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Excluir</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>

</body>
</html>