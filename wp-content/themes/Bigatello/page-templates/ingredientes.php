<?php
    /* Template Name: Ingredientes */
    get_header(); the_post();
  ?>
  <section class="page-ingredientes interna xs-text-center">
    <section class="topo">
      <div class="row padding-top-45 text-center">
        <h3 class="text-white text-70-pt extra-bold">Ingredientes</h3>
      </div>
      <div class="row margin-top-5 text-center">
        <h3 class="lato text-white text-25-pt regular">Conheça melhor nossa linha de produtos</h3>
      </div>
    </section>

    <section class="conteudo margin-top-50">
      <div class="container-fluid limit">
        <form class="form-busca-ingredientes" data-alvo="lista-ingredientes-ajax" data-pagina="1" data-url="<?php echo get_template_directory_uri() ?>/get-ingredientes.php">
          <div class="row filtros">
            <div class="col-md-3 padding-right-30">
              <div class="row">
                <h3 class="lato text-d-gray text-16-pt bold">Buscar por palavra-chave</h3>
              </div>
              <div class="row margin-top-10">
                <input type="text" class="form-control termos" placeholder="Pesquise">
              </div>
            </div>
            <div class="col-md-3 padding-right-20">
              <div class="row">
                <h3 class="lato text-d-gray text-16-pt bold">Filtrar por Segmento:</h3>
              </div>
              <div class="row margin-top-10">
                <select name="" id="" class="form-control segmentos">
                  <option value="null">--TODOS--</option>
                  <?php $segmentos = get_terms( array('taxonomy' => 'segmento', 'hide_empty' => false)); ?>
                  <?php foreach( $segmentos as $s ): ?>
                    <option value="<?php echo $s->slug ?>"><?php echo $s->name ?></option>
                  <?php endforeach ?>
                </select>
              </div>
            </div>
            <div class="col-md-1">
              <div class="row margin-top-15">
                <button class="text-white text-15-pt extra-bold toupper button-red btn-ok" type="submit">ok</button>
              </div>
            </div>
          </div>
        </form>
        <div class="row margin-top-50 lista-ingredientes-ajax padding-left-20" id="ingredientes-ajax">
        </div>
      </div>
    </section>
  </section>

<?php get_footer() ?>
<script>
  $(document).ready(function(){
    getPostsBusca($('.form-busca-ingredientes'));
  })
</script>