<?php
include("../model/database.php");
include("../controller/crudProdutos.php");
?>

<div class="favorite-products">
  <div class="title-about">
    <div class="dashed-title"></div>
    <h1>Descubra os produtos <span>favoritos dos nossos clientes</span></h1>
    <p>e deixe seu pet feliz como nunca!</p>
  </div>

  <!-- css - 0.7.1 -->
  <div class="favorite-products__cards amareloOuro">
    <?php
    // Certifique-se de que $mongoDBColecao é uma instância válida de uma coleção MongoDB
    if ($colecao instanceof MongoDB\Collection) {
      $produtos = $colecao->find(); // Buscar todos os documentos da coleção

      // Verificar se foram encontrados documentos
      if ($produtos) {
        foreach ($produtos as $produto) {
          $tamanhos = explode(',', $produto->tamanho);
    ?>
          <div class="card">
            <img src="images/<?php echo $produto->imagem; ?>" class="img-produto" alt="" />
            <div class="sobre-card">
              <div class="info-card">
                <div class="sobre-produto">
                  <?php echo $produto->nome; ?>
                </div>
                <div class="preco">
                  <p class="parcelas">
                    Ou em 12x de <?php echo $produto->preco / 12; ?>
                  </p>
                  <p class="preco-avista">
                    R$ <?php echo $produto->preco; ?>
                  </p>
                </div>
                <div class="desconto">20% OFF</div>
              </div>

              <div class="add" id="infoCarrinho">
                <div class="botoes">
                  <button class="btn-carr-mais" id="addCarrinho">
                    Colocar no Carrinho
                  </button>
                  <a href="detalhes-produto.php?id=<?php echo $produto->_id; ?>" class="btn-carr-mais">Mais Detalhes</a>
                </div>
              </div>
            </div>

            <div class="adicionar-produto">
              <div class="escolha">
                <div class="nome-produto">
                  <h3>
                    <?php echo $produto->nome; ?>
                  </h3>
                </div>


                <div class="tamanho">
                  <h2>Tamanho</h2>
                  <form>
                    <?php foreach ($tamanhos as $tamanho) { ?>
                      <label>
                        <input type="radio" name="tamanho" value="<?php echo $tamanho; ?>">
                        <span class="btn"><?php echo $tamanho; ?></span>
                      </label>
                    <?php } ?>
                  </form>
                </div>

                <div class="quantidade">
                  <h2>Quantidade</h2>
                  <div class="quantity">
                    <button class="btn-quantity" data-action="decrease">-</button>
                    <input class="input-quantity" type="number" min="1" value="1" />
                    <button class="btn-quantity" data-action="increase">+</button>
                  </div>
                </div>
              </div>

              <div class="confirmar-pedido">
                <div class="decide-pedido">
                  <button class="btn-pedido cancelar-compra">Cancelar</button>
                  <button class="btn-pedido confirmar-compra">Pronto</button>
                </div>
              </div>
            </div>
          </div>
    <?php
        }
      }
    }
    ?>

    <div class="card">
      <img src="imgs/produto-teste.png" class="img-produto" alt="" />
      <div class="sobre-card">
        <div class="info-card">
          <div class="sobre-produto">
            Talco meu Pet Genial Premium - Banho Seco
          </div>
          <div class="preco">
            <p class="parcelas">Ou em 12x de R$3,40</p>
            <p class="preco-avista">R$34,90</p>
          </div>
          <div class="desconto">20% OFF</div>
        </div>

        <div class="add" id="infoCarrinho">
          <div class="botoes">
            <button class="btn-carr-mais" id="addCarrinho">
              Colocar no Carrinho
            </button>
            <a href="detalhes-produto.php" class="btn-carr-mais">Mais Detalhes</a>
          </div>
        </div>
      </div>

      <div class="adicionar-produto">
        <div class="escolha">
          <div class="nome-produto">
            <h3>Talco meu Pet Genial Premium - Banho Seco</h3>
          </div>

          <div class="tamanho">
            <h2>Tamanho</h2>
            <form>
              <label>
                <input type="radio" name="tamanho" value="100ML" />
                <span class="btn">100ML</span>
              </label>

              <label>
                <input type="radio" name="tamanho" value="250ML" />
                <span class="btn">250ML</span>
              </label>

              <label>
                <input type="radio" name="tamanho" value="500ML" />
                <span class="btn">500ML</span>
              </label>
            </form>
          </div>

          <div class="quantidade">
            <h2>Quantidade</h2>
            <div class="quantity">
              <button class="btn-quantity" data-action="decrease">-</button>
              <input class="input-quantity" type="number" min="1" value="1" />
              <button class="btn-quantity" data-action="increase">+</button>
            </div>
          </div>
        </div>

        <div class="confirmar-pedido">
          <div class="decide-pedido">
            <button class="btn-pedido cancelar-compra">Cancelar</button>
            <button class="btn-pedido confirmar-compra">Pronto</button>
          </div>
        </div>
      </div>
    </div>

    <div class="card">
      <img src="imgs/produto-teste.png" class="img-produto" alt="" />
      <div class="sobre-card">
        <div class="info-card">
          <div class="sobre-produto">
            Talco meu Pet Genial Premium - Banho Seco
          </div>
          <div class="preco">
            <p class="parcelas">Ou em 12x de R$3,40</p>
            <p class="preco-avista">R$34,90</p>
          </div>
          <div class="desconto">20% OFF</div>
        </div>

        <div class="add" id="infoCarrinho">
          <div class="botoes">
            <button class="btn-carr-mais" id="addCarrinho">
              Colocar no Carrinho
            </button>
            <a href="detalhes-produto.php" class="btn-carr-mais">Mais Detalhes</a>
          </div>
        </div>
      </div>

      <div class="adicionar-produto">
        <div class="escolha">
          <div class="nome-produto">
            <h3>Talco meu Pet Genial Premium - Banho Seco</h3>
          </div>

          <div class="tamanho">
            <h2>Tamanho</h2>
            <form>
              <label>
                <input type="radio" name="tamanho" value="100ML" />
                <span class="btn">100ML</span>
              </label>

              <label>
                <input type="radio" name="tamanho" value="250ML" />
                <span class="btn">250ML</span>
              </label>

              <label>
                <input type="radio" name="tamanho" value="500ML" />
                <span class="btn">500ML</span>
              </label>
            </form>
          </div>

          <div class="quantidade">
            <h2>Quantidade</h2>
            <div class="quantity">
              <button class="btn-quantity" data-action="decrease">-</button>
              <input class="input-quantity" type="number" min="1" value="1" />
              <button class="btn-quantity" data-action="increase">+</button>
            </div>
          </div>
        </div>

        <div class="confirmar-pedido">
          <div class="decide-pedido">
            <button class="btn-pedido cancelar-compra">Cancelar</button>
            <button class="btn-pedido confirmar-compra">Pronto</button>
          </div>
        </div>
      </div>
    </div>

    <div class="card">
      <img src="imgs/produto-teste.png" class="img-produto" alt="" />
      <div class="sobre-card">
        <div class="info-card">
          <div class="sobre-produto">
            Talco meu Pet Genial Premium - Banho Seco
          </div>
          <div class="preco">
            <p class="parcelas">Ou em 12x de R$3,40</p>
            <p class="preco-avista">R$34,90</p>
          </div>
          <div class="desconto">20% OFF</div>
        </div>

        <div class="add" id="infoCarrinho">
          <div class="botoes">
            <button class="btn-carr-mais" id="addCarrinho">
              Colocar no Carrinho
            </button>
            <a href="detalhes-produto.php" class="btn-carr-mais">Mais Detalhes</a>
          </div>
        </div>
      </div>

      <div class="adicionar-produto">
        <div class="escolha">
          <div class="nome-produto">
            <h3>Talco meu Pet Genial Premium - Banho Seco</h3>
          </div>

          <div class="tamanho">
            <h2>Tamanho</h2>
            <form>
              <label>
                <input type="radio" name="tamanho" value="100ML" />
                <span class="btn">100ML</span>
              </label>

              <label>
                <input type="radio" name="tamanho" value="250ML" />
                <span class="btn">250ML</span>
              </label>

              <label>
                <input type="radio" name="tamanho" value="500ML" />
                <span class="btn">500ML</span>
              </label>
            </form>
          </div>

          <div class="quantidade">
            <h2>Quantidade</h2>
            <div class="quantity">
              <button class="btn-quantity" data-action="decrease">-</button>
              <input class="input-quantity" type="number" min="1" value="1" />
              <button class="btn-quantity" data-action="increase">+</button>
            </div>
          </div>
        </div>

        <div class="confirmar-pedido">
          <div class="decide-pedido">
            <button class="btn-pedido cancelar-compra">Cancelar</button>
            <button class="btn-pedido confirmar-compra">Pronto</button>
          </div>
        </div>
      </div>
    </div>

    <div class="card">
      <img src="imgs/produto-teste.png" class="img-produto" alt="" />
      <div class="sobre-card">
        <div class="info-card">
          <div class="sobre-produto">Teste 2</div>
          <div class="preco">
            <p class="parcelas">Ou em 11x de R$3,40</p>
            <p class="preco-avista">R$22,90</p>
          </div>
          <div class="desconto">20% OFF</div>
        </div>

        <div class="add" id="infoCarrinho">
          <div class="botoes">
            <button class="btn-carr-mais" id="addCarrinho">
              Colocar no Carrinho
            </button>
            <a href="detalhes-produto.php" class="btn-carr-mais">Mais Detalhes</a>
          </div>
        </div>
      </div>

      <div class="adicionar-produto">
        <div class="escolha">
          <div class="nome-produto">
            <h3>Teste 2</h3>
          </div>

          <div class="tamanho">
            <h2>Tamanho</h2>
            <form>
              <label>
                <input type="radio" name="tamanho" value="100ML" />
                <span class="btn">300ML</span>
              </label>

              <label>
                <input type="radio" name="tamanho" value="250ML" />
                <span class="btn">450ML</span>
              </label>

              <label>
                <input type="radio" name="tamanho" value="500ML" />
                <span class="btn">600ML</span>
              </label>
            </form>
          </div>

          <div class="quantidade">
            <h2>Quantidade</h2>
            <div class="quantity">
              <button class="btn-quantity" data-action="decrease">-</button>
              <input class="input-quantity" type="number" min="1" value="1" />
              <button class="btn-quantity" data-action="increase">+</button>
            </div>
          </div>
        </div>

        <div class="confirmar-pedido">
          <div class="decide-pedido">
            <button class="btn-pedido cancelar-compra">Cancelar</button>
            <button class="btn-pedido confirmar-compra">Pronto</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>