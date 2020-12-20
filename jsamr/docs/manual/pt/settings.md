# Configuração

1. Introdução
2. [Revista](settings.md#context)
3. [Website](settings.md#website)
4. [Fluxo de Trabalho](settings.md#workflow)
5. [Distribuição](settings.md#distribution)

Configure o seu website para corresponder às suas necessidades.

Pode aceder às páginas de configuração ao clicar em **Configurações** no menu de navegação da esquerda, e depois selecionando a página específica de configuração que pretende.

*Apenas Editores-gestores e Administradores têm acesso e podem editar as configurações.*

Existe bastante para descobrir nesta área. Enquanto vamos melhorando esta documentação, fornecemos uma visão geral para que serve cada página de configuração, e esclarecimentos detalhados para as opções mais confusas.

## <a name="context"></a>Revista

Insira detalhes básicos sobre a revista, incluindo o título da revista, uma breve descrição, o cabeçalho, informações de contacto, e as secções que a revista publica.

As **Secções** permitem publicar submissões em diferentes secções da revista, tais como Recensões e Artigos.

## <a name="website"></a>Website

Configure a aparência do website visível ao público, incluindo inserir o logo da revista, a configuração da página de início, gestão da barra lateral e muito mais.

Pode ainda configurar os idiomas do site, configurações de arquivo, instalar e ativar vários plugins, publicar notícias e inserir informação importante para os visitantes.

### <a name="website-nav-menus"></a>Menus de Navegação

Pode editar os menus de navegação presentes no website visível ao público. Pode adicionar e remover itens, e reorganizá-los. Pode ainda criar páginas personalizadas no seu site ou inserir links para outro site.

Alguns tipos de menu apenas podem ser disponibilizados sob certas circunstâncias. Por exemplo, o tipo de menu Acesso irá redirecionar para a página de login, mas apenas aparecerá no menu quando o visitante do website não tiver entrado na sua conta. Da mesma forma, o tipo de menu de Saída do Sistema apenas aparece quando o visitante entrou na sua conta de utilizador.

Quando atribui um Item de Menu com condições de visualização, verá um ícone: <span class="fa fa-eye-slash"></span>. Pode clicar nesse ícone para saber mais sobre quando esse menu irá aparecer ou desaparecer.

## <a name="workflow"></a>Fluxo de trabalho

Configure todos os aspetos do [Fluxo de trabalho Editorial](editorial-workflow.md), incluindo gestão de ficheiros, instruções de submissão, prazos de revisão e diretrizes, notificações de e-mail e muito mais.

### <a name="workflow-submission"></a>Submissão

Configure os requisitos de submissão, forneça instruções ao autor, configure os tipos de ficheiro de submissão e muito mais.

### <a name="workflow-submission-metadata"></a>Metadados

Decida que tipos de metadados, tais como palavras-chave e referências, a sua revista irá suportar.

Pode ainda determinar se o autor será obrigado ou não a fornecer cada metadado durante a submissão, ou se esta informação deverá ser inserida pelos editores.

### <a name="workflow-submission-components"></a>Componentes

Os seus ficheiros de publicação podem consistir num número de componentes, incluindo o texto de artigo principal, materiais de investigação, conjuntos de dados e muito mais.

Quando os autores e os editores transferem ficheiros para uma submissão, é-lhes pedido que identifiquem a que componente corresponde o ficheiro. É encorajado a adicionar ou editar componentes para responder às necessidades específicas da revista.

Elimine os que não são apropriados para a sua revista. Diminuirá a lista de opções que aparecerão aos autores durante o processo de submissão.

### <a name="workflow-submission-checklist"></a>Lista de verificação

Forneça aos autores uma lista de verificação de tarefas que deverão completar antes de terminar a sua submissão. Este é um bom local para indicar os requisitos para referenciação, tamanho da fonte, espaçamento, formato do documentos e muito mais.

### <a name="workflow-submission-guidelines"></a>Diretrizes para Autores

Forneça instruções adicionais que não se encontrem na lista de verificação e informe sobre a política de privacidade sobre os seus direitos de autor.

## <a name="workflow-review"></a>Revisão

Configure todas as políticas de revisão e procedimentos, incluindo os prazos, notificações, instruções de revisão e muito mais.

### <a name="workflow-review-mode"></a>Modo de Revisão Padrão

Escolha o modo de revisão que será utilizado como padrão.

- A revisão **Duplamente Cega** irá impedir que o revisor e o autor saibam as identidades um do outro.
- A revisão **Cega** irá impedir que o autor saiba a identidade do revisor.
- A revisão **Aberta** irá permitir que o revisor e o autor saibam as identidades um do outro.

Os editores podem escolher qualquer tipo de revisão que necessitem, mas normalmente usam a definida como padrão.

### <a name="workflow-review-file-access"></a>Restringir Acesso aos Ficheiros

Por padrão, um revisor pode ver os ficheiros de submissão antes de decidir se está ou não disponível para realizar a revisão. Selecione esta opção se pretender que os revisores aceitem efetuar a revisão antes de terem acesso aos ficheiros.

### <a name="workflow-review-guidelines"></a>Instruções para Revisão

Forneça aos revisores um conjunto de critérios para ajudar a avaliar a adequação de uma submissão à publicação na revista, o que pode incluir instruções para preparar uma revisão eficaz e útil. Os revisores terão a oportunidade de enviar comentários destinados ao autor e editor, bem como comentários separados destinados apenas ao editor.

### <a name="workflow-review-interests"></a>Conflito de Interesses

Será solicitado aos Revisores que confirme que não têm qualquer conflito de interesses para efetuar a revisão.

### <a name="workflow-review-forms"></a>Formulários de Revisão

Se pretender solicitar informação específica aos revisores, pode construir formulários de revisão. Um editor poderá selecionar um formulário quando enviar uma submissão para um revisor, e solicitar ao revisor que o preencha quando estiver a submeter a sua revisão.

## <a name="workflow-library"></a>Biblioteca da Editora

A Biblioteca da Editora oferece um repositório de ficheiros para armazenar e facilmente partilhar ficheiros comuns, tais como as instruções de escrita de artigos, contratos aos autores e formulário de publicação, e materiais de marketing.

Os objetos armazenados na Biblioteca da Editora podem ser rapidamente recuperados e adicionados à [Biblioteca da Submissão](editorial-workflow#submission-library.md) para ser partilhado com os autores ou assistentes.

### <a name="workflow-emails"></a>E-mails

O OJS envia e-mails durante as várias etapas do [Processo Editorial](editorial-workflow.md), bem como em outras ações como registo no sistema e confirmação de submissão.

A configuração nesta secção permite-lhe editar a assinatura anexada a cada e-mail, bem como alterar as mensagens padrão enviadas para cada tipo de e-mail.

Se não tem a certeza de onde pertence um e-mail específico, clique na seta à esquerda do título de e-mail e depois clique em **Editar Email**. A maioria dos e-mails incluem uma pequena descrição de quando são enviados.

*Se quiser restaurar um modelo de e-mail para o seu padrão, clique em __Restaurar__ para restaurar para a mensagem padrão.*

## <a name="distribution"></a>Distribuição

Configure as definições relacionadas com a indexação em motores de pesquisa, quaisquer pagamentos que irá receber, e permissões e detalhes de licenças para publicações.

No separador das Permissões, encontra configurações para definir os direitos de autor e licenças de utilização.

### <a name="copyright-v-license"></a> Qual é a diferença entre Direitos de Autor e Licenças?

Os direitos de autor identificam o autor ou proprietário dos direitos de autor para um trabalho publicado. Por exemplo, Copyright (c) 2016 by Jane Smith.

A licença anexada a um trabalho irá determinar os direitos de utilização para o trabalho publicado. Por exemplo, CC-By 4.0 permite que o trabalho seja copiado, redistribuído e adaptado para qualquer fim, mesmo comercial, desde que a atribuição seja dada ao proprietário dos direitos de autor.
