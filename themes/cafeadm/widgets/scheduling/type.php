<?php $v->layout("_admin"); ?>
<?php $v->insert("widgets/scheduling/sidebar.php"); ?>

<section class="dash_content_app">
    <?php if (!$type): ?>
        <header class="dash_content_app_header">
            <h2 class="icon-plus-circle">Novo Tipo de Serviço</h2>
        </header>

        <div class="dash_content_app_box">
            <form class="app_form" action="<?= url("/admin/scheduling/type"); ?>" method="post">
                <!--ACTION SPOOFING-->
                <input type="hidden" name="action" value="create"/>

                <div class="label_g2">
                
                    <label class="label">
                            <span class="legend">*Título do Serviço:</span>
                            <input type="text" name="name" placeholder="O nome do Tipo de Serviço" required/>
                    </label>
                
                </div>    
                <div class="al-right">
                    <button class="btn btn-green icon-check-square-o">Criar Serviço</button>
                </div>
            </form>
        </div>
    <?php else: ?>
        Editar aqui
    <?php endif; ?>
</section>