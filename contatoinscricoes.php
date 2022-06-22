<?php require "includes/cabecalho.php"?>
    
        <article class="conteudo limitador">
           
            <h2>Inscrições</h2>

            <!--    Thalia, adicionar o iframe do Google Form aqui e DELETAR tudo abaixo (TUDO ANTES DO PHP), observar que é preciso fechar a tag </article> -->

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero dolorum, maxime et consequatur architecto perspiciatis impedit ullam. Facilis sapiente magni accusantium consectetur qui omnis, consequatur autem iusto sunt tenetur id!</p>
            
            <p>Incidunt illum, voluptatem reprehenderit quibusdam minus temporibus rem fugiat odit earum ipsum ratione excepturi quasi fugit suscipit libero, recusandae repellat culpa. Aspernatur natus omnis ad aperiam magnam suscipit, praesentium quasi.</p>
           

        <form id="my-form" action="https://formspree.io/f/mrgjydnw" method="post">
                <div id="ne">
                        <div>
                        <!-- instrução do caixa (Nome:)  -->
                        <!-- for será igual id -->
                        <label for="nome">Nome:</label>
                        </div>
                        
                        <!-- caixa de entrada -->
                        <!-- required, não permite envio em branco do item -->
                        <div>
                        <input type="text" name="nome" id="nome" required>
                        </div>

                        <!-- instrução do caixa (email:)  -->
                        <!-- for será igual id -->
                        <div>
                        <label for="email">E-mail:</label>
                        </div>
                        

                        <!-- caixa de entrada -->
                        <!-- required, não permite envio em branco do item -->
                        <div>
                        <input type="email" name="email" id="email" required>
                        </div>
                </div>

                <div id="dat">
                        <!-- instrução do caixa (Data de nascimento:)  -->
                        <!-- for será igual id -->
                        <div>
                        <label for="nascimento">Data de nascimento:</label>
                        </div>
                        
                        <!-- caixa de entrada -->
                        <div>
                        <input type="date" name="nascimento" id="nascimento">
                        </div>

                        <!-- instrução do caixa (Idade:)  -->
                        <!-- for será igual id -->
                        <div>
                        <label for="idade">Idade:</label>
                        </div>
                        <!-- caixa de entrada -->
                        <div>
                        <input type="number" name="idade" id="idade" min="18" max="100" placeholder="Idade" disabled>
                        </div>
                </div>

                            <p> <b> Obs.: Abaixo de 18 anos, será necessário a presença dos Pais ou Responsáveis para fazer inscrição no curso. </b> </p>


                <div class="sexo">
                        <label>Sexo:</label>
                        
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
                        <label>Interesses:</label>

                        <!-- Em input tipo checkbox, será: -->
                        <!-- Em input, no campo name="interesses" - será igual para design, marketing e programacao -->
                        <!-- será aceito somente varias opções -->
                            <!-- instrução do caixa (Interesses:)  -->
                            <!-- for será igual id -->
                            <!-- javascript não consegue ler type radio e type checkbox, devemos acrescentar o value=""-->

                    <div id="interesses">
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

                    </div>

                </div>

               <!-- INÍCIO HTML PARA CEP/ENDEREÇO -->
               <div id="formulario">
                    <!-- INÍCIO HTML PARA CEP/ENDEREÇO -->
                    <div>
                        <div>
                        <label for="cep">CEP:</label>
                        </div>

                        <div>
                        <input type="text" id="cep" name="cep" maxlength="9" required>
                        <button id="localizar-cep">Buscar</button>
                        </div>
                        <b id="status"></b>
                    </div>
                    <div>
                        <label for="endereco">Endereço:</label>
                    </div>
                    <div>
                        <input type="text" id="endereco" name="endereco" size="30">
                    </div>
                    <div>
                        <label for="bairro">Bairro:</label>
                    </div>
                    <div>
                        <input type="text" id="bairro" name="bairro">
                    </div>
                    <div>
                        <label for="cidade">Cidade:</label>
                    </div>
                    <div>
                        <input type="text" id="cidade" name="cidade">
                    </div>
                    <div>
                        <label for="estado">Estado:</label>
                    <div>
                        <div>
                        <input type="text" id="estado" name="estado">
                    </div>
                    <!-- /FIM HTML PARA CEP/ENDEREÇO -->


                    <div>
                        <!-- Em select, abre caixa de opções -->
                        <div>
                        <label for="assunto">Assunto desejado:</label>
                        <div>
                        <select name="assunto" id="assunto">
                            <option></option>
                            <option>Dúvidas</option>
                            <option>Elogios</option>
                            <option>Reclamações</option>
                            <option>Inscrição</option>
                            <option>Outros</option>
                        </select>

                    </div>

                </div>

                <div>
                    <label for="mensagem">Mensagem: 
                        <span id="maximo"> (restam <b id="caracteres">100</b> caracteres)</span>
                    </label> <br>
                    <textarea maxlength="100" name="mensagem" id="mensagem" cols="25" rows="5"></textarea>
                </div>
    
                <button type="submit">Enviar</button>
                <!-- também poderia usar:
                <input type="button" value="Enviar"> -->
    
                <p id="my-form-status"></p>
    
                
            </form>
            </article>
        
    
    
    <?php require "includes/rodape.php" ?>
   