<?php
use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent
{
  public $name = "";

  # Tells Eloquent witch fields you want to be filled
  protected $fillable = ["username", "email"];
}
