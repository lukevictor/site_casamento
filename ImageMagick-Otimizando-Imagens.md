# Como otimizar imagens
Este passo não é executado nativamente pelo processo de build. É um passo opcional que pode ser utilizado para criar imagens otimizadas.

As imagens serão criadas em um novo diretório, portanto as URLs devem ser alteradas para apontar para as novas imagens.

## Dependência
É necessário instalar o **ImageMagick** no sistema operacional, uma vez que os comandos executados dependem de binários da ferramenta. Não são necessárias dependências do Grunt ou Npm pois os comandos são executados diretamente por linha de comando.

## Execução

1. Mover-se para `/assets/images` e certificar-se de que exista o diretorio `opt/` Todas as imagens com nomes conflitantes nesse diretório serão sobrescritas.

2. Executar o comando para otimizar as imagens `JPG`:
    ```bash
    mogrify -path opt/ -sampling-factor 4:2:0 -strip -quality 85 -interlace JPEG -colorspace sRGB *.jpeg
    ```
3. Executar o comando para otimizar as imagens `PNG`:
    ```bash
    mogrify -path opt -strip *.png
    ```