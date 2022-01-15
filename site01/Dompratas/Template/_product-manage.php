<main>

    

    <div class="container">


    <section>
        <a href="index.php">
            <button class="btn btn-success">Voltar</button>
        </a>
    </section>

    <h2 class="mt-3">Cadastrar Produtos</h2>
    <form method="post">

    <div class="form-group">
        <label>Categoria do ítem</label>
        <input type="text" class="form-control" name="item_category">
    </div>

    <div class="form-group">
        <label>Nome do ítem</label>
        <input type="text" class="form-control" name="item_name">
    </div>

    <div class="form-group">
        <label>Status</label>
        <div>
            <div class="form-check form-check-inline">
                <label class="form-control">
                    <input type="radio" name="disponivel" value="s" checked> Disponível
                </label> 
            </div>

            <div class="form-check form-check-inline">
                <label class="form-control">
                    <input type="radio" name="disponivel" value="n"> Indisponível
                </label> 
            </div>
        </div>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-success">Enviar</button>
    </div>
    

    </form>

    </div>
</main>