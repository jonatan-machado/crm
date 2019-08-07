<?php

namespace Source\App\Admin;

use Source\Models\Schedule;
use Source\Models\Client;
use Source\Models\User;
use Source\Models\Type;
use Source\Models\Time;
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
            $scheduleCreate->id_schedule_at = $data["schedule"];

            if (!$scheduleCreate->save()) {
                $json["message"] = $scheduleCreate->message()->render();
                echo json_encode($json);
                return;
            }

            $this->message->success("Agendado com sucesso...")->flash();
            $json["redirect"] = url("/admin/scheduling/home");
            //$json["redirect"] = url("/admin/scheduling/post/{$scheduleCreate->id}");

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
            "times" => (new Time())->find()->order("allowed_time_at")->fetch(true),
            "clients" => (new User())->find("level >= :level", "level=1")->fetch(true)
        ]);       
    }

    /**
     * @param array|null $data
     */
    public function types(?array $data): void
    {
        $head = $this->seo->render(
            CONF_SITE_NAME . " | Tipos de Serviço",
            CONF_SITE_DESC,
            url("/admin"),
            url("/admin/assets/images/image.jpg"),
            false
        );

        echo $this->view->render("widgets/scheduling/types", [
            "app" => "scheduling/types",
            "head" => $head
        ]);
    }

    /**
     * @param array|null $data
     * @throws \Exception
     */
    public function type(?array $data): void
    {
        //create
        if (!empty($data["action"]) && $data["action"] == "create") {
            $data = filter_var_array($data, FILTER_SANITIZE_STRIPPED);
            
            $typeCreate = new Type();

            $typeCreate->name =  $data['name'];
            $typeCreate->uri = str_slug($typeCreate->name);

            if (!$typeCreate->save()) {
                $json["message"] = $typeCreate->message()->render();
                echo json_encode($json);
                return;
            }

            $this->message->success("Tipo de Serviço criado com sucesso...")->flash();
            $json["redirect"] = url("/admin/scheduling/types");
            //$json["redirect"] = url("/admin/scheduling/types/{$categoryCreate->id}");

            echo json_encode($json);
            return;
        }

        $typeEdit = null;
        if (!empty($data["type_id"])) {
            $typeId = filter_var($data["type_id"], FILTER_VALIDATE_INT);
            $typeEdit = (new Type())->findById($typeId);
        }

        $head = $this->seo->render(
            CONF_SITE_NAME . " | Tipo de Serviço",
            CONF_SITE_DESC,
            url("/admin"),
            url("/admin/assets/images/image.jpg"),
            false
        );

        echo $this->view->render("widgets/scheduling/type", [
            "app" => "scheduling/types",
            "head" => $head,
            "type" => $typeEdit
        ]);
    }

    /**
     * @param array|null $data
     */
    public function time_schedules(?array $data): void
    {
        $head = $this->seo->render(
            CONF_SITE_NAME . " | Horários de Agendamento",
            CONF_SITE_DESC,
            url("/admin"),
            url("/admin/assets/images/image.jpg"),
            false
        );

        echo $this->view->render("widgets/scheduling/time_schedules", [
            "app" => "scheduling/time-schedules",
            "head" => $head
        ]);
    }

     /**
     * @param array|null $data
     * @throws \Exception
     */
    public function time_schedule(?array $data): void
    {
        //create
        if (!empty($data["action"]) && $data["action"] == "create") {
            $data = filter_var_array($data, FILTER_SANITIZE_STRIPPED);
            
            $timeScheduleCreate = new Time();

            $timeScheduleCreate->allowed_time_at = date_fmt_back($data["allowed_time"]);

            if (!$timeScheduleCreate->save()) {
                $json["message"] = $timeScheduleCreate->message()->render();
                echo json_encode($json);
                return;
            }

            $this->message->success("Horário para Agendamento criado com sucesso...")->flash();
            $json["redirect"] = url("/admin/scheduling/time-schedules");
            //$json["redirect"] = url("/admin/scheduling/types/{$categoryCreate->id}");

            echo json_encode($json);
            return;
        }

        $timeScheduleEdit = null;
        if (!empty($data["type_id"])) {
            $timeId = filter_var($data["time_id"], FILTER_VALIDATE_INT);
            $timeScheduleEdit = (new Time())->findById($timeId);
        }

        $head = $this->seo->render(
            CONF_SITE_NAME . " | Tipo de Serviço",
            CONF_SITE_DESC,
            url("/admin"),
            url("/admin/assets/images/image.jpg"),
            false
        );

        echo $this->view->render("widgets/scheduling/time_schedule", [
            "app" => "scheduling/time-schedules",
            "head" => $head,
            "type" => $timeScheduleEdit
        ]);
    }

}