<?php $v->layout("_admin"); ?>
<?php $v->insert("widgets/scheduling/sidebar.php"); ?>

<section class="dash_content_app">
    <header class="dash_content_app_header">
        <h2 class="icon-star-o">Tipos de Serviço</h2>
        <a class="icon-plus-circle btn btn-green" href="<?= url("/admin/scheduling/type"); ?>">Novo Tipo de Serviço</a>
    </header>

    <div class="dash_content_app_box">
        <section>
        </section>
    </div>
</section>