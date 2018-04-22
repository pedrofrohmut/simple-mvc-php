<?php
class Home extends Controller
{
  # $name is fill by the url[2+] = params
  # u can put more params for this method that will capture further url.params
  public function index($name = "")
  {
    # Finds, require a returns an instance of model class "User"
    $user = $this->model("User");
    # Set to the instance generated the attr name
    $user->name = $name;

    # Calls the view of the controller
    $this->view("home/index", ["name" => $user->name]);
  }

  public function create($username = "", $email = "")
  {
    # Eloquent method of create() **User extends Eloquent
    User::create([
      "username" => $username,
      "email" => $email
    ]);
  }
}
