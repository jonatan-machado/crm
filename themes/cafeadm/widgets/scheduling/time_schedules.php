<?php $v->layout("_admin"); ?>
<?php $v->insert("widgets/scheduling/sidebar.php"); ?>

<section class="dash_content_app">
    <header class="dash_content_app_header">
        <h2 class="icon-clock-o">Horários para Agendamento</h2>
        <a class="icon-plus-circle btn btn-green" href="<?= url("/admin/scheduling/time-schedule"); ?>">Novo Horário para Agendamento</a>
    </header>

    <div class="dash_content_app_box">
        <section>
        </section>
    </div>
</section>