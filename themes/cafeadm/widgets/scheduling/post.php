<?php $v->layout("_admin"); ?>
<?php $v->insert("widgets/scheduling/sidebar.php"); ?>

<section class="dash_content_app">
    <?php if (!$post): ?>
        <header class="dash_content_app_header">
            <h2 class="icon-plus-circle">Novo Agendamento</h2>
        </header>

        <div class="dash_content_app_box">
            <form class="app_form" action="<?= url("/admin/scheduling/post"); ?>" method="post">
                <!-- ACTION SPOOFING-->
                <input type="hidden" name="action" value="create"/>

                <div class="label_g2">
                    <label class="label">
                        <span class="legend">*Tipo de Serviço:</span>
                        <select name="type" required>
                            <?php foreach ($types as $type): ?>
                                <option value="<?= $type->id; ?>"><?= $type->name; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </label>
                </div>
                
                <label class="label">
                    <span class="legend">*Informações:</span>
                    <textarea class="mce" name="content"></textarea>
                </label>

                <div class="label_g2">

                    <label class="label">
                        <span class="legend">*Cliente:</span>
                        <select name="client" required>
                            <option selected disabled> Selecione...</option>
                            <?php foreach ($clients as $client): ?>
                            <option value="<?= $client->id; ?>"><?= $client->fullName(); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </label>

                     <label class="label">
                        <span class="legend">Data de Agendamento:</span>
                        <select name="schedule" required>
                            <option selected disabled> Selecione...</option>
                            <?php foreach ($times as $time): ?>
                            <option value="<?= $time->id; ?>"><?= $time->allowed_time_at; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </label>
                </div>

                <div class="al-right">
                    <button class="btn btn-green icon-check-square-o">Agendar</button>
                </div>
            </form>
        </div>
    <?php else: ?>
        Editar aqui
    <?php endif; ?>
</section>