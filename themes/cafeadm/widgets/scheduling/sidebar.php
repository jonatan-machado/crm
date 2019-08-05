<div class="dash_content_sidebar">
    <h3 class="icon-asterisk">dashboard/Agendamento</h3>
    <p class="dash_content_sidebar_desc">Aqui você gerencia todos os agendamentos...</p>

    <nav>
        <?php
        $nav = function ($icon, $href, $title) use ($app) {
            $active = ($app == $href ? "active" : null);
            $url = url("/admin/{$href}");
            return "<a class=\"icon-{$icon} radius {$active}\" href=\"{$url}\">{$title}</a>";
        };

        echo $nav("pencil-square-o", "scheduling/home", "Agendamento");
        echo $nav("plus-circle", "scheduling/post", "Novo Agendamento");
        ?>
    </nav>
</div>