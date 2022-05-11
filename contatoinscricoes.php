<?php require "includes/cabecalho.php"?>
    <main>
        <article class="conteudo limitador">
            <h2>Contato</h2>

                <p>Nós, do Projeto Musical Talentos agradecemos seu contato ou seu interesse em fazer parte do nosso time de estudos.</p>
            
                <p>Preencha este formulario, demonstrando o assunto desejado e entraremos em contato, para conversarmos.</p>

                <!-- Formulario contato -->
                <!-- Action - Envio ao formspree.io (envio de dados para o email cadastrado no site) -->
                <form id="my-form" action="https://formspree.io/f/mwkyrzgj" method="post">
                    
                    <div>
                        <!-- instrução do caixa (Nome:)  -->
                        <!-- for será igual id -->
                        <label for="nome">Nome:</label>
                        
                        <!-- caixa de entrada -->
                        <!-- required, não permite envio em branco do item -->
                        <input type="text" name="nome" id="nome" required>
                    </div>

                    <div>
                        <!-- instrução do caixa (email:)  -->
                        <!-- for será igual id -->
                        <label for="email">E-mail:</label>
                        
                        <!-- caixa de entrada -->
                        <!-- required, não permite envio em branco do item -->
                        <input type="email" name="email" id="email" required>
                    </div>

                    <div>
                        <!-- instrução do caixa (Data de nascimento:)  -->
                        <!-- for será igual id -->
                        <label for="nascimento">Data de nascimento:</label>
                        
                        <!-- caixa de entrada -->
                        <input type="date" name="nascimento" id="nascimento">
                    </div>

                    <div>
                        <!-- instrução do caixa (Telefone:)  -->
                        <!-- for será igual id -->
                        <label for="telefone">Telefone:</label>
                        
                        <!-- caixa de entrada -->
                        <input type="tel" name="telefone" id="telefone">
                    </div>

                    <div>
                        <!-- instrução do caixa (Idade:)  -->
                        <!-- for será igual id -->
                        <label for="idade">Idade:</label>
                        
                        <!-- caixa de entrada -->
                        <input type="number" name="idade" id="idade" min="18" max="100">
                    </div>

                    <div class="sexo">
                        <p>Sexo:</p>
                        
                        <!-- Em input tipo radio, será: -->
                        <!-- Em input, no campo name="sexo" - será igual para masculino e feminino -->
                        <!-- será aceito somente uma opção -->
                            <!-- instrução do caixa (Sexo:)  -->
                            <!-- for será igual id -->
                            <!-- javascript não consegue ler type radio e type checkbox, devemos acrescentar o value=""-->
                        <input value="Masculino" type="radio" name="sexo" id="masculino">
                        <label for="masculino">Masculino</label>
                        
                        <input value="Feminino" type="radio" name="sexo" id="feminino">
                        <label for="feminino">Feminino</label>

                    </div>

                    <div class="interesses">
                        <p>Interesses:</p>

                        <!-- Em input tipo checkbox, será: -->
                        <!-- Em input, no campo name="interesses" - será igual para design, marketing e programacao -->
                        <!-- será aceito somente varias opções -->
                            <!-- instrução do caixa (Interesses:)  -->
                            <!-- for será igual id -->
                            <!-- javascript não consegue ler type radio e type checkbox, devemos acrescentar o value=""-->

                        <input value="Violino" type="checkbox" name="interesses" id="Violino">
                        <label for="Violino">Violino</label>

                        <input value="Violoncelo" type="checkbox" name="interesses" id="Violoncelo">
                        <label for="Violoncelo">Violoncelo</label>

                        <input value="ViolaDeArco" type="checkbox" name="interesses" id="ViolaDeArco">
                        <label for="ViolaDeArco">Viola de Arco</label>

                        <input value="Violao" type="checkbox" name="interesses" id="Violao">
                        <label for="Violao">Violão</label>

                        <input value="Teclado" type="checkbox" name="interesses" id="Teclado">
                        <label for="Teclado">Teclado</label>

                        <input value="FlautaContralto" type="checkbox" name="interesses" id="FlautaContralto">
                        <label for="FlautaContralto">Flauta Contralto</label>

                        <input value="FlautaSoprano" type="checkbox" name="interesses" id="FlautaSoprano">
                        <label for="FlautaSoprano">Flauta Soprano</label>

                        <input value="Escaleta" type="checkbox" name="interesses" id="Escaleta">
                        <label for="Escaleta">Escaleta</label>

                    </div>

                    
                    <!-- INÍCIO HTML PARA CEP/ENDEREÇO -->
                    <div>
                        <label for="cep">CEP:</label>
                        <input type="text" id="cep" name="cep" maxlength="9" required>
                        <button id="localizar-cep">Buscar</button>
                        <b id="status"></b>
                    </div>
                    <div>
                        <label for="endereco">Endereço:</label>
                        <input type="text" id="endereco" name="endereco" size="30">
                    </div>
                    <div>
                        <label for="bairro">Bairro:</label>
                        <input type="text" id="bairro" name="bairro">
                    </div>
                    <div>
                        <label for="cidade">Cidade:</label>
                        <input type="text" id="cidade" name="cidade">
                    </div>
                    <div>
                        <label for="estado">Estado:</label>
                        <input type="text" id="estado" name="estado">
                    </div>
                    <!-- /FIM HTML PARA CEP/ENDEREÇO -->


                    <div>
                        <!-- Em select, abre caixa de opções -->
                        <label for="assunto">Assunto desejado:</label>
                        <select name="assunto" id="assunto">
                            <option></option>
                            <option>Dúvidas</option>
                            <option>Elogios</option>
                            <option>Reclamações</option>
                            <option>Inscrição</option>
                            <option>Outros</option>
                        </select>

                    </div>

                    <div>
                    <label for="mensagem">Mensagem: 
                        <span id="maximo"> (restam <b id="caracteres">100</b> caracteres)</span>
                    </label> <br>
                    <textarea maxlength="100" name="mensagem" id="mensagem" cols="20" rows="5"></textarea>
                </div>

                <button type="submit">Enviar dados</button>

                <p id="my-form-status"></p>

                <!-- Pode ser assim também: -->
                <!-- <input type="button" value="Enviar dados"> -->
            </form>

        
        </article>
        
    </main>
    
    <?php require "includes/rodape.php" ?>
   