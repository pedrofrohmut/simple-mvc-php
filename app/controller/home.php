<?php
/**
*     The default home controller, called when no controller/method has been
* passed to the application.
*/
class Home extends Controller {
  /**
  *  The dafault controller
  *  @return void
  */
  public function index($name = "alex", $mood = "happy") {
    $user = $this->model("user");
    $user->name = $name;

    $this->view("home/index", [
      "name" => $user->name,
      "mood" => $mood
    ])
  }

  public function test() {
    echo "Test";
  }
}
