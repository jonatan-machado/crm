<?php

namespace Source\App\Admin;

use Source\Models\Schedule;
use Source\Models\Client;
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
            $content = $data["content"];
            $data = filter_var_array($data, FILTER_SANITIZE_STRIPPED);

            $scheduleCreate = new Schedule();


            $scheduleCreate->author = $data["author"];
            /*
            $postCreate->category = $data["category"];
            $postCreate->title = $data["title"];
            $postCreate->uri = str_slug($postCreate->title);
            $postCreate->subtitle = $data["subtitle"];
            $postCreate->content = str_replace(["{title}"], [$postCreate->title], $content);
            $postCreate->video = $data["video"];
            $postCreate->status = $data["status"];
            $postCreate->post_at = date_fmt_back($data["post_at"]);*/
      

            if (!$scheduleCreate->save()) {
                $json["message"] = $scheduleCreate->message()->render();
                echo json_encode($json);
                return;
            }

            $this->message->success("Agendado com sucesso...")->flash();
            $json["redirect"] = url("/admin/agendamento/post/{$scheduleCreate->id}");

            echo json_encode($json);
            return;            
        }
    }
}