<?php

namespace Source\App\Admin;

use Source\Models\Schedule;
use Source\Models\Client;
use Source\Models\User;
use Source\Models\Type;
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

    /**
     * @param array|null $data
     * @throws \Exception
     */
    public function post(?array $data): void
    {
        //create
        if (!empty($data["action"]) && $data["action"] == "create") {

            $data = filter_var_array($data, FILTER_SANITIZE_STRIPPED);            
            $scheduleCreate = new Schedule();

            $scheduleCreate->id_client = $data['client'];
            $scheduleCreate->content = $data['content']; 
            $scheduleCreate->id_type_services = $data['type'];
            $scheduleCreate->id_user = user()->id();
            $scheduleCreate->schedule_at = date_fmt_back($data["schedule"]);

            if (!$scheduleCreate->save()) {
                $json["message"] = $scheduleCreate->message()->render();
                echo json_encode($json);
                return;
            }

            $this->message->success("Agendado com sucesso...")->flash();
            //$json["redirect"] = url("/admin/scheduling/home");
            $json["redirect"] = url("/admin/scheduling/post/{$scheduleCreate->id}");

            echo json_encode($json);
            return;            
        }

        $postEdit = null;
        if (!empty($data["post_id"])) {
            $postId = filter_var($data["post_id"], FILTER_VALIDATE_INT);
            $postEdit = (new Post())->findById($postId);
        }

        $head = $this->seo->render(
            CONF_SITE_NAME . " | " . ($postEdit->title ?? "Novo Agendamento"),
            CONF_SITE_DESC,
            url("/admin"),
            url("/admin/assets/images/image.jpg"),
            false
        );
        echo $this->view->render("widgets/scheduling/post", [
            "app" => "scheduling/post",
            "head" => $head,
            "post" => $postEdit,
            "types" => (new Type())->find()->order("name")->fetch(true),
            "clients" => (new User())->find("level >= :level", "level=1")->fetch(true)
        ]);       
    }
}