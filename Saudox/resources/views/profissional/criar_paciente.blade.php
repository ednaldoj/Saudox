@extends('layouts.mainlayout')
@section('content')


    <div class="container">
        <div class="row">
            <div class="espacador_mesma_altura_top_nav"></div>
            <div style="text-align: center; width: 100%;">
                <div class = "caixa_form">
                    <br>
                    <br>
                    <h1>Cadastrar novo Paciente</h1>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul style="padding: 0px;">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form id="form_criar_paciente" method="post" action="{{ route('profissional.criar_paciente.salvar') }}">

                        <!-- CROSS Site Request Forgery Protection -->
                        @csrf

                        <label class="required">Login:</label><br>
                        <input value="{{ old('login') }}" placeholder="Login" type="text"  name="login" id="login">
                        <label class="required">Senha:</label><br>
                        <input value="{{ old('password') }}" placeholder="Senha" type="password"  name="password" id="password">

                        <hr class="hr_form">
                        <h3>Informação Pessoal</h3>
                        <label class="required">Nome do Paciente:</label><br>
                        <input value="{{ old('nome_paciente', $agendamento->nome) }}" placeholder="Nome Completo" type="text" name="nome_paciente" id="nome_paciente">
                        <label class="required">Cpf do Paciente:</label><br>
                        <input value="{{ old('cpf', $agendamento->cpf) }}" class="noscroll" onkeypress='validar_apenas_numeros(event)' placeholder="CPF (apenas números)" type="number"  name="cpf" id="cpf">
                        <label class="required">Sexo:</label><br>

                        <label for="masculino">Masculino</label>
                        <input value="0" type="radio" name="sexo" id="sexo" {{ g_old_checked(NULL, "sexo", "0") }}>
                        <label for="feminino">Feminino</label>
                        <input value="1" type="radio" name="sexo" id="sexo" {{ g_old_checked(NULL, "sexo", "1") }}>
                        <br>
                        <label class="required">Naturalidade:</label><br>
                        <input value="{{ old('naturalidade') }}" placeholder="Naturalidade" type="text" name="naturalidade" id="naturalidade">
                        <label class="required">Data de nascimento:</label><br>
                        <input value="{{ old('data_nascimento', $agendamento->data_nascimento_paciente) }}" class="noscroll" type="date"  name="data_nascimento" id="data_nascimento">
                        <label class="required">Responsável:</label><br>
                        <input value="{{ old('responsavel') }}" placeholder="Responsável" type="text" name="responsavel" id="responsavel">
                        <label class="required">Número de irmãos:</label><br>
                        <input value="{{ old('numero_irmaos') }}" class="noscroll" onkeypress='validar_apenas_numeros(event)' placeholder="Número de Irmãos" type="number"  name="numero_irmaos" id="numero_irmaos">
                        <label>Nome dos irmãos:</label><br>
                        <input value="{{ old('lista_irmaos') }}" placeholder="Separado por vírgula" type="text" name="lista_irmaos" id="lista_irmaos">
                        <label class="required">Filho biológico ou adotivo?</label><br>
                        <label for="biologico">Biológico</label>
                        <input onclick="document.getElementById('filho_sabe_adotado').style.display = 'none'" value="0" type="radio" name="tipo_filho_biologico_adotivo" id="tipo_filho_biologico_adotivo" {{ g_old_checked(NULL, "tipo_filho_biologico_adotivo", "0") }}>
                        <label for="adotivo">Adotivo</label>
                        <input onclick="document.getElementById('filho_sabe_adotado').style.display = 'block'" value="1" type="radio" name="tipo_filho_biologico_adotivo" id="tipo_filho_biologico_adotivo" {{ g_old_checked(NULL, "tipo_filho_biologico_adotivo", "1") }}>
                        <div id="filho_sabe_adotado">
                            <label>Filho sabe que é adotado?</label><br>
                            <label for="sim">Sim</label>

                            <input value="1" type="radio" name="crianca_sabe_se_adotivo" id="crianca_sabe_se_adotivo" {{ g_old_checked(NULL, "crianca_sabe_se_adotivo", "1") }}>

                            <label for="nao">Não</label>

                            <input value="0" type="radio" name="crianca_sabe_se_adotivo" id="crianca_sabe_se_adotivo" {{ g_old_checked(NULL, "crianca_sabe_se_adotivo", "0") }}>

                            <input value="{{ old('reacao_quando_descobriu_se_adotivo') }}" placeholder="Reação ao descobrir que era adotado (Opcional)" type="text" name="reacao_quando_descobriu_se_adotivo" id="reacao_quando_descobriu_se_adotivo">
                        </div>

                        <hr class="hr_form">
                        <h3>Informações dos Pais</h3>
                        <label class="required">Nome do pai:</label><br>
                        <input value="{{ old('nome_pai') }}" placeholder="Nome do Pai" type="text" name="nome_pai" id="nome_pai">
                        <label class="required">Nome da mãe:</label><br>
                        <input value="{{ old('nome_mae') }}" placeholder="Nome da Mãe" type="text" name="nome_mae" id="nome_mae">
                        <label class="required">Telefone do pai:</label><br>
                        <input value="{{ old('telefone_pai') }}" placeholder="Telefone do Pai (Apenas números)" type="text" name="telefone_pai" id="telefone_pai">
                        <label class="required">Telefone da mãe:</label><br>
                        <input value="{{ old('telefone_mae', $agendamento->telefone) }}" placeholder="Telefone da Mãe (Apenas números)" type="text" name="telefone_mae" id="telefone_mae">
                        <label class="required">Email do pai:</label><br>
                        <input value="{{ old('email_pai') }}" placeholder="E-Mail do Pai" type="text" name="email_pai" id="email_pai">
                        <label class="required">Email da mãe:</label><br>
                        <input value="{{ old('email_mae') }}" placeholder="E-Mail da Mãe" type="text" name="email_mae" id="email_mae">
                        <label class="required">Idade do pai:</label><br>
                        <input value="{{ old('idade_pai') }}" class="noscroll" onkeypress='validar_apenas_numeros(event)' placeholder="Idade do Pai (Número)" type="number"  name="idade_pai" id="idade_pai">
                        <label class="required">Idade da mãe:</label><br>
                        <input value="{{ old('idade_mae') }}" class="noscroll" onkeypress='validar_apenas_numeros(event)' placeholder="Idade da Mae (Número)" type="number"  name="idade_mae" id="idade_mae">
                        <h3>Situação Atual</h3>
                        <label class="required">Casados?</label><br>
                        <label for="pais_sao_casados">Sim</label>
                        <input value="1" type="radio" name="pais_sao_casados" id="pais_sao_casados" {{ g_old_checked(NULL, "pais_sao_casados", "1") }}>
                        <label for="pais_sao_casados">Não</label>
                        <input value="0" class="command_hidden" type="radio" name="pais_sao_casados" id="pais_sao_casados" {{ g_old_checked(NULL, "pais_sao_casados", "0") }}>
                        <br>
                        <div class="hidden">
                            <label>Divorciados?</label><br>
                            <label for="pais_sao_divorciados">Sim</label>
                            <input value="1" class="command_hidden" type="radio" name="pais_sao_divorciados" id="pais_sao_divorciados" {{ g_old_checked(NULL, "pais_sao_divorciados", "1") }}>
                            <label for="pais_sao_casados">Não</label>
                            <input value="0" type="radio" name="pais_sao_divorciados" id="pais_sao_divorciados" {{ g_old_checked(NULL, "pais_sao_divorciados", "0") }}>
                            <input value="{{ old('reacao_sobre_a_relacao_pais_caso_divorciados') }}" placeholder="Reação a relação dos pais" type="text" name="reacao_sobre_a_relacao_pais_caso_divorciados" id="reacao_sobre_a_relacao_pais_caso_divorciados">
                            <input value="{{ old('vive_com_quem_caso_pais_divorciados') }}" placeholder="Vive com quem?" type="text" name="vive_com_quem_caso_pais_divorciados" id="vive_com_quem_caso_pais_divorciados">
                        </div>

                        <hr class="hr_form">
                        <h3>Endereço</h3>
                        <label class="required">Estado:</label><br>
                        <input value="{{ old('estado', $agendamento->endereco->estado) }}" placeholder="Estado" type="text" name="estado" id="estado">
                        <label class="required">Cidade:</label><br>
                        <input value="{{ old('cidade', $agendamento->endereco->cidade) }}" placeholder="Cidade" type="text" name="cidade" id="cidade">
                        <label>Bairro:</label><br>
                        <input value="{{ old('bairro', $agendamento->endereco->bairro) }}" placeholder="Bairro" type="text" name="bairro" id="bairro">
                        <label>Rua:</label><br>
                        <input value="{{ old('nome_rua', $agendamento->endereco->nome_rua) }}" placeholder="Rua" type="text" name="nome_rua" id="nome_rua">
                        <label>Nº:</label><br>
                        <input value="{{ old('numero_casa', $agendamento->endereco->numero_casa) }}" class="noscroll" onkeypress='validar_apenas_numeros(event)' placeholder="Número da casa" type="number" name="numero_casa" id="numero_casa">
                        <label>Complemento:</label><br>
                        <input value="{{ old('descricao', $agendamento->endereco->descricao) }}" placeholder="Descrição do local" type="text" name="descricao" id="descricao">
                        <label class="required">Ponto de referência:</label><br>
                        <input value="{{ old('ponto_referencia', $agendamento->endereco->descricao) }}" placeholder="Ponto de referência" type="text" name="ponto_referencia" id="ponto_referencia">

                        <input type="submit" value="Cadastrar">

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
