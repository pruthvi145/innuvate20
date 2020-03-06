<?php 
$team_members = [
    new Member("placeholder.png", "Swapnil Barot", "President"),
    new Member("placeholder.png", "Pruthvi Patel", "Tech Head"),
    new Member("placeholder.png", "Pruthvi Patel", "Non-Tech Head"),
    new Member("placeholder.png", "Kashish shah", "Treasurer"),
    new Member("placeholder.png", "Pruthvi Patel", "President"),
    new Member("placeholder.png", "Pruthvi Patel", "President"),
    new Member("placeholder.png", "Pruthvi Patel", "President"),
    new Member("placeholder.png", "Pruthvi Patel", "President"),
    new Member("placeholder.png", "Pruthvi Patel", "President"),
    new Member("placeholder.png", "Pruthvi Patel", "President"),
];

class Member{
    public $avatar; 
    public $name;
    public $role;
    
    
  function __construct($avatar,$name,$role) {
    $this->name = $name;
    $this->role = $role;
    $this->avatar = $avatar;
  }
}