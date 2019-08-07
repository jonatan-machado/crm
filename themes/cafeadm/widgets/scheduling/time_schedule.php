<?php $v->layout("_admin"); ?>
<?php $v->insert("widgets/scheduling/sidebar.php"); ?>

<section class="dash_content_app">
    <?php if (!$type): ?>
        <header class="dash_content_app_header">
            <h2 class="icon-plus-circle">Novo Horário para Agendamento</h2>
        </header>

        <div class="dash_content_app_box">
            <form class="app_form" action="<?= url("/admin/scheduling/time-schedule"); ?>" method="post">
                <!--ACTION SPOOFING-->
                <input type="hidden" name="action" value="create"/>

                <div class="label_g2">
                
                    <label class="label">
                        <span class="legend">Data disponível para Agendamento:</span>
                        <input class="mask-datetime" type="text" name="allowed_time" value="<?= date("d/m/Y H:i"); ?>" required/>
                    </label>
                
                </div>    
                <div class="al-right">
                    <button class="btn btn-green icon-check-square-o">Criar Horário</button>
                </div>
            </form>
        </div>
    <?php else: ?>
        Editar aqui
    <?php endif; ?>
</section>