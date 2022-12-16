@extends('layout3')
@section('menu3')
    <header class="site-header push">
        <button class="menu-btn">&#9776; Menu</button>
        This is a header
    </header>

    <!-- Pushy Menu -->
    <nav class="pushy pushy-left" data-focus="#first-link">
        <div class="pushy-content">
            <ul>
                <li class="pushy-link"><a href="#">Início</a></li>
                <li class="pushy-submenu">
                    <button>Pesquisar</button>
                    <ul>
                        <li class="pushy-link"><a href="#">Admitidos</a></li>
                        <li class="pushy-link"><a href="#">Altas</a></li>
                        <li class="pushy-link"><a href="#">Internados</a></li>
                        <li class="pushy-link"><a href="#">Lista de Espera</a></li>
                    </ul>
                </li>
                <li class="pushy-submenu">
                    <button>Estatisticas</button>
                    <ul>
                        <li class="pushy-link"><a href="#">Item 1</a></li>
                        <li class="pushy-link"><a href="#">Item 2</a></li>
                        <li class="pushy-link"><a href="#">Item 3</a></li>
                    </ul>
                </li>
                <li class="pushy-submenu">
                    <button>Mapa Diário</button>
                    <ul>
                        <li class="pushy-link"><a href="#">Item 1</a></li>
                        <li class="pushy-link"><a href="#">Item 2</a></li>
                        <li class="pushy-link"><a href="#">Item 3</a></li>
                    </ul>
                </li>
                <li class="pushy-link"><a href="#">Declaração</a></li>
                <li class="pushy-link"><a href="#">Sair</a></li>
            </ul>
        </div>
    </nav>

    <!-- Site Overlay -->
    <div class="site-overlay"></div>

    <!-- Your Content -->
    <div id="container">
        <!-- Menu Button -->
        <button class="menu-btn">&#9776; Menu</button>

        {{-- tela principal --}}
        <div class="screen">
            {{-- Iniciando Form Dropwdown --}}
            <form action="#">
                <fieldset class="fieldset">
                    <legend>
                        <fieldset id="field-legenda">Formulário de busca</fieldset>

                    </legend>
                    <div class="opcao">
                        <label for="especialidade">Especialidade</label>
                        <select name="especialidade" id="especialidade">
                            <option value="Todas as especialidades">TODAS AS ESPECIALIDADES</option>
                        </select>
                    </div>
                    <div class="opcao">
                        <label for="nome">Nome do médico</label>
                        <select name="nome" id="nome">
                            <option value="Todas as especialidades">TODOS OS MÉDICOS</option>
                        </select>
                    </div>
                    <div class="opcao">
                        <label for="unidade">Unidade</label>
                        <select name="unidade" id="unidade">
                            <option value="Todas as especialidades">TODAS AS UNIDADES</option>
                        </select>
                    </div>
                    <div class="opcao">
                        <label for="andar">Andar</label>
                        <select name="andar" id="andar">
                            <option value="Todas as especialidades">TODOS OS ANDARES</option>
                        </select>
                    </div>
                    <div class="opcao">
                        <label for="ala">Ala</label>
                        <select name="ala" id="ala">
                            <option value="Todas as especialidades">TODAS AS ALAS</option>
                        </select>
                    </div>
                    <fieldset class="field-data">
                        <h2>Período</h2>
                        <form>
                            <label for="birthday">Data início:</label>
                            <input type="date" id="birthday" name="birthday">
                            <label for="birthday">Data fim:</label>
                            <input type="date" id="birthday" name="birthday">
                        </form>
                    </fieldset>
                </fieldset>
            </form>
            <input type="submit" value="Limpar" />
            <input type="submit" value="Buscar" />
            {{-- Fim Form Dropwdown --}}

        </div>

        <footer class="site-footer push">
            <p>
                CENTRAL DE ADMISSÃO E ALTA - HOSPITAL UNIVERSITÁRIO - UFMA<br>
                Unidade Presidente Dutra Rua Barão de Itapary, nº 227, Centro - São Luis-MA. CEP: 65020-070<br>
                Telefone: (098) 2109-1023
            </p>

            <div id="footer">
                <p>
                    NTS - <span>Núcleo de Telessaúde</span>
                </p>
                <p>
                    4º andar - HUPD
                </p>
            </div>

        </footer>

        <!-- Pushy JS -->
        <script src="js/pushy.js"></script>
    @endsection
