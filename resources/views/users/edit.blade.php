<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema RH</title>

    <style>
        
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f             
            padding: 0;
        }

        h2 {
            font-size: 2rem;
            margin-bottom: 1rem;
            text-align: center;
            color: #333;
        }

        a {
            display: block;
            margin: 10px;
            text-align: center;
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        
        form {
            background-color: #fff;
            padding: 20px;
            max-width: 600px;
            margin: 20px auto;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        label {
            font-size: 1rem;
            font-weight: bold;
            display: block;
            margin-bottom: 8px;
            color: #333;
        }

        input, select, button {
            width: 100%;
            padding: 12px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1rem;
        }

        input:focus, select:focus {
            border-color: #007bff;
            outline: none;
        }

        button {
            background-color: #007bff;
            color: white;
            font-size: 1.1rem;
            cursor: pointer;
            border: none;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }

       
        .error-message {
            color: #f00;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <a href="{{ route('user.index') }}">Listar</a>

    <h2>Editar Usuário</h2>

    @if ($errors->any())
        <div class="error-message">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach  
        </div>
    @endif

    <form action="{{ route('user.edit', $user) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nome: </label>
        <input type="text" name="name" placeholder="Nome completo" value="{{ old('name', $user->name) }}"><br>

        <label for="setor">Setor: </label>
        <select id="setor" name="setor" required>
            <option value="">-- Selecione o setor --</option>
            <option value="TI" {{ old('setor', $user->setor) == 'TI' ? 'selected' : '' }}>Tecnologia da Informação</option>
            <option value="ADM" {{ old('setor', $user->setor) == 'ADM' ? 'selected' : '' }}>Administração</option>
            <option value="PROJECT" {{ old('setor', $user->setor) == 'PROJECT' ? 'selected' : '' }}>Projetos</option>
        </select><br>

        <label for="cidade">Cidade (capital):</label>
        <select id="cidade" name="cidade" required>
            <option value="">-- Selecione a capital --</option>
            <option value="Rio Branco" {{ old('cidade', $user->cidade) == 'Rio Branco' ? 'selected' : '' }}>Rio Branco</option>
            <option value="Maceió" {{ old('cidade', $user->cidade) == 'Maceió' ? 'selected' : '' }}>Maceió</option>
            <option value="Macapá" {{ old('cidade', $user->cidade) == 'Macapá' ? 'selected' : '' }}>Macapá</option>
            <option value="Manaus" {{ old('cidade', $user->cidade) == 'Manaus' ? 'selected' : '' }}>Manaus</option>
            <option value="Salvador" {{ old('cidade', $user->cidade) == 'Salvador' ? 'selected' : '' }}>Salvador</option>
            <option value="Fortaleza" {{ old('cidade', $user->cidade) == 'Fortaleza' ? 'selected' : '' }}>Fortaleza</option>
            <option value="Brasília" {{ old('cidade', $user->cidade) == 'Brasília' ? 'selected' : '' }}>Brasília</option>
            <option value="Vitória" {{ old('cidade', $user->cidade) == 'Vitória' ? 'selected' : '' }}>Vitória</option>
            <option value="Goiânia" {{ old('cidade', $user->cidade) == 'Goiânia' ? 'selected' : '' }}>Goiânia</option>
            <option value="São Luís" {{ old('cidade', $user->cidade) == 'São Luís' ? 'selected' : '' }}>São Luís</option>
            <option value="Cuiabá" {{ old('cidade', $user->cidade) == 'Cuiabá' ? 'selected' : '' }}>Cuiabá</option>
            <option value="Campo Grande" {{ old('cidade', $user->cidade) == 'Campo Grande' ? 'selected' : '' }}>Campo Grande</option>
            <option value="Belo Horizonte" {{ old('cidade', $user->cidade) == 'Belo Horizonte' ? 'selected' : '' }}>Belo Horizonte</option>
            <option value="Belém" {{ old('cidade', $user->cidade) == 'Belém' ? 'selected' : '' }}>Belém</option>
            <option value="João Pessoa" {{ old('cidade', $user->cidade) == 'João Pessoa' ? 'selected' : '' }}>João Pessoa</option>
            <option value="Curitiba" {{ old('cidade', $user->cidade) == 'Curitiba' ? 'selected' : '' }}>Curitiba</option>
            <option value="Recife" {{ old('cidade', $user->cidade) == 'Recife' ? 'selected' : '' }}>Recife</option>
            <option value="Teresina" {{ old('cidade', $user->cidade) == 'Teresina' ? 'selected' : '' }}>Teresina</option>
            <option value="Rio de Janeiro" {{ old('cidade', $user->cidade) == 'Rio de Janeiro' ? 'selected' : '' }}>Rio de Janeiro</option>
            <option value="Natal" {{ old('cidade', $user->cidade) == 'Natal' ? 'selected' : '' }}>Natal</option>
            <option value="Porto Alegre" {{ old('cidade', $user->cidade) == 'Porto Alegre' ? 'selected' : '' }}>Porto Alegre</option>
            <option value="Porto Velho" {{ old('cidade', $user->cidade) == 'Porto Velho' ? 'selected' : '' }}>Porto Velho</option>
            <option value="Boa Vista" {{ old('cidade', $user->cidade) == 'Boa Vista' ? 'selected' : '' }}>Boa Vista</option>
            <option value="Florianópolis" {{ old('cidade', $user->cidade) == 'Florianópolis' ? 'selected' : '' }}>Florianópolis</option>
            <option value="São Paulo" {{ old('cidade', $user->cidade) == 'São Paulo' ? 'selected' : '' }}>São Paulo</option>
            <option value="Aracaju" {{ old('cidade', $user->cidade) == 'Aracaju' ? 'selected' : '' }}>Aracaju</option>
            <option value="Palmas" {{ old('cidade', $user->cidade) == 'Palmas' ? 'selected' : '' }}>Palmas</option>
        </select><br><br>

        <button type="submit">Salvar</button>
    </form>
</body>
</html>