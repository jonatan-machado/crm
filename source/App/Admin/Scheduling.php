<?php

namespace Source\App\Admin;

/**
 * Class Scheduling
 * @package Source\App\Admin
 */
class Scheduling extends Admin
{
	/**
     * Scheduling constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function home(?array $data): void {
    	$head = $this->seo->render(
            CONF_SITE_NAME . " | Agendamento",
            CONF_SITE_DESC,
            url("/admin"),
            url("/admin/assets/images/image.jpg"),
            false
        );

        echo $this->view->render("widgets/scheduling/home", [
            "app" => "scheduling/home",
            "head" => $head
        ]);
    }
}